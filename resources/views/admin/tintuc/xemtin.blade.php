@extends('admin.admindashboard')
@section('content')
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

<link href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" rel="stylesheet">
{{--

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script> --}}


    <!-- Main Content -->


        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 style="font-weight:bold;text-align:center;font-size:26px;color:#4e73df;font-style:Roboto;">TIN TỨC</h1>

            <!-- DataTales Example -->
            <div class="card mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Danh sách các tin</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table-bordered" id="dataTable" width="1100px" style="text-align:center;font-weight:300;font-size:14px;">
                            <thead>
                                <tr>
                                    <th width="5%">STT</th>
                                    <th width="8%">Lĩnh vực</th>
                                    <th width="10%">Loại tin</th>
                                    <th width="10%">Link Webiste</th>
                                    <th width="34%">Tiêu đề</th>

                                    <th width="10%">Tóm tắt</th>
                                    <th width="8%">Hình ảnh</th>
                                    <th width="5%">Lượt xem</th>
                                    <th width="5%">Sửa</th>
                                    <th width="5%">Xóa </th>
                                </tr>
                            </thead>

                            <tbody>
                                @php
                                    $i = 0;
                                @endphp
                                @foreach ( $TinTuc as $id => $tt )
                                <tr>
                                    @csrf
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $tt->TenLinhVuc }}</td>
                                    <td>{{ $tt->LoaiTin_id }}</td>
                                    <td><a href="{{ asset($tt->Website) }}" target="_blank">Xem chi tiết</a></td>
                                    <td >{{ $tt->TieuDe }}</td>
                                    <td>{{ $tt->TomTat }}</td>
                                    <td><a href="{{ asset('img/AnhTinTuc/'.$tt->HinhAnh)}}" target="_blank">Xem ảnh</a></td>
                                    <td>{{ $tt->LuotXem }}</td>

    <td><a class="btn btn-warning" href=""><i class='fas fa-edit'></i></a>
		<td><a class="btn btn-danger" href=""><i class='fas fa-trash-alt'></i></a>
</tr>

                                    {{-- <div class="dropdown-menu animated--fade-in"
                                        aria-labelledby="dropdownMenuButton">
                                        <form id="admin" method="post" action="{{ URL::to('/role/'.$nd->User_id) }}" hidden>
                                            @csrf
                                            <input type="text" name="id" value="{{ $nd->User_id }}">
                                            <input type="text" name="role" id="" value="2"></form>
                                        <a class="dropdown-item" id="admin" onclick="document.getElementById('admin').submit();">Admin</a>
                                        <form id="QTV" method="post" action="{{ URL::to('/role/'.$nd->User_id) }}" hidden>
                                            @csrf
                                            <input type="text" name="id" value="{{ $nd->User_id }}">
                                            <input type="text" name="role" id="" value="3"></form>
                                        <a class="dropdown-item" onclick="document.getElementById('QTV').submit();">QTV</a>
                                        <form id="DNQL" method="post" action="{{ URL::to('/role/'.$nd->User_id) }}" hidden>
                                            @csrf
                                            <input type="text" name="id" value="{{ $nd->User_id }}">
                                            <input type="text" name="role" id="" value="1"></form>
                                        <a class="dropdown-item" onclick="document.getElementById('DNQL').submit();">DoanhNghiệp - Quản Lý</a>
                                        <form id="DNND{{ $nd->User_id }}" method="post" action="{{ URL::to('/role/'.$nd->User_id) }}">
                                            @csrf
                                            <input type="text" name="id" value="{{ $nd->User_id }}">
                                            <input type="t  ext" name="role" id="" value="4"></form>
                                        <a class="dropdown-item" onclick="document.getElementById('DNND'.{{ $nd->User_id }}).submit();">DoanhNghiệp - Người dùng</a> --}}
                                    </td>
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
    <script src="{{asset('admin_file/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('admin_file/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('admin_file/js/sb-admin-2.min.js')}}"></script>
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
