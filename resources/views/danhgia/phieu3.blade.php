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
table.table-bordered th, table.table-bordered td{
    border:2px solid black;
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
<div style="background-color: #0038b0; padding: 13px 0 0 0 ;height:70px;">
    <h2 style="color:white; text-align:center;font-weight:bold;">PHIẾU ĐÁNH GIÁ SỐ 3 (Mã phiếu: {{ $time }})</h2>
    </div>
    <div style="margin:30px">

    <div class="container" style="font-weight:400;margin_top: 0px ;">
    <div class="row" style="font-weight:400;">
<div class="card-body" align="center" background="black" >
@php

    $j=0;

@endphp
<table class="table table-bordered " style="margin:0;" >
    <tr style="font-weight:bold;background-color:#aaba78;" class="" name="trtieude">
        <td class="col-1" rowspan="4" style="padding: 60px 0 0 0;">STT</td>
        <td class="col-5" rowspan="4" style="padding: 60px 0 0 0;">Nội dung</td>
        <td class="col-5" colspan="5">Mức độ quan trọng <br>(Đánh dấu X vào 1 trong 5 ô bên dưới)</td>
    </tr>
    <tr style="font-weight:bold;background-color:#aaba78;" class="" name="trtieude2">
    <td class="col-1" rowspan="2">1- Hoàn toàn không đồng ý</td>
        <td class="col-1" rowspan="2">2- Phần lớn không đồng ý</td>
        <td class="col-1" rowspan="2">3- Phân vân</td>
        <td class="col-1" rowspan="2">4- Phần lớn đồng ý</td>
        <td class="col-1" rowspan="2">5- Hoàn toàn đồng ý</td>
      </tr>
      <tbody style="text-align:center;font-weight:400;background-color:rgba(255,255,255,0.8);">
        <form id="form" role="form" action="{{URL::to('/request_cauhoi_p3')}}" method="post" enctype="multipart/form-data">
        @csrf
@foreach($Cauhoi as $key => $ctCauhoi)

@php
    $j++;

@endphp
<tr class="" style="text-align:center;font-weight:400;">
    <th class="stt" style="text-align:center;padding:20px 0 0 0 ;">{{ $j }}</th>
    <th class="" style="padding:20px 0 0 0 ;">{{ $ctCauhoi->TenCauHoi}}</th>
    <th class=""><div class="rating1" name="{{ $ctCauhoi->Id }}"><input type="radio" name="{{ $ctCauhoi->Id }}" value="1" id="1{{ $ctCauhoi->Id }}"><label for="1{{ $ctCauhoi->Id }}" name="1{{ $j }}" style="scale:130%;color:#98c2f3;">☆</label></div></th>
    <th class=""><div class="rating2" name="{{ $ctCauhoi->Id }}"><input type="radio" name="{{ $ctCauhoi->Id }}" value="2" id="2{{ $ctCauhoi->Id }}"><label for="2{{ $ctCauhoi->Id }}" name="2{{ $j }}" style="scale:130%;color:#64B5F6;">☆</label></div></th>
    <th class=""><div class="rating3" name="{{ $ctCauhoi->Id }}"><input type="radio" name="{{ $ctCauhoi->Id }}" value="3" id="3{{ $ctCauhoi->Id }}"><label for="3{{ $ctCauhoi->Id }}" name="3{{ $j }}" style="scale:130%;color:#3F9EEC;">☆</label></div></th>
    <th class=""><div class="rating4" name="{{ $ctCauhoi->Id }}"><input type="radio" name="{{ $ctCauhoi->Id }}" value="4" id="4{{ $ctCauhoi->Id }}"><label for="4{{ $ctCauhoi->Id }}" name="4{{ $j }}" style="scale:130%;color:#197BD1;">☆</label></div></th>
    <th class=""><div class="rating5" name="{{ $ctCauhoi->Id }}"><input type="radio" name="{{ $ctCauhoi->Id }}" value="5" id="5{{ $ctCauhoi->Id }}"><label for="5{{ $ctCauhoi->Id }}" name="5{{ $j }}" style="scale:130%;color:#1565C0;">☆</label></div></th>
</tr>
@endforeach

</tbody>
    </table>
<br>
        <div class="form-group" id="cauhoi3" >
        <label style="font-weight:bold; color:red;">RÀO CẢN (nếu có)</label>
        <textarea class="form-control"name="RaoCan" id="RaoCan" ></textarea>
        </div>
        <br>
        <button type="submit" name="guiphieu" class="btn btn-info" value="" style="color:black;">HOÀN THÀNH</button>
</div>

</div>
  <!-- Copyright -->
@endsection
