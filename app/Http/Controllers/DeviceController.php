<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Device;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Service;
use App\Models\dvsd;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;
use App\Helpers\LogActivity;



class DeviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $devices = Device::latest()->paginate(10);
        $a = DB::table('dvsd')->get();

        return view('device.index',compact('devices','a'))
                 ->with('i', (request()->input('page', 1) - 1) * 5);
    }
  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function dropdown(Request $request)
    {
        $output = "";
        if( $request->ketnoi == 0 && $request->hoatdong == 0 )
        {
            $device = Device::where('tenthietbi','LIKE','%'.$request->search.'%')->get();
        }
        else if ($request->hoatdong == 0 && $request->ketnoi != 0)
        {
            $device = Device::where('trangthaiketnoi',$request->ketnoi)
            ->where('tenthietbi','LIKE','%'.$request->search.'%')->get();
        }
        elseif( $request->ketnoi == 0 && $request->hoatdong != 0)
        {
            $device = Device::where('trangthaihoatdong',$request->hoatdong)
            ->where('tenthietbi','LIKE','%'.$request->search.'%')->get();
        }
        else
        {
            $device = Device::where('trangthaihoatdong',$request->hoatdong)
            ->where('tenthietbi','LIKE','%'.$request->search.'%')
            ->where('trangthaiketnoi',$request->ketnoi)->get();
        }
        
        foreach ($device as $device)
        {
            $a = DB::table('dvsd')->where('mathietbi',$device->mathietbi)->get();
            foreach ($a as $a){
                if ($a->mathietbi == $device->mathietbi)
                {
                     $device->dichvusudung = $a->tendichvu."|";     
                }
            }
            if ($device->trangthaihoatdong == 1)
            {
                $device->trangthaihoatdong = "Hoạt động";
            }
            else 
            {
                $device->trangthaihoatdong = "Ngưng hoạt động";
            }
            
            if ($device->trangthaiketnoi ==1)
            {
                $device->trangthaiketnoi = "Kết nối";
            }
            else
            {
                $device->trangthaiketnoi = "Mất kết nối";
            }
            $output.=
            '<tr>
            <td>'.$device->mathietbi.'</td>
            <td>'.$device->tenthietbi.'</td>
            <td>'.$device->diachiIP.'</td>
            <td>'.$device->trangthaihoatdong.'</td>
            <td>'.$device->trangthaiketnoi.'</td>;
            <td>'.'</td>
            <td>'.'<a href="device/'.$device->id.'">'.'Chi tiết</a>'.'</td>
            <td>'.'<a href="device/'.$device->id.'/edit">'.'Cập nhật</a>'.'</td>   
            </tr>' ;
        }
        return response($output);
    }
    
    public function create()
    {
        $services = Service::get();
        return view('device.create',compact('services'));
    }
  
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $a = Service::get();
        $b = count($a);
        $request->validate([
            'mathietbi' => 'required|unique:devices',
            'tenthietbi' => 'required',
            'diachiIP' => 'required',
            'loaithietbi' => 'required',
            'tendn' => 'required',  
            'matkhau' => 'required'
        ],
    [
        'mathietbi.required' => 'Nhập đầy đủ các trường thông tin',
    ]);
        for ($i = 1; $i <= $b; $i++) {
        $x = "id".$i."";
            if (!empty($request->$x))
            {
            DB::table('dvsd')->insert([
                'mathietbi' => $request->mathietbi,
                'tendichvu' => $request->$x,
            ]);
            }
}
        Device::create($request->all());
        LogActivity::addToLog('Thêm thiết bị',now(), Auth::user()->tendn);
        return redirect()->route('device.index')
                        ->with('success','device created successfully.');
    }
  
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Device  $device
     * @return \Illuminate\Http\Response
     */
    public function show(Device $device)
    {
        $a = DB::table('dvsd')->get()
                    ->where('mathietbi', $device->mathietbi);
        $b = DB::table('services')->get();
        return view('device.show',compact('device','a','b'));
    }
  
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Device  $device
     * @return \Illuminate\Http\Response
     */
    public function edit(Device $device)
    {
        $a = DB::table('dvsd')->get()
                    ->where('mathietbi', $device->mathietbi);
        $b = DB::table('services')->get();
        return view('device.edit',compact('device','a','b'));
    }
  
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Device  $device
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Device $device)
    {
        $request->validate([
            'mathietbi' => 'required',
            'tenthietbi' => 'required',
            'diachiIP' => 'required',
            'loaithietbi' => 'required',
            'tendn' => 'required',  
            'matkhau' => 'required'
        ],
        [
            'mathietbi.required' => 'Nhập đầy đủ các trường thông tin',
        ]);
        $a = Service::get();
        $b = count($a);
        DB::table('dvsd')->where('mathietbi',$request->mathietbi)->delete();
        for ($i = 1; $i <= $b; $i++) {
            $x = "id".$i."";
            if (!empty($request->$x))
            {
            DB::table('dvsd')->where('mathietbi',$request->mathietbi)->insert([
                'mathietbi' => $request->mathietbi,
                'tendichvu' => $request->$x,
            ]);
        }
    }
        $device->update($request->all());
        LogActivity::addToLog('Sửa thiết bị',now(), Auth::user()->tendn);
        return redirect()->route('device.index')
                        ->with('success','device updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Device  $device
     * @return \Illuminate\Http\Response
     */
    public function destroy(Device $device)
    {
        $device->delete();
       
        return redirect()->route('device.index')
                        ->with('success','device deleted successfully');
    }
    
}

