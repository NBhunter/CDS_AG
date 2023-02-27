@extends('admin.admindashboard')
@section('content')
<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading" style="font-weight:bold;text-align:center;font-size:26px;color:#4e73df;font-style:Roboto;">
                   THÊM CÂU HỎI
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
                        <form role="form" action="{{URL::to('/update-cauhoi/'.$phieu1->idcauhoi)}}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="exampleInputPassword1">Cấp</label>
                                  <select name="Cap" class="form-control input-sm m-bot15" onchange="changerID(this)">
                                    @if ($phieu1->Cap == 0)
                                    <option value="0" selected>Tiêu đề (0)</option>
                                    <option value="1">Trụ cột (1)</option>
                                        <option value="2">Tiêu chí (2)</option>
                                        <option value="3">Câu hỏi (3)</option>
                                    @else
                                    @if ($phieu1->Cap == 1)
                                    <option value="0" >Tiêu đề (0)</option>
                                    <option value="1"selected>Trụ cột (1)</option>
                                        <option value="2">Tiêu chí (2)</option>
                                        <option value="3">Câu hỏi (3)</option>
                                    @else
                                    @if ($phieu1->Cap == 2)
                                    <option value="0" >Tiêu đề (0)</option>
                                    <option value="1">Trụ cột (1)</option>
                                        <option value="2" selected>Tiêu chí (2)</option>
                                        <option value="3">Câu hỏi (3)</option>
                                    @else
                                    @if ($phieu1->Cap == 3)
                                    <option value="0" >Tiêu đề (0)</option>
                                    <option value="1">Trụ cột (1)</option>
                                        <option value="2">Tiêu chí (2)</option>
                                        <option value="3" selected>Câu hỏi (3)</option>
                                    @endif
                                    @endif
                                    @endif
                                    @endif

                                </select>
                            </div>
                            <div class="form-group" id="tieuchi">
                                <label for="exampleInputEmail1">Tiêu chí</label>
                                <input type="text" data-validation="length" data-validation-length="min10" data-validation-error-msg="Điền ít nhất 10 ký tự" name="NoiDung" class="form-control " id="NoiDung" placeholder="Nhập tiêu chí" value="{{ $phieu1->NoiDung }}">
                            </div>
                            <div class="form-group" id="cauhoi" hidden>
                                <label for="exampleInputPassword1">Câu hỏi</label>
                                <textarea style="resize: none"  rows="8" class="form-control" name="TenCauHoi" id="" placeholder="Nhập câu hỏi">{{ $phieu1->TenCauHoi }}</textarea>
                            </div>
                            <div class="form-group"id="mota" hidden>
                                <label for="exampleInputPassword1">Mô tả </label>
                                <textarea style="resize: none"  rows="8" class="form-control" name="MoTa" id="" placeholder="Nhập mô tả về câu hỏi">{{ $phieu1->MoTa }}</textarea>
                            </div>

                        <div class="form-group" id="diem" >
                            <label for="exampleInputEmail1">Điểm tối đa</label>
                            <input type="text" data-validation="length" data-validation-length="min10" data-validation-error-msg="Điền số điểm tối đa" name="DiemToiDa" class="form-control " id="DiemToiDa" placeholder=" Nhập điểm" value="{{ $phieu1->DiemToiDa }}">
                        </div>
                        {{-- <div class="form-group" id="trucot"  hidden>
                            <label for="exampleInputPassword1">Trụ cột</label>
                              <select name="idcha1" class="form-control input-sm m-bot15">
                                @php($i=0)
                        @foreach ( $Cauhoi as $key => $c )
                        @if ($c->Cap == 1 )
                        @php($i++)
                        <option value="{{ $c->idcauhoi }}"> {{ $c->NoiDung }} ({{ $i}})</option>
                        @endif
                        @endforeach

                            </select>
                        </div>
                        <div class="form-group" id="thanhphan0"  hidden>
                            <label for="exampleInputPassword1">Thành phần </label>
                              <select name="idcha1" class="form-control input-sm m-bot15">
                                @php($j=0)
                                @php($i=0)
                                @foreach ( $Cauhoi as $key => $c )
                                @if ($c->Cap == 1)
                                @php($i++)
                                @php($j=0)
                                @endif
                                @if ($c->Cap == 2 )

                                <option value="{{ $c->idcauhoi }}">@foreach ($Cauhoi as $key => $q )
                                    @if ($q->idcauhoi ==$c->IdCha &&$q->Cap == 1)

                                    {{ $q->NoiDung }}({{ $i}})|
                                    @elseif ($q->idcauhoi ==$c->IdCha &&$c->Cap == 2)
                                    {{ $q->NoiDung }}({{ $j}})|
                                    @endif
                                @endforeach {{ $c->NoiDung }} @if($c->Cap == 2)@php($j++)({{ $j}})@endif</option>
                                @endif
                                @endforeach

                            </select>
                        </div>
                        <div class="form-group" id="thanhphan" hidden>
                            <label for="exampleInputPassword1">Thành phần</label>
                              <select name="idcha2" class="form-control input-sm m-bot15">
                                @php($j=0)
                                @php($i=0)
                                @foreach ( $Cauhoi as $key => $c )
                                @if ($c->Cap == 1)
                                @php($i++)
                                @endif
                                @if ($c->Cap == 2 ||$c->Cap == 0)

                                <option value="{{ $c->idcauhoi }}">@foreach ($Cauhoi as $key => $q )
                                    @if ($q->idcauhoi ==$c->IdCha &&$q->Cap == 1)

                                    {{ $q->NoiDung }}({{ $i}})|
                                    @elseif ($q->idcauhoi ==$c->IdCha &&$q->Cap == 2)
                                    {{ $q->NoiDung }}({{ $j}})|
                                    @endif
                                @endforeach {{ $c->NoiDung }} @if($c->Cap == 2)@php($j++)({{ $j}})@elseif ($c->Cap == 0)(0)@endif</option>
                                @endif
                                @endforeach

                            </select>
                        </div> --}}
                        <button type="submit" name="add_product" class="btn btn-info"><i class='fas fa-plus'></i>  Thêm câu hỏi</button>
                        </form>
                    </div>

                </div>
            </section>
                </div>
    </div>
    <script>
function changerID(obj){
    var value = obj.value;
    if(value =='2')
    {
    document.getElementById("cauhoi").hidden = true;
    document.getElementById("mota").hidden = true;
    document.getElementById("diem").hidden = false;
    document.getElementById("thanhphan").hidden = true;
    document.getElementById("trucot").hidden = false;
    document.getElementById("thanhphan0").hidden = true;
    }else if(value =='3')
    {
    document.getElementById("cauhoi").hidden = false;
    document.getElementById("mota").hidden = false;
    document.getElementById("diem").hidden = true;
    document.getElementById("trucot").hidden = true;
    document.getElementById("thanhphan").hidden = false;
    document.getElementById("thanhphan0").hidden = true;
    }else if(value =='0')
    {
    document.getElementById("cauhoi").hidden = true;
    document.getElementById("mota").hidden = true;
    document.getElementById("diem").hidden = true;
    document.getElementById("thanhphan0").hidden = false;
    document.getElementById("trucot").hidden = true;
    document.getElementById("thanhphan").hidden = true;
    }
    else{
    document.getElementById("cauhoi").hidden = true;
    document.getElementById("mota").hidden = true;
    document.getElementById("diem").hidden = false;
    document.getElementById("trucot").hidden = true;
    document.getElementById("thanhphan").hidden = true;
    document.getElementById("thanhphan0").hidden = true;
    }
}
    </script>
     <script src="//cdn.ckeditor.com/4.16.2/full-all/ckeditor.js"></script>
     <script>
     CKEDITOR.replace( 'ckeditor1' );
     CKEDITOR.replace( 'ckeditor2' );
     </script>
@endsection
