<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Session;
class DanhGia1Controller extends Controller
{

    public function getCauHoi(){
        $Cauhoi = DB::table('chitiet')
        ->leftjoin('chitiet_cauhoi','chitiet_cauhoi.ChiTiet_id','=','chitiet.id')
        ->leftjoin('cauhoi','cauhoi.id','=','chitiet_cauhoi.CauHoi_id')->select('chitiet.id AS idcauhoi','chitiet.*','cauhoi.*','chitiet_cauhoi.*');
        $Cauhoi = $Cauhoi->get();
        return view('danhgia.phieu1')->with('Cauhoi',$Cauhoi);
    }
    public function getidCauHoi(){
        $Cauhoi = DB::table('chitiet')
        ->leftjoin('chitiet_cauhoi','chitiet_cauhoi.ChiTiet_id','=','chitiet.id')
        ->leftjoin('cauhoi','cauhoi.id','=','chitiet_cauhoi.CauHoi_id')->select('chitiet.id AS idcauhoi','chitiet.*','cauhoi.*','chitiet_cauhoi.*');
        $Cauhoi = $Cauhoi->get();
        return view('admin.P1cauhoi')->with('Cauhoi',$Cauhoi);
    }
    public function saveCauHoi(Request $request){
        $request->user()->authorizeRoles(['Admin']);

    }
}
