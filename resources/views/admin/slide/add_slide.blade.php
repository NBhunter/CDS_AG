@extends('admin.admindashboard')
@section('content')



    <div  style="font-weight:bold;text-align:center;font-size:22px;color:#4e73df;font-style:Roboto;">THÊM BANNER CHO TRANG TIN</div>
    <div class="card-body">
    <form role="form" action="{{URL::to('/save_slide')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}


    <div class="mb-3">
    <label class="small mb-1" for="inputUsername">Tên Banner</label>
    <input class="form-control" id="Username" name="name" type="text" placeholder="Enter banner" >
    {{-- <input class="form-control" id="id" name="id" type="text" placeholder="Enter user username" value="{{ $LinhVuc->Id }}" hidden> --}}
    </div>




    <div class="mb-3">
    <label class="small mb-1" for="inputOrgName">File Banner</label>
    <input class="form-control" id="id" name="image" type="file" placeholder="Enter banner"  >
    </div>

<br>
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
