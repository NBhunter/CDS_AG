<?php

namespace App\Http\Controllers;

use App\Models\phieu1_diem;
use App\Models\phieuso1;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use PhpParser\Node\Stmt\Foreach_;
use Session;
class DanhGia1Controller extends Controller
{

    public function getCauHoi(Request $request){
        $request->user()->authorizeRoles(['DoanhNghiep','Admin']);
        $Cauhoi = DB::table('chitiet')
        ->leftjoin('chitiet_cauhoi','chitiet_cauhoi.ChiTiet_id','=','chitiet.id')
        ->leftjoin('cauhoi','cauhoi.id','=','chitiet_cauhoi.CauHoi_id')->select('chitiet.id AS idcauhoi','chitiet.*','cauhoi.*','chitiet_cauhoi.*')->orderBy('idcauhoi');
        $Cauhoi = $Cauhoi->get();
        $time = "DG1-".date('ymdHis');
        return view('danhgia.phieu1')->with('Cauhoi',$Cauhoi)->with('time',$time);
    }
    public function getidCauHoi(Request $request){
        $request->user()->authorizeRoles(['Admin']);
        $Cauhoi = DB::table('chitiet')
        ->leftjoin('chitiet_cauhoi','chitiet_cauhoi.ChiTiet_id','=','chitiet.id')
        ->leftjoin('cauhoi','cauhoi.id','=','chitiet_cauhoi.CauHoi_id')->select('chitiet.id AS idcauhoi','chitiet.*','cauhoi.*','chitiet_cauhoi.*');
        $Cauhoi = $Cauhoi->get();
        return view('admin.phieu1.P1cauhoi')->with('Cauhoi',$Cauhoi);
    }
    public function saveCauHoi(Request $request){
        $request->user()->authorizeRoles(['Admin']);
        //thêm chi tiết
        $ct = array();
        if($request->Cap ==2){
    	$ct['idcha'] = $request->idcha1;}
        if($request->Cap ==0){
            $ct['idcha'] = $request->idcha2;}
            if($request->Cap ==3){
                $ct['idcha'] = $request->idcha3;}
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
    	return Redirect::to('admin/themcauhoiso1');
    }
    public function getquestlist(Request $request)
    {
        $request->user()->authorizeRoles(['Admin']);
        $Cauhoi = DB::table('chitiet')
        ->leftjoin('chitiet_cauhoi','chitiet_cauhoi.ChiTiet_id','=','chitiet.id')
        ->leftjoin('cauhoi','cauhoi.id','=','chitiet_cauhoi.CauHoi_id')->select('chitiet.id AS idcauhoi','chitiet.*','cauhoi.*','chitiet_cauhoi.*')->orderBy('idcauhoi');
        $Cauhoi = $Cauhoi->get();
        return view('admin.phieu1.cauhoi_1_list')->with('Cauhoi',$Cauhoi);
    }
    public function getquestdetail(Request $request,$idcauhoi)
    {
        $request->user()->authorizeRoles(['Admin']);
        $Cauhoi = DB::table('chitiet')
        ->leftjoin('chitiet_cauhoi','chitiet_cauhoi.ChiTiet_id','=','chitiet.id')
        ->leftjoin('cauhoi','cauhoi.id','=','chitiet_cauhoi.CauHoi_id')->select('chitiet.id AS idcauhoi','chitiet.*','cauhoi.*','chitiet_cauhoi.*')
        ->where('chitiet.id',$idcauhoi)->orderBy('idcauhoi');
        $phieu1 = $Cauhoi->first();
        return view('admin.phieu1.P1cauhoi_edit')->with('phieu1',$phieu1);
    }
    public function updateCauHoi(Request $request,$idcauhoi){
        $request->user()->authorizeRoles(['Admin']);
        $Cauhoi = DB::table('chitiet2')
        ->leftjoin('chitiet_cauhoi','chitiet_cauhoi.ChiTiet_id','=','chitiet.id')
        ->leftjoin('cauhoi','cauhoi.id','=','chitiet_cauhoi.CauHoi_id')->select('chitiet.id AS idchitiet','cauhoi.id AS idcauhoi','chitiet_cauhoi.id AS idchung')
        ->where('chitiet.id',$idcauhoi)->orderBy('idcauhoi');
        $phieu1 = $Cauhoi->first();
        //thêm chi tiết
        $ct = array();

        $ct['NoiDung'] = $request->NoiDung;

        $ct['Cap'] = $request->Cap;
        if($request->Cap == 1||$request->Cap == 2){
    	$ct['DiemToiDa'] = $request->DiemToiDa;}
        $ctid=DB::table('chitiet')->where('id',$phieu1->idchitiet)->update($ct);

        if($request->Cap ==3){
            $ch= array();
            $ch['TenCauHoi'] = $request->TenCauHoi;
            $chid=DB::table('cauhoi')->where('id',$phieu1->idcauhoi)->update($ch);
            $ctch= array();
            // $chid= DB::table('cauhoi')->lastInsertId();
            // $ctid = DB::table('chitiet')->lastInsertId();
            $ctch['ChiTiet_id'] = $ctid;
            $ctch['cauhoi_id']= $chid;
            $ctch['MoTa'] = $request->MoTa;
            DB::table('chitiet_cauhoi')->where('id',$phieu1->idchung)->update($ctch);
        }
    	return Redirect::to('admin/list-phieu1');
    }

    // thực hiện đánh giá
    public function DanhGia(Request $request)
    {

        $request->user()->authorizeRoles(['DoanhNghie','Admin']);
       $DoanhNghiep_id = Session::get('DoanhNghiep_id');
       $User_id = Session::get('User_id');
       $thongtinphieu = new phieuso1();

        $Cauhoi = DB::table('chitiet')->get();
        $thongtinphieu['Id'] = $request->maphieu;
        $thongtinphieu['User_id'] = $User_id;
        $thongtinphieu['DoanhNghiep_id'] =$DoanhNghiep_id;
        $TongDiem = 0;
        $DiemC1 = 0;
        $DiemC2 = 0;
        $ID_C1_Truoc= 0;
        $ID_C2_Truoc= 0;
       Foreach($Cauhoi as $Ch){
        if($Ch->Cap ==1)
        {
            if($ID_C1_Truoc != 0){
                $chitietcauhoiC1 = new phieu1_diem();
        $chitietcauhoiC1['Phieu_id'] = $request->maphieu;
        $chitietcauhoiC1['ChiTiet_id'] = $Ch->Id;
        $chitietcauhoiC1['Diem'] =$DiemC1;
        // DB::table('phieu1_diem')->insert($chitietcauhoiC1);
                $chitietcauhoiC1->save();
            }
            $ID_C1_Truoc = $Ch->Id;
            $DiemC1 = 0;

        }
        if($Ch->Cap ==2)
        {
            if($ID_C2_Truoc != 0){
                $chitietcauhoiC2 = new phieu1_diem();
        $chitietcauhoiC2['Phieu_id'] = $request->maphieu;
        $chitietcauhoiC2['ChiTiet_id'] = $Ch->Id;
        $chitietcauhoiC2['Diem'] =$DiemC2;
        // DB::table('phieu1_diem')->insert($chitietcauhoiC2);
                $chitietcauhoiC2->save();
    }
            $ID_C2_Truoc = $Ch->Id;
            $DiemC2 = 0;

        }
        if($Ch->Cap ==3){
        $chitietcauhoi = new phieu1_diem();
        $chitietcauhoi['Phieu_id'] = $request->maphieu;
        $chitietcauhoi['ChiTiet_id'] = $Ch->Id;
        $chitietcauhoi['Diem'] =$request[$Ch->Id];
        $TongDiem+=$request[$Ch->Id];
        $DiemC1+=$request[$Ch->Id];
        $DiemC2+=$request[$Ch->Id];
        // DB::table('phieu1_diem')->insert($chitietcauhoi);
        $chitietcauhoi->save();
        }
       }
       $thongtinphieu['TongDiem'] = $TongDiem;
       $thongtinphieu['created_at'] = now();
       $thongtinphieu['status'] = 0;
    //    DB::table('phieuso1')->insert($thongtinphieu);
       $thongtinphieu->save();
       return Redirect::to('dnviews');

    }
}
