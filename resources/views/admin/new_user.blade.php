@extends('admin.admindashboard')

@section('content')
<div  style="font-weight:bold;text-align:center;font-size:22px;color:#4e73df;font-style:Roboto;">THÔNG TIN NGƯỜI DÙNG MỚI</div>
    <div class="card-body">
    <form role="form" action="{{URL::to('/admin/new_user')}}" method="post" enctype="multipart/form-data" autocomplete="off">
        {{ csrf_field() }}


    <div class="mb-3">
    <label class="small mb-1" for="inputUsername">Họ tên người dùng</label>
    <input class="form-control" id="fname" name="fname" type="text" placeholder="Enter user name" value="" autocomplete="off" >

    </div>
    <div class="md-3">
    <label class="small mb-1" for="inputLocation">SĐT</label>
    <input class="form-control" id="inputLocation" type="text" placeholder="Enter your number phone" value="">
    </div>

    <div class="mb-3">
    <label class="small mb-1" for="inputEmailAddress">Email</label>
    <input class="form-control" id="inputEmailAddress" name="femail" type="email" placeholder="Enter your email address" value="">
    </div>
    <div class="mb-3">
        <label class="small mb-1" for="inputEmailAddress">Password</label>
        <input class="form-control" id="inputPassword" name="fPassword" type="fPassword" placeholder="Enter your Password" value="" >
        </div>
    <div class="form-group">
    <label for="inputEmailAddress">Quyền</label>


        <select class="form-control input-sm m-bot15" id="role" name="role" >
            @foreach ($Roles as $id => $role )
            <option for = "role" value="{{ $role->id }}">{{ $role->name }}</option>
            @endforeach
          </select>

          </div>

    <button type="submit" name="add_product" class="btn btn-info"><i class='fas fa-save'></i> Thêm </button>

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
