@extends('admin.admindashboard')
@section('content')
<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading" style="font-weight:bold;text-align:center;font-size:26px;color:#4e73df;font-style:Roboto;">
                   THÊM TIN TỨC
                </header>
                <input type="hidden" name="action" value="">
                <div class="form-group">
                <label>Lĩnh vực</label>
                <select class="form-control" name="">

                </select>
                </div>
                <input type="hidden" name="action" value="">
                <div class="form-group">
                <label>Loại tin</label>
                <select class="form-control" name="">

                </select>
                </div>
                 <div class="form-group">
                    <label>Link Website (nếu có) </label>
                    <input class="form-control" type="text" name="">
                </div>
                <div class="form-group">
                    <label>Tiêu đề</label>
                    <input class="form-control" type="text" name="" value="">
                </div>
                <div class="form-group">
                    <label>Nội dung</label>
                    <textarea class="form-control"id="idnoidung" name="noidung">

                </textarea>

                </div>

                <div class="form-group">
                    <label>Tóm tắt</label>
                    <textarea class="form-control" name="txtmota"></textarea>
                </div>
                <div class="form-group">
                    <label>Hình ảnh</label>
                    <input class="form-control" type="file" name="filehinhanh" style="height:45px;">
                </div>
                <div class="form-group">
                    <input type="submit" value="Lưu" class="btn btn-success">
                    <input type="reset" value="Hủy" class="btn btn-warning">
                </div>
                </form>
                @endsection

