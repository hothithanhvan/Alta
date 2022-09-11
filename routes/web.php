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
Route::post('/login', [LoginController::class,'store' ]);
Route::get('/logout', [LoginController::class,'logout']);
Route::get('/forgetPassword', [LoginController::class,'forgetPassword']);
Route::post('/forgetPassword', [LoginController::class,'enterMail'])->name('enterMail');
Route::post('/getnewPass',[LoginController::class,'getnewPass'])->name('getnewPass');

Route::middleware(['auth'])->group(function () {
    

    Route::resource('device', DeviceController::class);

    Route::resource('service', ServiceController::class);

    Route::resource('number', NumberController::class);

    Route::resource('account', AccountController::class);

    Route::resource('role', RoleController::class);

    Route::resource('dairy ',DairyController::class);

    Route::resource('report', ReportController::class);

    Route::resource('dashboard', DashboardController::class);

});


