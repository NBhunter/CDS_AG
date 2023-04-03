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




table.table-bordered th, table.table-bordered td{
    border:2px solid black;
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
  font-size: 17px;

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

.tablinks{
    height:100%;
}
</style>
@endsection
@section('content')
                            <div style=" margin_top: 0px ;height:70px; padding: 13px 0 0 0 ;">
                                <h2 style="color:black; text-align:center;font-weight:bold;">PHIẾU ĐÁNH GIÁ SỐ 2 (Mã phiếu: {{ $time }})</h2>
                                </div>
						 <div style="margin:30px">
                            @php

                            $d=1;
                        @endphp
                          <form role="form" action="{{URL::to('/request_cauhoi_p2')}}" method="post" enctype="multipart/form-data">
                            @csrf
                                <div class="tab" style="height:65px;  border:2px solid black; border-bottom:none; ">
                                    @foreach ( $DanhMuc as $DM )
                                    @if ($DM->NoiDung_id == 3)
                                    <button class="tablinks active" onclick="openCity(event, 'CT{{ $d++ }}')"  style="color:black;font-weight:bold;">{{ $DM->Ten }}</button>
                                    @else
                                    <button class="tablinks" onclick="openCity(event, 'CT{{ $d++ }}')"  style="color:black;font-weight:bold;">{{ $DM->Ten }}</button>

                                    @endif

                                    @endforeach
                                    </div>

                                    @php
        $i=0;
        $j=0;
        $y=0;
    @endphp
                                    @foreach($Cauhoi as $key => $ctCauhoi)
                                    @if ($ctCauhoi->Cap==1)
                                    @php
                                    $i++;
                                    $j=0;
                                @endphp
                                    @if ($j == 0 && $i >1)

</tbody>
</table>

    <tfoot>
        <tr>
            <td colspan="7"><button type="submit" name="guiphieu" class="btn btn-success" value="" style="color:black;">HOÀN THÀNH</button></td>
        </tr>

    </tfoot>
        </table>
    </div>
@php
                                        $y = $i;
                                    @endphp
@endif
@if ($ctCauhoi->NoiDung_id == 3)
<div id="CT{{ $i }}" class="tabcontent" style="padding:0;display:block;" >
@else
<div id="CT{{ $i }}" class="tabcontent"  >
@endif

    <table class="table table-bordered " style="margin:0;" >
        <tr style="font-weight:bold;background-color:#aaba78;" class="" name="trtieude">
            <td class="col-1" rowspan="4">STT</td>
            <td class="col-5" rowspan="4">Nội dung</td>
            <td class="col-5" colspan="5">Mức độ quan trọng <br>(Đánh dấu X vào 1 trong 5 ô bên dưới)</td>
        </tr>
        <tr style="font-weight:bold;background-color:#aaba78;" class="" name="trtieude2">
            <td class="col-1" rowspan="2">1- Hoàn toàn không đồng ý</td>
            <td class="col-1" rowspan="2">2- Phần lớn không đồng ý</td>
            <td class="col-1" rowspan="2">3- Phân vân</td>
            <td class="col-1" rowspan="2">4- Phần lớn đồng ý</td>
            <td class="col-1" rowspan="2">5- Hoàn toàn đồng ý</td>
          </tr>
          <tbody style="text-align:center;font-weight:400;">

                <input type="text" name="maphieu" value="{{ $time }}" hidden>


    <tr class=""style="text-align:center;font-weight:400;background-color:#fbec88;">
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
        <th class=""><div class="rating1" name="{{ $ctCauhoi->NoiDung_id }}"><input type="radio" name="{{ $ctCauhoi->NoiDung_id }}" value="1" id="1{{ $ctCauhoi->NoiDung_id }}"><label for="1{{ $ctCauhoi->NoiDung_id }}" name="{{ $ctCauhoi->NoiDung_id }}" style="scale:130%;color:#98c2f3;">☆</label></div></th>
        <th class=""><div class="rating1" name="{{ $ctCauhoi->NoiDung_id }}"><input type="radio" name="{{ $ctCauhoi->NoiDung_id }}" value="2" id="2{{ $ctCauhoi->NoiDung_id }}"><label for="2{{ $ctCauhoi->NoiDung_id }}" name="{{ $ctCauhoi->NoiDung_id }}"style="scale:130%;color:#64B5F6;">☆</label></div></th>
        <th class=""><div class="rating1" name="{{ $ctCauhoi->NoiDung_id }}"><input type="radio" name="{{ $ctCauhoi->NoiDung_id }}" value="3" id="3{{ $ctCauhoi->NoiDung_id }}"><label for="3{{ $ctCauhoi->NoiDung_id }}" name="{{ $ctCauhoi->NoiDung_id }}"style="scale:130%;color:#3F9EEC;">☆</label></div></th>
        <th class=""><div class="rating1" name="{{ $ctCauhoi->NoiDung_id }}"><input type="radio" name="{{ $ctCauhoi->NoiDung_id }}" value="4" id="4{{ $ctCauhoi->NoiDung_id }}"><label for="4{{ $ctCauhoi->NoiDung_id }}" name="{{ $ctCauhoi->NoiDung_id }}"style="scale:130%;color:#197BD1;">☆</label></div></th>
        <th class=""><div class="rating1" name="{{ $ctCauhoi->NoiDung_id }}"><input type="radio" name="{{ $ctCauhoi->NoiDung_id }}" value="5" id="5{{ $ctCauhoi->NoiDung_id }}"><label for="5{{ $ctCauhoi->NoiDung_id }}" name="{{ $ctCauhoi->NoiDung_id }}"style="scale:130%;color:#1565C0;">☆</label></div></th>
    </tr>
    @endif
    @endif
    @endforeach
</tbody>
</table>

    <tfoot>
        <tr>
            <td colspan="7"><button type="submit" name="guiphieu" class="btn btn-success" value="" style="color:black;">HOÀN THÀNH</button></td>
        </tr>
    </form>
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
          evt.currentTarget.className += " active";
        }
        </script>
  <!-- Copyright -->
@endsection



