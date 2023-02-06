<?php


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
    return view('home.frontend');
});
Route::get('/trangchu', function () {
    return view('home.home');
});
Route::get('/danhgia', function () {
    return view('danhgia.phieu1');
});

Route::get('/phieudanhgia1','App\Http\Controllers\DanhGia1Controller@getCauHoi' );
