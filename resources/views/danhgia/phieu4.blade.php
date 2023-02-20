@extends( 'danhgia.frontend')
@section('link')
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<link href="{{ asset('admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
<style>
    .card{
width: 350px;
border: none;
box-shadow: 5px 6px 6px 2px #e9ecef;
border-radius: 12px;
}

.circle-image img{

border: 6px solid #fff;
border-radius: 100%;
padding: 0px;
top: -28px;
position: relative;
width: 70px;
height: 70px;
border-radius: 100%;
z-index: 1;
background: #e7d184;
cursor: pointer;

}


.dot {
  height: 18px;
width: 18px;
background-color: blue;
border-radius: 50%;
display: inline-block;
position: relative;
border: 3px solid #fff;
top: -48px;
left: 186px;
z-index: 1000;
}

.name{
margin-top: -21px;
font-size: 18px;
}


.fw-500{
font-weight: 100 !important;
}


.start{

color: green;
}

.stop{
color: red;
}


.rate{
border-bottom-right-radius: 12px;
border-bottom-left-radius: 12px;
}



.rating1,.rating2,.rating3,.rating4,.rating5 {
display: flex;
flex-direction: row-reverse;
justify-content: center
}

.rating1>input,.rating2>input,
.rating3>input,.rating4>input,
.rating5>input {
display: none
}

.rating1>label,.rating2>label,
.rating3>label,.rating4>label,
.rating5>label {
position: relative;
width: 1em;
font-size: 30px;
font-weight: 300;
color: #fc0202;
cursor: pointer
}


.rating1>label::before,.rating3>label::before
,.rating2>label::before,.rating4>label::before
,.rating5>label::before {
content: "\2605";
position: absolute;
opacity: 0
}

.rating1>label:hover:before,.rating1>label:hover~label:before,
.rating2>label:hover:before,.rating2>label:hover~label:before,
.rating3>label:hover:before,.rating3>label:hover~label:before,
.rating4>label:hover:before,.rating4>label:hover~label:before,
.rating5>label:hover:before,.rating5>label:hover~label:before, {
opacity: 1 !important
}

.rating1>input:checked~label:before,
.rating2>input:checked~label:before,
.rating3>input:checked~label:before,
.rating4>input:checked~label:before,
.rating5>input:checked~label:before {
opacity: 1
}

.rating1:hover>input:checked~label:before,
.rating2:hover>input:checked~label:before,
.rating3:hover>input:checked~label:before,
.rating4:hover>input:checked~label:before,
.rating5:hover>input:checked~label:before,{

opacity: 0.4
}


.buttons{
top: 36px;
position: relative;
}


.rating1-submit,.rating2-submit,
.rating3-submit,.rating4-submit,
.rating5-submit,{
border-radius: 15px;
color: #fff;
    height: 49px;
}


.rating1-submit:hover,.rating2-submit:hover,
.rating3-submit:hover,.rating4-submit:hover,
.rating5-submit:hover{

color: #fff;
}
td{
    text-align: center;
    }
.noidung{font-weight:400;}

</style>
@endsection
@section('content')
<div style="background-color: #0038b0; margin_top: 0px ;height:50px;">
    <h2 style="color:white; text-align:center;font-weight:bold;">PHIẾU ĐÁNH GIÁ SỐ 4 @php
        $name = Session::get('DoanhNghiep_id') ." - ".Session::get('User_id')." - ".Session::get('lienket_id');
					if($name){
						echo $name;

					}
    @endphp</h2>
    </div>
    <div class="container" style="font-weight:400;margin_top: 0px ;">
    <div class="row" style="font-weight:400;">
<div class="card-body" align="center" background="black" >

<div class="position-center">
    <form role="form" action="{{URL::to('/save-cauhoi_p4')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}

        <div class="form-group" id="cauhoi1" >
            <label style="font-weight:bold;"for="exampleInputPassword1">Nhu cầu về dịch vụ công nghệ thông tin / Chuyển đổi số</label>
            <br><br>
            <textarea style="resize: none"  rows="8" class="form-control" name="NhuCau" id="ckeditor1" placeholder="Nhập câu hỏi"></textarea>
        </div>
        <br>
        <div class="form-group" id="cauhoi2" >
            <label style="font-weight:bold;"for="exampleInputPassword1">Hỏi / đáp hoặc đề xuất</label>
            <br><br>
            <textarea style="resize: none"  rows="8" class="form-control" name="Hoi_Dap" id="ckeditor1" placeholder="Nhập câu hỏi"></textarea>
        </div>
<br>
<br>
    <button type="submit" name="add_product" id="btn" class="btn btn-info"><i class='fas fa-plus'></i>  Thêm câu hỏi</button>
    </form>
</div>
</div>
</div>
  <!-- Copyright -->
@endsection
