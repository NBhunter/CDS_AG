@extends('DoanhNghiep.dashboard')
@section('link')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.full.min.js"></script>

@endsection
@section('content')
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
{{-- <style>
     @import url(https://fonts.googleapis.com/css?family=Sanchez);
    @import url(https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css);
*,
*::before,
*::after {
  transition: 400ms all ease-in-out 50ms;
  box-sizing: border-box;
  backface-visibility: hidden;
}


input[type="checkbox"] {
  display: none;
}
/*
a{ color: rgba(43,43,43,1); text-decoration: none; padding: 10px; border-bottom: 2px solid rgba(43,43,43,1); }

a:hover{ background: rgba(43,43,43,1); color: rgba(255,255,255,1); } */


/*Button is :CHECKED*/

input[type="checkbox"]:checked ~ #togglediv {
  background: rgba(73,168,68,1);
  box-shadow: 0 0 2px rgba(73,168,68,1);
}

input[type="checkbox"]:checked ~ #togglediv #toggleview {
  left: 110px;
  transform: rotate(360deg);
}


/*shared*/

#togglediv,
#toggleview {
  border-radius: 50px;
}


/*'un':checked state*/

#togglediv {
  height: 100px;
  width: 200px;
  background: rgba(43, 43, 43, 1);
  position: relative;
  /* top: calc(50vh - 50px);*/
  margin: auto;
  padding-left: 10%;

  box-shadow: 0 0 2px rgba(43,43,43,1);

}

#toggleview {
  height: 80px;
  width: 80px;
  background: rgba(255, 255, 255, 1);
  position: absolute;
  top: 10px;
  left: 10px;
  cursor: pointer;
}

#toggleview::before {
  content: '';
  height: 60px;
  width: 5px;
  position: absolute;
  top: calc(50% - 30px);
  left: calc(50% - 2.5px);
  transform: rotate(45deg);
}

#toggleview::after {
  content: '';
  height: 5px;
  width: 60px;
  position: absolute;
  top: calc(50% - 2.5px);
  left: calc(50% - 30px);
  transform: rotate(45deg);
}

#toggleview::before,
#toggleview::after{
  background: rgba(43,43,43,1);
  border-radius: 5px;
}

/* pesduo class on toggle */

input[type="checkbox"]:checked ~ #togglediv #toggleview::before{
  height: 50px;
  top: calc(55% - 25px);
  left: calc(60% - 2.5px);
  background: rgba(73,168,68,1);
}
input[type="checkbox"]:checked ~ #togglediv #toggleview::after{
  width: 20px;
  top: calc(95% - 25px);
  left: calc(22.5% - 2.5px);
  background: rgba(73,168,68,1);
}
    </style> --}}
<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3">quản lý hồ sơ doanh nghiệp</h1>

        <div class="row">
            <div class="col-md-3 col-xl-2">

                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Thông Tin</h5>
                    </div>

                    <div class="list-group list-group-flush" role="tablist">
                        <a class="list-group-item list-group-item-action active" data-bs-toggle="list" href="#account" role="tab" aria-selected="true">
                            Doanh nghiệp
                        </a>
                        <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#password" role="tab" aria-selected="false" tabindex="-1">
                            Người dùng
                        </a>

                    <div class="card-header">
                        <h5 class="card-title mb-0">Quản Lý</h5>
                    </div>

                        <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="https://demo.adminkit.io/pages-settings.html#" role="tab" aria-selected="false" tabindex="-1">
                            Tài khoảng
                        </a>
                        <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="https://demo.adminkit.io/pages-settings.html#" role="tab" aria-selected="false" tabindex="-1">
                            Email notifications
                        </a>
                        <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="https://demo.adminkit.io/pages-settings.html#" role="tab" aria-selected="false" tabindex="-1">
                            Web notifications
                        </a>
                        <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="https://demo.adminkit.io/pages-settings.html#" role="tab" aria-selected="false" tabindex="-1">
                            Widgets
                        </a>
                        <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="https://demo.adminkit.io/pages-settings.html#" role="tab" aria-selected="false" tabindex="-1">
                            Your data
                        </a>
                        <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="https://demo.adminkit.io/pages-settings.html#" role="tab" aria-selected="false" tabindex="-1">
                            Delete account
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-9 col-xl-10">
                <div class="tab-content">
                    <div class="tab-pane fade active show" id="account" role="tabpanel">

                        <div class="card">
                            <div class="card-header">

                                <h5 class="card-title mb-0">Public Status</h5>
                            </div>
                            <div class="card-body">

                                    @csrf
                                    <div class="row">
                                        <div class="col-md-8">


                                            {{-- @if ($User->TrangThai_HienThi== 1) --}}
                                            <input data-id="{{ Session::get("DoanhNghiep_id") }}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $User->TrangThai_HienThi ? 'checked' : '' }}>
                                            {{-- <input type="checkbox" id="toggle" data-id="{{ Session::get("DoanhNghiep_id") }}" onchange="doitrangthai()" checked>
                                            <input type="hidden" id="status" value="0"> --}}
                                            <div id="togglediv">
                                                <label id="toggleview"  for="toggle"></label>
                                              </div>

                                        </div>
                                    </div>


                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">

                                <h5 class="card-title mb-0">Thông tin doanh nghiệp</h5>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label" for="inputDNName">Tên Doanh Nghiệp</label>
                                            <input type="text" class="form-control" id="inputDNName" placeholder="Tên Doanh Nghiệp">
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label" for="inputTSChinh">Trụ Sở Chính</label>
                                            <select class="form-control form-select " id="city" aria-label=".form-select-sm">
                                                <option value="" selected>Chọn Tỉnh/Thành Phố</option>
                                                </select>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label" for="inputmst">Mã số thuế</label>
                                            <input type="text" class="form-control" id="inputmst" placeholder="Mã số thuế">
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label" for="inputngayhd">Ngày hoạt động</label>
                                            <input type="date" class="form-control" id="inputngayhd" placeholder="Ngày hoạt động">
                                        </div>

                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="inputEmail4">Email</label>
                                        <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="inputAddress">Address</label>
                                        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="inputAddress2">Address 2</label>
                                        <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                                    </div>
                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label" for="inputCity">City</label>
                                            <input type="text" class="form-control" id="inputCity">
                                        </div>
                                        <div class="mb-3 col-md-4">
                                            <label class="form-label" for="inputState">State</label>
                                            <select id="inputState" class="form-control">
                                                <option selected="">Choose...</option>
                                                <option>...</option>
                                            </select>
                                        </div>
                                        <div class="mb-3 col-md-2">
                                            <label class="form-label" for="inputZip">Zip</label>
                                            <input type="text" class="form-control" id="inputZip">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </form>

                            </div>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="password" role="tabpanel">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Password</h5>

                                <form>
                                    <div class="mb-3">
                                        <label class="form-label" for="inputPasswordCurrent">Current password</label>
                                        <input type="password" class="form-control" id="inputPasswordCurrent">
                                        <small><a href="https://demo.adminkit.io/pages-settings.html#">Forgot your password?</a></small>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="inputPasswordNew">New password</label>
                                        <input type="password" class="form-control" id="inputPasswordNew">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="inputPasswordNew2">Verify password</label>
                                        <input type="password" class="form-control" id="inputPasswordNew2">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>
<main class="content" style=" ;background-repeat: round;background-size:100%;" >
					<div class="row">
						<div class="">
							<!-- không sửa ở trên -->

						<div class="container-fluid" >


						<h1 style="font-weight:bold;text-align:center;font-size:24px;color:#4e73df;font-style:Roboto;">THÔNG TIN DOANH NGHIỆP</h1>
						<br>
						<div class="md-5">
						<div class="row gx-3 mb-3">

<div class="col-md-6">
<label class="small mb-1" for="inputPhone" style="font-weight:bold;font-size:14px;">Số điện thoại</label>
{{-- <input class="form-control" id="inputPhone" type="text" placeholder="" value="{{ $User->phone }}"> --}}
    <div class="col col-lg-12 shadow p-3 mb-5 bg-white rounded">
    <h2 style="font-weight:bold;text-align:center;font-size:24px;color:#4e73df;font-style:Roboto;">Thông tin người dùng</h2>
	<br>
    <div class="md-5">
	<div class="row gx-3 mb-3">
	<div class="col-md-6">

    <label class="small mb-1" for="inputUsername" style="font-weight:bold;font-size:14px;">Họ tên người dùng</label>
    <input class="form-control" id="Username" type="text" placeholder="Enter username" value="{{ $User->Tenuser }}">
</div>

</div>
	<br>
	<div class="row gx-3 mb-3">

<div class="col-md-6">
<label class="small mb-1" for="inputOrgName" style="font-weight:bold;font-size:14px;">Tên doanh nghiệp</label>
<input class="form-control" id="inputOrgName" type="text" placeholder="" value="{{ $User->TenDoanhNghiep }}">
<label class="small mb-1" for="inputOrgName" style="font-weight:bold;font-size:14px;">Số điện thoại</label>
<input class="form-control" id="inputOrgName" type="text" placeholder="" value="{{ $User->SoDienThoai }}">

</div>
<div class="col-md-6">
    <label class="small mb-1" for="inputEmailAddress"style="font-weight:bold;font-size:14px;">Email</label>
    <input class="form-control" id="inputEmailAddress"type="email" placeholder="" value="{{ $User->emailNguoiDung }}">
    </div>
	<div class="mb-3">
	<br>
    <label class="small mb-1"  for="inputLocation" style="font-weight:bold;font-size:14px;">Địa chỉ</label>
    <input class="form-control" id="inputLocation"  type="text" placeholder="" value="{{ $User->DiaChiTruSo }}">
    </div>
    </div>
    </div>
	<div class="mb-3">
	<br>
    {{-- <label class="small mb-1"  for="inputLocation" style="font-weight:bold;font-size:14px;">Địa chỉ</label><input class="form-control" id="inputLocation"  type="text" placeholder="" value="{{ $User->diachinguoidung }}"> --}}
</div>
</div>
</div>


</div>
</div>
<div class="col col-lg-12 shadow p-3 mb-5 bg-white rounded">
    <h2 style="font-weight:bold;text-align:center;font-size:24px;color:#4e73df;font-style:Roboto;">Thông tin doanh nghiệp</h2>
<br>
<div class="md-5">
    <div class="mb-3">
        <br>
        <label class="small mb-1" for="inputUsername" style="font-weight:bold;font-size:14px;">Tên đầy đủ</label>
        <input class="form-control" id="Username" type="text" placeholder="Enter username" value="{{ $User->TenDoanhNghiep }}">
        </div>
    <div class="row gx-3 mb-3">
    <div class="col-md-6">

<label class="small mb-1" for="inputUsername" style="font-weight:bold;font-size:14px;">Tên viết tắt</label>
<input class="form-control" id="Username" type="text" placeholder="Enter username" value="{{ $User->TenVietTat }}">
</div>
<div class="col-md-6">
<label class="small mb-1" for="inputPhone" style="font-weight:bold;font-size:14px;">Số điện thoại</label>
<input class="form-control" id="inputPhone" type="text" placeholder="" value="{{ $User->SoDienThoai }}">

</div>
</div>
<div class="mb-3">
    <br>
    <label class="small mb-1"  for="inputLocation" style="font-weight:bold;font-size:14px;">Địa chỉ trụ sở</label>
    <input class="form-control" id="inputLocation"  type="text" placeholder="" value="{{ $User->DiaChiTruSo }}">
    </div>
<br>
<div class="row gx-3 mb-3">

<div class="col-md-6">
<label class="small mb-1" for="inputOrgName" style="font-weight:bold;font-size:14px;">Loại hình lao động</label>
<input class="form-control" id="inputOrgName" type="text" placeholder="" value="{{ $User->LoaiHinhLaoDong}}">

</div>
<div class="col-md-6">
<label class="small mb-1" for="inputEmailAddress"style="font-weight:bold;font-size:14px;">Lĩnh vực</label>
<input class="form-control" id="inputEmailAddress"type="email" placeholder="" value="{{ $User->TenLinhVuc}}">
</div>
<div class="mb-3">
<br>
<label class="small mb-1" for="inputEmailAddress"style="font-weight:bold;font-size:14px;">Email</label>
<input class="form-control" id="inputEmailAddress"type="email" placeholder="" value="{{ $User->email }}">
</div>
</div>
</div>


</div>

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
// function doitrangthai(){
// var idDN = $(this).data('id');
// var status = document.getElementById("status").value;
// $.post("{{ URL::to('/congkhaidoanhnghiep') }}", {
//                                         _token: $('meta[name=csrf-token]').attr('content'),
//                                         id: idDN,
//                                         status:status
//                                         },redirect(Request::url()));


// }
$(function() {
           $('.toggle-class').change(function() {
           var status = $(this).prop('checked') == true ? 1 : 0;
           var DN_id = $(this).data('id');
           $.ajax({

               type: "post",
               dataType: "json",
               url: '{{ URL::to('/congkhaidoanhnghiep') }}',
               data: {'status': status, 'DN_id': DN_id},
               success: function(data){
               console.log(data.success)
            }
         });
      })
   });

</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
    <script>
	var citis = document.getElementById("city");
var districts = document.getElementById("district");
var wards = document.getElementById("ward");
var Parameter = {
  url: "https://raw.githubusercontent.com/kenzouno1/DiaGioiHanhChinhVN/master/data.json",
  method: "GET",
  responseType: "application/json",
};
var promise = axios(Parameter);
promise.then(function (result) {
  renderCity(result.data);
});

function renderCity(data) {
  for (const x of data) {
    citis.options[citis.options.length] = new Option(x.Name, x.Id);
  }
  citis.onchange = function () {
    district.length = 1;
    ward.length = 1;
    if(this.value != ""){
      const result = data.filter(n => n.Id === this.value);

      for (const k of result[0].Districts) {
        district.options[district.options.length] = new Option(k.Name, k.Id);
      }
    }
  };
  district.onchange = function () {
    ward.length = 1;
    const dataCity = data.filter((n) => n.Id === citis.value);
    if (this.value != "") {
      const dataWards = dataCity[0].Districts.filter(n => n.Id === this.value)[0].Wards;

      for (const w of dataWards) {
        wards.options[wards.options.length] = new Option(w.Name, w.Id);
      }
    }
  };
}
$(function () {
  $(".city").select2();
});
	</script>


@endsection
