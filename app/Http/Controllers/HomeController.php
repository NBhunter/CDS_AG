<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $slides = DB::table('slides')->get();
        $tinmoi = DB::table('tintucs')->leftjoin('linhvuc','linhvuc.Id','=','tintucs.LinhVuc_id')->select('tintucs.Id as IdTin','tintucs.*','linhvuc.*')->orderBy('updated_at', 'desc')->limit(5)->get();

        return view('home.home')->with('slides',$slides)->with('tinmoi',$tinmoi);
    }
    public function adminHome()
    {
        return view('adminHome');
    }
}
