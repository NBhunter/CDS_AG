<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\slide;
use Illuminate\Support\Facades\Redirect;
class TrangTinController extends Controller
{
    public function getLinhVuc(Request $request){
        $request->user()->authorizeRoles(['Admin']);
        $user = $request->user();
        $LinhVuc = DB::table('linhvuc')->get();
        return view('admin.linhvuc.linhvuc')->with("LinhVuc",$LinhVuc);
    }
    public function getLinhVucchitiet(Request $request,$linhvuc_id){
        $request->user()->authorizeRoles(['Admin']);
        $user = $request->user();
        $LinhVuc = DB::table('linhvuc')->where('id',$linhvuc_id)->first();
        return view('admin.linhvuc.linhvuc_detail')->with("LinhVuc",$LinhVuc);
    }
    public function getaddslide(Request $request)
    {
        $request->user()->authorizeRoles(['Admin']);
        return view('admin.slide.add_slide');
    }
    public function saveslide(Request $request){
        $request->user()->authorizeRoles(['Admin']);
        $data= new slide();
        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('slide'), $filename);
            $data['Link']= $filename;
            $data['TenBanner'] = $request->name;
            $data['Status'] = "1";
        }
        $data->save();
        return Redirect::to('admin/main');
    }
    public function getslides(Request $request)
    {
        $request->user()->authorizeRoles(['Admin']);
        $slides = DB::table('slides')->get();
        return view('admin.slide.slide_list')->with('slides',$slides);
    }
}
