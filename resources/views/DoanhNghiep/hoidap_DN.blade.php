@extends('DoanhNghiep.dashboard')
@section('link')
<meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="csrf-token" content="{{ Session::token() }}">
@endsection
@section('nvar')
    <li class="sidebar-item ">
        <a class="sidebar-link" href="{{ URL::to('dnviews') }}" style="background-color: #4e73df;">
            <i class="align-middle" data-feather="home"></i> <span class="align-middle" style="font-family:Roboto;">Trang điều
                khiển</span>
        </a>
    </li>
    <hr class="sidebar-divider" style="color:white;">
    <!-- Heading -->

    <li class="sidebar-item">
        <a class="sidebar-link" href="{{ URL::to('profile') }}" style="background-color: #4e73df;">
            <i class="align-middle" data-feather="user"></i> <span class="align-middle" style="font-family:Roboto;">Hồ sơ
                doanh nghiệp</span>
        </a>
    </li>
    <hr class="sidebar-divider" style="color:white;">
    <li class="sidebar-item">
        <a class="sidebar-link" href="{{ URL::to('phieudanhgia1') }}" style="background-color: #4e73df;">
            <i class="align-middle" data-feather="check-circle"></i> <span class="align-middle"
                style="font-family:Roboto;">Đánh Giá</span>
        </a>
    </li>
    <hr class="sidebar-divider" style="color:white;">
    <li class="sidebar-item active">
        <a class="sidebar-link" href="{{ URL::to('DNHoi') }}" style="background-color: #4e73df;">
            <i class="align-middle" data-feather="message-square"></i><span class="align-middle"
                style="font-family:Roboto;">Hỏi Đáp</span>
        </a>
    </li>

    <li class="sidebar-item">
    @endsection
    @section('content')
        <style>
            .chat-search-box {
                -webkit-border-radius: 3px 0 0 0;
                -moz-border-radius: 3px 0 0 0;
                border-radius: 3px 0 0 0;
                padding: .75rem 1rem;
            }

            .chat-search-box .input-group .form-control {
                -webkit-border-radius: 2px 0 0 2px;
                -moz-border-radius: 2px 0 0 2px;
                border-radius: 2px 0 0 2px;
                border-right: 0;
            }

            .chat-search-box .input-group .form-control:focus {
                border-right: 0;
            }

            .chat-search-box .input-group .input-group-btn .btn {
                -webkit-border-radius: 0 2px 2px 0;
                -moz-border-radius: 0 2px 2px 0;
                border-radius: 0 2px 2px 0;
                margin: 0;
            }

            .chat-search-box .input-group .input-group-btn .btn i {
                font-size: 1.2rem;
                line-height: 100%;
                vertical-align: middle;
            }

            @media (max-width: 767px) {
                .chat-search-box {
                    display: none;
                }
            }


            /************************************************
     ************************************************
             Users Container
     ************************************************
    ************************************************/

            .users-container {
                position: relative;
                padding: 1rem 0;
                border-right: 1px solid #e6ecf3;
                height: 100%;
                display: -ms-flexbox;
                display: flex;
                -ms-flex-direction: column;
                flex-direction: column;
            }


            /************************************************
     ************************************************
               Users
     ************************************************
    ************************************************/

            .users {
                padding: 0;
            }

            .users .person {
                position: relative;
                width: 100%;
                padding: 10px 1rem;
                cursor: pointer;
                border-bottom: 1px solid #f0f4f8;
            }

            .users .person:hover {
                background-color: #ffffff;
                /* Fallback Color */
                background-image: -webkit-gradient(linear, left top, left bottom, from(#e9eff5), to(#ffffff));
                /* Saf4+, Chrome */
                background-image: -webkit-linear-gradient(right, #e9eff5, #ffffff);
                /* Chrome 10+, Saf5.1+, iOS 5+ */
                background-image: -moz-linear-gradient(right, #e9eff5, #ffffff);
                /* FF3.6 */
                background-image: -ms-linear-gradient(right, #e9eff5, #ffffff);
                /* IE10 */
                background-image: -o-linear-gradient(right, #e9eff5, #ffffff);
                /* Opera 11.10+ */
                background-image: linear-gradient(right, #e9eff5, #ffffff);
            }

            .users .person.active-user {
                background-color: #ffffff;
                /* Fallback Color */
                background-image: -webkit-gradient(linear, left top, left bottom, from(#f7f9fb), to(#ffffff));
                /* Saf4+, Chrome */
                background-image: -webkit-linear-gradient(right, #f7f9fb, #ffffff);
                /* Chrome 10+, Saf5.1+, iOS 5+ */
                background-image: -moz-linear-gradient(right, #f7f9fb, #ffffff);
                /* FF3.6 */
                background-image: -ms-linear-gradient(right, #f7f9fb, #ffffff);
                /* IE10 */
                background-image: -o-linear-gradient(right, #f7f9fb, #ffffff);
                /* Opera 11.10+ */
                background-image: linear-gradient(right, #f7f9fb, #ffffff);
            }

            .users .person:last-child {
                border-bottom: 0;
            }

            .users .person .user {
                display: inline-block;
                position: relative;
                margin-right: 10px;
            }

            .users .person .user img {
                width: 48px;
                height: 48px;
                -webkit-border-radius: 50px;
                -moz-border-radius: 50px;
                border-radius: 50px;
            }

            .users .person .user .status {
                width: 10px;
                height: 10px;
                -webkit-border-radius: 100px;
                -moz-border-radius: 100px;
                border-radius: 100px;
                background: #e6ecf3;
                position: absolute;
                top: 0;
                right: 0;
            }

            .users .person .user .status.online {
                background: #9ec94a;
            }

            .users .person .user .status.offline {
                background: #c4d2e2;
            }

            .users .person .user .status.away {
                background: #f9be52;
            }

            .users .person .user .status.busy {
                background: #fd7274;
            }

            .users .person p.name-time {
                font-weight: 600;
                font-size: .85rem;
                display: inline-block;
            }

            .users .person p.name-time .time {
                font-weight: 400;
                font-size: .7rem;
                text-align: right;
                color: #8796af;
            }

            @media (max-width: 767px) {
                .users .person .user img {
                    width: 30px;
                    height: 30px;
                }

                .users .person p.name-time {
                    display: none;
                }

                .users .person p.name-time .time {
                    display: none;
                }
            }


            /************************************************
     ************************************************
             Chat right side
     ************************************************
    ************************************************/

            .selected-user {
                width: 100%;
                padding: 0 15px;
                min-height: 64px;
                line-height: 64px;
                border-bottom: 1px solid #e6ecf3;
                -webkit-border-radius: 0 3px 0 0;
                -moz-border-radius: 0 3px 0 0;
                border-radius: 0 3px 0 0;
            }

            .selected-user span {
                line-height: 100%;
            }

            .selected-user span.name {
                font-weight: 700;
            }

            .chat-container {
                position: relative;
                padding: 1rem;
            }

            .chat-container li.chat-left,
            .chat-container li.chat-right {
                display: flex;
                flex: 1;
                flex-direction: row;
                margin-bottom: 40px;
            }

            .chat-container li img {
                width: 48px;
                height: 48px;
                -webkit-border-radius: 30px;
                -moz-border-radius: 30px;
                border-radius: 30px;
            }

            .chat-container li .chat-avatar {
                margin-right: 20px;
            }

            .chat-container li.chat-right {
                justify-content: flex-end;
            }

            .chat-container li.chat-right>.chat-avatar {
                margin-left: 20px;
                margin-right: 0;
            }

            .chat-container li .chat-name {
                font-size: .75rem;
                color: #999999;
                text-align: center;
            }

            .chat-container li .chat-text {
                padding: .4rem 1rem;
                -webkit-border-radius: 4px;
                -moz-border-radius: 4px;
                border-radius: 4px;
                background: #ffffff;
                font-weight: 300;
                line-height: 150%;
                position: relative;
            }

            .chat-container li .chat-text:before {
                content: '';
                position: absolute;
                width: 0;
                height: 0;
                top: 10px;
                left: -20px;
                border: 10px solid;
                border-color: transparent #ffffff transparent transparent;
            }

            .chat-container li.chat-right>.chat-text {
                text-align: right;
            }

            .chat-container li.chat-right>.chat-text:before {
                right: -20px;
                border-color: transparent transparent transparent #ffffff;
                left: inherit;
            }

            .chat-container li .chat-hour {
                padding: 0;
                margin-bottom: 10px;
                font-size: .75rem;
                display: flex;
                flex-direction: row;
                align-items: center;
                justify-content: center;
                margin: 0 0 0 15px;
            }

            .chat-container li .chat-hour>span {
                font-size: 16px;
                color: #9ec94a;
            }

            .chat-container li.chat-right>.chat-hour {
                margin: 0 15px 0 0;
            }

            @media (max-width: 767px) {

                .chat-container li.chat-left,
                .chat-container li.chat-right {
                    flex-direction: column;
                    margin-bottom: 30px;
                }

                .chat-container li img {
                    width: 32px;
                    height: 32px;
                }

                .chat-container li.chat-left .chat-avatar {
                    margin: 0 0 5px 0;
                    display: flex;
                    align-items: center;
                }

                .chat-container li.chat-left .chat-hour {
                    justify-content: flex-end;
                }

                .chat-container li.chat-left .chat-name {
                    margin-left: 5px;
                }

                .chat-container li.chat-right .chat-avatar {
                    order: -1;
                    margin: 0 0 5px 0;
                    align-items: center;
                    display: flex;
                    justify-content: right;
                    flex-direction: row-reverse;
                }

                .chat-container li.chat-right .chat-hour {
                    justify-content: flex-start;
                    order: 2;
                }

                .chat-container li.chat-right .chat-name {
                    margin-right: 5px;
                }

                .chat-container li .chat-text {
                    font-size: .8rem;
                }
            }

            .chat-form {
                padding: 15px;
                width: 100%;
                left: 0;
                right: 0;
                bottom: 0;
                background-color: #ffffff;
                border-top: 1px solid white;
            }

            ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
            }

            .card {
                border: 0;
                background: #f4f5fb;
                -webkit-border-radius: 2px;
                -moz-border-radius: 2px;
                border-radius: 2px;
                margin-bottom: 2rem;
                box-shadow: none;
            }
        </style>
        <div class="container">

            <div class="page-title">
                <div class="row gutters">

                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12"> </div>
                </div>
            </div>


            <div class="content-wrapper">

                <div class="row gutters">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card m-0">

                            <div class="row no-gutters">
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-3 col-3">
                                    <div class="users-container">
                                        <div class="chat-search-box">
                                            <div class="input-group">
                                                <input class="form-control" placeholder="Search">
                                                <div class="input-group-btn">
                                                    <button type="button" class="btn btn-info">
                                                        <i class="fa fa-search"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>


                                        <button id="newquestion" class="btn btn-info" data-toggle="modal"
                                            data-target="#myModal">

                                            <i class="fa-solid fa-circle-plus"></i>

                                            <p class="name-time">
                                                <span class="name">Thêm câu hỏi mới</span>

                                            </p>
                                        </button>


                                        <!-- Modal -->
                                        <div class="modal fade" id="myModal" role="dialog">
                                            <div class="modal-dialog">

                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div class="modal-header">

                                                        <h4 class="modal-title">Nhập tiêu đề câu hỏi</h4>
                                                        <button type="button" class="close"
                                                            data-dismiss="modal">&times;</button>
                                                    </div>
                                                    <div class="modal-body ">
                                                        <form  id="addquestionfrm" >

                                                            <div class="form-group mb-3">
                                                                <input type="textarea" class="form-control" height="100%" id="questname" name="questname"
                                                                    placeholder="Nhập Tiêu Đề Câu Hỏi">
                                                            </div>
                                                    </div>
                                                </form>
                                                    <div class="modal-footer">
                                                        <button type="button"   id="thongbao" class="btn btn-primary">Save changes</button>
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Close</button>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>



<<<<<<< HEAD
                                        <ul id="listUL" class="users">
                                            @foreach ($TinNhan as $TN)
                                            <li class="person" id="{{ $TN->TNid }}" data-chat="{{ $TN->TNid }}">
=======
                                        <ul class="users">
                                            @foreach ($TinNhan as $TN)
                                            <li class="person" data-chat="{{ $TN->TinNhan_id }}">
>>>>>>> 9b9fd46856e371a23c34272d4ebc49b20d8b5747
                                                <div class="user">
                                                    <img src="{{ asset('img/FIT.png') }}" alt="Retail Admin">
                                                    <span class="status offline"></span>
                                                </div>

                                                <p class="name-time">
                                                    <span class="name">{{$TN->TieuDe }}</span>
                                                    <br>
                                                    <span class="time">{{$TN->thoigian }}</span>
                                                </p>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>

<<<<<<< HEAD
                                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-9 col-9" id="chatview">
                                    <div class="selected-user">
                                        <span>QA: <span class="name">Chưa chọn câu hỏi</span></span>
                                    </div>
                                    <div class="chat-container osition-static bottom-0 top-0">
                                        <h3 style="text-align: center"><span class="name">Vui lòng chọn câu hỏi </span></h3>
                                    </div>

=======
                                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-9 col-9">
                                    <div class="selected-user">
                                        <span>QA: <span class="name">Cách đánh giá phiếu số 1</span></span>
                                    </div>
                                    <div class="chat-container osition-static bottom-0 top-0">
                                        <ul class="chat-box chatContainerScroll">
                                            <li class="chat-right">
                                                <div class="chat-hour">08:55 <span class="fa fa-check-circle"></span></div>
                                                <div class="chat-text">Hello, Làm sao để có thể thực hiện đánh giá phiếu 1.
                                                </div>
                                                <div class="chat-avatar">
                                                    <img src="{{ asset('img/FIT.png') }}" alt="Retail Admin">
                                                    <div class="chat-name">Băng Nguyễn</div>
                                                </div>

                                            </li>
                                            <li class="chat-left">
                                                <div class="chat-avatar">
                                                    <img src="{{ asset('img/FIT.png') }}" alt="Retail Admin">
                                                    <div class="chat-name">Băng Nguyễn - Admin</div>
                                                </div>

                                                <div class="chat-text">Bạn có thể chọn vào đánh giá ở phía trái màng hình để
                                                    đánh giá</div>
                                                    <div class="chat-hour">08:56 <span class="fa fa-check-circle"></span></div>
                                            </li>

                                        </ul>
                                        <div class="row  reply">
                                            <div class="col-sm-1 col-xs-1 reply-emojis">
                                                <i class="fas fa-smile fa-2x"></i>
                                            </div>
                                            <div class="col-sm-9 col-xs-9 reply-main">
                                                <textarea class="form-control" rows="1" id="comment"></textarea>
                                            </div>
                                            <div class="col-sm-1 col-xs-1 reply-recording">
                                                <i class="fa fa-microphone fa-2x" aria-hidden="true"></i>
                                            </div>
                                            <div class="col-sm-1 col-xs-1 reply-send">
                                                <i class="fas fa-paper-plane fa-2x"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
>>>>>>> 9b9fd46856e371a23c34272d4ebc49b20d8b5747
                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div>
        <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript">
            $('#newquestion').on('shown.bs.modal', function() {
                $('#myInput').trigger('focus')
            })
            $(document).ready(function(){
                $("#thongbao").click(function(){

    var TDe = $('#questname').val();

    $.post("{{ URL::to('/HoiDapMoi') }}", {
                                            _token: $('meta[name=csrf-token]').attr('content'),
                                            status: "1",
                                            TieuDe: TDe,
                                            }).done(window.location.reload());

});
<<<<<<< HEAD
$("#send").click(function(){
alert('test');
    });
});

        </script>
        {{-- chuyển kênh chat --}}
        <script>
            var list = document.getElementById("listUL");

function appendText() {
    var chatid = this.id;
    $.post("{{ URL::to('/LayTinNhan') }}", {
                                            _token: $('meta[name=csrf-token]').attr('content'),
                                            chatid:chatid,
                                            },function(chatdetail){
  $("#chatview").empty();
   $("#chatview").append(chatdetail);
                                            });

}

function find(item, index){
if(item[1] == chatid){
    detail = index;
}

}
console.log(list);
for(i=0;i<=list.childElementCount-1;i++){
  list.children[i].addEventListener("click",appendText);
  }
=======
  });
>>>>>>> 9b9fd46856e371a23c34272d4ebc49b20d8b5747

        </script>
    @endsection
