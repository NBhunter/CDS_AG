<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\slide;
use Illuminate\Support\Facades\Redirect;

class TinTucController extends Controller
{
    //
    public function getidThemTin(){

        return view('admin.themtin');
    }

    public function getXemTin(Request $request){
        $request->user()->authorizeRoles(['Admin']);
        $user = $request->user();
        $TinTuc = DB::table('tintucs')->leftjoin('linhvuc','tintucs.LinhVuc_id','=','linhvuc.Id')
        ->leftjoin('loaitin','tintucs.LoaiTin_id','=','loaitin.Id')->get();
        return view('admin.tintuc.xemtin')->with("TinTuc",$TinTuc);
    }
}
