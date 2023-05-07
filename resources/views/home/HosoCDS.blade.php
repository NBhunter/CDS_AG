@extends('home.frontend')
@section('title')
    Chuyển đổi số tỉnh An Giang - Mức độ CDS của doanh nghiệp
@endsection
@section('link')
    <script src="https://kit.fontawesome.com/ab32c1f2a5.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
@endsection
@section('content')
    <style>
        .Sreach {
            margin: auto;

            border: 0;
            padding: 10px;
            border-radius: 5px;
            background-color: #f1f1f1;
            float: left;
            width: 60rem;
        }
    </style>
    <div class=" container ">
        <div class="col-sm-12 col-md-12 col-lg-12">

            <div class="card ">
                <div class="tabbable">
                    <br>
                    <h5 style="text-align: CENTER; font-weight:bold; font-family: Roboto; color: #0d6efd;"> KẾT QUẢ ĐÁNH GIÁ
                        MỨC ĐỘ CHUYỂN
                        ĐỔI SỐ CỦA DOANH
                        NGHIỆP VỪA VÀ NHỎ TẠI TỈNH AN GIANG</h5>

                </div>
                <br>
                <div class="card-body Sreach">
                    <h5 style="text-align: CENTER"> TRA CỨU MỨC ĐỘ CHUYỂN ĐỔI SỐ </h5>
                    <hr>
                    <form action="" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="mb-3 ">
                                <input type="text" name="idCT" value="" hidden>
                                <label class="form-label" for="inputDNName">Tên doanh nghiệp</label>
                                <input type="text" class="form-control" id="inputDNName" name="TenDN"
                                    placeholder="Nhập tên doanh nghiệp" value="">
                            </div>
                            <div class="mb-3">
                                <label class="form-label col-md-4" for="inputDNName">Mã số thuế</label>
                                <input type="text col-md-8" class="form-control" id="inputDNName" name="TenDN"
                                    placeholder="Nhập tên doanh nghiệp" value="">
                            </div>
                            <div class="mb-3 col-md-12">
                                <label class="form-label" for="inputTSChinh">Lĩnh vực</label>
                                <select class="form-control form-select" id="linhvuc" name="LinhVuc"
                                    aria-label=".form-select-sm">
                                    <option value="" selected>Chọn lĩnh vực</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3 col-md-12 d-flex justify-content-center">
                            <button type="button" class="btn btn-labeled btn-info"
                                onclick="onSubmitSearchBXHToanQuoc(503,3)">
                                <span> <i class="fa-solid fa-magnifying-glass"></i></span>
                                Tìm kiếm
                            </button>
                        </div>
                    </form>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6 " data-id-chart="container_503_3">
                        <div>
                            <br>
                            <h3 style=" color:#0d6efd; font-size: 18px;margin-left: 100px;">Bảng kết quả chuyển đổi
                                số doanh nghiệp
                            </h3>
                        </div>
                        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                            <div class="dt-buttons btn-group" style="margin-left: 200px;">
                                <button class="btn btn-success" type="button" style="width:40px;"><span>
                                        <i class="fas fa-file-excel"></i></span></button>
                                <button class="btn btn-warning buttons-print" type="button" style="width:40px;"><span><i
                                            class="fa fa-print"></i></span></button>
                                <button class="btn btn-danger buttons-pdf buttons-html5" type="button"
                                    style="width:40px;"><span><i class=" fas fa-file-pdf"></i></span></button>
                            </div>
                            <br>
                            <br>
                            <table class="table table-bordered table-hover dataTable no-footer" id="DataTables_Table_0"
                                role="grid" aria-describedby="DataTables_Table_0_info" style="margin-left: 10px;">
                                <thead>
                                    <tr role="row" style="text-align:center;">
                                        <th class="center sorting sorting_asc" tabindex="0"
                                            aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                            aria-sort="ascending" aria-label="Index: activate to sort column descending"
                                            style="width: 20px;">Index
                                        </th>
                                        <th class="center sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                            rowspan="1" colspan="1"
                                            aria-label="Doanh nghiệp: activate to sort column ascending"
                                            style="width: 200.4px;">Doanh nghiệp</th>
                                        <th class="center sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                            rowspan="1" colspan="1"
                                            aria-label="Mã số thuế: activate to sort column ascending"
                                            style="width: 90.4px;">Mã
                                            số thuế</th>
                                        <th class="center sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                            rowspan="1" colspan="1"
                                            aria-label="Điểm tổng hợp: activate to sort column ascending"
                                            style="width: 46.4px;">Điểm tổng hợp</th>
                                        <th class="center sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                            rowspan="1" colspan="1"
                                            aria-label="Mức độ: activate to sort column ascending" style="width: 90px;">
                                            Mức độ</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr class="odd">
                                        <td class="center sorting_1" id="359" style="text-align:center;">
                                            1
                                        </td>
                                        <td style="width:40%">

                                            CÔNG TY CP HƯNG LÂM
                                        </td>

                                        <td style="text-align:center;">
                                            0100101114-030

                                        </td>
                                        <td class="center">
                                            237
                                        </td>
                                        <td>
                                            <span>
                                                Mức 3 - Hình thành doanh nghiệp số
                                            </span>
                                            <br>
                                            <i>
                                                <a href="javascript:showCertificate(41)" style="color:blue">
                                                    Xem xác nhận
                                                </a>
                                            </i>
                                        </td>

                                    </tr>
                                </tbody>
                            </table>
                            <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">
                            </div>
                        </div>

                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 " data-id-chart="container_503_3">
                        <br>
                        <br>
                        <br>
                        <div>

                            <h3 style=" color:#0d6efd ; font-size: 18px;margin-left: 250px;">Bảng chỉ số
                            </h3>
                        </div>


                        <canvas id="CDSChart" style="width:100%;max-width:700px;"></canvas>
                    </div>

                </div>

            </div>

        </div>
    </div>
    <script>
        const data = {
            labels: [65, 59, 80, 81, 56, 55, 40],
            datasets: [{
                axis: 'y',
                label: [65, 59, 80, 81, 56, 55, 40],
                data: [65, 59, 80, 81, 56, 55, 40],
                fill: false,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(255, 205, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(201, 203, 207, 0.2)'
                ],
                borderColor: [
                    'rgb(255, 99, 132)',
                    'rgb(255, 159, 64)',
                    'rgb(255, 205, 86)',
                    'rgb(75, 192, 192)',
                    'rgb(54, 162, 235)',
                    'rgb(153, 102, 255)',
                    'rgb(201, 203, 207)'
                ],
                borderWidth: 1
            }]
        };

        const CDSChart = new Chart("CDSChart", {
            type: "horizontalBar",
            data,
            options: {

            }
        });
    </script>
@endsection
