@extends('layouts.master')
@section('content')
         <!--================= back wrapper Start Here =================-->
        <div class="back-wrapper">
            <div class="back-wrapper-inner">
                <!--================= Back Breadcrumbs Section Start Here =================-->
                <div class="back-breadcrumbs">
                    <div class="breadcrumbs-wrap">
                        <img class="desktop" src="assets/images/breadcrumbs/1.jpg" alt="Breadcrumbs">
                        <img class="mobile" src="assets/images/breadcrumbs/1.jpg" alt="Breadcrumbs">
                        <div class="breadcrumbs-inner">
                            <div class="container">
                                <div class="breadcrumbs-text">
                                    <h1 class="breadcrumbs-title">Services4</h1>
                                    <div class="back-nav">
                                        <ul>
                                            <li><a href="{{route('home')}}">Home</a></li>
                                            <li>Services4</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                
                </div>
                <!--================= Back Breadcrumbs Section End Here =================-->

               <!--================= Blog Section Start Here =================-->
                <div class="back-blog__area blog__area pt-90 pb-120">
                    <div class="container blog__width">
                        <div class="back__title__section text-center">
                            <!-- <h6 class="back__subtitle">From our blog</h6> -->
                            <h2 class="back__tittle"> Our Services </h2>
                        </div>
                        <div class="row pb-120">
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                <div class="blog__card mb-50">
                                    <div class="blog__thumb w-img p-relative">
                                        <a class="blog__thumb--image" href="blog-details.html">
                                            <img src="{{asset('assets/images/our-services/procurement.png')}}" alt="This the first card image">
                                        </a>
                                        <!-- <a class="blog__thumb--pre-title" href="blog.html">Podcast</a> -->
                                    </div>
                                    <div class="blog__card--content">
                                        <div class="blog__card--content-area mb-25">
                                            <!-- <span class="blog__card--date">April 10, 2022</span> -->
                                            <h3 class="blog__card--title"><a href="#">Procurement and supply Chain</a></h3>
                                            <!-- <a class="blog__card--link" href="blog-details.html"> Read more <i class="arrow_right blog__card--link-icon"></i></a> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                <div class="blog__card mb-50">
                                    <div class="blog__thumb w-img p-relative">
                                        <a class="blog__thumb--image" href="blog-details.html">
                                            <img src="{{asset('assets/images/our-services/health.png')}}">
                                        </a>
                                        <!-- <a class="blog__thumb--pre-title" href="blog.html">Video</a> -->
                                    </div>
                                    <div class="blog__card--content">
                                        <div class="blog__card--content-area mb-25">
                                            <!-- <span class="blog__card--date">July 18, 2022</span> -->
                                            <h3 class="blog__card--title"><a href="#">Health – Safety – Security and Environment (HSSE)</a>
                                            </h3>
                                            <!-- <a class="blog__card--link" href="blog-details.html">Read more<i class="arrow_right blog__card--link-icon"></i></a> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                <div class="blog__card mb-50">
                                    <div class="blog__thumb w-img p-relative">
                                        <a class="blog__thumb--image" href="blog-details.html">
                                            <img src="{{asset('assets/images/our-services/legal.png')}}">
                                        </a>
                                        <!-- <a class="blog__thumb--pre-title" href="blog.html">Article</a> -->
                                    </div>
                                    <div class="blog__card--content">
                                        <div class="blog__card--content-area mb-25">
                                            <!-- <span class="blog__card--date">October 10, 2021</span> -->
                                            <h3 class="blog__card--title"><a href="#">Legal</a>
                                                <br /> <br />
                                            </h3>
                                            <!-- <a class="blog__card--link" href="blog-details.html">Read more<i class="arrow_right blog__card--link-icon"></i></a> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                <div class="blog__card mb-50">
                                    <div class="blog__thumb w-img p-relative">
                                        <a class="blog__thumb--image" href="blog-details.html">
                                            <img src="{{asset('assets/images/our-services/maintanance.png')}}">
                                        </a>
                                        <!-- <a class="blog__thumb--pre-title" href="blog.html">Podcast</a> -->
                                    </div>
                                    <div class="blog__card--content">
                                        <div class="blog__card--content-area mb-25">
                                            <!-- <span class="blog__card--date">April 10, 2022</span> -->
                                            <h3 class="blog__card--title"><a href="#">Maintenance and Asset Management</a>
                                            </h3>
                                            <!-- <a class="blog__card--link" href="blog-details.html"> Read more <i class="arrow_right blog__card--link-icon"></i></a> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                <div class="blog__card mb-50">
                                    <div class="blog__thumb w-img p-relative">
                                        <a class="blog__thumb--image" href="blog-details.html">
                                            <img src="{{asset('assets/images/our-services/machenical.png')}}">
                                        </a>
                                        <!-- <a class="blog__thumb--pre-title" href="blog.html">Video</a> -->
                                    </div>
                                    <div class="blog__card--content">
                                        <div class="blog__card--content-area mb-25">
                                            <!-- <span class="blog__card--date">July 18, 2022</span> -->
                                            <h3 class="blog__card--title"><a href="#">Mechanical Engineering</a>
                                                <br /><br />
                                            </h3>
                                            <!-- <a class="blog__card--link" href="blog-details.html">Read more<i class="arrow_right blog__card--link-icon"></i></a> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                <div class="blog__card mb-50">
                                    <div class="blog__thumb w-img p-relative">
                                        <a class="blog__thumb--image" href="blog-details.html">
                                            <img src="{{asset('assets/images/our-services/automation.png')}}">
                                        </a>
                                        <!-- <a class="blog__thumb--pre-title" href="blog.html">Article</a> -->
                                    </div>
                                    <div class="blog__card--content">
                                        <div class="blog__card--content-area mb-25">
                                            <!-- <span class="blog__card--date">October 10, 2021</span> -->
                                            <h3 class="blog__card--title"><a href="#">Automation and Control Engineering</a></h3>
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
        <!--================= Back Wrapper End Here =================-->
@endsection