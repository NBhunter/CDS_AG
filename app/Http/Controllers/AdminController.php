<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;

use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{

    public function __construct()
   {
       $this->middleware('auth');
   }

    public function getdashboard(Request $request){
        $request->user()->authorizeRoles(['Admin']);
        $user = $request->user();
        Session::put('name',$user->name);
        Session::put('role',"Admin");

            return view('admin.admindashboard');

    }
    public function getuser(Request $request){
        $request->user()->authorizeRoles(['Admin']);
        $user = $request->user();
        Session::put('name',$user->name);
        Session::put('role',"Admin");
        $user = DB::table('users')->leftjoin('role_user','role_user.User_id','=','users.id')->leftjoin('roles','roles.id','=','role_user.Role_id')
        ->leftjoin('dn_user','dn_user.User_id','=','users.id')->leftjoin('doanhnghiep','doanhnghiep.Id','=','dn_user.DoanhNghiep_id')
        ->select('users.name As tennguoidung','users.id As idnguoidung','users.*','roles.*','doanhnghiep.*','role_user.*','dn_user.*')->get();
            return view('admin.User')->with('User',$user);

    }

    public function getdetail(Request $request,$user_id){
        $request->user()->authorizeRoles(['Admin']);
        $user = $request->user();
        Session::put('name',$user->name);
        Session::put('role',"Admin");
        $user = DB::table('users')->leftjoin('role_user','role_user.User_id','=','users.id')->leftjoin('roles','roles.id','=','role_user.Role_id')
        ->leftjoin('dn_user','dn_user.User_id','=','users.id')->leftjoin('doanhnghiep','doanhnghiep.Id','=','dn_user.DoanhNghiep_id')
        ->select('users.name As tennguoidung','users.id As idnguoidung','users.*','roles.*','doanhnghiep.*','role_user.*','dn_user.*')->where('users.id',$user_id)->first();
        $roles =DB::table('roles')->get();
            return view('admin.User_detail')->with('user',$user)->with('Roles',$roles);

    }
    public function saveUser(Request $request){
        // $request->user()->authorizeRoles(['Admin']);
        $data = array();
        $data['Role_id'] = $request->role;
        $user_id = $request->id;
        DB::table('role_user')->where('User_id',$user_id)->update($data);
        return Redirect::to('admin/user');
    }
    public function viewnganhnghe(Type $var = null)
    {
        $NganhNghe = DB::table('nganhnghe')->leftjoin('linhvuc','linhvuc.id','=','nganhnghe.LinhVuc_id')->get();
        return view('admin.loaihinhkinhdoanh.ThemNganhNghe')->with('NganhNghe',$NganhNghe);
    }
    public function viewloaihinh(Type $var = null)
    {
        $LoaiHinh = DB::table('loaihinhdoanhnghiep')->get();
        return view('admin.loaihinhkinhdoanh.ThemLoaiHinh')->with('LoaiHinh',$LoaiHinh);
    }
    public function savenganhnghe(Request $request){
        $request->user()->authorizeRoles(['Admin']);
        //thêm chi tiết
        $ct = array();
        $ct['TenNganhNghe'] = $request->Ten;
        $ct['LinhVuc_id'] = $request->linhvuc;
        DB::table('nganhnghe')->insert($ct);

    	return Redirect::to('admin/themnganhnghe');
    }
    public function saveloaihinh(Request $request){
        $request->user()->authorizeRoles(['Admin']);
        //thêm chi tiết
        $ct = array();
        $ct['TenLoaiHinh'] = $request->Ten;
        DB::table('loaihinhdoanhnghiep')->insert($ct);

    	return Redirect::to('admin/themloaihinh');
    }
    public function getLoaiTin(Request $request){
        $request->user()->authorizeRoles(['Admin']);
        $user = $request->user();
        $LoaiTin = DB::table('loaitin')->get();
        return view('admin.loaitin.loaitin')->with("LoaiTin",$LoaiTin);
    }

}
