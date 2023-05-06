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
                <li class="nav-item">
                    <a class="nav-link" href="{{ URL::to('chuyengia/CGtraloi') }}">
                        <i class="fas fa-comments"></i>
                        <span>Trả lời</span></a>
                </li>
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
                        <div class="container-fluid">

                            <!-- Page Heading -->
                            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                                <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                            </div>

                            <!-- Content Row -->
                            <div class="row">

                                <!-- Earnings (Monthly) Card Example -->
                                <div class="col-xl-3 col-md-6 mb-4">
                                    <div class="card border-left-primary shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                        Phiếu 1</div>
                                                        @if ($P1->count() > 0)
                                                        <div class="h5 mb-0 font-weight-bold text-gray-800">Đã có {{ $P1->count()}} <br>doanh nghiệp<br> đánh giá</div>
                                                        @else
                                                        <div class="h5 mb-0 font-weight-bold text-gray-800">Chưa có <br>doanh nghiệp<br> đánh giá</div>
                                                        @endif

                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Earnings (Monthly) Card Example -->
                                <div class="col-xl-3 col-md-6 mb-4">
                                    <div class="card border-left-success shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                        Phiếu 2</div>
                                                        @if ($P2->count() > 0)
                                                        <div class="h5 mb-0 font-weight-bold text-gray-800">Đã có {{ $P2->count()}} <br>doanh nghiệp<br> khảo soát</div>
                                                        @else
                                                        <div class="h5 mb-0 font-weight-bold text-gray-800">Chưa có <br>doanh nghiệp<br> khảo soát</div>
                                                        @endif
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Earnings (Monthly) Card Example -->
                                <div class="col-xl-3 col-md-6 mb-4">
                                    <div class="card border-left-info shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Phiếu 3
                                                    </div>
                                                    <div class="row no-gutters align-items-center">
                                                        <div class="col-auto">
                                                            @if ($P3->count() > 0)
                                                            <div class="h5 mb-0 font-weight-bold text-gray-800">Đã có {{ $P3->count()}} <br>doanh nghiệp<br> phản hồi</div>
                                                            @else
                                                            <div class="h5 mb-0 font-weight-bold text-gray-800">Chưa có <br>doanh nghiệp<br> phản hồi</div>
                                                            @endif
                                                        </div>
                                                        <div class="col">

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Pending Requests Card Example -->
                                <div class="col-xl-3 col-md-6 mb-4">
                                    <div class="card border-left-warning shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                        Phiếu 4</div>
                                                        @if ($P4->count() > 0)
                                                        <div class="h5 mb-0 font-weight-bold text-gray-800">Đã có {{ $P4->count()}} <br>doanh nghiệp<br> phản hồi</div>
                                                        @else
                                                        <div class="h5 mb-0 font-weight-bold text-gray-800" >Chưa có<br>doanh nghiệp<br>phản hồi</div>
                                                        @endif
                                                </div>

                                                <div class="col-auto">
                                                    <i class="fas fa-comments fa-2x text-gray-300"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Content Row -->

                            <div class="row">



                                <!-- Pie Chart -->
                                <div class="col-xl-4 col-lg-5">
                                    <div class="card shadow mb-4">
                                        <!-- Card Header - Dropdown -->
                                        <div
                                            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                            <h6 class="m-0 font-weight-bold text-primary">Tài khoản doanh nghiệp</h6>
                                            <div class="dropdown no-arrow">
                                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                                    aria-labelledby="dropdownMenuLink">
                                                    <div class="dropdown-header">Dropdown Header:</div>
                                                    <a class="dropdown-item" href="#">Đã kích hoạt</a>
                                                    <a class="dropdown-item" href="#">chưa kích hoạt</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">chưa đăng ký</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Card Body -->
                                        <div class="card-body">
                                            <div class="chart-pie pt-4 pb-2">
                                                <canvas id="myPieChart"></canvas>
                                            </div>
                                            <div class="mt-4 text-center small">
                                                <span class="mr-2">
                                                    <i class="fas fa-circle text-primary"></i> Đã xác thực
                                                </span>
                                                <span class="mr-2">
                                                    <i class="fas fa-circle text-warning"></i> chưa xác thực
                                                </span>
                                                <span class="mr-2">
                                                    <i class="fas fa-circle text-Danger"></i> đã khóa
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                 <!-- Area Chart -->
                                 <div class="col-xl-8 col-lg-7">
                                    <div class="card shadow mb-4">
                                        <!-- Card Header - Dropdown -->
                                        <div
                                            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                            <h6 class="m-0 font-weight-bold text-primary">Số lượng đánh giá trong năm</h6>
                                            <div class="dropdown no-arrow">
                                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                                    aria-labelledby="dropdownMenuLink">
                                                    <div class="dropdown-header">Dropdown Header:</div>
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Card Body -->
                                        <div class="card-body">
                                            <div class="chart-area">
                                                <canvas id="myAreaChart"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Content Row -->
                            <div class="row">


                            </div>

                        </div>
                        <!-- /.container-fluid -->

                    </div>
                    <!-- End of Main Content -->
                </div>

        <script src="{{asset('admin_file/vendor/chart.js/Chart.min.js')}}"></script>
                <script>
                    // pie
                    var dk = 0;
                    var cdk = 0;
                    var k = 0;
                    @foreach ( $TKDN as $tk )
                    @if ($tk->TrangThai_XacThuc == 0)
                        cdk = {{ $tk->tong }};
                    @endif
                    @if ($tk->TrangThai_XacThuc == 1)
                        dk = {{ $tk->tong }};
                    @endif
                    @if ($tk->TrangThai_XacThuc == 2)
                        k = {{ $tk->tong }};
                    @endif
                    @endforeach

var cta = document.getElementById("myPieChart");
var myPieChart = new Chart(cta, {
  type: 'doughnut',
  data: {
    labels: ["Đã Khóa", "Chưa xác thực", "Đã xác thực"],
    datasets: [{
      data: [k, cdk, dk],
      backgroundColor: ['#e74a3b', '#f6c23e', '#4e73df'],
      hoverBackgroundColor: ['#B4392E', '#B6902E', '#1062AC'],
      hoverBorderColor: "rgba(234, 236, 244, 1)",
    }],
  },
  options: {
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
    },
    legend: {
      display: false
    },
    cutoutPercentage: 80,
  },
});

                </script>
                <script>
                    var ctx = document.getElementById("myAreaChart");
var myLineChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
    datasets: [{
      label: "Doanh nghiệp",
      lineTension: 0.3,
      backgroundColor: "rgba(78, 115, 223, 0.05)",
      borderColor: "rgba(78, 115, 223, 1)",
      pointRadius: 3,
      pointBackgroundColor: "rgba(78, 115, 223, 1)",
      pointBorderColor: "rgba(78, 115, 223, 1)",
      pointHoverRadius: 3,
      pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
      pointHoverBorderColor: "rgba(78, 115, 223, 1)",
      pointHitRadius: 10,
      pointBorderWidth: 2,
      data:[0, 2, 3, 4, 3,4, 5, 7, 6,10, 6, 8],
    }],
  },
  options: {
    maintainAspectRatio: false,
    layout: {
      padding: {
        left: 10,
        right: 25,
        top: 25,
        bottom: 0
      }
    },
    scales: {
      xAxes: [{
        time: {
          unit: 'date'
        },
        gridLines: {
          display: false,
          drawBorder: false
        },
        ticks: {
          maxTicksLimit: 7
        }
      }],
      yAxes: [{
        ticks: {
          maxTicksLimit: 5,
          padding: 10,
          // Include a dollar sign in the ticks
          callback: function(value, index, values) {
            return  value;
          }
        },
        gridLines: {
          color: "rgb(234, 236, 244)",
          zeroLineColor: "rgb(234, 236, 244)",
          drawBorder: false,
          borderDash: [2],
          zeroLineBorderDash: [2]
        }
      }],
    },
    legend: {
      display: false
    },
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      titleMarginBottom: 10,
      titleFontColor: '#6e707e',
      titleFontSize: 14,
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      intersect: false,
      mode: 'index',
      caretPadding: 10,
      callbacks: {
        label: function(tooltipItem, chart) {
          var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
          return datasetLabel + ': ' + tooltipItem.yLabel;
        }
      }
    }
  }
});
                </script>
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

        <!-- Page level custom scripts -->

    </body>

    </html>
