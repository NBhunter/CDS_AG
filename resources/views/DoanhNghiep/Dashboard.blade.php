<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf8mb4">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="{{ asset('img/logo_ag.ico') }}" />
    @yield('link')
    <link rel="canonical" href="https://demo-basic.adminkit.io/" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 <script src="https://kit.fontawesome.com/ab32c1f2a5.js" crossorigin="anonymous"></script>

    <title>Chuyển đổi số tỉnh An Giang - Thông tin doanh nghiệp</title>
    {{-- script modal popup --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="{{ asset('dasdboard/js/app.js') }}"></script>
    <link href="{{ asset('dasdboard/css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
    <div class="wrapper" style="background-color: #4e73df;">
        <nav id="sidebar" class="sidebar js-sidebar" style="background-color: #4e73df">
            <div class="sidebar-content js-simplebar" style="background-color: #4e73df;">
                <a class="sidebar-brand" href="{{ URL::to('dnviews') }}" style="font-weight:bold;font-family:Roboto;">
                    <i class="align-middle" data-feather="check-square"></i>
                    <span class="align-middle">TRANG ĐÁNH GIÁ</span>
                </a>
                <hr class="sidebar-divider" style="color:white;">
                <ul class="sidebar-nav">
                    @yield('nvar')

                </ul>
        </nav>

        <div class="main">
            <nav class="navbar navbar-expand navbar-light navbar-bg">
                <a class="sidebar-toggle js-sidebar-toggle">
                    <i class="hamburger align-self-center"></i>
                </a>

                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav navbar-align">
                        <li class="nav-item dropdown">
                            <a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown"
                                data-bs-toggle="dropdown">
                                <div class="position-relative">
                                    <i class="align-middle" data-feather="bell"></i>
                                    <span class="indicator">
                                        @if (empty($thongbao))
                                            0
                                        @else
                                            {{ $thongbao->count() }}
                                        @endif
                                    </span>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0"
                                aria-labelledby="alertsDropdown">
                                <div class="dropdown-menu-header">
                                    Thông báo
                                </div>
                                <div class="list-group">
                                    @if (!empty($thongbao))
                                        @foreach ($thongbao as $tb)
                                            @if ($tb->Loai == 2 && now()->diffInMonths($tb->created_at) < 1)
                                                <a href="{{ URL::to($tb->Link) }}" class="list-group-item">
                                                    <div class="row g-0 align-items-center">
                                                        <div class="col-2">
                                                            <i class="text-danger" data-feather="alert-circle"></i>
                                                        </div>
                                                        <div class="col-10">
                                                            <div class="text-dark">{{ $tb->TieuDe }}</div>
                                                            <div class="text-muted small mt-1">
                                                                {{ $tb->NoiDung_TinNhan }}</div>
                                                            <div class="text-muted small mt-1">

                                                                {{ $tb->lastOnline }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            @endif
                                        @endforeach
                                    @else
                                        <div class="text-dark" style="text-align: center;"> <a href="#"
                                                class="text-muted">Hiện không có thông báo mới </a></div>
                                    @endif

                                </div>
                                <div class="dropdown-menu-footer">
                                    <a href="#" class="text-muted">Hiển thị tất cả thông báo</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-icon dropdown-toggle" href="#" id="messagesDropdown"
                                data-bs-toggle="dropdown">
                                <div class="position-relative">
                                    <i class="align-middle" data-feather="message-square"></i>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0"
                                aria-labelledby="messagesDropdown">
                                <div class="dropdown-menu-header">
                                    <div class="position-relative">
                                        Tin nhắn
                                    </div>
                                </div>

                                <div class="list-group">
                                    <a href="#" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                <img src="{{ asset('dasdboard/img/avatars/nguyenbang.jpg') }}"
                                                    class="avatar img-fluid rounded-circle" alt="Vanessa Tucker">
                                            </div>
                                            <div class="col-10 ps-2">
                                                <div class="text-dark">Vanessa Tucker</div>
                                                <div class="text-muted small mt-1">Nam pretium turpis et arcu. Duis arcu
                                                    tortor.</div>
                                                <div class="text-muted small mt-1">15m ago</div>
                                            </div>
                                        </div>
                                    </a>

                                </div>
                                <div class="dropdown-menu-footer">
                                    <a href="#" class="text-muted">Hiển thị tất cả tin nhắn</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#"
                                data-bs-toggle="dropdown">
                                <i class="align-middle" data-feather="settings"></i>
                            </a>

                            <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#"
                                data-bs-toggle="dropdown">
                                <img src="{{ asset('dasdboard/img/avatars/nguyenbang.jpg') }}"
                                    class="avatar img-fluid rounded me-1" alt="Charles Hall" />
                                <span class="text-dark">
                                    @if ($DoanhNghiep->TenDoanhNghiep == null)
                                        <span class="badge bg-danger">Chưa xác thực Doanh Nghiệp</span> -
                                        {{ $DoanhNghiep->name }} @else{{ $DoanhNghiep->TenDoanhNghiep }} -
                                        {{ $DoanhNghiep->name }}
                                    @endif
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="pages-profile.html"><i class="align-middle me-1"
                                        data-feather="user"></i> Thông tin</a>

                                <div class="dropdown-divider"></div>
                                {{-- <a class="dropdown-item" href="#" data-toggle="modal"
                                    data-target="#myModal"><i class="align-middle me-1" data-feather="settings"></i>
                                    Đổi mật khẩu</a> --}}
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#myModal">
                                        <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Đổi mật khẩu
                                    </a>

                                <a class="dropdown-item" href="#"><i class="align-middle me-1"
                                        data-feather="help-circle"></i> Trợ giúp</a>
                                <div class="dropdown-divider"></div>
                                <form method="POST" action="{{ route('logout') }}" x-data>
                                    @csrf

                                    <x-jet-dropdown-link class="dropdown-item"
                                        style="font-family: Roboto;color:black;font-size:14px;"
                                        href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                        Thoát
                                    </x-jet-dropdown-link>
                                </form>

                                <!-- <a  href="{{ route('logout') }}" onclick="$root.submit();">{{ __('Thoát') }}</a> -->
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>


            @if (session('alert'))
                <div class="alert alert-danger alert-dismissible" role="alert">

                    <div class="alert alert-danger alert-dismissible fade show"
                        style="color:red;text-align:center;font-weight:bold;">
                        <button type="btn btn-danger" class="btn-close" data-bs-dismiss="alert"></button>
                        {{ session('alert') }}
                    </div>
            @endif
            @yield('content')


            <footer class="sticky-footer bg-grey ">

                <div class="copyright text-center my-auto">
                    <p
                        style="background: none;text-align: center; color: black; font-size: 14px; margin:5px;font-family:Roboto;">
                        © 2023 CHUYỂN ĐỔI SỐ TỈNH AN GIANG<span style="padding: 0 15px;">|</span> Thiết kế và Xây dựng
                        bởi <a href="https://fit.agu.edu.vn/" style="color: #00d7eb; font-weight: bold;">FIT - TRƯỜNG
                            ĐH AN GIANG</a></p>
                </div>
        </div>
    </div>

    </footer>

    <script src="js/app.js"></script>

    @yield('script')

</body>

</html>
