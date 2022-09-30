<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Helpers\LogActivity;
use Illuminate\Database\Eloquent\Collection;
use App\Models\Dairy;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;

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
    public function search(Request $request)
    {
       $output = "";
        if( $request->from_date == null && $request->to_date == null )
        {
            $dairys = DB::table('log_activities')->where('subject','LIKE','%'.$request->search.'%')
            ->orwhere('username','LIKE','%'.$request->search.'%')->paginate(10);
        }
        else 
        {
            $dairys = DB::table('log_activities')->whereBetween('created_at', [$request->from_date, $request->to_date])
            ->where('username','LIKE','%'.$request->search.'%')
            ->paginate(10);
        }
        foreach ($dairys as $dairy)
        {
            $output.=
            '<tr>
            <td>'.$dairy->username.'</td>
            <td>'.$dairy->time.'</td>
            <td>'.$dairy->ip.'</td>
            <td>'.$dairy->subject.'</td>
            </tr>' ;
        }

        return response($output);
    }
}