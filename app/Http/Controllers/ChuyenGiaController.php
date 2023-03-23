<?php

namespace App\Http\Controllers;

use App\Mail\NoficationMail;
use App\Models\phieu1\phieuso1;
use Illuminate\Http\Request;
use Session;
use DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\Console\Input;

class ChuyenGiaController extends Controller
{
    public function getdashboard(Request $request){
        $request->user()->authorizeRoles(['Chuyên Gia','Hiệp Hội','Admin']);
        $user = $request->user();
        Session::put('name',$user->name);
        Session::put('user_id',$user->id);
        $role = DB::table('role_user')->leftjoin('roles','roles.id','=','role_user.Role_id')->where('role_user.User_id',$user->id)->first();
        Session::put('role',$role->name);

            return view('chuyengia.Dashboard');

    }
    // các function Phiếu 1
    public function getidDGMoi_P1(Request $request){
        $request->user()->authorizeRoles(['Admin','Chuyên Gia','Hiệp Hội']);
        $user = $request->user();
        $Phieu1New = DB::table('phieuso1')->leftjoin('users','users.id','=','phieuso1.User_id')
        ->leftjoin('doanhnghiep','doanhnghiep.id','=','phieuso1.DoanhNghiep_Id')->where('phieuso1.status','0')
        ->select('phieuso1.created_at as ThoigianTao','phieuso1.id as IDphieu','phieuso1.*','doanhnghiep.*','users.*')->get();
        return view('chuyengia.Phieu_1.P1_DanhGiaMoi')->with('Phieu1New',$Phieu1New);
    }
    public function getTatCa_P1(Request $request){
        $request->user()->authorizeRoles(['Admin','Chuyên Gia','Hiệp Hội']);
        $user = $request->user();
        $Phieu1New = DB::table('phieuso1')->leftjoin('users','users.id','=','phieuso1.User_id')
        ->leftjoin('doanhnghiep','doanhnghiep.id','=','phieuso1.DoanhNghiep_Id')
        ->select('phieuso1.created_at as ThoigianTao','phieuso1.id as IDphieu','phieuso1.*','doanhnghiep.*','users.*')->get();
        return view('chuyengia.Phieu_1.P1_TatCa')->with('Phieu1New',$Phieu1New);
    }
    public function getChiTiet_P1(Request $request,$IdPhieu1){
        $request->user()->authorizeRoles(['Admin','Chuyên Gia','Hiệp Hội']);

        $Phieu1 =  phieuso1::where('Id',$IdPhieu1);
        $Phieu1->update(['status' => 1]);
        $Phieu1detail =DB::table('phieuso1')->leftjoin('users','users.id','=','phieuso1.User_id')
        ->leftjoin('doanhnghiep','doanhnghiep.id','=','phieuso1.DoanhNghiep_Id')->where('phieuso1.id',$IdPhieu1)
        ->select('phieuso1.created_at as ThoiGianTao','phieuso1.id as IDphieu','phieuso1.*','doanhnghiep.*','users.*')->first();
        if($Phieu1detail->TongDiem  > 256){
            // lấy số cột đạt tiêu chuẩn
            $datmuc = DB::table('phieuso1')->leftjoin('phieu1_diem','phieu1_diem.Phieu_id','=','phieuso1.id')
            ->leftjoin('chitiet','chitiet.id','=','phieu1_diem.chitiet_id')
            ->where('chitiet.Cap','1')->where('phieuso1.id',$IdPhieu1)->where(DB::raw('(phieu1_diem.Diem / chitiet.DiemToiDa*100)'),'>',80)->select(DB::raw('(phieu1_diem.Diem / chitiet.DiemToiDa*100) as phantram'),'phieuso1.created_at as ThoiGianTao','phieuso1.id as IDphieu','phieuso1.*')->get();
            $tongdatmuc = $datmuc->count();
            if($tongdatmuc ==6){
                $trucot = DB::table('phieuso1')->leftjoin('phieu1_diem','phieu1_diem.Phieu_id','=','phieuso1.id')
                ->leftjoin('chitiet','chitiet.id','=','phieu1_diem.chitiet_id')
                ->where('chitiet.Cap','1')->where('phieuso1.id',$IdPhieu1)->select(DB::raw('(phieu1_diem.Diem / chitiet.DiemToiDa*100) as phantram'),'phieuso1.created_at as ThoiGianTao','phieuso1.id as IDphieu','phieuso1.*','chitiet.*','phieu1_diem.*')->get();
                return view('chuyengia.Phieu_1.P1_ChiTiet')->with("Phieu1detail",$Phieu1detail)->with("trucot",$trucot)->with('MucDo','Dẫn Dắt');
            }}
        if(  $Phieu1detail->TongDiem  >192){
            // lấy số cột đạt tiêu chuẩn
            $datmuc = DB::table('phieuso1')->leftjoin('phieu1_diem','phieu1_diem.Phieu_id','=','phieuso1.id')
            ->leftjoin('chitiet','chitiet.id','=','phieu1_diem.chitiet_id')
            ->where('chitiet.Cap','1')->where('phieuso1.id',$IdPhieu1)->where(DB::raw('(phieu1_diem.Diem / chitiet.DiemToiDa*100)'),'>',60)->select(DB::raw('(phieu1_diem.Diem / chitiet.DiemToiDa*100) as phantram'),'phieuso1.created_at as ThoiGianTao','phieuso1.id as IDphieu','phieuso1.*')->get();
            $tongdatmuc = $datmuc->count();
            if($tongdatmuc >=5){
            $trucot = DB::table('phieuso1')->leftjoin('phieu1_diem','phieu1_diem.Phieu_id','=','phieuso1.id')
            ->leftjoin('chitiet','chitiet.id','=','phieu1_diem.chitiet_id')
            ->where('chitiet.Cap','1')->where('phieuso1.id',$IdPhieu1)->select(DB::raw('(phieu1_diem.Diem / chitiet.DiemToiDa*100) as phantram'),'phieuso1.created_at as ThoiGianTao','phieuso1.id as IDphieu','phieuso1.*','chitiet.*','phieu1_diem.*')->get();
            return view('chuyengia.Phieu_1.P1_ChiTiet')->with("Phieu1detail",$Phieu1detail)->with("trucot",$trucot)->with('MucDo','Nâng Cao');
        }}
        if(  $Phieu1detail->TongDiem  > 128){
            $datmuc = DB::table('phieuso1')->leftjoin('phieu1_diem','phieu1_diem.Phieu_id','=','phieuso1.id')
            ->leftjoin('chitiet','chitiet.id','=','phieu1_diem.chitiet_id')
            ->where('chitiet.Cap','1')->where('phieuso1.id',$IdPhieu1)->where(DB::raw('(phieu1_diem.Diem / chitiet.DiemToiDa*100)'),'>',40)->select(DB::raw('(phieu1_diem.Diem / chitiet.DiemToiDa*100) as phantram'),'phieuso1.created_at as ThoiGianTao','phieuso1.id as IDphieu','phieuso1.*')->get();
            $tongdatmuc = $datmuc->count();
            if($tongdatmuc >=4){
            $trucot = DB::table('phieuso1')->leftjoin('phieu1_diem','phieu1_diem.Phieu_id','=','phieuso1.id')
            ->leftjoin('chitiet','chitiet.id','=','phieu1_diem.chitiet_id')
            ->where('chitiet.Cap','1')->where('phieuso1.id',$IdPhieu1)->select(DB::raw('(phieu1_diem.Diem / chitiet.DiemToiDa*100) as phantram'),'phieuso1.created_at as ThoiGianTao','phieuso1.id as IDphieu','phieuso1.*','chitiet.*','phieu1_diem.*')->get();
            return view('chuyengia.Phieu_1.P1_ChiTiet')->with("Phieu1detail",$Phieu1detail)->with("trucot",$trucot)->with('MucDo','Hình thành');
        }}
        if( $Phieu1detail->TongDiem  > 64){
            // lấy số cột đạt tiêu chuẩn
            $datmuc = DB::table('phieuso1')->leftjoin('phieu1_diem','phieu1_diem.Phieu_id','=','phieuso1.id')
            ->leftjoin('chitiet','chitiet.id','=','phieu1_diem.chitiet_id')
            ->where('chitiet.Cap','1')->where('phieuso1.id',$IdPhieu1)->where(DB::raw('(phieu1_diem.Diem / chitiet.DiemToiDa*100)'),'>',20)->select(DB::raw('(phieu1_diem.Diem / chitiet.DiemToiDa*100) as phantram'),'phieuso1.created_at as ThoiGianTao','phieuso1.id as IDphieu','phieuso1.*')->get();
            $tongdatmuc = $datmuc->count();
            if($tongdatmuc >=4){
            $trucot = DB::table('phieuso1')->leftjoin('phieu1_diem','phieu1_diem.Phieu_id','=','phieuso1.id')
            ->leftjoin('chitiet','chitiet.id','=','phieu1_diem.chitiet_id')
            ->where('chitiet.Cap','1')->where('phieuso1.id',$IdPhieu1)->select(DB::raw('(phieu1_diem.Diem / chitiet.DiemToiDa*100) as phantram'),'phieuso1.created_at as ThoiGianTao','phieuso1.id as IDphieu','phieuso1.*','chitiet.*','phieu1_diem.*')->get();
            return view('chuyengia.Phieu_1.P1_ChiTiet')->with("Phieu1detail",$Phieu1detail)->with("trucot",$trucot)->with('MucDo','Bắt đầu');
        }}
        if( $Phieu1detail->TongDiem  > 20){
            // lấy số cột đạt tiêu chuẩn
            $datmuc = DB::table('phieuso1')->leftjoin('phieu1_diem','phieu1_diem.Phieu_id','=','phieuso1.id')
            ->leftjoin('chitiet','chitiet.id','=','phieu1_diem.chitiet_id')
            ->where('chitiet.Cap','1')->where('phieuso1.id',$IdPhieu1)->where(DB::raw('(phieu1_diem.Diem / chitiet.DiemToiDa*100)'),'>',10)->select(DB::raw('(phieu1_diem.Diem / chitiet.DiemToiDa*100) as phantram'),'phieuso1.created_at as ThoiGianTao','phieuso1.id as IDphieu','phieuso1.*')->get();
            $tongdatmuc = $datmuc->count();
            if($tongdatmuc >=4){
            $trucot = DB::table('phieuso1')->leftjoin('phieu1_diem','phieu1_diem.Phieu_id','=','phieuso1.id')
            ->leftjoin('chitiet','chitiet.id','=','phieu1_diem.chitiet_id')
            ->where('chitiet.Cap','1')->where('phieuso1.id',$IdPhieu1)->select(DB::raw('(phieu1_diem.Diem / chitiet.DiemToiDa*100) as phantram'),'phieuso1.created_at as ThoiGianTao','phieuso1.id as IDphieu','phieuso1.*','chitiet.*','phieu1_diem.*')->get();
            return view('chuyengia.Phieu_1.P1_ChiTiet')->with("Phieu1detail",$Phieu1detail)->with("trucot",$trucot)->with('MucDo','Bắt đầu');
        }}
        $trucot = DB::table('phieuso1')->leftjoin('phieu1_diem','phieu1_diem.Phieu_id','=','phieuso1.id')
        ->leftjoin('chitiet','chitiet.id','=','phieu1_diem.chitiet_id')
        ->where('chitiet.Cap','1')->where('phieuso1.id',$IdPhieu1)->select(DB::raw('(phieu1_diem.Diem / chitiet.DiemToiDa*100) as phantram'),'phieuso1.created_at as ThoiGianTao','phieuso1.id as IDphieu','phieuso1.*','chitiet.*','phieu1_diem.*')->get();
        return view('chuyengia.Phieu_1.P1_ChiTiet')->with("Phieu1detail",$Phieu1detail)->with("trucot",$trucot)->with('MucDo','Bắt đầu');

        // return view('chuyengia.Phieu_1.P1_ChiTiet')->with("Phieu1detail",$Phieu1detail)->with("trucot",$trucot)->with('MucDo','Nâng Cao');
    }
    public function getkqPhieu1(Request $request,$IdPhieu1)
    {
        $request->user()->authorizeRoles(['Admin','Chuyên Gia','Hiệp Hội']);
        $Diem = DB::table('chitiet')
        ->leftjoin('chitiet_cauhoi','chitiet_cauhoi.ChiTiet_id','=','chitiet.id')
        ->leftjoin('cauhoi','cauhoi.id','=','chitiet_cauhoi.CauHoi_id')->select('chitiet.id AS idcauhoi','chitiet.*','cauhoi.*','chitiet_cauhoi.*')->orderBy('idcauhoi');

        $Cauhoi = DB::table('chitiet')
        ->leftjoin('chitiet_cauhoi','chitiet_cauhoi.ChiTiet_id','=','chitiet.id')
        ->leftjoin('phieu1_diem','phieu1_diem.ChiTiet_id','=','chitiet.id')
        ->leftjoin('phieuso1','phieu1_diem.Phieu_id','=','phieuso1.id')
        ->leftjoin('cauhoi','cauhoi.id','=','chitiet_cauhoi.CauHoi_id')->where('phieuso1.id',$IdPhieu1)->orwhere('chitiet.Cap',0)
        ->select('chitiet.id AS idcauhoi','chitiet.*','cauhoi.*','chitiet_cauhoi.*','Phieu1_diem.*')->orderBy('idcauhoi')->get();

        return view('chuyengia.Phieu_1.Phieu1_kqdanhgia')->with('Cauhoi',$Cauhoi)->with('time',$IdPhieu1);
        # code...
    }
    public function getChuaDanhGia_P1(Request $request){
        $request->user()->authorizeRoles(['Admin','Chuyên Gia','Hiệp Hội']);
        $DG = array();
        $DGs =DB::table('phieuso1')->select('phieuso1.DoanhNghiep_Id')->Groupby('phieuso1.DoanhNghiep_Id')->get();
        foreach($DGs as $DG){
            $DN[]=$DG->DoanhNghiep_Id;
        }
        $CDG = DB::table('doanhnghiep')->select('doanhnghiep.*')
        ->whereNotIn('doanhnghiep.Id',$DN)->get();
        foreach($CDG as $DN){
            $thongbao =DB::table('tinnhan')->select(DB::raw('COUNT(Id) as slthongbao'))->where('DoanhNghiep_id',$DN->Id)->where('Loai',2)->get();
           if($thongbao[0]->slthongbao >0)
           {$DN->ThongBao = $thongbao;}
           else{
            $DN->ThongBao = "";
           }
        }
        return view('chuyengia.Phieu_1.P1_ChuaDanhGia')->with('CDG',$CDG);
    }
    // mail
    public function sendmail($DN)
    {
        $ad = DB::table('users')->where('id',Session::get('user_id'))->first();
        return Mail::to($DN->email)->send(new NoficationMail($DN,$ad));
    }
    public function thongbaodanhgia(Request $request)
    {
        // $id= Input::get('id');
        $input = $request->collect();
        $request->user()->authorizeRoles(['Admin','ChuyênGia','Hiệp Hội']);
        $TB = array();
        $TB['ChuyenGia_id'] = Session::get('user_id');
        $TB['DoanhNghiep_id'] =$input['id'];
        $TB['TieuDe'] = $input['TieuDe'];
        $TB['Loai'] = 2;
        $TB['status'] = $input['status'];
        $TB['Link'] = $input['Link'];
        $idtinnhan = DB::table('tinnhan')->insertGetId($TB);
        //lưu các nội dung
        $detail = array();
        $detail['TinNhan_id'] = $idtinnhan;
        $detail['NoiDung_TinNhan'] = $input['NoiDung'];
        $detail['created_at'] = now();
        DB::table('chitiet_tinnhan')->insert($detail);
        $DN = DB::table('doanhnghiep')->where('id',$input['id'])->first();
        $this->sendmail($DN);
        // session()->flash('alert-info', 'Đã xong');
        // return redirect()->back();
    }
    public function getDaDanhGia_P1(){

        return view('chuyengia.Phieu_1.P1_DaDanhGia');
    }
    // các function phiếu 2
    public function getDGMoi_P2(){

        return view('chuyengia.Phieu_2.P2_DaDanhGia');
    }
    public function getDaDanhGia_P2(){

        return view('chuyengia.Phieu_2.P2_DaDanhGia');
    }
    public function getTatCa_P2(){

        return view('chuyengia.Phieu_2.P2_TatCa');
    }
    public function getChuaDanhGia_P2(){

        return view('chuyengia.Phieu_2.P2_ChuaDanhGia');
    }
    // các function phiếu 3
    public function getDGMoi_P3(){

        return view('chuyengia.Phieu_3.P3_DanhGiaMoi');
    }
    public function getTatCa_P3(){

        return view('chuyengia.Phieu_3.P3_TatCa');
    }
    public function getDaDanhGia_P3(){

        return view('chuyengia.Phieu_3.P3_DaDanhGia');
    }
    public function getChuaDanhGia_P3(){

        return view('chuyengia.Phieu_3.P3_ChuaDanhGia');
    }
    // các function phiếu 4
    public function getDGMoi_P4(){

        return view('chuyengia.Phieu_4.P4_DanhGiaMoi');
    }
    public function getTatCa_P4(){

        return view('chuyengia.Phieu_4.P4_TatCa');
    }
    public function getDaDanhGia_P4(){

        return view('chuyengia.Phieu_4.P4_DaDanhGia');
    }
    public function getChuaDanhGia_P4(){

        return view('chuyengia.Phieu_4.P4_ChuaDanhGia');
    }
}

