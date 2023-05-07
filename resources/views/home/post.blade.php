@extends('home.frontend')
@section('title')
    {{ $TinTuc->TieuDe }}
@endsection
@section('link')
    <link rel="stylesheet" href="{{ asset('post\css\style.css') }}">
@endsection

@section('content')

    <!-- ##### Breadcrumb Area Start ##### -->
    {{--  --}}
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Blog Content Area Start ##### -->
    <section class="blog-content-area section-padding-0-100">
        <div class="container">

            <div class="row justify-content-center">
                <!-- Blog Posts Area -->
                <div class="col-12">
                    {{-- @if (session('alert'))   
                    {{session('alert')}}

                @endif   --}}
                    <!-- Post Details Area -->
                    <div class="single-post-details-area">
                        <div class="post-content">

                            <div class="text-center mb-50">
                                <p class="post-date">{{ $TinTuc->created_at }}</p>
                                <h2 class="post-title">{{ $TinTuc->TieuDe }}</h2>
                                <!-- Post Meta -->
                                <div class="post-meta">
                                    <a href="#" style="font-weight:bold;"><span>Tác giả: </span>
                                        {{ $TinTuc->TacGia }}</a>
                                    {{-- <a href="#">03 <span>Comments</span></a> --}}
                                </div>
                            </div>



                            <!-- Post Text -->
                            <div class="post-text">
                                <!-- Share -->
                                <div class="post-share">
                                    <span>Share</span>
                                    <a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    <a href="#" class="google-plus"><i class="fa fa-google-plus"
                                            aria-hidden="true"></i></a>
                                    <a href="#" class="instagram"><i class="fa fa-instagram"
                                            aria-hidden="true"></i></a>
                                    <a href="#" class="pin"><i class="fa fa-thumb-tack" aria-hidden="true"></i></a>
                                </div>

                                {!! $TinTuc->NoiDung !!}
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <img class="mb-30" src="img/blog-img/4.jpg" alt="">
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <img class="mb-30" src="img/blog-img/3.jpg" alt="">
                                    </div>
                                </div>



                                <!-- Post Tags & Share -->
                                <div class="post-tags-share">
                                    <!-- Tags -->
                                    {{-- <ol class="popular-tags d-flex flex-wrap">
                                        <li><a href="#">HealthFood</a></li>
                                        <li><a href="#">Yoga</a></li>
                                        <li><a href="#">Life Style</a></li>
                                    </ol> --}}
                                </div>

                                <!-- Related Post Area -->
                                <div class="related-posts clearfix">
                                    <!-- Headline -->
                                    <h4 class="headline" style="color:#0d6efd;">Tin liên quan</h4>

                                    <div class="row">
                                        @if (isset($News))
                                            @foreach ($News as $news)
                                                <div class="col-12 col-lg-6">
                                                    <div class="single-blog-post mb-50">
                                                        <!-- Thumbnail -->
                                                        <div class="post-thumbnail">
                                                            <a href="{{ URL::to('tin/' . $news->IdTin) }}"><img
                                                                    src="{{ asset('img/AnhTinhTuc/' . $news->HinhAnh) }}"
                                                                    alt=""></a>
                                                        </div>
                                                        <!-- Content -->
                                                        <div class="post-content">
                                                            <p class="post-date">{{ $news->created_at }}</p>
                                                            <a href="{{ URL::to('tin/' . $news->IdTin) }}"
                                                                class="post-title">
                                                                <h4>{{ $news->TieuDe }}</h4>
                                                            </a>
                                                            <p class="post-excerpt">{{ $news->TomTat }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @else
                                        @endif

                                        <!-- Single Blog Post -->

                                    </div>
                                </div>

                                <!-- Comment Area Start -->
                                <div class="comment_area clearfix">
                                    <h4 class="headline">{{ $comments->count() }} Bình luận</h4>
                                    <ol>

                                        @foreach ($comments as $cmt)
                                            <!-- Comment Content -->
                                            @if ($cmt->IdCon == null)
                                                <li class="single_comment_area">
                                                    <div class="comment-wrapper d-flex">
                                                        <!-- Comment Meta -->
                                                        <div class="comment-author">
                                                            <img src="{{ asset('img/speech-bubble.gif') }}" alt="">
                                                        </div>
                                                        <div class="comment-content">
                                                            <span class="comment-date">{{ $cmt->NgayCMT }}</span>
                                                            <h5>{{ $cmt->TenNguoiBL }}</h5>
                                                            <p>{{ $cmt->NoiDung }}</p>
                                                            {{-- <a href="#">Like</a> --}}
                                                            <a class="active replybtn " data-id="{{ $cmt->Id }}">Phản
                                                                hồi</a>
                                                            <form action="{{ URL::to('/BinhLuan') }}" method="post"
                                                                id="{{ $cmt->Id }}" style="display: none;"
                                                                target="hidden-form" enctype="multipart/form-data">
                                                                @csrf
                                                                <div class="row">
                                                                    <div class="col-12 col-md-6">
                                                                        <div class="form-group">
                                                                            <input type="hidden" class="form-control"
                                                                                name="IdCon" value="{{ $cmt->Id }}"
                                                                                id="contact-name">
                                                                            <input type="hidden" class="form-control"
                                                                                name="IdNews" value="{{ $TinTuc->Id }}"
                                                                                id="contact-name">
                                                                            <input type="text" class="form-control"
                                                                                name="Name" id="contact-name"
                                                                                placeholder="Name">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 col-md-6">
                                                                        <div class="form-group">
                                                                            <input type="email" class="form-control"
                                                                                name="Email" id="contact-email"
                                                                                placeholder="Email">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <div class="form-group">
                                                                            <textarea class="form-control" name="message" id="message" cols="30" rows="2" placeholder="Comment"></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <button type="submit" class="btn nikki-btn">Send
                                                                            Message</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    @foreach ($comments as $chill)
                                                        @if ($chill->IdCon == $cmt->Id)
                                                            <ol class="children">
                                                                <li class="single_comment_area">
                                                                    <div class="comment-wrapper d-flex">
                                                                        <!-- Comment Meta -->
                                                                        <div class="comment-author">
                                                                            <img src="{{ asset('img/speech-bubble.gif') }}"
                                                                                alt="">
                                                                        </div>
                                                                        <!-- Comment Content -->
                                                                        <div class="comment-content">
                                                                            <span
                                                                                class="comment-date">{{ $chill->NgayCMT }}</span>
                                                                            <h5>{{ $chill->TenNguoiBL }}</h5>
                                                                            <p>{{ $chill->NoiDung }}</p>
                                                                            {{-- <a href="#">Like</a> --}}
                                                                            <a class="active replybtn"
                                                                                data-id="{{ $chill->IdCon }}">Phản hồi
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ol>
                                                        @endif
                                                    @endforeach
                                                </li>
                                            @else
                                            @endif
                                        @endforeach
                                        <!-- Single Comment Area -->






                                    </ol>
                                </div>
                                <!-- Leave A Comment -->
                                <div class="leave-comment-area clearfix">
                                    <div class="comment-form">
                                        <h4 class="headline">Bình Luận bài viết</h4>

                                        <!-- Comment Form -->
                                        <form action="{{ URL::to('/BinhLuan') }}" method="post" target="hidden-form"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-12 col-md-6">
                                                    <div class="form-group">
                                                        <input type="hidden" class="form-control" name="IdNews"
                                                            value="{{ $TinTuc->Id }}" id="contact-name">
                                                        <input type="text" class="form-control" name="Name"
                                                            id="contact-name" placeholder="Họ tên">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <div class="form-group">
                                                        <input type="email" class="form-control" name="Email"
                                                            id="contact-email" placeholder="Email">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <textarea class="form-control" name="message" id="message" cols="30" rows="10"
                                                            placeholder="Nhập thông tin bình luận"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <button type="submit" class=" nikki-btn">Gửi bình luận</button>
                                                </div>
                                            </div>
                                        </form>
                                        <iframe style="display:none" name="hidden-form"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script>
        @if (session('alert'))
            window.onload = function() {
                alert('{{ session('alert') }}');
                window.location.reload();
            }
        @endif
        $('.replybtn').click(function() {
            var id = $(this).data("id");
            const form = document.getElementById(id);
            if (form.style.display === 'none') {
                // 👇️ this SHOWS the form
                form.style.display = 'block';
            } else {
                // 👇️ this HIDES the form
                form.style.display = 'none';
            }
        });
    </script>
    <!-- ##### Blog Content Area End ##### -->
@endsection
