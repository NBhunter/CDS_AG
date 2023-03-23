<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hiệp Liên Hội</title>

    <link rel="stylesheet" href="{{ asset('HLH/assets/css/bootstrap.css') }}">

    <link rel="stylesheet" href="{{ asset('HLH/assets/vendors/chartjs/Chart.min.css') }}">

    <link rel="stylesheet" href="{{ asset('HLH/assets/vendors/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('HLH/assets/css/app.css') }}">
    <link rel="shortcut icon" href="{{asset('img/logo_ag.ico')}}" type="image/x-icon">
</head>
<body>
    <div id="app">
        <div id="sidebar" class='active'>
            <div class="sidebar-wrapper active">
    <div class="sidebar-header">
<h3> HIỆP LIÊN HỘI </h3>
    </div>
    <div class="sidebar-menu">
        <ul class="menu">


                <li class='sidebar-title'>Doanh nghiệp</li>

                <li class="sidebar-item  has-sub">

                    <a href="#" class='sidebar-link'>
                        <i data-feather="briefcase" width="20"></i>
                        <span>Thông tin doanh nghiệp</span>
                    </a>


                    <ul class="submenu ">

                        <li>
                            <a >Thông tin chi tiết doanh nghiệp</a>
                        </li>

                        <li>
                          <a >Mô hình CDS của doanh nghiệp</a>
                      </li>


                      <li>
                        <a >Lộ trình CDS của doanh nghiệp</a>
                    </li>


                    </ul>

                </li>






                <li class='sidebar-title'>Phiếu khảo sát</li>


                <li class="sidebar-item  ">

                    <a class='sidebar-link'>
                        <i data-feather="layout" width="20"></i>
                        <span>Doanh nghiệp đã đánh giá</span>
                    </a>
                </li>
                <li class="sidebar-item  ">
                    <a href="table.html" class='sidebar-link'>
                        <i data-feather="grid" width="20"></i>
                        <span>Doanh nghiệp chưa đánh giá</span>
                    </a>
                </li>
                <li class='sidebar-title'>Thông tin</li>



                <li class="sidebar-item  has-sub">

                    <a href="#" class='sidebar-link'>
                        <i data-feather="user" width="20"></i>
                        <span>Hồ sơ hiệp liên hội</span>
                    </a>


                    <ul class="submenu ">

                        <li>
                            <a href="auth-login.html">Thoát</a>
                        </li>

                        <li>
                            <a href="auth-forgot-password.html">Quên mật khẩu</a>
                        </li>

                    </ul>

                </li>





        </ul>
    </div>
    <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
</div>
        </div>
        <div id="main">
            <nav class="navbar navbar-header navbar-expand navbar-light">
                <a class="sidebar-toggler" href="#"><span class="navbar-toggler-icon"></span></a>
                <button class="btn navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav d-flex align-items-center navbar-light ms-auto">
                        <li class="dropdown nav-icon">
                            <a href="#" data-bs-toggle="dropdown" class="nav-link  dropdown-toggle nav-link-lg nav-link-user">
                                <div class="d-lg-inline-block">
                                    <i data-feather="bell"></i>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-large">
                                <h6 class='py-2 px-4'>Thông báo</h6>
                                <ul class="list-group rounded-none">
                                    <li class="list-group-item border-0 align-items-start">
                                        <div class="avatar bg-success me-3">
                                            <span class="avatar-content"><i data-feather="shopping-cart"></i></span>
                                        </div>
                                        <div>

                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="dropdown nav-icon me-2">
                            <a href="#" data-bs-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                                <div class="d-lg-inline-block">
                                    <i data-feather="mail"></i>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" >
                              <h6 class='py-2 px-4'>Tin nhắn</h6>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a href="#" data-bs-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                                <div class="avatar me-1">
                                    <img src="assets/images/avatar/avatar-s-1.png" alt="" srcset="">
                                </div>
                                <div class="d-none d-md-block d-lg-inline-block">Chào </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#"><i data-feather="user"></i>Hồ sơ</a>
                                <a class="dropdown-item" href="#"><i data-feather="settings"></i>Cài đặt</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i data-feather="log-out"></i>Thoát</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

<div class="main-content container-fluid">

</div>
</div>

            <footer >
                <div class="footer clearfix mb-0 text-muted">
                    </div>
                        <p style="background: none;text-align: center; color: black; font-size: 14px; margin:5px;font-family:Roboto;">© 2023 CHUYỂN ĐỔI SỐ TỈNH AN GIANG<span style="padding: 0 15px;">|</span> Thiết kế và Xây dựng bởi <a href="https://fit.agu.edu.vn/" style="color: #00d7eb; font-weight: bold;">FIT - TRƯỜNG ĐH AN GIANG</a></p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="assets/js/feather-icons/feather.min.js"></script>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/app.js"></script>

    <script src="assets/vendors/chartjs/Chart.min.js"></script>
    <script src="assets/vendors/apexcharts/apexcharts.min.js"></script>
    <script src="assets/js/pages/dashboard.js"></script>

    <script src="assets/js/main.js"></script>
</body>
</html>
