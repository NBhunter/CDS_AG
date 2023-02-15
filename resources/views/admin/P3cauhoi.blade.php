@extends('admin.admindashboard')
@section('content')
<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading" style="font-weight:bold;text-align:center;font-size:22px;color:#4e73df;font-style:Roboto;">
                   THÊM CÂU HỎI PHIẾU 3
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
                        <form role="form" action="{{URL::to('/save-cauhoi_p3')}}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="form-group" id="tieuchi">
                                <label for="exampleInputEmail1">Nội Dung</label>
                                <input type="text" data-validation="length" data-validation-length="min10" data-validation-error-msg="Điền ít nhất 10 ký tự" name="Ten" class="form-control " id="NoiDung" placeholder="Nhập tiêu chí">
                            </div>

                        <button type="submit" name="add_product" id="btn" class="btn btn-info"><i class='fas fa-plus'></i>  Thêm</button>
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
