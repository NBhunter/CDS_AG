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
            $data['HinhAnh'] = $filename;

        }
        $data['Id'] =date('YmdHis');
        $data['TieuDe'] = $request->TieuDe;
        $data['LinhVuc_id'] =$request->LinhVuc;
        $data['LoaiTin_id'] = $request->LoaiTin;
        $data['Website']=$request->Link;
        $data['NoiDung'] = $request->NoiDung;
        $data['TomTat'] = $request->MoTa;
        $data['TacGia'] = $request->TacGia;
        $data['Status'] ="0";
        $data['LuotXem'] = "0";
        $data->save();
        return Redirect::to('admin/main');
    }
    public function getXemTinDetail($id){
        // $request->user()->authorizeRoles(['Admin']);
        $TinTuc = DB::table('tintucs')->where('tintucs.id',$id)->first();
        $luotxem = $TinTuc->LuotXem + 1;
        DB::table('tintucs')->where('tintucs.id',$id)->update(['LuotXem'=>$luotxem]);
        $comments = DB::table('binhluan')->where('TinTuc_id',$TinTuc->Id)->get();
        return view('home.post')->with('TinTuc',$TinTuc)->with('comments',$comments);
    }
}
