<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;
class DoanhNghiepController extends Controller
{
    public function __construct()
   {
       $this->middleware('auth');
   }

    public function getdanhnghiep(Request $request){
        $request->user()->authorizeRoles(['DoanhNghiep','Admin']);
        $user = $request->user();

        Session::put('email',$user->email);
        $DoanhNghiep = DB::table('users')->leftjoin('dn_user','dn_user.User_id','=','users.id')
        ->leftjoin('doanhnghiep','doanhnghiep.Id','=','dn_user.DoanhNghiep_id')->where('email',Session::get('email'))->select('dn_user.id As lienket_id','users.*','dn_user.*','doanhnghiep.*')->get();
        Session::put('name',$user->name);
        Session::put('role',"DoanhNghiep");
            return view('DoanhNghiep.Dashboard')->with('DoanhNghiep',$DoanhNghiep);

    }
}
