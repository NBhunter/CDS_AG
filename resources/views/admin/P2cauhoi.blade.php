@extends('admin.admindashboard')
@section('content')
<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading" style="font-weight:bold;text-align:center;font-size:22px;color:#4e73df;font-style:Roboto;">
                   THÊM CÂU HỎI PHIẾU 2
                </header>
                 <?php
                    $message = Session::get('message');
                    if($message){
                        echo '<span class="text-alert">'.$message.'</span>';
                        Session::put('message',null);
                    }
                    ?>
                <div class="panel-body">

                    <div class="position-center">
                        <form role="form" action="{{URL::to('/save-cauhoi_p2')}}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="exampleInputPassword1">số lượng câu hỏi</label>
                                  <select name="Cap" class="form-control input-sm m-bot15" onchange="changerID(this)">
                                     <option value="1">(1)</option>
                                        <option value="2">(2)</option>
                                        <option value="3">(3)</option>
                                        <option value="4">(4)</option>
                                        <option value="5">(5)</option>
                                        <option value="0" selected>(0)</option>
                                </select>
                            </div>
                            <div class="form-group" id="tieuchi">
                                <label for="exampleInputEmail1">Danh mục</label>
                                <input type="text" data-validation="length" data-validation-length="min10" data-validation-error-msg="Điền ít nhất 10 ký tự" name="Ten" class="form-control " id="NoiDung" placeholder="Nhập tiêu chí">
                            </div>
                            <div class="form-group" id="tieuchi">
                                <label for="exampleInputEmail1">Mô tả</label>
                                <input type="text" data-validation="length" data-validation-length="min10" data-validation-error-msg="Điền ít nhất 10 ký tự" name="TenCauHoi" class="form-control " id="TenCauHoi" placeholder="Nhập Mô Tả">
                            </div>
                            <div class="form-group" id="cauhoi1" hidden>
                                <label for="exampleInputPassword1">Câu hỏi 1</label>
                                <textarea style="resize: none"  rows="8" class="form-control" name="TenCauHoi1" id="ckeditor1" placeholder="Nhập câu hỏi"></textarea>
                            </div>
                            <div class="form-group" id="cauhoi2" hidden>
                                <label for="exampleInputPassword1">Câu hỏi 2</label>
                                <textarea style="resize: none"  rows="8" class="form-control" name="TenCauHoi2" id="ckeditor1" placeholder="Nhập câu hỏi"></textarea>
                            </div>
                            <div class="form-group" id="cauhoi3" hidden>
                                <label for="exampleInputPassword1">Câu hỏi 3</label>
                                <textarea style="resize: none"  rows="8" class="form-control" name="TenCauHoi3" id="ckeditor1" placeholder="Nhập câu hỏi"></textarea>
                            </div>
                            <div class="form-group" id="cauhoi4" hidden>
                                <label for="exampleInputPassword1">Câu hỏi 4</label>
                                <textarea style="resize: none"  rows="8" class="form-control" name="TenCauHoi4" id="ckeditor1" placeholder="Nhập câu hỏi"></textarea>
                            </div>
                            <div class="form-group" id="cauhoi5" hidden>
                                <label for="exampleInputPassword1">Câu hỏi 5</label>
                                <textarea style="resize: none"  rows="8" class="form-control" name="TenCauHoi5" id="ckeditor1" placeholder="Nhập câu hỏi"></textarea>
                            </div>
                        <button type="submit" name="add_product" id="btn" class="btn btn-info" disabled><i class='fas fa-plus'></i>  Thêm</button>
                        </form>
                    </div>

                </div>
            </section>

    </div>
    <script>
function changerID(obj){
    var value = obj.value;
    if(value =='1')
    {
    document.getElementById("cauhoi1").hidden = false;
    document.getElementById("cauhoi2").hidden = true;
    document.getElementById("cauhoi3").hidden = true;
    document.getElementById("cauhoi4").hidden = true;
    document.getElementById("cauhoi5").hidden = true;
    document.getElementById("btn").disabled = false;
    }else if(value =='2')
    {
    document.getElementById("cauhoi1").hidden = false;
    document.getElementById("cauhoi2").hidden = false;
    document.getElementById("cauhoi3").hidden = true;
    document.getElementById("cauhoi4").hidden = true;
    document.getElementById("cauhoi5").hidden = true;
    document.getElementById("btn").disabled = false;
    }else if(value =='3')
    {
    document.getElementById("cauhoi1").hidden = false;
    document.getElementById("cauhoi2").hidden = false;
    document.getElementById("cauhoi3").hidden = false;
    document.getElementById("cauhoi4").hidden = true;
    document.getElementById("cauhoi5").hidden = true;
    document.getElementById("btn").disabled = false;
    }else if(value =='4')
    {
    document.getElementById("cauhoi1").hidden = false;
    document.getElementById("cauhoi2").hidden = false;
    document.getElementById("cauhoi3").hidden = false;
    document.getElementById("cauhoi4").hidden = false;
    document.getElementById("cauhoi5").hidden = true;
    document.getElementById("btn").disabled = false;
    }else if(value =='5')
    {
    document.getElementById("cauhoi1").hidden = false;
    document.getElementById("cauhoi2").hidden = false;
    document.getElementById("cauhoi3").hidden = false;
    document.getElementById("cauhoi4").hidden = false;
    document.getElementById("cauhoi5").hidden = false;
    document.getElementById("btn").disabled = false;
    }
    else{
    document.getElementById("cauhoi1").hidden = true;
    document.getElementById("cauhoi2").hidden = true;
    document.getElementById("cauhoi3").hidden = true;
    document.getElementById("cauhoi4").hidden = true;
    document.getElementById("cauhoi5").hidden = true;
    document.getElementById("btn").disabled = true;
    }
}
    </script>
@endsection
