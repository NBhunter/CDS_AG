@extends( 'home.frontend')
@section('link')
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

@endsection
@section('content')
<style>
    .mySlides {display:none}
    .w3-left, .w3-right, .w3-badge {cursor:pointer}
    .w3-badge {height:13px;width:13px;padding:0}
    </style>
<div class="w3-content w3-display-container" style="max-width:100%">
    <img class="mySlides" src="{{ asset('img/slide/ChuyenDoiSo_Web_Main_4 (1).png') }}" style="width:100%">
    <img class="mySlides" src="{{ asset('img/slide/TopBaner_CDS_NewYear_2023_2.png') }}" style="width:100%">
    <img class="mySlides" src="{{ asset('img/slide/ChuyenDoiSo_Web_Main_4 (1).png') }}" style="width:100%">
    <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
      <div class="w3-left w3-hover-text-khaki" style="cursord:pointer;" onclick="plusDivs(-1)">&#10094;</div>
      <div class="w3-right w3-hover-text-khaki" style="cursor:pointer;" onclick="plusDivs(1)">&#10095;</div>
      <span class="w3-badge demo w3-border w3-transparent w3-hover-white" style="cursor:pointer ;height:13px;width:13px;padding:0" onclick="currentDiv(1)"></span>
      <span class="w3-badge demo w3-border w3-transparent w3-hover-white" style="cursor:pointer" onclick="currentDiv(2)"></span>
      <span class="w3-badge demo w3-border w3-transparent w3-hover-white" style="cursor:pointer" onclick="currentDiv(3)"></span>
    </div>
  </div>
  <div style="background-image: url({{ asset('img/ChuyenDoiSo_Web_Top_Back.png') }}) ">
  <div class=" container" >
    <div class="row">
        <div class="col-sm" style="margin-left: 1%; ">
        <a href="https://chinhquyenso.hochiminhcity.gov.vn/" target="_blank"><img src="{{ asset('img/NN.png') }}" width="90%"> </a>
        </div>
        <div class="col-sm" style="margin-left: 1%; ">
            <a href="https://chinhquyenso.hochiminhcity.gov.vn/" target="_blank"><img src="{{ asset('img/CN.png') }}" width="90%"> </a>
            </div>
        <div class="col-sm" style="margin-left: 1%; ">
                <a href="https://chinhquyenso.hochiminhcity.gov.vn/" target="_blank"><img src="{{ asset('img/DV.png') }}" width="90%"> </a>
                </div>
    </div>
</div>
  </div>

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
  if (slideIndex > slides.length) {slideIndex = 1}
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
    </script>
@endsection
