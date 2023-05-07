@extends('admin.admindashboard')

@section('content')

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

@endsection
