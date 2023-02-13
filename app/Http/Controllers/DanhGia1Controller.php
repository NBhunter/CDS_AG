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
        //thêm chi tiết
        $ct = array();
        if($request->Cap ==2||$request->Cap ==0){
    	$ct['idcha'] = $request->idcha1;}
        if($request->Cap ==3){
            $ct['idcha'] = $request->idcha2;}
        $ct['NoiDung'] = $request->NoiDung;

        $ct['Cap'] = $request->Cap;
        if($request->Cap == 1||$request->Cap == 2){
    	$ct['DiemToiDa'] = $request->DiemToiDa;}
        $ctid=DB::table('chitiet')->insertGetId($ct);

        if($request->Cap ==3){
            $ch= array();
            $ch['TenCauHoi'] = $request->TenCauHoi;
            $chid=DB::table('cauhoi')->insertGetId($ch);
            $ctch= array();
            // $chid= DB::table('cauhoi')->lastInsertId();
            // $ctid = DB::table('chitiet')->lastInsertId();
            $ctch['ChiTiet_id'] = $ctid;
            $ctch['cauhoi_id']= $chid;
            $ctch['MoTa'] = $request->MoTa;
            DB::table('chitiet_cauhoi')->insert($ctch);
        }
    	return Redirect::to('admin/main');
    }
}
