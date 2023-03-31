@extends('admin.admindashboard')
@section('content')
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> --}}
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
{{-- <script src="https://code.jquery.com/jquery-3.6.3.js"></script> --}}



    <!-- Main Content -->
    <div class="container mt-3">
          @if(session('alert'))   

            <div class="alert alert-danger ">
                {{session('alert')}}
              </div>
        @endif  
          @if(session('Success'))   

            <div class="alert alert-success ">
                {{session('Success')}}
              </div>
        @endif  
    </div>


        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 style="font-weight:bold;text-align:center;font-size:26px;color:#4e73df;font-style:Roboto;">THÔNG TIN LĨNH VỰC</h1>

            <!-- DataTales Example -->
            <div class="card mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Danh sách lĩnh vực</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable"style="text-align:center;">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên</th>
                                    <th>Mô tả</th>
                                    {{-- <th>Doanh nghiệp</th>
                                    <th>Phân Quyền</th> --}}
                                    <th>Sửa</th>
                                    <th>Xóa</th>
                                </tr>
                            </thead>

                            <tbody>
                                @php
                                    $i = 0;
                                @endphp
                                @foreach ( $LinhVuc as $id => $lv )
                                <tr>
                                    @csrf
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $lv->TenLinhVuc }}</td>
                                    <td>{{ $lv->MoTa }}</td>
                                    <td>

                                    <a class="btn btn-warning " href="{{ URL::to('/edit_LV/'.$lv->Id) }}"><i class='fas fa-edit'></i></a></td>


                                 <td>   <button class="btn btn-danger" id="delete" name = "delete" data-id="{{ $lv->Id }}"><i class='fas fa-trash-alt'></i></button>
                                   </td>
                                </tr>
                                @endforeach



                            </tbody>
                        </table>

                    </div>
                </div>

            </div>
            <a href="{{ URL::to('/new_LV') }}" class="btn btn-info"><i class='fas fa-plus'></i> Thêm lĩnh vực</a>

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
         $.post("{{ URL::to('/delete_LV') }}", {
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
