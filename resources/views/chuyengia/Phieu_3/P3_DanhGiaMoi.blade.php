@extends('chuyengia.Dashboard')
@section('content')
<div class="container-fluid">
    <h1 style="font-weight:bold;text-align:center;font-size:26px;color:#4e73df;font-style:Roboto;">THÔNG TIN CÁC ĐÁNH GIÁ MỚI NHẤT </h1>
    <div class="card mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Danh sách các đánh giá mới</h6>
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
                            <th> Đánh giá tổng thể</th>
                            <th>Xử lý</th>
                        </tr>

                    </thead>
                    @php
                    $i = 1;
                @endphp
@foreach ( $Phieu3 as $P3 )
<tr>
<td>{{ $i++ }}</td>
<td>{{ $P3->TenDoanhNghiep }}</td>
<td>{{ $P3->created_at }}</td>
<td>
    @if (!isset($P3->RaoCan))
    <span class="badge bg-primary text-light">Không có rào cản</span>
    @else
    {{ $P3->RaoCan }}
    @endif
    </td>
<td>
    @if ($P3->status == 0 )
    <span class="badge bg-danger text-light"> Chưa xem</span>
    @else
    <span class="badge bg-success text-light"> Đã xem</span>
    @endif
</td>

<td><a class="btn btn-success" href="{{ URL::to('/chuyengia/P3_Chitiet/'.$P3->IDPhieu) }}"><i class='fas fa-edit'></i></a></td>
</tr>
@endforeach







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

