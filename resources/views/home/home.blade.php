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
        @import url("https://fonts.googleapis.com/css?family=Oswald:300,400,500,700");
        @import url("https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800");

        .gr-1 {
            background: linear-gradient(170deg, #01E4F8 0%, #1D3EDE 100%);
        }

        .gr-2 {
            background: linear-gradient(170deg, #B4EC51 0%, #429321 100%);
        }

        .gr-3 {
            background: linear-gradient(170deg, #C86DD7 0%, #3023AE 100%);
        }

        * {
            transition: 0.5s;
        }

        .h-100 {
            height: 100vh !important;
        }

        .align-middle {
            position: relative;
            top: 50%;
            transform: translateY(-50%);
        }

        .column {
            margin-top: 18rem;
            padding-left: 3rem;
        }

        .column:hover {
            padding-left: 0;
        }

        .column:hover .card .txt {
            margin-left: 1rem;
        }

        .column:hover .card .txt h1,
        .column:hover .card .txt p {
            color: white;
            opacity: 1;
        }

        .column:hover a {
            color: white;
        }

        .column:hover a:after {
            width: 10%;
        }

        .card {
            min-height: 170px;
            margin: 0;
            padding: 1.7rem 1.2rem;
            border: none;
            border-radius: 0;
            color: black;
            letter-spacing: 0.05rem;
            font-family: "Oswald", sans-serif;
            box-shadow: 0 0 21px rgba(0, 0, 0, 0.27);
        }

        .card .txt {
            margin-left: -3rem;
            z-index: 1;
        }

        .card .txt h1 {
            font-size: 1.5rem;
            font-weight: 750;
            text-transform: uppercase;
        }

        .card .txt p {
            font-size: 0.7rem;
            font-family: "Open Sans", sans-serif;
            letter-spacing: 0rem;
            margin-top: 35px;
            opacity: 0;
            color: white;
        }

        .card a {
            z-index: 3;
            font-size: 0.7rem;
            color: black;
            margin-left: 1rem;
            position: relative;
            bottom: -0.5rem;
            text-transform: uppercase;
        }

        .card a:after {
            content: "";
            display: inline-block;
            height: 0.5em;
            width: 0;
            margin-right: -100%;
            margin-left: 10px;
            border-top: 1px solid white ;
            transition: 0.5s;
        }

        .card .ico-card {
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .card i {
            position: relative;
            right: -50%;
            top: 60%;
            font-size: 12rem;
            line-height: 0;
            opacity: 0.2;
            color: white;
            z-index: 0;
        }

        .btnslide {

            height: 280px;
            background: linear-gradient(115deg, #93EFED 0%, #44AEC2 25%, #4262C5 50%, #362999 100%);

            /* background-attachment: fixed; */
        }

        @media only screen and (max-width: 600px) {
            .btnslide {

                height: 500px;
                background: linear-gradient(145deg, #93EFED 0%, #44AEC2 25%, #4262C5 50%, #362999 100%);

                /* background-attachment: fixed; */
            }
            .column {
            margin-top: 25rem;
            margin-bottom: -23rem;
            padding-left: -7rem;
        }
        .column:hover {
            padding-left: 1rem;
        }

        .column:hover .card .txt {
            margin-left: 1rem;
        }

        .column:hover .card .txt h1,
        .column:hover .card .txt p {
            color: white;
            opacity: 1;
        }

        .column:hover a {
            color: white;
        }

        .column:hover a:after {
            width: 10%;
        }
        .card {
            min-height: 60px;
            margin: 0;
            padding: 1.7rem 1.2rem;
            border: none;
            border-radius: 0;
            color: black;
            letter-spacing: 0.05rem;
            font-family: "Oswald", sans-serif;
            box-shadow: 0 0 21px rgba(0, 0, 0, 0.27);
        }

        .card .txt {
            margin-left: -3rem;
            z-index: 1;
        }

        .card .txt h1 {
            font-size: 1.2rem;
            font-weight: 600;
            text-transform: uppercase;
        }

        .card .txt p {
            font-size: 0.7rem;
            font-family: "Open Sans", sans-serif;
            letter-spacing: 0rem;
            margin-top: 35px;
            opacity: 0;
            color: white;
        }

        .card a {
            z-index: 3;
            font-size: 0.7rem;
            color: black;
            margin-left: 1rem;
            position: relative;
            bottom: -0.5rem;
            text-transform: uppercase;
        }

        .card a:after {
            content: "";
            display: inline-block;
            height: 0.5em;
            width: 0;
            margin-right: -100%;
            margin-left: 10px;
            border-top: 1px solid white ;
            transition: 0.5s;
        }

        .card .ico-card {
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .card i {
            position: relative;
            right: -50%;
            top: 60%;
            font-size: 12rem;
            line-height: 0;
            opacity: 0.2;
            color: white;
            z-index: 0;
        }

        }
        @media only screen and (max-width: 1200px) {
            .btnslide {

                height: 450px;
                background: linear-gradient(145deg, #93EFED 0%, #44AEC2 25%, #4262C5 50%, #362999 100%);

                /* background-attachment: fixed; */
            }
            .column {
            margin-top: 17rem;
            margin-bottom: -15rem;
            padding-left: -3rem;
            flex-direction: row;
        }
        .column:hover {
            padding-left: 1rem;
        }

        .column:hover .card .txt {
            margin-left: 1rem;
        }

        .column:hover .card .txt h1,
        .column:hover .card .txt p {
            color: white;
            opacity: 1;
        }

        .column:hover a {
            color: white;
        }

        .column:hover a:after {
            width: 10%;
        }
        .card {
            min-height: 60px;
            margin-right: 80px;
            padding: 1.0rem -0.8rem;
            /* border: ; */
            border-radius: 0;
            color: black;
            border: white;
            text-shadow: 4px 4px white;
            letter-spacing: 0.05rem;
            font-family: "Oswald", sans-serif;
            box-shadow: 0 0 21px rgba(0, 0, 0, 0.27);
        }

        .card .txt {
            margin-left: -3rem;
            z-index: 1;
        }

        .card .txt h1 {
            font-size: 1.2rem;
            font-weight: 600;
            text-transform: uppercase;
        }

        .card .txt p {
            font-size: 0.7rem;
            font-family: "Open Sans", sans-serif;
            letter-spacing: 0rem;
            margin-top: 35px;
            opacity: 0;
            color: white;
        }

        .card a {
            z-index: 3;
            font-size: 0.7rem;
            color: black;
            margin-left: 1rem;
            position: relative;
            bottom: -0.5rem;
            text-transform: uppercase;
        }

        .card a:after {
            content: "";
            display: inline-block;
            height: 0.5em;
            width: 0;
            margin-right: -100%;
            margin-left: 10px;
            border-top: 1px solid white ;
            transition: 0.5s;
        }

        .card .ico-card {
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .card i {
            position: relative;
            right: -50%;
            top: 60%;
            font-size: 12rem;
            line-height: 0;
            opacity: 0.2;
            color: white;
            z-index: 0;
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
    <div class=" btnslide">
        <div class="container" style="">
            <div class="row align-middle">
                <div class="col-md-6 col-lg-4 column">
                    <div class="card gr-1">
                        <div class="txt">
                            <h1>NÔNG NGHIỆP </br>
                                & CÁC LĨNH VỰC LIÊN QUAN</h1>
                            {{-- <p>Visual communication and problem-solving</p> --}}
                        </div>
                        <a href="#">more</a>
                        <div class="ico-card">
                            <i class="fa fa-leaf"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 column">
                    <div class="card gr-2">
                        <div class="txt">
                            <h1>CÔNG NGHIỆP </br>
                                & CÁC LĨNH VỰC LIÊN QUAN</h1>
                            {{-- <p>How design is implemented on the web.</p> --}}
                        </div>
                        <a href="#">more</a>
                        <div class="ico-card">
                            <i class="fa fa-cog"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 column">
                    <div class="card gr-3">
                        <div class="txt">
                            <h1>THƯƠNG MẠI & DỊCH VỤ </br>& CÁC LĨNH VỰC LIÊN QUAN</h1>
                            {{-- <p>User Interface and User Experience Design.</p> --}}
                        </div>
                        <a href="#">more</a>
                        <div class="ico-card">
                            <i class="fa fa-building"></i>
                        </div>
                    </div>
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
                            @foreach ($tinmoi as $news)
                                <div class="blog-box row">
                                    <div class="col-md-4">
                                        <div class="post-media">
                                            <a href="{{ URL::to('tin/' . $news->IdTin) }}" title="">
                                                <img src="{{ asset('img/AnhTinhTuc/' . $news->HinhAnh) }}" alt=""
                                                    class="img-fluid">
                                                <div class="hovereffect"></div>
                                            </a>
                                        </div><!-- end media -->
                                    </div><!-- end col -->

                                    <div class="blog-meta big-meta col-md-8">
                                        <h4><a href="{{ URL::to('tin/' . $news->IdTin) }}"
                                                title="">{{ $news->TieuDe }}</a></h4>
                                        <p>{{ $news->TomTat }}</p>

                                        <small class="firstsmall"><a class="bg-orange"
                                                href="@if ($news->LinhVuc_id == 5) {{ URL::to('tintuc/NongNghiep') }}
                                        @else
                                        @if ($news->LinhVuc_id == 6)
                                            {{ URL::to('tintuc/CongNghiep') }}
                                        @else
                                        @if ($news->LinhVuc_id == 7)
                                        {{ URL::to('tintuc/TMDV') }}
                                        @else @endif
                                        @endif
                                        @endif"
                                                title="">{{ $news->TenLinhVuc }}</a></small>
                                        <small><a href="tech-single.html"
                                                title="">{{ $news->updated_at }}</a></small>
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

                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                    <a href="#" class="social-button twitter-button">
                                        <i class="fa fa-twitter"></i>

                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                    <a href="#" class="social-button google-button">
                                        <i class="fa fa-google-plus"></i>

                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                    <a href="#" class="social-button youtube-button">
                                        <i class="fa fa-youtube"></i>

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
