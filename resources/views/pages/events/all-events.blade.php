@extends('layouts.app')

@section('content')
    <!--Wrapper Start-->
    <div class="wrapper homepage-style-1">
        @include('layouts.navbar')

        <div class="inner-header">
            <div class="inner-header-caption">
                <h1>@lang('index.next')</h1>
                <ul class="breadcrumb">
                    <li><a href="/"><i class="fas fa-home"></i> index</a></li>
                    <li class="active">Events</li>
                </ul>
            </div>
            <img src="/production/images/innerheader.jpg" alt="">
        </div>

        <div class="main-content">
            <!--Event Grid Page Start-->
            <div class="events-grid">
                <div class="container">
                    <div class="row">
                        @foreach(\App\Event::all() as $event)
                            <!--Event Box Start-->
                            <div class="col-md-4 col-sm-4">
                                <div class="event-box">
                                    <div class="event-thumb">
                                        <a href="/event/{{$event->slug}}"><i class="fas fa-link"></i></a>
                                        <div class="edate">{{$event->start_date->format('M')}} <strong>{{$event->start_date->format('d')}}</strong> </div>
                                        <span class="etime"><i class="far fa-clock"></i>  {{$event->start_date->format('H:i')}} - {{$event->end_date->format('H:i')}}</span> <img src="/storage/{{$event->image}}" alt="">
                                    </div>
                                    <div class="event-excerpt">
                                        <h4> <a href="/event/{{$event->slug}}">
                                                @if(!isset($lang_ar))
                                                    {{$event->title_en}}
                                                @else
                                                    {{$event->title_ar}}
                                                @endif
                                            </a> </h4>
                                        <span><i class="fas fa-map-marker-alt"></i> {{$event->location}}</span>
                                    </div>
                                </div>
                            </div>
                            <!--Event Box End-->
                        @endforeach

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