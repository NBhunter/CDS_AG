@extends('chuyengia.Dashboard')
@section('content')



    <div  style="font-weight:bold;text-align:center;font-size:22px;color:#4e73df;font-style:Roboto;">THÔNG TIN CHI TIẾT PHIẾU 3</div>
    <div class="card-body">

    <form role="form" action="" method="post" enctype="multipart/form-data">

    <div class="row gx-3 mb-3">

    <div class="col-md-6">
    <label class="small mb-1" for="inputOrgName">Mã phiếu: </label>
    <input class="form-control" id="inputOrgName" type="text" placeholder="" value="{{ $Phieu3detail->IDphieu }}" readonly>
    </div>

    <div class="col-md-6">
    <label class="small mb-1" for="inputLocation">Thời gian đánh giá:</label>
    <input class="form-control" id="inputLocation" type="text" placeholder="" value="{{ $Phieu3detail->ThoiGianTao }}" readonly>
    </div>
    </div>


    <div class="row gx-3 mb-3">

        <div class="col-md-6">
        <label class="small mb-1" for="inputOrgName">Tên doanh nghiệp: </label>
        <input class="form-control" id="inputOrgName" type="text"  placeholder="" value="{{ $Phieu3detail->TenDoanhNghiep }}" readonly>
        </div>
        </div>
        <label for="inputEmailAddress">Rào cản</label>


        <input class="form-control" id="inputLocation" type="text" style="text-align: center; " placeholder="" value="{{  $Phieu3detail->RaoCan }}" readonly>
<br>
{{-- <div class="card mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Chi tiết phiếu</h6>
        <label for="inputEmailAddress">Đề xuất:</label>
        <input class="form-control" id="inputLocation" type="text" style="text-align: center; " placeholder="" value="{{  $Phieu3detail->DeXuat }}" readonly>
    <br>
    <label class="small mb-1" for="inputLocation">Nhu cầu :</label>
            <input class="form-control" id="inputLocation" type="text" placeholder="" value="{{  $Phieu3detail->NhuCau}}" readonly>
            <br>
    </div> --}}


        <a  href ="{{ URL::to('/chuyengia/kqphieu3/'.$Phieu3detail->IDphieu) }}" name="add_product" class="btn btn-info"><i class='fas fa-eye'></i> Xem chi tiết</a>



        </form>

</div>
</div>
</div>
</div>
</div>

    <script>
$('.dropdown-el').click(function(e) {
  e.preventDefault();
  e.stopPropagation();
  $(this).toggleClass('expanded');
  $('#'+$(e.target).attr('for')).prop('checked',true);
});
$(document).click(function() {
  $('.dropdown-el').removeClass('expanded');
});
    </script>
@endsection
