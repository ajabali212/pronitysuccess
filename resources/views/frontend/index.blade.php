@extends('layouts.master')
@section('content')
 <div class="back-wrapper">
            <div class="back-wrapper-inner">
                
                <!--================= Banner Section Start Here =================-->
                <div class="home-banner-part">
                    <div class="banner-img">
                        <img class="desktop" src="{{asset('assets/images/banner/1920x950.png')}}" alt="Banner Image">
                        <img class="back__shape__1" src="{{asset('assets/images/banner/01.png')}}" alt="Shape Image">
                        <img class="back__shape__2" src="{{asset('assets/images/banner/02.png')}}" alt="Shape Image">
                        <img class="back__shape__3" src="{{asset('assets/images/banner/03.png')}}" alt="Shape Image">
                        <img class="back__shape__4" src="{{asset('assets/images/banner/04.png')}}" alt="Shape Image">
                        <img class="back__shape__5" src="{{asset('assets/images/banner/005-removebg.png')}}" alt="Shape Image" width="250px">
                        <div class="back__hero__card">
                            <div class="back__thumb">
                                <a href="#"><img src="{{asset('assets/images/banner/740x493.png')}}" alt="image"></a>
                                <span class="back__price">$26</span>
                            </div>
                            <div class="hero__card-content">
                                <a class="back-category">Audio & Music</a>
                                <h3 class="back-course-title"><a href="coureses-single.html">Learning to write as a Professional.</a></h3>
                                <div class="hero__card-icon d-flex align-items-center">
                                    <div class="hero__card-icon--1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                        <span>500k+</span>
                                    </div>
                                    <div class="hero__card-icon--2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                        <span>4.9</span>
                                    </div>
                                    <div class="back__user">
                                        <img src="assets/images/banner/thumb.jpg" alt="user">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="banner-content">
                            <div class="back-sec-title">
                                <h1 class="banner-title">Specialised in<br> LIFE LONG LEARNING</h1>
                               <!--  <p class="banner-desc">Thousands of students are already studying in Dlear<br> University for all ages!</p> -->
                            </div>
                            <!-- <div class="banner-btn pt-15">
                                <a href="coureses-grid.html" class="back-btn">Discover More Course</a>
                            </div> -->
                        </div>
                    </div>
                </div>
                <!--================= Banner Section End Here =================-->

                <!--=================  About Section Start Here ================= -->
                <div class="about__area p-relative mb-100 pt-50">
                    <div class="container about__area-width">
                        <div class="row about-shadow">
                            <div class="col-lg-6">
                                <div class="about__image">
                                    <img src="assets/images/Managing Director.png" alt="About">
                                </div>
                            </div>
                            <div class="col-lg-6 pl-50 md-pl-15">
                                <div class="about__content">
                                    <h2 class="back__title">
                                        KALWANT SINGH SIDHU
                                        <br> 
                                        Managing Director
                                    </h2>
                                    <p class="about__paragraph">KARL is a Trainer and Business Development Consultant with his 41 years’ experience in business training and consultancy he has produced many successful entrepreneurs. He has also worked in Financial Service Industry for more than 41 years and as a Bank Manager with Maybank for over 20 years. <br>
                                   <!--  Currently, his goal is to educate and to consult entrepreneurs with special tactical marketing strategies to  keep up with the demand of economy post Covid-19, to encourage inter-collaborations and be as competitive with professionals worldwide as we approach new economic era. <br>
                                    As a business consultant and trainer, he is always being invited by companies to train their staff to be more proactive and stay motivated. <br>
                                    Despite his busy schedule, he always makes time to motivate and educate his business students to be strong and prepared at all times with economic challenges in current uncertain times. --> 
                                    </p>
                                    <!-- <img class="about__signature" src="assets/images/about/signature.png" alt="Signature"> -->
                                    <div class="about__btn md-mb-60">
                                        <a href="" class="back-btn"> Read More...</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--================= About Section End Here ================= -->

                <!--=================  Popular Topics Section Start Here ================= -->
                <div class="back_popular_topics pt-50 pb-200">
                    <div class="container"> 
                        <div class="back__title__section text-center">
                            <!-- <h6 class="back__subtitle">Browse Categories</h6> -->
                            <h2 class="back__tittle"> List of Programs</h2>
                        </div>                       
                        <div class="row">
                            <div class="col-md-3">
                                <div class="item__inner">                                    
                                    <div class="icon">
                                        <img src="{{asset('assets/images/icon/icon.png')}}" alt="Icon image">
                                    </div>
                                    <div class="back-content">
                                        <h3 class="back-title"><a href="coureses-grid.html">
                                            Management & Leadership</a></h3>
                                        <!-- <p>5 Courses</p> -->
                                    </div>                                    
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="item__inner">                                    
                                    <div class="icon">
                                        <img src="assets/images/icon/2.png" alt="Icon image">
                                    </div>
                                    <div class="back-content">
                                        <h3 class="back-title"><a href="coureses-grid.html">
                                            Interpersonal Skills</a></h3>
                                       <!--  <p>8 Courses</p> -->
                                    </div>                                    
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="item__inner">                                    
                                    <div class="icon">
                                        <img src="assets/images/icon/3.png" alt="Icon image">
                                    </div>
                                    <div class="back-content">
                                        <h3 class="back-title"><a href="coureses-grid.html">Administration & Secretarial</a></h3>
                                        <!-- <p>14 Courses</p> -->
                                    </div>                                    
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="item__inner">                                    
                                    <div class="icon">
                                        <img src="assets/images/icon/4.png" alt="Icon image">
                                    </div>
                                    <div class="back-content">
                                        <h3 class="back-title"><a href="coureses-grid.html">Strategy <br><br></a></h3>
                                       <!--  <p>7 Courses</p> -->
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center pt-20">
                        <a href="coureses-grid.html" class="back-btn-border"> Browse more Programs</a>
                    </div>
                </div>
                <!--=================  Popular Topics Section End Here ================= -->

                

                <!--================= Counter Section Start Here =================-->
                <div class="count__area">
                    <div class="container count__width">
                        <div class="row">
                            <div class="col-xxl-11 col-xl-11 col-lg-11 offset-lg-1">
                                <div class="row">
                                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6">
                                        <div class="count__content">
                                            <h3 class="count__content--title-1 counter">100</h3>
                                            <!-- <h3 class="count__content--title-2">K</h3> -->
                                            <span class="count__content--plus">+</span>
                                            <p class="count__content--paragraph">Conducts Promgrammes</p>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6">
                                        <div class="count__content">
                                            <h3 class="count__content--title-1 counter">1</h3>
                                            <h3 class="count__content--title-2">K</h3>
                                            <span class="count__content--plus">+</span>
                                            <p class="count__content--paragraph">Participants</p>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6">
                                        <div class="count__content">
                                            <h3 class="count__content--title-1 counter">28</h3>
                                            <h3 class="count__content--title-2">K</h3>
                                            <span class="count__content--plus">+</span>
                                            <p class="count__content--paragraph">Academic worldwide</p>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6">
                                        <div class="count__content">
                                            <h3 class="count__content--title-1 counter">74</h3>
                                            <h3 class="count__content--title-2">K</h3>
                                            <span class="count__content--plus">+</span>
                                            <p class="count__content--paragraph">Total worldwide</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--================= Counter Section End Here =================-->

                <!--================= Blog Section Start Here =================-->
                <div class="back-blog__area blog__area pt-90 pb-120">
                    <div class="container blog__width">
                        <div class="back__title__section text-center">
                            <!-- <h6 class="back__subtitle">From our blog</h6> -->
                            <h2 class="back__tittle"> Lecture and Training Room </h2>
                        </div>
                        <div class="row">
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                <div class="blog__card mb-50">
                                    <div class="blog__thumb w-img p-relative">
                                        <a class="blog__thumb--image" href="blog-details.html">
                                            <img src="{{asset('assets/images/Lecture and Training Room/1.png')}}" alt="This the first card image">
                                        </a>
                                        <!-- <a class="blog__thumb--pre-title" href="blog.html">Podcast</a> -->
                                    </div>
                                    <div class="blog__card--content">
                                        <div class="blog__card--content-area mb-25">
                                            <!-- <span class="blog__card--date">April 10, 2022</span> -->
                                            <h3 class="blog__card--title"><a href="blog-details.html">Lecture and Training Room</a></h3>
                                            <!-- <a class="blog__card--link" href="blog-details.html"> Read more <i class="arrow_right blog__card--link-icon"></i></a> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                <div class="blog__card mb-50">
                                    <div class="blog__thumb w-img p-relative">
                                        <a class="blog__thumb--image" href="blog-details.html">
                                            <img src="{{asset('assets/images/Lecture and Training Room/2.png')}}" alt="This the first card image">
                                        </a>
                                        <!-- <a class="blog__thumb--pre-title" href="blog.html">Video</a> -->
                                    </div>
                                    <div class="blog__card--content">
                                        <div class="blog__card--content-area mb-25">
                                            <!-- <span class="blog__card--date">July 18, 2022</span> -->
                                            <h3 class="blog__card--title"><a href="blog-details.html">Lecture and Training Room</a></h3>
                                            <!-- <a class="blog__card--link" href="blog-details.html">Read more<i class="arrow_right blog__card--link-icon"></i></a> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                <div class="blog__card mb-50">
                                    <div class="blog__thumb w-img p-relative">
                                        <a class="blog__thumb--image" href="blog-details.html">
                                            <img src="{{asset('assets/images/Lecture and Training Room/3.png')}}" alt="This the first card image">
                                        </a>
                                        <!-- <a class="blog__thumb--pre-title" href="blog.html">Article</a> -->
                                    </div>
                                    <div class="blog__card--content">
                                        <div class="blog__card--content-area mb-25">
                                            <!-- <span class="blog__card--date">October 10, 2021</span> -->
                                            <h3 class="blog__card--title"><a href="blog-details.html">Lecture and Training Room</a></h3>
                                            <!-- <a class="blog__card--link" href="blog-details.html">Read more<i class="arrow_right blog__card--link-icon"></i></a> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <!--================= Blog Section End Here =================-->
            </div>
        </div>
       
@endsection