@extends('chuyengia.Dashboard')
@section('content')

<div class="container-fluid">
    <h1 style="font-weight:bold;text-align:center;font-size:26px;color:#4e73df;font-style:Roboto;">THÔNG TIN DOANH NGHIỆP CHƯA ĐÁNH GIÁ</h1>
    <div class="card mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Danh sách các doanh nghiệp chưa đánh giá</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" style="text-align:center;">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên doanh nghiệp</th>
                            <th>Trạng thái </th>
                            <th>Yêu cầu đánh giá</th>
                        </tr>

                    </thead>
                    <tbody>
                    @php
                        $i=1;
                    @endphp
                    @foreach ( $CDG as $key => $DnCDG )
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $DnCDG->TenDoanhNghiep }}</td>
                        <td>
                            @if ($DnCDG->ThongBao == null)
                            <span class="badge bg-danger text-light">Chưa thông báo</span>
                            @else
                            <span class="badge bg-primary text-light">Đã thông báo</span>
                            @endif

                        </td>

                        <td><button class="btn btn-warning thongbao" data-id="{{ $DnCDG->Id }}" id="thongbao" ><i class='fas fa-bell'></i></button></td>
                    </tr>
                    @endforeach



                            </td>
                        </tr>



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

<script>

    $(".thongbao").click(function(){

    var idDN = $(this).data('id');
    $.post("{{ URL::to('/thongbao') }}", {
                                            _token: $('meta[name=csrf-token]').attr('content'),
                                            id: idDN,
                                            NoiDung: "Doanh nghiệp chưa đánh giá trong quý này",
                                            status: "1",
                                            TieuDe: "Thông Báo Đánh Giá"
                                            });
//         var id = $(this).data('id');
//         var loai = 2;
//         $.ajax({
//   url: "{{ URL::to('/thongbao') }}",
//   method: 'POST',
//   dataType: 'json',
//   data: {id: id}
// });

// }


});


$('table').dataTable({
        order: [[2, 'asc']],
    });
 </script>

{{-- <script src="{{asset('admin/vendor/jquery/jquery.min.js')}}"></script> --}}
<script src="{{asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- Core plugin JavaScript-->
<script src="{{asset('admin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

<!-- Custom scripts for all pages-->
<script src="{{asset('admin/js/sb-admin-2.min.js')}}"></script>
<!-- Bootstrap core JavaScript-->


@endsection

