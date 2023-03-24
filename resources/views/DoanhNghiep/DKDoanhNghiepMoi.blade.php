@extends( 'home.frontend')
@section('title')
Đăng ký thông tin doanh nghiệp - Chuyển đổi số tỉnh An Giang
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

        <h1 class="h3 mb-3">ĐĂNG KÝ MỞ TÀI KHOẢNG MỚI</h1>

        <div class="row">
            <div class="col-md-3 col-xl-2">


            </div>

            <div class="col-md-9 col-xl-10">
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
                                    <div class="mb-3 ">
                                        <button type="submit" class="btn btn-primary">Save changes</button>

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
