@extends('admin.admindashboard')

@section('content')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />

<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>


    <!-- Main Content -->


        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 style="font-weight:bold;text-align:center;font-size:26px;color:#4e73df;font-style:Roboto;">HỒ SƠ DOANH NGHIỆP</h1>

            <!-- DataTales Example -->
            <div class="card mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Danh sách doanh nghiệp</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable"style="text-align:center;">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên doanh nghiệp</th>
                                    <th>Email</th>
                                    <th>Địa chỉ trụ sở</th>
                                    <th>Tên người đại diện</th>
                                    <th>Xử Lý</th>
                                </tr>
                            </thead>

                            <tbody>
                                @php
                                    $i = 0;
                                @endphp
                                @foreach ( $DoanhNghiep as $id => $dn )
                                <tr>
                                    @csrf
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $nd->tennguoidung }}</td>
                                    <td>{{ $nd->email }}</td>
                                    <td>
                                        @if ($nd->name == 'Admin' || $nd->name =='CTV')
                                        Tài Khoản Quản Trị
                                        @else
                                        @if ($nd->name == 'Chuyên Gia' || $nd->name == 'Ban Chấp Hành' )
                                        Tài Khoản chuyên gia
                                        @else
                                        @if ($nd->name == 'DoanhNghiep-BGD' || $nd->name =='DoanhNghiep-NV' )
                                        @if($nd->TenDoanhNghiep == null)
                                        <span class="badge bg-danger" style="color: rgb(249, 249, 255);">Chưa xác thực doanh nghiệp</span>
                                        @else{{ $nd->TenDoanhNghiep }}@endif
                                        @endif
                                        @endif
                                        @endif
                                    </td>
                                        <td>{{ $nd->name }}</td>
                                    <td>
                                        @if (session::get('user_id') == $nd->idnguoidung)
                                        Tải khoản của bạn
                                        @else
                                        @if($nd->status ==1) @if ($nd->name == 'DoanhNghiep-BGD' || $nd->name =='DoanhNghiep-NV' )
                                        Không thuộc thẩm quyền của bạn
                                        @else
                                        <a class="btn btn-success " href="{{ URL::to('/role/'.$nd->idnguoidung) }}" style="font-size:13px;">Thông tin
                                        </a>
                                        @endif
                                        @else
                                        <a class="btn btn-success " href="{{ URL::to('/active/'.$nd->idnguoidung) }}" style="font-size:13px;">Xem hồ sơ
                                        </a>
                                        <a class="btn btn-success " href="{{ URL::to('/active/'.$nd->idnguoidung) }}" style="font-size:13px;">Kích Hoạt
                                        </a>
                                        @endif
                                        @endif

                                  </td>
                                </tr>
                                @endforeach



                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <a href="{{ URL::to('/admin/new_user') }}" class="btn btn-info"><i class='fas fa-plus'></i> Thêm người dùng</a>

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
function change($a) {
    $.post(
    {
      name: "Donald Duck",
      city: "Duckburg"
    },
    function(data,status){
      alert("Data: " + data + "\nStatus: " + status);
    });
}
$("admin").click(function(){
    alert("Data: ");
  });
  $('#dataTable').DataTable();
</script>

@endsection
