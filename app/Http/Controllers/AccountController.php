<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Helpers\LogActivity;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $role = DB::table('roles')->get();
        $accounts = User::latest()->paginate(10);
        return view('account.index',compact('accounts','role'))
                 ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $role = DB::table('roles')->get();
        return view('account.create',compact('role'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'tendn' => 'required|unique:users',
            'hoten' => 'required',
            'sdt' => 'required',
            'email' => 'required',
            'password' => 'required',
            'vaitro' => 'required',
        ],
    [
        'tendn.required' => 'Nhập đầy đủ các trường thông tin'
    ]
    );
        $a = DB::table('roles')->where('tenvaitro',$request->vaitro)->pluck('chucnang');
        User::create($request->all());
        $password = Hash::make($request->password);
        foreach ($a as $a){
            DB::table('users')->where('tendn',$request->tendn)->update([
            'password' => $password,
            'quyen' => $a, 
        ]);
        }
        LogActivity::addToLog('Thêm tài khoản',now(), Auth::user()->tendn);
        return redirect()->route('account.index')
                        ->with('success','account created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $account
     * @return \Illuminate\Http\Response
     */
    public function show(User $account)
    {
        return view('login.account',compact('account'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $account
     * @return \Illuminate\Http\Response
     */
    public function edit(User $account)
    {
        $role = DB::table('roles')->get();
        return view('account.edit',compact('role','account'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $account
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $account)
    {
        $request->validate([
            'tendn' => 'required',
            'hoten' => 'required',
            'sdt' => 'required',
            'email' => 'required',
            'vaitro' => 'required',
            'tinhtrang' => 'required',
        ],
        [
            'tendn.required' => 'Nhập đầy đủ các trường thông tin',
        ]);
        
        $a = DB::table('roles')->where('tenvaitro',$request->vaitro)->pluck('chucnang');
        $b = DB::table('users')->where('tendn',$request->tendn)->pluck('password')->first();
        if($request->password == $b)
        {
            foreach ($a as $a){
                DB::table('users')->where('tendn',$request->tendn)->update([
                'tendn' => $request->tendn,
                'hoten' => $request->hoten,
                'sdt' => $request->sdt,
                'email' => $request->email,
                'vaitro' => $request->vaitro,
                'tinhtrang' =>  $request->tinhtrang,
                'quyen' => $a, 
            ]);
        }
    }
        else if ($request->password !== $b)
        {
            $password = Hash::make($request->password);
            foreach ($a as $a){
                DB::table('users')->where('tendn',$request->tendn)->update([
                'password' => $password,
                'quyen' => $a, 
                'tendn' => $request->tendn,
                'hoten' => $request->hoten,
                'sdt' => $request->sdt,
                'email' => $request->email,
                'vaitro' => $request->vaitro,
                'tinhtrang' =>  $request->tinhtrang,
            ]);
            }
        }
        LogActivity::addToLog('Sửa tài khoản',now(), Auth::user()->tendn);
        return redirect()->route('account.index')
                        ->with('success','account updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $account
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $account)
    {
        //
    }
    public function search(Request $request)
    {

        $output = "";
        if( $request->dropdown == 0 )
        {
            $account = User::where('tendn','LIKE','%'.$request->search.'%')->get();
        }
        else
        {
            $account = User::where('vaitro',$request->dropdown)
            ->where('tendn','LIKE','%'.$request->search.'%')->get();
        }
       
        
        foreach ($account as $account)
        {
            $output.=
            '<tr>
            <td>'.$account->tendn.'</td>
            <td>'.$account->hoten.'</td>
            <td>'.$account->sdt.'</td>
            <td>'.$account->email.'</td>
            <td>'.$account->vaitro.'</td>
            <td>'.$account->trangthaihoatdong.'</td>
            <td>'.'<a href="device/'.$account->id.'/edit">'.'Cập nhật</a>'.'</td>   
            </tr>' ;
        }
        return response($output);
    }
    
}
