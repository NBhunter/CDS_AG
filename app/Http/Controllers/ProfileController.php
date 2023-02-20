<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function getdashboard(Request $request){
        $request->user()->authorizeRoles(['Admin']);
        $user = $request->user();
        Session::put('name',$user->name);
        Session::put('role',"Admin");

            return view('thongtin.admindashboard');

    }
    public function getuser(Request $request){
        $request->user()->authorizeRoles(['Admin']);
        $user = $request->user();
        Session::put('name',$user->name);
        Session::put('role',"Admin");
        $user = DB::table('users')->leftjoin('role_user','role_user.User_id','=','users.id')->leftjoin('roles','roles.id','=','role_user.Role_id')
        ->leftjoin('dn_user','dn_user.User_id','=','users.id')->leftjoin('doanhnghiep','doanhnghiep.Id','=','dn_user.DoanhNghiep_id')
        ->select('users.name As tennguoidung','users.*','roles.*','doanhnghiep.*','role_user.*','dn_user.*')->get();
            return view('thongtin.User')->with('User',$user);

    }
    public function getdetail(Request $request,$user_id){
        $request->user()->authorizeRoles(['Admin']);
        $user = $request->user();
        Session::put('name',$user->name);
        Session::put('role',"Admin");
        $user = DB::table('users')->leftjoin('role_user','role_user.User_id','=','users.id')->leftjoin('roles','roles.id','=','role_user.Role_id')
        ->leftjoin('dn_user','dn_user.User_id','=','users.id')->leftjoin('doanhnghiep','doanhnghiep.Id','=','dn_user.DoanhNghiep_id')
        ->select('users.name As tennguoidung','users.*','roles.*','doanhnghiep.*','role_user.*','dn_user.*')->where('users.id',$user_id)->get();
        $roles =DB::table('roles')->get();
            return view('thongtin.profile')->with('User',$user)->with('Roles',$roles);

    }
}
