@extends( 'danhgia.frontend')
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
    <h2 style="color:white; text-align:center;font-weight:bold;">PHIẾU ĐÁNH GIÁ SỐ 2:- Mã Phiếu: {{ $time }}</h2>
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
        <td class="col-1" rowspan="4">STT</td>
        <td class="col-5" rowspan="4">Nội Dung</td>
        <td class="col-5" colspan="5">Mức độ quan trọng <br>(Đánh dấu X vào 1 trong 5 ô bên dưới)</td>
    </tr>
    <tr style="font-weight:bold;" class="table-primary border-primary" name="trtieude2">
        <td class="col-1" rowspan="2">1- Hoàn toàn không đồng ý</td>
        <td class="col-1" rowspan="2">2- Phần lớn không đồng ý</td>
        <td class="col-1" rowspan="2">3- Phân vân</td>
        <td class="col-1" rowspan="2">4- Phần lớn không đồng ý</td>
        <td class="col-1" rowspan="2">5- Hoàn toàn đồng ý</td>
      </tr>
      <tbody style="text-align:center;font-weight:400;">
        <form role="form" action="{{URL::to('/request_cauhoi_p2')}}" method="post" enctype="multipart/form-data">
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
    <th class=""colspan="6">{{ $ctCauhoi->Ten}}{{ $ctCauhoi->TenCauHoi}}</th>

</tr>
@else
@if ($ctCauhoi->Cap==2)
@php
    $j++;
    $y=0;
@endphp
<tr class="" style="text-align:center;font-weight:400;">
    <th class="stt" style="text-align:center; ">{{ $i.".".$j }}</th>
    <th class="" style="font-weight:400;">{{ $ctCauhoi->TenCauHoi}} - {{ $ctCauhoi->NoiDung_id }}</th>
    <input type="radio" name="{{ $ctCauhoi->NoiDung_id }}" value="0" hidden checked>
    <th class=""><div class="rating1" name="{{ $ctCauhoi->NoiDung_id }}"><input type="radio" name="{{ $ctCauhoi->NoiDung_id }}" value="1" id="1{{ $ctCauhoi->NoiDung_id }}"><label for="1{{ $ctCauhoi->NoiDung_id }}" name="{{ $ctCauhoi->NoiDung_id }}">☆</label></div></th>
    <th class=""><div class="rating1" name="{{ $ctCauhoi->NoiDung_id }}"><input type="radio" name="{{ $ctCauhoi->NoiDung_id }}" value="2" id="2{{ $ctCauhoi->NoiDung_id }}"><label for="2{{ $ctCauhoi->NoiDung_id }}" name="{{ $ctCauhoi->NoiDung_id }}">☆</label></div></th>
    <th class=""><div class="rating1" name="{{ $ctCauhoi->NoiDung_id }}"><input type="radio" name="{{ $ctCauhoi->NoiDung_id }}" value="3" id="3{{ $ctCauhoi->NoiDung_id }}"><label for="3{{ $ctCauhoi->NoiDung_id }}" name="{{ $ctCauhoi->NoiDung_id }}">☆</label></div></th>
    <th class=""><div class="rating1" name="{{ $ctCauhoi->NoiDung_id }}"><input type="radio" name="{{ $ctCauhoi->NoiDung_id }}" value="4" id="4{{ $ctCauhoi->NoiDung_id }}"><label for="4{{ $ctCauhoi->NoiDung_id }}" name="{{ $ctCauhoi->NoiDung_id }}">☆</label></div></th>
    <th class=""><div class="rating1" name="{{ $ctCauhoi->NoiDung_id }}"><input type="radio" name="{{ $ctCauhoi->NoiDung_id }}" value="5" id="5{{ $ctCauhoi->NoiDung_id }}"><label for="5{{ $ctCauhoi->NoiDung_id }}" name="{{ $ctCauhoi->NoiDung_id }}">☆</label></div></th>
</tr>
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
