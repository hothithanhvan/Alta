<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\device\DeviceController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NumberController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\DairyController;
use App\Http\Controllers\RoleController;


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

Route::get('/', function () {
    return view('login.login');
});
// Route::get('/quenmatkhau', function () {
//     return view('login.forgetPass');
// });
// Route::get('/datlaimatkhau', function () {
//     return view('login.getnewPass');
// });
// Route::get('/taikhoan', function () {
//     return view('login.account');
// });

Route::resource('device', DeviceController::class);

Route::resource('service', ServiceController::class);

Route::resource('number', NumberController::class);

Route::resource('account', AccountController::class);

Route::resource('role', RoleController::class);

Route::resource('dairy ',DairyController::class);

Route::resource('report', ReportController::class);






