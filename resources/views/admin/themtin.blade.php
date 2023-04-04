@extends('admin.admindashboard')
@section('content')
<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading" style="font-weight:bold;text-align:center;font-size:26px;color:#4e73df;font-style:Roboto;">
                   THÊM TIN TỨC
                </header>
                <form role="form" action="{{URL::to('/save_Tin')}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                <input type="hidden" name="action" value="">
                <div class="form-group">
                <label>Lĩnh vực</label>
                <select class="form-control" name="LinhVuc">
                    @foreach ($LinhVuc as $id => $linhvuc )
                    <option for = "linhvuc" value="{{ $linhvuc->Id }}">{{ $linhvuc->TenLinhVuc }}</option>
                    @endforeach

                </select>
                </div>
                <input type="hidden" name="action" value="">
                <div class="form-group">
                <label>Loại tin</label>
                <select class="form-control" name="LoaiTin">
                    @foreach ($LoaiTin as $id => $loaitin )
                    <option for = "LoaiTin" value="{{ $linhvuc->Id }}">{{ $linhvuc->TenLoai }}</option>
                    @endforeach
                </select>
                </div>
                 <div class="form-group">
                    <label>Link Website (nếu có) </label>
                    <input class="form-control" type="text" name="Link">
                </div>
                <div class="form-group">
                    <label>Tiêu đề</label>
                    <input class="form-control" type="text" name="TieuDe" value="">
                </div>
                <div class="form-group">
                    <label>Nội dung</label>
                    <textarea class="form-control"id="summary-ckeditor" name="NoiDung">

                </textarea>

                </div>

                <div class="form-group">
                    <label>Tóm tắt</label>
                    <textarea class="form-control" name="MoTa"></textarea>
                </div>
                <div class="form-group">
                    <label>Hình ảnh đại diện</label>
                    <input class="form-control" type="file" name="filehinhanh" style="height:45px;">
                </div>
                <div class="form-group">
                    <input type="submit" value="Lưu" class="btn btn-success">
                    <input type="reset" value="Hủy" class="btn btn-warning">
                </div>
                </form>
                <script src="//cdn.ckeditor.com/4.16.2/full-all/ckeditor.js"></script>
                {{-- <script type="text/javascript" src="{{ asset('js/ckfinder/ckfinder.js') }}"></script>
<script>CKFinder.config( { connectorPath: @json(route('ckfinder_connector')) } );</script> --}}
@include('ckfinder::setup')
<script>
CKEDITOR.replace( 'summary-ckeditor' ,{
    filebrowserBrowseUrl: '{{ route('ckfinder_browser') }}',
});
</script>


<script>
	// CKFinder.start();
</script>
                @endsection

