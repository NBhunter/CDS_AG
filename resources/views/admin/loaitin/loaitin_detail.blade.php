@extends('admin.admindashboard')
@section('content')



    <div  style="font-weight:bold;text-align:center;font-size:22px;color:#4e73df;font-style:Roboto;">THÔNG TIN CÁC LOẠI TIN</div>
    <div class="card-body">
    <form role="form" action="" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}


    <div class="mb-3">
    <label class="small mb-1" for="inputUsername">Tên loại tin</label>
    <input class="form-control" id="Username" name="Username" type="text" placeholder="Enter user username" value="{{ $LoaiTin->TenLoai }}">
    <input class="form-control" id="id" name="id" type="text" placeholder="Enter user username" value="{{ $LoaiTin->Id }}" hidden>
    </div>







    <div class="mb-3" style="margin-top: 1%">
    <button type="submit" name="add_product" class="btn btn-info" ><i class='fas fa-save'></i> Lưu thay đổi</button>
</div>
    </form>
    </div>
    </div>
    </div>
    <script>
$('.dropdown-el').click(function(e) {
  e.preventDefault();
  e.stopPropagation();
  $(this).toggleClass('expanded');
  $('#'+$(e.target).attr('for')).prop('checked',true);
});
$(document).click(function() {
  $('.dropdown-el').removeClass('expanded');
});
    </script>
@endsection
