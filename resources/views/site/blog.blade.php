@extends('layouts.master')

@section('main')
    <div class="main-container">
        <section class="bg-secondary">
            <div class="container">
                <div class="row masonry-loader">
                    <div class="col-sm-12 text-center">
                        <div class="spinner"></div>
                    </div>
                </div>
                <div class="row masonry masonryFlyIn mb40">
                    <div class="col-sm-4 post-snippet masonry-item">
                        <a href="#">
                            <img alt="Post Image" src="img/blog-single-3.jpg" />
                        </a>
                        <div class="inner">
                            <a href="#">
                                <h5 class="mb0">A simple image post to start off an excellent masonry blog layout.</h5>
                                <span class="inline-block mb16">September 23, 2015</span>
                            </a>
                            <hr>
                            <p>
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo.
                            </p>
                            <a class="btn btn-sm" href="{{url('blog-single')}}">Read More</a>
                            <ul class="tags pull-right">
                                <li>
                                    <a class="btn btn-sm btn-icon" href="#">
                                        <i class="ti-twitter-alt"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="btn btn-sm btn-icon" href="#">
                                        <i class="ti-facebook"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--end of snippet-->
                    <div class="col-sm-4 post-snippet masonry-item">
                        <iframe class="mb0" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/167666836&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
                        <div class="inner">
                            <a href="#">
                                <h5 class="mb0">A lovely audio post added for good measure. Share the tunes!</h5>
                                <span class="inline-block mb16">September 21, 2015</span>
                            </a>
                            <hr>
                            <a class="btn btn-sm" href="{{url('blog-single')}}">Read More</a>
                            <ul class="tags pull-right">
                                <li>
                                    <a class="btn btn-sm btn-icon" href="#">
                                        <i class="ti-twitter-alt"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="btn btn-sm btn-icon" href="#">
                                        <i class="ti-facebook"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--end of snippet-->
                    <div class="col-sm-4 post-snippet masonry-item">
                        <a href="#">
                            <img alt="Post Image" src="img/blog-single-2.jpg" />
                        </a>
                        <div class="inner">
                            <a href="#">
                                <h5 class="mb0">A post that features a beautiful portrait sized image.</h5>
                                <span class="inline-block mb16">September 16, 2015</span>
                            </a>
                            <hr>
                            <p>
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo.
                            </p>
                            <a class="btn btn-sm" href="{{url('blog-single')}}">Read More</a>
                            <ul class="tags pull-right">
                                <li>
                                    <a class="btn btn-sm btn-icon" href="#">
                                        <i class="ti-twitter-alt"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="btn btn-sm btn-icon" href="#">
                                        <i class="ti-facebook"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--end of snippet-->
                    <div class="col-sm-4 post-snippet masonry-item">
                        <div class="embed-video-container embed-responsive embed-responsive-16by9 mb0">
                            <iframe class="embed-responsive-item mb0" src="http://player.vimeo.com/video/25737856?badge=0&title=0&byline=0&title=0" allowfullscreen="allowfullscreen"></iframe>
                        </div>
                        <!--end of embed video container-->
                        <div class="inner">
                            <a href="#">
                                <h5 class="mb0">An embedded video for your enjoyment.</h5>
                                <span class="inline-block mb16">September 7, 2015</span>
                            </a>
                            <hr>
                            <p>
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo.
                            </p>
                            <a class="btn btn-sm" href="{{url('blog-single')}}">Read More</a>
                            <ul class="tags pull-right">
                                <li>
                                    <a class="btn btn-sm btn-icon" href="#">
                                        <i class="ti-twitter-alt"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="btn btn-sm btn-icon" href="#">
                                        <i class="ti-facebook"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--end of snippet-->
                    <div class="col-sm-4 post-snippet masonry-item">
                        <a href="#">
                            <blockquote>
                                Here's a lovely quote post you can use to say something poignant or important.
                                <span class="author">Important Person - September 21, 2015</span>
                            </blockquote>
                        </a>
                    </div>
                    <!--end of snippet-->
                </div>
                <!--end of row-->
                <div class="row">
                    <div class="text-center">
                        <ul class="pagination">
                            <li>
                                <a href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="active">
                                <a href="#">1</a>
                            </li>
                            <li>
                                <a href="#">2</a>
                            </li>
                            <li>
                                <a href="#">3</a>
                            </li>
                            <li>
                                <a href="#">4</a>
                            </li>
                            <li>
                                <a href="#">5</a>
                            </li>
                            <li>
                                <a href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--end of row-->
            </div>
            <!--end of container-->
        </section>
@endsection
