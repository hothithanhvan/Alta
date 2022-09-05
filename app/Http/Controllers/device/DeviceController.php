<?php

namespace App\Http\Controllers\device;

use App\Http\Controllers\Controller;
use App\Models\Device;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;

class DeviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $devices = Device::latest()->paginate(2);
        if ($key = request()->key) {
            $devices = Device::orderBy('id', 'desc')->where('mathietbi','LIKE','%'.$key."%")->paginate(5);
        }
        return view('device.index',compact('devices'))
                 ->with('i', (request()->input('page', 1) - 1) * 5);
    }
  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('device.create');
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
            'mathietbi' => 'required',
            'tenthietbi' => 'required',
            'diachiIP' => 'required'
            // 'trangthaihoatdong' => 'required',
            // 'trangthaiketnoi' => 'required',
            // 'dichvusudung' => 'required',
        ]);
      
        Device::create($request->all());
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
        return view('device.show',compact('device'));
    }
  
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Device  $device
     * @return \Illuminate\Http\Response
     */
    public function edit(Device $device)
    {
        return view('device.edit',compact('device'));
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
            // 'trangthaihoatdong' => 'required',
            // 'trangthaiketnoi' => 'required',
            // 'dichvusudung' => 'required',
        ]);
      
        $device->update($request->all());
      
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

