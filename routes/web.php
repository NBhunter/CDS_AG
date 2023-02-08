<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
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

Route::get('/home', function () {
    return view('DoanhNghiep.Dashboard');
});
Route::get('/trangchu', function () {
    return view('home.home');
});
Route::get('/dnviews', function () {
    return view('DoanhNghiep.Dashboard');
});

Route::get('/phieudanhgia1','App\Http\Controllers\DanhGia1Controller@getCauHoi' );

// Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

