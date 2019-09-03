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
                    <li class="active">Blog Detail</li>
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
                                    <div class="edate"> Aug <strong>16</strong> </div>
                                    <span class="etime"><i class="far fa-clock"></i> 10:00am - 5:00pm</span>
                                    <h4>Consider MBA Programs That Offer Summer Prep</h4>
                                    <span><i class="fas fa-map-marker-alt"></i> Hall - A | Broklyn Audiitorium</span>
                                    <div class="share">
                                        <div class="dropdown">
                                            <button id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-share-alt"></i> </button>
                                            <ul class="dropdown-menu" aria-labelledby="dLabel">
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="e-img"><img src="images/event-large.jpg" alt=""></div>
                                <div class="event-counter">
                                    <div id="defaultCountdown" class="is-countdown"><span class="countdown-row countdown-show4"><span class="countdown-section"><span class="countdown-amount">144</span><span class="countdown-period">Days</span></span><span class="countdown-section"><span class="countdown-amount">7</span><span class="countdown-period">Hours</span></span><span class="countdown-section"><span class="countdown-amount">37</span><span class="countdown-period">Minutes</span></span><span class="countdown-section"><span class="countdown-amount">58</span><span class="countdown-period">Seconds</span></span></span></div>
                                    <a class="participate" href="#">Participate Now</a>
                                </div>
                                <p> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. </p>
                                <blockquote>
                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium.</p>
                                </blockquote>
                                <p>Learning to live, study and work in a thriving business capital is exciting, Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur study and work in a thriving business capital is exciting, Duis aute irure dolor in reprehenderit in voluptate velit esse.Ut enim ad minim veniam, Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                <div class="event-gallery gallery">
                                    <h3>Event Gallery</h3>
                                    <div id="event-gallery" class="owl-carousel owl-theme owl-loaded owl-drag">






                                        <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1697px;"><div class="owl-item active" style="width: 282.667px;"><div class="item">
                                                        <div class="eimg"> <a href="images/egallery1.jpg" data-rel="prettyPhoto[gallery1]" title="Event Gallery"><i class="far fa-image"></i></a> <img src="images/egallery1.jpg" alt=""></div>
                                                    </div></div><div class="owl-item active" style="width: 282.667px;"><div class="item">
                                                        <div class="eimg"> <a href="images/egallery2.jpg" data-rel="prettyPhoto[gallery1]" title="Event Gallery"><i class="far fa-image"></i></a> <img src="images/egallery2.jpg" alt=""></div>
                                                    </div></div><div class="owl-item active" style="width: 282.667px;"><div class="item">
                                                        <div class="eimg"> <a href="images/egallery3.jpg" data-rel="prettyPhoto[gallery1]" title="Event Gallery"><i class="far fa-image"></i></a> <img src="images/egallery3.jpg" alt=""></div>
                                                    </div></div><div class="owl-item" style="width: 282.667px;"><div class="item">
                                                        <div class="eimg"> <a href="images/egallery1.jpg" data-rel="prettyPhoto[gallery1]" title="Event Gallery"><i class="far fa-image"></i></a> <img src="images/egallery1.jpg" alt=""></div>
                                                    </div></div><div class="owl-item" style="width: 282.667px;"><div class="item">
                                                        <div class="eimg"> <a href="images/egallery2.jpg" data-rel="prettyPhoto[gallery1]" title="Event Gallery"><i class="far fa-image"></i></a> <img src="images/egallery2.jpg" alt=""></div>
                                                    </div></div><div class="owl-item" style="width: 282.667px;"><div class="item">
                                                        <div class="eimg"> <a href="images/egallery3.jpg" data-rel="prettyPhoto[gallery1]" title="Event Gallery"><i class="far fa-image"></i></a> <img src="images/egallery3.jpg" alt=""></div>
                                                    </div></div></div></div><div class="owl-nav"><button type="button" role="presentation" class="owl-prev disabled"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots disabled"></div></div>
                                </div>
                                <div class="leave-comment team-contact">
                                    <h3>Leave A Comment</h3>
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
                                                <div class="input-group"> <i class="fas fa-pen-square"></i>
                                                    <textarea class="form-control" placeholder="Your Comments"></textarea>
                                                </div>
                                            </li>
                                            <li class="col-md-12">
                                                <button> Submit </button>
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