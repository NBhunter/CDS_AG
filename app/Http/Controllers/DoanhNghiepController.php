<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Session;
use DB;
class DoanhNghiepController extends Controller
{
    public function __construct()
   {
       $this->middleware('auth');
   }

    public function getdanhnghiep(Request $request){
        $request->user()->authorizeRoles(['DoanhNghiep','Admin']);
        $user = $request->user();

        Session::put('email',$user->email);
        $DoanhNghiep = DB::table('users')->leftjoin('dn_user','dn_user.User_id','=','users.id')
        ->leftjoin('doanhnghiep','doanhnghiep.Id','=','dn_user.DoanhNghiep_id')->where('email',Session::get('email'))
        ->select('dn_user.id As lienket_id','users.*','dn_user.*','doanhnghiep.*')->first();
        //lấy điểm bảng 1
        $DanhGia1 = DB::table('phieuso1')->where('DoanhNghiep_Id',$DoanhNghiep->DoanhNghiep_id)->orderByDesc('created_at')->first();
        //lấy điểm bảng 2
        $DanhGia2 = DB::table('phieuso2')->where('DoanhNghiep_Id',$DoanhNghiep->DoanhNghiep_id)->orderByDesc('created_at')->first();
        $DanhGia3 = DB::table('phieuso3')->where('DoanhNghiep_Id',$DoanhNghiep->DoanhNghiep_id)->orderByDesc('created_at')->first();
        $DanhGia4 = DB::table('phieuso4')->where('DoanhNghiep_Id',$DoanhNghiep->DoanhNghiep_id)->orderByDesc('created_at')->first();
        $BanDanhGia = DB::table('phieuso1')->where('DoanhNghiep_Id',$DoanhNghiep->DoanhNghiep_id)->get();

        //lấy thông báo
        $thongbao = DB::table('tinnhan')->leftjoin('chitiet_tinnhan','chitiet_tinnhan.TinNhan_id','=','tinnhan.Id')
        ->where('DoanhNghiep_id',$DoanhNghiep->DoanhNghiep_id)
        ->get();
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
        }
        Session::put('name',$user->name);
        Session::put('lienket_id',$DoanhNghiep->lienket_id);
        Session::put('DoanhNghiep_id',$DoanhNghiep->DoanhNghiep_id);
        Session::put('User_id',$DoanhNghiep->User_id);
            return view('DoanhNghiep.home')->with('DoanhNghiep',$DoanhNghiep)
            ->with('DanhGia1',$DanhGia1)->with('DanhGia2',$DanhGia2)->with('DanhGia3',$DanhGia3)
            ->with('DanhGia4',$DanhGia4)->with('BanDanhGia',$BanDanhGia)->with('thongbao',$thongbao);

    }

    public function getprofile(Request $request){
        $request->user()->authorizeRoles(['DoanhNghiep','Admin']);
        $user = $request->user();

        Session::put('email',$user->email);
        $DoanhNghiep = DB::table('users')->leftjoin('dn_user','dn_user.User_id','=','users.id')
        ->leftjoin('doanhnghiep','doanhnghiep.Id','=','dn_user.DoanhNghiep_id')->where('email',Session::get('email'))->select('dn_user.id As lienket_id','users.*','dn_user.*','doanhnghiep.*')->get();
        $User = DB::table('users')->leftjoin('role_user','role_user.User_id','=','users.id')
        ->leftjoin('roles','roles.id','=','role_user.Role_id')
        ->leftjoin('dn_user','dn_user.User_id','=','users.id')
        ->leftjoin('doanhnghiep','doanhnghiep.Id','=','dn_user.DoanhNghiep_id')
        ->leftjoin('linhvuc','linhvuc.Id','=','doanhnghiep.LinhVuc_id')
        ->leftjoin('nguoidung','nguoidung.DoanhNghiep_id','=','doanhnghiep.id')
        ->select('nguoidung.Ten As tennguoidung','nguoidung.email As emaildoanhnghiep','nguoidung.DiaChi As diachinguoidung','users.*','roles.*','doanhnghiep.*','role_user.*','dn_user.*','nguoidung.*','linhvuc.*')->where('users.email',$user->email)->first();

        // lấy bản số
        Session::put('name',$user->name);
        Session::put('lienket_id',$DoanhNghiep[0]->lienket_id);
        Session::put('DoanhNghiep_id',$DoanhNghiep[0]->DoanhNghiep_id);
        Session::put('User_id',$DoanhNghiep[0]->User_id);
            return view('thongtin.profile')->with('DoanhNghiep',$DoanhNghiep)->with('User',$User);

    }
}
