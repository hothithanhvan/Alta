<?php

namespace App\Http\Controllers;

use App\Models\Number;
use App\Models\numberDay;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use App\Models\numberMonth;

class NumberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $numbers = Number::latest()->paginate(9);
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
        $number = Number::get();
        return view('number.create',compact('services','number'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        // $request->validate([
        //     'tendichvu' => 'required',
        // ]);
        $time = now()->toDateString();
        DB::table('numbers')->insert([
            'tendichvu' => $request->tendichvu,
            'thoigiancap' => $request->thoigiancap,
            'hansd' => $request->hansd,
            'date' => $time,
            'stt' => $request->stt,
        ]);

        $number_day = numberDay::updateOrCreate(
            ['date' => now()->toDateString()],
            ['sl' => DB::table('numbers')->where('date', $time)->count(),
            'day' => now()->day,
            'month' => now()->month,
            'dangcho' => DB::table('numbers')->where('date', $time)->where('trangthai',0)->count(),
            'dasudung' => DB::table('numbers')->where('date', $time)->where('trangthai',1)->count(),
            'boqua' => DB::table('numbers')->where('date', $time)->where('trangthai',2)->count(),
        ],
        );
       
        $number_month = numberMonth::updateOrCreate(
            ['month' => now()->month],
            ['sl' => DB::table('number_days')->where('month', now()->month)->sum('sl'),
            'date' => now()->toDateString(),
            'year' => now()->year,
        ],
        );
       
    
    
        return redirect()->route('number.create');
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
    public function search(Request $request)
    {
        $output= "";
       
        if ($request->tendichvu == 0)
        {
            if ($request->trangthai == "")
            {
                if ($request->from_date == null || $request->to_date == null)
                {
                    $number = Number::where('stt','LIKE','%'.$request->search.'%')
                    ->orwhere('tendichvu','LIKE','%'.$request->search.'%')->get();
                }
                else
                {
                    $number = Number::whereBetween('date', [$request->from_date, $request->to_date])
                    ->where('stt','LIKE','%'.$request->search.'%')
                    ->get();
                }
            }
            else
            {
                if ($request->from_date == null || $request->to_date == null)
                {
                    $number = Number::where('stt','LIKE','%'.$request->search.'%')
                    ->where('trangthai',$request->trangthai)
                    ->get();
                }
                else
                {
                    $number = Number::where('stt','LIKE','%'.$request->search.'%')
                    ->where('trangthai',$request->trangthai)
                    ->whereBetween('date', [$request->from_date, $request->to_date])
                    ->get();
                }
            }
        }
        else 
        {
            if ($request->trangthai == "")
            {
                if ($request->from_date == null || $request->to_date == null)
                {
                    $number = Number::where('stt','LIKE','%'.$request->search.'%')
                    ->where('tendichvu',$request->tendichvu)->get();
                }
                else
                {
                    $number = Number::whereBetween('date', [$request->from_date, $request->to_date])
                    ->where('stt','LIKE','%'.$request->search.'%')
                    ->where('tendichvu',$request->tendichvu)
                    ->get();
                }
            }
            else
            {
                if ($request->from_date == null || $request->to_date == null)
                {
                    $number = Number::where('stt','LIKE','%'.$request->search.'%')
                    ->where('trangthai',$request->trangthai)
                    ->where('tendichvu',$request->tendichvu)
                    ->get();
                }
                else
                {
                    $number = Number::where('stt','LIKE','%'.$request->search.'%')
                    ->where('trangthai',$request->trangthai)
                    ->where('tendichvu',$request->tendichvu)
                    ->whereBetween('date', [$request->from_date, $request->to_date])
                    ->get();
                }
            }


        }
      foreach ($number as $number)
        {
            if ($number->trangthai == 0)
            {
                $number->trangthai = "Đang chờ";
            }
            else if ($number->trangthai == 1)
            {
                $number->trangthai = "Đã sử dụng";
            }
            else
            {
                $number->trangthai = "Bỏ qua";
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

            </tr>' ;
        }
        return response($output);
     }
}
