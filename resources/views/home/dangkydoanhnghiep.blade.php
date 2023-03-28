@extends( 'home.frontend')
@section('title')
Chuyển đổi số tỉnh An Giang - Đăng ký đánh giá
@endsection
@section('link')
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

@endsection
@section('content')
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
 <style>
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
    </style>
    <div class="container mt-3">
          @if(session('alert'))    <div class="alert alert-danger alert-dismissible" role="alert">

            <div class="alert alert-danger alert-dismissible fade show">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                {{session('alert')}}
              </div>
        @endif  
    </div>
<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3" style="text-align: center;">ĐĂNG KÝ MỞ TÀI KHOẢN MỚI</h1>

        <div class="row">
            <div class="col-md-3 col-xl-2">


            </div>

            <div class="col-md-9 col-xl-10" style="margin-left: 130px;">
                <div class="tab-content">
                    <div class="tab-pane fade active show" id="account" role="tabpanel">

                        <div class="card">

                        </div>

                        <div class="card">
                            <div class="card-header">

                                <h4 class="card-title mb-0">Thông tin doanh nghiệp</h4>
                            </div>
                            <div class="card-body">
                                <form role="form" action="{{URL::to('/update_profile')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="mb-3 ">
                                            <input type="text" name="idCT" value="" hidden>
                                            <label class="form-label" for="inputDNName">Tên Doanh Nghiệp</label>
                                            <input type="text" class="form-control" id="inputDNName" name="TenDN" placeholder="Tên Doanh Nghiệp" value="">
                                        </div>
                                        <div class="mb-3 ">
                                            <label class="form-label" for="inputDNName">Tên Tiếng Anh</label>
                                            <input type="text" class="form-control" id="inputDNName" name="TenTA" placeholder="Tên Tiếng Anh" value="">
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label" for="inputDNName">Tên Viết Tắt</label>
                                            <input type="text" class="form-control" id="inputDNName" name="TenVT" placeholder="Tên Viết Tắt" value="">
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label" for="inputngayhd">Ngày hoạt động</label>
                                            <input type="date" class="form-control" id="inputngayhd" name="NHD" placeholder="Ngày hoạt động" value="">
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label" for="inputTSChinh">Trụ Sở Chính</label>
                                            <select class="form-control form-select " id="city" name="TruSo" aria-label=".form-select-sm" selec>
                                                <option value="" >Chọn Tỉnh/Thành Phố</option>
                                                </select>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label" for="inputTSChinh">Địa Phương(Huyện)</label>
                                            <select class="form-control form-select" id="district" name="DiaPhuong" aria-label=".form-select-sm">
                                                <option value="" selected>Chọn quận huyện</option>
                                                </select>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label" for="inputTSChinh">Lĩnh Vực</label>
                                            <select class="form-control form-select" id="linhvuc" name="LinhVuc" aria-label=".form-select-sm">
                                               {{-- @foreach ( $LinhVuc as $LV )
                                               @if ( $LV->Id == $DN->LinhVuc_id)
                                               <option value="{{ $LV->Id }}" selected>{{ $LV->TenLinhVuc }}</option>
                                               @else
                                               <option value="{{ $LV->Id }}" >{{ $LV->TenLinhVuc }}</option>
                                               @endif

                                               @endforeach --}}

                                                </select>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label" for="inputTSChinh">Loại hình kinh doanh chính</label>
                                            <select class="form-control form-select" id="loaihinh" name="LoaiHinh" aria-label=".form-select-sm">
                                                <option value="" selected>Chọn loại hình kinh doanh</option>
                                                </select>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label" for="inputmst">Quy mô nhân sự</label>
                                            <input type="text" class="form-control" id="inputQM" name="QuyMo" placeholder="sl Nhân sự" value="">
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label" for="inputmst">Vốn điều lệ</label>
                                            <input type="text" class="form-control" id="inputVon" name="VonDieuLe" placeholder="Vốn điều lệ" value="">
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label" for="inputmst">Mã số thuế</label>
                                            <input type="text" class="form-control" id="inputmst" name="MST" placeholder="Mã số thuế" value="">
                                        </div>


                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="inputEmail4">Email doanh nghiệp</label>
                                        <input type="email" class="form-control" id="inputEmail4" name="Email" placeholder="Email" value="">
                                    </div>
                                </div>
                        </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title mb-0">Thông tin liên hệ doanh nghiệp</h3>
                                        </div>
                                    <div class="row">
                                        <div class="mb-3">
                                            <p class="card-subtitle mb-0">Chọn theo thứ tự: Tỉnh -> Huyện -> Xã</p>
                                        </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label" for="inputTSChinh">Thành Phố</label>
                                        <select class="form-control form-select" id="citys" name="DC_ThanhPho" aria-label=".form-select-sm">
                                            <option value="" selected>Chọn tỉnh thành</option>
                                            </select>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label" for="inputTSChinh">Huyện</label>
                                        <select class="form-control form-select" id="districts" name="DC_Huyen" aria-label=".form-select-sm">
                                            <option value="" selected>Chọn quận huyện</option>
                                            </select>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label" for="inputTSChinh">Xã</label>
                                        <select class="form-control form-select" id="wards" name="DC_Phuong" aria-label=".form-select-sm">
                                            <option value="" selected>Chọn phường xã</option>
                                            </select>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label" for="inputZip">Zip</label>
                                        <input type="text" class="form-control" id="inputZip" name="Zip" value="">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="inputAddress">Địa chỉ chi tiết</label>
                                        <input type="text" class="form-control" id="inputAddress" name="DC" placeholder="1234 Main St" value="">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                      <label class="form-label" for="inputSDT">Số điện thoại</label>
                                      <input class="form-control input-validation-error" name="SDT" data-val="true" data-val-regex="Vui lòng nhập số điện thoại hợp lệ" data-val-regex-pattern="^(\+?)[0-9]{6,}$" id="DienThoai" name="DienThoai" type="text" value="">
                                      {{-- <input type="text" class="form-control input-validation-error" id="inputSDT" data-val-regex="Vui lòng nhập số điện thoại hợp lệ"  data-val-regex-pattern="^(\+?)[0-9]{6,}$" value="{{ $DN->MaSoThue }}"> --}}
                                  </div>
                                  <div class="mb-3 col-md-6">
                                    <label class="form-label" for="inputFax">Fax</label>
                                    <input type="text" class="form-control" id="inputFax" name="Fax" value="">
                                </div>
                                <div class="mb-3 col-md-6">
                                  <label class="form-label" for="inputWeb">Website</label>
                                  <input type="text" class="form-control" id="inputWeb" name="Web" value="">
                              </div>
                                </div>
                                    </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title mb-0">Thông tin người đại diện</h3>
                                        </div>
                                    <div class="row">
                                        <div class="form-group col-md-6 col-sm-12">
                                            <label class="control-label col-sm-4">
                                                Họ tên&nbsp;<span class="text-danger">*</span>
                                            </label>
                                            <div class="col-sm-8">
                                                <input class="form-control" data-val="true" data-val-requiredextend="Vui lòng nhập Người đại diện" data-val-stringlengthextend="Vui lòng nhập ít hơn 250 ký tự" data-val-stringlengthextend-maxlength="250" id="NguoiDaiDien" name="NguoiDaiDien" type="text" value="">
                                                <span class="field-validation-valid text-danger" data-valmsg-for="NguoiDaiDien" data-valmsg-replace="true"></span>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6 col-sm-12">
                                            <label class="control-label col-sm-4">
                                                Chức vụ
                                            </label>
                                            <div class="col-sm-8">
                                                <input class="form-control" data-val="true" data-val-stringlengthextend="Vui lòng nhập ít hơn 100 ký tự" data-val-stringlengthextend-maxlength="100" id="ChucVuNguoiDaiDien" name="ChucVuNguoiDaiDien" type="text" value="">
                                                <span class="field-validation-valid text-danger" data-valmsg-for="ChucVuNguoiDaiDien" data-valmsg-replace="true"></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-6 col-sm-12">
                                            <label class="control-label col-sm-4">
                                                CMND
                                            </label>
                                            <div class="col-sm-8">
                                                <input class="form-control datepicker" id="CmndNguoiDaiDien" name="CmndNguoiDaiDien" type="text" value="">
                                                <span class="field-validation-valid text-danger" data-valmsg-for="CmndNguoiDaiDien" data-valmsg-replace="true"></span>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6 col-sm-12">
                                            <label class="control-label col-sm-4">
                                                Nơi cấp
                                            </label>
                                            <div class="col-sm-8">
                                                <select class="form-control input-select2 select2-hidden-accessible" id="NoiCapCmndNguoiDaiDien" name="NoiCapCmndNguoiDaiDien" tabindex="-1" aria-hidden="true"><option value="">--Chọn Tỉnh/Thành phố--</option>
        <option value="t1">Hà Nội</option>
        <option value="t2">Hà Giang</option>
        <option value="t3">Cao Bằng</option>
        <option value="t4">Bắc Kạn</option>
        <option value="t5">Tuyên Quang</option>
        <option value="t6">Lào Cai</option>
        <option value="t7">Điện Biên</option>
        <option value="t8">Lai Châu</option>
        <option value="t9">Sơn La</option>
        <option value="t10">Yên Bái</option>
        <option value="t11">Hòa Bình</option>
        <option value="t12">Thái Nguyên</option>
        <option value="t13">Lạng Sơn</option>
        <option value="t14">Quảng Ninh</option>
        <option value="t15">Bắc Giang</option>
        <option value="t16">Phú Thọ</option>
        <option value="t17">Vĩnh Phúc</option>
        <option value="t18">Bắc Ninh</option>
        <option value="t19">Hà Tây</option>
        <option value="t20">Hải Dương</option>
        <option value="t21">Hải Phòng</option>
        <option value="t22">Hưng Yên</option>
        <option value="t23">Thái Bình</option>
        <option value="t24">Hà Nam</option>
        <option value="t25">Nam Đinh</option>
        <option value="t26">Ninh Bình</option>
        <option value="t27">Thanh Hóa</option>
        <option value="t28">Nghệ An</option>
        <option value="t29">Hà Tĩnh</option>
        <option value="t30">Quảng Bình</option>
        <option value="t31">Quảng Trị</option>
        <option value="t32">Thừa Thiên Huế</option>
        <option value="t33">Đà Nẵng</option>
        <option value="t34">Quảng Nam</option>
        <option value="t35">Quảng Ngãi</option>
        <option value="t36">Bình Định</option>
        <option value="t37">Phú Yên</option>
        <option value="t38">Khánh Hòa</option>
        <option value="t39">Ninh Thuận</option>
        <option value="t40">Bình Thuận</option>
        <option value="t41">Kon Tum</option>
        <option value="t42">Gia Lai</option>
        <option value="t43">Đăk Lăk</option>
        <option value="t44">Đăk Nông</option>
        <option value="t45">Lâm Đồng</option>
        <option value="t46">Bình Phước</option>
        <option value="t47">Tây Ninh</option>
        <option value="t48">Binh Dương</option>
        <option value="t49">Đồng Nai</option>
        <option value="t50">Bà Rịa - Vũng Tàu</option>
        <option value="t51">TP. Hồ Chí Minh</option>
        <option value="t52">Long An</option>
        <option value="t53">Tiền Giang</option>
        <option value="t54">Bến Tre</option>
        <option value="t55">Trà Vinh</option>
        <option value="t56">Vĩnh Long</option>
        <option value="t57">Đồng Tháp</option>
        <option value="t58">An Giang</option>
        <option value="t59">Kiên Giang</option>
        <option value="t60">Cần Thơ</option>
        <option value="t61">Hậu Giang</option>
        <option value="t62">Sóc Trăng</option>
        <option value="t63">Bạc Liêu</option>
        <option value="t64">Cà Mau</option>
        </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-NoiCapCmndNguoiDaiDien-container"><span class="select2-selection__rendered" id="select2-NoiCapCmndNguoiDaiDien-container" title="--Chọn Tỉnh/Thành phố--">--Chọn Tỉnh/Thành phố--</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                <span class="field-validation-valid text-danger" data-valmsg-for="NoiCapCmndNguoiDaiDien" data-valmsg-replace="true"></span>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="form-group col-md-6 col-sm-12">
                                            <label class="control-label col-sm-4">
                                                Địa chỉ email
                                            </label>
                                            <div class="col-sm-8">
                                                <input class="form-control" data-val="true" data-val-regexcustom="Vui lòng nhập địa chỉ email hợp lệ" data-val-regexcustom-pattern="^[\w!#$%&amp;&#39;*+\-/=?\^_`{|}~]+(\.[\w!#$%&amp;&#39;*+\-/=?\^_`{|}~]+)*@((([\-\w]+\.)+[a-zA-Z]{2,4})|(([0-9]{1,3}\.){3}[0-9]{1,3}))\z" data-val-stringlengthextend="Vui lòng nhập ít hơn 250 ký tự" data-val-stringlengthextend-maxlength="250" id="EmailNguoiDaiDien" name="EmailNguoiDaiDien" type="text" value="">
                                                <span class="field-validation-valid text-danger" data-valmsg-for="EmailNguoiDaiDien" data-valmsg-replace="true"></span>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6 col-sm-12">
                                            <label class="control-label col-sm-4">
                                                Điện thoại
                                            </label>
                                            <div class="col-sm-8">
                                                <input class="form-control" data-val="true" data-val-regex="Vui lòng nhập số điện thoại hợp lệ" data-val-regex-pattern="^(\+?)[0-9]{6,}$" id="DienThoaiNguoiDaiDien" name="DienThoaiNguoiDaiDien" type="text" value="">
                                                <span class="field-validation-valid text-danger" data-valmsg-for="DienThoaiNguoiDaiDien" data-valmsg-replace="true"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="form-group col-md-6 col-sm-12">
                                            <label class="control-label col-sm-4">
                                                Địa chỉ
                                            </label>
                                            <div class="col-sm-8">
                                                <textarea class="form-control" cols="20" data-val="true" data-val-stringlengthextend="Vui lòng nhập ít hơn 100 ký tự" data-val-stringlengthextend-maxlength="100" id="DiaChiNguoiDaiDien" name="DiaChiNguoiDaiDien" rows="2"></textarea>
                                                <span class="field-validation-valid text-danger" data-valmsg-for="DiaChiNguoiDaiDien" data-valmsg-replace="true"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    <div class="mb-3 ">
                                        <button type="submit" class="btn btn-primary">Đăng ký</button>

                                    </div>
                                </form>

                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>

    </div>
</main>
@endsection
