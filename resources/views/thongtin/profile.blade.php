@extends('DoanhNghiep.dashboard')
@section('link')

@endsection
@section('content')
<!-- <div class="mb-3">
    <label class="small mb-1" for="inputUsername">Họ tên người dùng</label>
    <input class="form-control" id="Username" type="text" placeholder="Enter user username" value="user->tennguoidung ">
    </div>


    <div class="row gx-3 mb-3">

    <div class="col-md-6">
    <label class="small mb-1" for="inputOrgName">Tên doanh nghiệp</label>
    <input class="form-control" id="inputOrgName" type="text" placeholder="" value="user->TenDoanhNghiep">
    </div>

    <div class="col-md-6">
    <label class="small mb-1" for="inputLocation">Địa chỉ</label>
    <input class="form-control" id="inputLocation" type="text" placeholder="" value="user->DiaChiTruSo  ">
    </div>
    </div>

    <div class="mb-3">
    <label class="small mb-1" for="inputEmailAddress">Email</label>
    <input class="form-control" id="inputEmailAddress" type="email" placeholder="Enter your email address" value="user->email ">
    </div>
    <div class="form-group">
    <label for="inputEmailAddress">Quyền</label>


        <select class="form-control input-sm m-bot15"  >

          </select>

          </div>

    <button type="submit" name="add_product" class="btn btn-info"><i class='fas fa-save'></i> Lưu thay đổi</button>

    </form>
    </div>
</div> -->
<main class="content" style=" ;background-repeat: round;background-size:100%;" >
					<div class="row">
						<div class="col-xl-12 col-xxl-5 d-flex">
							<!-- không sửa ở trên -->
							@foreach ($User as $User_id => $us )
						<div class="container-fluid" >


						<h1 style="font-weight:bold;text-align:center;font-size:24px;color:#4e73df;font-style:Roboto;">THÔNG TIN DOANH NGHIỆP</h1>
						<br>
						<div class="md-5">
						<div class="row gx-3 mb-3">
						<div class="col-md-6">
    <label class="small mb-1" for="inputUsername" style="font-weight:bold;font-size:14px;">Họ tên người dùng</label>
    <input class="form-control" id="Username" type="text" placeholder="Enter username" value="{{ $us->tennguoidung }}">
</div>
<div class="col-md-6">
<label class="small mb-1" for="inputPhone" style="font-weight:bold;font-size:14px;">Số điện thoại</label>
<input class="form-control" id="inputPhone" type="text" placeholder="" value="">

</div>
</div>
	<br>
	<div class="row gx-3 mb-3">

<div class="col-md-6">
<label class="small mb-1" for="inputOrgName" style="font-weight:bold;font-size:14px;">Tên doanh nghiệp</label>
<input class="form-control" id="inputOrgName" type="text" placeholder="" value="">

</div>
<div class="col-md-6">
    <label class="small mb-1" for="inputEmailAddress"style="font-weight:bold;font-size:14px;">Email</label>
    <input class="form-control" id="inputEmailAddress"type="email" placeholder="" value="">
    </div>
	<div class="mb-3">
	<br>
    <label class="small mb-1"  for="inputLocation" style="font-weight:bold;font-size:14px;">Địa chỉ</label>
    <input class="form-control" id="inputLocation"  type="text" placeholder="" value="">
    </div>
    </div>
</div>


    </div>
	@endforeach
<!-- không sửa phía dưới -->
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
