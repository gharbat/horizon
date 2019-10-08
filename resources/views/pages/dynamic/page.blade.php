@extends('layouts.app')

@section('content')
    <!--Wrapper Start-->
    <div class="wrapper homepage-style-1">
        @include('layouts.navbar')

        <div class="inner-header">
            <div class="inner-header-caption">
                <h1>
                    @if(!isset($lang_ar))
                        {{$page->title_en}}
                    @else
                        {{$page->title_ar}}
                    @endif
                </h1>
            </div>
            <img src="/production/images/innerheader.jpg" alt="">
        </div>

        <div class="main-content">
            <!--Event Grid Page Start-->
            <div class="blog-details">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="blog-detail text-center">
                                <div class="post-thumb"> <img width="848" height="450" src="/storage/{{$page->image}}" alt=""> </div>
                                <div class="post-meta">
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
                                <div class="post-texts">
                                    <h4>
                                        @if(!isset($lang_ar))
                                            {{$page->title_en}}
                                        @else
                                            {{$page->title_ar}}
                                        @endif
                                    </h4>
                                    <p>
                                        @if(!isset($lang_ar))
                                            {{$page->body_en}}
                                        @else
                                            {{$page->body_ar}}
                                        @endif
                                    </p>
                                </div>
                                {{--<div class="post-comments">--}}
                                    {{--<h3 class="stitle">Comments on Post (4)</h3>--}}
                                    {{--<ul class="comments">--}}
                                        {{--<li class="comment">--}}
                                            {{--<div class="user-thumb"><img src="images/author.jpg" alt=""></div>--}}
                                            {{--<div class="user-comments">--}}
                                                {{--<h6 class="aname">Mason Gray</h6>--}}
                                                {{--<ul class="post-time">--}}
                                                    {{--<li>Posted: 09 July, 2018 at 2:37 pm</li>--}}
                                                    {{--<li><a href="#"><i class="fas fa-reply"></i> reply</a></li>--}}
                                                {{--</ul>--}}
                                                {{--<p>Many communities in the disease zones have inadequate sanitation that allow frequent trash piles and open sewers to serve as mosquito breeding and feeding grounds, according to the final outcome statement from the Aedes aegypti summit last month.</p>--}}
                                            {{--</div>--}}
                                            {{--<ul class="child-comments">--}}
                                                {{--<li class="comment">--}}
                                                    {{--<div class="user-thumb"><img src="images/author.jpg" alt=""></div>--}}
                                                    {{--<div class="user-comments">--}}
                                                        {{--<h6 class="aname">Johny Elite</h6>--}}
                                                        {{--<ul class="post-time">--}}
                                                            {{--<li>Posted: 09 July, 2018 at 2:37 pm</li>--}}
                                                            {{--<li><a href="#"><i class="fas fa-reply"></i> reply</a></li>--}}
                                                        {{--</ul>--}}
                                                        {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae.</p>--}}
                                                    {{--</div>--}}
                                                {{--</li>--}}
                                                {{--<li class="comment">--}}
                                                    {{--<div class="user-thumb"><img src="images/author.jpg" alt=""></div>--}}
                                                    {{--<div class="user-comments">--}}
                                                        {{--<h6 class="aname">Rog Kelly</h6>--}}
                                                        {{--<ul class="post-time">--}}
                                                            {{--<li>Posted: 09 July, 2018 at 2:37 pm</li>--}}
                                                            {{--<li><a href="#"><i class="fas fa-reply"></i> reply</a></li>--}}
                                                        {{--</ul>--}}
                                                        {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae.</p>--}}
                                                    {{--</div>--}}
                                                {{--</li>--}}
                                            {{--</ul>--}}
                                        {{--</li>--}}
                                        {{--<li class="comment">--}}
                                            {{--<div class="user-thumb"><img src="images/author.jpg" alt=""></div>--}}
                                            {{--<div class="user-comments">--}}
                                                {{--<h6 class="aname">James Warson</h6>--}}
                                                {{--<ul class="post-time">--}}
                                                    {{--<li>Posted: 09 July, 2018 at 2:37 pm</li>--}}
                                                    {{--<li><a href="#"><i class="fas fa-reply"></i> reply</a></li>--}}
                                                {{--</ul>--}}
                                                {{--<p>Many communities in the disease zones have inadequate sanitation that allow frequent trash piles and open sewers to serve as mosquito breeding and feeding grounds.</p>--}}
                                            {{--</div>--}}
                                        {{--</li>--}}
                                    {{--</ul>--}}
                                {{--</div>--}}
                                {{--<div class="leave-comment team-contact">--}}
                                    {{--<h3>Leave A Comment</h3>--}}
                                    {{--<form>--}}
                                        {{--<ul>--}}
                                            {{--<li class="col-md-6">--}}
                                                {{--<div class="input-group"> <i class="far fa-user"></i>--}}
                                                    {{--<input type="text" class="form-control" placeholder="Name">--}}
                                                {{--</div>--}}
                                            {{--</li>--}}
                                            {{--<li class="col-md-6">--}}
                                                {{--<div class="input-group"> <i class="far fa-envelope-open"></i>--}}
                                                    {{--<input type="text" class="form-control" placeholder="Email">--}}
                                                {{--</div>--}}
                                            {{--</li>--}}
                                            {{--<li class="col-md-12">--}}
                                                {{--<div class="input-group"> <i class="fas fa-pen-square"></i>--}}
                                                    {{--<textarea class="form-control" placeholder="Leave a comment"></textarea>--}}
                                                {{--</div>--}}
                                            {{--</li>--}}
                                            {{--<li class="col-md-12">--}}
                                                {{--<button> Submit </button>--}}
                                            {{--</li>--}}
                                        {{--</ul>--}}
                                    {{--</form>--}}
                                {{--</div>--}}
                            </div>
                        </div>
                        <!-- Sidebar Start -->

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