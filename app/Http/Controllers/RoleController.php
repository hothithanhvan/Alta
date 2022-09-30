<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Helpers\LogActivity;
use Illuminate\Support\Facades\Auth;
class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = DB::table('users')->get();
        $role1 = Role::latest()->get();
        foreach ($role1 as $role)
        {
            $i=0;
            foreach($users as $user)
            {
                if($user->vaitro == $role->tenvaitro)
                {
                    $i++; 
                }
            }
            DB::table('roles')->where('tenvaitro',$role->tenvaitro)->update(['songuoidung' => $i]);
    }
    $roles = Role::latest()->paginate(10);
        return view('role.index',compact('roles'))
                 ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('role.create');
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
            'tenvaitro' => 'required|unique:roles',
            'mota' => 'required',
            'chucnang' => 'required',
        ],
        [
            'tenvaitro.required' => 'Nhập đầy đủ các trường thông tin',
        ]);
      
        Role::create($request->all());
        return redirect()->route('role.index')
                        ->with('success','device created successfully.');
                        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        return view('role.edit',compact('role'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        $request->validate([
            'tenvaitro' => 'required',
            // 'songuoidung' => 'required',
            'mota' => 'required',
        ],
        [
            'tenvaitro.required' => 'Nhập đầy đủ các trường thông tin',
        ]);
      
        $role->update($request->all());
      
        return redirect()->route('role.index')
                        ->with('success','role updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        //
    }
    public function search(Request $request)
    {
        $output = "";
        $role = Role::where('tenvaitro','LIKE','%'.$request->search.'%')->get();
        
        foreach ($role as $role)
        {
            $output.=
            '<tr>
            <td>'.$role->tenvaitro.'</td>
            <td>'.$role->songuoidung.'</td>
            <td>'.$role->mota.'</td>
            <td>'.'<a href="device/'.$role->id.'/edit">'.'Cập nhật</a>'.'</td>

            </tr>' ;
        }
        return response($output);
    }
}
