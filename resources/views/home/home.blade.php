@extends('home.frontend')
@section('title')
    Chuyển đổi số tỉnh An Giang
@endsection
@section('link')
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('trangtin/tech-blog/tech-blog/css/bootstrap.css') }}" rel="stylesheet">

    <!-- FontAwesome Icons core CSS -->
    <link href="{{ asset('trangtin/tech-blog/tech-blog/css/font-awesome.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('trangtin/tech-blog/tech-blog/style.css') }}" rel="stylesheet">

    <!-- Responsive styles for this template -->
    <link href="{{ asset('trangtin/tech-blog/tech-blog/css/responsive.css') }}" rel="stylesheet">

    <!-- Colors for this template -->
    <link href="{{ asset('trangtin/tech-blog/tech-blog/css/colors.css') }}" rel="stylesheet">

    <!-- Version Tech CSS for this template -->
    <link href="{{ asset('trangtin/tech-blog/tech-blog/css/version/tech.css') }}" rel="stylesheet">
@endsection
@section('content')
    <style>
@media only screen and (max-width: 600px) {
    .btna, .btn2 {
  width: 100px;
  height: 40px;
  font-size: 15px;
  text-align: center;
  margin-top: 20px;
  line-height: 35px;
  color: rgba(255,255,255,0.9);
  border-radius: 45px;
  background: linear-gradient(-45deg, rgb(164, 190, 240), rgb(71, 71, 215), #00f, #0000b3);
  background-size: 400%;
  -webkit-animation: anime 15s linear infinite;
          /* animation: anime 5s linear infinite; */
}
.btnspan{
    font-family: 'Chivo Mono', monospace;
    font-weight: bold;
    color: rgba(255,255,255,0.9);
}
.col-sm{

    width: 120px;
}
.btn2 {
  position: absolute;
  margin-top: -70px;
  z-index: -1;
  filter: blur(30px);
  opacity: 0.8;
}
@-webkit-keyframes anime {
  0% {
    background-position: 0% 50%;
  }
  50% {
    background-position: 100% 50%;
  }
  100% {
    background-position: 0% 50%;
  }
}
@keyframes anime {
  0% {
    background-position: 0% 50%;
  }
  50% {
    background-position: 100% 50%;
  }
  100% {
    background-position: 0% 50%;
  }
}
.btnslide{
    height: 80px;
    background-image: url({{ asset('img/ChuyenDoiSo_Web_Top_Back.png') }})
}
    }

    /* Small devices (portrait tablets and large phones, 600px and up) */
    @media only screen and (min-width: 600px) {
        .btna, .btn2 {
  width: 150px;
  height: 40px;
  font-size: 15px;
  text-align: center;
  margin-top: 20px;
  line-height: 35px;
  color: rgba(255,255,255,0.9);
  border-radius: 45px;
  background: linear-gradient(-45deg, rgb(164, 190, 240), rgb(71, 71, 215), #00f, #0000b3);
  background-size: 400%;
  -webkit-animation: anime 15s linear infinite;
          /* animation: anime 5s linear infinite; */
}
.btnspan{
    font-family: 'Chivo Mono', monospace;
    font-weight: bold;
    color: rgba(255,255,255,0.9);
}
.col-sm{
    width: 60px;
}
.btn2 {
  position: absolute;
  margin-top: -70px;
  z-index: -1;
  filter: blur(30px);
  opacity: 0.8;
}
@-webkit-keyframes anime {
  0% {
    background-position: 0% 50%;
  }
  50% {
    background-position: 100% 50%;
  }
  100% {
    background-position: 0% 50%;
  }
}
@keyframes anime {
  0% {
    background-position: 0% 50%;
  }
  50% {
    background-position: 100% 50%;
  }
  100% {
    background-position: 0% 50%;
  }
}
.btnslide{
    height: 80px;
    background-image: url({{ asset('img/ChuyenDoiSo_Web_Top_Back.png') }})
}

    }

    /* Medium devices (landscape tablets, 768px and up) */
    @media only screen and (min-width: 768px) {
        .btna, .btn2 {
  width: 200px;
  height: 60px;
  font-size: 20px;
  text-align: center;
  margin-top: 20px;
  line-height: 55px;
  color: rgba(255,255,255,0.9);
  border-radius: 45px;
  background: linear-gradient(-45deg, rgb(164, 190, 240), rgb(71, 71, 215), #00f, #0000b3);
  background-size: 400%;
  -webkit-animation: anime 15s linear infinite;
          /* animation: anime 5s linear infinite; */
}
.btnspan{
    font-family: 'Chivo Mono', monospace;
    font-weight: bold;
    color: rgba(255,255,255,0.9);
}
.col-sm{
    width: 100px;
}
.btn2 {
  position: absolute;
  margin-top: -70px;
  z-index: -1;
  filter: blur(30px);
  opacity: 0.8;
}
@-webkit-keyframes anime {
  0% {
    background-position: 0% 50%;
  }
  50% {
    background-position: 100% 50%;
  }
  100% {
    background-position: 0% 50%;
  }
}
@keyframes anime {
  0% {
    background-position: 0% 50%;
  }
  50% {
    background-position: 100% 50%;
  }
  100% {
    background-position: 0% 50%;
  }
}
.btnslide{
    height: 100px;
    background-image: url({{ asset('img/ChuyenDoiSo_Web_Top_Back.png') }})
}
    }

    /* Large devices (laptops/desktops, 992px and up) */
    @media only screen and (min-width: 992px) {
        .btna, .btn2 {
  width: 300px;
  height: 80px;
  font-size: 40px;
  text-align: center;
  margin-top: 20px;
  line-height: 70px;
  color: rgba(255,255,255,0.9);
  border-radius: 45px;
  background: linear-gradient(-45deg, rgb(164, 190, 240), rgb(71, 71, 215), #00f, #0000b3);
  background-size: 400%;
  -webkit-animation: anime 15s linear infinite;
          /* animation: anime 5s linear infinite; */
}
.btnspan{
    font-family: 'Chivo Mono', monospace;
    font-weight: bold;
    color: rgba(255,255,255,0.9);
}
.col-sm{
    width: 100px;
}
.btn2 {
  position: absolute;
  margin-top: -70px;
  z-index: -1;
  filter: blur(30px);
  opacity: 0.8;
}
@-webkit-keyframes anime {
  0% {
    background-position: 0% 50%;
  }
  50% {
    background-position: 100% 50%;
  }
  100% {
    background-position: 0% 50%;
  }
}
@keyframes anime {
  0% {
    background-position: 0% 50%;
  }
  50% {
    background-position: 100% 50%;
  }
  100% {
    background-position: 0% 50%;
  }
}
.btnslide{
    height: 120px;
    background-image: url({{ asset('img/ChuyenDoiSo_Web_Top_Back.png') }})
}
    }

    /* Extra large devices (large laptops and desktops, 1200px and up) */
    @media only screen and (min-width: 1200px) {
         .btna, .btn2 {
  width: 300px;
  height: 80px;
  font-size: 40px;
  text-align: center;
  margin-top: 20px;
  line-height: 80px;
  color: rgba(255,255,255,0.9);
  border-radius: 50px;
  background: linear-gradient(-45deg, rgb(164, 190, 240), rgb(71, 71, 215), #00f, #0000b3);
  background-size: 600%;
  -webkit-animation: anime 15s linear infinite;
          /* animation: anime 5s linear infinite; */
}
.btnspan{
    font-family: 'Chivo Mono', monospace;
    font-weight: bold;
    color: rgba(255,255,255,0.9);
}
.btn2 {
  position: absolute;
  margin-top: -70px;
  z-index: -1;
  filter: blur(30px);
  opacity: 0.8;
}
@-webkit-keyframes anime {
  0% {
    background-position: 0% 50%;
  }
  50% {
    background-position: 100% 50%;
  }
  100% {
    background-position: 0% 50%;
  }
}
@keyframes anime {
  0% {
    background-position: 0% 50%;
  }
  50% {
    background-position: 100% 50%;
  }
  100% {
    background-position: 0% 50%;
  }
}
.btnslide{
    height: 120px;
    background-image: url({{ asset('img/ChuyenDoiSo_Web_Top_Back.png') }})
}
    }

        .mySlides {
            display: none
        }

        .w3-left,
        .w3-right,
        .w3-badge {
            cursor: pointer
        }

        .w3-badge {
            height: 13px;
            width: 13px;
            padding: 0
        }

        /* @media only screen and (max-width: 600px) {
                            .img-btn{
                                width: 35%;
                            }
                } */

    </style>
    <div class="w3-content w3-display-container" style="max-width:100%">
    @foreach ($slides as $id => $slide)

            @if ($slide->Status == 1)
                <img class="mySlides" src="{{ asset('slide/' . $slide->Link) }}" style="width:100%">
            @endif
    @endforeach
    <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">

        <div class="w3-left w3-hover-text-khaki" style="cursord:pointer;" onclick="plusDivs(-1)">&#10094;</div>
        <div class="w3-right w3-hover-text-khaki" style="cursor:pointer;" onclick="plusDivs(1)">&#10095;</div>
        <span class="w3-badge demo w3-border w3-transparent w3-hover-white"
            style="cursor:pointer ;height:13px;width:13px;padding:0" onclick="currentDiv(1)"></span>
        <span class="w3-badge demo w3-border w3-transparent w3-hover-white" style="cursor:pointer"
            onclick="currentDiv(2)"></span>
        <span class="w3-badge demo w3-border w3-transparent w3-hover-white" style="cursor:pointer"
            onclick="currentDiv(3)"></span>
    </div>
</div>
    <div  class=" btnslide"  >
        <div class=" container">
            <div class="row">
                <div class="col-sm" style="margin-left: 1%; ">
                        <div class="btna"><a href="{{ URL::to('/tintuc/NongNghiep') }}" ><span class="btnspan">Nông Nghiệp</span> </a></div>

                        {{-- <div class="btn2"></div> --}}
                </div>

                <div class="col-sm" style="margin-left: 1%; ">
                    <div class="btna"><a href="{{ URL::to('/tintuc/NongNghiep') }}" ><span class="btnspan">Công Nghiệp</span> </a></div>

                    {{-- <div class="btn2"></div> --}}
                </div>
                <div class="col-sm" style="margin-left: 1%; ">
                    <div class="btna"><a href="{{ URL::to('/tintuc/NongNghiep') }}" ><span class="btnspan">Thương Mại</span> </a></div>

                    {{-- <div class="btn2"></div> --}}
                </div>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                        <div class="page-wrapper">
                            <div class="blog-top clearfix">
                                <h4 class="pull-left">Tất cả tin tức <a href="#"><i class="fa fa-rss"></i></a>
                                </h4>
                            </div><!-- end blog-top -->
                            <div class="blog-list clearfix">
                                @foreach ( $tinmoi as $news)
                                <div class="blog-box row">
                                    <div class="col-md-4">
                                        <div class="post-media">
                                            <a href="{{ URL::to('tin/'.$news->IdTin) }}" title="">
                                                <img src="{{ asset('img/AnhTinhTuc/'.$news->HinhAnh) }}" alt="" class="img-fluid">
                                                <div class="hovereffect"></div>
                                            </a>
                                        </div><!-- end media -->
                                    </div><!-- end col -->

                                    <div class="blog-meta big-meta col-md-8">
                                        <h4><a href="{{ URL::to('tin/'.$news->IdTin) }}" title="">{{ $news->TieuDe }}</a></h4>
                                        <p>{{ $news->TomTat }}</p>

                                        <small class="firstsmall"><a class="bg-orange" href="@if ($news->LinhVuc_id == 5)
                                            {{ URL::to('tintuc/NongNghiep') }}
                                        @else
                                        @if ($news->LinhVuc_id == 6)
                                            {{ URL::to('tintuc/CongNghiep') }}
                                        @else
                                        @if ($news->LinhVuc_id == 7)
                                        {{ URL::to('tintuc/TMDV') }}
                                        @else

                                        @endif
                                        @endif
                                        @endif"     title="">{{ $news->TenLinhVuc }}</a></small>
                                        <small><a href="tech-single.html" title="">{{ $news->updated_at }}</a></small>
                                        <small><a href="tech-author.html" title="">by {{ $news->TacGia }}</a></small>
                                        <small><a href="tech-single.html" title=""><i class="fa fa-eye"></i>
                                            {{ $news->LuotXem }}</a></small>
                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->
                                <hr class="invis">
                                @endforeach

                            </div><!-- end blog-list -->
                        </div><!-- end page-wrapper -->

                    <hr class="invis">

                    <div class="row">
                        <div class="col-md-12">
                            <nav aria-label="Page navigation">


                                    {{ $tinmoi->appends(Request::all())->links() }}

                            </nav>
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div> <!-- end col -->

                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                    <div class="sidebar">
                        <div class="widget">
                            <div class="banner-spot clearfix">
                                <div class="banner-img">
                                    <img src="upload/banner_07.jpg" alt="" class="img-fluid">
                                </div><!-- end banner-img -->
                            </div><!-- end banner -->
                        </div><!-- end widget -->


                        <div class="widget">
                            <h2 class="widget-title">Tin phổ biến</h2>
                            <div class="blog-list-widget">
                                <div class="list-group">
                                    <a href="tech-single.html"
                                        class="list-group-item list-group-item-action flex-column align-items-start">
                                        <div class="w-100 justify-content-between">
                                            <img src="upload/tech_blog_08.jpg" alt=""
                                                class="img-fluid float-left">
                                            <h5 class="mb-1">5 Beautiful buildings you need..</h5>
                                            <small>12 Jan, 2016</small>
                                        </div>
                                    </a>

                                    <a href="tech-single.html"
                                        class="list-group-item list-group-item-action flex-column align-items-start">
                                        <div class="w-100 justify-content-between">
                                            <img src="upload/tech_blog_01.jpg" alt=""
                                                class="img-fluid float-left">
                                            <h5 class="mb-1">Let's make an introduction for..</h5>
                                            <small>11 Jan, 2016</small>
                                        </div>
                                    </a>

                                    <a href="tech-single.html"
                                        class="list-group-item list-group-item-action flex-column align-items-start">
                                        <div class="w-100 last-item justify-content-between">
                                            <img src="upload/tech_blog_03.jpg" alt=""
                                                class="img-fluid float-left">
                                            <h5 class="mb-1">Did you see the most beautiful..</h5>
                                            <small>07 Jan, 2016</small>
                                        </div>
                                    </a>
                                </div>
                            </div><!-- end blog-list -->
                        </div><!-- end widget -->



                        <div class="widget">
                            <h2 class="widget-title">Theo dõi chúng tôi tại</h2>

                            <div class="row text-center">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                    <a href="#" class="social-button facebook-button">
                                        <i class="fa fa-facebook"></i>
                                        <p>27k</p>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                    <a href="#" class="social-button twitter-button">
                                        <i class="fa fa-twitter"></i>
                                        <p>98k</p>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                    <a href="#" class="social-button google-button">
                                        <i class="fa fa-google-plus"></i>
                                        <p>17k</p>
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                    <a href="#" class="social-button youtube-button">
                                        <i class="fa fa-youtube"></i>
                                        <p>22k</p>
                                    </a>
                                </div>
                            </div>
                        </div><!-- end widget -->

                        <div class="widget">
                            <div class="banner-spot clearfix">
                                <div class="banner-img">
                                    <img src="upload/banner_03.jpg" alt="" class="img-fluid">
                                </div><!-- end banner-img -->
                            </div><!-- end banner -->
                        </div><!-- end widget -->
                    </div><!-- end sidebar -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section>


    <div> </div>
    <div> </div>
    <div> </div>
    <script>
        let slideIndex = 0;
        showSlides();

        function showSlides() {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("demo");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            setTimeout(showSlides, 2000); // Change image every 2 seconds
        }
    </script>
@endsection
