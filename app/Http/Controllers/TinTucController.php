<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\tintuc;
use Illuminate\Support\Facades\Redirect;

class TinTucController extends Controller
{


    public function getXemTin(Request $request){
        $request->user()->authorizeRoles(['Admin']);
        $user = $request->user();
        $TinTuc = DB::table('tintucs')->leftjoin('linhvuc','tintucs.LinhVuc_id','=','linhvuc.Id')
        ->leftjoin('loaitin','tintucs.LoaiTin_id','=','loaitin.Id')->get();
        return view('admin.tintuc.xemtin')->with("TinTuc",$TinTuc);
    }
    //
    public function getidThemTin(Request $request){
        $request->user()->authorizeRoles(['Admin']);
        $LinhVuc = DB::table('linhvuc')->get();
        $LoaiTin = DB::table('loaitin')->get();
        return view('admin.themtin')->with('LinhVuc',$LinhVuc)->with('LoaiTin',$LoaiTin);
    }
    public function saveTin(Request $request)
    {
        $data = new tintuc();
        if($request->file('filehinhanh')){
            $file= $request->file('filehinhanh');
            $filename= date('YmdHis').$file->getClientOriginalName();
            $file->move(public_path('img/AnhTinhTuc'), $filename);
        $data['Id'] =date('YmdHis');
        $data['TieuDe'] = $request->TieuDe;
        $data['LinhVuc_id'] =$request->LinhVuc;
        $data['LoaiTin_id'] = $request->LoaiTin;
        $data['Website']=$request->Link;
        $data['NoiDung'] = $request->NoiDung;
        $data['TomTat'] = $request->MoTa;
        $data['HinhAnh'] = $filename;
        $data['Status'] ="0";
        $data['LuotXem'] = "0";
        }
        $data->save();
        return Redirect::to('admin/main');
    }
}
