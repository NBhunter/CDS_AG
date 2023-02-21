@extends('admin.admindashboard')
@section('content')



    <div  style="font-weight:bold;text-align:center;font-size:22px;color:#4e73df;font-style:Roboto;">THÔNG TIN NGƯỜI DÙNG</div>
    <div class="card-body">
    <form role="form" action="{{URL::to('/update_user')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}


    <div class="mb-3">
    <label class="small mb-1" for="inputUsername">Họ tên người dùng</label>
    <input class="form-control" id="Username" name="Username" type="text" placeholder="Enter user username" value="{{ $user->tennguoidung }}">
    <input class="form-control" id="id" name="id" type="text" placeholder="Enter user username" value="{{ $user->idnguoidung }}" hidden>
    </div>


    <div class="row gx-3 mb-3">

    <div class="col-md-6">
    <label class="small mb-1" for="inputOrgName">Tên doanh nghiệp</label>
    <input class="form-control" id="inputOrgName" type="text" placeholder="" value="{{ $user->TenDoanhNghiep  }}">
    </div>

    <div class="col-md-6">
    <label class="small mb-1" for="inputLocation">Địa chỉ</label>
    <input class="form-control" id="inputLocation" type="text" placeholder="" value="{{ $user->DiaChiTruSo  }}">
    </div>
    </div>

    <div class="mb-3">
    <label class="small mb-1" for="inputEmailAddress">Email</label>
    <input class="form-control" id="inputEmailAddress" type="email" placeholder="Enter your email address" value="{{ $user->email }}">
    </div>
    <div class="form-group">
    <label for="inputEmailAddress">Quyền</label>


        <select class="form-control input-sm m-bot15" id="role" name="role" >
            @foreach ($Roles as $id => $role )

            @if ($role->id == $user->Role_id)
            <option for = "role"value="{{ $role->id }}" selected>{{ $role->name }}</option>
            @else
            <option for = "role" value="{{ $role->id }}">{{ $role->name }}</option>
            @endif



            @endforeach
          </select>

          </div>

    <button type="submit" name="add_product" class="btn btn-info"><i class='fas fa-save'></i> Lưu thay đổi</button>

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
