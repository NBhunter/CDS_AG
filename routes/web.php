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

Route::get('/', 'App\Http\Controllers\homeController@index');
Route::get('/trangchu', 'App\Http\Controllers\homeController@index');
Route::get('/tintuc', 'App\Http\Controllers\homeController@indexAllnew');
Route::get('/tintuc/{LinhVuc}', 'App\Http\Controllers\homeController@TinLinhVucIndex');
Route::get('/dangky', 'App\Http\Controllers\homeController@registerview');
Route::post('/BinhLuan', 'App\Http\Controllers\homeController@postcomment');
Route::post('/crate_profile', 'App\Http\Controllers\homeController@crate_profile');
Route::get('/xemhoso', 'App\Http\Controllers\homeController@XemCDS');

Route::get('/searching', 'App\Http\Controllers\homeController@searching');
// Route::get('/dangky', function () {
//     return view('home.dangkydoanhnghiep');
// });

Route::get('/dashboard', function () {
    return view('DoanhNghiep.DKDoanhNghiepMoi');
})->name('dashboard');
Route::get('/tin/{idTin}', 'App\Http\Controllers\TinTucController@getXemTinDetail');
Route::get('/home', function () {
    abort(500);
});
// Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {


    // doanh nghiep
    Route::get('/dnviews', 'App\Http\Controllers\DoanhNghiepController@getdanhnghiep');
    Route::get('/DNHoi', 'App\Http\Controllers\DoanhNghiepController@getmessage');
    Route::post('/HoiDapMoi', 'App\Http\Controllers\DoanhNghiepController@hoidap');
    Route::post('/LayTinNhan', 'App\Http\Controllers\DoanhNghiepController@laynoidung');
    Route::post('/SendDN', 'App\Http\Controllers\DoanhNghiepController@Themnoidung');
    Route::post('/LayTinNhanCG', 'App\Http\Controllers\ChuyenGiaController@laynoidung');
    Route::post('/SendCG', 'App\Http\Controllers\ChuyenGiaController@Themnoidung');
    // phần thông tin doanh nghiệp
    Route::get('/profile', 'App\Http\Controllers\DoanhNghiepController@getprofile');
    Route::post('/update_profile', 'App\Http\Controllers\DoanhNghiepController@updateprofile');
    Route::post('/change_password', 'App\Http\Controllers\DoanhNghiepController@ChangePassword');
    Route::post('/congkhaidoanhnghiep', 'App\Http\Controllers\DoanhNghiepController@thaydoitranthai');

    Route::get('/phieudanhgia1', 'App\Http\Controllers\DanhGia\DanhGia1Controller@getCauHoi');
    Route::get('/phieudanhgia2', 'App\Http\Controllers\DanhGia\DanhGia2Controller@getCauHoi');
    Route::get('/phieudanhgia3', 'App\Http\Controllers\DanhGia\DanhGia3Controller@getCauHoi');
    Route::get('/phieudanhgia4', 'App\Http\Controllers\DanhGia\DanhGia4Controller@getCauHoi');
    //phần chức năng trang admin
    Route::get('/admin/main', 'App\Http\Controllers\AdminController@getdashboard');
    // thêm ngành nghề

    Route::get('/admin/themnganhnghe', 'App\Http\Controllers\AdminController@viewnganhnghe');
    Route::get('/admin/themloaihinh', 'App\Http\Controllers\AdminController@viewloaihinh');
    Route::post('/save-nganhnghe', 'App\Http\Controllers\AdminController@savenganhnghe');
    Route::post('/delete_nganhnghe', 'App\Http\Controllers\AdminController@destroysr');
    Route::post('/save-loaihinh', 'App\Http\Controllers\AdminController@saveloaihinh');
    Route::post('/delete_LoaiHinh', 'App\Http\Controllers\AdminController@DeleteLoaiHinh');
    //form thêm phiếu
    Route::get('/admin/themcauhoiso1', 'App\Http\Controllers\DanhGia\DanhGia1Controller@getidCauHoi');
    Route::get('/admin/themcauhoiso2', 'App\Http\Controllers\DanhGia\DanhGia2Controller@getidCauHoi');
    Route::get('/admin/themcauhoiso3', 'App\Http\Controllers\DanhGia\DanhGia3Controller@getidCauHoi');
    //thêm tin tức
    Route::get('/admin/themtintuc', 'App\Http\Controllers\TinTucController@getidThemTin');
    Route::get('/admin/binhluan', 'App\Http\Controllers\BinhLuanController@getidBinhLuan');
    Route::get('/admin/xemtin', 'App\Http\Controllers\TinTucController@getXemTin');
    Route::get('/admin/xemloaitin', 'App\Http\Controllers\AdminController@getLoaiTin');
    Route::post('/save_Tin', 'App\Http\Controllers\TinTucController@saveTin');
    //lưu phiếu
    Route::post('/save-cauhoi', 'App\Http\Controllers\DanhGia\DanhGia1Controller@saveCauHoi');
    Route::get('/admin/list-phieu1', 'App\Http\Controllers\DanhGia\DanhGia1Controller@getquestlist');
    Route::get('/admin/phieu1-edit/{idcauhoi}', 'App\Http\Controllers\DanhGia\DanhGia1Controller@getquestdetail');
    Route::post('/update-cauhoi/{idcauhoi}', 'App\Http\Controllers\DanhGia\DanhGia1Controller@updateCauHoi');
    // câu trả lời phiếu 1
    Route::post('/request_cauhoi_p1', 'App\Http\Controllers\DanhGia\DanhGia1Controller@DanhGia');
    // câu trả lời phiếu 2
    Route::post('/request_cauhoi_p2', 'App\Http\Controllers\DanhGia\DanhGia2Controller@DanhGia');
    // câu trả lời phiếu 3
    Route::post('/request_cauhoi_p3', 'App\Http\Controllers\DanhGia\DanhGia3Controller@DanhGia');
    //trả lời phiếu số 4
    Route::post('/request-cauhoi_p4', 'App\Http\Controllers\DanhGia\DanhGia4Controller@requestCauHoi');


    Route::post('/save-cauhoi_p2', 'App\Http\Controllers\DanhGia\DanhGia2Controller@saveCauHoi');
    Route::post('/save-cauhoi_p3', 'App\Http\Controllers\DanhGia\DanhGia3Controller@saveCauHoi');
    Route::post('/save-cauhoi_p4', 'App\Http\Controllers\DanhGia\DanhGia4Controller@saveCauHoi');

    //xem các phiếu số 4 đã gửi
    Route::get('/admin/xemphieuso4', 'App\Http\Controllers\DanhGia\DanhGia4Controller@getCauHoi');
    //lấy user
    Route::get('/admin/user', 'App\Http\Controllers\AdminController@getuser');
    // tạo user
    Route::get('/admin/new_user', 'App\Http\Controllers\AdminController@newuser');
    Route::post('/admin/new_user', 'App\Http\Controllers\AdminController@createuser');
    //sử lý user

    Route::get('/role/{user_id}', 'App\Http\Controllers\AdminController@getdetail');
    Route::post('/update_user', 'App\Http\Controllers\AdminController@saveUser');
    // trả lời

    Route::get('/chuyengia/CGtraloi', 'App\Http\Controllers\ChuyenGiaController@getmessage');

    // lấy doanh nghiệp
    Route::get('/admin/DSDoanhNghiep', 'App\Http\Controllers\AdminController@getNewAcDN');
    Route::get('/chuyengia/DSDoanhNghiep', 'App\Http\Controllers\ChuyenGiaController@getNewAcDN');
    // lấy chi tiết doanh nghiệp
    Route::get('/admin/profileDN/{DN_id}', 'App\Http\Controllers\AdminController@getDNDetail');
    Route::post('/action_DN', 'App\Http\Controllers\AdminController@saveDN');
    Route::get('/chuyengia/profileDN/{DN_id}', 'App\Http\Controllers\ChuyenGiaController@getDNDetail');
    Route::post('/chuyengia/action_DN', 'App\Http\Controllers\ChuyenGiaController@saveDN');

    Route::post('/update_LinhVuc', 'App\Http\Controllers\TrangTinController@UpdateLinhVuc');
    //xử lý lĩnh vực
    Route::get('/admin/xem_linh_vuc', 'App\Http\Controllers\TrangTinController@getLinhVuc');
    Route::get('/edit_LV/{linhvuc_id}', 'App\Http\Controllers\TrangTinController@getLinhVucchitiet');
    Route::post('/delete_LV', 'App\Http\Controllers\TrangTinController@DeleteLinhVuc');
    Route::get('/new_LV', 'App\Http\Controllers\TrangTinController@getLinhVucnew');
    // xử lý loại tin
    Route::post('/update_LoaiTin', 'App\Http\Controllers\AdminController@UpdateLoaiTin');
    Route::get('/edit_LoaiTin/{loaitin_id}', 'App\Http\Controllers\AdminController@getLoaiTinChiTiet');
    Route::get('/new_LoaiTin', 'App\Http\Controllers\AdminController@getLoaiTinMoi');
    Route::post('/delete_LoaiTin', 'App\Http\Controllers\AdminController@DeleteLoaiTin');
    // quản lý slide
    Route::get('/admin/new_slide', 'App\Http\Controllers\TrangTinController@getaddslide');
    Route::get('/admin/slide_list', 'App\Http\Controllers\TrangTinController@getslides');
    Route::post('/save_slide', 'App\Http\Controllers\TrangTinController@saveslide');
    Route::post('/delete_slide', 'App\Http\Controllers\TrangTinController@DeleteSlide');
    Route::get('/edit_Slides/{slides_id}', 'App\Http\Controllers\TrangtinController@getSlidesChiTiet');
    Route::post('/update_Slides', 'App\Http\Controllers\TrangTinController@UpdateSlides');
// đổi mk
    Route::post('/changePW', 'App\Http\Controllers\AdminController@updatePW');

    Route::get('/logout', 'Laravel\Fortify\Http\Controllers\AuthenticatedSessionController@destroy');

    // Phần Chuyên gIA
    // Route::get('/chitiet_P1/{IDPhieu1}', 'App\Http\Controllers\ChuyenGiaController@getdashboard' );
    // lấy phiếu 1
    Route::get('/chuyengia/home', 'App\Http\Controllers\ChuyenGiaController@getdashboard');
    Route::get('/chuyengia/P1_DGM', 'App\Http\Controllers\ChuyenGiaController@getidDGMoi_P1');
    Route::get('/chuyengia/P1_Tatca', 'App\Http\Controllers\ChuyenGiaController@getTatCa_P1');
    Route::get('/chuyengia/P1_ChuaDG', 'App\Http\Controllers\ChuyenGiaController@getChuaDanhGia_P1');
    Route::get('/chuyengia/P1_DaDG', 'App\Http\Controllers\ChuyenGiaController@getDaDanhGia_P1');
    Route::post('/PhanHoiP1', 'App\Http\Controllers\ChuyenGiaController@hoidapCG');
    // Phiếu 2
    Route::get('/chuyengia/P2_DGMoi', 'App\Http\Controllers\ChuyenGiaController@getDGMoi_P2');
    Route::get('/chuyengia/P2_DaDG', 'App\Http\Controllers\ChuyenGiaController@getDaDanhGia_P2');
    Route::get('/chuyengia/P2_Tatca', 'App\Http\Controllers\ChuyenGiaController@getTatCa_P2');
    Route::get('/chuyengia/P2_ChuaDG', 'App\Http\Controllers\ChuyenGiaController@getChuaDanhGia_P2');
    Route::get('/chuyengia/P3_DGMoi', 'App\Http\Controllers\ChuyenGiaController@getDGMoi_P3');
    Route::get('/chuyengia/P3_Tatca', 'App\Http\Controllers\ChuyenGiaController@getTatCa_P3');
    Route::get('/chuyengia/P3_DaDG', 'App\Http\Controllers\ChuyenGiaController@getDaDanhGia_P3');
    Route::get('/chuyengia/P3_ChuaDG', 'App\Http\Controllers\ChuyenGiaController@getChuaDanhGia_P3');
    Route::get('/chuyengia/P4_DGMoi', 'App\Http\Controllers\ChuyenGiaController@getDGMoi_P4');
    Route::get('/chuyengia/P4_Tatca', 'App\Http\Controllers\ChuyenGiaController@getTatCa_P4');
    Route::get('/chuyengia/P4_DaDG', 'App\Http\Controllers\ChuyenGiaController@getDaDanhGia_P4');
    Route::get('/chuyengia/P4_ChuaDG', 'App\Http\Controllers\ChuyenGiaController@getChuaDanhGia_P4');
    // chi tiết
    Route::get('/chuyengia/P1_Chitiet/{IDPhieu1}', 'App\Http\Controllers\ChuyenGiaController@getChiTiet_P1');
    Route::get('/chuyengia/P2_Chitiet/{IDPhieu2}', 'App\Http\Controllers\ChuyenGiaController@getChiTiet_P2');
    Route::get('/chuyengia/P3_Chitiet/{IDPhieu3}', 'App\Http\Controllers\ChuyenGiaController@getChiTiet_P3');
    Route::get('/chuyengia/P4_Chitiet/{IDPhieu4}', 'App\Http\Controllers\ChuyenGiaController@getChiTiet_P4');
    Route::get('/chuyengia/kqphieu1/{IDPhieu1}', 'App\Http\Controllers\ChuyenGiaController@getkqPhieu1');

    Route::post('/thongbao', 'App\Http\Controllers\ChuyenGiaController@thongbaodanhgia');
    Route::post('/thongbao_P2', 'App\Http\Controllers\ChuyenGiaController@thongbaodanhgiaP2');
    // Hiệp hội
    Route::get('/HLH/home', 'App\Http\Controllers\HiepHoiController@gethome');

    Route::any('/ckfinder/connector', '\CKSource\CKFinderBridge\Controller\CKFinderController@requestAction')
        ->name('ckfinder_connector');

    Route::any('/ckfinder/browser', '\CKSource\CKFinderBridge\Controller\CKFinderController@browserAction')
        ->name('ckfinder_browser');
});

// Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
