<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use DB;


class HiepHoiController extends Controller
{
    public function gethome(Request $request){
        $request->user()->authorizeRoles(['Hiệp Hội','Admin']);
        $user = $request->user();
        Session::put('name',$user->name);
        Session::put('user_id',$user->id);
        $role = DB::table('role_user')->leftjoin('roles','roles.id','=','role_user.Role_id')->where('role_user.User_id',$user->id)->first();
        Session::put('role',$role->name);

            return view('HLH.Dashboard');

    }
}
