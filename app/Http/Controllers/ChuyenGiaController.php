<?php

namespace App\Http\Controllers;

use App\Mail\NoficationMail;
use App\Models\phieu1\phieuso1;
use App\Models\Phieu3_RaoCan;
use Illuminate\Http\Request;
use Session;
use DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\Console\Input;
use App\Models\phieuso4;
use App\Models\User;
use Illuminate\Support\Carbon;

class ChuyenGiaController extends Controller
{
    public function getdashboard(Request $request){
        $request->user()->authorizeRoles(['Chuyên Gia','Ban Chấp Hành','Admin']);
        $user = $request->user();
        Session::put('name',$user->name);
        Session::put('user_id',$user->id);
        $role = DB::table('role_user')->leftjoin('roles','roles.id','=','role_user.Role_id')->where('role_user.User_id',$user->id)->first();
        Session::put('role',$role->name);
        if($role->name == 'Chuyên Gia' ){
            Session::put('title_page','Trang chuyên gia');
        }
        if($role->name == 'Ban Chấp Hành' ){
            Session::put('title_page','Trang hiệp hội');
        }
        $home = 'true';
            return view('chuyengia.Dashboard')->with('home',$home);

    }
    public function xulymucdo($Phieu1detail,$IdPhieu1)
    {
        $Phieu1detail->MucDo =sprintf('Chưa khởi động');
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
                // return view('chuyengia.Phieu_1.P1_ChiTiet')->with("Phieu1detail",$Phieu1detail)->with("trucot",$trucot)->with('MucDo','Dẫn Dắt');
                $Phieu1detail->MucDo =sprintf('Dẫn dắt');
                return  $Phieu1detail;
            }}
        if(  $Phieu1detail->TongDiem  > 192){
            // lấy số cột đạt tiêu chuẩn
            $datmuc = DB::table('phieuso1')->leftjoin('phieu1_diem','phieu1_diem.Phieu_id','=','phieuso1.id')
            ->leftjoin('chitiet','chitiet.id','=','phieu1_diem.chitiet_id')
            ->where('chitiet.Cap','1')->where('phieuso1.id',$IdPhieu1)->where(DB::raw('(phieu1_diem.Diem / chitiet.DiemToiDa*100)'),'>',60)->select(DB::raw('(phieu1_diem.Diem / chitiet.DiemToiDa*100) as phantram'),'phieuso1.created_at as ThoiGianTao','phieuso1.id as IDphieu','phieuso1.*')->get();
            $tongdatmuc = $datmuc->count();
            if($tongdatmuc >=5){
            $trucot = DB::table('phieuso1')->leftjoin('phieu1_diem','phieu1_diem.Phieu_id','=','phieuso1.id')
            ->leftjoin('chitiet','chitiet.id','=','phieu1_diem.chitiet_id')
            ->where('chitiet.Cap','1')->where('phieuso1.id',$IdPhieu1)->select(DB::raw('(phieu1_diem.Diem / chitiet.DiemToiDa*100) as phantram'),'phieuso1.created_at as ThoiGianTao','phieuso1.id as IDphieu','phieuso1.*','chitiet.*','phieu1_diem.*')->get();
            // return view('chuyengia.Phieu_1.P1_ChiTiet')->with("Phieu1detail",$Phieu1detail)->with("trucot",$trucot)->with('MucDo','Nâng Cao');
            $Phieu1detail->MucDo =sprintf('Nâng cao');
            return  $Phieu1detail;
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
            // return view('chuyengia.Phieu_1.P1_ChiTiet')->with("Phieu1detail",$Phieu1detail)->with("trucot",$trucot)->with('MucDo','Hình thành');
            $Phieu1detail->MucDo =sprintf('Hình thành');
            return  $Phieu1detail;
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
            // return view('chuyengia.Phieu_1.P1_ChiTiet')->with("Phieu1detail",$Phieu1detail)->with("trucot",$trucot)->with('MucDo','Bắt đầu');
            $Phieu1detail->MucDo =sprintf('Bắt đầu');
            return  $Phieu1detail;
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
            // return view('chuyengia.Phieu_1.P1_ChiTiet')->with("Phieu1detail",$Phieu1detail)->with("trucot",$trucot)->with('MucDo','Bắt đầu');
            $Phieu1detail->MucDo =sprintf('Bắt đầu');
        }}
        return  $Phieu1detail;
    }
    // các function Phiếu 1
    public function getidDGMoi_P1(Request $request){
        $request->user()->authorizeRoles(['Admin','Chuyên Gia','Ban Chấp Hành']);
        $user = $request->user();
        $Phieu1New = DB::table('phieuso1')->leftjoin('users','users.id','=','phieuso1.User_id')
        ->leftjoin('doanhnghiep','doanhnghiep.id','=','phieuso1.DoanhNghiep_Id')->where('phieuso1.status','0')
        ->select('phieuso1.created_at as ThoigianTao','phieuso1.id as IDphieu','phieuso1.*','doanhnghiep.*','users.*')->get();
foreach($Phieu1New as $P1 ){
            $P1 = $this->xulymucdo($P1,$P1->id);
        }
        return view('chuyengia.Phieu_1.P1_DanhGiaMoi')->with('Phieu1New',$Phieu1New);
    }
    public function getTatCa_P1(Request $request){
        $request->user()->authorizeRoles(['Admin','Chuyên Gia','Ban Chấp Hành']);
        $user = $request->user();
        $Phieu1New = DB::table('phieuso1')->leftjoin('users','users.id','=','phieuso1.User_id')
        ->leftjoin('doanhnghiep','doanhnghiep.id','=','phieuso1.DoanhNghiep_Id')
        ->select('phieuso1.created_at as ThoigianTao','phieuso1.id as IDphieu','phieuso1.*','doanhnghiep.*','users.*')->get();
        foreach($Phieu1New as $P1 ){
            $P1 = $this->xulymucdo($P1,$P1->id);
        }
        return view('chuyengia.Phieu_1.P1_TatCa')->with('Phieu1New',$Phieu1New);
    }
    public function getChiTiet_P1(Request $request,$IdPhieu1){
        $request->user()->authorizeRoles(['Admin','Chuyên Gia','Ban Chấp Hành']);

        $Phieu1 =  phieuso1::where('Id',$IdPhieu1);
        $Phieu1->update(['status' => 1]);
        $Phieu1detail =DB::table('phieuso1')->leftjoin('users','users.id','=','phieuso1.User_id')
        ->leftjoin('doanhnghiep','doanhnghiep.id','=','phieuso1.DoanhNghiep_Id')->where('phieuso1.id',$IdPhieu1)
        ->select('phieuso1.created_at as ThoiGianTao','phieuso1.id as IDphieu','phieuso1.*','doanhnghiep.*','users.*')->first();
        // $Phieu1detail->MucDo = "";
        $Phieu1detail = $this->xulymucdo($Phieu1detail,$IdPhieu1);
        $trucot = DB::table('phieuso1')->leftjoin('phieu1_diem','phieu1_diem.Phieu_id','=','phieuso1.id')
        ->leftjoin('chitiet','chitiet.id','=','phieu1_diem.chitiet_id')
        ->where('chitiet.Cap','1')->where('phieuso1.id',$IdPhieu1)->select(DB::raw('(phieu1_diem.Diem / chitiet.DiemToiDa*100) as phantram'),'phieuso1.created_at as ThoiGianTao','phieuso1.id as IDphieu','phieuso1.*','chitiet.*','phieu1_diem.*')->get();
        return view('chuyengia.Phieu_1.P1_ChiTiet')->with("Phieu1detail",$Phieu1detail)->with("trucot",$trucot);

        // return view('chuyengia.Phieu_1.P1_ChiTiet')->with("Phieu1detail",$Phieu1detail)->with("trucot",$trucot)->with('MucDo','Nâng Cao');
    }
    public function getkqPhieu1(Request $request,$IdPhieu1)
    {
        $request->user()->authorizeRoles(['Admin','Chuyên Gia','Ban Chấp Hành']);
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
        $request->user()->authorizeRoles(['Admin','Chuyên Gia','Ban Chấp Hành']);
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
        $request->user()->authorizeRoles(['Admin','ChuyênGia','Ban Chấp Hành']);
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

    // các function phiếu 2
    public function getDGMoi_P2(Request $request){
        $request->user()->authorizeRoles(['Admin','Chuyên Gia','Ban Chấp Hành']);
        $user = $request->user();
        $Phieu2New = DB::table('phieuso2')->leftjoin('users','users.id','=','phieuso2.User_id')
        ->leftjoin('doanhnghiep','doanhnghiep.id','=','phieuso2.DoanhNghiep_Id')->where('phieuso2.status','0')
        ->select('phieuso2.created_at as ThoigianTao','phieuso2.id as IDphieu','phieuso2.status as TrangThai_Phieu','phieuso2.*','doanhnghiep.*','users.*')->get();

        return view('chuyengia.Phieu_2.P2_DanhGiaMoi')->with('Phieu2New',$Phieu2New);
    }

    public function getTatCa_P2(Request $request){

        $request->user()->authorizeRoles(['Admin','Chuyên Gia','Ban Chấp Hành']);
        $user = $request->user();
        $Phieu2New = DB::table('phieuso2')->leftjoin('users','users.id','=','phieuso2.User_id')
        ->leftjoin('doanhnghiep','doanhnghiep.id','=','phieuso2.DoanhNghiep_Id')
        ->select('phieuso2.created_at as ThoigianTao','phieuso2.id as IDphieu','phieuso2.status as TrangThai_Phieu','phieuso2.*','doanhnghiep.*','users.*')->get();

        return view('chuyengia.Phieu_2.P2_DaDanhGia')->with('Phieu2New',$Phieu2New);
    }
    public function getChuaDanhGia_P2(Request $request){
        $request->user()->authorizeRoles(['Admin','Chuyên Gia','Ban Chấp Hành']);
        $DG = array();
        $DGs =DB::table('phieuso2')->select('phieuso2.DoanhNghiep_Id')->Groupby('phieuso2.DoanhNghiep_Id')->get();
        foreach($DGs as $DG){
            $DN[]=$DG->DoanhNghiep_Id;
        }
        $CDG = DB::table('doanhnghiep')->select('doanhnghiep.*')
        ->whereNotIn('doanhnghiep.Id',$DN)->get();
        foreach($CDG as $DN){
            $thongbao =DB::table('tinnhan')->select(DB::raw('COUNT(Id) as slthongbao'))->where('DoanhNghiep_id',$DN->Id)->where('Loai',3)->get();
           if($thongbao[0]->slthongbao >0)
           {$DN->ThongBao = $thongbao;}
           else{
            $DN->ThongBao = "";
           }
        }
        return view('chuyengia.Phieu_2.P2_ChuaDanhGia')->with('CDG',$CDG);
    }
    public function thongbaodanhgiaP2(Request $request)
    {
        // $id= Input::get('id');

        $input = $request->collect();
        $request->user()->authorizeRoles(['Admin','ChuyênGia','Ban Chấp Hành']);
        $TB = array();
        $TB['ChuyenGia_id'] = Session::get('user_id');
        $TB['DoanhNghiep_id'] =$input['id'];
        $TB['TieuDe'] = $input['TieuDe'];
        $TB['Loai'] = 3;
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
        $Success = "Đã thông báo";
        return Redirect::to('/chuyengia/P2_ChuaDG')->with('Success',$Success);
    }
    // các function phiếu 3
    public function getDGMoi_P3(Request $request){
        $request->user()->authorizeRoles(['Admin','Chuyên Gia','Ban Chấp Hành']);
        $P3 = DB::table('phieu3_raocan')
                            ->leftjoin('doanhnghiep','phieu3_raocan.DoanhNghiep_id','=','doanhnghiep.id')->where('phieu3_raocan.status','0')
                            ->select('phieu3_raocan.Id as IDPhieu','phieu3_raocan.*','doanhnghiep.*')->get();
        return view('chuyengia.Phieu_3.P3_DanhGiaMoi')->with('Phieu3',$P3);
    }
    public function getTatCa_P3(Request $request){
        $request->user()->authorizeRoles(['Admin','Chuyên Gia','Ban Chấp Hành']);
        $P3 = DB::table('phieu3_raocan')->leftjoin('doanhnghiep','phieu3_raocan.DoanhNghiep_id','=','doanhnghiep.id')
                            ->select('phieu3_raocan.id as IDPhieu','phieu3_raocan.*','doanhnghiep.*')->get();
        return view('chuyengia.Phieu_3.P3_TatCa')->with('Phieu3',$P3);
    }
    public function getDaDanhGia_P3(){

        return view('chuyengia.Phieu_3.P3_DaDanhGia');
    }
    public function getChuaDanhGia_P3(){

        return view('chuyengia.Phieu_3.P3_ChuaDanhGia');
    }
    public function getChiTiet_P3(Request $request,$IdPhieu3)
    {
        $request->user()->authorizeRoles(['Admin','Chuyên Gia','Ban Chấp Hành']);

        $Phieu3 =  Phieu3_RaoCan::where('Id',$IdPhieu3);
        // $Phieu3->update(['status' => 1]);
        $Phieu3detail =DB::table('phieu3_raocan')
                            ->leftjoin('doanhnghiep','doanhnghiep.id','=','phieu3_raocan.DoanhNghiep_Id')->where('phieu3_raocan.id',$IdPhieu3)
                            ->select('phieu3_raocan.created_at as ThoiGianTao','phieu3_raocan.id as IDphieu','phieu3_raocan.*','doanhnghiep.*')->first();

        return view('chuyengia.Phieu_3.P3_ChiTiet')->with("Phieu3detail",$Phieu3detail);
    }
    // các function phiếu 4
    public function getDGMoi_P4(Request $request){
        $request->user()->authorizeRoles(['Admin','Chuyên Gia','Ban Chấp Hành']);
        $P4 = DB::table('phieuso4')->leftjoin('doanhnghiep','phieuso4.DoanhNghiep_id','=','doanhnghiep.id')
        ->select('phieuso4.id as IDPhieu','phieuso4.*','doanhnghiep.*')->where('phieuso4.status','0')->get();
        return view('chuyengia.Phieu_4.P4_DanhGiaMoi')->with('Phieu4',$P4);
    }
    public function getTatCa_P4(Request $request){
        $request->user()->authorizeRoles(['Admin','Chuyên Gia','Ban Chấp Hành']);
        $P4 = DB::table('phieuso4')->leftjoin('doanhnghiep','phieuso4.DoanhNghiep_id','=','doanhnghiep.id')
        ->select('phieuso4.id as IDPhieu','phieuso4.*','doanhnghiep.*')->get();
        return view('chuyengia.Phieu_4.P4_TatCa')->with('Phieu4',$P4);
    }
    public function getDaDanhGia_P4(){

        return view('chuyengia.Phieu_4.P4_DaDanhGia');
    }
    public function getChuaDanhGia_P4(){

        return view('chuyengia.Phieu_4.P4_ChuaDanhGia');
    }
    public function getChiTiet_P4(Request $request,$IdPhieu4){
        $request->user()->authorizeRoles(['Admin','Chuyên Gia','Ban Chấp Hành']);

        $Phieu4 =  phieuso4::where('Id',$IdPhieu4);
        $Phieu4->update(['status' => 1]);
        $Phieu4detail =DB::table('phieuso4')
                            ->leftjoin('doanhnghiep','doanhnghiep.id','=','phieuso4.DoanhNghiep_Id')->where('phieuso4.id',$IdPhieu4)
                            ->select('phieuso4.created_at as ThoiGianTao','phieuso4.id as IDphieu','phieuso4.*','doanhnghiep.*')->first();

        return view('chuyengia.Phieu_4.P4_ChiTiet')->with("Phieu4detail",$Phieu4detail);

        // return view('chuyengia.Phieu_1.P1_ChiTiet')->with("Phieu1detail",$Phieu1detail)->with("trucot",$trucot)->with('MucDo','Nâng Cao');
    }
    public function getNewAcDN(Request $re)
    {
        $re->user()->authorizeRoles(['Admin','Ban Chấp Hành']);
        $NewDN = DB::table('doanhnghiep')->Orderby('TrangThai_XacThuc', 'ASC')->get();
        return view('chuyengia.ALLDN')->with('NewDN',$NewDN);
    }
    public function getDNDetail(Request $re, $DN_id)
    {
        $re->user()->authorizeRoles(['Admin']);
        $DN = DB::table('doanhnghiep')
                        ->leftjoin('chitiet_doanhnghiep','doanhnghiep.id','=','chitiet_doanhnghiep.DoanhNghiep_id')
                        ->leftjoin('dn_user','doanhnghiep.id','=','dn_user.DoanhNghiep_id')
                        ->leftjoin('Users','dn_user.User_id','=','Users.id')
                        ->leftjoin('role_user','Users.id','=','role_user.User_id')
                        ->leftjoin('Roles','Roles.id','=','role_user.Role_id')->where('doanhnghiep.Id',$DN_id)
                        ->select('Users.email as EmailND','doanhnghiep.id as DNID','Users.name as TenND','Roles.name as RoleName','doanhnghiep.*','chitiet_doanhnghiep.*','Users.*')->first();
                        $LinhVuc = DB::table('linhvuc')->get();
        $LoaiHinh = DB::table('nganhnghe')->get();
        return view('chuyengia.DetailDN')->with('DN',$DN)->with('LinhVuc', $LinhVuc)->with('LoaiHinh', $LoaiHinh);

    }
    public function saveDN(Request $request)
    {
        $DN = array();
        $DN['Id'] = $request->MST;
        $DN['TenDoanhNghiep'] = $request->TenDN;
        $DN['TenVietTat'] = $request->TenVT;
        $DN['DiaChiTruSo'] = $request->TruSo;
        $DN['DiaPhuong'] = $request->DiaPhuong;
        $DN['SoLuongLaoDong'] = $request->QuyMo;
        $DN['email'] = $request->Email;
        $DN['SoDienThoai'] = $request->SDT;
        $DN['LinhVuc_Id'] = $request->LinhVuc;
        $DN['TrangThai_XacThuc'] = '1';
        $CTDN = array();
        DB::table('doanhnghiep')->where('id',$request->idCT)->update($DN);
        $CTDN['DoanhNghiep_id'] = $request->MST;
        $CTDN['MaSoThue'] = $request->MST;
        $CTDN['NgayHoatDong'] = $request->NHD;
        $CTDN['LoaiHinhDN'] = $request->LoaiHinh;
        $CTDN['TenVietTat'] = $request->TenVT;
        $CTDN['TenTiengAnh'] = $request->TenTA;
        $CTDN['VonDieuLe'] = $request->VonDieuLe;
        $CTDN['QuyMoNhanSu'] = $request->QuyMo;
        $CTDN['DC_ThanhPho'] = $request->DC_ThanhPho;
        $CTDN['DC_Huyen'] = $request->DC_Huyen;
        $CTDN['DC_Phuong'] = $request->DC_Phuong;
        $CTDN['DC_SoNha'] = $request->DC;
        $CTDN['SDT'] = $request->SDT;
        $CTDN['FAX'] = $request->Fax;
        $CTDN['Website'] = $request->Web;
        $CTDN['Zipcode'] = $request->Zip;

        $CTDN['created_at'] = Carbon::now();
        DB::table('chitiet_doanhnghiep')->where('DoanhNghiep_id',$request->idCT)->update($CTDN);

        $alert = 'Đã đăng ký thông tin doanh nghiệp';
        $User = User::where('email',$request->EmailNguoiDaiDien)->first();
        $User['status'] = 1;
        $User->save();
        return Redirect::to('/admin/DSDoanhNghiep')->with('alert', $alert);
    }
}

