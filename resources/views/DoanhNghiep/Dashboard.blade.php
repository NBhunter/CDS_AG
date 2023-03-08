<!DOCTYPE html>
<html lang="vi">

<head>
	<meta charset="utf8mb4">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="{{asset('img/logo_ag.ico')}}" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/" />

	<title>Chuyển đổi số tỉnh An Giang - Thông tin doanh nghiệp</title>

    <script src="{{ asset('dasdboard/js/app.js') }}"></script>
	<link href="{{asset('dasdboard/css/app.css')}}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	<div class="wrapper" style="background-color: #4e73df;">
		<nav id="sidebar" class="sidebar js-sidebar" style="background-color: #4e73df">
			<div class="sidebar-content js-simplebar" style="background-color: #4e73df;">
				<a class="sidebar-brand" href="{{ URL::to('dnviews') }}" style="font-weight:bold;font-family:Roboto;">
				<i class="align-middle" data-feather="check-square"></i>
				<span class="align-middle" >TRANG ĐÁNH GIÁ</span>
        </a>
		<hr class="sidebar-divider" style="color:white;">
				<ul class="sidebar-nav">

					<li class="sidebar-item active"style="background-color: #4e73df;">
						<a class="sidebar-link" href="{{ URL::to('dnviews') }}">
              <i class="align-middle" data-feather="home"></i> <span class="align-middle" style="font-family:Roboto;">Trang điều khiển</span>
            </a>
					</li>
					<hr class="sidebar-divider" style="color:white;">
                <!-- Heading -->

					<li class="sidebar-item" >
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

                <li class="sidebar-item">

                    {{-- <a class="sidebar-link" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();" style="background-color: #4e73df;">
          <i class="align-middle" data-feather="log-out"></i> <span class="align-middle" style="font-family:Roboto;">Log out</span>
        </a> --}}

                </li>
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
							<a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-bs-toggle="dropdown">
								<div class="position-relative">
									<i class="align-middle" data-feather="bell"></i>
									<span class="indicator">{{ $thongbao->count() }}</span>
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="alertsDropdown">
								<div class="dropdown-menu-header">
									Thông báo
								</div>
								<div class="list-group">
                                    @foreach ($thongbao as $tb )
                                    <a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-danger" data-feather="alert-circle"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">{{ $tb->TieuDe }}</div>
												<div class="text-muted small mt-1">{{ $tb->NoiDung_TinNhan	 }}</div>
												<div class="text-muted small mt-1">

                                                    {{$tb->lastOnline  }}
                                                </div>
											</div>
										</div>
									</a>
                                    @endforeach


								</div>
								<div class="dropdown-menu-footer">
									<a href="#" class="text-muted">Hiển thị tất cả thông báo</a>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle" href="#" id="messagesDropdown" data-bs-toggle="dropdown">
								<div class="position-relative">
									<i class="align-middle" data-feather="message-square"></i>
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="messagesDropdown">
								<div class="dropdown-menu-header">
									<div class="position-relative">
										Tin nhắn
									</div>
								</div>

								<div class="list-group">
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<img src="{{asset('dasdboard/img/avatars/nguyenbang.jpg')}}" class="avatar img-fluid rounded-circle" alt="Vanessa Tucker">
											</div>
											<div class="col-10 ps-2">
												<div class="text-dark">Vanessa Tucker</div>
												<div class="text-muted small mt-1">Nam pretium turpis et arcu. Duis arcu tortor.</div>
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
							<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                <i class="align-middle" data-feather="settings"></i>
              </a>

							<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                <img src="{{asset('dasdboard/img/avatars/nguyenbang.jpg')}}" class="avatar img-fluid rounded me-1" alt="Charles Hall" />
                <span class="text-dark"> @if($DoanhNghiep->TenDoanhNghiep== null)<span class="badge bg-danger">Chưa xác thực Doanh Nghiệp</span> - {{ $DoanhNghiep->name }} @else{{ $DoanhNghiep->TenDoanhNghiep }} - {{ $DoanhNghiep->name }}@endif</span>
              </a>
							<div class="dropdown-menu dropdown-menu-end">
								<a class="dropdown-item" href="pages-profile.html"><i class="align-middle me-1" data-feather="user"></i> Thông tin</a>

								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="index.html"><i class="align-middle me-1" data-feather="settings"></i> Đổi mật khẩu</a>
								<a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="help-circle"></i> Trợ giúp</a>
								<div class="dropdown-divider"></div>
								<form method="POST" action="{{ route('logout') }}" x-data>
            @csrf

            <x-jet-dropdown-link class="dropdown-item" style="font-family: Roboto;color:black;font-size:14px;" href="{{ route('logout') }}"
                     @click.prevent="$root.submit();">
               Thoát
            </x-jet-dropdown-link>
        </form>

								<!-- <a  href="{{ route('logout') }}" onclick="$root.submit();">{{ __('Thoát') }}</a> -->
							</div>
						</li>
					</ul>
				</div>
			</nav>
			@yield('content')


					<footer class="sticky-footer bg-grey ">

                    <div class="copyright text-center my-auto">
					<p style="background: none;text-align: center; color: black; font-size: 14px; margin:5px;font-family:Roboto;">© 2023 CHUYỂN ĐỔI SỐ TỈNH AN GIANG<span style="padding: 0 15px;">|</span> Thiết kế và Xây dựng bởi <a href="https://fit.agu.edu.vn/" style="color: #00d7eb; font-weight: bold;">FIT - TRƯỜNG ĐH AN GIANG</a></p>
                            </div>
                    </div>
                </div>

            </footer>

	<script src="js/app.js"></script>

	<script>
		document.addEventListener("DOMContentLoaded", function() {
			var ctx = document.getElementById("chartjs-dashboard-line").getContext("2d");
			var gradient = ctx.createLinearGradient(0, 0, 0, 225);
			gradient.addColorStop(0, "rgba(215, 227, 244, 1)");
			gradient.addColorStop(1, "rgba(215, 227, 244, 0)");
			// Line chart
			new Chart(document.getElementById("chartjs-dashboard-line"), {
				type: "line",
				data: {
					labels: [
                @php
                    $i =1;
                @endphp
                    @foreach ($BanDanhGia as $DG)
"{{ $i++ }}",
                    @endforeach
                    ],
					datasets: [{
						label: "Mức độ (đ)",
						fill: true,
						backgroundColor: gradient,
						borderColor: window.theme.primary,
						data: [
                            @foreach ($BanDanhGia as $DG)
{{ $DG->TongDiem}},
                    @endforeach

						]
					}]
				},
				options: {
					maintainAspectRatio: false,
					legend: {
						display: false
					},
					tooltips: {
						intersect: false
					},
					hover: {
						intersect: true
					},
					plugins: {
						filler: {
							propagate: false
						}
					},
					scales: {
						xAxes: [{
							reverse: true,
							gridLines: {
								color: "rgba(0,0,0,0.0)"
							}
						}],
						yAxes: [{
							ticks: {
								stepSize: 10
							},
							display: true,
							borderDash: [10, 10],
							gridLines: {
								color: "rgba(0,0,0,0.0)"
							}
						}]
					}
				}
			});
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			// Pie chart
			new Chart(document.getElementById("chartjs-dashboard-pie"), {
				type: "pie",
				data: {
					labels: ["Chrome", "Firefox", "IE"],
					datasets: [{
						data: [4306, 3801, 1689],
						backgroundColor: [
							window.theme.primary,
							window.theme.warning,
							window.theme.danger
						],
						borderWidth: 5
					}]
				},
				options: {
					responsive: !window.MSInputMethodContext,
					maintainAspectRatio: false,
					legend: {
						display: false
					},
					cutoutPercentage: 75
				}
			});
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			// Bar chart
			new Chart(document.getElementById("chartjs-dashboard-bar"), {
				type: "bar",
				data: {
					labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
					datasets: [{
						label: "This year",
						backgroundColor: window.theme.primary,
						borderColor: window.theme.primary,
						hoverBackgroundColor: window.theme.primary,
						hoverBorderColor: window.theme.primary,
						data: [54, 67, 41, 55, 62, 45, 55, 73, 60, 76, 48, 79],
						barPercentage: .75,
						categoryPercentage: .5
					}]
				},
				options: {
					maintainAspectRatio: false,
					legend: {
						display: false
					},
					scales: {
						yAxes: [{
							gridLines: {
								display: false
							},
							stacked: false,
							ticks: {
								stepSize: 20
							}
						}],
						xAxes: [{
							stacked: false,
							gridLines: {
								color: "transparent"
							}
						}]
					}
				}
			});
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			var markers = [{
					coords: [31.230391, 121.473701],
					name: "Shanghai"
				},
				{
					coords: [28.704060, 77.102493],
					name: "Delhi"
				},
				{
					coords: [6.524379, 3.379206],
					name: "Lagos"
				},
				{
					coords: [35.689487, 139.691711],
					name: "Tokyo"
				},
				{
					coords: [23.129110, 113.264381],
					name: "Guangzhou"
				},
				{
					coords: [40.7127837, -74.0059413],
					name: "New York"
				},
				{
					coords: [34.052235, -118.243683],
					name: "Los Angeles"
				},
				{
					coords: [41.878113, -87.629799],
					name: "Chicago"
				},
				{
					coords: [51.507351, -0.127758],
					name: "London"
				},
				{
					coords: [40.416775, -3.703790],
					name: "Madrid "
				}
			];
			var map = new jsVectorMap({
				map: "world",
				selector: "#world_map",
				zoomButtons: true,
				markers: markers,
				markerStyle: {
					initial: {
						r: 9,
						strokeWidth: 7,
						stokeOpacity: .4,
						fill: window.theme.primary
					},
					hover: {
						fill: window.theme.primary,
						stroke: window.theme.primary
					}
				},
				zoomOnScroll: false
			});
			window.addEventListener("resize", () => {
				map.updateSize();
			});
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			var date = new Date(Date.now() - 5 * 24 * 60 * 60 * 1000);
			var defaultDate = date.getUTCFullYear() + "-" + (date.getUTCMonth() + 1) + "-" + date.getUTCDate();
			document.getElementById("datetimepicker-dashboard").flatpickr({
				inline: true,
				prevArrow: "<span title=\"Previous month\">&laquo;</span>",
				nextArrow: "<span title=\"Next month\">&raquo;</span>",
				defaultDate: defaultDate
			});
		});
	</script>

</body>

</html>
