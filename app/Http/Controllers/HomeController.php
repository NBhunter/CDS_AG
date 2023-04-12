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
        $tinmoi = DB::table('tintucs')->leftjoin('linhvuc', 'linhvuc.Id', '=', 'tintucs.LinhVuc_id')->select('tintucs.Id as IdTin', 'tintucs.*', 'linhvuc.*')->orderBy('updated_at', 'desc')->paginate(6);

        return view('home.home')->with('slides', $slides)->with('tinmoi', $tinmoi);
    }
    public function indexAllnew()
    {
        $slides = DB::table('slides')->get();
        $tinmoi = DB::table('tintucs')->leftjoin('linhvuc', 'linhvuc.Id', '=', 'tintucs.LinhVuc_id')->select('tintucs.Id as IdTin', 'tintucs.*', 'linhvuc.*')->orderBy('updated_at', 'desc')->paginate(6);

        return view('home.home')->with('slides', $slides)->with('tinmoi', $tinmoi);
    }
    public function NongNghiepIndex()
    {
        $slides = DB::table('slides')->get();
        $tinmoi = DB::table('tintucs')->leftjoin('linhvuc', 'linhvuc.Id', '=', 'tintucs.LinhVuc_id')->select('tintucs.Id as IdTin', 'tintucs.*', 'linhvuc.*')->orderBy('updated_at', 'desc')->paginate(6);

        return view('home.TinLinhVuc')->with('tinmoi', $tinmoi)->with('title', "Tin tức nông nghiệp");
    }
    public function adminHome()
    {
        return view('adminHome');
    }
    public function registerview()
    {
        // lấy lĩnh vực
        $LinhVuc = DB::table('linhvuc')->get();
        $LoaiHinh = DB::table('nganhnghe')->get();

        return view('home.dangkydoanhnghiep')->with('LinhVuc',$LinhVuc)->with('LoaiHinh',$LoaiHinh);
    }
    public function postcomment(Request $request)
    {
        $input = $request->collect();
        $cmt = array();

        if(isset($input['reply_id']))
        {
            $cmt['IdCon'] = $input['reply_id'];
        }
        $cmt['NoiDung']= $input['message'];
        $cmt['TrangThai'] = '0';
        $cmt['email'] = $input['Email'];
        $cmt['TenNguoiBL'] = $input['Name'];
        $cmt['TinTuc_id'] = $input['IdNews'];
        $cmt['NgayCMT'] = date('Y-m-d');
        if (DB::table('binhluan')->insert($cmt))
        {
            $alert = "đã thêm bình luận";
        }
        else{
            $alert =" Bình luận không thành công";
        }

        return redirect()->back()->with('alert',$alert);

    }
}
