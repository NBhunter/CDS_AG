<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="{{asset('img/logo_ag.ico')}}" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/" />

	<title>Chuyển đổi số tỉnh An Giang - Trang chuyên gia</title>
    <link href="{{ asset('admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <!-- Custom styles for this template-->

	<link href="{{asset('admin/css/sb-admin-2.min.css')}}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

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
                    <div class="sidebar-brand-text mx-3">CHUYÊN GIA</div>
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
                            <a class="collapse-item" href="{{ URL::to('chuyengia/P1_DaDG') }}">Doanh nghiệp đã đánh giá</a>
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

                            <a class="collapse-item" href="">Đánh giá mới</a>
                            <a class="collapse-item" href="">Tất cả đánh giá</a>
                            <a class="collapse-item" href="">Doanh nghiệp đã đánh giá</a>
                            <a class="collapse-item" href="">Doanh nghiệp chưa đánh giá</a>
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

                            <a class="collapse-item" href="">Đánh giá mới</a>
                            <a class="collapse-item" href="">Tất cả đánh giá</a>
                            <a class="collapse-item" href="">Doanh nghiệp đã đánh giá</a>
                            <a class="collapse-item" href="">Doanh nghiệp chưa đánh giá</a>
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
                            <a class="collapse-item" href="">Đánh giá mới</a>
                            <a class="collapse-item" href="">Tất cả đánh giá</a>
                            <a class="collapse-item" href="">Doanh nghiệp đã đánh giá</a>
                            <a class="collapse-item" href="">Doanh nghiệp chưa đánh giá</a>

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




                                            <form method="POST" action="{{ route('logout') }}" x-data>
                                                <div class="dropdown-divider"></div>

                                                <form method="POST" action="{{ route('logout') }}" x-data>
                                                    @csrf

                                                    <x-jet-responsive-nav-link href="/"
                                                                   @click.prevent="$root.submit();">
                                                        {{ __('Thoát') }}
                                                    </x-jet-responsive-nav-link>
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
                                        <!-- Page Heading -->
                        @yield('content')
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
        <script src="{{asset('admin/vendor/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

        <!-- Core plugin JavaScript-->
        <script src="{{asset('admin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

        <!-- Custom scripts for all pages-->
        <script src="{{asset('admin/js/sb-admin-2.min.js')}}"></script>

        <!-- Page level plugins -->
        <script src="{{asset('admin/vendor/chart.js/Chart.min.js')}}"></script>

        <!-- Page level custom scripts -->
        <script src="{{asset('admin/js/demo/chart-area-demo.js')}}"></script>
        <script src="{{asset('admin/js/demo/chart-pie-demo.js')}}"></script>


    <script src="{{asset('public/backend/ckeditor/ckeditor.js')}}"></script>

    </body>

    </html>
