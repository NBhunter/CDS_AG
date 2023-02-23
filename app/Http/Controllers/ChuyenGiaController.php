<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;

use Illuminate\Support\Facades\Redirect;

class ChuyenGiaController extends Controller
{
    public function getdashboard(Request $request){
        $request->user()->authorizeRoles(['Admin']);
        $user = $request->user();
        Session::put('name',$user->name);
        Session::put('role',"Admin");

            return view('chuyengia.Dashboard');

    }
}
