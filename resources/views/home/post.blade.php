@extends( 'home.frontend')
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

                    <!-- Post Details Area -->
                    <div class="single-post-details-area">
                        <div class="post-content">

                            <div class="text-center mb-50">
                                <p class="post-date">{{ $TinTuc->created_at }}</p>
                                <h2 class="post-title">{{ $TinTuc->TieuDe }}</h2>
                                <!-- Post Meta -->
                                <div class="post-meta">
                                    <a href="#"><span>by</span> {{ $TinTuc->TacGia }}</a>
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
                                    <a href="#" class="google-plus"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                    <a href="#" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                    <a href="#" class="pin"><i class="fa fa-thumb-tack" aria-hidden="true"></i></a>
                                </div>

                                {!!$TinTuc->NoiDung!!}
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
                                    <ol class="popular-tags d-flex flex-wrap">
                                        <li><a href="#">HealthFood</a></li>
                                        <li><a href="#">Yoga</a></li>
                                        <li><a href="#">Life Style</a></li>
                                    </ol>
                                </div>

                                <!-- Related Post Area -->
                                <div class="related-posts clearfix">
                                    <!-- Headline -->
                                    <h4 class="headline">related posts</h4>

                                    <div class="row">

                                        <!-- Single Blog Post -->
                                        <div class="col-12 col-lg-6">
                                            <div class="single-blog-post mb-50">
                                                <!-- Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <a href="#"><img src="img/blog-img/1.jpg" alt=""></a>
                                                </div>
                                                <!-- Content -->
                                                <div class="post-content">
                                                    <p class="post-date">MAY 17, 2018 / lifestyle</p>
                                                    <a href="#" class="post-title">
                                                        <h4>A Closer Look At Our Front Porch Items From Lowe’s</h4>
                                                    </a>
                                                    <p class="post-excerpt">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Single Blog Post -->
                                        <div class="col-12 col-lg-6">
                                            <div class="single-blog-post mb-50">
                                                <!-- Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <a href="#"><img src="img/blog-img/4.jpg" alt=""></a>
                                                </div>
                                                <!-- Content -->
                                                <div class="post-content">
                                                    <p class="post-date">MAY 25, 2018 / Fashion</p>
                                                    <a href="#" class="post-title">
                                                        <h4>5 Things to Know About Dating a Bisexual</h4>
                                                    </a>
                                                    <p class="post-excerpt">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <!-- Comment Area Start -->
                                <div class="comment_area clearfix">
                                    <h4 class="headline">12 Comments</h4>
                                    <ol>

                                            @foreach ( $comments as $cmt )

                                                <!-- Comment Content -->
                                                @if ($cmt->IdCon == null)
                                                <li class="single_comment_area">
                                                <div class="comment-wrapper d-flex">
                                                    <!-- Comment Meta -->
                                                    <div class="comment-author">
                                                        <img src="{{ asset('img/FIT.png') }}" alt="">
                                                    </div>
                                                <div class="comment-content">
                                                    <span class="comment-date">{{  $cmt->NgayCMT }}</span>
                                                    <h5>{{  $cmt->TenNguoiBL }}</h5>
                                                    <p>{{ $cmt->NoiDung }}</p>
                                                    <a href="#">Like</a>
                                                    <a class="active" href="#">Reply</a>
                                                </div>
                                            </div>
                                                    @foreach ( $comments as $chill)
                                                    @if ($chill->IdCon == $cmt->Id)

                                                    <ol class="children">
                                                        <li class="single_comment_area">
                                                            <div class="comment-wrapper d-flex">
                                                                <!-- Comment Meta -->
                                                                <div class="comment-author">
                                                                    <img src="{{ asset('img/FIT.png') }}" alt="">
                                                                </div>
                                                                <!-- Comment Content -->
                                                                <div class="comment-content">
                                                                    <span class="comment-date">{{  $chill->NgayCMT }}</span>
                                                                    <h5>{{  $chill->TenNguoiBL }}</h5>
                                                                    <p>{{ $chill->NoiDung }}</p>
                                                                    <a href="#">Like</a>
                                                                    <a class="active" href="#">Reply</a>
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
                                        <form action="#" method="post">
                                            <div class="row">
                                                <div class="col-12 col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="Name" id="contact-name" placeholder="Name">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <div class="form-group">
                                                        <input type="email" class="form-control" name="Email" id="contact-email" placeholder="Email">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <textarea class="form-control" name="message" id="message" cols="30" rows="10" placeholder="Comment"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <button type="submit" class="btn nikki-btn">Send Message</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Blog Content Area End ##### -->
@endsection
