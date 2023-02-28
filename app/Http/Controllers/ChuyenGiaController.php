<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;

use Illuminate\Support\Facades\Redirect;

class ChuyenGiaController extends Controller
{
    public function getdashboard(Request $request){
        $request->user()->authorizeRoles(['Chuyên Gia','Hiệp Hội']);
        $user = $request->user();
        Session::put('name',$user->name);
        $role = DB::table('role_user')->leftjoin('roles','roles.id','=','role_user.Role_id')->where('role_user.User_id',$user->id)->first();
        Session::put('role',$role->name);

            return view('chuyengia.Dashboard');

    }
    public function getidDGMoi_P1(Request $request){
        $request->user()->authorizeRoles(['Admin',]);
        $user = $request->user();
        $Phieu1New = DB::table('phieuso1')->leftjoin('users','users.id','=','phieuso1.User_id')
        ->leftjoin('doanhnghiep','doanhnghiep.id','=','phieuso1.DoanhNghiep_Id')->where('phieuso1.status','0')
        ->select('phieuso1.created_at as ThoigianTao','phieuso1.id as IDphieu','phieuso1.*','doanhnghiep.*','users.*')->get();
        return view('chuyengia.P1_DanhGiaMoi')->with('Phieu1New',$Phieu1New);
    }
    public function getTatCa_P1(Request $request){
        $request->user()->authorizeRoles(['Admin',]);
        $user = $request->user();
        $Phieu1New = DB::table('phieuso1')->leftjoin('users','users.id','=','phieuso1.User_id')
        ->leftjoin('doanhnghiep','doanhnghiep.id','=','phieuso1.DoanhNghiep_Id')
        ->select('phieuso1.created_at as ThoigianTao','phieuso1.id as IDphieu','phieuso1.*','doanhnghiep.*','users.*')->get();
        return view('chuyengia.P1_TatCa')->with('Phieu1New',$Phieu1New);
    }
    public function getChiTiet_P1(){

        return view('chuyengia.P1_ChiTiet');
    }
    public function getChuaDanhGia_P1(){

        return view('chuyengia.P1_ChuaDanhGia');
    }
    public function getDaDanhGia_P1(){

        return view('chuyengia.P1_DaDanhGia');
    }
    public function getDGMoi_P2(){

        return view('chuyengia.P2_DanhGiaMoi');
    }
    public function getDaDanhGia_P2(){

        return view('chuyengia.P2_DaDanhGia');
    }
    public function getTatCa_P2(){

        return view('chuyengia.P2_TatCa');
    }
    public function getChuaDanhGia_P2(){

        return view('chuyengia.P2_ChuaDanhGia');
    }
    public function getDGMoi_P3(){

        return view('chuyengia.P3_DanhGiaMoi');
    }
    public function getTatCa_P3(){

        return view('chuyengia.P3_TatCa');
    }
    public function getDaDanhGia_P3(){

        return view('chuyengia.P3_DaDanhGia');
    }
    public function getChuaDanhGia_P3(){

        return view('chuyengia.P3_ChuaDanhGia');
    }
    public function getDGMoi_P4(){

        return view('chuyengia.P4_DanhGiaMoi');
    }
    public function getTatCa_P4(){

        return view('chuyengia.P4_TatCa');
    }
    public function getDaDanhGia_P4(){

        return view('chuyengia.P4_DaDanhGia');
    }
    public function getChuaDanhGia_P4(){

        return view('chuyengia.P4_ChuaDanhGia');
    }
}

