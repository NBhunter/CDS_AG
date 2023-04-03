@extends( 'home.frontend')
@section('title')
500 - Internal Server Error
@endsection
@section('link')

@endsection
@section('content')
<style>
    /*======================
        404 page
    =======================*/


    .page_404{ padding:40px 0; background:#fff; font-family: 'Arvo', serif;
    }

    .page_404  img{ width:100%;}

    .four_zero_four_bg{

     background-image: url(https://cdn.dribbble.com/users/285475/screenshots/2083086/dribbble_1.gif);
        height: 600px;
        background-position: center;
     }


     .four_zero_four_bg h1{
     font-size:80px;
     }

      .four_zero_four_bg h3{
                 font-size:80px;
                 }

                 .link_404{
        color: #fff!important;
        padding: 10px 20px;
        background: #39ac31;
        margin: 20px 0;
        display: inline-block;}
        .contant_box_404{ margin-top:-160px;}
        </style>
        {{-- code view --}}
        <section class="page_404">
            <div class="container">
                <div class="row">
                <div class="col-sm-12 ">
                <div class="col-sm-10 col-sm-offset-1  text-center" style="margin-left: 80px;">
                <div class="four_zero_four_bg">
                    <h1 class="text-center ">500</h1>


                </div>

                <div class="contant_box_404">
                <h3 class="h2">
                Internal Server Error
                </h3>

                <p>Phần xử lý hệ thống đã bị lỗi, đang trong quá trình khắc phục!</p>

                <a href="{{ URL::to('trangchu') }}" class="link_404" style="text-decoration:none;">Trở về trang chính</a>
            </div>
                </div>
                </div>
                </div>
            </div>
        </section>
@endsection
