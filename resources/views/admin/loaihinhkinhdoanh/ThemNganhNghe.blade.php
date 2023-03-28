@extends('admin.admindashboard')
@section('content')
<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading" style="font-weight:bold;text-align:center;font-size:26px;color:#4e73df;font-style:Roboto;">
                   THÊM NGÀNH NGHỀ
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
                        <form role="form" action="{{URL::to('/save-nganhnghe')}}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="form-group" id="tieuchi">
                                <label for="exampleInputEmail1">Tên ngành nghề</label>
                                <input type="text" data-validation="length" data-validation-length="min10" data-validation-error-msg="Điền ít nhất 10 ký tự" name="Ten" class="form-control " id="NoiDung" placeholder="Nhập ngành nghề" required>
                            </div>
                            <div class="form-group" id="tieuchi">
                                <label for="exampleInputEmail1">Lĩnh vực</label>
                                <select class="form-control form-select " id="linhvuc"  name ="linhvuc"aria-label=".form-select-sm">
                                    <option value="1" selected>Nông Nghiệp</option>
                                    <option value="2" >Công Nghiệp & Xây Dựng </option>
                                    <option value="3" >Thương Mại & Dịch Vụ</option>
                                    <option value="4" >Khác</option>
                                    </select>
                            </div>

                        <button type="submit" name="add_product" class="btn btn-info"><i class='fas fa-plus'></i>  Thêm</button>
                        </form>
                    </div>

                </div>
<br>
            </section>
        </div>
            <div class="card mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Danh sách ngành nghề</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable"style="text-align:center;">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên</th>
                                    <th>Lĩnh Vực</th>
                                </tr>
                            </thead>

                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @foreach ( $NganhNghe as $nn )
                                <tr>
                                    @csrf
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $nn->TenNganhNghe }}</td>
                                    <td>{{ $nn->TenLinhVuc }}</td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
</div>

@endsection
