<!DOCTYPE html>
<html lang="zxx">
    <head>
        <!--================= Meta tag =================-->
        <meta charset="utf-8">
        <title>PRONITY SUCCESS</title>
        <meta name="description" content="">
        <!--================= Responsive Tag =================-->
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--================= Favicon =================-->
        <link rel="apple-touch-icon" href="{{asset('assets/images/fav2.png')}}">
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/fav2.png')}}">        
        <!--================= Bootstrap V5 css =================-->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
        <!--================= Back Menus css =================-->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/back-menus.css')}}">               
        <!--================= Animate css =================-->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/animate.css')}}">
        <!--================= Owl Carousel css =================-->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/owl.carousel.css')}}">
        <!--================= Elegant icon css  =================-->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/elegant-icon.css')}}">
        <!--================= Magnific Popup css =================-->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/magnific-popup.css')}}">
        <!--================= Back Animations css =================-->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/back-animations.css')}}">  
        <!--================= style css =================-->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/style.css')}}">
        <!--================= Spacing css =================-->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/back-spacing.css')}}">
        <!--================= Responsive css =================-->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/responsive.css')}}">
    </head>
    <body> 
        <!--================= Preloader Section Start Here =================-->        
        <div id="back__preloader">
            <div id="back__circle_loader"></div>
            <div class="back__loader_logo"><img src="{{asset('assets/images/preload2.png')}}" alt="Preload"></div>
        </div>        
        <!--================= Preloader Section End Here =================-->

        <!--================= Header Section Start Here =================-->
        @include('layouts.header')
        <!--================= Header Section End Here =================-->

        <!--================= Back Wrapper Start Here =================-->
        @yield('content')
        <!--================= Back Wrapper End Here =================-->

        <!--================= Newsletter Section Start Here =================-->
        
        <!--================= Newsletter Section End Here =================-->

        <!--================= Footer Section Start Here =================-->
        @include('layouts.footer')
        <!--================= Footer Section End Here =================-->
        
        <!--================= Scroll to Top Start =================-->
        <div id="backscrollUp">
            <span aria-hidden="true" class="arrow_carrot-up"></span>
        </div> 
        <!--================= Scroll to Top End =================-->

        <!--================= Jquery latest version =================-->
        <script src="{{asset('assets/js/jquery.min.js')}}"></script>
        <!--================= Modernizr js =================-->
        <script src="{{asset('assets/js/modernizr-2.8.3.min.js')}}"></script>
        <!--================= Bootstrap js =================-->
        <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
        <!--================= Owl Carousel js =================-->
        <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
        <!--================= Magnific Popup =================-->
        <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
        <!--================= Counter up js =================-->
        <script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
        <script src="{{asset('assets/js/waypoints.min.js')}}"></script>
        <!--================= Wow js =================-->
        <script src="{{asset('assets/js/wow.min.js')}}"></script>                
        <!--================= Back menus js =================-->
        <script src="{{asset('assets/js/back-menus.js')}}"></script>
        <!--================= Plugins js =================-->
        <script src="{{asset('assets/js/plugins.js')}}"></script>       
    <!--================= Main js =================-->
        <script src="{{asset('assets/js/main.js')}}"></script>
    </body>
</html>