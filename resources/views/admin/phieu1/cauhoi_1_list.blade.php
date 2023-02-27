@extends('admin.admindashboard')
@section('content')
{{--

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script> --}}


    <!-- Main Content -->


        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 style="font-weight:bold;text-align:center;font-size:26px;color:#4e73df;font-style:Roboto;">THÔNG TIN NGƯỜI DÙNG</h1>

            <!-- DataTales Example -->
            <div class="card mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Danh sách người dùng</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable"style="text-align:center;">
                            <thead>
                                <tr>
                                    <td class="col-1">STT</td>
                                    <td class="col-3">Trụ cột/ Thành phần/ Tiêu chí</td>
                                    <td class="col-5">Câu hỏi/Kê khai số liệu</td>
                                    <td class="col-3">Thang điểm tối đa</td>
                                    <td class="col-2">Sửa</td>
                                </tr>
                            </thead>

                            <tbody>
                                @php
    $i=0;
    $j=0;
    $y=0;
@endphp
                                @foreach($Cauhoi as $key => $ctCauhoi)
                                @if ($ctCauhoi->Cap==1)
                                @php
                                    $i++;
                                    $j=0;
                                @endphp
                                <tr class=""style="text-align:center;font-weight:400;">
                                    <th class="stt" >{{ $i }}</th>
                                    <th class="">{{ $ctCauhoi->NoiDung }}</th>
                                    <th class=""> </th>
                                    <th class=""  style="text-align:center;">{{ $ctCauhoi->DiemToiDa }}</th>
                                    <th class=""><a class="btn btn-success" href="{{ URL::to('/admin/edit/'.$ctCauhoi->idcauhoi) }}"><i class='fas fa-edit'></i></a> </th> </th>
                                </tr>
                                @endif
                                @if ($ctCauhoi->Cap==2&& $i>0)
                                @php
                                    $j++;
                                    $y=0;
                                @endphp
                                <tr class="" style="text-align:center;font-weight:400;">
                                    <th class="stt" style="text-align:center;">{{ $i.".".$j }}</th>
                                    <th class="">{{ $ctCauhoi->NoiDung }}</th>
                                    <th class=""> </th>
                                    <th class=""  style="text-align:center;">{{ $ctCauhoi->DiemToiDa }}</th>
                                    <th class=""><a class="btn btn-success" href="{{ URL::to('/admin/edit/'.$ctCauhoi->idcauhoi) }}"><i class='fas fa-edit'></i></a> </th> </th>
                                </tr>
                                @endif
                                @if ($ctCauhoi->Cap==0&& $i> 0)

                                <tr class="" style="text-align:center;font-weight:400;">
                                    <th class="stt" > </th>
                                    <th class="" style="text-align:center;">{{ $ctCauhoi->NoiDung }}</th>
                                    <th class=""> </th>
                                    <th class=""> </th>
                                    <th class=""><a class="btn btn-success" href="{{ URL::to('/admin/edit/'.$ctCauhoi->idcauhoi) }}"><i class='fas fa-edit'></i></a> </th> </th></tr>
                                @endif
                                @if ($ctCauhoi->Cap==3&& $i>0 &&$j >0)
                                @php
                                    $y++;
                                @endphp
                                <tr class="" style="text-align:center;font-weight:400;">
                                    <th rowspan="2" style="text-align:center;">{{ $i.".".$j.".".$y}}</th>
                                    <th rowspan="2" >{{ $ctCauhoi->NoiDung }}</th>
                                    <th rowspan="1"class="noidung"> {{ $ctCauhoi->TenCauHoi }}   </th>

                                    <th rowspan="2"> </th>
                                    {{-- <th rowspan="2"> </th> --}}
                                    <th rowspan="2">
                                        <a class="btn btn-success" href="{{ URL::to('/admin/phieu1-edit/'.$ctCauhoi->idcauhoi) }}"><i class='fas fa-edit'></i></a> </th>
                                </tr>
                                <tr class="" > <th rowspan="1" class="noidung">{{ $ctCauhoi->MoTa }}</th></tr>

                                @endif


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
