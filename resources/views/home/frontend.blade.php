<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- link root -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">/
    <link rel="icon" type="image/ico" href="{{asset('img/logo_ag.ico')}}"/>
    <title>Chuyển Đổi số vừa và nhỏ</title>

    <!-- boottrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<!-- hoverable dropdown -->
<style>



.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration:unset;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg sticky-top navbar-light bg-light"style="font-family:Arial; font-weight:bold; font-size: auto;">
  <div class="container-fluid">
    <a class="navbar-brand" style="width: 5%;" href="#"><img src="{{asset('img/logo_ag.png')}}" alt="" width="100%" height="auto"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" style="color:#0f62ac" href="#">Trang chủ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">Tin Tức</a>
        </li>
        <li class="nav-item dropdown ">
        <!-- <div class="nav-item "> -->
  <a class="nav-link dropdown active">Danh Mục</a>
  <div class="dropdown-content">
    <a href="#">Nông Nghiệp</a>
    <a href="#">Công Nghiệp</a>
    <a href="#">Dịch Vụ</a>
  </div>
  <li class="nav-item">
          <a class="nav-link active" href="#">Thư viện điện tử</a>
        </li>
    
  <li class="nav-item">
          <a class="nav-link active" href="#">Đánh giá Doanh Nghiệp</a>
        </li>
<!-- </div> -->
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<p>a </br>bva </br>bva </br>bva </br>bva </br>bva </br>bva </br>bva </br>bva </br>bva </br>bva </br>bva </br>bva </br>bva </br>bva </br>bva </br>bva </br>bva </br>bva </br>bva </br>bva </br>bva </br>bva </br>bva </br>bva </br>bva </br>bva </br>bva </br>bva </br>bva </br>bva </br>bva </br>bva </br>bva </br>bva </br>bva </br>bva </br>bva </br>bva </br>bva </br>bva </br>bva </br>bva </br>bva </br>bva </br>bva </br>bva </br>bva </br>bva </br>bva </br>bva </br>bva </br>bva </br>bva </br>bva </br>bva </br>bva </br>bva </br>bv</p>

</body>
<footer class=" text-center text-white" style="background-image: url({{asset('img/Footer.svg')}});">
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
  <section class="" style ="color: #333333;">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-6">
        <!-- Grid column -->
        <div class="col-md-8 col-lg-9 col-xl-7 ml-0 mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3 text-success"></i>Tỉnh An Giang
          </h6>
          <p>
            Trang thông tin về chuyển đổi số cho doanh nghiệp vừa và nhỏ
            trong tỉnh an giang
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
       
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-5 mr-0 mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Liên hệ</h6>
          <p><i class="fas fa-home me-3 text-secondary"></i> Long Xuyên, An Giang</p>
          <p>
            <i class="fas fa-envelope me-3 text-secondary"></i>
            nrbang_20TH@student.agu.edu.vn
          </p>
          <p><i class="fas fa-phone me-3 text-secondary"></i> + 01 234 567 88</p>
          <p><i class="fas fa-print me-3 text-secondary"></i> + 01 234 567 89</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2023 Copyright:
    <a class="text-white" href="https://mdbootstrap.com/">FIT</a>
  </div>
  <!-- Copyright -->
</footer>
</html>