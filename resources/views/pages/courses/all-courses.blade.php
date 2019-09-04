@extends('layouts.app')

@section('content')
    <!--Wrapper Start-->
    <div class="wrapper homepage-style-1">
        @include('layouts.navbar')

        <div class="inner-header">
            <div class="inner-header-caption">
                <h1>
                    All Courses
                </h1>
                <ul class="breadcrumb">
                    <li><a href="/"><i class="fas fa-home"></i> index</a></li>
                    <li class="active">All courses</li>
                </ul>
            </div>
            <img src="/production/images/innerheader.jpg" alt="">
        </div>

        <div class="main-content">
            <!--Meet Our Professors Start-->
            <div class="courses course-grid col3">
                <div class="container">
                    <div class="row">
                        <!--Course start-->
                        @foreach($courses as $course)
                            <div class="col-md-4 col-sm-6">
                                <div class="course-grid-box">
                                    <div class="course-thumb"> <strong class="cdeprt">{{$course->department}}</strong> <a href="/course/{{$course->slug}}"><i class="fas fa-link"></i></a> <img src="/storage/{{$course->image}}" width="360" height="240" alt=""> </div>
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
                    <div class="fl-pagination">
                        <nav aria-label="Page navigation">
                            <ul class="pagination">
                                <li> <a href="#" aria-label="Previous"> <span aria-hidden="true">«</span> </a> </li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li class="active"><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li> <a href="#" aria-label="Next"> <span aria-hidden="true">»</span> </a> </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!--Meet Our Professors End-->
        </div>
    @include('layouts.footer')
        <!--Footer End-->
    </div>
    <!--Wrapper End-->

@endsection