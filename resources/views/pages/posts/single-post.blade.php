@extends('layouts.app')

@section('content')
    <!--Wrapper Start-->
    <div class="wrapper homepage-style-1">
        @include('layouts.navbar')

        <div class="inner-header">
            <div class="inner-header-caption">
                <h1>Blog Detail</h1>
                <ul class="breadcrumb">
                    <li><a href="index.html"><i class="fas fa-home"></i> Home</a></li>
                    <li class="active">Blog Detail</li>
                </ul>
            </div>
            <img src="images/innerheader.jpg" alt="">
        </div>

        <div class="main-content">
            <!--Event Grid Page Start-->
            <div class="blog-details">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9 col-sm-8">
                            <div class="blog-detail">
                                <div class="post-thumb"> <img src="images/blarge-1.jpg" alt=""> </div>
                                <div class="post-meta">
                                    <ul class="meta">
                                        <li><i class="far fa-user"></i> John Doe</li>
                                        <li><i class="fas fa-calendar-alt"></i> Aug 20, 2018</li>
                                        <li><i class="far fa-heart"></i> 56 Likes</li>
                                        <li><i class="far fa-comment"></i> 18 Comments</li>
                                        <li><i class="far fa-folder"></i> Markup</li>
                                    </ul>
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
                                <div class="post-texts">
                                    <h4>Consider MBA Programs That Offer Summer Prep</h4>
                                    <p> Learning to live, study and work in a thriving business capital is exciting, Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur study and work in a thriving business capital is exciting, Duis aute irure dolor in reprehenderit in voluptate velit esse.Ut enim ad minim veniam, Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                    <p> Excepteur sint occaecat cupidatat non proident, <span class="note">sunt in culpa qui officia deserunt mollit anim id est laborum Sed ut perspiciatis unde omnis iste natus error sit</span> voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. </p>
                                    <blockquote>
                                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium.</p>
                                    </blockquote>
                                    <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur study and work in a thriving business capital is exciting, Duis aute irure dolor in reprehenderit in voluptate velit esse.Ut enim ad minim veniam, Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                    <img class="img-left" src="images/webinar.jpg" alt="">
                                    <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur study and work in a thriving business capital is exciting, <span class="note">Duis aute irure dolor in reprehenderit in voluptate velit esse.</span> Ut enim ad minim veniam, Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur study and work in a thriving business capital is exciting. </p>
                                    <p> Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. </p>
                                </div>
                                <div class="post-comments">
                                    <h3 class="stitle">Comments on Post (4)</h3>
                                    <ul class="comments">
                                        <li class="comment">
                                            <div class="user-thumb"><img src="images/author.jpg" alt=""></div>
                                            <div class="user-comments">
                                                <h6 class="aname">Mason Gray</h6>
                                                <ul class="post-time">
                                                    <li>Posted: 09 July, 2018 at 2:37 pm</li>
                                                    <li><a href="#"><i class="fas fa-reply"></i> reply</a></li>
                                                </ul>
                                                <p>Many communities in the disease zones have inadequate sanitation that allow frequent trash piles and open sewers to serve as mosquito breeding and feeding grounds, according to the final outcome statement from the Aedes aegypti summit last month.</p>
                                            </div>
                                            <ul class="child-comments">
                                                <li class="comment">
                                                    <div class="user-thumb"><img src="images/author.jpg" alt=""></div>
                                                    <div class="user-comments">
                                                        <h6 class="aname">Johny Elite</h6>
                                                        <ul class="post-time">
                                                            <li>Posted: 09 July, 2018 at 2:37 pm</li>
                                                            <li><a href="#"><i class="fas fa-reply"></i> reply</a></li>
                                                        </ul>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae.</p>
                                                    </div>
                                                </li>
                                                <li class="comment">
                                                    <div class="user-thumb"><img src="images/author.jpg" alt=""></div>
                                                    <div class="user-comments">
                                                        <h6 class="aname">Rog Kelly</h6>
                                                        <ul class="post-time">
                                                            <li>Posted: 09 July, 2018 at 2:37 pm</li>
                                                            <li><a href="#"><i class="fas fa-reply"></i> reply</a></li>
                                                        </ul>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae.</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="comment">
                                            <div class="user-thumb"><img src="images/author.jpg" alt=""></div>
                                            <div class="user-comments">
                                                <h6 class="aname">James Warson</h6>
                                                <ul class="post-time">
                                                    <li>Posted: 09 July, 2018 at 2:37 pm</li>
                                                    <li><a href="#"><i class="fas fa-reply"></i> reply</a></li>
                                                </ul>
                                                <p>Many communities in the disease zones have inadequate sanitation that allow frequent trash piles and open sewers to serve as mosquito breeding and feeding grounds.</p>
                                            </div>
                                        </li>
                                    </ul>
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
                                                    <textarea class="form-control" placeholder="Leave a comment"></textarea>
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