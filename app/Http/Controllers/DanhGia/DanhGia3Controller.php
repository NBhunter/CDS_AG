<?php

namespace App\Http\Controllers\DanhGia;

use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Redirect;
use Session;
class DanhGia3Controller extends Controller
{

    public function getCauHoi(Request $request){
        $request->user()->authorizeRoles(['DoanhNghiep-BGD','DoanhNghiep-NV','Admin']);
        $Cauhoi = DB::table('cauhoi_p3')->get();
        // $Cauhoi = $Cauhoi->get();
        $time = "DG3-".date('ymdHis');
        return view('danhgia.phieu3')->with('Cauhoi',$Cauhoi)->with('time',$time);
    }
    public function getidCauHoi(){

        return view('admin.P3cauhoi');
    }
    public function saveCauHoi(Request $request){
        $request->user()->authorizeRoles(['Admin']);
        $ch = array();
        if($request->Ten != null){
    	$ch['TenCauHoi'] = $request->Ten;

        DB::table('cauhoi_p3')->insert($ch);

    }
    	return Redirect::to('admin/main');
    }
public function DanhGia(Request $request)
{
    $Cauhoi = DB::table('cauhoi_p3s')->get();
    $DoanhNghiep_id = Session::get('DoanhNghiep_id');
    $User_id = Session::get('User_id');

}
}
