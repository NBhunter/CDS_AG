@extends('admin.admindashboard')
@section('content')
<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading" style="font-weight:bold;text-align:center;font-size:26px;color:#4e73df;font-style:Roboto;">
                   THÊM LOẠI HÌNH
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
                        <form role="form" action="{{URL::to('/save-loaihinh')}}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="form-group" id="tieuchi">
                                <label for="exampleInputEmail1">Tên loại hình</label>
                                <input type="text" data-validation="length" data-validation-length="min10" data-validation-error-msg="Điền ít nhất 10 ký tự" name="Ten" class="form-control " id="NoiDung" placeholder="Nhập loại hình">
                            </div>



                        <button type="submit" name="add_product" class="btn btn-info"><i class='fas fa-plus'></i>  Thêm </button>
                        </form>
                    </div>

                </div>
            </section>
                </div>
                <div class="card mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Danh sách loại hình</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable"style="text-align:center;">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Tên</th>

                                    </tr>
                                </thead>

                                <tbody>
                                    @php
                                        $i = 0;
                                    @endphp
                                    @foreach ( $LoaiHinh as $lh )
                                    <tr>
                                        @csrf
                                        <td>{{ $lh->Id }}</td>
                                        <td>{{ $lh->TenLoaiHinh }}</td>

                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
    </div>

@endsection
