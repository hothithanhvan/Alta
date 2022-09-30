<?php

namespace App\Http\Controllers;

use App\Models\Number;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Models\Report;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Role;
use App\Exports\ReportsExport;
use Maatwebsite\Excel\Facades\Excel; 


class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('user');
       if ( !Gate::allows('user')) {
        abort(403);
    }
        $reports = Number::latest()->paginate(10);
        
        return view('report.index',compact('reports'))
                 ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function show(Report $report)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function edit(Report $report)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Report $report)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function destroy(Report $report)
    {
        //
    }
    public function search(Request $request)
    {
        $output= "";
       $report = DB::table('numbers')
       ->whereBetween('date', [$request->from_date, $request->to_date])
       ->get();
      foreach ($report as $number)
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
            <td>'.$number->tendichvu.'</td>
            <td>'.$number->thoigiancap.'</td>
            <td>'.$number->trangthai.'</td>
            <td>'.$number->nguoncap.'</td>

            </tr>' ;
        }
        return response($output);
     }
    
}
    