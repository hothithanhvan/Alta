<?php


namespace App\Helpers;
use Illuminate\Support\Facades\Request;
use App\Models\LogActivity as LogActivityModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Collection;

 
class LogActivity
{


    public static function addToLog($subject, $time, $tendn)
    {
    	$log = [];
    	$log['subject'] = $subject;
    	$log['method'] = $time;
    	$log['ip'] = Request::ip();
    	$log['username'] = $tendn;
    	LogActivityModel::create($log);
    }


    public static function logActivityLists()
    {
		$a = LogActivityModel::latest()->paginate(5);
    	return $a;
    }


}
