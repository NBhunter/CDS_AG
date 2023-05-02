<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;

use Carbon\Carbon;
use App\Mail\CreateAccountmail;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getdashboard(Request $request)
    {
        $request->user()->authorizeRoles(['Admin', 'CTV']);
        $user = $request->user();
        Session::put('user_id', $user->id);
        Session::put('name', $user->name);
        $role = DB::table('role_user')->leftjoin('Roles', 'role_user.Role_id', 'Roles.id')->where('role_user.User_id', $user->id)->first();
        Session::put('role', $role->name);

        return view('admin.adminhome');
    }
    public function getuser(Request $request)
    {
        $request->user()->authorizeRoles(['Admin']);
        $user = $request->user();
        Session::put('name', $user->name);
        Session::put('role', "Admin");
        $user = DB::table('users')->join('role_user', 'role_user.User_id', '=', 'users.id')
            ->leftjoin('roles', 'roles.id', '=', 'role_user.Role_id')
            ->where('role_user.Role_id', '!=', '1')
            ->select('users.name As tennguoidung', 'users.id As idnguoidung', 'users.email as Uemail', 'users.*', 'roles.*', 'role_user.*')->get();
        return view('admin.User')->with('User', $user);
    }
    public function newuser(Request $request)
    {
        $request->user()->authorizeRoles(['Admin']);
        $user = $request->user();
        Session::put('name', $user->name);
        Session::put('role', "Admin");
        $roles = DB::table('roles')->WHERE('name', 'not like', 'DoanhNghiep%')->get();
        return view('admin.new_user')->with('Roles', $roles);
    }
    public function sendmail($Email, $Ten, $goto)
    {

        return Mail::to($Email)->send(new CreateAccountmail($Email, $Ten, $goto));
    }
    public function createuser(Request $request)
    {
        $request->user()->authorizeRoles(['Admin']);
        $user = array();
        $user['name'] = $request->fname;
        $user['email'] = $request->femail;
        $user['Password'] = Hash::make($request->fPassword);
        $user['status'] = '1';
        $role = array();
        $role['Role_id'] = $request->role;
        $role['User_id'] = DB::table('users')->insertGetId($user);
        DB::table('role_user')->insert($role);
        $roles = DB::table('roles')->WHERE('name', 'not like', 'DoanhNghiep%')->get();
        return Redirect::to('admin/user');
    }

    public function getdetail(Request $request, $user_id)
    {
        $request->user()->authorizeRoles(['Admin']);
        $user = $request->user();
        Session::put('name', $user->name);
        Session::put('role', "Admin");
        $user = DB::table('users')
            ->leftjoin('role_user', 'role_user.User_id', '=', 'users.id')
            ->leftjoin('roles', 'roles.id', '=', 'role_user.Role_id')
            ->leftjoin('dn_user', 'dn_user.User_id', '=', 'users.id')
            ->leftjoin('doanhnghiep', 'doanhnghiep.Id', '=', 'dn_user.DoanhNghiep_id')
            ->select('users.name As tennguoidung', 'users.id As idnguoidung', 'users.*', 'roles.*', 'doanhnghiep.*', 'role_user.*', 'dn_user.*')->where('users.id', $user_id)->first();
        $roles = DB::table('roles')->get();
        return view('admin.User_detail')->with('user', $user)->with('Roles', $roles);
    }
    public function saveUser(Request $request)
    {
        // $request->user()->authorizeRoles(['Admin']);
        $data = array();
        $data['Role_id'] = $request->role;
        $user_id = $request->id;
        DB::table('role_user')->where('User_id', $user_id)->update($data);
        return Redirect::to('admin/user');
    }
    public function viewnganhnghe(Type $var = null)
    {
        $NganhNghe = DB::table('nganhnghe')->leftjoin('linhvuc', 'linhvuc.id', '=', 'nganhnghe.LinhVuc_id')->get();
        return view('admin.loaihinhkinhdoanh.ThemNganhNghe')->with('NganhNghe', $NganhNghe);
    }
    public function viewloaihinh(Type $var = null)
    {
        $LoaiHinh = DB::table('loaihinhdoanhnghiep')->get();
        return view('admin.loaihinhkinhdoanh.ThemLoaiHinh')->with('LoaiHinh', $LoaiHinh);
    }
    public function savenganhnghe(Request $request)
    {
        $request->user()->authorizeRoles(['Admin', 'CTV']);
        //thêm chi tiết
        $ct = array();
        $ct['TenNganhNghe'] = $request->Ten;
        $ct['LinhVuc_id'] = $request->linhvuc;
        DB::table('nganhnghe')->insert($ct);

        return Redirect::to('admin/themnganhnghe');
    }
    public function saveloaihinh(Request $request)
    {
        $request->user()->authorizeRoles(['Admin', 'CTV']);
        //thêm chi tiết
        $ct = array();
        $ct['TenLoaiHinh'] = $request->Ten;
        DB::table('loaihinhdoanhnghiep')->insert($ct);

        return Redirect::to('admin/themloaihinh');
    }
    public function getLoaiTin(Request $request)
    {
        $request->user()->authorizeRoles(['Admin', 'CTV']);
        $user = $request->user();
        $LoaiTin = DB::table('loaitin')->get();
        return view('admin.loaitin.loaitin')->with("LoaiTin", $LoaiTin);
    }
    public function getLoaiTinMoi(Request $request)
    {
        $request->user()->authorizeRoles(['Admin', 'CTV']);
        $user = $request->user();

        return view('admin.loaitin.loaitin_new');
    }
    public function getLoaiTinChiTiet(Request $request, $loaitin_id)
    {
        $request->user()->authorizeRoles(['Admin']);
        $user = $request->user();
        $LoaiTin = DB::table('loaitin')->where('id', $loaitin_id)->first();
        return view('admin.loaitin.loaitin_detail')->with("LoaiTin", $LoaiTin);
    }
    public function UpdateLoaiTin(Request $request)
    {

        $request->user()->authorizeRoles(['Admin', 'CTV']);
        $LoaiTin = array();
        $LoaiTin['TenLoai'] = $request->TenLoai;
        if ($request->id == null) {
            try {
                DB::table('loaitin')->insert($LoaiTin);
            } catch (\Illuminate\Database\QueryException $ex) {
                $alert = "Thêm loại tin mới không thành công";
                return Redirect::to('/admin/xemloaitin')->with('alert', $alert);
            }


            $Success = "Đã thêm vào loại tin mới";
            return Redirect::to('/admin/xemloaitin')->with('Success', $Success);
        } else {
            // nếu lỗi thì nó sẽ thông báo alert, nếu không thì success
            try {
                DB::table('loaitin')->where('id', $request->id)->update($LoaiTin);
            } catch (\Illuminate\Database\QueryException $ex) {
                $alert = "Thay đổi thông tin không thành công";
                return Redirect::to('/admin/xemloaitin')->with('alert', $alert);
            }


            $Success = "Đã thay đổi thông tin";
            return Redirect::to('/admin/xemloaitin')->with('Success', $Success);
        }
    }
    public function DeleteLoaiTin(Request $request)
    {

        $request->user()->authorizeRoles(['Admin', 'CTV']);

        // nếu lỗi thì nó sẽ thông báo alert, nếu không thì success
        try {
            DB::table('loaitin')->where('id', $request->id)->delete();
        } catch (\Illuminate\Database\QueryException $ex) {
            $alert = "Xóa không thành công";
            return Redirect::to('/admin/xemloaitin')->with('alert', $alert);
        }


        $Success = "Đã xóa loại tin thành công";
        return Redirect::to('/admin/xemloaitin')->with('Success', $Success);
    }
    // lấy danh sách doanh nghiệp
    public function getNewAcDN(Request $re)
    {
        $re->user()->authorizeRoles(['Admin']);
        $NewDN = DB::table('doanhnghiep')->Orderby('TrangThai_XacThuc', 'ASC')->get();
        return view('admin.ALLDN')->with('NewDN',$NewDN);
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
        return view('admin.DetailDN')->with('DN',$DN)->with('LinhVuc', $LinhVuc)->with('LoaiHinh', $LoaiHinh);

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
    public function updatePW(Request $request)
    {
        $request->user()->authorizeRoles(['Admin', 'CTV']);
        $User = User::where('id',Session::get('user_id'))->where('password',hash::make($request->oldpw))->first();

            if( $request->Newpw == $request->repw   )
            {
                $User = User::where('id',Session::get('user_id'))->first();

                if(Hash::check($request->oldpw,$User['password'])){
                $User['password'] = hash::make($request->Newpw);

                $User->save();
                    $alert = "đã đổi mật khẩu!!!";
                    return Redirect::to('/admin/main')->with('alert', $alert);
                }else{
                    $alert = "Mật khẩu sai!!!";
                    return Redirect::to('/admin/main')->with('alert', $alert);
                }

            }
            else{
                $alert = "Mật khẩu mới không trùng khớp!!!";
                return Redirect::to('/admin/main')->with('alert', $alert);
            }
        }

}
