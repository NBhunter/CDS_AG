<?php

namespace App\Http\Controllers\DanhGia;

use App\Http\Controllers\Controller;
use App\Models\Phieu1\chitiet_P1;
use App\Models\Phieu1\MoTa_P1;
use App\Models\Phieu1\phieu1_diem ;
use App\Models\Phieu1\phieuso1;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use PhpParser\Node\Expr\AssignOp\Mod;
use PhpParser\Node\Stmt\Foreach_;
use Session;
class DanhGia1Controller extends Controller
{

    public function getCauHoi(Request $request){
        $request->user()->authorizeRoles(['DoanhNghiep-BGD','DoanhNghiep-NV','Admin']);
        // kiểm tra đã đánh giá chưa
        $kiemtra = DB::table('phieuso1')->where('DoanhNghiep_Id',Session::get('DoanhNghiep_id'))->orderBy('created_at','DESC')->first();
        if($kiemtra != null){

            $updated = new Carbon($kiemtra->updated_at);
        }else{
            $updated = new Carbon(0);
        }
        $now = Carbon::now();

        if($updated->diffInMonths($now) > 3){
            $Cauhoi = chitiet_P1::leftjoin('chitiet_cauhoi','chitiet_cauhoi.ChiTiet_id','=','chitiet.id')
            ->leftjoin('cauhoi','cauhoi.id','=','chitiet_cauhoi.CauHoi_id')
            ->select('chitiet.id AS idcauhoi','chitiet.*','cauhoi.*','chitiet_cauhoi.*')
            ->orderBy('idcauhoi','ASC')->get();
            $DanhMuc = DB::table('chitiet')->where('Cap','=','1')->get();
        $time = "DG1-".date('ymdHis');
        return view('danhgia.phieu1')->with('Cauhoi',$Cauhoi)->with('time',$time)->with('DanhMuc',$DanhMuc);
        }else{
            // alert("Bạn Đã đánh giá trong quí này");
            return Redirect()->back()->with('alert', 'Bạn Đã đánh giá trong quí này!!');
        }
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
    // xử lý mô hình
    public function Chonmohinh($idPhieu)
    {
        $Phieu1 = phieuso1::where('Id',$idPhieu)->first();
        $TruCot = phieu1_diem::where('Phieu_id',$idPhieu)
        ->join('chitiet','chitiet.id','=','phieu1_diem.ChiTiet_id')->get();
        $min = -1;
        foreach($TruCot as $TC)
        {
            if( $TC->Cap == 1 )
            {
                if($min == -1 )
                {
                    $min = $TC->Diem;
                }
                if($min != -1 && $min > $TC->Diem)
                {
                    $min = $TC->Diem;
                }
            }

        }



    }
    // thực hiện đánh giá
    public function DanhGia(Request $request)
    {

        $request->user()->authorizeRoles(['DoanhNghiep-BGD','DoanhNghiep-NV','Admin']);
       $DoanhNghiep_id = Session::get('DoanhNghiep_id');
       $User_id = Session::get('User_id');
       $Cauhoi = DB::table('chitiet')->get();
       $TongDiem = 0;
       $Cap1 = 0;
       $Cap2 =0;
       if(phieuso1::find($request->maphieu) == null){
        Session::forget('ID_C1_Truoc');
        Session::forget('ID_C2_Truoc');
        Session::forget('DiemC1');
        Session::forget('DiemC2');

        Session::put('DiemC2','0');
        Session::put('ID_C2_Truoc','0');

        Session::forget('temp');
        Session::push('temp','');
        $thongtinphieu = new phieuso1();
        $thongtinphieu['Id'] = $request->maphieu;
        $thongtinphieu['User_id'] = $User_id;
        $thongtinphieu['DoanhNghiep_id'] =$DoanhNghiep_id;

       }else
       {
        $thongtinphieu = phieuso1::find($request->maphieu);
        $thongtinphieu['Id'] = $request->maphieu;
        $thongtinphieu['User_id'] = $User_id;
        $thongtinphieu['DoanhNghiep_id'] =$DoanhNghiep_id;
        $TongDiem = $thongtinphieu['TongDiem'];

       }



       Foreach($Cauhoi as $Ch){
        if($Ch->Cap ==1 && $request[$Ch->Id] != null && !in_array($Ch->Id,Session::get('temp'))&& $Cap1 == 0 )
        {
            if(Session::get('ID_C1_Truoc') != 0){
                $chitietcauhoiC1 = new phieu1_diem();
        $chitietcauhoiC1['Phieu_id'] = $request->maphieu;
        $chitietcauhoiC1['ChiTiet_id'] = Session::get('ID_C1_Truoc');
        $chitietcauhoiC1['Diem'] =Session::get('DiemC1');
        // DB::table('phieu1_diem')->insert($chitietcauhoiC1);
                $chitietcauhoiC1->save();
            }
            Session::put('DiemC1','0');
        Session::put('ID_C1_Truoc',$Ch->Id);
        Session::push('temp',$Ch->Id);
            $Cap1++;
        }
        if($Ch->Cap ==2  && $request[$Ch->Id] != null&& !in_array($Ch->Id,Session::get('temp')) && Session::get('DiemC2') > 0)
        {
            if(Session::get('ID_C2_Truoc') != 0){
                $chitietcauhoiC2 = new phieu1_diem();
        $chitietcauhoiC2['Phieu_id'] = $request->maphieu;
        $chitietcauhoiC2['ChiTiet_id'] = Session::get('ID_C2_Truoc');
        $chitietcauhoiC2['Diem'] =Session::get('DiemC2');
        // DB::table('phieu1_diem')->insert($chitietcauhoiC2);
                $chitietcauhoiC2->save();
    }
    Session::put('DiemC2','0');
        Session::put('ID_C2_Truoc',$Ch->Id);
        Session::push('temp',$Ch->Id);

        }
        if($Ch->Cap ==3 &&$request->maphieu != null && $request[$Ch->Id] != null && !in_array($Ch->Id,Session::get('temp'))){
        $chitietcauhoi = new phieu1_diem();
        $chitietcauhoi['Phieu_id'] = $request->maphieu;
        $chitietcauhoi['ChiTiet_id'] = $Ch->Id;
        $chitietcauhoi['Diem'] =$request[$Ch->Id];
        $TongDiem+=$request[$Ch->Id];
        Session::put('DiemC1', Session::get('DiemC1')+$request[$Ch->Id]);
        Session::put('DiemC2', Session::get('DiemC2')+$request[$Ch->Id]);
        // DB::table('phieu1_diem')->insert($chitietcauhoi);
        $chitietcauhoi->save();
        Session::push('temp',$Ch->Id);
        }
       }
       $thongtinphieu['TongDiem'] = $TongDiem;
       $thongtinphieu['created_at'] = now();
       $thongtinphieu['status'] = 0;
       Session::put('count',count(Session::get('temp')));
    //    Lưu trụ cột cuối cùng
    if(Session::get('count') >= '77'){
        $chitietcauhoiC1 = new phieu1_diem();
        $chitietcauhoiC1['Phieu_id'] = $request->maphieu;
        $chitietcauhoiC1['ChiTiet_id'] = Session::get('ID_C1_Truoc');
        $chitietcauhoiC1['Diem'] =Session::get('DiemC1');
       $chitietcauhoiC1->save();
    //    Lưu đề mục cuối cùng
       $chitietcauhoiC2 = new Phieu1_diem();
       $chitietcauhoiC2['Phieu_id'] = $request->maphieu;
       $chitietcauhoiC2['ChiTiet_id'] = Session::get('ID_C2_Truoc');
       $chitietcauhoiC2['Diem'] =Session::get('DiemC1');
       $chitietcauhoiC2->save();
    }

    //    DB::table('phieuso1')->insert($thongtinphieu);
       $thongtinphieu->save();

    // xử lý đề xuất mô hình cho chuyên gia
    $ThongBaoDeXuat = array();
    $ThongBaoDeXuat['DoanhNghiep_id'] = session::get('DoanhNghiep_id');
    $ThongBaoDeXuat['Loai'] = 3;
    $ThongBaoDeXuat['TieuDe'] = 'Có doanh nghiệp vừa đánh giá';
    $ThongBaoDeXuat['Status'] = 1;
    $ThongBaoDeXuat['Link'] = '/chuyengia/P1_DGM';
    $idtinnhan = DB::table('tinnshan')->insertGetId($ThongBaoDeXuat);
    // lưu nội dung

    //    return Redirect::to('dnviewas');

    }
}
