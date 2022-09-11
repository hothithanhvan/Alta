<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accounts = User::latest()->paginate(2);
        if ($key = request()->key) {
            $accounts = User::orderBy('id', 'desc')->where('hoten','LIKE','%'.$key."%")->paginate(5);
        }
        return view('account.index',compact('accounts'))
                 ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('account.create');
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

        ]);

        User::create($request->all());
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
        return view('account.edit',compact('account'));
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
