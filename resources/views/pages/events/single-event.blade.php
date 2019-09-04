@extends('layouts.app')

@section('content')
    <!--Wrapper Start-->
    <div class="wrapper homepage-style-1">
        @include('layouts.navbar')

        <div class="inner-header">
            <div class="inner-header-caption">
                <h1>Post Detail</h1>
                <ul class="breadcrumb">
                    <li><a href="/"><i class="fas fa-home"></i> index</a></li>
                    <li class="active">Event Detail</li>
                </ul>
            </div>
            <img src="/production/images/innerheader.jpg" alt="">
        </div>

        <div class="main-content">
            <!--Event Grid Page Start-->
            <div class="event-details">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9 col-sm-8">
                            <div class="details-col">
                                <div class="title-area">
                                    <div class="edate">{{$event->start_date->format('M')}} <strong>{{$event->start_date->format('d')}}</strong> </div>
                                    <span class="etime"><i class="far fa-clock"></i> {{$event->start_date->format('H:i')}} - {{$event->end_date->format('H:i')}}</span>
                                    <h4>
                                        @if(!isset($lang_ar))
                                            {{$event->title_en}}
                                        @else
                                            {{$event->title_ar}}
                                        @endif
                                    </h4>
                                    <span><i class="fas fa-map-marker-alt"></i> {{$event->place}}</span>
                                    {{--<div class="share">--}}
                                        {{--<div class="dropdown">--}}
                                            {{--<button id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-share-alt"></i> </button>--}}
                                            {{--<ul class="dropdown-menu" aria-labelledby="dLabel">--}}
                                                {{--<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>--}}
                                                {{--<li><a href="#"><i class="fab fa-twitter"></i></a></li>--}}
                                                {{--<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>--}}
                                                {{--<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>--}}
                                            {{--</ul>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                </div>
                                <div class="e-img"><img src="/storage/{{$event->image}}" alt=""></div>
                                <div class="event-counter">
                                    <div id="defaultCountdown" class="is-countdown"><span class="countdown-row countdown-show4"><span class="countdown-section"><span class="countdown-amount">144</span><span class="countdown-period">Days</span></span><span class="countdown-section"><span class="countdown-amount">7</span><span class="countdown-period">Hours</span></span><span class="countdown-section"><span class="countdown-amount">37</span><span class="countdown-period">Minutes</span></span><span class="countdown-section"><span class="countdown-amount">58</span><span class="countdown-period">Seconds</span></span></span></div>
                                    <a class="participate" >Time until start</a>
                                </div>
                                <p>
                                    @if(!isset($lang_ar))
                                        {{$event->body_en}}
                                    @else
                                        {{$event->body_ar}}
                                    @endif
                                </p>


                                <div class="leave-comment team-contact">
                                    <h3>Register For This Event</h3>
                                    <form>
                                        <ul>
                                            <li class="col-md-6">
                                                <div class="input-group"> <i class="far fa-user"></i>
                                                    <input type="text" class="form-control" placeholder="Name">
                                                </div>
                                            </li>
                                            <li class="col-md-6">
                                                <div class="input-group"> <i class="far fa-envelope-open"></i>
                                                    <input type="text" class="form-control" placeholder="Email">
                                                </div>
                                            </li>
                                            <li class="col-md-12">
                                                <button> Register </button>
                                            </li>
                                        </ul>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Sidebar Start -->
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