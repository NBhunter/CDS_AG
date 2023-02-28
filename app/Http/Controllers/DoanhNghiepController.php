<?php

namespace App\Http\Controllers;

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
        $DanhGia1 = DB::table('phieuso1')->where('DoanhNghiep_Id',$DoanhNghiep->DoanhNghiep_id)->orderByDesc('created_at')->first();
        $BanDanhGia = DB::table('phieuso1')->where('DoanhNghiep_Id',$DoanhNghiep->DoanhNghiep_id)->get();
        Session::put('name',$user->name);
        Session::put('lienket_id',$DoanhNghiep->lienket_id);
        Session::put('DoanhNghiep_id',$DoanhNghiep->DoanhNghiep_id);
        Session::put('User_id',$DoanhNghiep->User_id);
            return view('DoanhNghiep.home')->with('DoanhNghiep',$DoanhNghiep)->with('DanhGia1',$DanhGia1)->with('BanDanhGia',$BanDanhGia);

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
