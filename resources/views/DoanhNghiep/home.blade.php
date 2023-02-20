@extends('DoanhNghiep.dashboard')
<!-- @section('link')

@endsection -->
@section('content')
<main class="content" style="background-image: url({{asset('img/bg_cauhoi1-02.jpg')}}) ;background-repeat: round;    background-size:100%;" >
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
												<h3 class="mt-1 mb-3" style="font-weight:bold;color: #4e73df">320 điểm </h3>

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
												<h3 class="mt-1 mb-3" style="font-weight:bold;color: #4e73df">xxx điểm </h3>
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

												<h3 class="mt-1 mb-3" style="font-weight:bold;color: #4e73df">xxx điểm </h3>
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

												<h3 class="mt-1 mb-3" style="font-weight:bold;color: #4e73df">Trạng thái </h3>
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