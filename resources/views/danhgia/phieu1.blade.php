@extends( 'danhgia.frontend')
@section('title')
Phiếu câu hỏi số 1
@endsection
@section('link')
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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



.rating {
display: flex;
flex-direction: row-reverse;
justify-content: center
}

.rating>input {
display: none
}

.rating>label {
position: relative;
width: 1em;
font-size: 30px;
font-weight: 300;
color: #fc0202;
cursor: pointer
}

.rating>label::before {
content: "\2605";
position: absolute;
opacity: 0
}

.rating>label:hover:before,
.rating>label:hover~label:before {
opacity: 1 !important
}

.rating>input:checked~label:before {
opacity: 1
}

.rating:hover>input:checked~label:before {
opacity: 0.4
}


.buttons{
top: 36px;
position: relative;
}


.rating-submit{
border-radius: 15px;
color: #fff;
    height: 49px;
}


.rating-submit:hover{

color: #fff;
}
td{
    text-align: center;
    }
.noidung{font-weight:400;}

</style>
@endsection
@section('content')
<html>
<head>
  <meta charset="utf-8">
  <title>Phiếu 1</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
  <link rel="stylesheet" href="../css/font-awesome.min.css">
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/style.css">
</head>
<body>

    <div id="main">
        <div class="container">
        <h1 class="title-page">Tạo Tabs cơ bản</h1>
          <div class="group-tabs">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs">
              <li  class="active"><a href="#home" >Home</a></li>
              <li><a href="#profile">Profile</a></li>
              <li><a href="#messages">Messages</a></li>
              <li><a href="#settings">Settings</a></li>
            </ul>
          </div>
        </div>
      </div>


      <script src="../js/jquery-3.1.1.min.js" type=text/javascript></script>
      <script src="../js/bootstrap.min.js" type=text/javascript></script>
      <script src="../js/custom.js" type=text/javascript></script>


      </body>
      </html>

<div style="background-color: #0038b0; margin_top: 0px ;height:50px;">
    <h2 style="color:white; text-align:center;font-weight:bold;">PHIẾU ĐÁNH GIÁ SỐ 1 - Mã Phiếu: {{ $time }}</h2>

    </div>
    <div class="container" style="font-weight:400;margin_top: 0px ;">
    <div class="row" style="font-weight:400;">

<div class="card-body" align="center" background="black" >
@php
    $i=0;
    $j=0;
    $y=0;
@endphp
<table class="table table-bordered border-primary" >
    <tr style="font-weight:bold;" class="table-primary border-primary" name="trtieude">
        <td class="col-1">STT</td>
        <td class="col-3">Trụ cột/ Thành phần/ Tiêu chí</td>
        <td class="col-5">Câu hỏi/Kê khai số liệu</td>
        <td class="col-3">Thang điểm tối đa</td>
        <td class="col-2">Đánh giá</td>
      </tr>
      <tbody style="text-align:center;font-weight:400;">
        <form role="form" action="{{URL::to('/request_cauhoi_p1')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="maphieu" value="{{ $time }}" hidden>
@foreach($Cauhoi as $key => $ctCauhoi)
@if ($ctCauhoi->Cap==1)
@php
    $i++;
    $j=0;
@endphp
<tr class=""style="text-align:center;font-weight:400;">
    <th class="stt" >{{ $i }}</th>
    <th class="">{{ $ctCauhoi->NoiDung }}</th>
    <th class=""> </th>
    <th class=""  style="text-align:center;">{{ $ctCauhoi->DiemToiDa }}</th>
    <th class=""> </th>
</tr>
@else
@if ($ctCauhoi->Cap==2)
@php
    $j++;
    $y=0;
@endphp
<tr class="" style="text-align:center;font-weight:400;">
    <th class="stt" style="text-align:center;">{{ $i.".".$j }}</th>
    <th class="">{{ $ctCauhoi->NoiDung }}</th>
    <th class=""> </th>
    <th class=""  style="text-align:center;">{{ $ctCauhoi->DiemToiDa }}</th>
    <th class=""> </th>
</tr>
@else
@if ($ctCauhoi->Cap==0)

<tr class="" style="text-align:center;font-weight:400;">
    <th class="stt" > </th>
    <th class="" style="text-align:center;">{{ $ctCauhoi->NoiDung }}</th>
    <th class=""> </th>
    <th class=""> </th>
    <th class=""> </th></tr>
@else
@php
    $y++;
@endphp
<tr class="" style="text-align:center;font-weight:400;">
    <th rowspan="2" style="text-align:center;">{{ $i.".".$j.".".$y}}</th>
    <th rowspan="2" >{{ $ctCauhoi->NoiDung }}</th>
    <th rowspan="1"class="noidung"> {{ $ctCauhoi->TenCauHoi }}   </th>

    <th rowspan="2"> </th>
    {{-- <th rowspan="2"> </th> --}}
    <th rowspan="2">
        @if ($i == 2)
        <div class="rating" name="Diem_{{ $ctCauhoi->idcauhoi }}">
            <input type="radio" name="{{ $ctCauhoi->idcauhoi }}" value="25" id="5{{ $ctCauhoi->idcauhoi }}"><label for="5{{ $ctCauhoi->idcauhoi }}" name="{{ $ctCauhoi->idcauhoi }}">☆</label>
            <input type="radio" name="{{ $ctCauhoi->idcauhoi }}" value="20" id="4{{ $ctCauhoi->idcauhoi }}"><label for="4{{ $ctCauhoi->idcauhoi }}" name="{{ $ctCauhoi->idcauhoi }}">☆</label>
            <input type="radio" name="{{ $ctCauhoi->idcauhoi }}" value="15" id="3{{ $ctCauhoi->idcauhoi }}"><label for="3{{ $ctCauhoi->idcauhoi }}" name="{{ $ctCauhoi->idcauhoi }}">☆</label>
            <input type="radio" name="{{ $ctCauhoi->idcauhoi }}" value="10" id="2{{ $ctCauhoi->idcauhoi }}"><label for="2{{ $ctCauhoi->idcauhoi }}" name="{{ $ctCauhoi->idcauhoi }}">☆</label>
            <input type="radio" name="{{ $ctCauhoi->idcauhoi }}" value="5" id="1{{ $ctCauhoi->idcauhoi }}"><label for="1{{ $ctCauhoi->idcauhoi }}" name="{{ $ctCauhoi->idcauhoi }}">☆</label>
            <input type="radio" name="{{ $ctCauhoi->idcauhoi }}" value="0" hidden checked>
        </div>
        @else
        <div class="rating" name="Diem_{{ $ctCauhoi->idcauhoi }}">
            <input type="radio" name="{{ $ctCauhoi->idcauhoi }}" value="5" id="5{{ $ctCauhoi->idcauhoi }}"><label for="5{{ $ctCauhoi->idcauhoi }}" name="{{ $ctCauhoi->idcauhoi }}">☆</label>
            <input type="radio" name="{{ $ctCauhoi->idcauhoi }}" value="4" id="4{{ $ctCauhoi->idcauhoi }}"><label for="4{{ $ctCauhoi->idcauhoi }}" name="{{ $ctCauhoi->idcauhoi }}">☆</label>
            <input type="radio" name="{{ $ctCauhoi->idcauhoi }}" value="3" id="3{{ $ctCauhoi->idcauhoi }}"><label for="3{{ $ctCauhoi->idcauhoi }}" name="{{ $ctCauhoi->idcauhoi }}">☆</label>
            <input type="radio" name="{{ $ctCauhoi->idcauhoi }}" value="2" id="2{{ $ctCauhoi->idcauhoi }}"><label for="2{{ $ctCauhoi->idcauhoi }}" name="{{ $ctCauhoi->idcauhoi }}">☆</label>
            <input type="radio" name="{{ $ctCauhoi->idcauhoi }}" value="1" id="1{{ $ctCauhoi->idcauhoi }}"><label for="1{{ $ctCauhoi->idcauhoi }}" name="{{ $ctCauhoi->idcauhoi }}">☆</label>
            <input type="radio" name="{{ $ctCauhoi->idcauhoi }}" value="0" hidden checked>
        </div>
        @endif
        </th>
</tr>
<tr class="" > <th rowspan="1" class="noidung">{{ $ctCauhoi->MoTa }}</th></tr>
@endif
@endif
@endif

  @endforeach

</tbody>
<tfoot>
    <tr>
        <td colspan="5"><button type="submit" name="guiphieu" class="btn btn-info" value=""><i class='fas fa-plus'></i>  Hoàn Thành</button></td>
    </tr>
</form>
</tfoot>
    </table>
</div>
</div>
  <!-- Copyright -->
@endsection
