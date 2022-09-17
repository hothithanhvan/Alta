<?php

namespace App\Http\Controllers;

use App\Models\Number;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class NumberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $numbers = Number::latest()->paginate(10);
        if ($key = request()->key) {
            $numbers = Number::orderBy('id', 'desc')->where('mathietbi','LIKE','%'.$key."%")->paginate(5);
        }
        return view('number.index',compact('numbers'))
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
        return view('number.create',compact('services'));
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
            'tendichvu' => 'required',
        ]);
        $dt = Carbon::create(now()->year, now()->month, now()->day, 17, 30, 00);
        DB::table('numbers')->insert([
            'tendichvu' => $request->tendichvu,
            'thoigiancap' => now(),
            'hansd' => $dt,
            'date' => now()->toDateString(),
            'day' => now()->day,
            'month' => now()->month,
            'year' => now()->year,
        ]);
        return redirect()->route('number.index')
                        ->with('success','number created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Number  $number
     * @return \Illuminate\Http\Response
     */
    public function show(Number $number)
    {
        return view('number.show',compact('number'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Number  $number
     * @return \Illuminate\Http\Response
     */
    public function edit(Number $number)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Number  $number
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Number $number)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Number  $number
     * @return \Illuminate\Http\Response
     */
    public function destroy(Number $number)
    {
        //
    }
    public function date(Request $request)
    {
        $output= "";
       $number = DB::table('numbers')
       ->whereBetween('date', [$request->from_date, $request->to_date])
       ->get();
      foreach ($number as $number)
        {
            if ($number->trangthai == 1)
            {
                $number->trangthai = "Hoạt động";
            }
            else
            {
                $number->trangthai = "Ngưng hoạt động";
            }
            $output.=
            '<tr>
            <td>'.$number->stt.'</td>
            <td>'.$number->tenkh.'</td>
            <td>'.$number->tendichvu.'</td>
            <td>'.$number->thoigiancap.'</td>
            <td>'.$number->hansd.'</td>
            <td>'.$number->trangthai.'</td>
            <td>'.$number->nguoncap.'</td>
            <td>'.'<a href="number/'.$number->id.'">'.'Chi tiết</a>'.'</td>
            <td>'.'<a href="number/'.$number->id.'/edit">'.'Cập nhật</a>'.'</td>

            </tr>' ;
        }
        return response($output);
     }
}
