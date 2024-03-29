<!DOCTYPE html>
<html lang="en">
<style>
    #myVideo {
        top: 70px;
        left: 225px;
        width: 100%;
        height: 100%;
        opacity: 80%;

    }
</style>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="{{ asset('img/logo_ag.ico') }}" />

    <link rel="canonical" href="https://demo-basic.adminkit.io/" />

    <title>Chuyển đổi số tỉnh An Giang - Trang quản trị</title>
    <link href="{{ asset('admin_file/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <!-- Custom styles for this template-->

    <link href="{{ asset('admin_file/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center"
                href="{{ URL::to('admin/main') }}">
                <div class="sidebar-brand-icon ">
                    <i class='fas fa-home'></i>
                </div>
                <div class="sidebar-brand-text mx-3">TRANG QUẢN TRỊ - CDS</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="{{ URL::to('admin/main') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Trang chủ</span></a>
            </li>

            <!-- Divider -->


            @if (Session::get('role') == 'Admin')
                <hr class="sidebar-divider">
                <div class="sidebar-heading">
                    Người dùng
                </div>
                <li class="nav-item">
                    <a class="nav-link" href="{{ URL::to('admin/user') }}">
                        <i class="fas fa-address-book"></i>
                        <span>Thông tin người dùng</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ URL::to('admin/DSDoanhNghiep') }}">
                        <i class="	fas fa-users"></i>
                        <span> Danh sách doanh nghiệp</span></a>
                </li>
            @else
            @endif

            <hr class="sidebar-divider">
            <!-- Heading -->
            <div class="sidebar-heading">
                Cổng thông tin
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-book"></i>
                    <span>Tin tức</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Quản lý tin tức:</h6>
                        <a class="collapse-item" href="{{ URL::to('admin/themtintuc') }}">Tin tức mới đăng</a>
                        <a class="collapse-item" href="{{ URL::to('admin/xemtin') }}">Danh sách tin tức</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFive"
                    aria-expanded="true" aria-controls="collapseFive">
                    <i class="fas fa-barcode"></i>
                    <span>Loại tin</span>
                </a>
                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Quản lý loại tin:</h6>

                        <a class="collapse-item" href="{{ url::to('admin/xemloaitin') }}">Xem danh sách loại tin</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSix"
                    aria-expanded="true" aria-controls="collapseSix">
                    <i class="fas fa-bookmark"></i>
                    <span>Lĩnh vực</span>
                </a>
                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Quản lý lĩnh vực:</h6>

                        <a class="collapse-item" href="{{ url::to('admin/xem_linh_vuc') }}">Xem danh sách lĩnh vực</a>
                    </div>
                </div>
            </li>
            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne">
                    <i class='fab fa-google-drive'></i>
                    <span>Thư viện</span>
                </a>
                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Quản lý thư viện:</h6>
                        <a class="collapse-item" href="">Thư viện mới đăng</a>
                        <a class="collapse-item" href="">Thư viện đã duyệt</a>

                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSeven"
                    aria-expanded="true" aria-controls="collapseSeven">
                    <i class="fas fa-book-open"></i>
                    <span>Slide</span>
                </a>
                <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Quản lý các slide:</h6>

                        <a class="collapse-item" href="{{ url::to('/admin/new_slide') }}">Thêm slide mới </a>
                        <a class="collapse-item" href="{{ url::to('/admin/slide_list') }}">Xem danh sách </a>
                    </div>
                </div>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
            @if (Session::get('role') == 'Admin')
                <!-- Heading -->
                <div class="sidebar-heading">
                    Doanh Nghiệp
                </div>

                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                        aria-expanded="true" aria-controls="collapsePages">
                        <i class="fas fa-fw fa-regular fa-clipboard"></i>
                        <span>Phiếu số 1</span>
                    </a>
                    <div id="collapsePages" class="collapse" aria-labelledby="headingPages"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">PHẦN CÂU HỎI:</h6>

                            <a class="collapse-item" href="{{ URL::to('admin/themcauhoiso1') }}">Thêm câu hỏi</a>

                        </div>
                    </div>
                </li>
                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree"
                        aria-expanded="true" aria-controls="collapseThree">
                        <i class="	fas fa-file-alt"></i>
                        <span>Phiếu số 2</span>
                    </a>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">PHẦN CÂU HỎI:</h6>



                            <a class="collapse-item" href="{{ URL::to('admin/themcauhoiso2') }}">Thêm câu hỏi</a>
                            <div class="collapse-divider"></div>

                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFour"
                        aria-expanded="true" aria-controls="collapseFour">
                        <i class="	fas fa-clipboard-list"></i>
                        <span>Phiếu số 3</span>
                    </a>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">PHẦN CÂU HỎI:</h6>


                            <a class="collapse-item" href="{{ URL::to('admin/themcauhoiso3') }}">Thêm câu hỏi</a>
                            <div class="collapse-divider"></div>

                        </div>
                    </div>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne1"
                        aria-expanded="true" aria-controls="collapseOne1">
                        <i class='fas fa-business-time'></i>
                        <span>Quản lý ngành nghề</span>
                    </a>
                    <div id="collapseOne1" class="collapse" aria-labelledby="headingOne"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Ngành nghề:</h6>
                            <a class="collapse-item" href="{{ URL::to('admin/themnganhnghe') }}">Thêm ngành nghề</a>
                            <h6 class="collapse-header">Loại hình:</h6>
                            <a class="collapse-item" href="{{ URL::to('admin/themloaihinh') }}">Thêm loại hình</a>

                        </div>
                    </div>
                </li>
                <!-- Divider -->

                {{-- xem ngừoi dùng --}}
                <hr class="sidebar-divider">
            @else
            @endif
            <!-- Heading -->
            <div class="sidebar-heading">
                Hệ thống
            </div>
            <li class="nav-item">
                <a class="nav-link" href="">
                    <i class="fas fa-cog"></i>
                    <span>Cấu hình website</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">
                    <i class="	fas fa-cogs"></i>
                    <span>Bảo trì websitess</span></a>
            </li>



            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

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
                            <input type="text" class="form-control bg-light border-0 small"
                                placeholder="Tìm kiếm..." aria-label="Search" aria-describedby="basic-addon2">
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
                            {{-- <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
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


                                    <span class="mr-2 d-none d-lg-inline text-gray-600 small"
                                        style="font-size: 14px;">
                                        Thông báo
                                        <span class="caret"></span>
                                </a>
                            </div> --}}

                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Tất cả sản phẩm
                                </h6>
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline"
                                    style="font-size:14px;font-weight:bold; color:#4e73df;">@php
                                        $name = Session::get('name') . ' - ' . Session::get('role');
                                        if ($name) {
                                            echo $name;
                                    } @endphp</span>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#" data-toggle="modal"
                                    data-target="#fcapnhatthongtin">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Hồ sơ cá nhân

                                </a>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#myModal">
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
                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Đổi mật khẩu </h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                                <form class="form" role="form" action="{{ URL::to('/changePW') }}"
                                    method="post" autocomplete="off">
                                    @csrf
                                    <div class="form-group">
                                        <label for="inputPasswordOld">Mật khẩu cũ</label>
                                        <input type="password" class="form-control" id="inputPasswordOld"
                                            name="oldpw" required="">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPasswordNew">Mật khẩu mới</label>
                                        <input type="password" class="form-control" name="Newpw"
                                            id="inputPasswordNew" required="">
                                        <span class="form-text small text-muted">
                                            Mật khẩu có độ dài từ 8-20 ký tự.
                                        </span>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPasswordNewVerify">Nhập lại mật khẩu</label>
                                        <input type="password" class="form-control" name="repw"
                                            id="inputPasswordNewVerify" required="">
                                        <span class="form-text small text-muted">
                                            Xác nhận lại mật khẩu.
                                        </span>
                                    </div>
                                    <div class="form-group">

                                    </div>

                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-info float-right">Lưu thay
                                    đổi</button>
                            </div>
                            </form>
                        </div>

                    </div>
                </div>
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    @yield('content')
                </div>
            </div>


            <!-- Footer -->
            <div class="text-center p-3" style="background-color: #0038b0;">
                <p style="background: none;text-align: center; color: white; font-size: 14px; margin:5px">© 2023 CHUYỂN
                    ĐỔI SỐ TỈNH AN GIANG<span style="padding: 0 15px;">|</span> Thiết kế và Xây dựng bởi <a
                        href="https://fit.agu.edu.vn/" style="color: #00d7eb; font-weight: bold;">FIT - TRƯỜNG ĐH AN
                        GIANG</a></p>
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
    <script src="{{ asset('admin_file/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin_file/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('admin_file/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('admin_file/js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('admin_file/vendor/chart.js/Chart.min.js') }}"></script>

</body>

</html>
