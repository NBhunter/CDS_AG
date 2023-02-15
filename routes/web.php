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
    Route::get('/phieudanhgia2','App\Http\Controllers\DanhGia2Controller@getCauHoi' );
    Route::get('/phieudanhgia3','App\Http\Controllers\DanhGia3Controller@getCauHoi' );
    //phần chức năng trang admin
    Route::get('/admin/main','App\Http\Controllers\AdminController@getdashboard' );
    //form thêm phiếu
    Route::get('/admin/themcauhoiso1','App\Http\Controllers\DanhGia1Controller@getidCauHoi' );
    Route::get('/admin/themcauhoiso2','App\Http\Controllers\DanhGia2Controller@getidCauHoi' );
    Route::get('/admin/themcauhoiso3','App\Http\Controllers\DanhGia3Controller@getidCauHoi' );

    //lưu phiếu
    Route::post('/save-cauhoi','App\Http\Controllers\DanhGia1Controller@saveCauHoi');
    Route::post('/save-cauhoi_p2','App\Http\Controllers\DanhGia2Controller@saveCauHoi');
    Route::post('/save-cauhoi_p3','App\Http\Controllers\DanhGia3Controller@saveCauHoi');
    //lấy user
    Route::get('/admin/user','App\Http\Controllers\AdminController@getuser');

    //sử lý user

    Route::get('/role/{user_id}','App\Http\Controllers\AdminController@getdetail');

    Route::get('/logout','Laravel\Fortify\Http\Controllers\AuthenticatedSessionController@destroy' );


});
// Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
