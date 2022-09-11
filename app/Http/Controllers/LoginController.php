<?php

namespace App\Http\Controllers;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Models\User;


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
                $name = Auth::user()->hoten;
            $users = DB::select('select * from users where id = :id', ['id' => $id]);
            return view('login.account',compact('users'));
        }
        
        Session::flash('error', 'Email hoặc Password không đúng');
        return redirect()->back();
    }
    public function logout(Request $request)
    {
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
            'email' => 'required|email|exists:users',
        ]);
        $email = $request->email;
        return view('login.getnewPass',compact('email'));
    }
    public function getnewPass(Request $request)
    {
        $request->validate([
            'password' => 'required',
            'password1' => 'required',
        ]);
        if ($request->get('password') == $request->get('password1')) {
            $user = User::where('email', $request->email)
            ->update(['password' => Hash::make($request->password)]);
    }
    return redirect('/');
}
}
