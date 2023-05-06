@extends('admin.admindashboard')

@section('content')
<<<<<<< HEAD

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
=======
<style>
    .fs {
  position: relative;
  left: 0px;
  top: 0px;
  right: 0px;
  bottom: 0px;
  width: 100%;
  height: 170vh;
  background-color: #4e73df;
  /* background-image: linear-gradient(to bottom right, #7b86fa 0%,#182ae9 25%,#0918c5 50%, #030d85 74%); */
  -webkit-perspective: 9999px;
  perspective: 9999px;
}

.hold-illustration {
  position: absolute;
  left: 0px;
  top: 50%;
  right: 0px;
  display: block;
  width: 60%;
  max-width: 700px;
  margin-right: auto;
  margin-left: auto;
  -webkit-perspective: 9999px;
  perspective: 9999px;
  -webkit-transform: translate(0px, -50%) rotateX(55deg) rotateY(-3deg)
    rotateZ(49deg);
  transform: translate(0px, -50%) rotateX(55deg) rotateY(-3deg) rotateZ(49deg);
}

.background {
  position: relative;
  display: block;
  width: 54%;
  height: 55vw;
  max-height: 1050px;
  margin-right: auto;
  margin-left: auto;
  border-top-left-radius: 10px;
  border-top-right-radius: 10px;
  background-image: -webkit-linear-gradient(298deg, #b4baff, #4353ff 74%);
  background-image: linear-gradient(152deg, #b4baff, #4e73df 74%);
  -webkit-perspective: 999px;
  perspective: 999px;
}

.background.dark {
  background-image: -webkit-linear-gradient(
    298deg,
    #b4baff,
    rgba(67, 83, 255, 0) 74%
  );
  background-image: linear-gradient(152deg, #b4baff, rgba(67, 83, 255, 0) 74%);
}

.top-bar {
  position: relative;
  left: 0px;
  top: 0px;
  right: 0px;
  width: 100%;
  height: 22px;
  border-bottom: 2px solid #4353ff;
  border-top-left-radius: 10px;
  border-top-right-radius: 10px;
  background-color: #b4baff;
}

.dot {
  position: absolute;
  left: 10px;
  top: 8px;
  width: 5px;
  height: 5px;
  border-radius: 100%;
  background-color: #fff;
}

.dot._2 {
  left: 20px;
}

.dot._3 {
  left: 30px;
}

.text-like-box {
  position: relative;
  width: 38%;
  padding: 20px 25px 25px;
  float: left;
}

.text-like-box.bottom {
  top: -250px;
  width: 31%;
  padding-top: 0px;
  clear: left;
  background-image: none;
}

.text-like-box.bottom.v2 {
  top: -32px;
  width: 80%;
  margin-left: 30%;
  float: none;
  clear: none;
}

.text {
  width: 15%;
  float: left;
  font-family: Verdana, Geneva, sans-serif;
  color: #fff;
  font-size: 21px;
  line-height: 30px;
}

.straight-line {
  position: relative;
  width: 83%;
  height: 2px;
  margin-left: 2%;
  padding-top: 22px;
  float: left;
  border-bottom: 2px solid #fff;
}

.straight-line-full {
  position: relative;
  width: 100%;
  height: 2px;
  margin-top: 7px;
  clear: left;
  border-radius: 1px;
  background-color: #fff;
}

.straight-line-full.shortened {
  width: 50%;
}

.square-tower {
  position: relative;
  top: -20px;
  width: 35%;
  height: 150px;
  float: left;
  clear: left;
  -webkit-perspective: 999px;
  perspective: 999px;
}

.play-box {
  position: relative;
  left: 0px;
  top: 50%;
  right: 0px;
  z-index: 4;
  display: block;
  overflow: visible;
  width: 65px;
  height: 65px;
  margin-right: auto;
  margin-left: auto;
  border: 2px solid #fff;
  border-radius: 0px 3px 3px;
  background-image: -webkit-linear-gradient(
    315deg,
    rgba(116, 129, 255, 0.7),
    rgba(166, 173, 255, 0.7)
  );
  background-image: linear-gradient(
    135deg,
    rgba(116, 129, 255, 0.7),
    rgba(166, 173, 255, 0.7)
  );
  -webkit-transform: translate(0px, -50%) translate3d(-79px, -61px, 70px);
  transform: translate(0px, -50%) translate3d(-79px, -61px, 70px);
}

.play-box__play-icon {
  position: absolute;
  left: 0px;
  top: 50%;
  right: 0px;
  display: block;
  width: 15px;
  margin-right: auto;
  margin-left: auto;
  border-top: 10px solid transparent;
  border-bottom: 10px solid transparent;
  border-left: 15px solid #fff;
  -webkit-transform: translate(0px, -50%);
  -ms-transform: translate(0px, -50%);
  transform: translate(0px, -50%);
}

.play-box__top-bar {
  position: relative;
  left: -2px;
  top: -6px;
  z-index: 0;
  width: 35%;
  height: 5px;
  border-top-left-radius: 3px;
  border-top-right-radius: 3px;
  background-color: #fff;
}

.play-box__square-1 {
  position: absolute;
  left: 0px;
  top: 50%;
  right: 0px;
  z-index: 3;
  display: block;
  width: 65px;
  height: 65px;
  margin-right: auto;
  margin-left: auto;
  border-radius: 3px;
  background-color: rgba(178, 185, 255, 0.7);
  -webkit-transform: translate(0px, -50%) translate3d(-62px, -44px, 50px);
  transform: translate(0px, -50%) translate3d(-62px, -44px, 50px);
}

.play-box__square-2 {
  position: absolute;
  left: 0px;
  top: 50%;
  right: 0px;
  z-index: 2;
  display: block;
  width: 65px;
  height: 65px;
  margin-right: auto;
  margin-left: auto;
  border-radius: 3px;
  background-color: #929bff;
  background-image: -webkit-linear-gradient(135deg, #929bff, #828dff);
  background-image: linear-gradient(315deg, #929bff, #828dff);
  -webkit-transform: translate3d(-42px, -92%, 50px);
  transform: translate3d(-42px, -92%, 50px);
}

.play-box__square-bottom {
  position: absolute;
  left: 0px;
  top: 50%;
  right: 0px;
  z-index: 0;
  display: block;
  width: 65px;
  height: 65px;
  margin-right: auto;
  margin-left: auto;
  border-radius: 3px;
  background-image: -webkit-linear-gradient(
    115deg,
    rgba(96, 109, 255, 0.62) 11%,
    rgba(96, 109, 255, 0.33) 48%
  );
  background-image: linear-gradient(
    335deg,
    rgba(96, 109, 255, 0.62) 11%,
    rgba(96, 109, 255, 0.33) 48%
  );
  -webkit-transform: translate(-18px, -57%);
  -ms-transform: translate(-18px, -57%);
  transform: translate(-18px, -57%);
}

.bottom-line-bar {
  position: relative;
  top: -230px;
  width: 25%;
  height: 200px;
  margin-left: 8%;
  clear: left;
  border-radius: 5px;
  background-image: -webkit-linear-gradient(
    265deg,
    #7782ff,
    rgba(99, 112, 255, 0) 86%
  );
  background-image: linear-gradient(185deg, #7782ff, rgba(99, 112, 255, 0) 86%);
}

.mountain-photo-parent {
  position: relative;
  left: -20px;
  top: 0px;
  width: 62%;
  padding: 25px;
  float: left;
  -webkit-perspective: 9999px;
  perspective: 9999px;
}

.mountain-photo__real-deal {
  position: relative;
  left: 0px;
  top: -70px;
  right: 0px;
  display: block;
  overflow: hidden;
  width: 80%;
  height: 100px;
  margin-right: auto;
  margin-left: auto;
  border-radius: 1px;
  background-image: -webkit-linear-gradient(
    135deg,
    rgba(232, 235, 255, 0.9),
    #b4baff
  );
  background-image: linear-gradient(315deg, rgba(232, 235, 255, 0.9), #b4baff);
  box-shadow: 29px 29px 0 6px rgba(107, 119, 255, 0.8);
}

.mountain-photo__real-deal.small {
  top: 30px;
  width: 90%;
  height: 60px;
  float: left;
  clear: left;
  box-shadow: none;
  opacity: 0.51;
}

.mountain-photo__real-deal.small.no-mountains {
  top: 50px;
  opacity: 0.21;
}

.mountain {
  position: relative;
  left: -25px;
  top: 65px;
  right: 0px;
  display: block;
  width: 70%;
  height: 80%;
  margin-right: auto;
  margin-left: auto;
  border-radius: 5px;
  background-image: -webkit-linear-gradient(270deg, #dee2ff, #b6bdff);
  background-image: linear-gradient(180deg, #dee2ff, #b6bdff);
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}

.mountain._2 {
  position: absolute;
  left: 25px;
  top: 58px;
  right: 0px;
  width: 90%;
  height: 110%;
  background-image: -webkit-linear-gradient(
    0deg,
    hsla(0, 0%, 100%, 0.7),
    rgba(182, 189, 255, 0.66) 51%
  );
  background-image: linear-gradient(
    90deg,
    hsla(0, 0%, 100%, 0.7),
    rgba(182, 189, 255, 0.66) 51%
  );
}

.mountain.shrunked {
  left: -6px;
  top: 31px;
}

.mountain.shrunked._2 {
  left: 25px;
  top: 30px;
  right: 0px;
}

.left-strip {
  position: absolute;
  left: 0px;
  top: 22px;
  z-index: 0;
  width: 38%;
  height: 100%;
  background-image: -webkit-linear-gradient(
    270deg,
    #9aa3ff,
    rgba(67, 83, 255, 0.07) 37%
  );
  background-image: linear-gradient(
    180deg,
    #9aa3ff,
    rgba(67, 83, 255, 0.07) 37%
  );
}

.left-strip.dark {
  background-image: -webkit-linear-gradient(
    270deg,
    #9aa3ff,
    rgba(67, 83, 255, 0) 44%
  );
  background-image: linear-gradient(180deg, #9aa3ff, rgba(67, 83, 255, 0) 44%);
}

.tri-parent {
  position: relative;
  left: 0px;
  top: -50px;
  right: 0px;
  width: 62%;
  padding: 30px;
  float: left;
  -webkit-perspective: 9999px;
  perspective: 9999px;
}

.column {
  position: relative;
  z-index: 10;
  width: 29.11%;
  margin-right: 1.11%;
  margin-left: 3.11%;
  padding: 12px;
  float: left;
  border-radius: 5px;
  background-image: -webkit-linear-gradient(315deg, #c0c5ff, #adb3ff);
  background-image: linear-gradient(135deg, #c0c5ff, #adb3ff);
  box-shadow: 11px 11px 0 0 #5e6bff;
}

.circle {
  position: relative;
  display: block;
  width: 20px;
  height: 20px;
  margin-right: auto;
  margin-left: auto;
  border: 2px solid #fff;
  border-radius: 100%;
}

.string-block {
  position: relative;
  top: 30px;
  width: 30%;
  float: left;
}

.square {
  position: relative;
  left: 0px;
  top: 0px;
  right: 0px;
  display: block;
  width: 25px;
  height: 25px;
  margin-right: auto;
  margin-left: auto;
  border-radius: 1px;
  background-color: #d9ddff;
  box-shadow: 11px 11px 0 -1px #5b69ff;
}

.square._2 {
  top: 60px;
  z-index: 1;
}

.square._3 {
  top: -10px;
}

.connector-bar {
  position: absolute;
  left: 0px;
  top: 22px;
  right: 0px;
  display: block;
  width: 2px;
  height: 25px;
  margin-right: auto;
  margin-left: auto;
  background-color: #d9ddff;
  box-shadow: 11px 11px 0 0 #5b69ff;
}

.arrow-line {
  position: absolute;
  left: 0px;
  right: 0px;
  bottom: 54px;
  display: block;
  width: 2px;
  height: 42px;
  margin-right: auto;
  margin-left: auto;
  background-color: #fff;
}

.arrow-line-small {
  position: absolute;
  left: -4px;
  right: 0px;
  bottom: 0px;
  width: 2px;
  height: 10px;
  background-color: #fff;
  -webkit-transform: rotate(-45deg);
  -ms-transform: rotate(-45deg);
  transform: rotate(-45deg);
}

.arrow-line-small.v2 {
  left: 4px;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}

.circle-tower {
  position: absolute;
  left: 0%;
  top: -66px;
  width: 80px;
  height: 80px;
  -webkit-perspective: 9999px;
  perspective: 9999px;
}

.circle-top {
  position: absolute;
  left: -8px;
  top: -4px;
  right: 0px;
  z-index: 5;
  display: block;
  width: 40px;
  height: 40px;
  margin-right: auto;
  margin-left: auto;
  border-radius: 100%;
  background-color: rgba(213, 216, 255, 0.8);
  background-image: -webkit-linear-gradient(
    135deg,
    hsla(0, 0%, 100%, 0.22),
    hsla(0, 0%, 100%, 0)
  );
  background-image: linear-gradient(
    315deg,
    hsla(0, 0%, 100%, 0.22),
    hsla(0, 0%, 100%, 0)
  );
  -webkit-transform: translate3d(0px, 0px, 10px);
  transform: translate3d(0px, 0px, 10px);
}

.circle-top._2 {
  left: 25px;
  top: 10px;
  right: 0px;
  z-index: 4;
  -webkit-transform: translate3d(0px, 0px, 10px);
  transform: translate3d(0px, 0px, 10px);
}

.circle-top._3 {
  left: 47px;
  top: 23px;
  z-index: 3;
  background-color: transparent;
  background-image: -webkit-linear-gradient(
    270deg,
    #5d6bff,
    hsla(0, 0%, 100%, 0.76)
  );
  background-image: linear-gradient(180deg, #5d6bff, hsla(0, 0%, 100%, 0.76));
  box-shadow: 23px 19px 0 0 rgba(67, 83, 255, 0.26);
  -webkit-transform: translate(0px, 0px);
  -ms-transform: translate(0px, 0px);
  transform: translate(0px, 0px);
}

.overflow-hidden {
  position: absolute;
  left: 0px;
  top: 0px;
  right: 0px;
  overflow: hidden;
  width: 100%;
  height: 100%;
}

.open-this {
  position: fixed;
  right: 11px;
  bottom: 50px;
  padding: 5px 10px;
  border: 2px solid #fff;
  border-radius: 5px;
  font-family: "Open Sans", sans-serif;
  color: #fff;
  text-decoration: none;
}

.twitter {
  position: fixed;
  right: 10px;
  bottom: 85px;
  width: 42px;
  height: 42px;
  background-image: url("../images/twitter.svg");
  background-position: 50% 50%;
  background-size: 25px;
  background-repeat: no-repeat;
}

.circle-link {
  position: fixed;
  right: 103px;
  bottom: 92px;
  width: 42px;
  height: 42px;
  border-radius: 100%;
  background-image: -webkit-linear-gradient(
    315deg,
    #07091f,
    rgba(93, 107, 255, 0.64) 88%
  );
  background-image: linear-gradient(
    135deg,
    #07091f,
    rgba(93, 107, 255, 0.64) 88%
  );
  box-shadow: inset 0 0 0 2px hsla(0, 0%, 100%, 0.3);
  -webkit-transition: box-shadow 350ms ease;
  transition: box-shadow 350ms ease;
}

.circle-link:hover {
  box-shadow: inset 0 0 0 2px #fff;
}

.circle-link.w--current {
  box-shadow: inset 0 0 0 2px #fff;
}

.circle-link.light {
  right: 52px;
  width: 42px;
  background-image: -webkit-linear-gradient(315deg, #4353ff 27%, #b4baff);
  background-image: linear-gradient(135deg, #4353ff 27%, #b4baff);
}

.circle-link.light.w--current {
  box-shadow: inset 0 0 0 2px #fff;
}

html.w-mod-js *[data-ix="column-hover"] {
  opacity: 0;
}

html.w-mod-js *[data-ix="column-hover-2"] {
  opacity: 0;
}

html.w-mod-js *[data-ix="column-hover-3"] {
  opacity: 0;
}

html.w-mod-js *[data-ix="hovering-on-load-string-block"] {
  opacity: 0;
}

html.w-mod-js *[data-ix="loading-line-animation"] {
  width: 0px;
}

html.w-mod-js *[data-ix="loading-line-animation-2"] {
  width: 0px;
}

html.w-mod-js *[data-ix="loading-line-animation-3"] {
  width: 0px;
}

html.w-mod-js *[data-ix="loading-line-animation-6-long"] {
  width: 0px;
}

html.w-mod-js *[data-ix="loading-line-animation-4-shortened"] {
  width: 0px;
}

html.w-mod-js *[data-ix="loading-line-animation-5"] {
  width: 0px;
}

html.w-mod-js *[data-ix="loading-line-animation-6shorted"] {
  width: 0px;
}

html.w-mod-js *[data-ix="mountain-slide-in"] {
  -webkit-transform: translate(140px, 0px) rotate(45deg);
  -ms-transform: translate(140px, 0px) rotate(45deg);
  transform: translate(140px, 0px) rotate(45deg);
}

html.w-mod-js *[data-ix="mountain-slide-in-from-left"] {
  -webkit-transform: translate(-100px, 0px) rotate(45deg);
  -ms-transform: translate(-100px, 0px) rotate(45deg);
  transform: translate(-100px, 0px) rotate(45deg);
}

html.w-mod-js *[data-ix="pop-in"] {
  opacity: 0;
  -webkit-transform: scale(0.8, 0.8);
  -ms-transform: scale(0.8, 0.8);
  transform: scale(0.8, 0.8);
}

html.w-mod-js *[data-ix="pop-in-2"] {
  opacity: 0;
  -webkit-transform: scale(0.8, 0.8);
  -ms-transform: scale(0.8, 0.8);
  transform: scale(0.8, 0.8);
}

html.w-mod-js *[data-ix="pop-in-3"] {
  opacity: 0;
  -webkit-transform: scale(0.8, 0.8);
  -ms-transform: scale(0.8, 0.8);
  transform: scale(0.8, 0.8);
}

html.w-mod-js *[data-ix="play-icon-on-load"] {
  -webkit-transform: translate(-100px, -50%);
  -ms-transform: translate(-100px, -50%);
  transform: translate(-100px, -50%);
}

html.w-mod-js *[data-ix="mountain-block-on-load"] {
  opacity: 0;
  height: 0px;
}

html.w-mod-js *[data-ix="arrow-load"] {
  opacity: 0;
}

@media (max-width: 991px) {
  .fs {
    overflow: hidden;
  }
  .hold-illustration {
    width: 90%;
  }
  .background {
    height: 63vw;
  }
  .open-this {
    display: none;
  }
  .twitter {
    bottom: 40px;
  }
  .circle-link {
    bottom: 47px;
  }
}

@media (max-width: 767px) {
  .fs {
    min-height: 100vh;
  }
  .hold-illustration {
    position: relative;
    top: 50%;
    width: 100%;
  }
  .text-like-box.bottom {
    top: -280px;
  }
  .bottom-line-bar {
    top: -280px;
  }
  .circle {
    width: 13px;
    height: 13px;
  }
  .circle-tower {
    left: -3%;
    top: -56px;
  }
  .circle-top {
    width: 30px;
    height: 30px;
  }
  .circle-top._3 {
    left: 52px;
  }
}

@media (max-width: 479px) {
  .hold-illustration {
    top: 0%;
    -webkit-transform: rotateX(55deg) rotateY(-3deg) rotateZ(49deg) scale(0.7);
    transform: rotateX(55deg) rotateY(-3deg) rotateZ(49deg) scale(0.7);
  }
  .background {
    width: 100%;
    height: 107vw;
  }
}

</style>
<div class="fs">
    <div class="hold-illustration w-preserve-3d">
      <div class="background w-clearfix">
        <div class="left-strip"></div>
        <div class="top-bar">
          <div class="dot"></div>
          <div class="_2 dot"></div>
          <div class="_3 dot"></div>
        </div>
        <div class="text-like-box w-clearfix">
          <div class="text" data-ix="arrow-load">A</div>
          <div class="straight-line" data-ix="arrow-load"></div>
          <div class="straight-line-full" data-ix="loading-line-animation"></div>
          <div class="straight-line-full" data-ix="loading-line-animation-2"></div>
          <div class="straight-line-full" data-ix="loading-line-animation-3"></div>
          <div class="straight-line-full" data-ix="loading-line-animation-6-long"></div>
          <div class="straight-line-full" data-ix="loading-line-animation-5"></div>
          <div class="shortened straight-line-full" data-ix="loading-line-animation-6shorted"></div>
        </div>
        <div class="mountain-photo-parent">
          <div class="mountain-photo__real-deal" data-ix="arrow-load">
            <div class="mountain" data-ix="mountain-slide-in-from-left"></div>
            <div class="_2 mountain" data-ix="mountain-slide-in"></div>
          </div>
          <div class="arrow-line" data-ix="arrow-load">
            <div class="arrow-line-small"></div>
            <div class="arrow-line-small v2"></div>
          </div>
        </div>
        <div class="square-tower" data-ix="arrow-load">
          <div class="play-box w-preserve-3d" data-ix="tower-hover-animation">
            <div class="play-box__top-bar"></div>
            <a class="overflow-hidden w-inline-block w-lightbox" href="#">
              <div class="play-box__play-icon" data-ix="play-icon-on-load"></div>

            </a>
          </div>
          <div class="play-box__square-1 w-preserve-3d"></div>
          <div class="play-box__square-2 w-preserve-3d"></div>
          <div class="play-box__square-bottom"></div>
        </div>
        <div class="tri-parent w-clearfix">
          <div class="column" data-ix="column-hover">
            <div class="circle" data-ix="pop-in"></div>
            <div class="straight-line-full" data-ix="loading-line-animation"></div>
            <div class="straight-line-full" data-ix="loading-line-animation-2"></div>
            <div class="straight-line-full" data-ix="loading-line-animation-3"></div>
          </div>
          <div class="column" data-ix="column-hover-2">
            <div class="circle" data-ix="pop-in-2"></div>
            <div class="straight-line-full" data-ix="loading-line-animation">
              <div class="straight-line-full"></div>
            </div>
            <div class="straight-line-full" data-ix="loading-line-animation-2">
              <div class="straight-line-full"></div>
            </div>
            <div class="straight-line-full" data-ix="loading-line-animation-3">
              <div class="straight-line-full"></div>
            </div>
          </div>
          <div class="column" data-ix="column-hover-3">
            <div class="circle" data-ix="pop-in-3"></div>
            <div class="straight-line-full" data-ix="loading-line-animation">
              <div class="straight-line-full"></div>
            </div>
            <div class="straight-line-full" data-ix="loading-line-animation-2">
              <div class="straight-line-full"></div>
            </div>
            <div class="straight-line-full" data-ix="loading-line-animation-3">
              <div class="straight-line-full"></div>
            </div>
          </div>
          <div class="string-block" data-ix="hovering-on-load-string-block">
            <div class="square">
              <div class="connector-bar"></div>
            </div>
            <div class="_2 square"></div>
            <div class="_3 square">
              <div class="connector-bar"></div>
            </div>
          </div>
          <div class="bottom text-like-box v2 w-clearfix" data-ix="column-hover">
            <div class="straight-line-full" data-ix="loading-line-animation"></div>
            <div class="straight-line-full" data-ix="loading-line-animation-2"></div>
            <div class="straight-line-full" data-ix="loading-line-animation-3"></div>
            <div class="straight-line-full" data-ix="loading-line-animation-6-long"></div>
            <div class="shortened straight-line-full" data-ix="loading-line-animation-4-shortened"></div>
            <div class="mountain-photo__real-deal small" data-ix="column-hover">
              <div class="mountain shrunked" data-ix="mountain-slide-in-from-left"></div>
              <div class="_2 mountain shrunked" data-ix="mountain-slide-in"></div>
            </div>
            <div class="mountain-photo__real-deal no-mountains small" data-ix="column-hover"></div>
          </div>
        </div>
        <div class="bottom text-like-box" data-ix="column-hover">
          <div class="straight-line-full" data-ix="loading-line-animation"></div>
          <div class="straight-line-full" data-ix="loading-line-animation-2"></div>
          <div class="straight-line-full" data-ix="loading-line-animation-3"></div>
          <div class="shortened straight-line-full" data-ix="loading-line-animation-4-shortened"></div>
        </div>
        <div class="bottom-line-bar" data-ix="column-hover-3"></div>
        <div class="circle-tower" data-ix="column-hover">
          <div class="circle-top w-preserve-3d"></div>
          <div class="_2 circle-top w-preserve-3d"></div>
          <div class="_3 circle-top"></div>
        </div>
      </div>
    </div><div class="w-embed w-script">
      <a href="" class="twitter" onclick="return tweet()"></a>
      <script type="text/javascript">
        function tweet() {
            var u = location.href;
            var t="@waldobroodryk rebuilt and animated the @webflowapp homepage illustration in Webflow #MadeInWebflow";
            window.open('https://twitter.com/share?url='+encodeURIComponent(u)+'&text='+encodeURIComponent(t),'twitsharer','toolbar=0,status=0,width=626,height=436');
            return false;
        }
      </script>
    </div>

  </div>
  </script></div></div>
<script src="https://daks2k3a4ib2z.cloudfront.net/5893e1dff46cfc9a7c4912dd/js/webflow.0c48df602.js" type="text/javascript"></script>
>>>>>>> 9b9fd46856e371a23c34272d4ebc49b20d8b5747

@endsection
