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
                            @include('layouts.sidebar')
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