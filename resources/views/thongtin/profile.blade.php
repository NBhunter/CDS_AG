@extends('DoanhNghiep.dashboard')
@section('link')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
@endsection
@section('nvar')
<li class="sidebar-item "style="background-color: #4e73df;">
    <a class="sidebar-link" href="{{ URL::to('dnviews') }}">
<i class="align-middle" data-feather="home"></i> <span class="align-middle" style="font-family:Roboto;">Trang điều khiển</span>
</a>
</li>
<hr class="sidebar-divider" style="color:white;">
<!-- Heading -->

<li class="sidebar-item active" >
    <a class="sidebar-link" href="{{ URL::to('profile') }}" style="background-color: #4e73df;">
<i class="align-middle" data-feather="user"></i> <span class="align-middle" style="font-family:Roboto;">Hồ sơ doanh nghiệp</span>
</a>
</li>
<hr class="sidebar-divider" style="color:white;">
<li class="sidebar-item">
    <a class="sidebar-link" href="{{ URL::to('phieudanhgia1') }}" style="background-color: #4e73df;">
<i class="align-middle" data-feather="check-circle"></i> <span class="align-middle" style="font-family:Roboto;">Đánh Giá</span>
</a>
</li>
<hr class="sidebar-divider" style="color:white;">
<li class="sidebar-item">
    <a class="sidebar-link" href="{{ URL::to('DNHoi') }}" style="background-color: #4e73df;">
        <i class="align-middle" data-feather="message-square"></i><span class="align-middle" style="font-family:Roboto;">Hỏi Đáp</span>
</a>
</li>

<li class="sidebar-item">
@endsection
@section('content')
    {{-- <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script> --}}
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

        input[type="checkbox"]:checked~#togglediv {
            background: rgba(73, 168, 68, 1);
            box-shadow: 0 0 2px rgba(73, 168, 68, 1);
        }

        input[type="checkbox"]:checked~#togglediv #toggleview {
            left: 50px;
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

            box-shadow: 0 0 2px rgba(43, 43, 43, 1);

        }

        #toggleview {
            height: 20px;
            width: 20px;
            background: rgba(255, 255, 255, 1);
            position: absolute;
            top: 10px;
            left: 10px;
            cursor: pointer;
        }

        #toggleview::before {
            content: '';
            height: 20px;
            width: 4px;
            position: absolute;
            top: calc(160% - 32px);
            left: calc(50% - 2px);
            transform: rotate(45deg);
        }

        #toggleview::after {
            content: '';
            height: 4px;
            width: 22px;
            position: absolute;
            top: calc(35% - 0px);
            left: calc(138% - 30px);
            transform: rotate(45deg);
        }

        #toggleview::before,
        #toggleview::after {
            background: rgba(43, 43, 43, 1);
            border-radius: 5px;
        }

        /* pesduo class on toggle */

        input[type="checkbox"]:checked~#togglediv #toggleview::before {
            height: 50px;
            top: calc(55% - 25px);
            left: calc(60% - 2.5px);
            background: rgba(73, 168, 68, 1);
        }

        input[type="checkbox"]:checked~#togglediv #toggleview::after {
            width: 15px;
            top: calc(196% - 34px);
            left: calc(-2.5% - 1.5px);
            background: rgba(73, 168, 68, 1);
        }
    </style>
    {{-- <div class="container mt-3">
          @if (session('alert'))    <div class="alert alert-danger alert-dismissible" role="alert">

            <div class="alert alert-danger alert-dismissible fade show">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                {{session('alert')}}
              </div>
        @endif
    </div> --}}
    <main class="content">
        <div class="container-fluid p-0">

            <h1 class="h3 mb-3" style="font-weight:bold;color:#3b7ddd;">QUẢN LÝ HỒ SƠ DOANH NGHIỆP</h1>

            <div class="row">
                <div class="col-md-3 col-xl-3">

                    <div class="card">
                        <div class="card-header">
                            <h6 class="card-title mb-0">Doanh nghiệp</h6>
                        </div>

                        <div class="list-group list-group-flush" role="tablist">
                            <a class="list-group-item list-group-item-action active" data-bs-toggle="list" href="#account"
                                role="tab" aria-selected="true">
                                Thông tin
                            </a>
                            <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#password"role="tab" aria-selected="false" tabindex="-1">
                                Đổi mật khẩu
                            </a>

                            <div class="card-header">
                                <h5 class="card-title mb-0">Quản lý</h5>
                            </div>

                            <a class="list-group-item list-group-item-action" data-bs-toggle="list"
                                href="https://demo.adminkit.io/pages-settings.html#" role="tab" aria-selected="false"
                                tabindex="-1">
                                Tài khoản
                            </a>
                            <a class="list-group-item list-group-item-action" data-bs-toggle="list"
                                href="https://demo.adminkit.io/pages-settings.html#" role="tab" aria-selected="false"
                                tabindex="-1">
                                Thông báo từ mail
                            </a>

                            <a class="list-group-item list-group-item-action" data-bs-toggle="list"
                                href="https://demo.adminkit.io/pages-settings.html#" role="tab" aria-selected="false"
                                tabindex="-1">
                                Xóa tài khoản
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-9 col-xl-9">
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="account" role="tabpanel">

                            <div class="card">
                                <div class="card-header">

                                    <h5 class="card-title mb-0">Trạng thái hiển thị</h5>
                                </div>
                                <div class="card-body">

                                    <p style="font-weight:bold; text-align:center;"> ( Nhấn tắt hoặc mở để công khai thông
                                        tin doanh nghiệp )</p>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input data-id="{{ Session::get('DoanhNghiep_id') }}" class="toggle-class"
                                                id="toggle" type="checkbox" data-onstyle="success" data-offstyle="danger"
                                                data-toggle="toggle" data-on="Active" data-off="InActive"
                                                {{ $DN->TrangThai_HienThi ? 'checked' : '' }}>

                                            <div id="togglediv" style="height:40px;width:88px;">
                                                <label id="toggleview" for="toggle"
                                                    style="height:20px;width:20px;"></label>
                                            </div>

                                        </div>
                                    </div>


                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">

                                    <h4 class="card-title mb-0">Thông tin doanh nghiệp</h4>
                                </div>
                                <div class="card-body">
                                    <form role="form" action="{{ URL::to('/update_profile') }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="mb-3 ">
                                                <input type="text" name="idCT" value="{{ $DN->idCT }}" hidden>
                                                <label class="form-label" for="inputDNName">Tên doanh nghiệp</label>
                                                <input type="text" class="form-control" id="inputDNName"
                                                    name="TenDN" placeholder="Tên Doanh Nghiệp"
                                                    value="{{ $DN->TenDoanhNghiep }}">
                                            </div>
                                            <div class="mb-3 ">
                                                <label class="form-label" for="inputDNName">Tên tiếng Anh</label>
                                                <input type="text" class="form-control" id="inputDNName"
                                                    name="TenTA" placeholder="Tên Tiếng Anh"
                                                    value="{{ $DN->TenTiengAnh }}">
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label" for="inputDNName">Tên viết tắt</label>
                                                <input type="text" class="form-control" id="inputDNName"
                                                    name="TenVT" placeholder="Tên Viết Tắt"
                                                    value="{{ $DN->TenVietTat }}">
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label" for="inputngayhd">Ngày hoạt động</label>
                                                <input type="date" class="form-control" id="inputngayhd"
                                                    name="NHD" placeholder="Ngày hoạt động"
                                                    value="{{ $DN->NgayHoatDong }}">
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label" for="inputTSChinh">Trụ sở chính</label>
                                                <select class="form-control form-select " id="city" name="TruSo"
                                                    aria-label=".form-select-sm" selec>
                                                    <option value="" {{ $DN->DiaChiTruSo ? '' : 'selected' }}>Chọn
                                                        Tỉnh/Thành Phố</option>
                                                </select>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label" for="inputTSChinh">Địa phương (Huyện) </label>
                                                <select class="form-control form-select" id="district" name="DiaPhuong"
                                                    aria-label=".form-select-sm">
                                                    <option value="" selected>Chọn quận huyện</option>
                                                </select>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label" for="inputTSChinh">Lĩnh vực</label>
                                                <select class="form-control form-select" id="linhvuc" name="LinhVuc"
                                                    aria-label=".form-select-sm">
                                                    @foreach ($LinhVuc as $LV)
                                                        @if ($LV->Id == $DN->LinhVuc_id)
                                                            <option value="{{ $LV->Id }}" selected>
                                                                {{ $LV->TenLinhVuc }}</option>
                                                        @else
                                                            <option value="{{ $LV->Id }}">{{ $LV->TenLinhVuc }}
                                                            </option>
                                                        @endif
                                                    @endforeach

                                                </select>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label" for="inputTSChinh">Loại hình kinh doanh
                                                    chính</label>
                                                <select class="form-control form-select" id="loaihinh" name="LoaiHinh"
                                                    aria-label=".form-select-sm">
                                                    <option value="" selected>Chọn loại hình kinh doanh</option>
                                                </select>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label" for="inputmst">Quy mô nhân sự</label>
                                                <input type="text" class="form-control" id="inputQM" name="QuyMo"
                                                    placeholder="sl Nhân sự" value="{{ $DN->QuyMoNhanSu }}">
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label" for="inputmst">Vốn điều lệ</label>
                                                <input type="text" class="form-control" id="inputVon"
                                                    name="VonDieuLe" placeholder="Vốn điều lệ"
                                                    value="{{ $DN->VonDieuLe }}">
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
                                <br>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Thông tin liên hệ doanh nghiệp</h3>
                                    <br>
                                    <div class="row">
                                        <div class="mb-3">
                                            <p class="card-subtitle mb-0">Chọn theo thứ tự: Tỉnh -> Huyện -> Xã</p>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label" for="inputTSChinh">Thành Phố</label>
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
                                                placeholder="1234 Main St" value="{{ $DN->DC_SoNha }}">
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label" for="inputSDT">Số điện thoại</label>
                                            <input class="form-control input-validation-error" name="SDT"
                                                data-val="true" data-val-regex="Vui lòng nhập số điện thoại hợp lệ"
                                                data-val-regex-pattern="^(\+?)[0-9]{6,}$" id="DienThoai" name="DienThoai"
                                                type="text" value="{{ $DN->SDT }}">
                                            {{-- <input type="text" class="form-control input-validation-error" id="inputSDT" data-val-regex="Vui lòng nhập số điện thoại hợp lệ"  data-val-regex-pattern="^(\+?)[0-9]{6,}$" value="{{ $DN->MaSoThue }}"> --}}
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label" for="inputFax">Fax</label>
                                            <input type="text" class="form-control" id="inputFax" name="Fax"
                                                value="{{ $DN->FAX }}">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="inputWeb">Website</label>
                                            <input type="text" class="form-control" id="inputWeb" name="Web"
                                                value="{{ $DN->Website }}">
                                        </div>
                                    </div>

                                </div>
                                <br>
                            </div>
                            <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
                            </form>

                        </div>
                    </div>


                    <div class="tab-pane fade" id="password" role="tabpanel">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Quản lý mật khẩu</h5>


                                <form role="form" action="{{ URL::to('/change_password') }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label class="form-label" for="inputPasswordCurrent">Mật khẩu cũ</label>
                                        <input type="password" class="form-control" name="oldPassword"
                                            id="inputPasswordCurrent">
                                        <small><a href="https://demo.adminkit.io/pages-settings.html#"> Bạn quên mật khẩu
                                                ?</a></small>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="inputPasswordNew">Mật khẩu mới</label>
                                        <input type="password" class="form-control" name="NewPassword"
                                            id="inputPasswordNew">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="inputPasswordNew2">Nhập lại mật khẩu mới</label>
                                        <input type="password" class="form-control" name="re_Password"
                                            id="inputPasswordNew2">
                                    </div>




                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
                    </div>
                </form>
                </div>
            </div>
        </div>


    </main>


    <!-- không sửa phía dưới -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.full.min.js"></script>

    <script>
        $('.dropdown-el').click(function(e) {
            e.preventDefault();
            e.stopPropagation();
            $(this).toggleClass('expanded');
            $('#' + $(e.target).attr('for')).prop('checked', true);
        });
        $(document).click(function() {
            $('.dropdown-el').removeClass('expanded');
        });
        $(function() {
            $('.toggle-class').click(function() {
                var status = $(this).prop('checked') == true ? 1 : 0;
                var DN_id = $(this).data('id');
                $.post("{{ URL::to('/congkhaidoanhnghiep') }}", {
                    _token: $('meta[name=csrf-token]').attr('content'),
                    status: status,
                    DN_id: DN_id
                });

            })
        });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
    <script>
        var LinhVuc = document.getElementById("linhvuc");
        var LoaiHinh = document.getElementById("loaihinh");
        var Data = {!! json_encode($LoaiHinh->toArray()) !!};
        window.onload = function(){
            LoaiHinh.length = 1; for( const a of Data){
            if(a.LinhVuc_id == LinhVuc.value)
            if(a.Id == {{ $DN->LoaiHinhDN }})
            LoaiHinh[LoaiHinh.options.length] =new Option(a.TenNganhNghe, a.Id,false,true);
            else
            LoaiHinh[LoaiHinh.options.length] =new Option(a.TenNganhNghe, a.Id);
        }
        }
        LinhVuc.onchange = function() {
            LoaiHinh.length = 1;
            for (const a of Data) {
                if (a.LinhVuc_id == LinhVuc.value)
                    @if ($DN->LoaiHinhDN != null)
                        if (a.Id == {{ $DN->LoaiHinhDN }})
                            LoaiHinh[LoaiHinh.options.length] = new Option(a.TenNganhNghe, a.Id, false, true);
                        else
                            LoaiHinh[LoaiHinh.options.length] = new Option(a.TenNganhNghe, a.Id);
                    @else
                        LoaiHinh[LoaiHinh.options.length] = new Option(a.TenNganhNghe, a.Id);
                    @endif


            }
        }
    </script>
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


        $(function() {
            $(".city").select2();
        });
    </script>

    <script></script>
@endsection
