<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Redirect;
use Session;
class DanhGia2Controller extends Controller
{

    public function getCauHoi(){
        $Cauhoi = DB::table('danhmuc_noidung_p2')
        ->leftjoin('cauhoi_p2','danhmuc_noidung_p2.NoiDung_id','=','cauhoi_p2.Id')->get();
        // $Cauhoi = $Cauhoi->get();
        return view('danhgia.phieu2')->with('Cauhoi',$Cauhoi);
    }
    public function getidCauHoi(){
        $Cauhoi = DB::table('chitiet')
        ->leftjoin('chitiet_cauhoi','chitiet_cauhoi.ChiTiet_id','=','chitiet.id')
        ->leftjoin('cauhoi','cauhoi.id','=','chitiet_cauhoi.CauHoi_id')->select('chitiet.id AS idcauhoi','chitiet.*','cauhoi.*','chitiet_cauhoi.*');
        $Cauhoi = $Cauhoi->get();
        return view('admin.P2cauhoi')->with('Cauhoi',$Cauhoi);
    }
    public function saveCauHoi(Request $request){
        $request->user()->authorizeRoles(['Admin']);
        $ch = array();
        if($request->TenCauHoi != null){
    	$ch['TenCauHoi'] = $request->TenCauHoi;
        $ch['Cap'] = 1;
        $chid=DB::table('cauhoi_p2')->insertGetId($ch);
        $nd =array();
        $nd['Ten']=$request->Ten;
        $nd['NoiDung_id'] =$chid;
        DB::table('danhmuc_noidung_p2')->insert($nd);
    }
        //thêm cau 1
        $ch1 = array();
        if($request->TenCauHoi1 != null){
    	$ch1['TenCauHoi'] = $request->TenCauHoi1;
        $ch1['Cap'] = 2;
        $ch1['IdCha'] =$chid;
        $ch1id=DB::table('cauhoi_p2')->insertGetId($ch1);
        $nd1 =array();
        $nd1['Ten']=$request->Ten;
        $nd1['NoiDung_id'] =$ch1id;
        DB::table('danhmuc_noidung_p2')->insert($nd1);
    }
    $ch2 = array();
    if($request->TenCauHoi2 != null){
    $ch2['TenCauHoi'] = $request->TenCauHoi2;
    $ch2['Cap'] = 2;
    $ch2['IdCha'] =$chid;
    $ch2id=DB::table('cauhoi_p2')->insertGetId($ch2);
    $nd2 =array();
        $nd2['Ten']=$request->Ten;
        $nd2['NoiDung_id'] =$ch2id;
        DB::table('danhmuc_noidung_p2')->insert($nd2);
    }
    $ch3 = array();
    if($request->TenCauHoi3 != null){
    $ch3['TenCauHoi'] = $request->TenCauHoi3;
    $ch3['Cap'] = 2;
    $ch3['IdCha'] =$chid;
    $ch3id=DB::table('cauhoi_p2')->insertGetId($ch3);
    $nd3 =array();
        $nd3['Ten']=$request->Ten;
        $nd3['NoiDung_id'] =$ch3id;
        DB::table('danhmuc_noidung_p2')->insert($nd3);
}
$ch4 = array();
    if($request->TenCauHoi4 != null){
    $ch4['TenCauHoi'] = $request->TenCauHoi4;
    $ch4['Cap'] = 2;
    $ch4['IdCha'] =$chid;
    $ch4id=DB::table('cauhoi_p2')->insertGetId($ch4);
    $nd4 =array();
        $nd4['Ten']=$request->Ten;
        $nd4['NoiDung_id'] =$ch4id;
        DB::table('danhmuc_noidung_p2')->insert($nd4);
}
$ch5 = array();
    if($request->TenCauHoi5 != null){
    $ch5['TenCauHoi'] = $request->TenCauHoi5;
    $ch5['Cap'] = 2;
    $ch5['IdCha'] =$chid;
    $ch5id=DB::table('cauhoi_p2')->insertGetId($ch5);
    $nd5 =array();
        $nd5['Ten']=$request->Ten;
        $nd5['NoiDung_id'] =$ch5id;
        DB::table('danhmuc_noidung_p2')->insert($nd5);
}



    	return Redirect::to('admin/main');
    }
}