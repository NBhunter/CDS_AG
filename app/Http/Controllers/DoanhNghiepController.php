<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Session;
use DB;
use Illuminate\Support\Facades\Redirect;

class DoanhNghiepController extends Controller
{
    public function __construct()
   {
       $this->middleware('auth');
   }

   public function laythongbao()
   {
    $thongbao = DB::table('tinnhan')->leftjoin('chitiet_tinnhan','chitiet_tinnhan.TinNhan_id','=','tinnhan.Id')
    ->where('DoanhNghiep_id',Session::get('DoanhNghiep_id'))->get();
    foreach( $thongbao as $tb){
        $updated = new Carbon($tb->created_at);
     $now = Carbon::now();
     if ($updated->diffInMinutes($now) < 1) {
        $tb->lastOnline = "Thông báo cách đây: Chưa đến 1 phút";
     } elseif ($updated->diffInHours($now) < 1) {
        $tb->lastOnline = $updated->diffInMinutes($now) > 1 ? sprintf("Thông báo cách đây: %d phút trước", $updated->diffInMinutes($now)) : sprintf("Thông báo cách đây: %d phút trước", $updated->diffInMinutes($now));
     } elseif ($updated->diffInDays($now) < 1) {
        $tb->lastOnline = $updated->diffInHours($now) > 1 ? sprintf("Thông báo cách đây: %d giờ trước", $updated->diffInHours($now)) : sprintf("Thông báo cách đây: %d giờ trước", $updated->diffInHours($now));
     } elseif ($updated->diffInWeeks($now) < 7) {
        $tb->lastOnline = $updated->diffInDays($now) > 1 ? sprintf("Thông báo cách đây: %d ngày trước", $updated->diffInDays($now)) : sprintf("Thông báo cách đây: %d ngày trước", $updated->diffInDays($now));
     } elseif ($updated->diffInMonths($now) < 1) {
        $tb->lastOnline = $updated->diffInWeeks($now) > 1 ? sprintf("Thông báo cách đây: %d tuần trước", $updated->diffInWeeks($now)) : sprintf("Thông báo cách đây: %d tuần trước", $updated->diffInWeeks($now));
     } elseif ($updated->diffInYears($now) < 1) {
        $tb->lastOnline = $updated->diffInMonths($now) > 1 ? sprintf("Thông báo cách đây: %d tháng trước", $updated->diffInMonths($now)) : sprintf("Thông báo cách đây: %d tháng trước", $updated->diffInMonths($now));
     } else {
        $tb->lastOnline = $updated->diffInYears($now) > 1 ? sprintf("Thông báo cách đây: %d năm trước", $updated->diffInYears($now)) : sprintf("Thông báo cách đây: %d nămtrước", $updated->diffInYears($now));
     }
     return $thongbao;
    }
   }
//    @updateprofile
    public function getdanhnghiep(Request $request){
        $request->user()->authorizeRoles(['DoanhNghiep-NV','DoanhNghiep-BGD','Admin']);
        $user = $request->user();

        Session::put('email',$user->email);
        $DoanhNghiep = DB::table('users')
        ->leftjoin('dn_user','dn_user.User_id','=','users.id')
        ->leftjoin('doanhnghiep','doanhnghiep.Id','=','dn_user.DoanhNghiep_id')->where('users.email',Session::get('email'))
        ->select('dn_user.id As lienket_id','users.*','dn_user.*','doanhnghiep.*')->first();
        Session::put('name',$user->name);
        Session::put('lienket_id',$DoanhNghiep->lienket_id);
        Session::put('DoanhNghiep_id',$DoanhNghiep->DoanhNghiep_id);
        Session::put('User_id',$DoanhNghiep->User_id);

        //lấy điểm bảng 1
        $DanhGia1 = DB::table('phieuso1')->where('DoanhNghiep_Id',$DoanhNghiep->DoanhNghiep_id)->orderByDesc('created_at')->first();
        //lấy điểm bảng 2
        $DanhGia2 = DB::table('phieuso2')->where('DoanhNghiep_Id',$DoanhNghiep->DoanhNghiep_id)->orderByDesc('created_at')->first();
        $DanhGia3 = DB::table('phieuso3')->where('DoanhNghiep_Id',$DoanhNghiep->DoanhNghiep_id)->orderByDesc('created_at')->first();
        $DanhGia4 = DB::table('phieuso4')->where('DoanhNghiep_Id',$DoanhNghiep->DoanhNghiep_id)->orderByDesc('created_at')->first();
        $BanDanhGia = DB::table('phieuso1')->where('DoanhNghiep_Id',$DoanhNghiep->DoanhNghiep_id)->get();

        //lấy thông báo

        $thongbao = $this->laythongbao();


            return view('DoanhNghiep.home')->with('DoanhNghiep',$DoanhNghiep)
            ->with('DanhGia1',$DanhGia1)->with('DanhGia2',$DanhGia2)->with('DanhGia3',$DanhGia3)
            ->with('DanhGia4',$DanhGia4)->with('BanDanhGia',$BanDanhGia)->with('thongbao',$thongbao);

    }

    public function getprofile(Request $request){
        $request->user()->authorizeRoles(['DoanhNghiep-NV','DoanhNghiep-BGD','Admin']);
        $user = $request->user();

        Session::put('email',$user->email);
        $DoanhNghiep = DB::table('users')->leftjoin('dn_user','dn_user.User_id','=','users.id')
        ->leftjoin('doanhnghiep','doanhnghiep.Id','=','dn_user.DoanhNghiep_id')->where('users.email',Session::get('email'))->select('dn_user.id As lienket_id','users.*','dn_user.*','doanhnghiep.*')->first();
        $DN = DB::table('users')->leftjoin('role_user','role_user.User_id','=','users.id')
        ->leftjoin('roles','roles.id','=','role_user.Role_id')
        ->leftjoin('dn_user','dn_user.User_id','=','users.id')
        ->leftjoin('doanhnghiep','doanhnghiep.Id','=','dn_user.DoanhNghiep_id')
        ->leftjoin('linhvuc','linhvuc.Id','=','doanhnghiep.LinhVuc_id')

        ->leftjoin('nguoidung','nguoidung.DoanhNghiep_id','=','doanhnghiep.id')
        ->leftjoin('chitiet_doanhnghiep','chitiet_doanhnghiep.DoanhNghiep_id','=','doanhnghiep.id')->where('users.email',$user->email)
        ->select('nguoidung.TenNguoiDung','doanhnghiep.email As emaildoanhnghiep','chitiet_doanhnghiep.id as idCT','doanhnghiep.DiaChiTruSo','users.name as Tenuser','users.email as emailNguoiDung','users.*','roles.*','doanhnghiep.*','role_user.*','dn_user.*','nguoidung.*','linhvuc.*','chitiet_doanhnghiep.*')->first();
        // lấy lĩnh vực
        $LinhVuc = DB::table('linhvuc')->get();
        $LoaiHinh = DB::table('nganhnghe')->get();

        // lấy thông báo

        $thongbao = $this->laythongbao();

        // lấy bản số
            return view('thongtin.profile')->with('DoanhNghiep',$DoanhNghiep)->with('DN',$DN)->with('thongbao',$thongbao)
            ->with('LinhVuc',$LinhVuc)->with('LoaiHinh',$LoaiHinh);

    }
    public function updateprofile(Request $request){
        $request->user()->authorizeRoles(['DoanhNghiep-NV','DoanhNghiep-BGD','Admin']);
        $user = $request->user();


        $CTDN = array();
        $id = $request->idCT;
        $CTDN['DoanhNghiep_id']=Session::get('DoanhNghiep_id');
        $CTDN['MaSoThue']=$request->MST;
        $CTDN['NgayHoatDong']=$request->NHD;
        $CTDN['LoaiHinhDN']=$request->LoaiHinh;
        $CTDN['TenVietTat'] = $request->TenVT;
        $CTDN['TenTiengAnh'] = $request->TenTA;
        $CTDN['VonDieuLe'] =$request->VonDieuLe;
        $CTDN['QuyMoNhanSu'] = $request->QuyMo;
        $CTDN['DC_ThanhPho'] = $request->DC_ThanhPho;
        $CTDN['DC_Huyen'] = $request->DC_Huyen;
        $CTDN['DC_Phuong'] = $request->DC_Phuong;
        $CTDN['DC_SoNha'] = $request->DC;
        $CTDN['SDT'] = $request->SDT;
        $CTDN['FAX'] = $request->Fax;
        $CTDN['Website'] = $request->Web;
        $CTDN['Zipcode'] =$request->Zip;
        if($id == NULL){
            $CTDN['created_at'] = Carbon::now();
            DB::table('chitiet_doanhnghiep')->insert($CTDN);
        }else{
            $CTDN['updated_at'] = Carbon::now();
            DB::table('chitiet_doanhnghiep')->update($CTDN);
        }
        // lấy bản số
            return Redirect::to('profile')->withSuccess('IT WORKS!');;

    }
    public function thaydoitranthai(Request $request)
    {
        $input = $request->collect();
        $request->user()->authorizeRoles(['DoanhNghiep-NV','DoanhNghiep-BGD','Admin']);
        $TT = array();
        $TT['TrangThai_HienThi'] = $input['status'];
        DB::table('doanhnghiep')->where('id',$input['DN_id'])->update($TT);
        return response()->json(['success'=>'Status change successfully.']);
    }
}
