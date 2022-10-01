<?php

namespace App\Http\Controllers;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Helpers\LogActivity;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;


class LoginController extends Controller
{
    public function index()
    {
        return view('login.login');
    }
    
    public function store(Request $request)
    {
         
        $this->validate($request, [
            'tendn' => 'required',
            'password' => 'required',
        ]);
        if (Auth::attempt([
                'tendn' => $request->input('tendn'),
                'password' => $request->input('password'),
            ] )) {

                $id = Auth::id();
            $users = DB::select('select * from users where id = :id', ['id' => $id]);
            LogActivity::addToLog('Đăng nhập',now(), Auth::user()->tendn);
            return view('login.account',compact('users'));
        } 
        Session::flash('error', 'Tên đăng nhập hoặc Password không đúng');
        return redirect()->back();
    }
    public function showUser($id) 
    {
        $users = DB::select('select * from users where id = :id', ['id' => $id]);
        return view('login.account', compact('users'));
    }

    public function imageUpload(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $id = Auth::id();
        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('images'), $imageName);
        DB::table('users')->where('id', Auth::id())->update(['image'=> $imageName]);
        $id = Auth::id();
        $users = DB::select('select * from users where id = :id', ['id' => $id]);
        
        return redirect()->route('user',$id);
    }

    public function logout(Request $request)
    {
        LogActivity::addToLog('Đăng xuất',now(), Auth::user()->tendn);
        Auth::logout();
        
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
        
        return redirect('/');
    }
    public function forgetPassword()
    {
        return view('login.forgetPass');
    }

    public function enterMail(Request $request)
    {
        $request->validate([
            'email' => 'required|exists:users',
        ]);
        $name = 'test name for email';
        $value = $request->session()->put('key', $request->email);
        Mail::send('welcome', compact('name'), function($mail){
        $email = $_REQUEST['email'];
        $mail->subject('Lấy lại mật khẩu');
        $mail->to($email, '');
        });
}

        public function getnewPass()
        {
            
            return view('login.getnewPass');
        }
        
        public function storenewPass(Request $request) 
        {
            $email = session()->get('key');
            $x = Hash::make($request->password);
            DB::table('users')->where('email', $email)->update(['password'=> $x]);
            return redirect()->route('login');
        }

}
