<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;

use Illuminate\Support\Facades\Redirect;

class ChuyenGiaController extends Controller
{
    public function getdashboard(Request $request){
        $request->user()->authorizeRoles(['Admin']);
        $user = $request->user();
        Session::put('name',$user->name);
        Session::put('role',"Admin");

            return view('chuyengia.Dashboard');

    }
    public function getidDGMoi_P1(){

        return view('chuyengia.P1_DanhGiaMoi');
    }
    public function getTatCa_P1(){

        return view('chuyengia.P1_TatCa');
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
}

