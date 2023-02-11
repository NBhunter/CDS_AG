<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

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
}
