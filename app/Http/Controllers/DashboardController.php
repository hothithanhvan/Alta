<?php

namespace App\Http\Controllers;

use App\Models\Dashboard;
use Illuminate\Http\Request;
use App\Models\Device;
use App\Models\Service;
use App\Models\Number;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Dashboard::get()->first() == null){
        DB::table('dashboards')->insert([
            'device_on' => DB::table('devices')->where('trangthaihoatdong', 1)->count(),
            'device_off' => DB::table('devices')->where('trangthaihoatdong', 2)->count(),
        ]);
        DB::table('dashboards')->insert([
            'service_on' => DB::table('services')->where('trangthaihoatdong', 1)->count(),
            'service_off' => DB::table('services')->where('trangthaihoatdong', 2)->count(),
        ]);
        DB::table('dashboards')->insert([
            'number_wait' => DB::table('numbers')->where('trangthai', 0)
            ->where('date',now()->toDateString())->count(),
            'number_used' => DB::table('numbers')->where('trangthai', 1)
            ->where('date',now()->toDateString())->count(),
            'number_pass' => DB::table('numbers')->where('trangthai', 2)
            ->where('date',now()->toDateString())->count(),
        ]);
    }
    else{
    DB::table('dashboards')->update([
        'device_on' => DB::table('devices')->where('trangthaihoatdong', 1)->count(),
        'device_off' => DB::table('devices')->where('trangthaihoatdong', 2)->count(),
    ]);
    DB::table('dashboards')->update([
        'service_on' => DB::table('services')->where('trangthaihoatdong', 1)->count(),
        'service_off' => DB::table('services')->where('trangthaihoatdong', 2)->count(),
    ]);
    DB::table('dashboards')->update([
        'number_wait' => DB::table('numbers')->where('trangthai', 0)
        ->count(),
        'number_used' => DB::table('numbers')->where('trangthai', 1)
        ->where('date',now()->toDateString())->count(),
        'number_pass' => DB::table('numbers')->where('trangthai', 2)
        ->where('date',now()->toDateString())->count(),
    ]);
}

        $dashboard = Dashboard::get()->first();
        return view('dashboard.dashboardDay',compact('dashboard'));
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
     * @param  \App\Models\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function show(Dashboard $dashboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function edit(Dashboard $dashboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dashboard $dashboard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dashboard $dashboard)
    {
        //
    }
}
