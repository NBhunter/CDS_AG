@extends('admin.admindashboard')
@section('content')
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
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
            <div class="card-header py-6">
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
                                    <th> Xóa </th>
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
                                    <td><button class="btn btn-danger" id="delete" name = "delete" data-id="{{$nn->Id}}"><i class='fas fa-trash-alt'></i></button>
                                </tr>
                                @endforeach



                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->



</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>



{{-- <script src="{{asset('admin/vendor/jquery/jquery.min.js')}}"></script> --}}
    <script src="{{asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('admin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('admin/js/sb-admin-2.min.js')}}"></script>
<!-- Bootstrap core JavaScript-->
<script>


    $("button").click(function() {

    var id = $(this).data('id');
    if(this.id == 'delete'){
    const response = confirm(" Bạn có muốn xóa ?");
     if(response){
         $.post("{{ URL::to('/delete_nganhnghe') }}", {
                                     _token: $('meta[name=csrf-token]').attr('content'),
                                     id:id
                                     }).done(window.location.reload());
     }else {
             alert("Xóa không thành công");
         }
}});


</script>
<script>

        $('#dataTable').DataTable();

</script>
@endsection
