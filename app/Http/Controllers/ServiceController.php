<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;
use App\Helpers\LogActivity;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $services = Service::latest()->paginate(10);
        if ($key = request()->key) {
            $services = Service::orderBy('id', 'desc')->where('tendichvu','LIKE','%'.$key."%")->paginate(10);
        }
        return view('service.index',compact('services'))
             ->with('i', (request()->input('page', 1) - 1) * 5);
    }
  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('service.create');
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
            'madichvu' => 'required',
        'tendichvu' => 'required',
        ]);
      
        Service::create($request->all());

        LogActivity::addToLog('Thêm dịch vụ',now(), Auth::user()->hoten);
        //$logs = LogActivity::logActivityLists();
        return redirect()->route('service.index')
                        ->with('success','service created successfully.');
                        
    }
  
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        return view('service.show',compact('service'));
    }
  
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        return view('service.edit',compact('service'));
    }
  
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $request->validate([
            'madichvu' => 'required',
            'tendichvu' => 'required',
        ]);
      
        $service->update($request->all());
      
        return redirect()->route('service.index')
                        ->with('success','service updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $service->delete();
       
        return redirect()->route('service.index')
                        ->with('success','service deleted successfully');
    }
    
}

