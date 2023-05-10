@extends('chuyengia.Dashboard')
@section('content')
    <div style="font-weight:bold;text-align:center;font-size:22px;color:#4e73df;font-style:Roboto;">THÔNG TIN CHI TIẾT PHIẾU
        2</div>
    <div class="card-body">

        <form role="form" action="" method="post" enctype="multipart/form-data">

            <div class="row gx-3 mb-3">

                <div class="col-md-6">
                    <label class="small mb-1" for="inputOrgName">Mã phiếu: </label>
                    <input class="form-control" id="inputOrgName" type="text" placeholder=""
                        value="{{ $Phieu2detail->IDphieu }}" readonly>
                </div>

                <div class="col-md-6">
                    <label class="small mb-1" for="inputLocation">Thời gian đánh giá:</label>
                    <input class="form-control" id="inputLocation" type="text" placeholder=""
                        value="{{ $Phieu2detail->ThoiGianTao }}" readonly>
                </div>
            </div>


            <div class="row gx-3 mb-3">

                <div class="col-md-6">
                    <label class="small mb-1" for="inputOrgName">Tên doanh nghiệp: </label>
                    <input class="form-control" id="inputOrgName" type="text" placeholder=""
                        value="{{ $Phieu2detail->TenDoanhNghiep }}" readonly>
                </div>

                <div class="col-md-6">
                    <label class="small mb-1" for="inputLocation">Tổng điểm đánh giá:</label>
                    <input class="form-control" id="inputLocation" type="text" placeholder="" value="" readonly>
                </div>
            </div>
            <label for="inputEmailAddress">Đánh giá tổng thể</label>


            <input class="form-control" id="inputLocation" type="text" style="text-align: center; " placeholder=""
                value="" readonly>
            <br>
            <br>
            <div class="card mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Chi tiết các điểm</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable"style="text-align:center;">
                            <thead>
                                <tr>

                                </tr>
                                <tr>

                                </tr>

                            </thead>
                        </table>
                        <br>
                    </div>



        </form>

    </div>

    </div>
    <div class="card mb-4">
        <div class="card-header py-3">
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <a href="{{ URL::to('/chuyengia/kqphieu1/' . $Phieu2detail->IDphieu) }}" name="add_product" class="btn btn-info"><i
                    class='fas fa-eye'></i> Xem chi tiết</a>
            <button type="submit" name="add_product" class="btn btn-warning"><i class='fas fa-chalkboard-teacher'></i> Chọn lộ
                trình</button>
            </div>



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
            $('#' + $(e.target).attr('for')).prop('checked', true);
        });
        $(document).click(function() {
            $('.dropdown-el').removeClass('expanded');
        });
    </script>
@endsection
