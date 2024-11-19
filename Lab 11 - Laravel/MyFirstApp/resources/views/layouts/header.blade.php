<!--
************************************************************************************************
                        Developed by: Muhammad Jamil
                        Development Date : 18-11-2024
                        Page Updated On  : 18-11-2024
************************************************************************************************
-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>@yield('title') | {{ config('app.name') }}</title>
        <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png" />
        <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png" />
        <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png" />
        <link rel="manifest" href="assets/images/favicons/site.webmanifest" />
        <meta name="description" content="envens PHP Template " />
        <link rel="preconnect" href="https://fonts.googleapis.com/">
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&amp;display=swap"
            rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&amp;display=swap"
            rel="stylesheet">
        <link rel="stylesheet" href="{{ url('assets/vendors/bootstrap/css/bootstrap.min.css'); }}" />
        <link rel="stylesheet" href="{{ url('assets/vendors/animate/animate.min.css'); }}" />
        <link rel="stylesheet" href="{{ url('assets/vendors/animate/custom-animate.css'); }}" />
        <link rel="stylesheet" href="{{ url('assets/vendors/fontawesome/css/all.min.css'); }}" />
        <link rel="stylesheet" href="{{ url('assets/vendors/jarallax/jarallax.css'); }}" />
        <link rel="stylesheet" href="{{ url('assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css'); }}" />
        <link rel="stylesheet" href="{{ url('assets/vendors/odometer/odometer.min.css'); }}" />
        <link rel="stylesheet" href="{{ url('assets/vendors/swiper/swiper.min.css'); }}" />
        <link rel="stylesheet" href="{{ url('assets/vendors/envens-icons/style.css'); }}">
        <link rel="stylesheet" href="{{ url('assets/vendors/owl-carousel/owl.carousel.min.css'); }}" />
        <link rel="stylesheet" href="{{ url('assets/vendors/owl-carousel/owl.theme.default.min.css'); }}" />
        <link rel="stylesheet" href="{{ url('assets/vendors/bootstrap-select/css/bootstrap-select.min.css'); }}" />
        <link rel="stylesheet" href="{{ url('assets/vendors/nice-select/nice-select.css'); }}" />
        <link rel="stylesheet" href="{{ url('assets/vendors/jquery-ui/jquery-ui.css'); }}" />
        <link rel="stylesheet" href="{{ url('assets/vendors/timepicker/timePicker.css'); }}" />
        <link rel="stylesheet" href="{{ url('assets/vendors/reey-font/stylesheet.css') }}" />
        <link rel="stylesheet" href="{{ url('assets/css/envens.css') }}" />
        <link rel="stylesheet" href="{{ url('assets/css/envens-responsive.css') }}" />
    </head>
    <body>
        <div class="page-wrapper">
            <div class="preloader">
                <div class="preloader__image"></div>
            </div>
            <header class="main-header">
                <nav class="main-menu">
                    <div class="main-menu__wrapper">
                        <div class="main-menu__wrapper-inner">
                            <div class="main-menu__left">
                                <div class="main-menu__logo">
                                    <a href="#"><img src="assets/images/resources/logo-1.png" alt="" style="width: 100%;"></a>
                                </div>
                            </div>
                            <div class="main-menu__right">
                                <div class="main-menu__main-menu-box">
                                    <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                    <ul class="main-menu__list">
                                        <li>
                                            <a href="{{url('/')}}">Home</a>
                                        </li>
                                        <li>
                                            <a href="{{url('/about')}}">About</a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#">Explore</a>
                                            <ul>
                                                <li><a href="{{url('/spiritual-events')}}">Spiritual Events</a></li>
                                                <li><a href="{{url('/cultural-events')}}">Cultural Events</a></li>
                                                <li><a href="{{url('/art-and-craft')}}">Art &  Craft</a></li>
                                                <li><a href="{{url('/technical-competitions')}}">Technical Competitions</a></li>
                                                <li><a href="{{url('/entrepreneurship-and-innovation')}}">Entrepreneurship & Innovation</a></li>
                                                <li><a href="{{url('/sports-competitions')}}">Sports Competitions</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#">Ecosystem</a>
                                            <ul>
                                                <li><a href="{{url('/sponsors')}}">Sponsors</a></li>
                                                <li><a href="{{url('/partners')}}">Partners</a></li>
                                                <li><a href="{{url('/exhibitors')}}">Exhibitors</a></li>
                                                <li><a href="{{url('/media')}}">Media</a></li>
                                                <li><a href="{{url('/advisory-members')}}">Advisory Members</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#">General Info</a>
                                            <ul>
                                                <li><a href="{{url('/guidelines')}}">Guidelines</a></li>
                                                <li><a href="{{url('/terms-and-conditions')}}">Terms and Conditions</a></li>
                                                <li><a href="{{url('/faqs')}}">FAQs</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="{{url('/contact')}}">Contact</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="main-menu__social-and-search-box">
                                    <div class="main-menu__social">
                                        <a href="#"><span class="fab fa-facebook-f"></span></a>
                                        <a href="#"><span class="fab fa-twitter"></span></a>
                                        <a href="#"><span class="fab fa-instagram"></span></a>
                                        <a href="#"><span class="fab fa-linkedin-in"></span></a>
                                        <a href="#"><span class="fab fa-youtube"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </header>
            <div class="stricky-header stricked-menu main-menu">
                <div class="sticky-header__content"></div>
            </div>
