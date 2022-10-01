<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NumberController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\DairyController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Exports\ReportsExport;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[LoginController::class,'index'])->name('login');
Route::post('/login', [LoginController::class,'store' ])->name('store');
Route::get('/logout', [LoginController::class,'logout']);
Route::get('/forgetPassword', [LoginController::class,'forgetPassword'])->name('forgetPassword');
Route::get('/enterMail/{email}', [LoginController::class,'enterMail'])->name('enterMail');
Route::get('/getnewPass',[LoginController::class,'getnewPass'])->name('getnewPass');
Route::post('/storenewPass',[LoginController::class,'storenewPass']);

Route::middleware(['auth'])->group(function () {
    
    Route::resource('device', DeviceController::class);
    
    Route::resource('service', ServiceController::class);
    
    Route::resource('number', NumberController::class);
   
    Route::resource('account', AccountController::class);

    Route::resource('role', RoleController::class);
  
    Route::get('dairy', [DairyController::class,'logActivity'])->name('dairy');
   
     Route::resource('report', ReportController::class);

    Route::resource('dashboard', DashboardController::class);
    
    Route::get('/user/{user_id}', [LoginController::class,'showUser'])->name('user');

});
Route::get('/device/dropdown/{hoatdong}/{ketnoi}/{search}',[DeviceController::class,'dropdown']);
Route::get('/service-search/{hoatdong}/{search}/{from_date}/{to_date}',[ServiceController::class,'dropdown']);
Route::get('/number/date/{from_date}/{to_date}',[NumberController::class,'date']);
Route::get('/store-number/{tendichvu}/{thoigiancap}/{hansd}/{stt}',[NumberController::class,'store']);
Route::get('/a/{dropdown}/{search}',[AccountController::class,'search']);
Route::get('/dairy/search/{search}/{from_date}/{to_date}', [DairyController::class,'search']);
Route::get('/re/{from_date}/{to_date}',[ReportController::class,'search']);
Route::post('image-upload', [ LoginController::class, 'imageUpload' ])->name('image.upload.post');
Route::get('/show-service/{hoatdong}/{search}/{from_date}/{to_date}',[ServiceController::class, 'search']);
Route::get('/role/search/{search}', [RoleController::class, 'search']);
Route::get('/number-search/{tendichvu}/{trangthai}/{from_date}/{to_date}/{search}', [NumberController::class, 'search']);
Route::get('report-export/', [ReportsExport::class, 'export']);
Route::get('/notification', [NumberController::class, 'notification']);

Route::get('/welcome',function(){
return view('welcome');

});