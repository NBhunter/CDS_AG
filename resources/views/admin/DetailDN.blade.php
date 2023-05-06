@extends('admin.admindashboard')

@section('content')
<script type="text/javascript" src="https://unpkg.com/default-passive-events"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3" style="text-align: center; font-weight:bold;">HỒ SƠ CỦA DOANH NGHIỆP</h1>

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

                                <h4 class="card-title mb-0" style="color:#0038b0;font-weight:bold;">Thông tin doanh
                                    nghiệp</h4>
                            </div>
                            <div class="card-body">
                                <form role="form" action="{{ URL::to('/action_DN') }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="mb-3 ">
                                            <input type="text" name="idCT" value="{{ $DN->DNID }}" hidden>
                                            <label class="form-label" for="inputDNName">Tên doanh nghiệp</label>
                                            <input type="text" class="form-control" id="inputDNName" name="TenDN"
                                                placeholder="Nhập tên doanh nghiệp" value="{{ $DN->TenDoanhNghiep }}">
                                        </div>
                                        <div class="mb-3 ">
                                            <label class="form-label" for="inputDNName">Tên tiếng anh</label>
                                            <input type="text" class="form-control" id="inputDNName" name="TenTA"
                                                placeholder="Nhập tên tiếng anh" value="{{ $DN->TenTiengAnh }}">
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label" for="inputDNName">Tên viết tắt</label>
                                            <input type="text" class="form-control" id="inputDNName" name="TenVT"
                                                placeholder="Nhập tên viết tắt" value="{{ $DN->TenVietTat }}">
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label" for="inputngayhd">Ngày hoạt động</label>
                                            <input type="date" class="form-control" id="inputngayhd" name="NHD"
                                                placeholder="Ngày hoạt động" value="{{ $DN->NgayHoatDong }}">
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label" for="TruSo">Trụ sở chính</label>
                                            <select class="form-control form-select " id="city" name="TruSo"
                                                aria-label=".form-select-sm" selec>
                                                <option value="">Chọn Tỉnh/Thành Phố</option>
                                            </select>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label" for="DiaPhuong">Địa phương (Huyện)</label>
                                            <select class="form-control form-select "  id="district" name="DiaPhuong"
                                                aria-label=".form-select-sm">
                                                <option value="" selected>Chọn quận huyện</option>
                                            </select>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label" for="inputTSChinh">Lĩnh vực</label>
                                            <select class="form-control form-select" id="linhvuc" name="LinhVuc"
                                                aria-label=".form-select-sm">
                                                <option value="" selected>Chọn Lĩnh Vực</option>
                                                @foreach ( $LinhVuc as $LV )
                                                @if ($LV->Id == $DN->LinhVuc_id)
                                                <option value="{{ $LV->Id }}" selected>{{ $LV->TenLinhVuc }}</option>
                                                @else
                                                <option value="{{ $LV->Id }}" >{{ $LV->TenLinhVuc }}</option>
                                                @endif


                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label" for="inputTSChinh">Loại hình kinh doanh
                                                chính</label>
                                            <select class="form-control form-select" id="loaihinh" name="LoaiHinh"
                                                aria-label=".form-select-sm">
                                                <option value="" selected> Chọn loại hình kinh doanh</option>
                                            </select>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label" for="inputmst">Quy mô nhân sự</label>
                                            <input type="text" class="form-control" id="inputQM" name="QuyMo"
                                                placeholder="Số lượng Nhân sự" value="{{ $DN->SoLuongLaoDong }}">
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label" for="inputmst">Vốn điều lệ</label>
                                            <input type="text" class="form-control" id="inputVon"
                                                name="VonDieuLe" placeholder="Vốn điều lệ" value="{{ $DN->VonDieuLe }}">
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label" for="inputmst">Mã số thuế</label>
                                            <input type="text" class="form-control" id="inputmst" name="MST"
                                                placeholder="Mã số thuế" value="{{ $DN->MaSoThue }}">
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label" for="inputEmail4">Email doanh nghiệp</label>
                                            <input type="email" class="form-control" id="inputEmail4"
                                                name="Email" placeholder="Email" value="{{ $DN->email }}">
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <br>

                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title mb-0" style="color:#0038b0;font-weight:bold;">Thông tin liên hệ
                                    doanh nghiệp</h3>
                            </div>
                            <div class="card-body">

                                <br>
                                <div class="row">
                                    <div class="mb-3">
                                        <p class="card-subtitle mb-0">Chọn theo thứ tự: Tỉnh -> Huyện -> Xã</p>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label" for="citys">Thành phố</label>
                                        <select class="form-control form-select" id="citys" name="DC_ThanhPho"
                                            aria-label=".form-select-sm">
                                            <option value="" selected>Chọn tỉnh thành</option>
                                        </select>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label" for="inputTSChinh">Huyện</label>
                                        <select class="form-control form-select" id="districts" name="DC_Huyen"
                                            aria-label=".form-select-sm">
                                            <option value="" selected>Chọn quận huyện</option>
                                        </select>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label" for="inputTSChinh">Xã</label>
                                        <select class="form-control form-select" id="wards" name="DC_Phuong"
                                            aria-label=".form-select-sm">
                                            <option value="" selected>Chọn phường xã</option>
                                        </select>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label" for="inputZip">Zip</label>
                                        <input type="text" class="form-control" id="inputZip" name="Zip"
                                            value="{{ $DN->Zipcode }}">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="inputAddress">Địa chỉ chi tiết</label>
                                        <input type="text" class="form-control" id="inputAddress" name="DC"
                                            placeholder="Nhập địa chỉ chi tiết" value="{{ $DN->DC_SoNha }}">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label" for="inputSDT">Số điện thoại</label>
                                        <input class="form-control input-validation-error" name="SDT"
                                            data-val="true" data-val-regex="Vui lòng nhập số điện thoại hợp lệ"
                                            data-val-regex-pattern="^(\+?)[0-9]{6,}$" id="DienThoai" name="DienThoai"
                                            type="text" value="{{ $DN->SDT }}" placeholder="Nhập vào số điện thoại">
                                        {{-- <input type="text" class="form-control input-validation-error" id="inputSDT" data-val-regex="Vui lòng nhập số điện thoại hợp lệ"  data-val-regex-pattern="^(\+?)[0-9]{6,}$" value="{{ $DN->MaSoThue }}"> --}}
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label" for="inputFax">Fax</label>
                                        <input type="text" class="form-control" id="inputFax" name="Fax"
                                            value="{{ $DN->FAX }}">
                                    </div>
                                    <div class="mb-3 ">
                                        <label class="form-label" for="inputWeb">Website</label>
                                        <input type="text" class="form-control" id="inputWeb" name="Web"
                                            value="{{ $DN->Website }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title mb-0" style="color:#0038b0;font-weight:bold;">Thông tin người
                                    đại diện</h3>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">
                                            Họ tên&nbsp;<span class="text-danger">*</span> </label>
                                        <input type="text" class="form-control" id="inputHoTen" name="Hoten"
                                            value="{{ $DN->TenND }}">
                                    </div>
                                    {{-- <div class="mb-3 col-md-6">
                                        <label class="form-label">
                                            Người đại diện &nbsp;<span class="text-danger">*</span> </label>
                                        <input class="form-control" data-val="true"
                                            data-val-requiredextend="Vui lòng nhập Người đại diện"
                                            data-val-stringlengthextend="Vui lòng nhập ít hơn 250 ký tự"
                                            data-val-stringlengthextend-maxlength="250" id="NguoiDaiDien"
                                            name="NguoiDaiDien" type="text" value="">
                                        <span class="field-validation-valid text-danger"
                                            data-valmsg-for="NguoiDaiDien" data-valmsg-replace="true"></span>
                                    </div> --}}

                                    <div class="mb-3 col-md-6">
                                        <label class="control-label col-sm-4">
                                            Chức vụ
                                        </label>

                                        <input class="form-control" data-val="true"
                                            data-val-stringlengthextend="Vui lòng nhập ít hơn 100 ký tự"
                                            data-val-stringlengthextend-maxlength="100" id="ChucVuNguoiDaiDien"
                                            name="ChucVuNguoiDaiDien" type="text" value="{{ $DN->RoleName }}">

                                    </div>
                                    <div class="mb-3 col-md-3">
                                        <label class="control-label col-sm-4">
                                            CMND
                                        </label>
                                        <input class="form-control datepicker" id="CmndNguoiDaiDien"
                                            name="CmndNguoiDaiDien" type="text" placeholder="Hiện chưa cập nhập chức năng" value="">
                                        <span class="field-validation-valid text-danger"
                                            data-valmsg-for="CmndNguoiDaiDien" data-valmsg-replace="true"></span>
                                    </div>


                                    <div class="mb-3 col-md-3">
                                        <label class="control-label col-sm-4">
                                            Nơi cấp
                                        </label>

                                        <select class="form-control form-select" id="city_NC" name="NoiCap"
                                            aria-label=".form-select-sm">
                                            <option value="" selected>Chọn Tỉnh / Thành phố</option>
                                        </select>
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">
                                            Địa chỉ Email
                                        </label>
                                        <input class="form-control" data-val="true"
                                            data-val-regexcustom="Vui lòng nhập địa chỉ email hợp lệ"
                                            data-val-regexcustom-pattern="^[\w!#$%&amp;&#39;*+\-/=?\^_`{|}~]+(\.[\w!#$%&amp;&#39;*+\-/=?\^_`{|}~]+)*@((([\-\w]+\.)+[a-zA-Z]{2,4})|(([0-9]{1,3}\.){3}[0-9]{1,3}))\z"
                                            data-val-stringlengthextend="Vui lòng nhập ít hơn 250 ký tự"
                                            data-val-stringlengthextend-maxlength="250" id="EmailNguoiDaiDien"
                                            name="EmailNguoiDaiDien" type="text" value="{{ $DN->EmailND }}">
                                        <span class="field-validation-valid text-danger"
                                            data-valmsg-for="EmailNguoiDaiDien" data-valmsg-replace="true"></span>
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">
                                            Điện thoại
                                        </label>

                                        <input class="form-control" data-val="true"
                                            data-val-regex="Vui lòng nhập số điện thoại hợp lệ"
                                            data-val-regex-pattern="^(\+?)[0-9]{6,}$" id="DienThoaiNguoiDaiDien"
                                            name="DienThoaiNguoiDaiDien" type="text" value="{{ $DN->phone }}">
                                        <span class="field-validation-valid text-danger"
                                            data-valmsg-for="DienThoaiNguoiDaiDien" data-valmsg-replace="true"></span>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">
                                            Địa chỉ
                                        </label>

                                        <textarea class="form-control" data-val="true" data-val-stringlengthextend="Vui lòng nhập ít hơn 100 ký tự"
                                            data-val-stringlengthextend-maxlength="100" placeholder="Hiện chưa cập nhập chức năng" id="DiaChiNguoiDaiDien" name="DiaChiNguoiDaiDien" rows="2"></textarea>
                                        <span class="field-validation-valid text-danger"
                                            data-valmsg-for="DiaChiNguoiDaiDien" data-valmsg-replace="true"></span>

                                    </div>
                                    <div class="mb-3 ">
                                        <label class="control-label col-sm-4">
                                            Trạng thái doanh nghiệp
                                        </label>

                                        <select class="form-control form-select" id="TrangThai" name="TrangThai"
                                            aria-label=".form-select-sm">
                                            @if ($DN->TrangThai_XacThuc == 0)
                                            <option value="0" selected>Chưa kích hoạt </option>
                                            <option value="1" >Đang hoạt động </option>
                                            <option value="2" >Đừng hoạt động </option>
                                            @else
                                            @if ($DN->TrangThai_XacThuc == 1)
                                            <option value="0" >Chưa kích hoạt </option>
                                            <option value="1" selected>Đang hoạt động </option>
                                            <option value="2" >Đừng hoạt động </option>
                                            @else
                                            <option value="0" >Chưa kích hoạt </option>
                                            <option value="1" >Đang hoạt động </option>
                                            <option value="2" selected>Đừng hoạt động </option>
                                            @endif
                                            @endif

                                        </select>
                                    </div>
                                </div>



                            </div>


                        </div>
                    </div>

                </div>
                <br>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Lưu</button>
                </div>
                </form>
            </div>
        </div>

    </div>
</main>
<!-- không sửa phía dưới -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>

</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
<script>
    var LinhVuc = document.getElementById("linhvuc");
    var LoaiHinh = document.getElementById("loaihinh");
    var Data = {!! json_encode($LoaiHinh->toArray()) !!};
    $(function() {
        LoaiHinh.length = 1;
        for (const a of Data) {
            if (a.LinhVuc_id == LinhVuc.value)
            if(a.Id == {{ $DN->LoaiHinhDN }})
                LoaiHinh[LoaiHinh.options.length] = new Option(a.TenNganhNghe, a.Id,false, true);
            else
                LoaiHinh[LoaiHinh.options.length] = new Option(a.TenNganhNghe, a.Id);
        }

    });
    LinhVuc.onchange = function() {
        LoaiHinh.length = 1;
        for (const a of Data) {
            if (a.LinhVuc_id == LinhVuc.value)
                LoaiHinh[LoaiHinh.options.length] = new Option(a.TenNganhNghe, a.Id);
        }
    }
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
<script>
    var citis = document.getElementById("city");
        var districts = document.getElementById("district");
        var wards = document.getElementById("ward");
        var citis2 = document.getElementById("citys");
        var districts2 = document.getElementById("districts");
        var wards2 = document.getElementById("wards");
        var Parameter = {
            url: "https://raw.githubusercontent.com/kenzouno1/DiaGioiHanhChinhVN/master/data.json",
            method: "GET",
            responseType: "application/json",
        };
        var promise = axios(Parameter);
        promise.then(function(result) {
            renderCity(result.data);
        });

        function renderCity(data) {
            for (const x of data) {
                @if ($DN->DiaChiTruSo != null)
                    if (x.Id == {{ $DN->DiaChiTruSo }}) {
                        citis[citis.options.length] = new Option(x.Name, x.Id, false, true);
                        const result = data.filter(n => n.Id === citis.value);
                        for (const k of result[0].Districts) {
                            if (k.Id == {{ $DN->DiaPhuong }}) {
                                district.options[district.options.length] = new Option(k.Name, k.Id, false, true);
                            } else {
                                district.options[district.options.length] = new Option(k.Name, k.Id);
                            }
                        }
                    } else {
                        citis[citis.options.length] = new Option(x.Name, x.Id);
                    }
                @else
                    citis[citis.options.length] = new Option(x.Name, x.Id);
                @endif
                // thông tin địa chỉ
                @if ($DN->DC_ThanhPho != null)
                    if (x.Id == {{ $DN->DC_ThanhPho }}) {
                        citis2[citis2.options.length] = new Option(x.Name, x.Id, false, true);
                        const result = data.filter(n => n.Id === citis2.value);
                        @if ($DN->DC_Huyen != null)
                            districts2.length = 1;
                            for (const k of result[0].Districts) {
                                if (k.Id == {{ $DN->DC_Huyen }}) {
                                    districts2.options[districts2.options.length] = new Option(k.Name, k.Id, false, true);

                                    wards2.length = 1;

                                    const dataWards = result[0].Districts.filter(n => n.Id === districts2.value)[0].Wards;

                                    for (const w of dataWards) {
                                        if (w.Id == {{ $DN->DC_Phuong }}) {
                                            wards2.options[wards2.options.length] = new Option(w.Name, w.Id, false, true);
                                        } else {
                                            wards2.options[wards2.options.length] = new Option(w.Name, w.Id);
                                        }
                                    }

                                } else {
                                    districts2.options[districts2.options.length] = new Option(k.Name, k.Id);
                                }
                            }
                        @endif
                    } else {
                        citis2[citis2.options.length] = new Option(x.Name, x.Id);
                    }
                @endif
                citis2[citis2.options.length] = new Option(x.Name, x.Id);

            }
            citis.onchange = function() {
                district.length = 1;
                wards.length = 1;
                if (this.value != "") {
                    const result = data.filter(n => n.Id === this.value);

                    for (const k of result[0].Districts) {
                        district.options[district.options.length] = new Option(k.Name, k.Id);
                    }
                }
            };
            district.onchange = function() {
                ward.length = 1;
                const dataCity = data.filter((n) => n.Id === citis.value);
                if (this.value != "") {
                    const dataWards = dataCity[0].Districts.filter(n => n.Id === this.value)[0].Wards;

                    for (const w of dataWards) {
                        wards.options[wards.options.length] = new Option(w.Name, w.Id);
                    }
                }
            };
            citis2.onchange = function() {
                districts2.length = 1;
                wards2.length = 1;
                if (this.value != "") {
                    const result = data.filter(n => n.Id === this.value);

                    for (const k of result[0].Districts) {
                        districts2.options[districts2.options.length] = new Option(k.Name, k.Id);
                    }
                }
            };
            districts2.onchange = function() {
                wards2.length = 1;
                const dataCity = data.filter((n) => n.Id === citis2.value);
                if (this.value != "") {
                    const dataWards = dataCity[0].Districts.filter(n => n.Id === this.value)[0].Wards;

                    for (const w of dataWards) {
                        wards2.options[wards2.options.length] = new Option(w.Name, w.Id);
                    }
                }
            };
        }


</script>
@endsection
