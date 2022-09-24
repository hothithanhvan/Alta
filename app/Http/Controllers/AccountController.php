<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
        if ($key = request()->key) {
            $accounts = User::orderBy('id', 'desc')->where('hoten','LIKE','%'.$key."%")->paginate(5);
        }
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
            'tendn' => 'required',
            'hoten' => 'required',
            'sdt' => 'required',
            'email' => 'required',
            'password' => 'required',
            'vaitro' => 'required',
        ]);
        $a = DB::table('roles')->where('tenvaitro',$request->vaitro)->pluck('chucnang');
        User::create($request->all());
        $password = Hash::make($request->password);
        foreach ($a as $a){
            DB::table('users')->where('tendn',$request->tendn)->update([
            'password' => $password,
            'quyen' => $a, 
        ]);
        }
        
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
        ]);
        $account->update($request->all());
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
}
