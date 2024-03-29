@extends('admin.admindashboard')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 style="font-weight:bold;text-align:center;font-size:26px;color:#4e73df;font-style:Roboto;">THÔNG TIN CÁC BÌNH LUẬN</h1>

    <!-- DataTales Example -->
    <div class="card mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Danh sách bình luận</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable"style="text-align:center;">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tiêu đề tin</th>
                            <th>Người đăng</th>
                            <th> Ngày giờ đăng </th>
                            <th> Nội dung </th>
                            <th> Hình ảnh </th>
                            <th> Trạng thái </th>
                            <th> Lượt tương tác </th>
                            <th>Xóa</th>
                        </tr>

                    </thead>
<tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td><a class="btn btn-danger" href=""><i class='fas fa-trash-alt'></i></a></td>
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
                                    <input type="text" name="role" id="" value="4"></form>
                                <a class="dropdown-item" onclick="document.getElementById('DNND'.{{ $nd->User_id }}).submit();">DoanhNghiệp - Người dùng</a> --}}
                            </td>
                        </tr>




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
</script>

@endsection
