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
font-weight: 500 !important;
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
</style>
@endsection
@section('content')
<h3 style="text-align:center;font-weight:bold;">PHIẾU SỐ KHẢO SÁT SỐ 1</h3>
<div class="card-body" align="center" background="black">
@php
    $i=0;
    $j=0;
    $y=0;
@endphp
<table class="table table-hover">
    <tr>
        <td class="col-1">STT</td>
        <td class="col-3">Trụ cột/ Thành phần/ Tiêu chí</td>
        <td class="col-5">Câu hỏi/Kê khai số liệu</td>
        <td class="col-1">Thang điểm tối đa</td>
        <td class="col-2">Đánh giá</td>
      </tr>
      <tbody>
        @csrf
@foreach($Cauhoi as $key => $ctCauhoi)
@if ($ctCauhoi->Cap==1)
@php
    $i++;
@endphp
<tr class="">
    <th class="stt">{{ $i }}</th>
    <th class="">{{ $ctCauhoi->NoiDung }}</th>
    <th class=""> </th>
    <th class="">{{ $ctCauhoi->DiemToiDa }}</th>
    <th class=""> </th>
</tr>
@else
@if ($ctCauhoi->Cap==2)
@php
    $j++;
    $y=0;
@endphp
<tr class="">
    <th class="stt">{{ $i.".".$j }}</th>
    <th class="">{{ $ctCauhoi->NoiDung }}</th>
    <th class=""> </th>
    <th class="">{{ $ctCauhoi->DiemToiDa }}</th>
    <th class=""> </th>
</tr>
@else
@if ($ctCauhoi->Cap==0)

<tr class="">
    <th class="stt"> </th>
    <th class="">{{ $ctCauhoi->NoiDung }}</th>
    <th class=""> </th>
    <th class=""> </th>
    <th class=""> </th></tr>
@else
@php
    $y++;
@endphp
<tr class="">
    <th rowspan="2">{{ $i.".".$j.".".$y}}</th>
    <th rowspan="2">{{ $ctCauhoi->NoiDung }}</th>
    <th rowspan="1"> {{ $ctCauhoi->TenCauHoi }}   </th>

    <th rowspan="2"> </th>
    {{-- <th rowspan="2"> </th> --}}
    <th rowspan="2">
        <div class="rating" name="{{ $ctCauhoi->idcauhoi }}">
        <input type="radio" name="rating{{ $y }}" value="5" id="5{{ $ctCauhoi->idcauhoi }}"><label for="5{{ $ctCauhoi->idcauhoi }}" name="1{{ $y }}">☆</label>
        <input type="radio" name="rating{{ $y }}" value="4" id="4{{ $ctCauhoi->idcauhoi }}"><label for="4{{ $ctCauhoi->idcauhoi }}" name="1{{ $y }}">☆</label>
        <input type="radio" name="rating{{ $y }}" value="3" id="3{{ $ctCauhoi->idcauhoi }}"><label for="3{{ $ctCauhoi->idcauhoi }}" name="1{{ $y }}">☆</label>
        <input type="radio" name="rating{{ $y }}" value="2" id="2{{ $ctCauhoi->idcauhoi }}"><label for="2{{ $ctCauhoi->idcauhoi }}" name="1{{ $y }}">☆</label>
        <input type="radio" name="rating{{ $y }}" value="1" id="1{{ $ctCauhoi->idcauhoi }}"><label for="1{{ $ctCauhoi->idcauhoi }}" name="1{{ $y }}">☆</label>
    </div> </th>
</tr>
<tr class=""> <th rowspan="1">{{ $ctCauhoi->MoTa }}</th></tr>
@endif
@endif
@endif












  @endforeach
</tbody>
    </table>
</div>
</div>
  <!-- Copyright -->
@endsection
