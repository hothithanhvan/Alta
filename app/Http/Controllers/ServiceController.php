<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Helpers\LogActivity;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\Number;
use Illuminate\Support\Facades\Session;

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
            'madichvu' => 'required|unique:services',
        'tendichvu' => 'required',
        'mota' => 'required',
        'batdau' => 'required',
        'ketthuc' => 'required',
        'prefix' => 'required',
        'surfix' => 'required',
        ],
        [
            'madichvu.required' => 'Nhập đầy đủ các trường thông tin',
        ]);
        Service::create($request->all());

        LogActivity::addToLog('Thêm dịch vụ',now(), Auth::user()->tendn);
        return redirect()->route('service.index')
                        ->with('success','service created successfully.');
                        
    }
  
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Service $service)
    {
        $tendichvu = $request->session()->put('tendv', $service->tendichvu);
        $numbers = Number::latest()->where('tendichvu',$service->tendichvu)->paginate(10);
        return view('service.show',compact('service','numbers'));
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
            'mota' => 'required',
        'batdau' => 'required',
        'ketthuc' => 'required',
        'prefix' => 'required',
        'surfix' => 'required',
        ],
        [
            'madichvu.required' => 'Nhập đầy đủ các trường thông tin',
        ]);
      
        $service->update($request->all());
        LogActivity::addToLog('Sửa dịch vụ',now(), Auth::user()->tendn);
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
    public function dropdown(Request $request)
    {
        $output = "";
        if( $request->hoatdong == 0 )
        {
            if ($request->from_date == null && $request->to_date == null){
            $service = Service::where('tendichvu','LIKE','%'.$request->search.'%')->get();
            }
            else if ($request->from_date !== null && $request->to_date !== null){
            $service = Service::whereBetween('created_at', [$request->from_date, $request->to_date])
            ->where('tendichvu','LIKE','%'.$request->search.'%')
            ->get();
            }   
        }
        else if ( $request->from_date == null || $request->to_date == null)
        {
            $service = Service::where('tendichvu','LIKE','%'.$request->search.'%')
            ->where('trangthaihoatdong',$request->hoatdong)->get();
        }
        else
        {
            $service = Service::where('trangthaihoatdong',$request->hoatdong)
            ->where('tendichvu','LIKE','%'.$request->search.'%')
            ->whereBetween('created_at', [$request->from_date, $request->to_date])
            ->get();
        }
        
        foreach ($service as $service)
        {
            
            if ($service->trangthaihoatdong == 1)
            {
                $service->trangthaihoatdong = "Hoạt động";
            }
            else 
            {
                $service->trangthaihoatdong = "Ngưng hoạt động";
            }
            $output.=
            '<tr>
            <td>'.$service->madichvu.'</td>
            <td>'.$service->tendichvu.'</td>
            <td>'.$service->mota.'</td>
            <td>'.$service->trangthaihoatdong.'</td>
            <td>'.'<a href="service/'.$service->id.'">'.'Chi tiết</a>'.'</td>
            <td>'.'<a href="service/'.$service->id.'/edit">'.'Cập nhật</a>'.'</td>

            </tr>' ;
        }
        return response($output);
    }
   public function search(Request $request)
{
    $id = session()->get('tendv');
    $output1 = "";
    if( $request->hoatdong == null )
    {
        if ($request->from_date == null && $request->to_date == null){
        $number = Number::where('stt','LIKE','%'.$request->search.'%')
        ->where('tendichvu',$id)
        ->get();
        }
        else if ($request->from_date !== null && $request->to_date !== null){
        $number = Number::whereBetween('date', [$request->from_date, $request->to_date])
        ->where('tendichvu',$id)
        ->where('stt','LIKE','%'.$request->search.'%')
        ->get();
        }   
    }
    else if ( $request->from_date == null || $request->to_date == null)
    {
        $number = Number::where('stt','LIKE','%'.$request->search.'%')
        ->where('tendichvu',$id)
        ->where('trangthai',$request->hoatdong)->get();
    }
    else
    {
        $number = Number::where('trangthai',$request->hoatdong)
        ->where('stt','LIKE','%'.$request->search.'%')
        ->whereBetween('date', [$request->from_date, $request->to_date])
        ->where('tendichvu',$id)
        ->get();
    }
    foreach ($number as $number)
    {
        
        if ($number->trangthai == 0)
        {
            $number->trangthai = "Đang chờ";
        }
        else if ($number->trangthai ==1)
        {
            $number->trangthai= "Đã sử dụng";
        }
        else{
            $number->trangthai= "Bỏ qua";
        }
        $output1.=
        '<tr>
        <td>'.$number->stt.'</td>
        <td>'.$number->trangthai.'</td>
        </tr>' ;
    }
    return response($output1);

}        
    
}

