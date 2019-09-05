@extends('layouts.app')

@section('content')
    <!--Wrapper Start-->
    <div class="wrapper homepage-style-1">
        @include('layouts.navbar')

        <div class="inner-header">
            <div class="inner-header-caption">
                <h1>
                    All Posts
                </h1>
                <ul class="breadcrumb">
                    <li><a href="/"><i class="fas fa-home"></i> index</a></li>
                    <li class="active">All Posts</li>
                </ul>
            </div>
            <img src="/production/images/innerheader.jpg" alt="">
        </div>

        <div class="main-content">
            <!--Blog Grid Page Start-->
            <div class="blog-list">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9 col-sm-8">

                            @foreach(\App\Post::all() as $post)
                            <!--Blog Post Start-->
                                <div class="blog-grid-post">
                                <div class="row">
                                    <div class="col-md-5 np">
                                        <div class="post-thumb"> <a href="/post/{{$post->slug}}"><i class="fas fa-link"></i></a> <img src="/storage/{{$post->image}}" alt=""></div>
                                    </div>
                                    <div class="col-md-7 mr0">
                                        <div class="post-excerpt"> <strong class="date">{{$post->created_at->format('D M Y ')}}</strong>
                                            <h4> <a href="/post/{{$post->slug}}">
                                                    @if(!isset($lang_ar))
                                                        {{$post->title_en}}
                                                    @else
                                                        {{$post->title_ar}}
                                                    @endif
                                                </a> </h4>
                                            <p>
                                                @if(!isset($lang_ar))
                                                    {{$post->body_en}}
                                                @else
                                                    {{$post->body_ar}}
                                                @endif
                                            </p>
                                            <a class="bd" href="#">Post Detail <i class="fas fa-arrow-right"></i></a> </div>
                                    </div>
                                </div>
                            </div>
                            <!--Blog Post End-->
                            @endforeach

                        </div>
                        <div class="col-md-3 col-sm-4">
                            <div class="sidebar">

                                <!--Widget Start-->
                                <div class="widget">
                                    <div class="search-widget">
                                        <form>
                                            <input type="text" placeholder="Enter keyword">
                                            <button class="sbtn"><i class="fas fa-search"></i></button>
                                        </form>
                                    </div>
                                </div>
                                <!--Widget End-->

                                <!--Widget Start-->
                                <div class="widget">
                                    <h3>About us</h3>
                                    <div class="textwidget"> <img src="images/sideimg.jpg" alt="">
                                        <p> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                                        <h5 class="name">Albert John</h5>
                                        <ul class="social">
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!--Widget End-->


                                <!--Widget Start-->
                                <div class="widget">
                                    <h3>Latest Blog</h3>
                                    <div class="latest-posts">
                                        <ul>
                                            <li> <img src="images/spiomg1.jpg" alt="">
                                                <h6> <a href="#">Extra-curricular activities can fulfil</a> </h6>
                                                <span class="sb-date"><i class="far fa-calendar-alt"></i> Aug 22, 2018</span> </li>
                                            <li> <img src="images/spiomg2.jpg" alt="">
                                                <h6> <a href="#">Students work together to solve</a> </h6>
                                                <span class="sb-date"><i class="far fa-calendar-alt"></i> Aug 22, 2018</span> </li>
                                            <li> <img src="images/spiomg3.jpg" alt="">
                                                <h6> <a href="#">How we should be preparing students</a> </h6>
                                                <span class="sb-date"><i class="far fa-calendar-alt"></i> Aug 22, 2018</span> </li>
                                        </ul>
                                    </div>
                                </div>
                                <!--Widget End-->


                                <!--Widget Start-->
                                <div class="widget">
                                    <h3>Quick Links</h3>
                                    <ul class="side-quick-link">
                                        <li> <a href="#"><i class="fas fa-graduation-cap"></i>Gradution </a> </li>
                                        <li> <a href="#"><i class="fas fa-pencil-alt"></i> Admission Criteria </a> </li>
                                        <li> <a href="#"><i class="fas fa-book"></i> All Course </a> </li>
                                    </ul>
                                </div>
                                <!--Widget End-->

                                <!--Widget Start-->
                                <div class="widget">
                                    <h3>Upcoming Events</h3>
                                    <ul class="upcoming-events">

                                        <!--Event Start-->
                                        <li>
                                            <div class="up-top">
                                                <div class="upedate"> Aug <strong>22</strong> </div>
                                                <h5><a href="#">Annual meetup &amp; scholarship</a></h5>
                                            </div>
                                            <span><i class="fas fa-map-marker-alt"></i> Hall - A | Broklyn Audiitorium</span> </li>
                                        <!--Event End-->

                                        <!--Event Start-->
                                        <li>
                                            <div class="up-top">
                                                <div class="upedate"> Aug <strong>22</strong> </div>
                                                <h5><a href="#">Annual meetup &amp; scholarship</a></h5>
                                            </div>
                                            <span><i class="fas fa-map-marker-alt"></i> Hall - A | Broklyn Audiitorium</span> </li>
                                        <!--Event End-->

                                        <!--Event Start-->
                                        <li>
                                            <div class="up-top">
                                                <div class="upedate"> Aug <strong>22</strong> </div>
                                                <h5><a href="#">Annual meetup &amp; scholarship</a></h5>
                                            </div>
                                            <span><i class="fas fa-map-marker-alt"></i> Hall - A | Broklyn Audiitorium</span> </li>
                                        <!--Event End-->

                                    </ul>
                                </div>
                                <!--Widget End-->

                                <!--Widget Start-->
                                <div class="widget">
                                    <h3>Tags</h3>
                                    <div class="tagcloud"> <a href="#">Courses</a> <a href="#">Admission</a> <a href="#">Library</a> <a href="#">Careers &amp; Jobs</a> <a href="#">Research</a> <a href="#">Students</a> <a href="#">Scholarship</a> </div>
                                </div>
                                <!--Widget End-->



                                <!--Widget Start-->
                                <div class="widget">
                                    <h3>Instagram</h3>
                                    <ul class="insta">
                                        <li><a href="#"><i class="fab fa-instagram"></i></a><img src="images/insta1.jpg" alt="">
                                        </li><li><a href="#"><i class="fab fa-instagram"></i></a><img src="images/insta2.jpg" alt="">
                                        </li><li><a href="#"><i class="fab fa-instagram"></i></a><img src="images/insta3.jpg" alt="">
                                        </li><li><a href="#"><i class="fab fa-instagram"></i></a><img src="images/insta4.jpg" alt="">
                                        </li><li><a href="#"><i class="fab fa-instagram"></i></a><img src="images/insta5.jpg" alt="">
                                        </li><li><a href="#"><i class="fab fa-instagram"></i></a><img src="images/insta6.jpg" alt=""> </li>
                                    </ul>
                                </div>
                                <!--Widget End-->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Blog Grid Page End-->
        </div>

    @include('layouts.footer')
        <!--Footer End-->
    </div>
    <!--Wrapper End-->

@endsection
