<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

@yield('link')
  <!-- link root -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="icon" type="image/ico" href="{{asset('img/logo_ag.ico')}}"/>
    <title>@if ($title != null)
        {{ $title ." - ". config('app.name')}}
    @else
    @yield('title')
    @endif </title>
    <!-- boottrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<!-- hoverable dropdown -->
<style>
.nav-item:hover .item:hover{
  color:blue;
}
.nav-item .item{
  color: black;

}
.nav-link{
  color: black;
}
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}
.item {
  color: black;
  padding: 12px 16px;
  text-decoration:unset;
  display: block;
}
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration:unset;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;  color:blue;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg sticky-top navbar-light bg-light"style="font-family:Roboto; font-weight:bold; font-size: auto;">
  <div class="container-fluid">
    <a class="navbar-brand" style="width: 5%;" href="#"><img src="{{asset('img/logo_ag.png')}}" alt="" width="100%" height="auto"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="item " aria-current="page"  href="{{ URL::to('trangchu') }}" >TRANG CHỦ</a>
        </li>
        <li class="nav-item dropdown ">

        <li class="nav-item">
          <a class="item " href="{{ URL::to('tintuc') }}">TIN TỨC</a>
        </li>

  <div class="nav-item">
          <a class="item " href="#">THƯ VIỆN</a>
</div>

  <li class="nav-item">
          <a class="item " href="{{ URL::to('dnviews') }}">TRANG ĐÁNH GIÁ</a>
        </li>
        <li class="nav-item">
            <a class="item " href="{{ URL::to('xemhoso') }}">HỒ SƠ DOANH NGHIỆP</a>
          </li>
        <li class="nav-item">
            <a class="item " href="{{ URL::to('dangky') }}">ĐĂNG KÝ</a>
          </li>

<!-- </div> -->
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Tìm kiếm thông tin" aria-label="Search" style="width:300px;">
        <button class="btn btn-outline-primary" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
@yield('content')
</body>

<footer class=" text-center text-white"  style="background-image: url({{asset('img/footer_br-01.jpg')}}) ;background-repeat: no-repeat;   background-position: center;  background-size: cover; width:100%;" >
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #3b5998;"
        href="#!"
        role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #55acee;"
        href="#!"
        role="button"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #dd4b39;"
        href="#!"
        role="button"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #ac2bac;"
        href="#!"
        role="button"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #0082ca;"
        href="#!"
        role="button"
        ><i class="fab fa-linkedin-in"></i
      ></a>
      <!-- Github -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #333333;"
        href="#!"
        role="button"
        ><i class="fab fa-github"></i></a>
    </section>
    <!-- Section: Social media -->
  </div>


  <!-- Copyright -->
  <div class="text-center p-3" style="background-color:#0038b0;">
  <p style="background: none;text-align: center; color: white; font-size: 14px; margin:5px">© 2023 CHUYỂN ĐỔI SỐ TỈNH AN GIANG<span style="padding: 0 15px;">|</span> Thiết kế và Xây dựng bởi <a href="https://fit.agu.edu.vn/" style="color: #00d7eb; font-weight: bold;">FIT - TRƯỜNG ĐH AN GIANG</a></p>
  </div>
  <!-- Copyright -->
</footer>
</html>
