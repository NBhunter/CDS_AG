@extends('admin.admindashboard')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 style="color:#4e73df;font-size:24px;font-weight:bold;">TRANG CHỦ</h1>
        </div>

        <!-- Content Row -->
        <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Người dùng</div>
                                @if ($P1->count() > 0)
                                    <div class="font-weight-bold">Đã có
                                        {{ $P1->count() }} <br> doanh nghiệp đánh giá</div>
                                @else
                                    <div class="font-weight-bold">Chưa có
                                        <br> đánh giá
                                    </div>
                                @endif

                            </div>
                            <div class="col-auto">
                                <i class="	fas fa-clipboard fa-2x text-success-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                    Tin tức</div>
                                @if ($P2->count() > 0)
                                    <div class="font-weight-bold text-gray-800">Đã có
                                        {{ $P2->count() }} <br>doanh nghiệp<br> đánh giá</div>
                                @else
                                    <div class="font-weight-bold text-gray-800">Chưa có
                                        <br>doanh nghiệp<br>đánh giá
                                    </div>
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
                <div class="card border-left-danger shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                    Chuyên gia
                                </div>
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        @if ($P3->count() > 0)
                                            <div class=" font-weight-bold text-gray-800">Đã
                                                có {{ $P3->count() }} <br>doanh nghiệp<br> đánh
                                                giá
                                            </div>
                                        @else
                                            <div class="font-weight-bold text-gray-800">
                                                Chưa có <br>doanh nghiệp<br> đánh giá</div>
                                        @endif
                                    </div>
                                    <div class="col">

                                    </div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-clipboard-check fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                    Cộng tác viên</div>
                                @if ($P4->count() > 0)
                                    <div class="font-weight-bold text-gray-800">Đã có
                                        {{ $P4->count() }} <br>doanh nghiệp<br> phản hồi</div>
                                @else
                                    <div class=" font-weight-bold text-gray-800">Chưa
                                        có<br>doanh nghiệp<br>phản hồi</div>
                                @endif
                            </div>

                            <div class="col-auto">
                                <i class="fas fa-edit fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content Row -->

        <div class="row">



            <!-- Pie Chart -->
            <div class="col-xl-5 col-lg-5">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-4 d-flex flex-row align-items-center justify-content-between" style="">
                        <h6 class="m-0 font-weight-bold text-primary" style="position: absolute; left: 25%;">
                            Tài khoản doanh nghiệp</h6>



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
                                <i class="fas fa-circle text-warning"></i> Chưa xác thực
                            </span>
                            <span class="mr-2">
                                <i class="fas fa-circle text-Danger"></i> Đã khóa
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Area Chart -->
            <div class="col-xl-7 col-lg-7">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-4 d-flex flex-row align-items-center justify-content-between"
                        style="height:40px;">
                        <h6 class="m-0 font-weight-bold text-primary" style="position: absolute; left: 30%;">Số lượng đánh
                            giá trong năm
                        </h6>

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

    <script src="{{ asset('admin_file/vendor/chart.js/Chart.min.js') }}"></script>
    <script>
        // pie
        var dk = 0;
        var cdk = 0;
        var k = 0;
        @foreach ($TKDN as $tk)
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
                    data: [0, 2, 3, 4, 3, 4, 5, 7, 6, 10, 6, 8],
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
                                return value;
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
@endsection
