<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="csrf-token" content="{{ Session::token() }}">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="{{asset('img/logo_ag.ico')}}" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/" />

	<title>Chuyển đổi số tỉnh An Giang - Trang chuyên gia</title>
    <link href="{{ asset('admin_file/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <!-- Custom styles for this template-->

	<link href="{{asset('admin_file/css/sb-admin-2.min.css')}}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">

    <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.js"></script>

    </head>
    <body id="page-top">
        <!-- Page Wrapper -->
        <div id="wrapper">

            <!-- Sidebar -->
            <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ URL::to('chuyengia/home') }}" >
                    <div class="sidebar-brand-icon ">
                    <i class='	fas fa-book-reader'></i>
                    </div>
                    <div class="sidebar-brand-text mx-3">{{ Session::get('title_page') }}</div>
                </a>

                <!-- Divider -->
                <hr class="sidebar-divider my-0">

                <!-- Nav Item - Dashboard -->
                <li class="nav-item active">
                    <a class="nav-link" href="{{ URL::to('chuyengia/home') }}">
                        <i class="fas fa-home"></i>
                        <span>Trang chủ</span></a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider">

                <!-- Heading -->

                @if (Session::get('role') == 'Ban Chấp Hành')

                <li class="nav-item">
                    <a class="nav-link" href="{{ URL::to('chuyengia/DSDoanhNghiep') }}">
                        <i class="	fas fa-users"></i>
                        <span> Danh sách doanh nghiệp</span></a>
                </li>
                <hr class="sidebar-divider">
            @else
            @endif
                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                        aria-expanded="true" aria-controls="collapseTwo">
                        <i class="	fas fa-calendar-check"></i>
                        <span>Phiếu số 1</span>
                    </a>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded" style="width:200px; font-size:12px">
                            <h6 class="collapse-header">Quản lý phiếu số 1:</h6>
                            <a class="collapse-item" href="{{ URL::to('chuyengia/P1_DGM') }}" >Đánh giá mới</a>
                            <a class="collapse-item" href="{{ URL::to('chuyengia/P1_Tatca') }}">Tất cả đánh giá</a>
                            <a class="collapse-item" href="{{ URL::to('chuyengia/P1_ChuaDG') }}" >Doanh nghiệp chưa đánh giá</a>
                        </div>
                    </div>
                </li>
                <hr class="sidebar-divider">

                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFive"
                        aria-expanded="true" aria-controls="collapseFive">
                        <i class="fas fa-calendar-day"></i>
                        <span>Phiếu số 2</span>
                    </a>
                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded"  style="width:200px;font-size:12px">
                            <h6 class="collapse-header">Quản lý phiếu số 2:</h6>

                            <a class="collapse-item" href="{{ URL::to('chuyengia/P2_DGMoi') }}">Đánh giá mới</a>
                            <a class="collapse-item" href="{{ URL::to('chuyengia/P2_Tatca') }}">Tất cả đánh giá</a>
                            <a class="collapse-item" href="{{ URL::to('chuyengia/P2_ChuaDG') }}">Doanh nghiệp chưa đánh giá</a>
                        </div>
                    </div>
                </li>
                <hr class="sidebar-divider">

                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSix"
                        aria-expanded="true" aria-controls="collapseSix">
                        <i class="	fas fa-calendar-minus"></i>
                        <span>Phiếu số 3</span>
                    </a>
                    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded"  style="width:200px;font-size:12px">
                            <h6 class="collapse-header">Quản lý phiếu số 3:</h6>

                            <a class="collapse-item" href="{{ URL::to('chuyengia/P3_DGMoi') }}">Đánh giá mới</a>
                            <a class="collapse-item" href="{{ URL::to('chuyengia/P3_Tatca') }}">Tất cả đánh giá</a>
                            <a class="collapse-item" href="{{ URL::to('chuyengia/P3_ChuaDG') }}">Doanh nghiệp chưa đánh giá</a>
                        </div>
                    </div>
                </li>
                <hr class="sidebar-divider">

                <!-- Nav Item - Utilities Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                        aria-expanded="true" aria-controls="collapseUtilities">
                        <i class='fas fa-calendar-week'></i>
                        <span>Phiếu số 4</span>
                    </a>
                    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded"  style="width:200px;font-size:12px">
                            <h6 class="collapse-header">Quản lý phiếu số 4:</h6>
                            <a class="collapse-item" href="{{ URL::to('chuyengia/P4_DGMoi') }}">Đánh giá mới</a>
                            <a class="collapse-item" href="{{ URL::to('chuyengia/P4_Tatca') }}">Tất cả đánh giá</a>
                            <a class="collapse-item" href="{{ URL::to('chuyengia/P4_ChuaDG') }}">Doanh nghiệp chưa đánh giá</a>

                        </div>
                    </div>
                </li>

    <!-- Nav Item - Utilities Collapse Menu -->

                <!-- Divider -->
                <hr class="sidebar-divider">

                <!-- Heading -->

                <!-- Divider -->


                <!-- Sidebar Toggler (Sidebar) -->

                <!-- Sidebar Toggler (Sidebar) -->
                <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>
            </ul>
            <!-- End of Sidebar -->
            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">
                <!-- Main Content -->
                <div id="content">
                    <!-- Topbar -->
                    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                        <!-- Sidebar Toggle (Topbar) -->
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                        </button>

                        <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Tìm kiếm..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary"type="button">
                                <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                    <ul class="navbar-nav ml-auto">
                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                            <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>
                                <!-- Nav Item - Alerts -->
                                <li class="nav-item dropdown no-arrow mx-1">
                                    <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-bell fa-fw"></i>
                                        <!-- Counter - Alerts -->
                                        <span class="badge badge-danger badge-counter">1+</span>
                                    </a>
                                    <!-- Dropdown - Alerts -->
                                    <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                        aria-labelledby="alertsDropdown">
                                        <h6 class="dropdown-header">
                                            Thông báo
                                        </h6>
                                        <a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="mr-3">
                                                <div class="icon-circle bg-primary">
                                                    <i class="far fa-bell"></i>
                                                </div>
                                            </div>
                                            <div>

                                            <span class="mr-2 d-none d-lg-inline text-gray-600 small" style="font-size: 14px;"> Thông báo
                                     <span class="caret"></span>
                                            </div>
                                        </a>
                                        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                    aria-labelledby="messagesDropdown">
                                    <h6 class="dropdown-header">
                                       Tất cả sản phẩm
                                    </h6>
                                    <li class="nav-item dropdown no-arrow">
                                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="mr-2 d-none d-lg-inline" style="font-size:14px;font-weight:bold; color:#4e73df;">@php
                                                $name = Session::get('name') ." - ".Session::get('role');
                                if($name){
                                    echo $name;

                                }                  @endphp</span>
                                        </a>
                                        <!-- Dropdown - User Information -->
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                            aria-labelledby="userDropdown">
                                            <a class="dropdown-item" href="#"  data-toggle="modal" data-target="#fcapnhatthongtin">
                                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                            Hồ sơ cá nhân
                                            </a>
                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#fdoimatkhau">
                                            <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                            Đổi mật khẩu
                                            </a>





                                                <div class="dropdown-divider"></div>

                                                <form method="POST" action="{{ route('logout') }}" x-data>
                                                    @csrf

                                                    <x-jet-dropdown-link class="dropdown-item"
                                                        style="font-family: Roboto;color:black;font-size:14px;"
                                                        href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                                        Thoát
                                                    </x-jet-dropdown-link>
                                                </form>




                        <!-- Sidebar Toggle (Topbar) -->
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>



                        </div>

                                                </li>
                                            </ul>
                                        </nav>
                    <!-- End of Topbar -->

                    <!-- Begin Page Content -->
                    <div class="container-fluid">
                        {{-- nếu có giá trị home thì sẽ hiện giao diện nền hiệu ứng --}}
                        @if (@isset($home))
                        <style>
                        .fs {
                            position: relative;
                            left: 0px;
                            top: 0px;
                            right: 0px;
                            bottom: 0px;
                            width: 100%;
                            height: 170vh;
                            background-color: #4e73df;
                            /* background-image: linear-gradient(to bottom right, #7b86fa 0%,#182ae9 25%,#0918c5 50%, #030d85 74%); */
                            -webkit-perspective: 9999px;
                            perspective: 9999px;
                          }

                          .hold-illustration {
                            position: absolute;
                            left: 0px;
                            top: 50%;
                            right: 0px;
                            display: block;
                            width: 60%;
                            max-width: 700px;
                            margin-right: auto;
                            margin-left: auto;
                            -webkit-perspective: 9999px;
                            perspective: 9999px;
                            -webkit-transform: translate(0px, -50%) rotateX(55deg) rotateY(-3deg)
                              rotateZ(49deg);
                            transform: translate(0px, -50%) rotateX(55deg) rotateY(-3deg) rotateZ(49deg);
                          }

                          .background {
                            position: relative;
                            display: block;
                            width: 54%;
                            height: 55vw;
                            max-height: 1050px;
                            margin-right: auto;
                            margin-left: auto;
                            border-top-left-radius: 10px;
                            border-top-right-radius: 10px;
                            background-image: -webkit-linear-gradient(298deg, #b4baff, #4353ff 74%);
                            background-image: linear-gradient(152deg, #b4baff, #4e73df 74%);
                            -webkit-perspective: 999px;
                            perspective: 999px;
                          }

                          .background.dark {
                            background-image: -webkit-linear-gradient(
                              298deg,
                              #b4baff,
                              rgba(67, 83, 255, 0) 74%
                            );
                            background-image: linear-gradient(152deg, #b4baff, rgba(67, 83, 255, 0) 74%);
                          }

                          .top-bar {
                            position: relative;
                            left: 0px;
                            top: 0px;
                            right: 0px;
                            width: 100%;
                            height: 22px;
                            border-bottom: 2px solid #4353ff;
                            border-top-left-radius: 10px;
                            border-top-right-radius: 10px;
                            background-color: #b4baff;
                          }

                          .dot {
                            position: absolute;
                            left: 10px;
                            top: 8px;
                            width: 5px;
                            height: 5px;
                            border-radius: 100%;
                            background-color: #fff;
                          }

                          .dot._2 {
                            left: 20px;
                          }

                          .dot._3 {
                            left: 30px;
                          }

                          .text-like-box {
                            position: relative;
                            width: 38%;
                            padding: 20px 25px 25px;
                            float: left;
                          }

                          .text-like-box.bottom {
                            top: -250px;
                            width: 31%;
                            padding-top: 0px;
                            clear: left;
                            background-image: none;
                          }

                          .text-like-box.bottom.v2 {
                            top: -32px;
                            width: 80%;
                            margin-left: 30%;
                            float: none;
                            clear: none;
                          }

                          .text {
                            width: 15%;
                            float: left;
                            font-family: Verdana, Geneva, sans-serif;
                            color: #fff;
                            font-size: 21px;
                            line-height: 30px;
                          }

                          .straight-line {
                            position: relative;
                            width: 83%;
                            height: 2px;
                            margin-left: 2%;
                            padding-top: 22px;
                            float: left;
                            border-bottom: 2px solid #fff;
                          }

                          .straight-line-full {
                            position: relative;
                            width: 100%;
                            height: 2px;
                            margin-top: 7px;
                            clear: left;
                            border-radius: 1px;
                            background-color: #fff;
                          }

                          .straight-line-full.shortened {
                            width: 50%;
                          }

                          .square-tower {
                            position: relative;
                            top: -20px;
                            width: 35%;
                            height: 150px;
                            float: left;
                            clear: left;
                            -webkit-perspective: 999px;
                            perspective: 999px;
                          }

                          .play-box {
                            position: relative;
                            left: 0px;
                            top: 50%;
                            right: 0px;
                            z-index: 4;
                            display: block;
                            overflow: visible;
                            width: 65px;
                            height: 65px;
                            margin-right: auto;
                            margin-left: auto;
                            border: 2px solid #fff;
                            border-radius: 0px 3px 3px;
                            background-image: -webkit-linear-gradient(
                              315deg,
                              rgba(116, 129, 255, 0.7),
                              rgba(166, 173, 255, 0.7)
                            );
                            background-image: linear-gradient(
                              135deg,
                              rgba(116, 129, 255, 0.7),
                              rgba(166, 173, 255, 0.7)
                            );
                            -webkit-transform: translate(0px, -50%) translate3d(-79px, -61px, 70px);
                            transform: translate(0px, -50%) translate3d(-79px, -61px, 70px);
                          }

                          .play-box__play-icon {
                            position: absolute;
                            left: 0px;
                            top: 50%;
                            right: 0px;
                            display: block;
                            width: 15px;
                            margin-right: auto;
                            margin-left: auto;
                            border-top: 10px solid transparent;
                            border-bottom: 10px solid transparent;
                            border-left: 15px solid #fff;
                            -webkit-transform: translate(0px, -50%);
                            -ms-transform: translate(0px, -50%);
                            transform: translate(0px, -50%);
                          }

                          .play-box__top-bar {
                            position: relative;
                            left: -2px;
                            top: -6px;
                            z-index: 0;
                            width: 35%;
                            height: 5px;
                            border-top-left-radius: 3px;
                            border-top-right-radius: 3px;
                            background-color: #fff;
                          }

                          .play-box__square-1 {
                            position: absolute;
                            left: 0px;
                            top: 50%;
                            right: 0px;
                            z-index: 3;
                            display: block;
                            width: 65px;
                            height: 65px;
                            margin-right: auto;
                            margin-left: auto;
                            border-radius: 3px;
                            background-color: rgba(178, 185, 255, 0.7);
                            -webkit-transform: translate(0px, -50%) translate3d(-62px, -44px, 50px);
                            transform: translate(0px, -50%) translate3d(-62px, -44px, 50px);
                          }

                          .play-box__square-2 {
                            position: absolute;
                            left: 0px;
                            top: 50%;
                            right: 0px;
                            z-index: 2;
                            display: block;
                            width: 65px;
                            height: 65px;
                            margin-right: auto;
                            margin-left: auto;
                            border-radius: 3px;
                            background-color: #929bff;
                            background-image: -webkit-linear-gradient(135deg, #929bff, #828dff);
                            background-image: linear-gradient(315deg, #929bff, #828dff);
                            -webkit-transform: translate3d(-42px, -92%, 50px);
                            transform: translate3d(-42px, -92%, 50px);
                          }

                          .play-box__square-bottom {
                            position: absolute;
                            left: 0px;
                            top: 50%;
                            right: 0px;
                            z-index: 0;
                            display: block;
                            width: 65px;
                            height: 65px;
                            margin-right: auto;
                            margin-left: auto;
                            border-radius: 3px;
                            background-image: -webkit-linear-gradient(
                              115deg,
                              rgba(96, 109, 255, 0.62) 11%,
                              rgba(96, 109, 255, 0.33) 48%
                            );
                            background-image: linear-gradient(
                              335deg,
                              rgba(96, 109, 255, 0.62) 11%,
                              rgba(96, 109, 255, 0.33) 48%
                            );
                            -webkit-transform: translate(-18px, -57%);
                            -ms-transform: translate(-18px, -57%);
                            transform: translate(-18px, -57%);
                          }

                          .bottom-line-bar {
                            position: relative;
                            top: -230px;
                            width: 25%;
                            height: 200px;
                            margin-left: 8%;
                            clear: left;
                            border-radius: 5px;
                            background-image: -webkit-linear-gradient(
                              265deg,
                              #7782ff,
                              rgba(99, 112, 255, 0) 86%
                            );
                            background-image: linear-gradient(185deg, #7782ff, rgba(99, 112, 255, 0) 86%);
                          }

                          .mountain-photo-parent {
                            position: relative;
                            left: -20px;
                            top: 0px;
                            width: 62%;
                            padding: 25px;
                            float: left;
                            -webkit-perspective: 9999px;
                            perspective: 9999px;
                          }

                          .mountain-photo__real-deal {
                            position: relative;
                            left: 0px;
                            top: -70px;
                            right: 0px;
                            display: block;
                            overflow: hidden;
                            width: 80%;
                            height: 100px;
                            margin-right: auto;
                            margin-left: auto;
                            border-radius: 1px;
                            background-image: -webkit-linear-gradient(
                              135deg,
                              rgba(232, 235, 255, 0.9),
                              #b4baff
                            );
                            background-image: linear-gradient(315deg, rgba(232, 235, 255, 0.9), #b4baff);
                            box-shadow: 29px 29px 0 6px rgba(107, 119, 255, 0.8);
                          }

                          .mountain-photo__real-deal.small {
                            top: 30px;
                            width: 90%;
                            height: 60px;
                            float: left;
                            clear: left;
                            box-shadow: none;
                            opacity: 0.51;
                          }

                          .mountain-photo__real-deal.small.no-mountains {
                            top: 50px;
                            opacity: 0.21;
                          }

                          .mountain {
                            position: relative;
                            left: -25px;
                            top: 65px;
                            right: 0px;
                            display: block;
                            width: 70%;
                            height: 80%;
                            margin-right: auto;
                            margin-left: auto;
                            border-radius: 5px;
                            background-image: -webkit-linear-gradient(270deg, #dee2ff, #b6bdff);
                            background-image: linear-gradient(180deg, #dee2ff, #b6bdff);
                            -webkit-transform: rotate(45deg);
                            -ms-transform: rotate(45deg);
                            transform: rotate(45deg);
                          }

                          .mountain._2 {
                            position: absolute;
                            left: 25px;
                            top: 58px;
                            right: 0px;
                            width: 90%;
                            height: 110%;
                            background-image: -webkit-linear-gradient(
                              0deg,
                              hsla(0, 0%, 100%, 0.7),
                              rgba(182, 189, 255, 0.66) 51%
                            );
                            background-image: linear-gradient(
                              90deg,
                              hsla(0, 0%, 100%, 0.7),
                              rgba(182, 189, 255, 0.66) 51%
                            );
                          }

                          .mountain.shrunked {
                            left: -6px;
                            top: 31px;
                          }

                          .mountain.shrunked._2 {
                            left: 25px;
                            top: 30px;
                            right: 0px;
                          }

                          .left-strip {
                            position: absolute;
                            left: 0px;
                            top: 22px;
                            z-index: 0;
                            width: 38%;
                            height: 100%;
                            background-image: -webkit-linear-gradient(
                              270deg,
                              #9aa3ff,
                              rgba(67, 83, 255, 0.07) 37%
                            );
                            background-image: linear-gradient(
                              180deg,
                              #9aa3ff,
                              rgba(67, 83, 255, 0.07) 37%
                            );
                          }

                          .left-strip.dark {
                            background-image: -webkit-linear-gradient(
                              270deg,
                              #9aa3ff,
                              rgba(67, 83, 255, 0) 44%
                            );
                            background-image: linear-gradient(180deg, #9aa3ff, rgba(67, 83, 255, 0) 44%);
                          }

                          .tri-parent {
                            position: relative;
                            left: 0px;
                            top: -50px;
                            right: 0px;
                            width: 62%;
                            padding: 30px;
                            float: left;
                            -webkit-perspective: 9999px;
                            perspective: 9999px;
                          }

                          .column {
                            position: relative;
                            z-index: 10;
                            width: 29.11%;
                            margin-right: 1.11%;
                            margin-left: 3.11%;
                            padding: 12px;
                            float: left;
                            border-radius: 5px;
                            background-image: -webkit-linear-gradient(315deg, #c0c5ff, #adb3ff);
                            background-image: linear-gradient(135deg, #c0c5ff, #adb3ff);
                            box-shadow: 11px 11px 0 0 #5e6bff;
                          }

                          .circle {
                            position: relative;
                            display: block;
                            width: 20px;
                            height: 20px;
                            margin-right: auto;
                            margin-left: auto;
                            border: 2px solid #fff;
                            border-radius: 100%;
                          }

                          .string-block {
                            position: relative;
                            top: 30px;
                            width: 30%;
                            float: left;
                          }

                          .square {
                            position: relative;
                            left: 0px;
                            top: 0px;
                            right: 0px;
                            display: block;
                            width: 25px;
                            height: 25px;
                            margin-right: auto;
                            margin-left: auto;
                            border-radius: 1px;
                            background-color: #d9ddff;
                            box-shadow: 11px 11px 0 -1px #5b69ff;
                          }

                          .square._2 {
                            top: 60px;
                            z-index: 1;
                          }

                          .square._3 {
                            top: -10px;
                          }

                          .connector-bar {
                            position: absolute;
                            left: 0px;
                            top: 22px;
                            right: 0px;
                            display: block;
                            width: 2px;
                            height: 25px;
                            margin-right: auto;
                            margin-left: auto;
                            background-color: #d9ddff;
                            box-shadow: 11px 11px 0 0 #5b69ff;
                          }

                          .arrow-line {
                            position: absolute;
                            left: 0px;
                            right: 0px;
                            bottom: 54px;
                            display: block;
                            width: 2px;
                            height: 42px;
                            margin-right: auto;
                            margin-left: auto;
                            background-color: #fff;
                          }

                          .arrow-line-small {
                            position: absolute;
                            left: -4px;
                            right: 0px;
                            bottom: 0px;
                            width: 2px;
                            height: 10px;
                            background-color: #fff;
                            -webkit-transform: rotate(-45deg);
                            -ms-transform: rotate(-45deg);
                            transform: rotate(-45deg);
                          }

                          .arrow-line-small.v2 {
                            left: 4px;
                            -webkit-transform: rotate(45deg);
                            -ms-transform: rotate(45deg);
                            transform: rotate(45deg);
                          }

                          .circle-tower {
                            position: absolute;
                            left: 0%;
                            top: -66px;
                            width: 80px;
                            height: 80px;
                            -webkit-perspective: 9999px;
                            perspective: 9999px;
                          }

                          .circle-top {
                            position: absolute;
                            left: -8px;
                            top: -4px;
                            right: 0px;
                            z-index: 5;
                            display: block;
                            width: 40px;
                            height: 40px;
                            margin-right: auto;
                            margin-left: auto;
                            border-radius: 100%;
                            background-color: rgba(213, 216, 255, 0.8);
                            background-image: -webkit-linear-gradient(
                              135deg,
                              hsla(0, 0%, 100%, 0.22),
                              hsla(0, 0%, 100%, 0)
                            );
                            background-image: linear-gradient(
                              315deg,
                              hsla(0, 0%, 100%, 0.22),
                              hsla(0, 0%, 100%, 0)
                            );
                            -webkit-transform: translate3d(0px, 0px, 10px);
                            transform: translate3d(0px, 0px, 10px);
                          }

                          .circle-top._2 {
                            left: 25px;
                            top: 10px;
                            right: 0px;
                            z-index: 4;
                            -webkit-transform: translate3d(0px, 0px, 10px);
                            transform: translate3d(0px, 0px, 10px);
                          }

                          .circle-top._3 {
                            left: 47px;
                            top: 23px;
                            z-index: 3;
                            background-color: transparent;
                            background-image: -webkit-linear-gradient(
                              270deg,
                              #5d6bff,
                              hsla(0, 0%, 100%, 0.76)
                            );
                            background-image: linear-gradient(180deg, #5d6bff, hsla(0, 0%, 100%, 0.76));
                            box-shadow: 23px 19px 0 0 rgba(67, 83, 255, 0.26);
                            -webkit-transform: translate(0px, 0px);
                            -ms-transform: translate(0px, 0px);
                            transform: translate(0px, 0px);
                          }

                          .overflow-hidden {
                            position: absolute;
                            left: 0px;
                            top: 0px;
                            right: 0px;
                            overflow: hidden;
                            width: 100%;
                            height: 100%;
                          }

                          .open-this {
                            position: fixed;
                            right: 11px;
                            bottom: 50px;
                            padding: 5px 10px;
                            border: 2px solid #fff;
                            border-radius: 5px;
                            font-family: "Open Sans", sans-serif;
                            color: #fff;
                            text-decoration: none;
                          }

                          .twitter {
                            position: fixed;
                            right: 10px;
                            bottom: 85px;
                            width: 42px;
                            height: 42px;
                            background-image: url("../images/twitter.svg");
                            background-position: 50% 50%;
                            background-size: 25px;
                            background-repeat: no-repeat;
                          }

                          .circle-link {
                            position: fixed;
                            right: 103px;
                            bottom: 92px;
                            width: 42px;
                            height: 42px;
                            border-radius: 100%;
                            background-image: -webkit-linear-gradient(
                              315deg,
                              #07091f,
                              rgba(93, 107, 255, 0.64) 88%
                            );
                            background-image: linear-gradient(
                              135deg,
                              #07091f,
                              rgba(93, 107, 255, 0.64) 88%
                            );
                            box-shadow: inset 0 0 0 2px hsla(0, 0%, 100%, 0.3);
                            -webkit-transition: box-shadow 350ms ease;
                            transition: box-shadow 350ms ease;
                          }

                          .circle-link:hover {
                            box-shadow: inset 0 0 0 2px #fff;
                          }

                          .circle-link.w--current {
                            box-shadow: inset 0 0 0 2px #fff;
                          }

                          .circle-link.light {
                            right: 52px;
                            width: 42px;
                            background-image: -webkit-linear-gradient(315deg, #4353ff 27%, #b4baff);
                            background-image: linear-gradient(135deg, #4353ff 27%, #b4baff);
                          }

                          .circle-link.light.w--current {
                            box-shadow: inset 0 0 0 2px #fff;
                          }

                          html.w-mod-js *[data-ix="column-hover"] {
                            opacity: 0;
                          }

                          html.w-mod-js *[data-ix="column-hover-2"] {
                            opacity: 0;
                          }

                          html.w-mod-js *[data-ix="column-hover-3"] {
                            opacity: 0;
                          }

                          html.w-mod-js *[data-ix="hovering-on-load-string-block"] {
                            opacity: 0;
                          }

                          html.w-mod-js *[data-ix="loading-line-animation"] {
                            width: 0px;
                          }

                          html.w-mod-js *[data-ix="loading-line-animation-2"] {
                            width: 0px;
                          }

                          html.w-mod-js *[data-ix="loading-line-animation-3"] {
                            width: 0px;
                          }

                          html.w-mod-js *[data-ix="loading-line-animation-6-long"] {
                            width: 0px;
                          }

                          html.w-mod-js *[data-ix="loading-line-animation-4-shortened"] {
                            width: 0px;
                          }

                          html.w-mod-js *[data-ix="loading-line-animation-5"] {
                            width: 0px;
                          }

                          html.w-mod-js *[data-ix="loading-line-animation-6shorted"] {
                            width: 0px;
                          }

                          html.w-mod-js *[data-ix="mountain-slide-in"] {
                            -webkit-transform: translate(140px, 0px) rotate(45deg);
                            -ms-transform: translate(140px, 0px) rotate(45deg);
                            transform: translate(140px, 0px) rotate(45deg);
                          }

                          html.w-mod-js *[data-ix="mountain-slide-in-from-left"] {
                            -webkit-transform: translate(-100px, 0px) rotate(45deg);
                            -ms-transform: translate(-100px, 0px) rotate(45deg);
                            transform: translate(-100px, 0px) rotate(45deg);
                          }

                          html.w-mod-js *[data-ix="pop-in"] {
                            opacity: 0;
                            -webkit-transform: scale(0.8, 0.8);
                            -ms-transform: scale(0.8, 0.8);
                            transform: scale(0.8, 0.8);
                          }

                          html.w-mod-js *[data-ix="pop-in-2"] {
                            opacity: 0;
                            -webkit-transform: scale(0.8, 0.8);
                            -ms-transform: scale(0.8, 0.8);
                            transform: scale(0.8, 0.8);
                          }

                          html.w-mod-js *[data-ix="pop-in-3"] {
                            opacity: 0;
                            -webkit-transform: scale(0.8, 0.8);
                            -ms-transform: scale(0.8, 0.8);
                            transform: scale(0.8, 0.8);
                          }

                          html.w-mod-js *[data-ix="play-icon-on-load"] {
                            -webkit-transform: translate(-100px, -50%);
                            -ms-transform: translate(-100px, -50%);
                            transform: translate(-100px, -50%);
                          }

                          html.w-mod-js *[data-ix="mountain-block-on-load"] {
                            opacity: 0;
                            height: 0px;
                          }

                          html.w-mod-js *[data-ix="arrow-load"] {
                            opacity: 0;
                          }

                          @media (max-width: 991px) {
                            .fs {
                              overflow: hidden;
                            }
                            .hold-illustration {
                              width: 90%;
                            }
                            .background {
                              height: 63vw;
                            }
                            .open-this {
                              display: none;
                            }
                            .twitter {
                              bottom: 40px;
                            }
                            .circle-link {
                              bottom: 47px;
                            }
                          }

                          @media (max-width: 767px) {
                            .fs {
                              min-height: 100vh;
                            }
                            .hold-illustration {
                              position: relative;
                              top: 50%;
                              width: 100%;
                            }
                            .text-like-box.bottom {
                              top: -280px;
                            }
                            .bottom-line-bar {
                              top: -280px;
                            }
                            .circle {
                              width: 13px;
                              height: 13px;
                            }
                            .circle-tower {
                              left: -3%;
                              top: -56px;
                            }
                            .circle-top {
                              width: 30px;
                              height: 30px;
                            }
                            .circle-top._3 {
                              left: 52px;
                            }
                          }

                          @media (max-width: 479px) {
                            .hold-illustration {
                              top: 0%;
                              -webkit-transform: rotateX(55deg) rotateY(-3deg) rotateZ(49deg) scale(0.7);
                              transform: rotateX(55deg) rotateY(-3deg) rotateZ(49deg) scale(0.7);
                            }
                            .background {
                              width: 100%;
                              height: 107vw;
                            }
                          }

                          </style>
                          <div class="fs">
                              <div class="hold-illustration w-preserve-3d">
                                <div class="background w-clearfix">
                                  <div class="left-strip"></div>
                                  <div class="top-bar">
                                    <div class="dot"></div>
                                    <div class="_2 dot"></div>
                                    <div class="_3 dot"></div>
                                  </div>
                                  <div class="text-like-box w-clearfix">
                                    <div class="text" data-ix="arrow-load">A</div>
                                    <div class="straight-line" data-ix="arrow-load"></div>
                                    <div class="straight-line-full" data-ix="loading-line-animation"></div>
                                    <div class="straight-line-full" data-ix="loading-line-animation-2"></div>
                                    <div class="straight-line-full" data-ix="loading-line-animation-3"></div>
                                    <div class="straight-line-full" data-ix="loading-line-animation-6-long"></div>
                                    <div class="straight-line-full" data-ix="loading-line-animation-5"></div>
                                    <div class="shortened straight-line-full" data-ix="loading-line-animation-6shorted"></div>
                                  </div>
                                  <div class="mountain-photo-parent">
                                    <div class="mountain-photo__real-deal" data-ix="arrow-load">
                                      <div class="mountain" data-ix="mountain-slide-in-from-left"></div>
                                      <div class="_2 mountain" data-ix="mountain-slide-in"></div>
                                    </div>
                                    <div class="arrow-line" data-ix="arrow-load">
                                      <div class="arrow-line-small"></div>
                                      <div class="arrow-line-small v2"></div>
                                    </div>
                                  </div>
                                  <div class="square-tower" data-ix="arrow-load">
                                    <div class="play-box w-preserve-3d" data-ix="tower-hover-animation">
                                      <div class="play-box__top-bar"></div>
                                      <a class="overflow-hidden w-inline-block w-lightbox" href="#">
                                        <div class="play-box__play-icon" data-ix="play-icon-on-load"></div>

                                      </a>
                                    </div>
                                    <div class="play-box__square-1 w-preserve-3d"></div>
                                    <div class="play-box__square-2 w-preserve-3d"></div>
                                    <div class="play-box__square-bottom"></div>
                                  </div>
                                  <div class="tri-parent w-clearfix">
                                    <div class="column" data-ix="column-hover">
                                      <div class="circle" data-ix="pop-in"></div>
                                      <div class="straight-line-full" data-ix="loading-line-animation"></div>
                                      <div class="straight-line-full" data-ix="loading-line-animation-2"></div>
                                      <div class="straight-line-full" data-ix="loading-line-animation-3"></div>
                                    </div>
                                    <div class="column" data-ix="column-hover-2">
                                      <div class="circle" data-ix="pop-in-2"></div>
                                      <div class="straight-line-full" data-ix="loading-line-animation">
                                        <div class="straight-line-full"></div>
                                      </div>
                                      <div class="straight-line-full" data-ix="loading-line-animation-2">
                                        <div class="straight-line-full"></div>
                                      </div>
                                      <div class="straight-line-full" data-ix="loading-line-animation-3">
                                        <div class="straight-line-full"></div>
                                      </div>
                                    </div>
                                    <div class="column" data-ix="column-hover-3">
                                      <div class="circle" data-ix="pop-in-3"></div>
                                      <div class="straight-line-full" data-ix="loading-line-animation">
                                        <div class="straight-line-full"></div>
                                      </div>
                                      <div class="straight-line-full" data-ix="loading-line-animation-2">
                                        <div class="straight-line-full"></div>
                                      </div>
                                      <div class="straight-line-full" data-ix="loading-line-animation-3">
                                        <div class="straight-line-full"></div>
                                      </div>
                                    </div>
                                    <div class="string-block" data-ix="hovering-on-load-string-block">
                                      <div class="square">
                                        <div class="connector-bar"></div>
                                      </div>
                                      <div class="_2 square"></div>
                                      <div class="_3 square">
                                        <div class="connector-bar"></div>
                                      </div>
                                    </div>
                                    <div class="bottom text-like-box v2 w-clearfix" data-ix="column-hover">
                                      <div class="straight-line-full" data-ix="loading-line-animation"></div>
                                      <div class="straight-line-full" data-ix="loading-line-animation-2"></div>
                                      <div class="straight-line-full" data-ix="loading-line-animation-3"></div>
                                      <div class="straight-line-full" data-ix="loading-line-animation-6-long"></div>
                                      <div class="shortened straight-line-full" data-ix="loading-line-animation-4-shortened"></div>
                                      <div class="mountain-photo__real-deal small" data-ix="column-hover">
                                        <div class="mountain shrunked" data-ix="mountain-slide-in-from-left"></div>
                                        <div class="_2 mountain shrunked" data-ix="mountain-slide-in"></div>
                                      </div>
                                      <div class="mountain-photo__real-deal no-mountains small" data-ix="column-hover"></div>
                                    </div>
                                  </div>
                                  <div class="bottom text-like-box" data-ix="column-hover">
                                    <div class="straight-line-full" data-ix="loading-line-animation"></div>
                                    <div class="straight-line-full" data-ix="loading-line-animation-2"></div>
                                    <div class="straight-line-full" data-ix="loading-line-animation-3"></div>
                                    <div class="shortened straight-line-full" data-ix="loading-line-animation-4-shortened"></div>
                                  </div>
                                  <div class="bottom-line-bar" data-ix="column-hover-3"></div>
                                  <div class="circle-tower" data-ix="column-hover">
                                    <div class="circle-top w-preserve-3d"></div>
                                    <div class="_2 circle-top w-preserve-3d"></div>
                                    <div class="_3 circle-top"></div>
                                  </div>
                                </div>
                              </div><div class="w-embed w-script">
                                <a href="" class="twitter" onclick="return tweet()"></a>
                                <script type="text/javascript">
                                  function tweet() {
                                      var u = location.href;
                                      var t="@waldobroodryk rebuilt and animated the @webflowapp homepage illustration in Webflow #MadeInWebflow";
                                      window.open('https://twitter.com/share?url='+encodeURIComponent(u)+'&text='+encodeURIComponent(t),'twitsharer','toolbar=0,status=0,width=626,height=436');
                                      return false;
                                  }
                                </script>
                              </div>

                            </div>
                            </script></div></div>
                          <script src="https://daks2k3a4ib2z.cloudfront.net/5893e1dff46cfc9a7c4912dd/js/webflow.0c48df602.js" type="text/javascript"></script>

                        @else
                        @yield('content')
                        @endif
                                        <!-- Page Heading -->

                        </div>
                        </div>

                <!-- Footer -->
                <div class="text-center p-3" style="background-color: #0038b0;">
      <p style="background: none;text-align: center; color: white; font-size: 14px; margin:5px">© 2023 CHUYỂN ĐỔI SỐ TỈNH AN GIANG<span style="padding: 0 15px;">|</span> Thiết kế và Xây dựng bởi <a href="https://fit.agu.edu.vn/" style="color: #00d7eb; font-weight: bold;">FIT - TRƯỜNG ĐH AN GIANG</a></p>
                </div>

                <!-- End of Footer -->
                </div>

            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="login.html">Logout</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="{{asset('admin_file/vendor/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('admin_file/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

        <!-- Core plugin JavaScript-->
        <script src="{{asset('admin_file/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

        <!-- Custom scripts for all pages-->
        <script src="{{asset('admin_file/js/sb-admin-2.min.js')}}"></script>

        <!-- Page level plugins -->
        <script src="{{asset('admin_file/vendor/chart.js/Chart.min.js')}}"></script>

        <!-- Page level custom scripts -->
        <script src="{{asset('admin_file/js/demo/chart-area-demo.js')}}"></script>
        <script src="{{asset('admin_file/js/demo/chart-pie-demo.js')}}"></script>


    <script src="{{asset('public/backend/ckeditor/ckeditor.js')}}"></script>


    </body>

    </html>
