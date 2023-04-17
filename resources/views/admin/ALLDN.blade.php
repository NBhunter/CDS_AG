@extends('admin.admindashboard')

@section('content')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />

    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>


    <!-- Main Content -->


    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 style="font-weight:bold;text-align:center;font-size:26px;color:#4e73df;font-style:Roboto;">THÔNG TIN DOANH NGHIỆP
        </h1>

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
                                <th>Tên Doanh nghiệp</th>
                                <th>Email</th>
                                <th>SDT</th>
                                <th>Trạng thái</th>
                                <th>Xử Lý</th>
                            </tr>
                        </thead>

                        <tbody>
                            @php
                                $i = 0;
                            @endphp
                            @foreach ($NewDN as $id => $dn)
                                <tr>
                                    @csrf
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $dn->TenDoanhNghiep }}</td>
                                    <td>{{ $dn->email }}</td>
                                    <td>
                                        {{ $dn->SoDienThoai }}
                                    </td>
                                    <td>
                                        @if ($dn->TrangThai_XacThuc == 0)
                                            <span class="badge bg-danger text-light"> Chưa xác thực</span>
                                        @else
                                            @if ($dn->TrangThai_XacThuc == 1)
                                                <span class="badge bg-success text-light"> Đang hoạt động</span>
                                            @else
                                                @if ($dn->TrangThai_XacThuc == 2)
                                                    <span class="badge bg-warning text-light">Ngừng hoạt động</span>
                                                @else
                                                @endif
                                            @endif
                                        @endif
                                    </td>
                                    <td>

                                            <a class="btn btn-success " href="{{ URL::to('/admin/profileDN/' . $dn->Id) }}"
                                                style="font-size:13px;">Thông tin
                                            </a>
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
    <script src="{{ asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('admin/js/sb-admin-2.min.js') }}"></script>
    <!-- Bootstrap core JavaScript-->
    <script>
        function change($a) {
            $.post({
                    name: "Donald Duck",
                    city: "Duckburg"
                },
                function(data, status) {
                    alert("Data: " + data + "\nStatus: " + status);
                });
        }
        $("admin").click(function() {
            alert("Data: ");
        });
        $('#dataTable').DataTable();
    </script>

@endsection
