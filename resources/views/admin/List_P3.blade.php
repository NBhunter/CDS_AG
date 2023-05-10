@extends('admin.admindashboard')
@section('content')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />

<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
<div class="row">
    <div class="col-lg-12">

        </div>
            <div class="card mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Danh sách câu hỏi phiếu 3</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable"style="text-align:center;">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên</th>
                                    <th>Lĩnh Vực</th>
                                    <th>Xoá </th>
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
                                    <td><button class="btn btn-danger" id="delete" name = "delete" data-id="{{$nn->IDNN}}"><i class='fas fa-trash-alt'></i></button>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
</div>
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
