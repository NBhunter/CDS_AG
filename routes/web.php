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

Route::get('/', function () {
    return view('home.home');
});
Route::get('/home', function () {
    return view('DoanhNghiep.Dashboard');
});
Route::get('/trangchu', function () {
    return view('home.home');
});

// Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');


    Route::get('/dnviews','App\Http\Controllers\DoanhNghiepController@getdanhnghiep' );
    Route::get('/phieudanhgia1','App\Http\Controllers\DanhGia1Controller@getCauHoi' );
    Route::get('/admin/main','App\Http\Controllers\AdminController@getdashboard' );

    Route::get('/admin/themcauhoiso1','App\Http\Controllers\DanhGia1Controller@getidCauHoi' );
    Route::get('/logout','Laravel\Fortify\Http\Controllers\AuthenticatedSessionController@destroy' );
});
// Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
