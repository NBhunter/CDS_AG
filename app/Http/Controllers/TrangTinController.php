<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\slide;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Redirect;
class TrangTinController extends Controller
{
    public function getLinhVuc(Request $request){
        $request->user()->authorizeRoles(['Admin']);
        $user = $request->user();
        $LinhVuc = DB::table('linhvuc')->get();
        return view('admin.linhvuc.linhvuc')->with("LinhVuc",$LinhVuc);
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
// lĩnh vực
    public function getLinhVucnew(Request $request){
        $request->user()->authorizeRoles(['Admin']);
        $user = $request->user();

        return view('admin.linhvuc.linhvuc_new');
    }
    public function getLinhVucchitiet(Request $request,$linhvuc_id){
        $request->user()->authorizeRoles(['Admin']);
        $user = $request->user();
        $LinhVuc = DB::table('linhvuc')->where('id',$linhvuc_id)->first();
        return view('admin.linhvuc.linhvuc_detail')->with("LinhVuc",$LinhVuc);
    }
    public function UpdateLinhVuc(Request $request)
    {

        $request->user()->authorizeRoles(['Admin']);
        $LinhVuc = array();
        $LinhVuc['TenLinhVuc'] = $request->TenLinhVuc;
        $LinhVuc['MoTa'] = $request->MoTa;
        if($request->id == null)
        {
            try {
                DB::table('linhvuc')->insert($LinhVuc)  ;
           } catch (\Illuminate\Database\QueryException $ex) {
               $alert = "Thêm lĩnh vực không thành công";
               return Redirect::to('/admin/xem_linh_vuc')->with('alert',$alert);
           }


           $Success = "Đã thêm lĩnh vực";
               return Redirect::to('/admin/xem_linh_vuc')->with('Success',$Success);

        }else{
    // nếu lỗi thì nó sẽ thông báo alert, nếu không thì success
        try {
             DB::table('linhvuc')->where('id',$request->id)->update($LinhVuc)  ;
        } catch (\Illuminate\Database\QueryException $ex) {
            $alert = "Thay đổi thông tin không thành công";
            return Redirect::to('/admin/xem_linh_vuc')->with('alert',$alert);
        }


        $Success = "Đã thay đổi thông tin";
            return Redirect::to('/admin/xem_linh_vuc')->with('Success',$Success);
        }

    }
    public function DeleteLinhVuc(Request $request)
    {

        $request->user()->authorizeRoles(['Admin']);

        // nếu lỗi thì nó sẽ thông báo alert, nếu không thì success
        try {
             DB::table('linhvuc')->where('id',$request->id)->delete();
        } catch (\Illuminate\Database\QueryException $ex) {
            $alert = "Xóa không thành công";
            return Redirect::to('/admin/xem_linh_vuc')->with('alert',$alert);
        }


        $Success = "Đã xóa lĩnh vực";
            return Redirect::to('/admin/xem_linh_vuc')->with('Success',$Success);


    }
}
