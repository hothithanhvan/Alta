<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/quenmatkhau', function () {
    return view('login.forgetPass');
});
Route::get('/datlaimatkhau', function () {
    return view('login.getnewPass');
});
Route::get('/taikhoan', function () {
    return view('login.account');
});
