@extends('layouts.main')
@section('title', 'Home')
@section('main-container')
            <section class="main-slider">
                <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
                "effect": "fade",
                "pagination": {
                "el": "#main-slider-pagination",
                "type": "bullets",
                "clickable": true
                },
                "navigation": {
                "nextEl": "#main-slider__swiper-button-next",
                "prevEl": "#main-slider__swiper-button-prev"
                },
                "autoplay": {
                    "delay": 8000
                }
            }'>
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="main-slider__bg"
                                style="background-image: url(assets/images/backgrounds/slider-1-1.jpg);"></div>
                            <div class="main-slider__img">
                                <img src="assets/images/resources/main-slider-img-1-1.jpg" alt="">
                            </div>
                            <div class="main-slider__shape-1"></div>
                            <div class="main-slider__shape-2">
                                <img src="assets/images/shapes/main-slider-shape-2.png" alt="">
                            </div>
                            <div class="main-slider__shape-3"></div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="main-slider__content">
                                            <p class="main-slider__sub-title">CUI SWIFT</p>
                                            <h2 class="main-slider__title">Uniting Minds, Igniting Ideas</h2>
                                            <a href="#" class="main-slider__curved-circle">
                                                <div class="curved-circle">
                                                   CUI Sahiwal SWIFT 2024
                                                </div>
                                                <div class="main-slider__arrow-icon-box">
                                                    <div class="main-slider__arrow-icon">
                                                        <span class="icon-down-right"></span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="main-slider__bg"
                                style="background-image: url(assets/images/backgrounds/slider-1-2.jpg);"></div>
                            <div class="main-slider__img">
                                <img src="assets/images/resources/main-slider-img-1-2.jpg" alt="">
                            </div>
                            <div class="main-slider__shape-1"></div>
                            <div class="main-slider__shape-2">
                                <img src="assets/images/shapes/main-slider-shape-2.png" alt="">
                            </div>
                            <div class="main-slider__shape-3"></div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="main-slider__content">
                                            <p class="main-slider__sub-title">CUI SWIFT</p>
                                            <h2 class="main-slider__title">Compete Conquer, Create</h2>
                                            <a href="#" class="main-slider__curved-circle">
                                                <div class="curved-circle">
                                                    CUI Sahiwal SWIFT 2024
                                                </div>
                                                <div class="main-slider__arrow-icon-box">
                                                    <div class="main-slider__arrow-icon">
                                                        <span class="icon-down-right"></span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="main-slider__bg"
                                style="background-image: url(assets/images/backgrounds/slider-1-3.jpg);"></div>
                            <div class="main-slider__img">
                                <img src="assets/images/resources/main-slider-img-1-3.jpg" alt="">
                            </div>
                            <div class="main-slider__shape-1"></div>
                            <div class="main-slider__shape-2">
                                <img src="assets/images/shapes/main-slider-shape-2.png" alt="">
                            </div>
                            <div class="main-slider__shape-3"></div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="main-slider__content">
                                            <p class="main-slider__sub-title">CUI SWIFT</p>
                                            <h2 class="main-slider__title">Ideas in Action</h2>
                                            <a href="#" class="main-slider__curved-circle">
                                                <div class="curved-circle">
                                                    CUI Sahiwal SWIFT 2024
                                                </div>
                                                <div class="main-slider__arrow-icon-box">
                                                    <div class="main-slider__arrow-icon">
                                                        <span class="icon-down-right"></span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination" id="main-slider-pagination"></div>
                </div>
            </section>
            <section class="feature-one">
                <div class="feature-one__shape-1 zoominout">
                    <img src="assets/images/shapes/feature-one-shape-1.png" alt="">
                </div>
                <div class="feature-one__shape-2">
                    <img src="assets/images/shapes/feature-one-shape-2.png" alt="">
                </div>
                <div class="container">
                    <div class="section-title text-center">
                        <div class="section-title__tagline-box">
                            <span class="section-title__tagline"><span></span> SWIFT Features <span></span></span>
                        </div>
                        <h2 class="section-title__title">Discover the Highlights of  <span>CUI SWIFT</span></h2>
                    </div>
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="100ms">
                            <div class="feature-one__single">
                                <div class="feature-one__single-shape-1"
                                    style="background-image: url(assets/images/shapes/feature-one-single-shape-1.png);">
                                </div>
                                <div class="feature-one__img-box">
                                    <div class="feature-one__img">
                                        <img src="assets/images/resources/feature-1-1.jpg" alt="">
                                    </div>
                                    <div class="feature-one__count"></div>
                                    <div class="feature-one__content">
                                        <div class="feature-one__icon">
                                            <span class="icon-united"></span>
                                        </div>
                                        <h3 class="feature-one__title"><a href="#">Diverse Competitions</a>
                                        </h3>
                                        <p class="feature-one__text">Engage in a wide range of events.</p>
                                    </div>
                                    <div class="feature-one__btn-box">
                                        <a href="#"><span
                                                class="fas fa-arrow-circle-right"></span>More
                                            Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                            <div class="feature-one__single">
                                <div class="feature-one__single-shape-1"
                                    style="background-image: url(assets/images/shapes/feature-one-single-shape-1.png);">
                                </div>
                                <div class="feature-one__img-box">
                                    <div class="feature-one__img">
                                        <img src="assets/images/resources/feature-1-2.jpg" alt="">
                                    </div>
                                    <div class="feature-one__count"></div>
                                    <div class="feature-one__content">
                                        <div class="feature-one__icon">
                                            <span class="icon-brain"></span>
                                        </div>
                                        <h3 class="feature-one__title"><a href="about.html">Best Digital Ideas</a></h3>
                                        <p class="feature-one__text">This high-level structure software</p>
                                    </div>
                                    <div class="feature-one__btn-box">
                                        <a href="about.html"><span class="fas fa-arrow-circle-right"></span>More
                                            Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 wow fadeInRight" data-wow-delay="300ms">
                            <div class="feature-one__single">
                                <div class="feature-one__single-shape-1"
                                    style="background-image: url(assets/images/shapes/feature-one-single-shape-1.png);">
                                </div>
                                <div class="feature-one__img-box">
                                    <div class="feature-one__img">
                                        <img src="assets/images/resources/feature-1-3.jpg" alt="">
                                    </div>
                                    <div class="feature-one__count"></div>
                                    <div class="feature-one__content">
                                        <div class="feature-one__icon">
                                            <span class="icon-connection"></span>
                                        </div>
                                        <h3 class="feature-one__title"><a href="contact.html">Networking People</a></h3>
                                        <p class="feature-one__text">This high-level structure software</p>
                                    </div>
                                    <div class="feature-one__btn-box">
                                        <a href="contact.html"><span class="fas fa-arrow-circle-right"></span>More
                                            Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="100ms">
                            <div class="feature-one__single">
                                <div class="feature-one__single-shape-1"
                                    style="background-image: url(assets/images/shapes/feature-one-single-shape-1.png);">
                                </div>
                                <div class="feature-one__img-box">
                                    <div class="feature-one__img">
                                        <img src="assets/images/resources/feature-1-1.jpg" alt="">
                                    </div>
                                    <div class="feature-one__count"></div>
                                    <div class="feature-one__content">
                                        <div class="feature-one__icon">
                                            <span class="icon-icon-15151715"></span>
                                        </div>
                                        <h3 class="feature-one__title"><a href="speaker-single.html">Confirm
                                                Speakers</a>
                                        </h3>
                                        <p class="feature-one__text">This high-level structure software</p>
                                    </div>
                                    <div class="feature-one__btn-box">
                                        <a href="speaker-single.html"><span
                                                class="fas fa-arrow-circle-right"></span>More
                                            Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                            <div class="feature-one__single">
                                <div class="feature-one__single-shape-1"
                                    style="background-image: url(assets/images/shapes/feature-one-single-shape-1.png);">
                                </div>
                                <div class="feature-one__img-box">
                                    <div class="feature-one__img">
                                        <img src="assets/images/resources/feature-1-2.jpg" alt="">
                                    </div>
                                    <div class="feature-one__count"></div>
                                    <div class="feature-one__content">
                                        <div class="feature-one__icon">
                                            <span class="icon-brain"></span>
                                        </div>
                                        <h3 class="feature-one__title"><a href="about.html">Best Digital Ideas</a></h3>
                                        <p class="feature-one__text">This high-level structure software</p>
                                    </div>
                                    <div class="feature-one__btn-box">
                                        <a href="about.html"><span class="fas fa-arrow-circle-right"></span>More
                                            Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 wow fadeInRight" data-wow-delay="300ms">
                            <div class="feature-one__single">
                                <div class="feature-one__single-shape-1"
                                    style="background-image: url(assets/images/shapes/feature-one-single-shape-1.png);">
                                </div>
                                <div class="feature-one__img-box">
                                    <div class="feature-one__img">
                                        <img src="assets/images/resources/feature-1-3.jpg" alt="">
                                    </div>
                                    <div class="feature-one__count"></div>
                                    <div class="feature-one__content">
                                        <div class="feature-one__icon">
                                            <span class="icon-connection"></span>
                                        </div>
                                        <h3 class="feature-one__title"><a href="contact.html">Networking People</a></h3>
                                        <p class="feature-one__text">This high-level structure software</p>
                                    </div>
                                    <div class="feature-one__btn-box">
                                        <a href="contact.html"><span class="fas fa-arrow-circle-right"></span>More
                                            Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--Feature One End--> <!--About One Start-->
            <section class="about-one">
                <div class="about-one__shape-2 zoominout">
                    <img src="assets/images/shapes/about-one-shape-2.png" alt="">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 wow fadeInLeft" data-wow-delay="300ms">
                            <div class="about-one__left">
                                <div class="section-title text-left">
                                    <div class="section-title__tagline-box">
                                        <p class="section-title__tagline">About SWIFT </p>
                                    </div>
                                    <h2 class="section-title__title">Innovating with <span>Talent</span>  and <span>Culture</span>
                                    </h2>
                                </div>
                                <p class="about-one__text">
                                    CUI SWIFT is the inaugural mega event organized by COMSATS University Islamabad, Sahiwal Campus, designed to bring together students from diverse educational institutions. This dynamic four-day event aims to foster innovation, collaboration, and personal development through a blend of academic, technical, cultural, and sports competitions.
                                </p>
                                <br>
                                <br>
                                <div class="about-one__timer-box">
                                    <div class="timer-box">
                                        <div class="countdown-timer">
                                            <div class="default-coundown">
                                                <div class="box">
                                                    <div class="countdown time-countdown"
                                                        data-countdown-time="2024/12/09">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 wow fadeInRight" data-wow-delay="300ms">
                            <div class="about-one__right">
                                <div class="about-one__img-box">
                                    <div class="about-one__img">
                                        <img src="assets/images/resources/about-one-img-1.jpg" alt="">
                                    </div>
                                    <div class="about-one__img-2">
                                        <img src="assets/images/resources/about-one-img-2.jpg" alt="">
                                    </div>
                                    <div class="about-one__img-3">
                                        <img src="assets/images/resources/about-one-img-3.jpg" alt="">
                                    </div>
                                    <div class="about-one__shape-1">
                                        <img src="assets/images/shapes/about-one-shape-1.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--About One End--> <!--Team One Start-->
            <section class="team-one">
                <div class="team-one__bg-shape"></div>
                <div class="team-one__bg-shape-2"></div>
                <div class="team-one__bg-box">
                    <div class="team-one__bg" style="background-image: url(assets/images/backgrounds/team-one-bg.jpg);">
                    </div>
                </div>
                <div class="container">
                    <div class="section-title text-center">
                        <div class="section-title__tagline-box">
                            <p class="section-title__tagline"><span></span> Our team <span></span> </p>
                        </div>
                        <h2 class="section-title__title">Feature for your <span>Event</span></h2>
                    </div>
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="100ms">
                            <div class="team-one__single">
                                <div class="team-one__img-box">
                                    <div class="team-one__img">
                                        <img src="assets/images/team/team-1-1.jpg" alt="">
                                    </div>
                                    <div class="team-one__single-shape-1">
                                        <img src="assets/images/shapes/team-one-single-shape-1.png" alt="">
                                    </div>
                                    <div class="team-one__single-hover-shape-1">
                                        <img src="assets/images/shapes/team-one-single-hover-shape-1.png" alt="">
                                    </div>
                                    <div class="team-one__share-and-social">
                                        <div class="team-one__share">
                                            <a href="#"><span class="fas fa-share-alt"></span></a>
                                        </div>
                                        <div class="team-one__social">
                                            <a href="#"><span class="fas fa-wifi"></span></a>
                                            <a href="#"><span class="fab fa-facebook-f"></span></a>
                                            <a href="#"><span class="fab fa-twitter"></span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-one__content">
                                    <p class="team-one__sub-title">Advisor</p>
                                    <h3 class="team-one__title"><a href="https://ww2.comsats.edu.pk/faculty/FacultyDetails.aspx?Uid=18720">Dr. Sabir Ali Shehzad</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="100ms">
                            <div class="team-one__single">
                                <div class="team-one__img-box">
                                    <div class="team-one__img">
                                        <img src="assets/images/team/team-1-2.jpg" alt="">
                                    </div>
                                    <div class="team-one__single-shape-1">
                                        <img src="assets/images/shapes/team-one-single-shape-1.png" alt="">
                                    </div>
                                    <div class="team-one__single-hover-shape-1">
                                        <img src="assets/images/shapes/team-one-single-hover-shape-1.png" alt="">
                                    </div>
                                    <div class="team-one__share-and-social">
                                        <div class="team-one__share">
                                            <a href="#"><span class="fas fa-share-alt"></span></a>
                                        </div>
                                        <div class="team-one__social">
                                            <a href="#"><span class="fas fa-wifi"></span></a>
                                            <a href="#"><span class="fab fa-facebook-f"></span></a>
                                            <a href="#"><span class="fab fa-twitter"></span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-one__content">
                                    <p class="team-one__sub-title">Convener</p>
                                    <h3 class="team-one__title"><a href="https://ww2.comsats.edu.pk/faculty/FacultyDetails.aspx?Uid=18720">Dr. Minhas Akbar</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="100ms">
                            <div class="team-one__single">
                                <div class="team-one__img-box">
                                    <div class="team-one__img">
                                        <img src="assets/images/team/team-1-2.jpg" alt="">
                                    </div>
                                    <div class="team-one__single-shape-1">
                                        <img src="assets/images/shapes/team-one-single-shape-1.png" alt="">
                                    </div>
                                    <div class="team-one__single-hover-shape-1">
                                        <img src="assets/images/shapes/team-one-single-hover-shape-1.png" alt="">
                                    </div>
                                    <div class="team-one__share-and-social">
                                        <div class="team-one__share">
                                            <a href="#"><span class="fas fa-share-alt"></span></a>
                                        </div>
                                        <div class="team-one__social">
                                            <a href="#"><span class="fas fa-wifi"></span></a>
                                            <a href="#"><span class="fab fa-facebook-f"></span></a>
                                            <a href="#"><span class="fab fa-twitter"></span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-one__content">
                                    <p class="team-one__sub-title">Member</p>
                                    <h3 class="team-one__title"><a href="https://ww2.comsats.edu.pk/faculty/FacultyDetails.aspx?Uid=18720">Dr. M. Waseem Sajid</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="100ms">
                            <div class="team-one__single">
                                <div class="team-one__img-box">
                                    <div class="team-one__img">
                                        <img src="assets/images/team/team-1-4.jpg" alt="">
                                    </div>
                                    <div class="team-one__single-shape-1">
                                        <img src="assets/images/shapes/team-one-single-shape-1.png" alt="">
                                    </div>
                                    <div class="team-one__single-hover-shape-1">
                                        <img src="assets/images/shapes/team-one-single-hover-shape-1.png" alt="">
                                    </div>
                                    <div class="team-one__share-and-social">
                                        <div class="team-one__share">
                                            <a href="#"><span class="fas fa-share-alt"></span></a>
                                        </div>
                                        <div class="team-one__social">
                                            <a href="#"><span class="fas fa-wifi"></span></a>
                                            <a href="#"><span class="fab fa-facebook-f"></span></a>
                                            <a href="#"><span class="fab fa-twitter"></span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-one__content">
                                    <p class="team-one__sub-title">Member</p>
                                    <h3 class="team-one__title"><a href="https://ww2.comsats.edu.pk/faculty/FacultyDetails.aspx?Uid=18720">Dr. Rahib Ali</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="100ms">
                            <div class="team-one__single">
                                <div class="team-one__img-box">
                                    <div class="team-one__img">
                                        <img src="assets/images/team/team-1-5.jpg" alt="">
                                    </div>
                                    <div class="team-one__single-shape-1">
                                        <img src="assets/images/shapes/team-one-single-shape-1.png" alt="">
                                    </div>
                                    <div class="team-one__single-hover-shape-1">
                                        <img src="assets/images/shapes/team-one-single-hover-shape-1.png" alt="">
                                    </div>
                                    <div class="team-one__share-and-social">
                                        <div class="team-one__share">
                                            <a href="#"><span class="fas fa-share-alt"></span></a>
                                        </div>
                                        <div class="team-one__social">
                                            <a href="#"><span class="fas fa-wifi"></span></a>
                                            <a href="#"><span class="fab fa-facebook-f"></span></a>
                                            <a href="#"><span class="fab fa-twitter"></span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-one__content">
                                    <p class="team-one__sub-title">Member</p>
                                    <h3 class="team-one__title"><a href="https://ww2.comsats.edu.pk/faculty/FacultyDetails.aspx?Uid=18720">Dr. Ammar Rauf</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="100ms">
                            <div class="team-one__single">
                                <div class="team-one__img-box">
                                    <div class="team-one__img">
                                        <img src="assets/images/team/team-1-6.jpg" alt="">
                                    </div>
                                    <div class="team-one__single-shape-1">
                                        <img src="assets/images/shapes/team-one-single-shape-1.png" alt="">
                                    </div>
                                    <div class="team-one__single-hover-shape-1">
                                        <img src="assets/images/shapes/team-one-single-hover-shape-1.png" alt="">
                                    </div>
                                    <div class="team-one__share-and-social">
                                        <div class="team-one__share">
                                            <a href="#"><span class="fas fa-share-alt"></span></a>
                                        </div>
                                        <div class="team-one__social">
                                            <a href="#"><span class="fas fa-wifi"></span></a>
                                            <a href="#"><span class="fab fa-facebook-f"></span></a>
                                            <a href="#"><span class="fab fa-twitter"></span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-one__content">
                                    <p class="team-one__sub-title">Member</p>
                                    <h3 class="team-one__title"><a href="https://ww2.comsats.edu.pk/faculty/FacultyDetails.aspx?Uid=18720">Dr. Atif Mahmood</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="100ms">
                            <div class="team-one__single">
                                <div class="team-one__img-box">
                                    <div class="team-one__img">
                                        <img src="assets/images/team/team-1-7.jpg" alt="">
                                    </div>
                                    <div class="team-one__single-shape-1">
                                        <img src="assets/images/shapes/team-one-single-shape-1.png" alt="">
                                    </div>
                                    <div class="team-one__single-hover-shape-1">
                                        <img src="assets/images/shapes/team-one-single-hover-shape-1.png" alt="">
                                    </div>
                                    <div class="team-one__share-and-social">
                                        <div class="team-one__share">
                                            <a href="#"><span class="fas fa-share-alt"></span></a>
                                        </div>
                                        <div class="team-one__social">
                                            <a href="#"><span class="fas fa-wifi"></span></a>
                                            <a href="#"><span class="fab fa-facebook-f"></span></a>
                                            <a href="#"><span class="fab fa-twitter"></span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-one__content">
                                    <p class="team-one__sub-title">Member</p>
                                    <h3 class="team-one__title"><a href="https://ww2.comsats.edu.pk/faculty/FacultyDetails.aspx?Uid=18720">Dr. Yawar Abbas Abid</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="100ms">
                            <div class="team-one__single">
                                <div class="team-one__img-box">
                                    <div class="team-one__img">
                                        <img src="assets/images/team/team-1-7.jpg" alt="">
                                    </div>
                                    <div class="team-one__single-shape-1">
                                        <img src="assets/images/shapes/team-one-single-shape-1.png" alt="">
                                    </div>
                                    <div class="team-one__single-hover-shape-1">
                                        <img src="assets/images/shapes/team-one-single-hover-shape-1.png" alt="">
                                    </div>
                                    <div class="team-one__share-and-social">
                                        <div class="team-one__share">
                                            <a href="#"><span class="fas fa-share-alt"></span></a>
                                        </div>
                                        <div class="team-one__social">
                                            <a href="#"><span class="fas fa-wifi"></span></a>
                                            <a href="#"><span class="fab fa-facebook-f"></span></a>
                                            <a href="#"><span class="fab fa-twitter"></span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-one__content">
                                    <p class="team-one__sub-title">Member</p>
                                    <h3 class="team-one__title"><a href="https://ww2.comsats.edu.pk/faculty/FacultyDetails.aspx?Uid=18720">Mr. M. Salman Nawaz</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="100ms">
                            <div class="team-one__single">
                                <div class="team-one__img-box">
                                    <div class="team-one__img">
                                        <img src="assets/images/team/team-1-9.jpg" alt="">
                                    </div>
                                    <div class="team-one__single-shape-1">
                                        <img src="assets/images/shapes/team-one-single-shape-1.png" alt="">
                                    </div>
                                    <div class="team-one__single-hover-shape-1">
                                        <img src="assets/images/shapes/team-one-single-hover-shape-1.png" alt="">
                                    </div>
                                    <div class="team-one__share-and-social">
                                        <div class="team-one__share">
                                            <a href="#"><span class="fas fa-share-alt"></span></a>
                                        </div>
                                        <div class="team-one__social">
                                            <a href="#"><span class="fas fa-wifi"></span></a>
                                            <a href="#"><span class="fab fa-facebook-f"></span></a>
                                            <a href="#"><span class="fab fa-twitter"></span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="team-one__content">
                                    <p class="team-one__sub-title">Member</p>
                                    <h3 class="team-one__title"><a href="https://ww2.comsats.edu.pk/faculty/FacultyDetails.aspx?Uid=18720">Mr. Muhammad Jamil</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--Team One End--> <!--Counter One Start-->
            <section class="counter-one">
                <div class="counter-one__wrap">
                    <div class="container">
                        <div class="counter-one__inner">
                            <ul class="counter-one__count-list list-unstyled">
                                <li class="wow fadeInLeft" data-wow-delay="100ms">
                                    <div class="counter-one__single">
                                        <div class="counter-one__shape-1">
                                            <img src="assets/images/shapes/counter-one-shape-1.png" alt="">
                                        </div>
                                        <div class="counter-one__count count-box">
                                            <h3 class="count-text" data-stop="4" data-speed="1500">00</h3>
                                        </div>
                                        <p class="counter-one__text">Days</p>
                                    </div>
                                </li>
                                <li class="wow fadeInLeft" data-wow-delay="200ms">
                                    <div class="counter-one__single counter-one__single-bg-black">
                                        <div class="counter-one__shape-1">
                                            <img src="assets/images/shapes/counter-one-shape-1.png" alt="">
                                        </div>
                                        <div class="counter-one__count count-box">
                                            <h3 class="count-text" data-stop="7" data-speed="1500">00</h3>
                                        </div>
                                        <p class="counter-one__text">Categories</p>
                                    </div>
                                </li>
                                <li class="wow fadeInLeft" data-wow-delay="300ms">
                                    <div class="counter-one__single">
                                        <div class="counter-one__shape-1">
                                            <img src="assets/images/shapes/counter-one-shape-1.png" alt="">
                                        </div>
                                        <div class="counter-one__count count-box">
                                            <h3 class="count-text" data-stop="17" data-speed="1500">00</h3>
                                        </div>
                                        <p class="counter-one__text">Events</p>
                                    </div>
                                </li>
                                <li class="wow fadeInLeft" data-wow-delay="400ms">
                                    <div class="counter-one__single counter-one__single-bg-black">
                                        <div class="counter-one__shape-1">
                                            <img src="assets/images/shapes/counter-one-shape-1.png" alt="">
                                        </div>
                                        <div class="counter-one__count count-box">
                                            <h3 class="count-text" data-stop="500" data-speed="1500">500</h3>
                                        </div>
                                        <p class="counter-one__text">Participants</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!--Counter One End--> <!--Event One Start-->
            <section class="event-one">
                <div class="event-one__shape-1 zoominout">
                    <img src="assets/images/shapes/event-one-shape-1.png" alt="">
                </div>
                <div class="container">
                    <div class="event-one__inner">
                        <div class="section-title text-left">
                            <div class="section-title__tagline-box">
                                <p class="section-title__tagline"> Event Schedule</p>
                            </div>
                            <h2 class="section-title__title">Follow Our Event <br> <span>Schedule</span></h2>
                        </div>
                        <div class="event-one__main-tab-box tabs-box">
                            <ul class="tab-buttons clearfix list-unstyled">
                                <li data-tab="#1st-day" class="tab-btn active-btn">
                                    <h3>1<span>st</span> Day</h3>
                                    <p>February 08 , 2024</p>
                                </li>
                                <li data-tab="#2nd-day" class="tab-btn">
                                    <h3>2<span>nd</span> Day</h3>
                                    <p>February 16 , 2024</p>
                                </li>
                                <li data-tab="#3rd-day" class="tab-btn">
                                    <h3>3<span>rd</span> Day</h3>
                                    <p>February 17 , 2024</p>
                                </li>
                            </ul>
                            <div class="tabs-content">
                                <!--tab-->
                                <div class="tab active-tab" id="1st-day">
                                    <div class="event-one__main-content-box">
                                        <div class="event-one__circle-one"></div>
                                        <div class="event-one__circle-two"></div>
                                        <div class="event-one__main-content-single">
                                            <div class="row">
                                                <div class="col-xl-7">
                                                    <div class="event-one__main-content-left">
                                                        <div class="event-one__main-content-img-box">
                                                            <div class="event-one__main-content-img">
                                                                <img src="assets/images/resources/event-one-main-content-img-1-1.jpg"
                                                                    alt="">
                                                            </div>
                                                            <h4 class="event-one__main-content-img-title"><a
                                                                    href="#">Spiritual <br> Events</a></h4>
                                                        </div>
                                                        <ul class="event-one__main-content-address-box list-unstyled">
                                                            <li>
                                                                <div class="icon">
                                                                    <span class="icon-pin"></span>
                                                                </div>
                                                                <div class="text">
                                                                    <p>Department of Computer Science</p>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="icon">
                                                                    <span class="icon-time"></span>
                                                                </div>
                                                                <div class="text">
                                                                    <p>09 : 00 am - 11 : 00 am <br>
                                                                        December 09 , 2024</p>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-xl-5">
                                                    <div class="event-one__main-content-right">
                                                        <div class="event-one__main-content-right-shape-1">
                                                            <img src="assets/images/shapes/event-one-main-content-right-shape-1.png"
                                                                alt="">
                                                        </div>
                                                        <ul class="event-one__main-content-img-list-box list-unstyled">
                                                            <li>
                                                                <div class="event-one__main-content-img-list">
                                                                    <img src="assets/images/resources/event-one-main-content-img-list-1-1.jpg"
                                                                        alt="">
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="event-one__main-content-img-list">
                                                                    <img src="assets/images/resources/event-one-main-content-img-list-1-1.jpg"
                                                                        alt="">
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="event-one__main-content-img-list">
                                                                    <img src="assets/images/resources/event-one-main-content-img-list-1-1.jpg"
                                                                        alt="">
                                                                </div>
                                                            </li>
                                                        </ul>
                                                        <div class="event-one__main-content-btn-box">
                                                            <a href="#" class="event-one__main-content-btn"> <span
                                                                    class="fas fa-arrow-circle-right"></span> Register Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="event-one__main-content-single event-one__main-content-single--two">
                                            <div class="row">
                                                <div class="col-xl-5">
                                                    <div class="event-one__main-content-right">
                                                        <div class="event-one__main-content-right-shape-1">
                                                            <img src="assets/images/shapes/event-one-main-content-right-shape-1.png"
                                                                alt="">
                                                        </div>
                                                        <div class="event-one__main-content-btn-box">
                                                            <a href="#" class="event-one__main-content-btn"> <span
                                                                    class="fas fa-arrow-circle-right"></span> Buy
                                                                Tickets</a>
                                                        </div>
                                                        <ul class="event-one__main-content-img-list-box list-unstyled">
                                                            <li>
                                                                <div class="event-one__main-content-img-list">
                                                                    <img src="assets/images/resources/event-one-main-content-img-list-1-1.jpg"
                                                                        alt="">
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="event-one__main-content-img-list">
                                                                    <img src="assets/images/resources/event-one-main-content-img-list-1-2.jpg"
                                                                        alt="">
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="event-one__main-content-img-list">
                                                                    <img src="assets/images/resources/event-one-main-content-img-list-1-3.jpg"
                                                                        alt="">
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-xl-7">
                                                    <div class="event-one__main-content-left">
                                                        <div class="event-one__main-content-title-and-address-box">
                                                            <h4 class="event-one__main-content-img-title"><a
                                                                    href="#">Classical Music Fest <br>
                                                                    2024</a></h4>
                                                            <ul
                                                                class="event-one__main-content-address-box list-unstyled">
                                                                <li>
                                                                    <div class="icon">
                                                                        <span class="icon-pin"></span>
                                                                    </div>
                                                                    <div class="text">
                                                                        <p>New Hyde, 11040</p>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="icon">
                                                                        <span class="icon-time"></span>
                                                                    </div>
                                                                    <div class="text">
                                                                        <p>08 : 00 am-05 : 00 pm <br>
                                                                            16 March , 2024</p>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="event-one__main-content-img-box">
                                                            <div class="event-one__main-content-img">
                                                                <img src="assets/images/resources/event-one-main-content-img-1-2.jpg"
                                                                    alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="event-one__main-content-single event-one__main-content-single--two">
                                            <div class="row">
                                                <div class="col-xl-5">
                                                    <div class="event-one__main-content-right">
                                                        <div class="event-one__main-content-right-shape-1">
                                                            <img src="assets/images/shapes/event-one-main-content-right-shape-1.png"
                                                                alt="">
                                                        </div>
                                                        <div class="event-one__main-content-btn-box">
                                                            <a href="#" class="event-one__main-content-btn"> <span
                                                                    class="fas fa-arrow-circle-right"></span> Buy
                                                                Tickets</a>
                                                        </div>
                                                        <ul class="event-one__main-content-img-list-box list-unstyled">
                                                            <li>
                                                                <div class="event-one__main-content-img-list">
                                                                    <img src="assets/images/resources/event-one-main-content-img-list-1-1.jpg"
                                                                        alt="">
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="event-one__main-content-img-list">
                                                                    <img src="assets/images/resources/event-one-main-content-img-list-1-2.jpg"
                                                                        alt="">
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="event-one__main-content-img-list">
                                                                    <img src="assets/images/resources/event-one-main-content-img-list-1-3.jpg"
                                                                        alt="">
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-xl-7">
                                                    <div class="event-one__main-content-left">
                                                        <div class="event-one__main-content-title-and-address-box">
                                                            <h4 class="event-one__main-content-img-title"><a
                                                                    href="#">Classical Music Fest <br>
                                                                    2024</a></h4>
                                                            <ul
                                                                class="event-one__main-content-address-box list-unstyled">
                                                                <li>
                                                                    <div class="icon">
                                                                        <span class="icon-pin"></span>
                                                                    </div>
                                                                    <div class="text">
                                                                        <p>New Hyde, 11040</p>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="icon">
                                                                        <span class="icon-time"></span>
                                                                    </div>
                                                                    <div class="text">
                                                                        <p>08 : 00 am-05 : 00 pm <br>
                                                                            16 March , 2024</p>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="event-one__main-content-img-box">
                                                            <div class="event-one__main-content-img">
                                                                <img src="assets/images/resources/event-one-main-content-img-1-2.jpg"
                                                                    alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="event-one__main-content-single">
                                            <div class="row">
                                                <div class="col-xl-7">
                                                    <div class="event-one__main-content-left">
                                                        <div class="event-one__main-content-img-box">
                                                            <div class="event-one__main-content-img">
                                                                <img src="assets/images/resources/event-one-main-content-img-1-3.jpg"
                                                                    alt="">
                                                            </div>
                                                            <h4 class="event-one__main-content-img-title"><a href="#">Dj
                                                                    Mixers Isolated <br>
                                                                    Music Fest</a></h4>
                                                        </div>
                                                        <ul class="event-one__main-content-address-box list-unstyled">
                                                            <li>
                                                                <div class="icon">
                                                                    <span class="icon-pin"></span>
                                                                </div>
                                                                <div class="text">
                                                                    <p>New Hyde, 11040</p>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="icon">
                                                                    <span class="icon-time"></span>
                                                                </div>
                                                                <div class="text">
                                                                    <p>08 : 00 am-05 : 00 pm <br>
                                                                        16 March , 2024</p>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-xl-5">
                                                    <div class="event-one__main-content-right">
                                                        <div class="event-one__main-content-right-shape-1">
                                                            <img src="assets/images/shapes/event-one-main-content-right-shape-1.png"
                                                                alt="">
                                                        </div>
                                                        <ul class="event-one__main-content-img-list-box list-unstyled">
                                                            <li>
                                                                <div class="event-one__main-content-img-list">
                                                                    <img src="assets/images/resources/event-one-main-content-img-list-1-1.jpg"
                                                                        alt="">
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="event-one__main-content-img-list">
                                                                    <img src="assets/images/resources/event-one-main-content-img-list-1-2.jpg"
                                                                        alt="">
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="event-one__main-content-img-list">
                                                                    <img src="assets/images/resources/event-one-main-content-img-list-1-3.jpg"
                                                                        alt="">
                                                                </div>
                                                            </li>
                                                        </ul>
                                                        <div class="event-one__main-content-btn-box">
                                                            <a href="#" class="event-one__main-content-btn"> <span
                                                                    class="fas fa-arrow-circle-right"></span> Buy
                                                                Tickets</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--tab-->
                                <div class="tab " id="2nd-day">
                                    <div class="event-one__main-content-box">
                                        <div class="event-one__circle-one"></div>
                                        <div class="event-one__circle-two"></div>
                                        <div class="event-one__main-content-single">
                                            <div class="row">
                                                <div class="col-xl-7">
                                                    <div class="event-one__main-content-left">
                                                        <div class="event-one__main-content-img-box">
                                                            <div class="event-one__main-content-img">
                                                                <img src="assets/images/resources/event-one-main-content-img-1-3.jpg"
                                                                    alt="">
                                                            </div>
                                                            <h4 class="event-one__main-content-img-title"><a
                                                                    href="#">Historical
                                                                    Song & <br>
                                                                    Music Fest</a></h4>
                                                        </div>
                                                        <ul class="event-one__main-content-address-box list-unstyled">
                                                            <li>
                                                                <div class="icon">
                                                                    <span class="icon-pin"></span>
                                                                </div>
                                                                <div class="text">
                                                                    <p>New Hyde, 11040</p>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="icon">
                                                                    <span class="icon-time"></span>
                                                                </div>
                                                                <div class="text">
                                                                    <p>08 : 00 am-05 : 00 pm <br>
                                                                        16 March , 2024</p>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-xl-5">
                                                    <div class="event-one__main-content-right">
                                                        <div class="event-one__main-content-right-shape-1">
                                                            <img src="assets/images/shapes/event-one-main-content-right-shape-1.png"
                                                                alt="">
                                                        </div>
                                                        <ul class="event-one__main-content-img-list-box list-unstyled">
                                                            <li>
                                                                <div class="event-one__main-content-img-list">
                                                                    <img src="assets/images/resources/event-one-main-content-img-list-1-1.jpg"
                                                                        alt="">
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="event-one__main-content-img-list">
                                                                    <img src="assets/images/resources/event-one-main-content-img-list-1-2.jpg"
                                                                        alt="">
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="event-one__main-content-img-list">
                                                                    <img src="assets/images/resources/event-one-main-content-img-list-1-3.jpg"
                                                                        alt="">
                                                                </div>
                                                            </li>
                                                        </ul>
                                                        <div class="event-one__main-content-btn-box">
                                                            <a href="#" class="event-one__main-content-btn"> <span
                                                                    class="fas fa-arrow-circle-right"></span> Buy
                                                                Tickets</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="event-one__main-content-single event-one__main-content-single--two">
                                            <div class="row">
                                                <div class="col-xl-5">
                                                    <div class="event-one__main-content-right">
                                                        <div class="event-one__main-content-right-shape-1">
                                                            <img src="assets/images/shapes/event-one-main-content-right-shape-1.png"
                                                                alt="">
                                                        </div>
                                                        <div class="event-one__main-content-btn-box">
                                                            <a href="#" class="event-one__main-content-btn"> <span
                                                                    class="fas fa-arrow-circle-right"></span> Buy
                                                                Tickets</a>
                                                        </div>
                                                        <ul class="event-one__main-content-img-list-box list-unstyled">
                                                            <li>
                                                                <div class="event-one__main-content-img-list">
                                                                    <img src="assets/images/resources/event-one-main-content-img-list-1-1.jpg"
                                                                        alt="">
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="event-one__main-content-img-list">
                                                                    <img src="assets/images/resources/event-one-main-content-img-list-1-2.jpg"
                                                                        alt="">
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="event-one__main-content-img-list">
                                                                    <img src="assets/images/resources/event-one-main-content-img-list-1-3.jpg"
                                                                        alt="">
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-xl-7">
                                                    <div class="event-one__main-content-left">
                                                        <div class="event-one__main-content-title-and-address-box">
                                                            <h4 class="event-one__main-content-img-title"><a
                                                                    href="#">Classical Music Fest <br>
                                                                    2024</a></h4>
                                                            <ul
                                                                class="event-one__main-content-address-box list-unstyled">
                                                                <li>
                                                                    <div class="icon">
                                                                        <span class="icon-pin"></span>
                                                                    </div>
                                                                    <div class="text">
                                                                        <p>New Hyde, 11040</p>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="icon">
                                                                        <span class="icon-time"></span>
                                                                    </div>
                                                                    <div class="text">
                                                                        <p>08 : 00 am-05 : 00 pm <br>
                                                                            16 March , 2024</p>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="event-one__main-content-img-box">
                                                            <div class="event-one__main-content-img">
                                                                <img src="assets/images/resources/event-one-main-content-img-1-1.jpg"
                                                                    alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="event-one__main-content-single">
                                            <div class="row">
                                                <div class="col-xl-7">
                                                    <div class="event-one__main-content-left">
                                                        <div class="event-one__main-content-img-box">
                                                            <div class="event-one__main-content-img">
                                                                <img src="assets/images/resources/event-one-main-content-img-1-2.jpg"
                                                                    alt="">
                                                            </div>
                                                            <h4 class="event-one__main-content-img-title"><a href="#">Dj
                                                                    Mixers Isolated <br>
                                                                    Music Fest</a></h4>
                                                        </div>
                                                        <ul class="event-one__main-content-address-box list-unstyled">
                                                            <li>
                                                                <div class="icon">
                                                                    <span class="icon-pin"></span>
                                                                </div>
                                                                <div class="text">
                                                                    <p>New Hyde, 11040</p>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="icon">
                                                                    <span class="icon-time"></span>
                                                                </div>
                                                                <div class="text">
                                                                    <p>08 : 00 am-05 : 00 pm <br>
                                                                        16 March , 2024</p>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-xl-5">
                                                    <div class="event-one__main-content-right">
                                                        <div class="event-one__main-content-right-shape-1">
                                                            <img src="assets/images/shapes/event-one-main-content-right-shape-1.png"
                                                                alt="">
                                                        </div>
                                                        <ul class="event-one__main-content-img-list-box list-unstyled">
                                                            <li>
                                                                <div class="event-one__main-content-img-list">
                                                                    <img src="assets/images/resources/event-one-main-content-img-list-1-1.jpg"
                                                                        alt="">
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="event-one__main-content-img-list">
                                                                    <img src="assets/images/resources/event-one-main-content-img-list-1-2.jpg"
                                                                        alt="">
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="event-one__main-content-img-list">
                                                                    <img src="assets/images/resources/event-one-main-content-img-list-1-3.jpg"
                                                                        alt="">
                                                                </div>
                                                            </li>
                                                        </ul>
                                                        <div class="event-one__main-content-btn-box">
                                                            <a href="#" class="event-one__main-content-btn"> <span
                                                                    class="fas fa-arrow-circle-right"></span> Buy
                                                                Tickets</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--tab-->
                                <div class="tab " id="3rd-day">
                                    <div class="event-one__main-content-box">
                                        <div class="event-one__circle-one"></div>
                                        <div class="event-one__circle-two"></div>
                                        <div class="event-one__main-content-single">
                                            <div class="row">
                                                <div class="col-xl-7">
                                                    <div class="event-one__main-content-left">
                                                        <div class="event-one__main-content-img-box">
                                                            <div class="event-one__main-content-img">
                                                                <img src="assets/images/resources/event-one-main-content-img-1-1.jpg"
                                                                    alt="">
                                                            </div>
                                                            <h4 class="event-one__main-content-img-title"><a
                                                                    href="#">Historical
                                                                    Song & <br>
                                                                    Music Fest</a></h4>
                                                        </div>
                                                        <ul class="event-one__main-content-address-box list-unstyled">
                                                            <li>
                                                                <div class="icon">
                                                                    <span class="icon-pin"></span>
                                                                </div>
                                                                <div class="text">
                                                                    <p>New Hyde, 11040</p>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="icon">
                                                                    <span class="icon-time"></span>
                                                                </div>
                                                                <div class="text">
                                                                    <p>08 : 00 am-05 : 00 pm <br>
                                                                        16 March , 2024</p>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-xl-5">
                                                    <div class="event-one__main-content-right">
                                                        <div class="event-one__main-content-right-shape-1">
                                                            <img src="assets/images/shapes/event-one-main-content-right-shape-1.png"
                                                                alt="">
                                                        </div>
                                                        <ul class="event-one__main-content-img-list-box list-unstyled">
                                                            <li>
                                                                <div class="event-one__main-content-img-list">
                                                                    <img src="assets/images/resources/event-one-main-content-img-list-1-1.jpg"
                                                                        alt="">
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="event-one__main-content-img-list">
                                                                    <img src="assets/images/resources/event-one-main-content-img-list-1-2.jpg"
                                                                        alt="">
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="event-one__main-content-img-list">
                                                                    <img src="assets/images/resources/event-one-main-content-img-list-1-3.jpg"
                                                                        alt="">
                                                                </div>
                                                            </li>
                                                        </ul>
                                                        <div class="event-one__main-content-btn-box">
                                                            <a href="#" class="event-one__main-content-btn"> <span
                                                                    class="fas fa-arrow-circle-right"></span> Buy
                                                                Tickets</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="event-one__main-content-single event-one__main-content-single--two">
                                            <div class="row">
                                                <div class="col-xl-5">
                                                    <div class="event-one__main-content-right">
                                                        <div class="event-one__main-content-right-shape-1">
                                                            <img src="assets/images/shapes/event-one-main-content-right-shape-1.png"
                                                                alt="">
                                                        </div>
                                                        <div class="event-one__main-content-btn-box">
                                                            <a href="#" class="event-one__main-content-btn"> <span
                                                                    class="fas fa-arrow-circle-right"></span> Buy
                                                                Tickets</a>
                                                        </div>
                                                        <ul class="event-one__main-content-img-list-box list-unstyled">
                                                            <li>
                                                                <div class="event-one__main-content-img-list">
                                                                    <img src="assets/images/resources/event-one-main-content-img-list-1-1.jpg"
                                                                        alt="">
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="event-one__main-content-img-list">
                                                                    <img src="assets/images/resources/event-one-main-content-img-list-1-2.jpg"
                                                                        alt="">
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="event-one__main-content-img-list">
                                                                    <img src="assets/images/resources/event-one-main-content-img-list-1-3.jpg"
                                                                        alt="">
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-xl-7">
                                                    <div class="event-one__main-content-left">
                                                        <div class="event-one__main-content-title-and-address-box">
                                                            <h4 class="event-one__main-content-img-title"><a
                                                                    href="#">Classical Music Fest <br>
                                                                    2024</a></h4>
                                                            <ul
                                                                class="event-one__main-content-address-box list-unstyled">
                                                                <li>
                                                                    <div class="icon">
                                                                        <span class="icon-pin"></span>
                                                                    </div>
                                                                    <div class="text">
                                                                        <p>New Hyde, 11040</p>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="icon">
                                                                        <span class="icon-time"></span>
                                                                    </div>
                                                                    <div class="text">
                                                                        <p>08 : 00 am-05 : 00 pm <br>
                                                                            16 March , 2024</p>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="event-one__main-content-img-box">
                                                            <div class="event-one__main-content-img">
                                                                <img src="assets/images/resources/event-one-main-content-img-1-2.jpg"
                                                                    alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="event-one__main-content-single">
                                            <div class="row">
                                                <div class="col-xl-7">
                                                    <div class="event-one__main-content-left">
                                                        <div class="event-one__main-content-img-box">
                                                            <div class="event-one__main-content-img">
                                                                <img src="assets/images/resources/event-one-main-content-img-1-3.jpg"
                                                                    alt="">
                                                            </div>
                                                            <h4 class="event-one__main-content-img-title"><a href="#">Dj
                                                                    Mixers Isolated <br>
                                                                    Music Fest</a></h4>
                                                        </div>
                                                        <ul class="event-one__main-content-address-box list-unstyled">
                                                            <li>
                                                                <div class="icon">
                                                                    <span class="icon-pin"></span>
                                                                </div>
                                                                <div class="text">
                                                                    <p>New Hyde, 11040</p>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="icon">
                                                                    <span class="icon-time"></span>
                                                                </div>
                                                                <div class="text">
                                                                    <p>08 : 00 am-05 : 00 pm <br>
                                                                        16 March , 2024</p>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-xl-5">
                                                    <div class="event-one__main-content-right">
                                                        <div class="event-one__main-content-right-shape-1">
                                                            <img src="assets/images/shapes/event-one-main-content-right-shape-1.png"
                                                                alt="">
                                                        </div>
                                                        <ul class="event-one__main-content-img-list-box list-unstyled">
                                                            <li>
                                                                <div class="event-one__main-content-img-list">
                                                                    <img src="assets/images/resources/event-one-main-content-img-list-1-1.jpg"
                                                                        alt="">
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="event-one__main-content-img-list">
                                                                    <img src="assets/images/resources/event-one-main-content-img-list-1-2.jpg"
                                                                        alt="">
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="event-one__main-content-img-list">
                                                                    <img src="assets/images/resources/event-one-main-content-img-list-1-3.jpg"
                                                                        alt="">
                                                                </div>
                                                            </li>
                                                        </ul>
                                                        <div class="event-one__main-content-btn-box">
                                                            <a href="#" class="event-one__main-content-btn"> <span
                                                                    class="fas fa-arrow-circle-right"></span> Buy
                                                                Tickets</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="events-three events-four">
                <div class="container">
                    <div class="section-title text-center">
                        <div class="section-title__tagline-box">
                            <p class="section-title__tagline"><span>//</span> Schedule <span>//</span> </p>
                        </div>
                        <h2 class="section-title__title">Information Program & Event <br> <span>Schedule</span></h2>
                    </div>
                    <div class="events-three__main-tab-box tabs-box">
                        <ul class="tab-buttons clearfix list-unstyled">
                            <li data-tab="#1stday" class="tab-btn">
                                <div class="events-three__tab-btn-content">
                                    <p>November 12 , 2023</p>
                                    <h3>1<span>st</span>Day</h3>
                                </div>
                            </li>
                            <li data-tab="#2ndday" class="tab-btn active-btn">
                                <div class="events-three__tab-btn-content">
                                    <p>November 15 , 2023</p>
                                    <h3>2<span>nd</span>Day</h3>
                                </div>
                            </li>
                            <li data-tab="#3rdday" class="tab-btn">
                                <div class="events-three__tab-btn-content">
                                    <p>November 18 , 2023</p>
                                    <h3>3<span>rd</span>Day</h3>
                                </div>
                            </li>
                            <li data-tab="#4thdday" class="tab-btn">
                                <div class="events-three__tab-btn-content">
                                    <p>November 22 , 2023</p>
                                    <h3>4<span>th</span>Day</h3>
                                </div>
                            </li>
                        </ul>
                        <div class="tabs-content">
                            <!--tab-->
                            <div class="tab" id="1stday">
                                <div class="events-three__main-content-box">
                                    <ul class="list-unstyled events-three__content-list">
                                        <li class="events-three__content-single">
                                            <div class="events-three__content-left">
                                                <div class="events-three__content-img">
                                                    <img src="assets/images/resources/events-three-content-img-1-1.jpg"
                                                        alt="">
                                                    <div class="events-three__video-link">
                                                        <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ"
                                                            class="video-popup">
                                                            <div class="events-three__video-icon">
                                                                <span class="icon-play"></span>
                                                                <i class="ripple"></i>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="events-three__content-user">
                                                    <div class="events-three__content-user-img">
                                                        <img src="assets/images/resources/events-three-content-user-img-1-1.jpg"
                                                            alt="">
                                                    </div>
                                                    <div class="events-three__content-user-info">
                                                        <h4 class="events-three__content-user-name">John Singh</h4>
                                                        <p class="events-three__content-user-sub-title">UX Design</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="events-three__content-right">
                                                <div class="events-three__content-right-content">
                                                    <div class="events-three__content-right-content-left">
                                                        <h4 class="events-three__content-right-content-title"><a
                                                                href="schedule-list.html">Kelimontos DJ
                                                                Party 2019</a></h4>
                                                        <ul class="list-unstyled events-three__content-right-content-list">
                                                            <li>
                                                                <div class="icon">
                                                                    <span class="icon-coffee-cup"></span>
                                                                </div>
                                                                <div class="text">
                                                                    <p>Coffee & Snacks</p>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="icon">
                                                                    <span class="icon-youtube"></span>
                                                                </div>
                                                                <div class="text">
                                                                    <p>Video Streming</p>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="events-three__content-right-content-right">
                                                        <h4 class="events-three__content-right-content-title-two">Wednesday
                                                        </h4>
                                                        <div class="events-three__content-right-content-time">
                                                            <div class="icon">
                                                                <span class="icon-time"></span>
                                                            </div>
                                                            <div class="text">
                                                                <p>10.00 am - 12.00 pm</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="events-three__btn-box">
                                                    <a href="contact.html" class="about-three__btn thm-btn-two"><span
                                                            class="fas fa-arrow-circle-right"></span>Buy Ticket</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="events-three__content-single">
                                            <div class="events-three__content-left">
                                                <div class="events-three__content-img">
                                                    <img src="assets/images/resources/events-three-content-img-1-2.jpg"
                                                        alt="">
                                                    <div class="events-three__video-link">
                                                        <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ"
                                                            class="video-popup">
                                                            <div class="events-three__video-icon">
                                                                <span class="icon-play"></span>
                                                                <i class="ripple"></i>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="events-three__content-user">
                                                    <div class="events-three__content-user-img">
                                                        <img src="assets/images/resources/events-three-content-user-img-1-2.jpg"
                                                            alt="">
                                                    </div>
                                                    <div class="events-three__content-user-info">
                                                        <h4 class="events-three__content-user-name">Mitra Smith</h4>
                                                        <p class="events-three__content-user-sub-title">UX Design</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="events-three__content-right">
                                                <div class="events-three__content-right-content">
                                                    <div class="events-three__content-right-content-left">
                                                        <h4 class="events-three__content-right-content-title"><a
                                                                href="schedule-list.html">Meeting With Word</a></h4>
                                                        <ul class="list-unstyled events-three__content-right-content-list">
                                                            <li>
                                                                <div class="icon">
                                                                    <span class="icon-coffee-cup"></span>
                                                                </div>
                                                                <div class="text">
                                                                    <p>Coffee & Snacks</p>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="icon">
                                                                    <span class="icon-youtube"></span>
                                                                </div>
                                                                <div class="text">
                                                                    <p>Video Streming</p>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="events-three__content-right-content-right">
                                                        <h4 class="events-three__content-right-content-title-two">Wednesday
                                                        </h4>
                                                        <div class="events-three__content-right-content-time">
                                                            <div class="icon">
                                                                <span class="icon-time"></span>
                                                            </div>
                                                            <div class="text">
                                                                <p>10.00 am - 12.00 pm</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="events-three__btn-box">
                                                    <a href="contact.html" class="about-three__btn thm-btn-two"><span
                                                            class="fas fa-arrow-circle-right"></span>Buy Ticket</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="events-three__content-single">
                                            <div class="events-three__content-left">
                                                <div class="events-three__content-img">
                                                    <img src="assets/images/resources/events-three-content-img-1-3.jpg"
                                                        alt="">
                                                    <div class="events-three__video-link">
                                                        <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ"
                                                            class="video-popup">
                                                            <div class="events-three__video-icon">
                                                                <span class="icon-play"></span>
                                                                <i class="ripple"></i>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="events-three__content-user">
                                                    <div class="events-three__content-user-img">
                                                        <img src="assets/images/resources/events-three-content-user-img-1-3.jpg"
                                                            alt="">
                                                    </div>
                                                    <div class="events-three__content-user-info">
                                                        <h4 class="events-three__content-user-name">Kowlant Smith</h4>
                                                        <p class="events-three__content-user-sub-title">UX Design</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="events-three__content-right">
                                                <div class="events-three__content-right-content">
                                                    <div class="events-three__content-right-content-left">
                                                        <h4 class="events-three__content-right-content-title"><a
                                                                href="schedule-list.html">Humble Hill Running Day</a></h4>
                                                        <ul class="list-unstyled events-three__content-right-content-list">
                                                            <li>
                                                                <div class="icon">
                                                                    <span class="icon-coffee-cup"></span>
                                                                </div>
                                                                <div class="text">
                                                                    <p>Coffee & Snacks</p>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="icon">
                                                                    <span class="icon-youtube"></span>
                                                                </div>
                                                                <div class="text">
                                                                    <p>Video Streming</p>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="events-three__content-right-content-right">
                                                        <h4 class="events-three__content-right-content-title-two">Wednesday
                                                        </h4>
                                                        <div class="events-three__content-right-content-time">
                                                            <div class="icon">
                                                                <span class="icon-time"></span>
                                                            </div>
                                                            <div class="text">
                                                                <p>10.00 am - 12.00 pm</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="events-three__btn-box">
                                                    <a href="contact.html" class="about-three__btn thm-btn-two"><span
                                                            class="fas fa-arrow-circle-right"></span>Buy Ticket</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!--tab-->
                            <!--tab-->
                            <div class="tab active-tab" id="2ndday">
                                <div class="events-three__main-content-box">
                                    <ul class="list-unstyled events-three__content-list">
                                        <li class="events-three__content-single">
                                            <div class="events-three__content-left">
                                                <div class="events-three__content-img">
                                                    <img src="assets/images/resources/events-three-content-img-1-1.jpg"
                                                        alt="">
                                                    <div class="events-three__video-link">
                                                        <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ"
                                                            class="video-popup">
                                                            <div class="events-three__video-icon">
                                                                <span class="icon-play"></span>
                                                                <i class="ripple"></i>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="events-three__content-user">
                                                    <div class="events-three__content-user-img">
                                                        <img src="assets/images/resources/events-three-content-user-img-1-1.jpg"
                                                            alt="">
                                                    </div>
                                                    <div class="events-three__content-user-info">
                                                        <h4 class="events-three__content-user-name">John Singh</h4>
                                                        <p class="events-three__content-user-sub-title">UX Design</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="events-three__content-right">
                                                <div class="events-three__content-right-content">
                                                    <div class="events-three__content-right-content-left">
                                                        <h4 class="events-three__content-right-content-title"><a
                                                                href="schedule-list.html">Kelimontos DJ
                                                                Party 2019</a></h4>
                                                        <ul class="list-unstyled events-three__content-right-content-list">
                                                            <li>
                                                                <div class="icon">
                                                                    <span class="icon-coffee-cup"></span>
                                                                </div>
                                                                <div class="text">
                                                                    <p>Coffee & Snacks</p>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="icon">
                                                                    <span class="icon-youtube"></span>
                                                                </div>
                                                                <div class="text">
                                                                    <p>Video Streming</p>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="events-three__content-right-content-right">
                                                        <h4 class="events-three__content-right-content-title-two">Wednesday
                                                        </h4>
                                                        <div class="events-three__content-right-content-time">
                                                            <div class="icon">
                                                                <span class="icon-time"></span>
                                                            </div>
                                                            <div class="text">
                                                                <p>10.00 am - 12.00 pm</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="events-three__btn-box">
                                                    <a href="contact.html" class="about-three__btn thm-btn-two"><span
                                                            class="fas fa-arrow-circle-right"></span>Buy Ticket</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="events-three__content-single">
                                            <div class="events-three__content-left">
                                                <div class="events-three__content-img">
                                                    <img src="assets/images/resources/events-three-content-img-1-2.jpg"
                                                        alt="">
                                                    <div class="events-three__video-link">
                                                        <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ"
                                                            class="video-popup">
                                                            <div class="events-three__video-icon">
                                                                <span class="icon-play"></span>
                                                                <i class="ripple"></i>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="events-three__content-user">
                                                    <div class="events-three__content-user-img">
                                                        <img src="assets/images/resources/events-three-content-user-img-1-2.jpg"
                                                            alt="">
                                                    </div>
                                                    <div class="events-three__content-user-info">
                                                        <h4 class="events-three__content-user-name">Mitra Smith</h4>
                                                        <p class="events-three__content-user-sub-title">UX Design</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="events-three__content-right">
                                                <div class="events-three__content-right-content">
                                                    <div class="events-three__content-right-content-left">
                                                        <h4 class="events-three__content-right-content-title"><a
                                                                href="schedule-list.html">Meeting With Word</a></h4>
                                                        <ul class="list-unstyled events-three__content-right-content-list">
                                                            <li>
                                                                <div class="icon">
                                                                    <span class="icon-coffee-cup"></span>
                                                                </div>
                                                                <div class="text">
                                                                    <p>Coffee & Snacks</p>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="icon">
                                                                    <span class="icon-youtube"></span>
                                                                </div>
                                                                <div class="text">
                                                                    <p>Video Streming</p>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="events-three__content-right-content-right">
                                                        <h4 class="events-three__content-right-content-title-two">Wednesday
                                                        </h4>
                                                        <div class="events-three__content-right-content-time">
                                                            <div class="icon">
                                                                <span class="icon-time"></span>
                                                            </div>
                                                            <div class="text">
                                                                <p>10.00 am - 12.00 pm</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="events-three__btn-box">
                                                    <a href="contact.html" class="about-three__btn thm-btn-two"><span
                                                            class="fas fa-arrow-circle-right"></span>Buy Ticket</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="events-three__content-single">
                                            <div class="events-three__content-left">
                                                <div class="events-three__content-img">
                                                    <img src="assets/images/resources/events-three-content-img-1-3.jpg"
                                                        alt="">
                                                    <div class="events-three__video-link">
                                                        <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ"
                                                            class="video-popup">
                                                            <div class="events-three__video-icon">
                                                                <span class="icon-play"></span>
                                                                <i class="ripple"></i>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="events-three__content-user">
                                                    <div class="events-three__content-user-img">
                                                        <img src="assets/images/resources/events-three-content-user-img-1-3.jpg"
                                                            alt="">
                                                    </div>
                                                    <div class="events-three__content-user-info">
                                                        <h4 class="events-three__content-user-name">Kowlant Smith</h4>
                                                        <p class="events-three__content-user-sub-title">UX Design</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="events-three__content-right">
                                                <div class="events-three__content-right-content">
                                                    <div class="events-three__content-right-content-left">
                                                        <h4 class="events-three__content-right-content-title"><a
                                                                href="contact.html">Humble Hill Running Day</a></h4>
                                                        <ul class="list-unstyled events-three__content-right-content-list">
                                                            <li>
                                                                <div class="icon">
                                                                    <span class="icon-coffee-cup"></span>
                                                                </div>
                                                                <div class="text">
                                                                    <p>Coffee & Snacks</p>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="icon">
                                                                    <span class="icon-youtube"></span>
                                                                </div>
                                                                <div class="text">
                                                                    <p>Video Streming</p>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="events-three__content-right-content-right">
                                                        <h4 class="events-three__content-right-content-title-two">Wednesday
                                                        </h4>
                                                        <div class="events-three__content-right-content-time">
                                                            <div class="icon">
                                                                <span class="icon-time"></span>
                                                            </div>
                                                            <div class="text">
                                                                <p>10.00 am - 12.00 pm</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="events-three__btn-box">
                                                    <a href="contact.html" class="about-three__btn thm-btn-two"><span
                                                            class="fas fa-arrow-circle-right"></span>Buy Ticket</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!--tab-->
                            <!--tab-->
                            <div class="tab" id="3rdday">
                                <div class="events-three__main-content-box">
                                    <ul class="list-unstyled events-three__content-list">
                                        <li class="events-three__content-single">
                                            <div class="events-three__content-left">
                                                <div class="events-three__content-img">
                                                    <img src="assets/images/resources/events-three-content-img-1-1.jpg"
                                                        alt="">
                                                    <div class="events-three__video-link">
                                                        <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ"
                                                            class="video-popup">
                                                            <div class="events-three__video-icon">
                                                                <span class="icon-play"></span>
                                                                <i class="ripple"></i>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="events-three__content-user">
                                                    <div class="events-three__content-user-img">
                                                        <img src="assets/images/resources/events-three-content-user-img-1-1.jpg"
                                                            alt="">
                                                    </div>
                                                    <div class="events-three__content-user-info">
                                                        <h4 class="events-three__content-user-name">John Singh</h4>
                                                        <p class="events-three__content-user-sub-title">UX Design</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="events-three__content-right">
                                                <div class="events-three__content-right-content">
                                                    <div class="events-three__content-right-content-left">
                                                        <h4 class="events-three__content-right-content-title"><a
                                                                href="schedule-list.html">Kelimontos DJ
                                                                Party 2019</a></h4>
                                                        <ul class="list-unstyled events-three__content-right-content-list">
                                                            <li>
                                                                <div class="icon">
                                                                    <span class="icon-coffee-cup"></span>
                                                                </div>
                                                                <div class="text">
                                                                    <p>Coffee & Snacks</p>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="icon">
                                                                    <span class="icon-youtube"></span>
                                                                </div>
                                                                <div class="text">
                                                                    <p>Video Streming</p>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="events-three__content-right-content-right">
                                                        <h4 class="events-three__content-right-content-title-two">Wednesday
                                                        </h4>
                                                        <div class="events-three__content-right-content-time">
                                                            <div class="icon">
                                                                <span class="icon-time"></span>
                                                            </div>
                                                            <div class="text">
                                                                <p>10.00 am - 12.00 pm</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="events-three__btn-box">
                                                    <a href="contact.html" class="about-three__btn thm-btn-two"><span
                                                            class="fas fa-arrow-circle-right"></span>Buy Ticket</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="events-three__content-single">
                                            <div class="events-three__content-left">
                                                <div class="events-three__content-img">
                                                    <img src="assets/images/resources/events-three-content-img-1-2.jpg"
                                                        alt="">
                                                    <div class="events-three__video-link">
                                                        <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ"
                                                            class="video-popup">
                                                            <div class="events-three__video-icon">
                                                                <span class="icon-play"></span>
                                                                <i class="ripple"></i>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="events-three__content-user">
                                                    <div class="events-three__content-user-img">
                                                        <img src="assets/images/resources/events-three-content-user-img-1-2.jpg"
                                                            alt="">
                                                    </div>
                                                    <div class="events-three__content-user-info">
                                                        <h4 class="events-three__content-user-name">Mitra Smith</h4>
                                                        <p class="events-three__content-user-sub-title">UX Design</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="events-three__content-right">
                                                <div class="events-three__content-right-content">
                                                    <div class="events-three__content-right-content-left">
                                                        <h4 class="events-three__content-right-content-title"><a
                                                                href="schedule-list.html">Meeting With Word</a></h4>
                                                        <ul class="list-unstyled events-three__content-right-content-list">
                                                            <li>
                                                                <div class="icon">
                                                                    <span class="icon-coffee-cup"></span>
                                                                </div>
                                                                <div class="text">
                                                                    <p>Coffee & Snacks</p>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="icon">
                                                                    <span class="icon-youtube"></span>
                                                                </div>
                                                                <div class="text">
                                                                    <p>Video Streming</p>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="events-three__content-right-content-right">
                                                        <h4 class="events-three__content-right-content-title-two">Wednesday
                                                        </h4>
                                                        <div class="events-three__content-right-content-time">
                                                            <div class="icon">
                                                                <span class="icon-time"></span>
                                                            </div>
                                                            <div class="text">
                                                                <p>10.00 am - 12.00 pm</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="events-three__btn-box">
                                                    <a href="contact.html" class="about-three__btn thm-btn-two"><span
                                                            class="fas fa-arrow-circle-right"></span>Buy Ticket</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="events-three__content-single">
                                            <div class="events-three__content-left">
                                                <div class="events-three__content-img">
                                                    <img src="assets/images/resources/events-three-content-img-1-3.jpg"
                                                        alt="">
                                                    <div class="events-three__video-link">
                                                        <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ"
                                                            class="video-popup">
                                                            <div class="events-three__video-icon">
                                                                <span class="icon-play"></span>
                                                                <i class="ripple"></i>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="events-three__content-user">
                                                    <div class="events-three__content-user-img">
                                                        <img src="assets/images/resources/events-three-content-user-img-1-3.jpg"
                                                            alt="">
                                                    </div>
                                                    <div class="events-three__content-user-info">
                                                        <h4 class="events-three__content-user-name">Kowlant Smith</h4>
                                                        <p class="events-three__content-user-sub-title">UX Design</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="events-three__content-right">
                                                <div class="events-three__content-right-content">
                                                    <div class="events-three__content-right-content-left">
                                                        <h4 class="events-three__content-right-content-title"><a
                                                                href="contact.html">Humble Hill Running Day</a></h4>
                                                        <ul class="list-unstyled events-three__content-right-content-list">
                                                            <li>
                                                                <div class="icon">
                                                                    <span class="icon-coffee-cup"></span>
                                                                </div>
                                                                <div class="text">
                                                                    <p>Coffee & Snacks</p>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="icon">
                                                                    <span class="icon-youtube"></span>
                                                                </div>
                                                                <div class="text">
                                                                    <p>Video Streming</p>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="events-three__content-right-content-right">
                                                        <h4 class="events-three__content-right-content-title-two">Wednesday
                                                        </h4>
                                                        <div class="events-three__content-right-content-time">
                                                            <div class="icon">
                                                                <span class="icon-time"></span>
                                                            </div>
                                                            <div class="text">
                                                                <p>10.00 am - 12.00 pm</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="events-three__btn-box">
                                                    <a href="contact.html" class="about-three__btn thm-btn-two"><span
                                                            class="fas fa-arrow-circle-right"></span>Buy Ticket</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!--tab-->
                            <!--tab-->
                            <div class="tab" id="4thdday">
                                <div class="events-three__main-content-box">
                                    <ul class="list-unstyled events-three__content-list">
                                        <li class="events-three__content-single">
                                            <div class="events-three__content-left">
                                                <div class="events-three__content-img">
                                                    <img src="assets/images/resources/events-three-content-img-1-1.jpg"
                                                        alt="">
                                                    <div class="events-three__video-link">
                                                        <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ"
                                                            class="video-popup">
                                                            <div class="events-three__video-icon">
                                                                <span class="icon-play"></span>
                                                                <i class="ripple"></i>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="events-three__content-user">
                                                    <div class="events-three__content-user-img">
                                                        <img src="assets/images/resources/events-three-content-user-img-1-1.jpg"
                                                            alt="">
                                                    </div>
                                                    <div class="events-three__content-user-info">
                                                        <h4 class="events-three__content-user-name">John Singh</h4>
                                                        <p class="events-three__content-user-sub-title">UX Design</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="events-three__content-right">
                                                <div class="events-three__content-right-content">
                                                    <div class="events-three__content-right-content-left">
                                                        <h4 class="events-three__content-right-content-title"><a
                                                                href="schedule-list.html">Kelimontos DJ
                                                                Party 2019</a></h4>
                                                        <ul class="list-unstyled events-three__content-right-content-list">
                                                            <li>
                                                                <div class="icon">
                                                                    <span class="icon-coffee-cup"></span>
                                                                </div>
                                                                <div class="text">
                                                                    <p>Coffee & Snacks</p>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="icon">
                                                                    <span class="icon-youtube"></span>
                                                                </div>
                                                                <div class="text">
                                                                    <p>Video Streming</p>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="events-three__content-right-content-right">
                                                        <h4 class="events-three__content-right-content-title-two">Wednesday
                                                        </h4>
                                                        <div class="events-three__content-right-content-time">
                                                            <div class="icon">
                                                                <span class="icon-time"></span>
                                                            </div>
                                                            <div class="text">
                                                                <p>10.00 am - 12.00 pm</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="events-three__btn-box">
                                                    <a href="contact.html" class="about-three__btn thm-btn-two"><span
                                                            class="fas fa-arrow-circle-right"></span>Buy Ticket</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="events-three__content-single">
                                            <div class="events-three__content-left">
                                                <div class="events-three__content-img">
                                                    <img src="assets/images/resources/events-three-content-img-1-2.jpg"
                                                        alt="">
                                                    <div class="events-three__video-link">
                                                        <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ"
                                                            class="video-popup">
                                                            <div class="events-three__video-icon">
                                                                <span class="icon-play"></span>
                                                                <i class="ripple"></i>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="events-three__content-user">
                                                    <div class="events-three__content-user-img">
                                                        <img src="assets/images/resources/events-three-content-user-img-1-2.jpg"
                                                            alt="">
                                                    </div>
                                                    <div class="events-three__content-user-info">
                                                        <h4 class="events-three__content-user-name">Mitra Smith</h4>
                                                        <p class="events-three__content-user-sub-title">UX Design</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="events-three__content-right">
                                                <div class="events-three__content-right-content">
                                                    <div class="events-three__content-right-content-left">
                                                        <h4 class="events-three__content-right-content-title"><a
                                                                href="schedule-list.html">Meeting With Word</a></h4>
                                                        <ul class="list-unstyled events-three__content-right-content-list">
                                                            <li>
                                                                <div class="icon">
                                                                    <span class="icon-coffee-cup"></span>
                                                                </div>
                                                                <div class="text">
                                                                    <p>Coffee & Snacks</p>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="icon">
                                                                    <span class="icon-youtube"></span>
                                                                </div>
                                                                <div class="text">
                                                                    <p>Video Streming</p>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="events-three__content-right-content-right">
                                                        <h4 class="events-three__content-right-content-title-two">Wednesday
                                                        </h4>
                                                        <div class="events-three__content-right-content-time">
                                                            <div class="icon">
                                                                <span class="icon-time"></span>
                                                            </div>
                                                            <div class="text">
                                                                <p>10.00 am - 12.00 pm</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="events-three__btn-box">
                                                    <a href="contact.html" class="about-three__btn thm-btn-two"><span
                                                            class="fas fa-arrow-circle-right"></span>Buy Ticket</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="events-three__content-single">
                                            <div class="events-three__content-left">
                                                <div class="events-three__content-img">
                                                    <img src="assets/images/resources/events-three-content-img-1-3.jpg"
                                                        alt="">
                                                    <div class="events-three__video-link">
                                                        <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ"
                                                            class="video-popup">
                                                            <div class="events-three__video-icon">
                                                                <span class="icon-play"></span>
                                                                <i class="ripple"></i>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="events-three__content-user">
                                                    <div class="events-three__content-user-img">
                                                        <img src="assets/images/resources/events-three-content-user-img-1-3.jpg"
                                                            alt="">
                                                    </div>
                                                    <div class="events-three__content-user-info">
                                                        <h4 class="events-three__content-user-name">Kowlant Smith</h4>
                                                        <p class="events-three__content-user-sub-title">UX Design</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="events-three__content-right">
                                                <div class="events-three__content-right-content">
                                                    <div class="events-three__content-right-content-left">
                                                        <h4 class="events-three__content-right-content-title"><a
                                                                href="schedule-list.html">Humble Hill Running Day</a></h4>
                                                        <ul class="list-unstyled events-three__content-right-content-list">
                                                            <li>
                                                                <div class="icon">
                                                                    <span class="icon-coffee-cup"></span>
                                                                </div>
                                                                <div class="text">
                                                                    <p>Coffee & Snacks</p>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="icon">
                                                                    <span class="icon-youtube"></span>
                                                                </div>
                                                                <div class="text">
                                                                    <p>Video Streming</p>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="events-three__content-right-content-right">
                                                        <h4 class="events-three__content-right-content-title-two">Wednesday
                                                        </h4>
                                                        <div class="events-three__content-right-content-time">
                                                            <div class="icon">
                                                                <span class="icon-time"></span>
                                                            </div>
                                                            <div class="text">
                                                                <p>10.00 am - 12.00 pm</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="events-three__btn-box">
                                                    <a href="contact.html" class="about-three__btn thm-btn-two"><span
                                                            class="fas fa-arrow-circle-right"></span>Buy Ticket</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!--tab-->
                        </div>
                    </div>
                </div>
            </section>
            <!--Event One End--> <!-- Sliding Text One Start -->

            <section class="sliding-text-one">
                <div class="sliding-text-one__wrap">
                    <ul class="sliding-text__list list-unstyled marquee_mode">
                        <li>
                            <h2 data-hover="COMSATS SWIFT 2024 /" class="sliding-text__title">COMSATS SWIFT 2024
                                <span>/</span>
                            </h2>
                        </li>
                        <li>
                            <h2 data-hover="Coming Soon /" class="sliding-text__title">Coming Soon
                                <span>/</span>
                            </h2>
                        </li>
                    </ul>
                </div>
            </section>
            <!-- Sliding Text One End --> <!-- Venue One Start -->
            <section class="venue-one">
                <div class="venue-one__shape"></div>
                <div class="venue-one__shape-2"></div>
                <div class="venue-one__shape-3 float-bob-y">
                    <img src="assets/images/shapes/venue-one-shape-3.png" alt="">
                </div>
                <div class="venue-one__bg-box">
                    <div class="venue-one__bg"
                        style="background-image: url(assets/images/backgrounds/venue-one-bg.jpg);">
                    </div>
                </div>
                <div class="container">
                    <div class="section-title text-center">
                        <div class="section-title__tagline-box">
                            <p class="section-title__tagline"><span></span> Event Venue <span></span></p>
                        </div>
                        <h2 class="section-title__title">Get in there to <span>Reach</span></h2>
                    </div>
                    <div class="row">
                        <div class="col-xl-6 wow fadeInLeft" data-wow-delay="300ms">
                            <div class="venue-one__left">
                                <ul class="list-unstyled venue-one__address">
                                    <li>
                                        <div class="icon">
                                            <div class="venue-one__address-shape-1"
                                                style="background-image: url(assets/images/shapes/venue-one-address-icon-shape-1.png);">
                                            </div>
                                            <span class="icon-laptop"></span>
                                        </div>
                                        <div class="content">
                                            <h4>Venue</h4>
                                            <p>COMSATS University Islamabad, Sahiwal Campus</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <div class="venue-one__address-shape-1"
                                                style="background-image: url(assets/images/shapes/venue-one-address-icon-shape-2.png);">
                                            </div>
                                            <span class="icon-placeholder1"></span>
                                        </div>
                                        <div class="content">
                                            <h4>Address</h4>
                                            <p>COMSATS University Rd, off GT Road, <br> Sahiwal, 57000</p>
                                        </div>
                                    </li>
                                </ul>
                                <ul class="list-unstyled venue-one__address-two">
                                    <li>
                                        <h4>Event Info</h4>
                                        <p>M. Salman Nawaz</p>
                                        <p><a href="tel:+923248895023">+92-324-8895023</a></p>
                                        <p><a href="mailto:salmannavaz@cuisahiwal.edu.pk">Contact via Email</a></p>
                                    </li>
                                    <li>
                                        <h4>Registration Info</h4>
                                        <p>Dr. Yawar Abbas Abid</p>
                                        <p><a href="tel:+923215215591">+92-321-5215591</a></p>
                                        <p><a href="mailto:yawar.abid@ciitsahiwal.edu.pk">Contact via Email</a></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-6 wow fadeInRight" data-wow-delay="300ms">
                            <div class="venue-one__right">
                                <div class="venue-one__img img-bounce">
                                    <img src="assets/images/resources/venue-one-img-1.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Venue One End --> <!--Gallery One Start-->
            <section class="gallery-one">
                <div class="gallery-one__shape-1 zoominout">
                    <img src="assets/images/shapes/gallery-one-shape-1.png" alt="">
                </div>
                <div class="container">
                    <div class="gallery-one__top">
                        <div class="section-title text-left">
                            <div class="section-title__tagline-box">
                                <p class="section-title__tagline">CUI SWIFT at a Glance </p>
                            </div>
                            <h2 class="section-title__title">Pictures <br><span>Gallery</span></h2>
                        </div>
                        <div class="gallery-one__btn-box">
                            <a href="gallery.html" class="gallery-one__btn thm-btn"><span
                                    class="fas fa-arrow-circle-right"></span>See
                                More Gallery</a>
                        </div>
                    </div>
                    <div class="row">
                        <!--Gallery One Single Start-->
                        <div class="col-xl-6 col-lg-6 wow fadeInLeft" data-wow-delay="100ms">
                            <div class="gallery-one__single">
                                <div class="gallery-one__img-box">
                                    <div class="gallery-one__img">
                                        <img src="assets/images/gallery/gallery-1-1.jpg" alt="">
                                    </div>
                                </div>
                                <div class="gallery-one__title-box">
                                    <p><span class="icon-marker"></span>lake Buena Vista</p>
                                    <h3><a href="gallery.html">Adrey Podshivakie</a></h3>
                                </div>
                            </div>
                        </div>
                        <!--Gallery One Single End-->
                        <!--Gallery One Single Start-->
                        <div class="col-xl-6 col-lg-6 wow fadeInRight" data-wow-delay="200ms">
                            <div class="gallery-one__single gallery-one__single-2">
                                <div class="gallery-one__img-box">
                                    <div class="gallery-one__img">
                                        <img src="assets/images/gallery/gallery-1-1.jpg" alt="">
                                    </div>
                                </div>
                                <div class="gallery-one__title-box">
                                    <p><span class="icon-marker"></span>lake Buena Vista</p>
                                    <h3><a href="gallery.html">Adrey Podshivakie</a></h3>
                                </div>
                            </div>
                        </div>
                        <!--Gallery One Single End-->
                        <!--Gallery One Single Start-->
                        <div class="col-xl-6 col-lg-6 wow fadeInLeft" data-wow-delay="300ms">
                            <div class="gallery-one__single gallery-one__single-3">
                                <div class="gallery-one__img-box">
                                    <div class="gallery-one__img">
                                        <img src="assets/images/gallery/gallery-1-3.jpg" alt="">
                                    </div>
                                </div>
                                <div class="gallery-one__title-box">
                                    <p><span class="icon-marker"></span>lake Buena Vista</p>
                                    <h3><a href="gallery.html">Adrey Podshivakie</a></h3>
                                </div>
                            </div>
                        </div>
                        <!--Gallery One Single End-->
                        <!--Gallery One Single Start-->
                        <div class="col-xl-6 col-lg-6 wow fadeInRight" data-wow-delay="400ms">
                            <div class="gallery-one__single gallery-one__single-4">
                                <div class="gallery-one__img-box">
                                    <div class="gallery-one__img">
                                        <img src="assets/images/gallery/gallery-1-4.jpg" alt="">
                                    </div>
                                </div>
                                <div class="gallery-one__title-box">
                                    <p><span class="icon-marker"></span>lake Buena Vista</p>
                                    <h3><a href="gallery.html">Adrey Podshivakie</a></h3>
                                </div>
                            </div>
                        </div>
                        <!--Gallery One Single End-->
                    </div>
                </div>
            </section>
            <!--Gallery One End--> <!--Category One Start-->
            <section class="category-one">
                <div class="category-one__bg-shape"></div>
                <div class="category-one__bg-shape-2"></div>
                <div class="category-one__bg-box">
                    <div class="category-one__bg"
                        style="background-image: url(assets/images/backgrounds/category-one-bg.jpg);">
                    </div>
                </div>
                <div class="container">
                    <div class="section-title text-center">
                        <div class="section-title__tagline-box">
                            <p class="section-title__tagline">Become Participants</p>
                        </div>
                        <h2 class="section-title__title">Registartion <span>Process</span></h2>
                    </div>
                    <div class="row">
                        <!--Category One Single Start-->
                        <div class="col-xl-4">
                            <div class="category-one__single">
                                <div class="category-one__count"></div>
                                <div class="category-one__icon">
                                    <span class="icon-guitar"></span>
                                </div>
                                <div class="category-one__text-box">
                                    <p class="category-one__text">Please provide essential details about the participants, including their name, email, <br> contact number, institution name, <br> and department name.
                                    <h3 class="category-one__title"><a href="#">Basic Information</a></h3>
                                </div>
                            </div>
                        </div>
                        <!--Category One Single End-->
                        <!--Category One Single Start-->
                        <div class="col-xl-4">
                            <div class="category-one__single-inner">
                                <div class="category-one__shape-1">
                                    <img src="assets/images/shapes/category-one-shape-1.png" alt="">
                                </div>
                                <div class="category-one__shape-2">
                                    <img src="assets/images/shapes/category-one-shape-2.png" alt="">
                                </div>
                                <div class="category-one__single">
                                    <div class="category-one__count"></div>
                                    <div class="category-one__icon">
                                        <span class="icon-trumpet"></span>
                                    </div>
                                    <div class="category-one__text-box">
                                        <p class="category-one__text">
                                            Provide detailed information related to the <br> chosen event(s). Specify the event you are <br> joining and provide team member <br> information (if applicable).
                                        </p>
                                        <h3 class="category-one__title"><a href="#">Event-Related Info</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Category One Single End-->
                        <!--Category One Single Start-->
                        <div class="col-xl-4">
                            <div class="category-one__single">
                                <div class="category-one__count"></div>
                                <div class="category-one__icon">
                                    <span class="icon-sitar"></span>
                                </div>
                                <div class="category-one__text-box">
                                    <p class="category-one__text">
                                        Finalizes the registration by confirming <br> acceptance  of terms and conditions. <br> Participants have to acknowledge event rules <br> and complete the submission process.
                                    </p>
                                    <h3 class="category-one__title"><a href="#">Confirmation</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
@endsection

