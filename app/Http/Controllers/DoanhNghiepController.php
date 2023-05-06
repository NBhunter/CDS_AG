<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Session;
use DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;
use PhpParser\Node\Stmt\TryCatch;

class DoanhNghiepController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function laythongbao()
    {
        $thongbao = DB::table('tinnhan')->leftjoin('chitiet_tinnhan', 'chitiet_tinnhan.TinNhan_id', '=', 'tinnhan.Id')
        ->where('tinnhan.loai','<>',1)
            ->where('DoanhNghiep_id', Session::get('DoanhNghiep_id'))->get();
        foreach ($thongbao as $tb) {
            $updated = new Carbon($tb->created_at);
            $now = Carbon::now();
            if ($updated->diffInMinutes($now) < 1) {
                $tb->lastOnline = "Thông báo cách đây: Chưa đến 1 phút";
            } elseif ($updated->diffInHours($now) < 1) {
                $tb->lastOnline = $updated->diffInMinutes($now) > 1 ? sprintf("Thông báo cách đây: %d phút trước", $updated->diffInMinutes($now)) : sprintf("Thông báo cách đây: %d phút trước", $updated->diffInMinutes($now));
            } elseif ($updated->diffInDays($now) < 1) {
                $tb->lastOnline = $updated->diffInHours($now) > 1 ? sprintf("Thông báo cách đây: %d giờ trước", $updated->diffInHours($now)) : sprintf("Thông báo cách đây: %d giờ trước", $updated->diffInHours($now));
            } elseif ($updated->diffInWeeks($now) < 7) {
                $tb->lastOnline = $updated->diffInDays($now) > 1 ? sprintf("Thông báo cách đây: %d ngày trước", $updated->diffInDays($now)) : sprintf("Thông báo cách đây: %d ngày trước", $updated->diffInDays($now));
            } elseif ($updated->diffInMonths($now) < 1) {
                $tb->lastOnline = $updated->diffInWeeks($now) > 1 ? sprintf("Thông báo cách đây: %d tuần trước", $updated->diffInWeeks($now)) : sprintf("Thông báo cách đây: %d tuần trước", $updated->diffInWeeks($now));
            } elseif ($updated->diffInYears($now) < 1) {
                $tb->lastOnline = $updated->diffInMonths($now) > 1 ? sprintf("Thông báo cách đây: %d tháng trước", $updated->diffInMonths($now)) : sprintf("Thông báo cách đây: %d tháng trước", $updated->diffInMonths($now));
            } else {
                $tb->lastOnline = $updated->diffInYears($now) > 1 ? sprintf("Thông báo cách đây: %d năm trước", $updated->diffInYears($now)) : sprintf("Thông báo cách đây: %d nămtrước", $updated->diffInYears($now));
            }

        }
        return $thongbao;
    }
    //    @updateprofile
    public function getdanhnghiep(Request $request)
    {
        $request->user()->authorizeRoles(['DoanhNghiep-NV', 'DoanhNghiep-BGD', 'Admin']);
        $user = $request->user();
        Session::forget('DoanhNghiep');
        $DoanhNghiep = DB::table('users')
            ->leftjoin('dn_user', 'dn_user.User_id', '=', 'users.id')
            ->leftjoin('doanhnghiep', 'doanhnghiep.Id', '=', 'dn_user.DoanhNghiep_id')->where('users.email', $user->email)
            ->select('dn_user.id As lienket_id', 'users.*', 'dn_user.*', 'doanhnghiep.*')->first();
            if($DoanhNghiep->TrangThai_XacThuc == 1){
                Session::put('email', $user->email);

                Session::put('name', $user->name);
                Session::put('lienket_id', $DoanhNghiep->lienket_id);
                Session::put('DoanhNghiep_id', $DoanhNghiep->DoanhNghiep_id);
                Session::put('User_id', $DoanhNghiep->User_id);
                Session::put('DoanhNghiep', $DoanhNghiep);

                //lấy điểm bảng 1
                $DanhGia1 = DB::table('phieuso1')->where('DoanhNghiep_Id', $DoanhNghiep->DoanhNghiep_id)->orderByDesc('created_at')->first();
                //lấy điểm bảng 2
                $DanhGia2 = DB::table('phieuso2')->where('DoanhNghiep_Id', $DoanhNghiep->DoanhNghiep_id)->orderByDesc('created_at')->first();
                $DanhGia3 = DB::table('phieuso3')->where('DoanhNghiep_Id', $DoanhNghiep->DoanhNghiep_id)->orderByDesc('created_at')->first();
                $DanhGia4 = DB::table('phieuso4')->where('DoanhNghiep_Id', $DoanhNghiep->DoanhNghiep_id)->orderByDesc('created_at')->first();
                $BanDanhGia = DB::table('phieuso1')->where('DoanhNghiep_Id', $DoanhNghiep->DoanhNghiep_id)->get();

                //lấy thông báo

                $thongbao = $this->laythongbao();


                return view('DoanhNghiep.home')->with('DoanhNghiep', $DoanhNghiep)
                    ->with('DanhGia1', $DanhGia1)->with('DanhGia2', $DanhGia2)->with('DanhGia3', $DanhGia3)
                    ->with('DanhGia4', $DanhGia4)->with('BanDanhGia', $BanDanhGia)->with('thongbao', $thongbao);}
                    else{
                        DB::table('users')->where('email', $user->email)->update(['status'=> '0']);
                        return Redirect::to('/dnviews');
                    }

    }

    public function getprofile(Request $request)
    {
        $request->user()->authorizeRoles(['DoanhNghiep-NV', 'DoanhNghiep-BGD', 'Admin']);
        $user = $request->user();

        Session::put('email', $user->email);
        $DoanhNghiep = DB::table('users')->leftjoin('dn_user', 'dn_user.User_id', '=', 'users.id')
            ->leftjoin('doanhnghiep', 'doanhnghiep.Id', '=', 'dn_user.DoanhNghiep_id')->where('users.email', Session::get('email'))->select('dn_user.id As lienket_id', 'users.*', 'dn_user.*', 'doanhnghiep.*')->first();
        $DN = DB::table('users')->leftjoin('role_user', 'role_user.User_id', '=', 'users.id')
            ->leftjoin('roles', 'roles.id', '=', 'role_user.Role_id')
            ->leftjoin('dn_user', 'dn_user.User_id', '=', 'users.id')
            ->leftjoin('doanhnghiep', 'doanhnghiep.Id', '=', 'dn_user.DoanhNghiep_id')
            ->leftjoin('linhvuc', 'linhvuc.Id', '=', 'doanhnghiep.LinhVuc_id')

            ->leftjoin('nguoidung', 'nguoidung.DoanhNghiep_id', '=', 'doanhnghiep.id')
            ->leftjoin('chitiet_doanhnghiep', 'chitiet_doanhnghiep.DoanhNghiep_id', '=', 'doanhnghiep.id')->where('users.email', $user->email)
            ->select('nguoidung.TenNguoiDung', 'doanhnghiep.email As emaildoanhnghiep', 'chitiet_doanhnghiep.id as idCT', 'doanhnghiep.DiaChiTruSo', 'users.name as Tenuser', 'users.email as emailNguoiDung', 'users.*', 'roles.*', 'doanhnghiep.*', 'role_user.*', 'dn_user.*', 'nguoidung.*', 'linhvuc.*', 'chitiet_doanhnghiep.*')->first();
        // lấy lĩnh vực
        $LinhVuc = DB::table('linhvuc')->get();
        $LoaiHinh = DB::table('nganhnghe')->get();

        // lấy thông báo

        $thongbao = $this->laythongbao();

        // lấy bản số
        return view('thongtin.profile')->with('DoanhNghiep', $DoanhNghiep)->with('DN', $DN)->with('thongbao', $thongbao)
            ->with('LinhVuc', $LinhVuc)->with('LoaiHinh', $LoaiHinh);
    }
    public function updateprofile(Request $request)
    {
        $request->user()->authorizeRoles(['DoanhNghiep-NV', 'DoanhNghiep-BGD', 'Admin']);
        $user = $request->user();


        $CTDN = array();
        $id = $request->idCT;
        $CTDN['DoanhNghiep_id'] = Session::get('DoanhNghiep_id');
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
        if ($id == NULL) {
            $CTDN['created_at'] = Carbon::now();
            DB::table('chitiet_doanhnghiep')->insert($CTDN);
            $alert = 'Đã đăng ký thông tin doanh nghiệp';
        } else {
            $CTDN['updated_at'] = Carbon::now();
            DB::table('chitiet_doanhnghiep')->where('id', $id)->update($CTDN);
            $alert = 'Đã cập nhập doanh nghiệp';
        }
        // lấy bản số
        return redirect()->back()->with('alert', $alert);
    }
    public function thaydoitranthai(Request $request)
    {
        $input = $request->collect();
        $request->user()->authorizeRoles(['DoanhNghiep-NV', 'DoanhNghiep-BGD', 'Admin']);
        $TT = array();
        $TT['TrangThai_HienThi'] = $input['status'];
        DB::table('doanhnghiep')->where('id', $input['DN_id'])->update($TT);
        return response()->json(['success' => 'Status change successfully.']);
    }
    public function ChangePassword(Request $request)
    {
        $request->user()->authorizeRoles(['DoanhNghiep-NV', 'DoanhNghiep-BGD', 'Admin']);


        if( $request->NewPassword == $request->re_Password   )
        {
            $User = User::where('id',Session::get('User_id'))->first();

            if(Hash::check($request->oldPassword,$User['password'])){
            $User['password'] = hash::make($request->NewPassword);

            $User->save();
                $alert = "đã đổi mật khẩu!!!";
                return Redirect::to('/dnviews')->with('alert', $alert);
            }else{
                $alert = "Mật khẩu sai!!!";
                return Redirect::to('/dnviews')->with('alert', $alert);
            }

        }
        else{
            $alert = "Mật khẩu mới không trùng khớp!!!";
            return Redirect::to('/dnviews')->with('alert', $alert);
        }
    }
    public function getmessage(Request $request)
    {
        $request->user()->authorizeRoles(['DoanhNghiep-NV', 'DoanhNghiep-BGD', 'Admin']);
        $thongbao = $this->laythongbao();
        $DoanhNghiep = Session::get('DoanhNghiep');
        $TinNhan = DB::table('tinnhan')
        ->where('tinnhan.DoanhNghiep_id','=',$DoanhNghiep->DoanhNghiep_id)
        ->where('tinnhan.Loai','=','1')->OrderBy('tinnhan.updated_at','desc')
        ->select('tinnhan.created_at as thoigian','tinnhan.id as TNid','tinnhan.*')->get();
        return view('DoanhNghiep.hoidap_DN')->with('DoanhNghiep', $DoanhNghiep)->with('thongbao', $thongbao)->with('TinNhan',$TinNhan);
    }
    public function hoidap(Request $request)
    {
        $input = $request->collect();
        $request->user()->authorizeRoles(['DoanhNghiep-NV', 'DoanhNghiep-BGD', 'Admin']);
        $HD = array();
        $HD['DoanhNghiep_id'] = Session::get('DoanhNghiep_id');
        $HD['status'] = '1';
        $HD['Loai'] = '1';
        $HD['TieuDe'] = $input['TieuDe'];
        $HD['created_at'] = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();
        $HD['updated_at'] = Carbon::now('Asia/Ho_Chi_Minh');
        DB::table('tinnhan')->insert($HD);
        return redirect()->back();
    }
    public function laynoidung(Request $request)
    {
        $input = $request->collect();
        $thongbao = $this->laythongbao();
        $request->user()->authorizeRoles(['DoanhNghiep-NV', 'DoanhNghiep-BGD', 'Admin']);
        $user =$request->user();
        $DoanhNghiep = DB::table('users')
            ->leftjoin('dn_user', 'dn_user.User_id', '=', 'users.id')
            ->leftjoin('doanhnghiep', 'doanhnghiep.Id', '=', 'dn_user.DoanhNghiep_id')->where('users.email', $user->email)
            ->select('dn_user.id As lienket_id', 'users.*', 'dn_user.*', 'doanhnghiep.*')->first();
        $TN = DB::table('tinnhan')
        ->where('tinnhan.id','=',$input['chatid'])
        ->where('tinnhan.Loai','=','1')->OrderBy('tinnhan.updated_at','desc')
        ->select('tinnhan.created_at as thoigian','tinnhan.id as TNid','tinnhan.*')->first();
        $ND = DB::table('tinnhan')
        ->leftjoin('chitiet_tinnhan','chitiet_tinnhan.TinNhan_id','=','tinnhan.id')
        ->where('tinnhan.id','=',$input['chatid'])
        ->where('tinnhan.Loai','=','1')->OrderBy('tinnhan.updated_at','desc')
        ->select('tinnhan.created_at as thoigian','tinnhan.id as TNid','tinnhan.*','chitiet_tinnhan.*')->get();
        $head = '<div class="selected-user"><span>QA: <span class="name">'. $TN->TieuDe .'</span></span></div>';
        $head .=  ' <div class="chat-container osition-static bottom-0 top-0"><ul class="chat-box chatContainerScroll">';
        foreach( $ND as $detail){
            if($detail->LoaiND == 1){
               $time = Carbon::parse( $detail->created_at);
                $head .= '<li class="chat-right">
                <div class="chat-hour">'. $time->toTimeString() .'<span class="fa fa-check-circle"></span></div>
                <div class="chat-text">'. $detail->NoiDung_TinNhan .'
                </div>
                <div class="chat-avatar">
                    <img src="'. asset("img/FIT.png") .'" alt="Retail Admin">
                    <div class="chat-name">'. $user->name . '<br>' . $DoanhNghiep->TenDoanhNghiep .'</div>
                </div>

            </li>';
            }else if($detail->LoaiND == 2){
                $time = Carbon::parse( $detail->created_at);
              $chuyengia =   DB::table('users')
            ->leftjoin('role_user', 'role_user.User_id', '=', 'users.id')
            ->leftjoin('roles','roles.id','=','role_user.Role_id')->where('users.id','=',$detail->Byuser)->select('users.name as ten', 'roles.name as role')->first();
            $head .= '<li class="chat-left">
            <div class="chat-avatar">
                <img src="'. asset("img/FIT.png") .'" alt="Retail Admin">
                <div class="chat-name">'.$chuyengia->ten . '<br>'.$chuyengia->role.'</div>
            </div>

            <div class="chat-text">'. $detail->NoiDung_TinNhan .'</div>
                <div class="chat-hour">'. $time->toTimeString() .' <span class="fa fa-check-circle"></span></div>
        </li>';
            }

        }
        $head .= '</ul>';
        $head .= '<div class="row  reply">
        <div class="col-sm-1 col-xs-1 reply-emojis"><i class="fas fa-smile fa-2x"></i></div>
        <div class="col-sm-9 col-xs-9 reply-main"><textarea class="form-control" rows="1" id="comment"></textarea></div>
        <div class="col-sm-1 col-xs-1 reply-recording"><i class="fa fa-microphone fa-2x" aria-hidden="true"></i></div>
        <div class="col-sm-1 col-xs-1 reply-send"><i id ="send" class="fas fa-paper-plane fa-2x"></i></div></div>';


        try{
            $IDCha = DB::table('chitiet_tinnhan')->where('TinNhan_id',$TN->TNid)->OrderBy('Id','desc')->first();
        } catch (\Illuminate\Database\QueryException $ex) {}
        if(isset($IDCha)){
            $head .= '<script> $(document).ready(function(){
                $("#send").click(function(){
                    var ND = $("#comment").val();
                    $.post("'. URL::to('/SendDN') .'", {
                        _token: $(\'meta[name=csrf-token]\').attr(\'content\'),
                        status: "1",
                        user:"'.$DoanhNghiep->User_id.'",
                        id : "'.$TN->TNid.'",
                        ND: ND,
                        idcha: "'.$IDCha->Id.'",
                        }).done(reappendText('.$TN->TNid.'));
    });
              });
              function reappendText(chatid) {

                $.post("'. URL::to('/LayTinNhan') .'", {
                    _token: $(\'meta[name=csrf-token]\').attr(\'content\'),
                                                        chatid:chatid,
                                                        },function(chatdetail){
              $("#chatview").empty();
               $("#chatview").append(chatdetail);
                                                        });

            }</script>';
        }else{
            $head .= '<script> $(document).ready(function(){
                $("#send").click(function(){
                    var ND = $("#comment").val();
                    $.post("'. URL::to('/SendDN') .'", {
                        _token: $(\'meta[name=csrf-token]\').attr(\'content\'),
                        status: "1",
                        user:"'.$DoanhNghiep->User_id.'",
                        id : "'.$TN->TNid.'",
                        ND: ND,
                        idcha: "    ",
                        }).done(reappendText('.$TN->TNid.'));
    });
              });
              function reappendText(chatid) {

                $.post("'. URL::to('/LayTinNhan') .'", {
                    _token: $(\'meta[name=csrf-token]\').attr(\'content\'),
                                                        chatid:chatid,
                                                        },function(chatdetail){
              $("#chatview").empty();
               $("#chatview").append(chatdetail);
                                                        });

            }</script>';
        }

        return response($head);
    }
    public function Themnoidung(Request $request)
    {
        $input = $request->collect();
        $thongbao = $this->laythongbao();
        $request->user()->authorizeRoles(['DoanhNghiep-NV', 'DoanhNghiep-BGD', 'Admin']);
        $user =$request->user();
        $DoanhNghiep = DB::table('users')
            ->leftjoin('dn_user', 'dn_user.User_id', '=', 'users.id')
            ->leftjoin('doanhnghiep', 'doanhnghiep.Id', '=', 'dn_user.DoanhNghiep_id')->where('users.email', $user->email)
            ->select('dn_user.id As lienket_id', 'users.*', 'dn_user.*', 'doanhnghiep.*')->first();
            $TinNhan = array();
            $TinNhan['IdCha'] = $input['idcha'];
            $TinNhan['LoaiND'] = '1';
            $TinNhan['ByUser'] = $input['user'];
            $TinNhan['TinNhan_id'] = $input['id'];
            $TinNhan['NoiDung_TinNhan'] = $input['ND'];
            $TinNhan['created_at'] = now();
            DB::table('chitiet_tinnhan')->Insert($TinNhan);

    }
}
