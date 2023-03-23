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

Route::get('/','App\Http\Controllers\homeController@index' );
Route::get('/trangchu','App\Http\Controllers\homeController@index' );
Route::get('/post1', function () {
    return view('home.post');
});

Route::get('/watch/{idTin}','App\Http\Controllers\TinTucController@getXemTinDetail' );
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

// doanh nghiep
    Route::get('/dnviews','App\Http\Controllers\DoanhNghiepController@getdanhnghiep' );

    // phần thông tin doanh nghiệp
    Route::get('/profile', 'App\Http\Controllers\DoanhNghiepController@getprofile' );
    Route::post('/update_profile', 'App\Http\Controllers\DoanhNghiepController@updateprofile' );
    Route::post('/change_password', 'App\Http\Controllers\DoanhNghiepController@ChangePassword' );
    Route::post('/congkhaidoanhnghiep', 'App\Http\Controllers\DoanhNghiepController@thaydoitranthai');

    Route::get('/phieudanhgia1','App\Http\Controllers\DanhGia\DanhGia1Controller@getCauHoi' );
    Route::get('/phieudanhgia2','App\Http\Controllers\DanhGia\DanhGia2Controller@getCauHoi' );
    Route::get('/phieudanhgia3','App\Http\Controllers\DanhGia\DanhGia3Controller@getCauHoi' );
    Route::get('/phieudanhgia4','App\Http\Controllers\DanhGia\DanhGia4Controller@getCauHoi' );
    //phần chức năng trang admin
    Route::get('/admin/main','App\Http\Controllers\AdminController@getdashboard' );
    // thêm ngành nghề

    Route::get('/admin/themnganhnghe','App\Http\Controllers\AdminController@viewnganhnghe');
    Route::get('/admin/themloaihinh','App\Http\Controllers\AdminController@viewloaihinh');
    Route::post('/save-nganhnghe','App\Http\Controllers\AdminController@savenganhnghe');
    Route::post('/save-loaihinh','App\Http\Controllers\AdminController@saveloaihinh');

    //form thêm phiếu
    Route::get('/admin/themcauhoiso1','App\Http\Controllers\DanhGia\DanhGia1Controller@getidCauHoi' );
    Route::get('/admin/themcauhoiso2','App\Http\Controllers\DanhGia\DanhGia2Controller@getidCauHoi' );
    Route::get('/admin/themcauhoiso3','App\Http\Controllers\DanhGia\DanhGia3Controller@getidCauHoi' );
    //thêm tin tức
    Route::get('/admin/themtintuc','App\Http\Controllers\TinTucController@getidThemTin' );
    Route::get('/admin/binhluan','App\Http\Controllers\BinhLuanController@getidBinhLuan' );
    Route::get('/admin/xemtin','App\Http\Controllers\TinTucController@getXemTin' );
    Route::get('/admin/xemloaitin','App\Http\Controllers\AdminController@getLoaiTin' );
    Route::post('/save_Tin','App\Http\Controllers\TinTucController@saveTin');
    //lưu phiếu
    Route::post('/save-cauhoi','App\Http\Controllers\DanhGia\DanhGia1Controller@saveCauHoi');
    Route::get('/admin/list-phieu1','App\Http\Controllers\DanhGia\DanhGia1Controller@getquestlist');
    Route::get('/admin/phieu1-edit/{idcauhoi}','App\Http\Controllers\DanhGia\DanhGia1Controller@getquestdetail');
    Route::post('/update-cauhoi/{idcauhoi}','App\Http\Controllers\DanhGia\DanhGia1Controller@updateCauHoi');
    // câu trả lời phiếu 1
    Route::post('/request_cauhoi_p1','App\Http\Controllers\DanhGia\DanhGia1Controller@DanhGia');
    // câu trả lời phiếu 2
    Route::post('/request_cauhoi_p2','App\Http\Controllers\DanhGia\DanhGia2Controller@DanhGia');


    Route::post('/save-cauhoi_p2','App\Http\Controllers\DanhGia\DanhGia2Controller@saveCauHoi');
    Route::post('/save-cauhoi_p3','App\Http\Controllers\DanhGia\DanhGia3Controller@saveCauHoi');
    Route::post('/save-cauhoi_p4','App\Http\Controllers\DanhGia\DanhGia4Controller@saveCauHoi');

    //trả lời phiếu số 4
    Route::post('/request-cauhoi_p4','App\Http\Controllers\DanhGia\DanhGia4Controller@requestCauHoi');
    //xem các phiếu số 4 đã gửi
    Route::get('/admin/xemphieuso4','App\Http\Controllers\DanhGia\DanhGia4Controller@getCauHoi' );
    //lấy user
    Route::get('/admin/user','App\Http\Controllers\AdminController@getuser');

    //sử lý user

    Route::get('/role/{user_id}','App\Http\Controllers\AdminController@getdetail');
    Route::post('/update_user','App\Http\Controllers\AdminController@saveUser');


    Route::post('/update_LinhVuc','App\Http\Controllers\TrangTinController@UpdateLinhVuc');
    //xử lý lĩnh vực
    Route::get('/admin/xem_linh_vuc','App\Http\Controllers\TrangTinController@getLinhVuc');
    Route::get('/edit_LV/{linhvuc_id}','App\Http\Controllers\TrangTinController@getLinhVucchitiet');
    Route::post('/delete_LV','App\Http\Controllers\TrangTinController@DeleteLinhVuc');
    Route::get('/new_LV','App\Http\Controllers\TrangTinController@getLinhVucnew');

    // quản lý slide
    Route::get('/admin/new_slide','App\Http\Controllers\TrangTinController@getaddslide');
    Route::get('/admin/slide_list','App\Http\Controllers\TrangTinController@getslides');
    Route::post('/save_slide','App\Http\Controllers\TrangTinController@saveslide');

    Route::get('/logout','Laravel\Fortify\Http\Controllers\AuthenticatedSessionController@destroy' );

    // Phần Chuyên gIA
    // Route::get('/chitiet_P1/{IDPhieu1}', 'App\Http\Controllers\ChuyenGiaController@getdashboard' );
    // lấy phiếu 1
    Route::get('/chuyengia/home', 'App\Http\Controllers\ChuyenGiaController@getdashboard' );
    Route::get('/chuyengia/P1_DGM', 'App\Http\Controllers\ChuyenGiaController@getidDGMoi_P1' );
    Route::get('/chuyengia/P1_Tatca', 'App\Http\Controllers\ChuyenGiaController@getTatCa_P1' );
    Route::get('/chuyengia/P1_ChuaDG', 'App\Http\Controllers\ChuyenGiaController@getChuaDanhGia_P1' );
    Route::get('/chuyengia/P1_DaDG', 'App\Http\Controllers\ChuyenGiaController@getDaDanhGia_P1' );
    // Phiếu 2
    Route::get('/chuyengia/P2_DGMoi', 'App\Http\Controllers\ChuyenGiaController@getDGMoi_P2' );
    Route::get('/chuyengia/P2_DaDG', 'App\Http\Controllers\ChuyenGiaController@getDaDanhGia_P2' );
    Route::get('/chuyengia/P2_Tatca', 'App\Http\Controllers\ChuyenGiaController@getTatCa_P2' );
    Route::get('/chuyengia/P2_ChuaDG', 'App\Http\Controllers\ChuyenGiaController@getChuaDanhGia_P2' );
    Route::get('/chuyengia/P3_DGMoi', 'App\Http\Controllers\ChuyenGiaController@getDGMoi_P3' );
    Route::get('/chuyengia/P3_Tatca', 'App\Http\Controllers\ChuyenGiaController@getTatCa_P3' );
    Route::get('/chuyengia/P3_DaDG', 'App\Http\Controllers\ChuyenGiaController@getDaDanhGia_P3' );
    Route::get('/chuyengia/P3_ChuaDG', 'App\Http\Controllers\ChuyenGiaController@getChuaDanhGia_P3' );
    Route::get('/chuyengia/P4_DGMoi', 'App\Http\Controllers\ChuyenGiaController@getDGMoi_P4' );
    Route::get('/chuyengia/P4_Tatca', 'App\Http\Controllers\ChuyenGiaController@getTatCa_P4' );
    Route::get('/chuyengia/P4_DaDG', 'App\Http\Controllers\ChuyenGiaController@getDaDanhGia_P4' );
    Route::get('/chuyengia/P4_ChuaDG', 'App\Http\Controllers\ChuyenGiaController@getChuaDanhGia_P4' );
// chi tiết
Route::get('/chuyengia/P1_Chitiet/{IDPhieu1}', 'App\Http\Controllers\ChuyenGiaController@getChiTiet_P1' );
Route::get('/chuyengia/kqphieu1/{IDPhieu1}', 'App\Http\Controllers\ChuyenGiaController@getkqPhieu1' );

Route::post('/thongbao', 'App\Http\Controllers\ChuyenGiaController@thongbaodanhgia');

// Hiệp hội
Route::get('/HLH/home', 'App\Http\Controllers\HiepHoiController@gethome' );

});

// Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
