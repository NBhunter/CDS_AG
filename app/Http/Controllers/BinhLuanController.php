<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BinhLuanController extends Controller
{
    //
    public function getidBinhLuan(){

        return view('admin.binhluan');
    }
}
