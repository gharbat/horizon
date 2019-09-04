@extends('layouts.app')

@section('content')
    <!--Wrapper Start-->
    <div class="wrapper homepage-style-1">
        @include('layouts.navbar')

        <div class="inner-header">
            <div class="inner-header-caption">
                <h1>
                    @if(!isset($lang_ar))
                        {{$course->title_en}}
                    @else
                        {{$course->title_ar}}
                    @endif
                </h1>
                <ul class="breadcrumb">
                    <li><a href="/"><i class="fas fa-home"></i> index</a></li>
                    <li class="active">Course Detail</li>
                </ul>
            </div>
            <img src="/production/images/innerheader.jpg" alt="">
        </div>

        <div class="main-content">
            <!--Event Grid Page Start-->
            <div class="course-details">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="course-detail">
                                <!--Large Image-->
                                <div class="course-large-img"> <img src="/storage/{{$course->image}}" alt=""> </div>
                                <!--Large Image-->
                                <!--Meta Tag Start-->
                                <ul class="course-details-meta">
                                    <li> <img class="pro" src="/production/images/author.jpg" alt=""> <strong>Instructor:</strong> {{$course->author}} </li>
                                    <li> <strong>Category:</strong> {{$course->department}} </li>
                                    <li>
                                        <strong>Review:</strong>
                                        <div class="fc-rating">
                                           @for($i =0; $i <$course->review ;$i++)
                                                <i class="fas fa-star"></i>
                                           @endfor
                                        </div>
                                    </li>
                                    <li>
                                        <strong>Price:</strong>
                                        <h4>${{$course->price}}</h4>
                                    </li>
                                    <li> <a class="enroll" href="#">Get Enroll Now</a> </li>
                                </ul>
                                <!--Meta Tag End-->
                                <div class="course-text">
                                    <h4>
                                        @if(!isset($lang_ar))
                                            {{$course->title_en}}
                                        @else
                                            {{$course->title_ar}}
                                        @endif
                                    </h4>
                                    <p>

                                        @if(!isset($lang_ar))
                                            {{$course->body_en}}
                                        @else
                                            {{$course->body_ar}}
                                        @endif
                                    </p>
                                    <table class="course-table">
                                        <tbody><tr>
                                            <td><span><i class="fas fa-book"></i></span> Lessons: <strong>{{$course->lessons->count()}} Lessons</strong></td>
                                            <td><span><i class="far fa-clock"></i></span> Duration: <strong>Online</strong></td>
                                            <td><span><i class="fas fa-flag"></i></span> Language: <strong>Arabic</strong></td>
                                        </tr>
                                        <tr>
                                            <td><span><i class="fas fa-users"></i></span> Seats: <strong>{{$course->limit}}</strong></td>
                                            <td><span><i class="far fa-calendar-alt"></i></span> Session: <strong>2018-2020</strong></td>
                                            <td><span><i class="fas fa-folder-open"></i></span> Department: <strong>{{$course->department}}</strong></td>
                                        </tr>
                                        </tbody></table>
                                </div>
                            </div>
                            <!--Related Courses-->
                            <div class="related-courses">
                                <h3>Other Courses</h3>
                                <div class="row">
                                    <!--Course Box Start-->
                                    @foreach(\App\Course::all()->take(3) as $course)
                                        <div class="col-md-4">
                                            <div class="course-grid-box">
                                                <div class="course-thumb"> <strong class="cdeprt">{{$course->department}}</strong> <a href="#"><i class="fas fa-link"></i></a> <img src="/storage/{{$course->image}}" width="360" height="240" alt=""> </div>
                                                <div class="course-excerpt">
                                                    <div class="fc-rating"> {{$course->review}}.0
                                                        @for($i =0; $i <$course->review ;$i++)
                                                            <i class="fas fa-star"></i>
                                                        @endfor
                                                    </div>
                                                    <div class="ctxt">
                                                        <h4><a href="/course/{{$course->slug}}">
                                                                @if(!isset($lang_ar))
                                                                    {{$course->title_en}}
                                                                @else
                                                                    {{$course->title_ar}}
                                                                @endif
                                                            </a></h4>
                                                        {{--<p>--}}
                                                            {{--@if(!isset($lang_ar))--}}
                                                                {{--{{$course->title_en}}--}}
                                                            {{--@else--}}
                                                                {{--{{$course->title_ar}}--}}
                                                            {{--@endif--}}
                                                        {{--</p>--}}
                                                        <a href="/course/{{$course->slug}}" class="cdetail">Course Detail</a>
                                                    </div>
                                                </div>
                                                <ul class="course-meta">
                                                    <li><i class="fas fa-book"></i> {{$course->lessons->count()}} Les</li>
                                                    <li><i class="fas fa-users"></i> {{$course->limit}} Seats</li>
                                                    <li><i class="far fa-calendar-alt"></i> 3 Mon</li>
                                                </ul>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <!-- Sidebar Start -->
                        <div class="col-md-3">
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
                                    <div class="textwidget">
                                        <img src="images/sideimg.jpg" alt="">
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
                                            <li>
                                                <img src="images/spiomg1.jpg" alt="">
                                                <h6> <a href="#">Extra-curricular activities can fulfil</a> </h6>
                                                <span class="sb-date"><i class="far fa-calendar-alt"></i> Aug 22, 2018</span>
                                            </li>
                                            <li>
                                                <img src="images/spiomg2.jpg" alt="">
                                                <h6> <a href="#">Students work together to solve</a> </h6>
                                                <span class="sb-date"><i class="far fa-calendar-alt"></i> Aug 22, 2018</span>
                                            </li>
                                            <li>
                                                <img src="images/spiomg3.jpg" alt="">
                                                <h6> <a href="#">How we should be preparing students</a> </h6>
                                                <span class="sb-date"><i class="far fa-calendar-alt"></i> Aug 22, 2018</span>
                                            </li>
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
                                            <span><i class="fas fa-map-marker-alt"></i> Hall - A | Broklyn Audiitorium</span>
                                        </li>
                                        <!--Event End-->
                                        <!--Event Start-->
                                        <li>
                                            <div class="up-top">
                                                <div class="upedate"> Aug <strong>22</strong> </div>
                                                <h5><a href="#">Annual meetup &amp; scholarship</a></h5>
                                            </div>
                                            <span><i class="fas fa-map-marker-alt"></i> Hall - A | Broklyn Audiitorium</span>
                                        </li>
                                        <!--Event End-->
                                        <!--Event Start-->
                                        <li>
                                            <div class="up-top">
                                                <div class="upedate"> Aug <strong>22</strong> </div>
                                                <h5><a href="#">Annual meetup &amp; scholarship</a></h5>
                                            </div>
                                            <span><i class="fas fa-map-marker-alt"></i> Hall - A | Broklyn Audiitorium</span>
                                        </li>
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
                                        <li><a href="#"><i class="fab fa-instagram"></i></a><img src="images/insta1.jpg" alt=""> </li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a><img src="images/insta2.jpg" alt=""> </li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a><img src="images/insta3.jpg" alt=""> </li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a><img src="images/insta4.jpg" alt=""> </li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a><img src="images/insta5.jpg" alt=""> </li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a><img src="images/insta6.jpg" alt=""> </li>
                                    </ul>
                                </div>
                                <!--Widget End-->
                            </div>
                        </div>
                        <!-- Sidebar End -->
                    </div>
                </div>
            </div>
            <!--Event Grid Page End-->
        </div>
        @include('layouts.footer')
        <!--Footer End-->
    </div>
    <!--Wrapper End-->

@endsection