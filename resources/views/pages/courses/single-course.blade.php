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