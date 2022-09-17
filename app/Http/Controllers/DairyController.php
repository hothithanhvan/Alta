<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Helpers\LogActivity;
use Illuminate\Database\Eloquent\Collection;

class DairyController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {


    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function logActivity()
    {
        $logs = LogActivity::logActivityLists();

        return view('dairy.dairyUser',compact('logs'));
    }
}