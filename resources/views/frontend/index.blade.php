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

                

                <!--================= Course Section Start Here =================-->
                <!-- <div class="back__course__area pt-120 pb-90">
                    <img class="back__shape__1" src="assets/images/course/shape/1.png" alt="Shape Image">
                    <img class="back__shape__2" src="assets/images/course/shape/02.png" alt="Shape Image">
                    <div class="container">
                        <div class="back__title__section text-center">
                            <h6 class="back__subtitle">Featured Courses</h6>
                            <h2 class="back__tittle"> Choose Unlimited Options </h2>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="course__item mb-30">
                                    <div class="course__thumb">
                                        <a href="coureses-single.html"><img src="assets/images/course/1.jpg" alt="image"></a>
                                    </div>
                                    <div class="course__inner">
                                        <span class="back-category cate-1">UX Design</span>
                                        <h3 class="back-course-title"><a href="coureses-single.html">Become a product <br> Manager learn the skills & job.</a></h3>
                                        <div class="course__card-icon d-flex align-items-center">
                                            <div class="course__card-icon--1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                                <span>500k+</span>
                                            </div>
                                            <div class="course__card-icon--2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                <span>4.9</span>
                                            </div>
                                            <div class="back__user">
                                                $76.00 <img src="assets/images/course/small-image/1.png" alt="user">
                                            </div>
                                        </div>
                                    </div>                                    
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="course__item mb-30">
                                    <div class="course__thumb">
                                        <a href="coureses-single.html"><img src="assets/images/course/2.jpg" alt="image"></a>
                                    </div>
                                    <div class="course__inner">
                                        <span class="back-category cate-2">Development</span>
                                        <h3 class="back-course-title"><a href="coureses-single.html">Open Programming <br>Courses for Everyone Python.</a></h3>
                                        <div class="course__card-icon d-flex align-items-center">
                                            <div class="course__card-icon--1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                                <span>500k+</span>
                                            </div>
                                            <div class="course__card-icon--2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                <span>4.9</span>
                                            </div>
                                            <div class="back__user">
                                                $57.00 <img src="assets/images/course/small-image/2.png" alt="user">
                                            </div>
                                        </div>
                                    </div>                                    
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="course__item mb-30">
                                    <div class="course__thumb">
                                        <a href="coureses-single.html"><img src="assets/images/course/3.jpg" alt="image"></a>
                                    </div>
                                    <div class="course__inner">
                                        <span class="back-category cate-3">Audio & Music</span>
                                        <h3 class="back-course-title"><a href="coureses-single.html">Learning to write as a <br>Professional.</a></h3>
                                        <div class="course__card-icon d-flex align-items-center">
                                            <div class="course__card-icon--1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                                <span>500k+</span>
                                            </div>
                                            <div class="course__card-icon--2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                <span>4.9</span>
                                            </div>
                                            <div class="back__user">
                                                Free <img src="assets/images/course/small-image/3.png" alt="user">
                                            </div>
                                        </div>
                                    </div>                                    
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="course__item mb-30">
                                    <div class="course__thumb">
                                        <a href="coureses-single.html"><img src="assets/images/course/4.jpg" alt="image"></a>
                                    </div>
                                    <div class="course__inner">
                                        <span class="back-category cate-4">Marketing</span>
                                        <h3 class="back-course-title"><a href="coureses-single.html">Academic Listening and <br> Note taking.</a></h3>
                                        <div class="course__card-icon d-flex align-items-center">
                                            <div class="course__card-icon--1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                                <span>500k+</span>
                                            </div>
                                            <div class="course__card-icon--2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                <span>4.9</span>
                                            </div>
                                            <div class="back__user">
                                                $42.00 <img src="assets/images/course/small-image/4.png" alt="user">
                                            </div>
                                        </div>
                                    </div>                                    
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="course__item mb-30">
                                    <div class="course__thumb">
                                        <a href="coureses-single.html"><img src="assets/images/course/5.jpg" alt="image"></a>
                                    </div>
                                    <div class="course__inner">
                                        <span class="back-category cate-5">Bicycling</span>
                                        <h3 class="back-course-title"><a href="coureses-single.html">Master Query in a Short<br> Period of Time.</a></h3>
                                        <div class="course__card-icon d-flex align-items-center">
                                            <div class="course__card-icon--1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                                <span>500k+</span>
                                            </div>
                                            <div class="course__card-icon--2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                <span>4.9</span>
                                            </div>
                                            <div class="back__user">
                                                Free <img src="assets/images/course/small-image/5.png" alt="user">
                                            </div>
                                        </div>
                                    </div>                                    
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="course__item mb-30">
                                    <div class="course__thumb">
                                        <a href="coureses-single.html"><img src="assets/images/course/6.jpg" alt="image"></a>
                                    </div>
                                    <div class="course__inner">
                                        <span class="back-category cate-6">Mechanical</span>
                                        <h3 class="back-course-title"><a href="coureses-single.html">Personal Finance Financial <br>Security Thinking.</a></h3>
                                        <div class="course__card-icon d-flex align-items-center">
                                            <div class="course__card-icon--1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                                <span>500k+</span>
                                            </div>
                                            <div class="course__card-icon--2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                                <span>4.9</span>
                                            </div>
                                            <div class="back__user">
                                                $54.00 <img src="assets/images/course/small-image/1.png" alt="user">
                                            </div>
                                        </div>
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!--================= Course Section End Here =================-->

                <!--=================  Event Section Start Here ================= -->
                <!-- <div class="event__area p-relative pb-100 pt-120">
                    <div class="container event__width">
                        <div class="row">
                            <div class="col-lg-8 pr-80">
                                <div class="event__section-wrapper">
                                    <div class="event__content-wrapper mb-45">
                                        <h2 class="event__title">Join our <br> Upcoming Events</h2>
                                        <p class="event__paragraph">Learning is a life-long journey that in fact we never find
                                            the terminate stop. </p>
                                    </div>
                                    <div class="event__card-wrapper">
                                        <div class="event__card">
                                            <div class="event__card--date-area">
                                                <span class="event__card--date-area-1">29</span>
                                                <span class="event__card--date-area-2">Jun, 2022</span>
                                            </div>
                                            <div class="event__card--icon-area">
                                                <span class="event__card--icon-area-1"><i class="icon" data-feather="clock"></i>
                                                    11:50 am to
                                                    05:50 pm</span>
                                                <span class="event__card--icon-area-2"><i class="icon" data-feather="map-pin"></i> New
                                                    York</span>
                                                <p class="event__card--icon-area-3">Global Conference for reducing.</p>
                                            </div>
                                            <div class="event__card--btn">
                                                <a href="contact.html" class="w-btn w-btn-8">Tickets</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="event__card-wrapper">
                                        <div class="event__card">
                                            <div class="event__card--date-area">
                                                <span class="event__card--date-area-1">12</span>
                                                <span class="event__card--date-area-2">Aug, 2022</span>
                                            </div>
                                            <div class="event__card--icon-area">
                                                <span class="event__card--icon-area-1"><i class="icon" data-feather="clock"></i>
                                                    9:30 am to
                                                    11:30 pm</span>
                                                <span class="event__card--icon-area-2"><i class="icon" data-feather="map-pin"></i> New
                                                    York</span>
                                                <p class="event__card--icon-area-3">Street Performance: Call for Art.</p>
                                            </div>
                                            <div class="event__card--btn">
                                                <a href="contact.html" class="w-btn w-btn-8">Tickets</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="event__card-wrapper">
                                        <div class="event__card">
                                            <div class="event__card--date-area">
                                                <span class="event__card--date-area-1">24</span>
                                                <span class="event__card--date-area-2">May, 2022</span>
                                            </div>
                                            <div class="event__card--icon-area">
                                                <span class="event__card--icon-area-1"><i class="icon" data-feather="clock"></i>
                                                    4:50 am to
                                                    07:50 pm</span>
                                                <span class="event__card--icon-area-2"><i class="icon" data-feather="map-pin"></i> New
                                                    York</span>
                                                <p class="event__card--icon-area-3">Global Conference for reducing.</p>
                                            </div>
                                            <div class="event__card--btn">
                                                <a href="contact.html" class="w-btn w-btn-8">Tickets</a>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="event__small-paragraph">Lorem ipsum dolor sit amet, consectetur adall.</p>
                                    <a class="event__small-paragraph--link" href="#"> View all Event <i class="arrow_right event__small-paragraph--link-icon"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="event__video-btn text-end">
                                    <img class="m-img image-background" src="assets/images/event/bannner.jpg" alt="Video Image">
                                    <div class="event__video-btn--play">
                                    <a href="../../watch.html?v=e5Hc2B50Z7c" class="event__video-btn--play-btn popup-videos">
                                        <i class="arrow_triangle-right"></i>
                                    </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!--=================  Event Section End Here ================= -->
                
                <!--================= Academic Section Start Here =================-->
               <!--  <div class="academic__area p-relative pb-65">
                    <div class="container academic__width">
                        <div class="row">
                            <div class="col-xxl-6 offset-xxl-3 col-xl-6 offset-xl-3 col-lg-6 offset-lg-3">
                                <div class="academic__title-wrapper text-center mb-60">
                                    <h6 class="academic__pre-subtitle">Academics Programs</h6>
                                    <h2 class="academic__title">
                                        Our Academics Programs
                                    </h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6">
                                <div class="academic__container mb-50">
                                    <div class="academic__wrapper">
                                        <div class="academic__wrapper--image m-img">
                                            <img class="academic__wrapper--image-display" src="assets/images/academic/1.jpg" alt="Three people are standing">
                                        </div>
                                        <div class="academic__wrapper--icon-1">
                                            <img class="academic__wrapper--icon-1-middle" src="assets/images/academic/icon/1.png" alt="icon">
                                        </div>
                                    </div>
                                    <div class="academic__round-area-title text-center">
                                        <h6 class="academic__round-area-title-1">Undergraduate</h6>
                                        <p class="academic__round-area-title-2">Online guitar coaching now offers<br>you an
                                            approachable.</p>
                                        <a class="academic__round-area-title-3" href="contact.html">Apply Now<i class="arrow_right academic__round-area-title-3--icon"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 mb-50">
                                <div class="academic__container text-center">
                                    <div class="academic__wrapper">
                                        <div class="academic__wrapper--image m-img">
                                            <img src="assets/images/academic/2.jpg" alt="Three people are standing">
                                        </div>
                                        <div class="academic__wrapper--icon-2">
                                            <img class="academic__wrapper--icon-2-middle-2" src="assets/images/academic/icon/2.png" alt="icon">
                                        </div>
                                    </div>
                                    <div class="academic__round-area-title text-center">
                                        <h6 class="academic__round-area-title-1">PhD Program</h6>
                                        <p class="academic__round-area-title-2">Online guitar coaching now offers<br>you an
                                            approachable.</p>
                                        <a class="academic__round-area-title-3" href="contact.html">Apply Now<i class="arrow_right academic__round-area-title-3--icon"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 mb-50">
                                <div class="academic__container text-center">
                                    <div class="academic__wrapper">
                                        <div class="academic__wrapper--image m-img">
                                            <img src="assets/images/academic/3.jpg" alt="Three people are standing">
                                        </div>
                                        <div class="academic__wrapper--icon-3">
                                            <img class="academic__wrapper--icon-3-middle-3" src="assets/images/academic/icon/3.png" alt="icon">
                                        </div>
                                    </div>
                                    <div class="academic__round-area-title text-center">
                                        <h6 class="academic__round-area-title-1">Postgraduate</h6>
                                        <p class="academic__round-area-title-2">Online guitar coaching now offers <br> you an
                                            approachable.</p>
                                        <a class="academic__round-area-title-3" href="contact.html">Apply Now<i class="arrow_right academic__round-area-title-3--icon"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 mb-50">
                                <div class="academic__container text-center">
                                    <div class="academic__wrapper">
                                        <div class="academic__wrapper--image m-img">
                                            <img src="assets/images/academic/4.jpg" alt="Three people are standing">
                                        </div>
                                        <div class="academic__wrapper--icon-4">
                                            <img class="academic__wrapper--icon-4-middle-4" src="assets/images/academic/icon/4.png" alt="icon">
                                        </div>
                                    </div>
                                    <div class="academic__round-area-title text-center">
                                        <h6 class="academic__round-area-title-1">Continuing Education</h6>
                                        <p class="academic__round-area-title-2">Online guitar coaching now offers <br> you an
                                            approachable.</p>
                                        <a class="academic__round-area-title-3" href="contact.html">Apply Now<i class="arrow_right academic__round-area-title-3--icon"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!--================= Academic Section Start Here =================-->

                <!--================= Call to Action Section Start Here =================-->
                <!-- <div class="cta__area p-relative m-img pt-120 pb-155">
                    <div class="container cta__width">
                        <div class="row">
                            <div class="col-xxl-12">
                                <div class="cta__wrapper text-center">
                                    <h6 class="cta__pre-subtitle">Featured Courses</h6>
                                    <h2 class="cta__title">Campus Information</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!--================= Call to Action Section End Here =================-->

                <!--================= Feature Section Start Here =================-->
                <!-- <div class="feature__area">
                    <div class="container feature__width">
                        <div class="row">
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="feature__item mb-30 transition-3 white-bg">
                                    <div class="feature__icon mb-30">
                                        <img src="assets/images/cta/icon/1.png" alt="This is the icon image">
                                    </div>
                                    <div class="feature__content">
                                        <h3 class="feature__title-1"><a href="contact.html">Student Life</a></h3>
                                        <p class="feature__paragraph">The modified parameters will be pulled <br> panel
                                            automatically.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                <div class="feature__item  feature__item2  mb-30 transition-3 white-bg">
                                    <div class="feature__icon mb-30">
                                        <img src="assets/images/cta/icon/2.png" alt="This is the icon image">
                                    </div>
                                    <div class="feature__content">
                                        <h3 class="feature__title-1"><a href="contact.html">Arts & Clubs</a></h3>
                                        <p class="feature__paragraph">The modified parameters will be pulled <br> panel
                                            automatically.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-4 col-lg-4">
                                <div class="feature__item feature__item3  mb-30  transition-3 white-bg">
                                    <div class="feature__icon mb-30">
                                        <img src="assets/images/cta/icon/3.png" alt="This is the icon image">
                                    </div>
                                    <div class="feature__content">
                                        <h3 class="feature__title-1"><a href="contact.html">Sports and Fitness</a></h3>
                                        <p class="feature__paragraph">The modified parameters will be pulled <br> panel
                                            automatically.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!--================= Feature Section End Here =================-->

                <!--================= Counter Section Start Here =================-->
                <div class="count__area">
                    <div class="container count__width">
                        <div class="row">
                            <div class="col-xxl-11 col-xl-11 col-lg-11 offset-lg-1">
                                <div class="row">
                                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6">
                                        <div class="count__content">
                                            <h3 class="count__content--title-1 counter">10</h3>
                                            <h3 class="count__content--title-2">K</h3>
                                            <span class="count__content--plus">+</span>
                                            <p class="count__content--paragraph">Students worldwide</p>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6">
                                        <div class="count__content">
                                            <h3 class="count__content--title-1 counter">45</h3>
                                            <h3 class="count__content--title-2">K</h3>
                                            <span class="count__content--plus">+</span>
                                            <p class="count__content--paragraph">University worldwide</p>
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
                            <h6 class="back__subtitle">From our blog</h6>
                            <h2 class="back__tittle"> Latest from our Blogs </h2>
                        </div>
                        <div class="row">
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                <div class="blog__card mb-50">
                                    <div class="blog__thumb w-img p-relative">
                                        <a class="blog__thumb--image" href="blog-details.html">
                                            <img src="assets/images/blog/1.jpg" alt="This the first card image">
                                        </a>
                                        <a class="blog__thumb--pre-title" href="blog.html">Podcast</a>
                                    </div>
                                    <div class="blog__card--content">
                                        <div class="blog__card--content-area mb-25">
                                            <span class="blog__card--date">April 10, 2022</span>
                                            <h3 class="blog__card--title"><a href="blog-details.html">Fostering future Schools <br> & social Innovation</a></h3>
                                            <a class="blog__card--link" href="blog-details.html"> Read more <i class="arrow_right blog__card--link-icon"></i></a>
                                        </div>
                                        <div class="blog__card--icon ">
                                            <div class="blog__card--icon-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                                <span>Nerte Gronw</span>
                                            </div>
                                            <div class="blog__card--icon-2">
                                                <div class="blog__card--icon-2-first">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                                    <span>5</span>
                                                </div>
                                                <div class="blog__card--icon-2-second">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                                                    <span>3</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                <div class="blog__card mb-50">
                                    <div class="blog__thumb w-img p-relative">
                                        <a class="blog__thumb--image" href="blog-details.html">
                                            <img src="assets/images/blog/2.jpg" alt="This the first card image">
                                        </a>
                                        <a class="blog__thumb--pre-title" href="blog.html">Video</a>
                                    </div>
                                    <div class="blog__card--content">
                                        <div class="blog__card--content-area mb-25">
                                            <span class="blog__card--date">July 18, 2022</span>
                                            <h3 class="blog__card--title"><a href="blog-details.html">The Surprising Reason <br> CollegeTuition</a></h3>
                                            <a class="blog__card--link" href="blog-details.html">Read more<i class="arrow_right blog__card--link-icon"></i></a>
                                        </div>
                                        <div class="blog__card--icon d-flex align-items-center">
                                            <div class="blog__card--icon-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                                <span>Charlie Doyle</span>
                                            </div>
                                            <div class="blog__card--icon-2">
                                                <div class="blog__card--icon-2-first">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                                    <span>5</span>
                                                </div>
                                                <div class="blog__card--icon-2-second">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                                                    <span>3</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                <div class="blog__card mb-50">
                                    <div class="blog__thumb w-img p-relative">
                                        <a class="blog__thumb--image" href="blog-details.html">
                                            <img src="assets/images/blog/3.jpg" alt="This the first card image">
                                        </a>
                                        <a class="blog__thumb--pre-title" href="blog.html">Article</a>
                                    </div>
                                    <div class="blog__card--content">
                                        <div class="blog__card--content-area mb-25">
                                            <span class="blog__card--date">October 10, 2021</span>
                                            <h3 class="blog__card--title"><a href="blog-details.html">Those other <br> College Expenses about</a></h3>
                                            <a class="blog__card--link" href="blog-details.html">Read more<i class="arrow_right blog__card--link-icon"></i></a>
                                        </div>
                                        <div class="blog__card--icon d-flex align-items-center">
                                            <div class="blog__card--icon-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                                <span>Owen Christ</span>
                                            </div>
                                            <div class="blog__card--icon-2">
                                                <div class="blog__card--icon-2-first">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                                                    <span>5</span>
                                                </div>
                                                <div class="blog__card--icon-2-second">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                                                    <span>3</span>
                                                </div>
                                            </div>
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
        <!-- <div class="newsletter__area">
            <div class="container newsletter__width">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="newsletter__wrapper">
                            <div class="newsletter__content">
                                <h2 class="newsletter__title">Newsletter to get <br> in touch</h2>
                            </div>
                            <div class="newsletter__form">
                                <form>
                                    <input type="email" placeholder="Your Email">
                                    <button type="submit">Subscribe</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
@endsection