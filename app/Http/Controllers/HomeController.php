<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $slides = DB::table('slides')->get();
        $tinmoi = DB::table('tintucs')->leftjoin('linhvuc', 'linhvuc.Id', '=', 'tintucs.LinhVuc_id')->select('tintucs.Id as IdTin', 'tintucs.*', 'linhvuc.*')->orderBy('updated_at', 'desc')->paginate(6);

        return view('home.home')->with('slides', $slides)->with('tinmoi', $tinmoi);
    }
    public function indexAllnew()
    {
        $slides = DB::table('slides')->get();
        $tinmoi = DB::table('tintucs')->leftjoin('linhvuc', 'linhvuc.Id', '=', 'tintucs.LinhVuc_id')->select('tintucs.Id as IdTin', 'tintucs.*', 'linhvuc.*')->orderBy('updated_at', 'desc')->paginate(6);

        return view('home.home')->with('slides', $slides)->with('tinmoi', $tinmoi);
    }
    public function NongNghiepIndex()
    {
        $slides = DB::table('slides')->get();
        $tinmoi = DB::table('tintucs')->leftjoin('linhvuc', 'linhvuc.Id', '=', 'tintucs.LinhVuc_id')->select('tintucs.Id as IdTin', 'tintucs.*', 'linhvuc.*')->orderBy('updated_at', 'desc')->paginate(6);

        return view('home.TinLinhVuc')->with('tinmoi', $tinmoi)->with('title', "Tin tức nông nghiệp");
    }
    public function adminHome()
    {
        return view('adminHome');
    }
    public function registerview()
    {
        // lấy lĩnh vực
        $LinhVuc = DB::table('linhvuc')->get();
        $LoaiHinh = DB::table('nganhnghe')->get();

        return view('home.dangkydoanhnghiep')->with('LinhVuc',$LinhVuc)->with('LoaiHinh',$LoaiHinh);
    }
    public function postcomment(Request $request)
    {
        $input = $request->collect();
        $cmt = array();

        if(isset($input['reply_id']))
        {
            $cmt['IdCon'] = $input['reply_id'];
        }
        $cmt['NoiDung']= $input['message'];
        $cmt['TrangThai'] = '0';
        $cmt['email'] = $input['Email'];
        $cmt['TenNguoiBL'] = $input['Name'];
        $cmt['TinTuc_id'] = $input['IdNews'];
        $cmt['NgayCMT'] = date('Y-m-d');
        if (DB::table('binhluan')->insert($cmt))
        {
            $alert = "đã thêm bình luận";
        }
        else{
            $alert =" Bình luận không thành công";
        }

        return redirect()->back()->with('alert',$alert);

    }
    public function crate_profile(Request $request)
    {
        $DN = array();
        $DN['Id'] = $request->MST;
        $DN['TenDoanhNghiep'] = $request->TenDN;
        $DN['TenVietTat'] = $request->TenVT;
        $DN['DiaChiTruSo'] = $request->TruSo;
        $DN['DiaPhuong'] = $request->DiaPhuong;
        $DN['SoLuongLaoDong'] = $request->QuyMo;
        $DN['email'] = $request->Email;
        $DN['SoDienThoai'] = $request->SDT;
        $DN['LinhVuc_Id'] = $request->LinhVuc;
        $DN['TrangThai_HienThi'] = '0';
        $CTDN = array();
        // $id = $request->idCT;
        $CTDN['DoanhNghiep_id'] = DB::table('doanhnghiep')->insertGetId($DN);
        $CTDN['MaSoThue'] = $request->MST;
        $CTDN['NgayHoatDong'] = $request->NHD;
        $CTDN['LoaiHinhDN'] = $request->LoaiHinh;
        $CTDN['TenVietTat'] = $request->TenVT;
        $CTDN['TenTiengAnh'] = $request->TenTA;
        $CTDN['VonDieuLe'] = $request->VonDieuLe;
        $CTDN['QuyMoNhanSu'] = $request->QuyMo;
        $CTDN['DC_ThanhPho'] = $request->DC_ThanhPho;
        $CTDN['DC_Huyen'] = $request->DC_Huyen;
        $CTDN['DC_Phuong'] = $request->DC_Phuong;
        $CTDN['DC_SoNha'] = $request->DC;
        $CTDN['SDT'] = $request->SDT;
        $CTDN['FAX'] = $request->Fax;
        $CTDN['Website'] = $request->Web;
        $CTDN['Zipcode'] = $request->Zip;

            $CTDN['created_at'] = Carbon::now();
            DB::table('chitiet_doanhnghiep')->insert($CTDN);
            $alert = 'Đã đăng ký thông tin doanh nghiệp';
        $User = new User();
        $User['name'] = $request->Hoten;
        $User['email'] = $request->EmailNguoiDaiDien;
        $User['password'] = Hash::make($request->DienThoaiNguoiDaiDien);
        $User['phone'] = $request->DienThoaiNguoiDaiDien;
        $User['status'] = 0;
        $User->save();

        DB::table('role_user')->insert(['Role_id'=>'1','User_id'=> $User['id']]);
        DB::table('dn_user')->insert(['DoanhNghiep_id'=>$CTDN['DoanhNghiep_id'],'User_id'=> $User['id']]);
        // return Redirect::to('/')->with('alert', $alert);
    }
}
