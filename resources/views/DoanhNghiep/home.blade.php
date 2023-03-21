@extends('DoanhNghiep.dashboard')
<!-- @section('link')

@endsection -->
@section('content')
<main class="content" style="background-image: url({{asset('img/bg_cauhoi1-02.jpg')}}) ;background-repeat: repeat;    background-size:100%;" >
				<div class="container-fluid p-0">

					<h1 class="h3 mb-3" style="font-weight:bold;font-family:Roboto;color:#4e73df;">THÔNG TIN DOANH NGHIỆP</h1>

					<div class="row">
						<div class="col-xl-6 col-xxl-5 d-flex">
							<div class="w-100">
								<div class="row">
									<div class="col-sm-6">
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<div class=""><a href="{{ URL::to('phieudanhgia1') }}" class="">
                                                            <i class="align-middle" data-feather="file-text" style="" ></i>
															<span class="align-middle" style="font-family:Roboto;" >PHIẾU SỐ 1</span>
													</div>

													<div class="col-auto">

                                                        </a>

														</div>
													</div>
												</div>
												<hr class="sidebar-divider" style="color: #4e73df;">
												<h4 style="font-size:14px;font-family:Roboto;">Chỉ số đánh giá mức độ chuyển đổi số </h4>
												<hr class="sidebar-divider" style="color: #4e73df;">
												<h3 class="mt-1 mb-3" style="font-weight:bold;color: #4e73df">@php
                                                    if($DanhGia1 != null){
                                                        echo $DanhGia1->TongDiem." điểm";
                                                    }
                                                    else {
                                                        echo "chưa đánh giá";
                                                    }
                                                @endphp</h3>

											</div>
										</div>
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0"><a href="{{ URL::to('phieudanhgia3') }}" class="">
													<i class="align-middle" data-feather="file-text" style="" ></i>
															<span class="align-middle" style="font-family:Roboto;" >PHIẾU SỐ 3</span>
                                                    </a>
                                                        </div>

													<div class="col-auto">
														<div class="">

														</div>
													</div>
												</div>
												<hr class="sidebar-divider" style="color: #4e73df;">
												<h4 style="font-size:14px;font-family:Roboto;">Rào cản chuyển đổi số trong doanh nghiệp  </h4>
												<hr class="sidebar-divider" style="color: #4e73df;">
												<h3 class="mt-1 mb-3" style="font-weight:bold;color: #4e73df">@php
                                                    if($DanhGia3 != null){
                                                        echo "đã đánh giá";
                                                    }
                                                    else {
                                                        echo "chưa đánh giá";
                                                    }
                                                @endphp </h3>
											</div>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
                                                        <a href="{{ URL::to('phieudanhgia2') }}" class="">
													<i class="align-middle" data-feather="file-text" style="" ></i>
															<span class="align-middle" style="font-family:Roboto;" >PHIẾU SỐ 2</span>
                                                        </a>
                                                        </div>

													<div class="col-auto">
														<div class="">

														</div>
													</div>
												</div>
												<hr class="sidebar-divider" style="color: #4e73df;">
												<h4 style="font-size:14px;font-family:Roboto;">Chuyển đổi số của doanh nghiệp vừa và nhỏ </h4>
												<hr class="sidebar-divider" style="color: #4e73df;">

												<h3 class="mt-1 mb-3" style="font-weight:bold;color: #4e73df">@php
                                                    if($DanhGia2 != null){
                                                        echo "đã đánh giá";
                                                    }
                                                    else {
                                                        echo "chưa đánh giá";
                                                    }
                                                @endphp</h3>
												<div class="mb-0">


												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
                                                        <a href="{{ URL::to('phieudanhgia4') }}" class="">
													<i class="align-middle" data-feather="file-text" style="" ></i>
															<span class="align-middle" style="font-family:Roboto;" >PHIẾU SỐ 4</span>
                                                        </a>
													</div>

													<div class="col-auto">
														<div class="">

														</div>
													</div>
												</div>
												<hr class="sidebar-divider" style="color: #4e73df;">
												<h4 style="font-size:14px;font-family:Roboto;">Ý kiến của doanh nghiệp về chuyển đổi số</h4>
												<hr class="sidebar-divider" style="color: #4e73df;">

												<h3 class="mt-1 mb-3" style="font-weight:bold;color: #4e73df">@php
                                                    if($DanhGia4 != null){
                                                        echo "đã đánh giá";
                                                    }
                                                    else {
                                                        echo "chưa đánh giá";
                                                    }
                                                @endphp</h3>
												<div class="mb-0">

												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-6 col-xxl-7">
							<div class="card flex-fill w-100">
								<div class="card-header">

									<h5 class="card-title mb-0">Bản phân tích chuyển đổi số của doanh nghiệp A</h5>
								</div>
								<div class="card-body py-3">
									<div class="chart chart-sm">
										<canvas id="chartjs-dashboard-line"></canvas>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- </div>
                </div> -->

@endsection
@section('script')
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
@endsection
