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
                        <a href="#">More About</a>
                    </div>
                    <span class="slide-img"><img src="http://gramotech.com/html/edugrade/images/hp1-slide1.jpg" alt=""></span>
                </div>
                <div class="item">
                    <div class="slide-caption"> <strong>Get the Best Education<br>
                            for Bright Future...</strong> <a href="#">More About</a>
                    </div>
                    <span class="slide-img"><img src="http://gramotech.com/html/edugrade/images/hp1-slide1.jpg" alt=""></span>
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
                                    m is simply dummy the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.                                </p>
                                <a class="btn-style-1" href="#">More About</a>
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
                                <div class="tweets">
                                    <span class="tw-meta"> <a href="#"><i class="fas fa-reply"></i></a> <a href="#"><i class="fas fa-heart"></i></a> </span>
                                    <h4>Horizon's twitter !</h4>
                                    <p>We are proud of our diverse University community which attracts students. @GramoTech #horizon</p>
                                    <span>about 2 hours ago</span>
                                </div>
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
                        <div class="item col-md-4">
                            <div class="news-box img-post">
                                <div class="news-thumb">
                                    <div class="img-caption">
                                        <span class="post-date"><i class="far fa-calendar-alt"></i> Aug 22, 2018</span>
                                        <h4> <a href="#">Consider MBA Programs That Offer Summer Prep</a> </h4>
                                    </div>
                                    <img src="http://gramotech.com/html/edugrade/images/h1news-thumb1.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <!--Item End-->
                        <!--Item Start-->
                        <div class="item col-md-4">
                            <div class="news-box">
                                <div class="news-excerpt">
                                    <span class="post-date"><i class="far fa-calendar-alt"></i> Aug 22, 2018</span>
                                    <h4> <a href="single.html">Extra-curricular activities can fulfil</a> </h4>
                                    <p>Learning to live, study and work in a thriving business capital is exciting, Ut enim ad minim veniam, quis nostrud exercitation.</p>
                                </div>
                                <a class="news-details" href="#">News Detail</a>
                            </div>
                        </div>
                        <!--Item End-->
                        <!--Item Start-->
                        <div class="item col-md-4">
                            <div class="news-box">
                                <div class="news-thumb"> <img src="http://gramotech.com/html/edugrade/images/h1news-thumb1.jpg" alt=""> </div>
                                <div class="news-excerpt">
                                    <span class="post-date"><i class="far fa-calendar-alt"></i> Aug 22, 2018</span>
                                    <h4> <a href="single.html">WordPress: Make A custom Plugins </a> </h4>
                                </div>
                                <a class="news-details" href="#">News Detail</a>
                            </div>
                        </div>
                        <!--Item End-->
                        <!--Item Start-->
                        <div class="item col-md-4">
                            <div class="news-box">
                                <div class="news-thumb"> <img src="http://gramotech.com/html/edugrade/images/h1news-thumb1.jpg" alt=""> </div>
                                <div class="news-excerpt">
                                    <span class="post-date"><i class="far fa-calendar-alt"></i> Aug 22, 2018</span>
                                    <h4> <a href="single.html">Students work together to solve a problem</a> </h4>
                                    <p>Learning to live, study and work in a thriving business capital is exciting, Ut enim ad minim veniam, quis nostrud exercitation.</p>
                                </div>
                                <a class="news-details" href="#">News Detail</a>
                            </div>
                        </div>
                        <!--Item End-->
                        <!--Item Start-->
                        <div class="item col-md-4">
                            <div class="news-box active">
                                <div class="news-excerpt">
                                    <span class="post-date"><i class="far fa-calendar-alt"></i> Aug 22, 2018</span>
                                    <h4> <a href="single.html">https://horizon.net/user/profile/portfolio</a> </h4>
                                </div>
                                <a class="news-details" href="#">News Detail</a>
                            </div>
                        </div>
                        <!--Item End-->
                        <!--Item Start-->
                        <div class="item col-md-4">
                            <div class="news-box">
                                <div class="news-excerpt">
                                    <span class="post-date"><i class="far fa-calendar-alt"></i> Aug 22, 2018</span>
                                    <h4> <a href="single.html">Students work together to solve a problem</a> </h4>
                                    <p>Learning to live, study and work in a thriving business capital is exciting, Ut enim ad minim veniam, quis nostrud exercitation.</p>
                                </div>
                                <a class="news-details" href="#">News Detail</a>
                            </div>
                        </div>
                        <!--Item End-->
                        <!--Item Start-->
                        <div class="item col-md-4">
                            <div class="news-box img-post">
                                <div class="news-thumb">
                                    <div class="img-caption">
                                        <span class="post-date"><i class="far fa-calendar-alt"></i> Aug 22, 2018</span>
                                        <h4> <a href="#">Consider MBA Programs That Offer Summer Prep</a> </h4>
                                    </div>
                                    <img src="http://gramotech.com/html/edugrade/images/h1news-thumb1.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <!--Item End-->
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
                        <div class="col-md-4 col-sm-4">
                            <div class="event-box">
                                <div class="event-thumb">
                                    <div class="edate"> Jun <strong>16</strong> </div>
                                    <span class="etime"><i class="far fa-clock"></i> 10:00am - 5:00pm</span> <img src="http://gramotech.com/html/edugrade/images/h1-event1.jpg" alt="">
                                </div>
                                <div class="event-excerpt">
                                    <h4> <a href="#">Ireland student exchange meetup</a> </h4>
                                    <span><i class="fas fa-map-marker-alt"></i> Hall - A | Amman Stadium</span>
                                </div>
                            </div>
                        </div>
                        <!--Event Box End-->
                        <!--Event Box Start-->
                        <div class="col-md-4 col-sm-4">
                            <div class="event-box">
                                <div class="event-thumb">
                                    <div class="edate"> Jun <strong>17</strong> </div>
                                    <span class="etime"><i class="far fa-clock"></i> 10:00am - 5:00pm</span> <img src="http://gramotech.com/html/edugrade/images/h1-event1.jpg" alt="">
                                </div>
                                <div class="event-excerpt">
                                    <h4> <a href="#">Turkish student first arabic meetup</a> </h4>
                                    <span><i class="fas fa-map-marker-alt"></i> Hall - V | Jordan University </span>
                                </div>
                            </div>
                        </div>
                        <!--Event Box End-->
                        <!--Event Box Start-->
                        <div class="col-md-4 col-sm-4">
                            <div class="event-box">
                                <div class="event-thumb">
                                    <div class="edate"> Jun <strong>16</strong> </div>
                                    <span class="etime"><i class="far fa-clock"></i> 10:00am - 5:00pm</span> <img src="http://gramotech.com/html/edugrade/images/h1-event1.jpg" alt="">
                                </div>
                                <div class="event-excerpt">
                                    <h4> <a href="#">Seminar with Professor Adam Arvidsson 2018</a> </h4>
                                    <span><i class="fas fa-map-marker-alt"></i> Hall - A | Broklyn Audiitorium</span>
                                </div>
                            </div>
                        </div>
                        <!--Event Box End-->
                    </div>
                </div>
            </div>
            <!--Upcoming Events End-->
            <!--Meet Our Professors Start-->
            <div class="meet-professors">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-3">
                            <div class="ci-box c1">
                                <div class="hcp-icon"> <i class="fas fa-phone"></i> </div>
                                <strong>Call us directly</strong>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3">
                            <div class="ci-box c2">
                                <div class="hcp-icon"><i class="fab fa-whatsapp"></i> </div>
                                <strong>Whatsapp messages</strong>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3">
                            <div class="ci-box c3">
                                <div class="hcp-icon"> <i class="far fa-newspaper"></i> </div>
                                <strong>Contact Form</strong>
                            </div>
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
        <!--Page Content End-->
        <div class="newsletter">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h3>Subscribe Newsletter</h3>
                        <strong>To get more updates subscribe our newsletter</strong>
                    </div>
                    <div class="col-md-8">
                        <div class="input-group"> <i class="far fa-envelope-open"></i>
                            <input type="text" class="form-control" placeholder="Enter email">
                            <input type="submit" value="Subscribe" class="subscribe">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Footer Start-->
        @include('layouts.footer')
        <!--Footer End-->
    </div>
    <!--Wrapper End-->

@endsection