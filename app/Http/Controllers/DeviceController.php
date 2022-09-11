<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Device;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Service;
use App\Models\dvsd;

class DeviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $devices = Device::latest()->paginate(5);
        $a = DB::table('dvsd')->get();
         if ($all = request()->all()) {
            if (request()->hoatdong == '0')
            {
                if (request()->ketnoi == '0')
                {
                    $devices = Device::orderBy('id', 'desc')->where('mathietbi','LIKE','%'.request()->key."%")->paginate(5);
                }
                else 
                {
                $devices = Device::orderBy('id', 'desc')->where('mathietbi','LIKE','%'.request()->key."%")
                ->where('trangthaiketnoi', request()->ketnoi)
                ->paginate(5);
                }
            }
            else if (request()->ketnoi == 0)
            {
                $devices = Device::orderBy('id', 'desc')->where('mathietbi','LIKE','%'.request()->key."%")
                ->where('trangthaihoatdong', request()->hoatdong)
                ->paginate(5);
            }
            else {
            $devices = Device::orderBy('id', 'desc')->where('mathietbi','LIKE','%'.request()->key."%")
            ->where('trangthaihoatdong', request()->hoatdong)
            ->where('trangthaiketnoi', request()->ketnoi)
            ->paginate(5);
            }
        }
        return view('device.index',compact('devices','a'))
                 ->with('i', (request()->input('page', 1) - 1) * 5);
    }
  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
            'mathietbi' => 'required',
            'tenthietbi' => 'required',
            'diachiIP' => 'required',
        ]);
        for ($i = 1; $i <= $b; $i++) {
        $x = "id".$i."";
        DB::table('dvsd')->insert([
            'mathietbi' => $request->mathietbi,
            'tendichvu' => $request->$x,
        ]);
    }
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

