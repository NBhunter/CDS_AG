@extends('chuyengia.Dashboard')
@section('content')
<div class="container-fluid">
    <h1 style="font-weight:bold;text-align:center;font-size:26px;color:#4e73df;font-style:Roboto;">THÔNG TIN TẤT CẢ ĐÁNH GIÁ </h1>
    <div class="card mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Danh sách tất cả đánh giá</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable"style="text-align:center;">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên doanh nghiệp</th>
                            <th>Thời gian đánh giá </th>
                            <th> Số điểm đánh giá </th>
                            <th> Trạng thái </th>
                            <th>Xử lý</th>
                        </tr>

                    </thead>

                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
    <td></td>
    <td><a class="btn btn-success" href=""><i class='fas fa-edit'></i></a></td>
</tr>


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

