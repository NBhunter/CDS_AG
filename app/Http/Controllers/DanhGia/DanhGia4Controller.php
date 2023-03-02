<?php

namespace App\Http\Controllers\DanhGia;

use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Redirect;
use Session;
class DanhGia4Controller extends Controller
{

    public function getCauHoi(){
        $Cauhoi = DB::table('cauhoi_p3')->get();
        // $Cauhoi = $Cauhoi->get();
        return view('danhgia.phieu4')->with('Cauhoi',$Cauhoi);
    }
    public function getidCauHoi(){

        return view('admin.P3cauhoi');
    }
    public function saveCauHoi(Request $request){
        $ch = array();

    	$ch['NhuCau'] = $request->NhuCau;
    	$ch['DeXuat'] = $request->Hoi_Dap;

    	$ch['DoanhNghiep_Id'] = Session::get('DoanhNghiep_id');

        DB::table('phieuso4')->insert($ch);

    return Redirect::to('/dnviews');
    }
}
