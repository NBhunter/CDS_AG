@extends('danhgia.frontend')
@section('title')
    Phiếu câu hỏi số 1
@endsection
@section('link')
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        .card {
            width: 350px;
            border: none;
            box-shadow: 5px 6px 6px 2px #e9ecef;
            border-radius: 12px;
        }

        .circle-image img {

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

        .name {
            margin-top: -21px;
            font-size: 18px;
        }


        .fw-500 {
            font-weight: 100 !important;
        }


        .start {

            color: green;
        }

        .stop {
            color: red;
        }


        .rate {
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


        .buttons {
            top: 36px;
            position: relative;
        }


        .rating-submit {
            border-radius: 15px;
            color: #fff;
            height: 49px;
        }


        .rating-submit:hover {

            color: #fff;
        }

        td {
            text-align: center;
        }

        .noidung {
            font-weight: 400;
        }

        table.table-bordered th,
        table.table-bordered td {
            border: 2px solid black;
        }

        .tab {
            overflow: hidden;
            border: 1px solid #ccc;
            background-color: #f1f1f1;
        }

        /* Style the buttons inside the tab */
        .tab button {

            float: left;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 14px 16px;
            transition: 0.3s;
            font-size: 15px;

        }

        /* Change background color of buttons on hover */
        .tab button:hover {
            background-color: #ddd;
        }

        /* Create an active/current tablink class */
        .tab button.active {
            background-color: #ccc;
        }

        /* Style the tab content */
        .tabcontent {
            display: none;
            padding: 6px 12px;
            border: 1px solid #ccc;
            border-top: none;
        }

        .tablinks {
            height: 100%;

        }
    </style>
@endsection
@section('content')
    <div style=" margin_top: 0px ;height:70px; padding: 13px 0 0 0 ;">
        <h2 style="color:black; text-align:center;font-weight:bold;">PHIẾU ĐÁNH GIÁ SỐ 1(Mã Phiếu: {{ $time }})</h2>
    </div>
    @php

        $d = 1;
    @endphp
    <form id="form" role="form" action="{{ URL::to('/request_cauhoi_p1') }}" method="post" target="hidden-form"
        enctype="multipart/form-data">
        @csrf
        <div class="tab" style="height:65px;  border:2px solid black; border-bottom:none; ">
            @foreach ($DanhMuc as $DM)
                @if ($DM->Id == 35)
                    <button class="tablinks active" id="{{ $d }}"
                        onclick="openCity(event, 'CT{{ $d++ }}')"
                        style="color:black;font-weight:bold;">{{ $DM->NoiDung }}</button>
                @else
                    <button class="tablinks" id="{{ $d }}" onclick="openCity(event, 'CT{{ $d++ }}')"
                        style="color:black;font-weight:bold;">{{ $DM->NoiDung }}</button>
                @endif
            @endforeach
        </div>

        @php
            $i = 0;
            $j = 0;
            $y = 0;
        @endphp
        @foreach ($Cauhoi as $key => $ctCauhoi)
            @if ($ctCauhoi->Cap == 1)
                @php
                    $i++;
                    $j = 0;
                @endphp
                @if ($j == 0 && $i > 1)
                    </tbody>
                    </table>

                    <tfoot>
                        <tr>
                            <td colspan="7"><button type="submit" name="guiphieu" class="btn btn-success"
                                    onclick="openCity({{ $i }}, 'CT{{ $i }}')"
                                    style="color:black;">ĐẾN PHẦN SAU</button></td>
                        </tr>

                    </tfoot>
                    </table>
                    </div>
                </div>
                    @php
                        $y = $i;
                    @endphp
                @endif
                @if ($ctCauhoi->idcauhoi == 35)
                    <div id="CT{{ $i }}" class="tabcontent" style="padding:0;display:block;">
                    @else
                        <div id="CT{{ $i }}" class="tabcontent">
                @endif
                <table class="table table-bordered " style="margin:0;">
                    <tr style="font-weight:bold;background-color:#aaba78;" class="" name="trtieude">
                        <td class="col-1">STT</td>
                        <td class="col-3">Trụ cột/ Thành phần/ Tiêu chí</td>
                        <td class="col-5">Câu hỏi/ Kê khai số liệu</td>
                        <td class="col-3">Thang điểm tối đa</td>
                        <td class="col-2">Đánh giá</td>
                    </tr>
                    <tbody style="text-align:center;font-weight:400;">

                        <input type="text" name="maphieu" value="{{ $time }}" hidden>
                        <tr style="font-weight:bold;background-color:#fbec88;" class="" name="trtieude2">
                            <th class="stt">{{ $i }}</th>
                            <th class="">{{ $ctCauhoi->NoiDung }}</th>
                            <th class=""> </th>
                            <th class="" style="text-align:center;">{{ $ctCauhoi->DiemToiDa }}</th>
                            <th class=""><input type="radio" name="{{ $ctCauhoi->idcauhoi }}" value="1"
                                hidden checked> </th>
                        </tr>
                    @else
                        @if ($ctCauhoi->Cap == 2)
                            @php
                                $j++;
                                $y = 0;
                            @endphp
                            <tr class="" style="text-align:center;font-weight:400;">
                                <th class="stt" style="text-align:center;">{{ $i . '.' . $j }}</th>
                                <th class="">{{ $ctCauhoi->NoiDung }}</th>
                                <th class=""> </th>
                                <th class="" style="text-align:center;">{{ $ctCauhoi->DiemToiDa }}</th>
                                <th class=""> <input type="radio" name="{{ $ctCauhoi->idcauhoi }}" value="1"
                                    hidden checked></th>
                            </tr>
                        @else
                            @if ($ctCauhoi->Cap == 0)
                                <tr class="" style="text-align:center;font-weight:400;">
                                    <th class="stt"> </th>
                                    <th class="" style="text-align:center;">{{ $ctCauhoi->NoiDung }}</th>
                                    <th class=""> </th>
                                    <th class=""> </th>
                                    <th class=""> <input type="radio" name="{{ $ctCauhoi->idcauhoi }}" value="1"
                                        hidden checked></th>

                                </tr>
                            @else
                                @php
                                    $y++;
                                @endphp
                                <tr class="" style="text-align:center;font-weight:400;">
                                    <th rowspan="2" style="text-align:center;">{{ $i . '.' . $j . '.' . $y }}</th>
                                    <th rowspan="2">{{ $ctCauhoi->NoiDung }}</th>
                                    <th rowspan="1"class="noidung"> {{ $ctCauhoi->TenCauHoi }} </th>

                                    <th rowspan="2"> </th>
                                    {{-- <th rowspan="2"> </th> --}}
                                    <th rowspan="2">
                                        @if ($i == 2)
                                            <div class="rating" name="Diem_{{ $ctCauhoi->idcauhoi }}">
                                                <input type="radio" name="{{ $ctCauhoi->idcauhoi }}" value="25"
                                                    id="5{{ $ctCauhoi->idcauhoi }}"><label
                                                    for="5{{ $ctCauhoi->idcauhoi }}"
                                                    name="{{ $ctCauhoi->idcauhoi }}"style="color:#1565C0;">☆</label>
                                                <input type="radio" name="{{ $ctCauhoi->idcauhoi }}" value="20"
                                                    id="4{{ $ctCauhoi->idcauhoi }}"><label
                                                    for="4{{ $ctCauhoi->idcauhoi }}"
                                                    name="{{ $ctCauhoi->idcauhoi }}"style="color:#1565C0;">☆</label>
                                                <input type="radio" name="{{ $ctCauhoi->idcauhoi }}" value="15"
                                                    id="3{{ $ctCauhoi->idcauhoi }}"><label
                                                    for="3{{ $ctCauhoi->idcauhoi }}"
                                                    name="{{ $ctCauhoi->idcauhoi }}"style="color:#1565C0;">☆</label>
                                                <input type="radio" name="{{ $ctCauhoi->idcauhoi }}" value="10"
                                                    id="2{{ $ctCauhoi->idcauhoi }}"><label
                                                    for="2{{ $ctCauhoi->idcauhoi }}"
                                                    name="{{ $ctCauhoi->idcauhoi }}"style="color:#1565C0;">☆</label>
                                                <input type="radio" name="{{ $ctCauhoi->idcauhoi }}" value="5"
                                                    id="1{{ $ctCauhoi->idcauhoi }}"><label
                                                    for="1{{ $ctCauhoi->idcauhoi }}"
                                                    name="{{ $ctCauhoi->idcauhoi }}"style="color:#1565C0;">☆</label>

                                            </div>
                                        @else
                                            <div class="rating" name="Diem_{{ $ctCauhoi->idcauhoi }}">
                                                <input type="radio" name="{{ $ctCauhoi->idcauhoi }}" value="5"
                                                    id="5{{ $ctCauhoi->idcauhoi }}"><label
                                                    for="5{{ $ctCauhoi->idcauhoi }}"
                                                    name="{{ $ctCauhoi->idcauhoi }}"style="color:#1565C0;">☆</label>
                                                <input type="radio" name="{{ $ctCauhoi->idcauhoi }}" value="4"
                                                    id="4{{ $ctCauhoi->idcauhoi }}"><label
                                                    for="4{{ $ctCauhoi->idcauhoi }}"
                                                    name="{{ $ctCauhoi->idcauhoi }}"style="color:#1565C0;">☆</label>
                                                <input type="radio" name="{{ $ctCauhoi->idcauhoi }}" value="3"
                                                    id="3{{ $ctCauhoi->idcauhoi }}"><label
                                                    for="3{{ $ctCauhoi->idcauhoi }}"
                                                    name="{{ $ctCauhoi->idcauhoi }}"style="color:#1565C0;">☆</label>
                                                <input type="radio" name="{{ $ctCauhoi->idcauhoi }}" value="2"
                                                    id="2{{ $ctCauhoi->idcauhoi }}"><label
                                                    for="2{{ $ctCauhoi->idcauhoi }}"
                                                    name="{{ $ctCauhoi->idcauhoi }}"style="color:#1565C0;">☆</label>
                                                <input type="radio" name="{{ $ctCauhoi->idcauhoi }}" value="1"
                                                    id="1{{ $ctCauhoi->idcauhoi }}"><label
                                                    for="1{{ $ctCauhoi->idcauhoi }}"
                                                    name="{{ $ctCauhoi->idcauhoi }}"style="color:#1565C0;">☆</label>

                                            </div>
                                        @endif
                                    </th>
                                </tr>
                                <tr class="">
                                    <th rowspan="1" class="noidung">{{ $ctCauhoi->MoTa }}</th>
                                </tr>
                            @endif
                        @endif
            @endif
        @endforeach

    </tbody>
</table>

    <tfoot>
        <tr>
            <td colspan="7"><button type="submit" name="guiphieu" class="btn btn-success" onclick="goto('0')" style="color:black;">HOÀN THÀNH</button></td>
        </tr>
    </form>
    <iframe style="display:none" name="hidden-form">@if(session('alert'))   
        <div class="alert alert-success" role="alert">
            {{session('alert')}}
          </div>

    @endif  </iframe>
    </tfoot>
        </table>
    </div>

<script>
   function openCity(evt, cityName) {
          var i, tabcontent, tablinks;
          tabcontent = document.getElementsByClassName("tabcontent");
          for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
          }
          tablinks = document.getElementsByClassName("tablinks");
          for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
          }
          document.getElementById(cityName).style.display = "block";
          if(Number.isInteger(evt)){
            tablinks[evt -1].className += " active";
            goto('-1');
          }else{
          evt.currentTarget.className += " active";
          }
        }
    function goto(status){
            var inputs = document.getElementById("form").elements;
    var count  = 0;
    for (var i = 0; i < inputs.length; i++) {
        if (inputs[i].type == 'radio' && inputs[i].checked) {
            count++;
        }
    }
            if(count >= 29){
                window.alert("đã đánh giá xong!! nhấn ok để trở về");
            window.location.replace("{{ URL::to('dnviews') }}");
            }if(status == 0 && count < 29)
            {
                window.alert("chưa đánh giá đủ. vui lòng đánh giá lại");
            }

        }
</script>

@endsection
