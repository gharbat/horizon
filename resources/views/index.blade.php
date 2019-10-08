@extends('layouts.app')

@section('content')
    <!--Wrapper Start-->
    <div class="wrapper homepage-style-1">
        @include('layouts.navbar')
        <!--Home Page Slider Start-->
        <div class="home1-slider">
            <div id="home1-slider" class="owl-carousel owl-theme">
                <div class="item">
                    <div class="slide-caption">
                        <strong>Get the Best Education<br>
                            for Bright Future...</strong>

                    </div>
                    <span class="slide-img"><img src="/production/images/hp1-slide1.jpg" alt=""></span>
                </div>
                <div class="item">
                    <div class="slide-caption"> <strong>Get the Best Education<br>
                            for Bright Future...</strong>
                    </div>
                    <span class="slide-img"><img src="/production/images/hp1-slide1.jpg" alt=""></span>
                </div>
            </div>
        </div>
        <!--Home Page Slider End-->
        <!--Page Content Start-->
        <div class="main-content">
            <!--Welcome Start-->
            <div class="h1-welcome">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="welcome-box">
                                <div class="welcome-title">
                                    <strong>About Our Centre</strong>
                                    <h1>Welcome To Horizon</h1>
                                </div>
                                <p>
                                    he number one destination for international students seeking better education, career and life opportunities abroad
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <!--Icon Box Start-->
                                    <div class="icon-box mb-40">
                                        <img src="/production/images/h1-icon1.png" alt="">
                                        <h5>Exchange Programs</h5>
                                        <p>Lorem ipsum dolor amet, consectetur adipiscing elit, sed do eiusmod.</p>
                                    </div>
                                    <!--Icon Box End-->
                                    <!--Icon Box Start-->
                                    <div class="icon-box">
                                        <img src="/production/images/h1-icon2.png" alt="">
                                        <h5>Language Learning</h5>
                                        <p>Lorem ipsum dolor amet, consectetur adipiscing elit, sed do eiusmod.</p>
                                    </div>
                                    <!--Icon Box End-->
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <!--Icon Box Start-->
                                    <div class="icon-box mb-40">
                                        <img src="/production/images/h1-icon3.png" alt="">
                                        <h5>Study Abroad</h5>
                                        <p>Lorem ipsum dolor amet, consectetur adipiscing elit, sed do eiusmod.</p>
                                    </div>
                                    <!--Icon Box End-->
                                    <!--Icon Box Start-->
                                    <div class="icon-box">
                                        <img src="/production/images/h1-icon4.png" alt="">
                                        <h5>Online Courses</h5>
                                        <p>Lorem ipsum dolor amet, consectetur adipiscing elit, sed do eiusmod.</p>
                                    </div>
                                    <!--Icon Box End-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Welcome End-->
            <!--Campus + Achievements Start-->
            <div class="campus-achievements">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-3 pr0">
                            <div class="campus-box">
                                <div class="cb-cap">
                                    <a href="#"><span class="icon-play"></span></a>
                                    <h4>Study Abroad</h4>
                                    <em>And Explore the world</em>
                                </div>
                                <img src="http://gramotech.com/html/edugrade/images/campus.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 plr0">
                            <ul class="achievements">
                                <li> <i class="icon-facts1"></i> <strong>90+</strong> <span class="title">Online Course</span> </li>
                                <li> <i class="icon-facts2"></i> <strong>48+</strong> <span class="title">Study Option</span> </li>
                                <li> <i class="icon-facts3"></i> <strong>2078+</strong> <span class="title">Happy Student</span> </li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-sm-3 pl0">
                            <div class="tweets-bg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Campus + Achievements End-->
            <!--Departments Start-->
            <div class="home1-departments">
                <div class="container">
                    <h2 class="stitle">Horizon's Main Services</h2>
                    <div class="row">
                        <div class="col-md-3 col-sm-3">
                            <div class="dprt-box c1">
                                <i class="icon-dep1"></i>
                                <h5>Student <br>
                                    Exchanges
                                </h5>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3">
                            <div class="dprt-box c2">
                                <i class="icon-dep2"></i>
                                <h5>Study   <br>
                                    Abroad
                                </h5>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3">
                            <div class="dprt-box c3">
                                <i class="icon-dep3"></i>
                                <h5>Online <br>
                                    Courses
                                </h5>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3">
                            <div class="dprt-box c4">
                                <i class="icon-dep4"></i>
                                <h5>Foreign <br>
                                    Language
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Departments end-->
            <!--News Section Start-->
            <div class="home1-news portfolio filter-news">
                <div class="container">
                    <h2 class="stitle">Latest News</h2>
                    <a class="more-news" href="#">More News</a>
                    <div class="isotope items">

                        <!--Item Start-->

                        <!--Item Start-->
                        @foreach(\App\Post::all() as $post)
                            <div class="item col-md-4">
                                <div class="news-box">
                                    <div class="news-thumb"> <img src="/storage/{{$post->image}}" alt=""> </div>
                                    <div class="news-excerpt">
                                        <span class="post-date"><i class="far fa-calendar-alt"></i> Aug 22, 2018</span>
                                        <h4> <a href="/post/{{$post->slug}}">
                                                @if(!isset($lang_ar))
                                                    {{$post->title_en}}
                                                @else
                                                    {{$post->title_ar}}
                                                @endif
                                            </a> </h4>
                                    </div>
                                    <a class="news-details" href="/post/{{$post->slug}}">know more</a>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
            <!--News Section End-->
            <!--Upcoming Events Start-->
            <div class="up-events">
                <div class="container">
                    <h2 class="stitle">Upcoming Events</h2>
                    <div class="row">
                        <!--Event Box Start-->
                        @foreach(\App\Event::all() as $event)
                            <div class="col-md-4 col-sm-4">
                                <div class="event-box">
                                    <div class="event-thumb">
                                        <div class="edate"> {{$event->start_date->format('M')}} <strong>{{$event->start_date->format('d')}}</strong> </div>
                                        <span class="etime"><i class="far fa-clock"></i> {{$event->start_date->format('H:i')}} -  {{$event->end_date->format('H:i')}}</span> <img src="/storage/{{$event->image}}" alt="">
                                    </div>
                                    <div class="event-excerpt">
                                        <h4> <a href="/event/{{$event->slug}}">
                                                @if(!isset($lang_ar))
                                                    {{$event->title_en}}
                                                @else
                                                    {{$event->title_ar}}
                                                @endif
                                            </a> </h4>
                                        <span><i class="fas fa-map-marker-alt"></i> {{$event->place}}</span>
                                    </div>
                                </div>
                            </div>
                       @endforeach
                    </div>
                </div>
            </div>
            <!--Upcoming Events End-->
            <!--Meet Our Professors Start-->
            <div class="meet-professors">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-3">
                            <a href="tel:+962796070226">
                                <div class="ci-box c1">
                                    <div class="hcp-icon"> <i class="fas fa-phone"></i> </div>
                                    <strong>Call us directly</strong>
                                </div>
                            </a>

                        </div>
                        <div class="col-md-3 col-sm-3">
                            <a href="https://wa.me/962796070226">
                                <div class="ci-box c2">
                                    <div class="hcp-icon"><i class="fab fa-whatsapp"></i> </div>
                                    <strong>Whatsapp messages</strong>
                                </div>
                            </a>

                        </div>
                        <div class="col-md-3 col-sm-3">
                            <a href="/contact">
                                <div class="ci-box c3">
                                    <div class="hcp-icon"> <i class="far fa-newspaper"></i> </div>
                                    <strong>Contact Form</strong>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-3">
                            <div class="ci-box c4">
                                <div class="hcp-icon"> <i class="fas fa-graduation-cap"></i> </div>
                                <strong>Scholarships</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Meet Our Professors End-->
        </div>

        <!--Footer Start-->
        @include('layouts.footer')
        <!--Footer End-->
    </div>
    <!--Wrapper End-->

@endsection
