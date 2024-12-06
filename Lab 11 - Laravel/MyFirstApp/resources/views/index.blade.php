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
                                        <h3 class="feature-one__title"><a href="#">Spiritual Events</a>
                                        </h3>
                                        <p class="feature-one__text">Hussan e Qirat, Naat & Seerah.</p>
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
                                        <h3 class="feature-one__title"><a href="#">Cultural Events</a></h3>
                                        <p class="feature-one__text">Debate, Drama and Muzahiya Mushaira</p>
                                    </div>
                                    <div class="feature-one__btn-box">
                                        <a href="#"><span class="fas fa-arrow-circle-right"></span>More
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
                                        <h3 class="feature-one__title"><a href="#">Artistic Events</a></h3>
                                        <p class="feature-one__text">Canvas Painting & Calligraphy</p>
                                    </div>
                                    <div class="feature-one__btn-box">
                                        <a href="#"><span class="fas fa-arrow-circle-right"></span>More
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
                                        <img src="assets/images/resources/feature-1-4.jpg" alt="">
                                    </div>
                                    <div class="feature-one__count"></div>
                                    <div class="feature-one__content">
                                        <div class="feature-one__icon">
                                            <span class="icon-icon-15151715"></span>
                                        </div>
                                        <h3 class="feature-one__title"><a href="Technical Competitions">Technical Competitions</a>
                                        </h3>
                                        <p class="feature-one__text">CUI Robotron, DevFest & Graphic Design</p>
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
                                        <img src="assets/images/resources/feature-1-5.jpg" alt="">
                                    </div>
                                    <div class="feature-one__count"></div>
                                    <div class="feature-one__content">
                                        <div class="feature-one__icon">
                                            <span class="icon-brain"></span>
                                        </div>
                                        <h3 class="feature-one__title"><a href="#">Entrepreneurship</a></h3>
                                        <p class="feature-one__text">Green Business Idea & Product Design</p>
                                    </div>
                                    <div class="feature-one__btn-box">
                                        <a href="#"><span class="fas fa-arrow-circle-right"></span>More
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
                                        <img src="assets/images/resources/feature-1-6.jpg" alt="">
                                    </div>
                                    <div class="feature-one__count"></div>
                                    <div class="feature-one__content">
                                        <div class="feature-one__icon">
                                            <span class="icon-connection"></span>
                                        </div>
                                        <h3 class="feature-one__title"><a href="#">Sports</a></h3>
                                        <p class="feature-one__text">Kabaddi, Tug of War & 1000-Meter Race</p>
                                    </div>
                                    <div class="feature-one__btn-box">
                                        <a href="#"><span class="fas fa-arrow-circle-right"></span>More
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
            <section class="team-two">
                <div class="team-two__bg" style="background-image: url(assets/images/backgrounds/team-two-bg.jpg);"></div>
                <div class="container">
                    <div class="team-two__top">
                        <div class="section-title text-left">
                            <div class="section-title__tagline-box">
                                <p class="section-title__tagline section-title__tagline--two">Our Team</p>
                            </div>
                            <h2 class="section-title__title">Feature for your <br><span>Event</span></h2>
                        </div>
                        <p class="team-two__text">Our team comprises passionate individuals committed to making CUI SWIFT <br> an unforgettable experience. Together, we aim to create a platform that inspires <br>innovation, fosters collaboration, and celebrates talent in every form. <br> Meet the driving force behind the success of this mega event!</p>
                    </div>
                    <div class="row">
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="100ms">
                            <div class="team-two__single">
                                <div class="team-two__img">
                                    <img src="assets/images/team/team-2-1.png" alt="">
                                </div>
                                <div class="team-two__social">
                                    <a href="#"><span class="fab fa-twitter"></span></a>
                                    <a href="#" class="team-two__social-two"><span class="fab fa-facebook-f"></span></a>
                                    <a href="#" class="team-two__social-three"><span class="fab fa-whatsapp"></span></a>
                                    <a href="#"><span class="fab fa-linkedin"></span></a>
                                </div>
                                <div class="team-two__content">
                                    <p class="team-two__sub-title">Advisor</p>
                                    <h3 class="team-two__title"><a href="https://ww2.comsats.edu.pk/faculty/FacultyDetails.aspx?Uid=18720">Dr. Sabir Ali Shehzad</a></h3>
                                    <p class="team-two__single-text">Associate Professor <br> of Mathematics</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="300ms">
                            <div class="team-two__single">
                                <div class="team-two__img">
                                    <img src="assets/images/team/team-2-2.png" alt="">
                                </div>
                                <div class="team-two__social">
                                    <a href="#"><span class="fab fa-twitter"></span></a>
                                    <a href="#" class="team-two__social-two"><span class="fab fa-facebook-f"></span></a>
                                    <a href="#" class="team-two__social-three"><span class="fab fa-instagram"></span></a>
                                    <a href="#"><span class="fab fa-vimeo-v"></span></a>
                                </div>
                                <div class="team-two__content">
                                    <p class="team-two__sub-title">Convener</p>
                                    <h3 class="team-two__title"><a href="https://ww2.comsats.edu.pk/faculty/FacultyDetails.aspx?Uid=27261">Dr. Minhas Akbar</a></h3>
                                    <p class="team-two__single-text">Assistant Professor <br> of Management Sciences</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="600ms">
                            <div class="team-two__single">
                                <div class="team-two__img">
                                    <img src="assets/images/team/team-2-3.png" alt="">
                                </div>
                                <div class="team-two__social">
                                    <a href="#"><span class="fab fa-twitter"></span></a>
                                    <a href="#" class="team-two__social-two"><span class="fab fa-facebook-f"></span></a>
                                    <a href="#" class="team-two__social-three"><span class="fab fa-instagram"></span></a>
                                    <a href="#"><span class="fab fa-vimeo-v"></span></a>
                                </div>
                                <div class="team-two__content">
                                    <p class="team-two__sub-title">Member</p>
                                    <h3 class="team-two__title"><a href="https://ww2.comsats.edu.pk/faculty/FacultyDetails.aspx?Uid=18845">Dr. M. Waseem Sajid</a></h3>
                                    <p class="team-two__single-text">Associate Professor <br> of Bio Science</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="900ms">
                            <div class="team-two__single">
                                <div class="team-two__img">
                                    <img src="assets/images/team/team-2-4.png" alt="">
                                </div>
                                <div class="team-two__social">
                                    <a href="#"><span class="fab fa-twitter"></span></a>
                                    <a href="#" class="team-two__social-two"><span class="fab fa-facebook-f"></span></a>
                                    <a href="#" class="team-two__social-three"><span class="fab fa-instagram"></span></a>
                                    <a href="#"><span class="fab fa-vimeo-v"></span></a>
                                </div>
                                <div class="team-two__content">
                                    <p class="team-two__sub-title">Member</p>
                                    <h3 class="team-two__title"><a href="https://ww2.comsats.edu.pk/faculty/FacultyDetails.aspx?Uid=30742">Dr. Rahib Ali</a></h3>
                                    <p class="team-two__single-text">Assistant Professor <br> of Management Sciences</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="900ms">
                            <div class="team-two__single">
                                <div class="team-two__img">
                                    <img src="assets/images/team/team-2-5.png" alt="">
                                </div>
                                <div class="team-two__social">
                                    <a href="#"><span class="fab fa-twitter"></span></a>
                                    <a href="#" class="team-two__social-two"><span class="fab fa-facebook-f"></span></a>
                                    <a href="#" class="team-two__social-three"><span class="fab fa-instagram"></span></a>
                                    <a href="#"><span class="fab fa-vimeo-v"></span></a>
                                </div>
                                <div class="team-two__content">
                                    <p class="team-two__sub-title">Member</p>
                                    <h3 class="team-two__title"><a href="https://ww2.comsats.edu.pk/faculty/FacultyDetails.aspx?Uid=18749">Dr. Ammar Rauf</a></h3>
                                    <p class="team-two__single-text">Assistant Professor <br> of Mathematics</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="900ms">
                            <div class="team-two__single">
                                <div class="team-two__img">
                                    <img src="assets/images/team/team-2-6.png" alt="">
                                </div>
                                <div class="team-two__social">
                                    <a href="#"><span class="fab fa-twitter"></span></a>
                                    <a href="#" class="team-two__social-two"><span class="fab fa-facebook-f"></span></a>
                                    <a href="#" class="team-two__social-three"><span class="fab fa-instagram"></span></a>
                                    <a href="#"><span class="fab fa-vimeo-v"></span></a>
                                </div>
                                <div class="team-two__content">
                                    <p class="team-two__sub-title">Member</p>
                                    <h3 class="team-two__title"><a href="https://ww2.comsats.edu.pk/faculty/FacultyDetails.aspx?Uid=25390">Dr. Atif Mahmood</a></h3>
                                    <p class="team-two__single-text">Lecturer of Electrical & <br> Computer Engineering</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="900ms">
                            <div class="team-two__single">
                                <div class="team-two__img">
                                    <img src="assets/images/team/team-2-7.png" alt="">
                                </div>
                                <div class="team-two__social">
                                    <a href="#"><span class="fab fa-twitter"></span></a>
                                    <a href="#" class="team-two__social-two"><span class="fab fa-facebook-f"></span></a>
                                    <a href="#" class="team-two__social-three"><span class="fab fa-instagram"></span></a>
                                    <a href="#"><span class="fab fa-vimeo-v"></span></a>
                                </div>
                                <div class="team-two__content">
                                    <p class="team-two__sub-title">Member</p>
                                    <h3 class="team-two__title"><a href="https://ww2.comsats.edu.pk/faculty/FacultyDetails.aspx?Uid=30742">Dr. Yawar Abbas Abid</a></h3>
                                    <p class="team-two__single-text">Lecturer of <br> Computer Science</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="900ms">
                            <div class="team-two__single">
                                <div class="team-two__img">
                                    <img src="assets/images/team/team-2-9.png" alt="">
                                </div>
                                <div class="team-two__social">
                                    <a href="#"><span class="fab fa-twitter"></span></a>
                                    <a href="#" class="team-two__social-two"><span class="fab fa-facebook-f"></span></a>
                                    <a href="#" class="team-two__social-three"><span class="fab fa-instagram"></span></a>
                                    <a href="#"><span class="fab fa-vimeo-v"></span></a>
                                </div>
                                <div class="team-two__content">
                                    <p class="team-two__sub-title">Member</p>
                                    <h3 class="team-two__title"><a href="https://ww2.comsats.edu.pk/faculty/FacultyDetails.aspx?Uid=33047">Mr. Muhammad Jamil</a></h3>
                                    <p class="team-two__single-text">Lecturer of <br> Computer Science</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="900ms">
                            <div class="team-two__single">
                                <div class="team-two__img">
                                    <img src="assets/images/team/team-2-8.png" alt="">
                                </div>
                                <div class="team-two__social">
                                    <a href="#"><span class="fab fa-twitter"></span></a>
                                    <a href="#" class="team-two__social-two"><span class="fab fa-facebook-f"></span></a>
                                    <a href="#" class="team-two__social-three"><span class="fab fa-instagram"></span></a>
                                    <a href="#"><span class="fab fa-vimeo-v"></span></a>
                                </div>
                                <div class="team-two__content">
                                    <p class="team-two__sub-title">Secretary</p>
                                    <h3 class="team-two__title"><a href="https://ww2.comsats.edu.pk/faculty/FacultyDetails.aspx?Uid=19670">Mr. M. Salman Nawaz</a></h3>
                                    <p class="team-two__single-text">Lecturer of <br> Mechanical Engineering</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="sliding-text-one" style="margin-top: -100px">
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
            <section class="counter-one pb-5" style="margin-top: -75px;">
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
            <section class="events-three events-four">
                <div class="container">
                    <div class="section-title text-center">
                        <div class="section-title__tagline-box">
                            <p class="section-title__tagline">SWIFT Schedule</p>
                        </div>
                        <h2 class="section-title__title">Take a Glance at SWIFT<br> <span>Schedule</span></h2>
                    </div>
                    <div class="events-three__main-tab-box tabs-box">
                        <ul class="tab-buttons clearfix list-unstyled">
                            <li data-tab="#1stday" class="tab-btn active-btn">
                                <div class="events-three__tab-btn-content">
                                    <p>December 09, 2024</p>
                                    <h3>1<span>st</span>Day</h3>
                                </div>
                            </li>
                            <li data-tab="#2ndday" class="tab-btn">
                                <div class="events-three__tab-btn-content">
                                    <p>December 10, 2024</p>
                                    <h3>2<span>nd</span>Day</h3>
                                </div>
                            </li>
                            <li data-tab="#3rdday" class="tab-btn">
                                <div class="events-three__tab-btn-content">
                                    <p>December 11, 2024</p>
                                    <h3>3<span>rd</span>Day</h3>
                                </div>
                            </li>
                            <li data-tab="#4thdday" class="tab-btn">
                                <div class="events-three__tab-btn-content">
                                    <p>December 12, 2024</p>
                                    <h3>4<span>th</span>Day</h3>
                                </div>
                            </li>
                        </ul>
                        <div class="tabs-content">

                            <div class="tab active-tab" id="1stday">
                                <div class="events-three__main-content-box">
                                    <ul class="list-unstyled events-three__content-list">
                                        <li class="events-three__content-single">
                                            <div class="events-three__content-left">
                                                <div class="events-three__content-img">
                                                    <img src="assets/images/resources/opening-ceremony.png"
                                                        alt="">
                                                    {{-- <div class="events-three__video-link">
                                                        <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ"
                                                            class="video-popup">
                                                            <div class="events-three__video-icon">
                                                                <span class="icon-play"></span>
                                                                <i class="ripple"></i>
                                                            </div>
                                                        </a>
                                                    </div> --}}
                                                </div>
                                                <div class="events-three__content-user">
                                                    <div class="events-three__content-user-info">
                                                        <h4 class="events-three__content-user-name">Organizing Committee</h4>
                                                        <p class="events-three__content-user-sub-title">CUI SWIFT</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="events-three__content-right">
                                                <div class="events-three__content-right-content">
                                                    <div class="events-three__content-right-content-left">
                                                        <h4 class="events-three__content-right-content-title"><a
                                                                href="#">Opening Ceremony</a></h4>
                                                        <ul class="list-unstyled events-three__content-right-content-list">
                                                            <li>
                                                                <div class="icon">
                                                                    <span class="icon-marker"></span>
                                                                </div>
                                                                <div class="text">
                                                                    <p>Main Auditorium - Block A</p>
                                                                </div>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                    <div class="events-three__content-right-content-right">
                                                        <h4 class="events-three__content-right-content-title-two">Monday
                                                        </h4>
                                                        <div class="events-three__content-right-content-time">
                                                            <div class="icon">
                                                                <span class="icon-time"></span>
                                                            </div>
                                                            <div class="text">
                                                                <p>10:00 AM – 11:00 AM</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="events-three__btn-box">
                                                    <a href="contact.html" class="about-three__btn thm-btn-two"><span class="fas fa-arrow-circle-right"></span>Register Now</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="events-three__content-single">
                                            <div class="events-three__content-left">
                                                <div class="events-three__content-img">
                                                    <img src="assets/images/resources/hussan-e-qirat.png"
                                                        alt="">
                                                    {{-- <div class="events-three__video-link">
                                                        <a href="https://www.youtube.com/watch?v=nzUOD9QJvDY"
                                                            class="video-popup">
                                                            <div class="events-three__video-icon">
                                                                <span class="icon-play"></span>
                                                                <i class="ripple"></i>
                                                            </div>
                                                        </a>
                                                    </div> --}}
                                                </div>
                                                <div class="events-three__content-user">
                                                    <div class="events-three__content-user-info">
                                                        <h4 class="events-three__content-user-name">Focal Person</h4>
                                                        <p class="events-three__content-user-sub-title">Dr. Atif Mehmood</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="events-three__content-right">
                                                <div class="events-three__content-right-content">
                                                    <div class="events-three__content-right-content-left">
                                                        <h4 class="events-three__content-right-content-title"><a
                                                                href="#">Hussan-e-Qirat</a></h4>
                                                        <ul class="list-unstyled events-three__content-right-content-list">
                                                            <li>
                                                                <div class="icon">
                                                                    <span class="icon-marker"></span>
                                                                </div>
                                                                <div class="text">
                                                                    <p>Main Auditorium - Block A</p>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="events-three__content-right-content-right">
                                                        <h4 class="events-three__content-right-content-title-two">Monday
                                                        </h4>
                                                        <div class="events-three__content-right-content-time">
                                                            <div class="icon">
                                                                <span class="icon-time"></span>
                                                            </div>
                                                            <div class="text">
                                                                <p>11:15 AM – 12:45 PM</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="events-three__btn-box">
                                                    <a href="#" class="about-three__btn thm-btn-two"><span
                                                            class="fas fa-arrow-circle-right"></span>Register Now</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="events-three__content-single">
                                            <div class="events-three__content-left">
                                                <div class="events-three__content-img">
                                                    <img src="assets/images/resources/naat-recitation.png"
                                                        alt="">
                                                    {{-- <div class="events-three__video-link">
                                                        <a href="https://www.youtube.com/watch?v=nzUOD9QJvDY"
                                                            class="video-popup">
                                                            <div class="events-three__video-icon">
                                                                <span class="icon-play"></span>
                                                                <i class="ripple"></i>
                                                            </div>
                                                        </a>
                                                    </div> --}}
                                                </div>
                                                <div class="events-three__content-user">
                                                    <div class="events-three__content-user-info">
                                                        <h4 class="events-three__content-user-name">Focal Person</h4>
                                                        <p class="events-three__content-user-sub-title">Dr. Atif Mehmood</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="events-three__content-right">
                                                <div class="events-three__content-right-content">
                                                    <div class="events-three__content-right-content-left">
                                                        <h4 class="events-three__content-right-content-title"><a
                                                                href="#">Naat Recitation</a></h4>
                                                        <ul class="list-unstyled events-three__content-right-content-list">
                                                            <li>
                                                                <div class="icon">
                                                                    <span class="icon-marker"></span>
                                                                </div>
                                                                <div class="text">
                                                                    <p>Main Auditorium - Block A</p>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="events-three__content-right-content-right">
                                                        <h4 class="events-three__content-right-content-title-two">Monday
                                                        </h4>
                                                        <div class="events-three__content-right-content-time">
                                                            <div class="icon">
                                                                <span class="icon-time"></span>
                                                            </div>
                                                            <div class="text">
                                                                <p>1:15 PM – 03:00 PM</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="events-three__btn-box">
                                                    <a href="#" class="about-three__btn thm-btn-two"><span
                                                            class="fas fa-arrow-circle-right"></span>Register Now</a>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="events-three__content-single">
                                            <div class="events-three__content-left">
                                                <div class="events-three__content-img">
                                                    <img src="assets/images/resources/canvas-painting.png"
                                                        alt="">
                                                    {{-- <div class="events-three__video-link">
                                                        <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ"
                                                            class="video-popup">
                                                            <div class="events-three__video-icon">
                                                                <span class="icon-play"></span>
                                                                <i class="ripple"></i>
                                                            </div>
                                                        </a>
                                                    </div> --}}
                                                </div>
                                                <div class="events-three__content-user">
                                                    <div class="events-three__content-user-info">
                                                        <h4 class="events-three__content-user-name">Focal Person</h4>
                                                        <p class="events-three__content-user-sub-title">Dr. Ammar Rauf</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="events-three__content-right">
                                                <div class="events-three__content-right-content">
                                                    <div class="events-three__content-right-content-left">
                                                        <h4 class="events-three__content-right-content-title"><a
                                                                href="#">Canvas Painting</a></h4>
                                                        <ul class="list-unstyled events-three__content-right-content-list">
                                                            <li>
                                                                <div class="icon">
                                                                    <span class="icon-marker"></span>
                                                                </div>
                                                                <div class="text">
                                                                    <p>Main Auditorium - Block A</p>
                                                                </div>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                    <div class="events-three__content-right-content-right">
                                                        <h4 class="events-three__content-right-content-title-two">Monday
                                                        </h4>
                                                        <div class="events-three__content-right-content-time">
                                                            <div class="icon">
                                                                <span class="icon-time"></span>
                                                            </div>
                                                            <div class="text">
                                                                <p>01:15 PM – 3:30 PM</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="events-three__btn-box">
                                                    <a href="contact.html" class="about-three__btn thm-btn-two"><span
                                                            class="fas fa-arrow-circle-right"></span>Register Now</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="events-three__content-single">
                                            <div class="events-three__content-left">
                                                <div class="events-three__content-img">
                                                    <img src="assets/images/resources/prize-distribution.png"
                                                        alt="">
                                                    {{-- <div class="events-three__video-link">
                                                        <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ"
                                                            class="video-popup">
                                                            <div class="events-three__video-icon">
                                                                <span class="icon-play"></span>
                                                                <i class="ripple"></i>
                                                            </div>
                                                        </a>
                                                    </div> --}}
                                                </div>
                                                <div class="events-three__content-user">
                                                    <div class="events-three__content-user-info">
                                                        <h4 class="events-three__content-user-name">Organizing Committee</h4>
                                                        <p class="events-three__content-user-sub-title">CUI Sahiwal</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="events-three__content-right">
                                                <div class="events-three__content-right-content">
                                                    <div class="events-three__content-right-content-left">
                                                        <h4 class="events-three__content-right-content-title"><a
                                                                href="#">Prize Distribution</a></h4>
                                                        <ul class="list-unstyled events-three__content-right-content-list">
                                                            <li>
                                                                <div class="icon">
                                                                    <span class="icon-marker"></span>
                                                                </div>
                                                                <div class="text">
                                                                    <p>Main Auditorium - Block A</p>
                                                                </div>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                    <div class="events-three__content-right-content-right">
                                                        <h4 class="events-three__content-right-content-title-two">Monday
                                                        </h4>
                                                        <div class="events-three__content-right-content-time">
                                                            <div class="icon">
                                                                <span class="icon-time"></span>
                                                            </div>
                                                            <div class="text">
                                                                <p>4:00 PM – 4:30 PM</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="events-three__btn-box">
                                                    <a href="contact.html" class="about-three__btn thm-btn-two"><span
                                                            class="fas fa-arrow-circle-right"></span>Register Now</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab" id="2ndday">
                                <div class="events-three__main-content-box">
                                    <ul class="list-unstyled events-three__content-list">
                                        <li class="events-three__content-single">
                                            <div class="events-three__content-left">
                                                <div class="events-three__content-img">
                                                    <img src="assets/images/resources/seerat-un-nabi.png"
                                                        alt="">
                                                    {{-- <div class="events-three__video-link">
                                                        <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ"
                                                            class="video-popup">
                                                            <div class="events-three__video-icon">
                                                                <span class="icon-play"></span>
                                                                <i class="ripple"></i>
                                                            </div>
                                                        </a>
                                                    </div> --}}
                                                </div>
                                                <div class="events-three__content-user">
                                                    <div class="events-three__content-user-info">
                                                        <h4 class="events-three__content-user-name">Focal Person</h4>
                                                        <p class="events-three__content-user-sub-title">Dr. Atif Mehmood</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="events-three__content-right">
                                                <div class="events-three__content-right-content">
                                                    <div class="events-three__content-right-content-left">
                                                        <h4 class="events-three__content-right-content-title"><a
                                                                href="#">Seerat un-Nabi Quiz</a></h4>
                                                        <ul class="list-unstyled events-three__content-right-content-list">
                                                            <li>
                                                                <div class="icon">
                                                                    <span class="icon-marker"></span>
                                                                </div>
                                                                <div class="text">
                                                                    <p>Main Auditorium - Block A</p>
                                                                </div>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                    <div class="events-three__content-right-content-right">
                                                        <h4 class="events-three__content-right-content-title-two">Tuesday
                                                        </h4>
                                                        <div class="events-three__content-right-content-time">
                                                            <div class="icon">
                                                                <span class="icon-time"></span>
                                                            </div>
                                                            <div class="text">
                                                                <p>10:00 AM – 12:30 PM</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="events-three__btn-box">
                                                    <a href="#" class="about-three__btn thm-btn-two"><span class="fas fa-arrow-circle-right"></span>Register Now</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="events-three__content-single">
                                            <div class="events-three__content-left">
                                                <div class="events-three__content-img">
                                                    <img src="assets/images/resources/code-battle.png"
                                                        alt="">
                                                    {{-- <div class="events-three__video-link">
                                                        <a href="https://www.youtube.com/watch?v=nzUOD9QJvDY"
                                                            class="video-popup">
                                                            <div class="events-three__video-icon">
                                                                <span class="icon-play"></span>
                                                                <i class="ripple"></i>
                                                            </div>
                                                        </a>
                                                    </div> --}}
                                                </div>
                                                <div class="events-three__content-user">
                                                    <div class="events-three__content-user-info">
                                                        <h4 class="events-three__content-user-name">Focal Person</h4>
                                                        <p class="events-three__content-user-sub-title">Mr. Muhammad Jamil</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="events-three__content-right">
                                                <div class="events-three__content-right-content">
                                                    <div class="events-three__content-right-content-left">
                                                        <h4 class="events-three__content-right-content-title"><a
                                                                href="#">CUI Code Battle</a></h4>
                                                        <ul class="list-unstyled events-three__content-right-content-list">
                                                            <li>
                                                                <div class="icon">
                                                                    <span class="icon-marker"></span>
                                                                </div>
                                                                <div class="text">
                                                                    <p>Programming Lab, CS Dept.</p>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="events-three__content-right-content-right">
                                                        <h4 class="events-three__content-right-content-title-two">Tuesday
                                                        </h4>
                                                        <div class="events-three__content-right-content-time">
                                                            <div class="icon">
                                                                <span class="icon-time"></span>
                                                            </div>
                                                            <div class="text">
                                                                <p>10:00 AM – 12:30 PM</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="events-three__btn-box">
                                                    <a href="#" class="about-three__btn thm-btn-two"><span
                                                            class="fas fa-arrow-circle-right"></span>Register Now</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="events-three__content-single">
                                            <div class="events-three__content-left">
                                                <div class="events-three__content-img">
                                                    <img src="assets/images/resources/calligraphy.png"
                                                        alt="">
                                                    {{-- <div class="events-three__video-link">
                                                        <a href="https://www.youtube.com/watch?v=nzUOD9QJvDY"
                                                            class="video-popup">
                                                            <div class="events-three__video-icon">
                                                                <span class="icon-play"></span>
                                                                <i class="ripple"></i>
                                                            </div>
                                                        </a>
                                                    </div> --}}
                                                </div>
                                                <div class="events-three__content-user">
                                                    <div class="events-three__content-user-info">
                                                        <h4 class="events-three__content-user-name">Focal Person</h4>
                                                        <p class="events-three__content-user-sub-title">Dr. Ammar Rauf</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="events-three__content-right">
                                                <div class="events-three__content-right-content">
                                                    <div class="events-three__content-right-content-left">
                                                        <h4 class="events-three__content-right-content-title"><a
                                                                href="#">Calligraphy Competition</a></h4>
                                                        <ul class="list-unstyled events-three__content-right-content-list">
                                                            <li>
                                                                <div class="icon">
                                                                    <span class="icon-marker"></span>
                                                                </div>
                                                                <div class="text">
                                                                    <p>Drawing Hall - Block A</p>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="events-three__content-right-content-right">
                                                        <h4 class="events-three__content-right-content-title-two">Tuesday
                                                        </h4>
                                                        <div class="events-three__content-right-content-time">
                                                            <div class="icon">
                                                                <span class="icon-time"></span>
                                                            </div>
                                                            <div class="text">
                                                                <p>1:15 PM – 03:15 PM</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="events-three__btn-box">
                                                    <a href="#" class="about-three__btn thm-btn-two"><span
                                                            class="fas fa-arrow-circle-right"></span>Register Now</a>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="events-three__content-single">
                                            <div class="events-three__content-left">
                                                <div class="events-three__content-img">
                                                    <img src="assets/images/resources/kabbadi.png"
                                                        alt="">
                                                    {{-- <div class="events-three__video-link">
                                                        <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ"
                                                            class="video-popup">
                                                            <div class="events-three__video-icon">
                                                                <span class="icon-play"></span>
                                                                <i class="ripple"></i>
                                                            </div>
                                                        </a>
                                                    </div> --}}
                                                </div>
                                                <div class="events-three__content-user">
                                                    <div class="events-three__content-user-info">
                                                        <h4 class="events-three__content-user-name">Focal Person</h4>
                                                        <p class="events-three__content-user-sub-title">Dr. Wasim Sajid</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="events-three__content-right">
                                                <div class="events-three__content-right-content">
                                                    <div class="events-three__content-right-content-left">
                                                        <h4 class="events-three__content-right-content-title"><a
                                                                href="#">Kabaddi Tournament</a></h4>
                                                        <ul class="list-unstyled events-three__content-right-content-list">
                                                            <li>
                                                                <div class="icon">
                                                                    <span class="icon-marker"></span>
                                                                </div>
                                                                <div class="text">
                                                                    <p>Main Sports Ground</p>
                                                                </div>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                    <div class="events-three__content-right-content-right">
                                                        <h4 class="events-three__content-right-content-title-two">Tuesday
                                                        </h4>
                                                        <div class="events-three__content-right-content-time">
                                                            <div class="icon">
                                                                <span class="icon-time"></span>
                                                            </div>
                                                            <div class="text">
                                                                <p>10:00 AM – 4:00 PM</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="events-three__btn-box">
                                                    <a href="contact.html" class="about-three__btn thm-btn-two"><span
                                                            class="fas fa-arrow-circle-right"></span>Register Now</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="events-three__content-single">
                                            <div class="events-three__content-left">
                                                <div class="events-three__content-img">
                                                    <img src="assets/images/resources/prize-distribution.png"
                                                        alt="">
                                                    {{-- <div class="events-three__video-link">
                                                        <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ"
                                                            class="video-popup">
                                                            <div class="events-three__video-icon">
                                                                <span class="icon-play"></span>
                                                                <i class="ripple"></i>
                                                            </div>
                                                        </a>
                                                    </div> --}}
                                                </div>
                                                <div class="events-three__content-user">
                                                    <div class="events-three__content-user-info">
                                                        <h4 class="events-three__content-user-name">Organizing Committee</h4>
                                                        <p class="events-three__content-user-sub-title">CUI Sahiwal</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="events-three__content-right">
                                                <div class="events-three__content-right-content">
                                                    <div class="events-three__content-right-content-left">
                                                        <h4 class="events-three__content-right-content-title"><a
                                                                href="#">Prize Distribution</a></h4>
                                                        <ul class="list-unstyled events-three__content-right-content-list">
                                                            <li>
                                                                <div class="icon">
                                                                    <span class="icon-marker"></span>
                                                                </div>
                                                                <div class="text">
                                                                    <p>Main Auditorium - Block A</p>
                                                                </div>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                    <div class="events-three__content-right-content-right">
                                                        <h4 class="events-three__content-right-content-title-two">Tuesday
                                                        </h4>
                                                        <div class="events-three__content-right-content-time">
                                                            <div class="icon">
                                                                <span class="icon-time"></span>
                                                            </div>
                                                            <div class="text">
                                                                <p>4:00 PM – 4:30 PM</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="events-three__btn-box">
                                                    <a href="contact.html" class="about-three__btn thm-btn-two"><span
                                                            class="fas fa-arrow-circle-right"></span>Register Now</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab" id="3rdday">
                                <div class="events-three__main-content-box">
                                    <ul class="list-unstyled events-three__content-list">
                                        <li class="events-three__content-single">
                                            <div class="events-three__content-left">
                                                <div class="events-three__content-img">
                                                    <img src="assets/images/resources/debate.png"
                                                        alt="">
                                                    {{-- <div class="events-three__video-link">
                                                        <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ"
                                                            class="video-popup">
                                                            <div class="events-three__video-icon">
                                                                <span class="icon-play"></span>
                                                                <i class="ripple"></i>
                                                            </div>
                                                        </a>
                                                    </div> --}}
                                                </div>
                                                <div class="events-three__content-user">
                                                    <div class="events-three__content-user-info">
                                                        <h4 class="events-three__content-user-name">Focal Person</h4>
                                                        <p class="events-three__content-user-sub-title">Mr. Salman Nawaz</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="events-three__content-right">
                                                <div class="events-three__content-right-content">
                                                    <div class="events-three__content-right-content-left">
                                                        <h4 class="events-three__content-right-content-title"><a
                                                                href="#">Debate Competition</a></h4>
                                                        <ul class="list-unstyled events-three__content-right-content-list">
                                                            <li>
                                                                <div class="icon">
                                                                    <span class="icon-marker"></span>
                                                                </div>
                                                                <div class="text">
                                                                    <p>Main Auditorium - Block A</p>
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
                                                                <p>10:00 AM – 12:45 PM</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="events-three__btn-box">
                                                    <a href="#" class="about-three__btn thm-btn-two"><span class="fas fa-arrow-circle-right"></span>Register Now</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="events-three__content-single">
                                            <div class="events-three__content-left">
                                                <div class="events-three__content-img">
                                                    <img src="assets/images/resources/green-business.png"
                                                        alt="">
                                                    {{-- <div class="events-three__video-link">
                                                        <a href="https://www.youtube.com/watch?v=nzUOD9QJvDY"
                                                            class="video-popup">
                                                            <div class="events-three__video-icon">
                                                                <span class="icon-play"></span>
                                                                <i class="ripple"></i>
                                                            </div>
                                                        </a>
                                                    </div> --}}
                                                </div>
                                                <div class="events-three__content-user">
                                                    <div class="events-three__content-user-info">
                                                        <h4 class="events-three__content-user-name">Focal Person</h4>
                                                        <p class="events-three__content-user-sub-title">Dr. Rahib Ali</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="events-three__content-right">
                                                <div class="events-three__content-right-content">
                                                    <div class="events-three__content-right-content-left">
                                                        <h4 class="events-three__content-right-content-title"><a
                                                                href="#">Green Business <br> Idea Competition</a></h4>
                                                        <ul class="list-unstyled events-three__content-right-content-list">
                                                            <li>
                                                                <div class="icon">
                                                                    <span class="icon-marker"></span>
                                                                </div>
                                                                <div class="text">
                                                                    <p>New Auditorium - Block D</p>
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
                                                                <p>10:00 AM – 12:45 PM</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="events-three__btn-box">
                                                    <a href="#" class="about-three__btn thm-btn-two"><span
                                                            class="fas fa-arrow-circle-right"></span>Register Now</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="events-three__content-single">
                                            <div class="events-three__content-left">
                                                <div class="events-three__content-img">
                                                    <img src="assets/images/resources/tug-of-war.png"
                                                        alt="">
                                                    {{-- <div class="events-three__video-link">
                                                        <a href="https://www.youtube.com/watch?v=nzUOD9QJvDY"
                                                            class="video-popup">
                                                            <div class="events-three__video-icon">
                                                                <span class="icon-play"></span>
                                                                <i class="ripple"></i>
                                                            </div>
                                                        </a>
                                                    </div> --}}
                                                </div>
                                                <div class="events-three__content-user">
                                                    <div class="events-three__content-user-info">
                                                        <h4 class="events-three__content-user-name">Focal Person</h4>
                                                        <p class="events-three__content-user-sub-title">Dr. Wasim Sajid</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="events-three__content-right">
                                                <div class="events-three__content-right-content">
                                                    <div class="events-three__content-right-content-left">
                                                        <h4 class="events-three__content-right-content-title"><a
                                                                href="#">Tug of War <br> Tournament</a></h4>
                                                        <ul class="list-unstyled events-three__content-right-content-list">
                                                            <li>
                                                                <div class="icon">
                                                                    <span class="icon-marker"></span>
                                                                </div>
                                                                <div class="text">
                                                                    <p>Main Sports Ground</p>
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
                                                                <p>1:15 PM – 03:15 PM</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="events-three__btn-box">
                                                    <a href="#" class="about-three__btn thm-btn-two"><span
                                                            class="fas fa-arrow-circle-right"></span>Register Now</a>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="events-three__content-single">
                                            <div class="events-three__content-left">
                                                <div class="events-three__content-img">
                                                    <img src="assets/images/resources/robotron.png"
                                                        alt="">
                                                    {{-- <div class="events-three__video-link">
                                                        <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ"
                                                            class="video-popup">
                                                            <div class="events-three__video-icon">
                                                                <span class="icon-play"></span>
                                                                <i class="ripple"></i>
                                                            </div>
                                                        </a>
                                                    </div> --}}
                                                </div>
                                                <div class="events-three__content-user">
                                                    <div class="events-three__content-user-info">
                                                        <h4 class="events-three__content-user-name">Focal Person</h4>
                                                        <p class="events-three__content-user-sub-title">Mr. Muhammad Jamil</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="events-three__content-right">
                                                <div class="events-three__content-right-content">
                                                    <div class="events-three__content-right-content-left">
                                                        <h4 class="events-three__content-right-content-title"><a
                                                                href="#">CUI Robotron</a></h4>
                                                        <ul class="list-unstyled events-three__content-right-content-list">
                                                            <li>
                                                                <div class="icon">
                                                                    <span class="icon-marker"></span>
                                                                </div>
                                                                <div class="text">
                                                                    <p>New Auditorium - Block D</p>
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
                                                                <p>1:15 PM – 3:45 PM</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="events-three__btn-box">
                                                    <a href="contact.html" class="about-three__btn thm-btn-two"><span
                                                            class="fas fa-arrow-circle-right"></span>Register Now</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="events-three__content-single">
                                            <div class="events-three__content-left">
                                                <div class="events-three__content-img">
                                                    <img src="assets/images/resources/prize-distribution.png"
                                                        alt="">
                                                    {{-- <div class="events-three__video-link">
                                                        <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ"
                                                            class="video-popup">
                                                            <div class="events-three__video-icon">
                                                                <span class="icon-play"></span>
                                                                <i class="ripple"></i>
                                                            </div>
                                                        </a>
                                                    </div> --}}
                                                </div>
                                                <div class="events-three__content-user">
                                                    <div class="events-three__content-user-info">
                                                        <h4 class="events-three__content-user-name">Organizing Committee</h4>
                                                        <p class="events-three__content-user-sub-title">CUI Sahiwal</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="events-three__content-right">
                                                <div class="events-three__content-right-content">
                                                    <div class="events-three__content-right-content-left">
                                                        <h4 class="events-three__content-right-content-title"><a
                                                                href="#">Prize Distribution</a></h4>
                                                        <ul class="list-unstyled events-three__content-right-content-list">
                                                            <li>
                                                                <div class="icon">
                                                                    <span class="icon-marker"></span>
                                                                </div>
                                                                <div class="text">
                                                                    <p>Main Auditorium - Block A</p>
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
                                                                <p>4:00 PM – 4:30 PM</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="events-three__btn-box">
                                                    <a href="contact.html" class="about-three__btn thm-btn-two"><span
                                                            class="fas fa-arrow-circle-right"></span>Register Now</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab" id="4thdday">
                                <div class="events-three__main-content-box">
                                    <ul class="list-unstyled events-three__content-list">
                                        <li class="events-three__content-single">
                                            <div class="events-three__content-left">
                                                <div class="events-three__content-img">
                                                    <img src="assets/images/resources/drama.png"
                                                        alt="">
                                                    {{-- <div class="events-three__video-link">
                                                        <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ"
                                                            class="video-popup">
                                                            <div class="events-three__video-icon">
                                                                <span class="icon-play"></span>
                                                                <i class="ripple"></i>
                                                            </div>
                                                        </a>
                                                    </div> --}}
                                                </div>
                                                <div class="events-three__content-user">
                                                    <div class="events-three__content-user-info">
                                                        <h4 class="events-three__content-user-name">Focal Person</h4>
                                                        <p class="events-three__content-user-sub-title">Mr. Salman Nawaz</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="events-three__content-right">
                                                <div class="events-three__content-right-content">
                                                    <div class="events-three__content-right-content-left">
                                                        <h4 class="events-three__content-right-content-title"><a
                                                                href="#">Drama Competition</a></h4>
                                                        <ul class="list-unstyled events-three__content-right-content-list">
                                                            <li>
                                                                <div class="icon">
                                                                    <span class="icon-marker"></span>
                                                                </div>
                                                                <div class="text">
                                                                    <p>Main Auditorium - Block A</p>
                                                                </div>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                    <div class="events-three__content-right-content-right">
                                                        <h4 class="events-three__content-right-content-title-two">Thursday
                                                        </h4>
                                                        <div class="events-three__content-right-content-time">
                                                            <div class="icon">
                                                                <span class="icon-time"></span>
                                                            </div>
                                                            <div class="text">
                                                                <p>10:00 AM – 12:45 PM</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="events-three__btn-box">
                                                    <a href="#" class="about-three__btn thm-btn-two"><span class="fas fa-arrow-circle-right"></span>Register Now</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="events-three__content-single">
                                            <div class="events-three__content-left">
                                                <div class="events-three__content-img">
                                                    <img src="assets/images/resources/green-business.png"
                                                        alt="">
                                                    {{-- <div class="events-three__video-link">
                                                        <a href="https://www.youtube.com/watch?v=nzUOD9QJvDY"
                                                            class="video-popup">
                                                            <div class="events-three__video-icon">
                                                                <span class="icon-play"></span>
                                                                <i class="ripple"></i>
                                                            </div>
                                                        </a>
                                                    </div> --}}
                                                </div>
                                                <div class="events-three__content-user">
                                                    <div class="events-three__content-user-info">
                                                        <h4 class="events-three__content-user-name">Focal Person</h4>
                                                        <p class="events-three__content-user-sub-title">Dr. Rahib Ali</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="events-three__content-right">
                                                <div class="events-three__content-right-content">
                                                    <div class="events-three__content-right-content-left">
                                                        <h4 class="events-three__content-right-content-title"><a
                                                                href="#">Food Product <br> Development</a></h4>
                                                        <ul class="list-unstyled events-three__content-right-content-list">
                                                            <li>
                                                                <div class="icon">
                                                                    <span class="icon-marker"></span>
                                                                </div>
                                                                <div class="text">
                                                                    <p>New Auditorium - Block D</p>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="events-three__content-right-content-right">
                                                        <h4 class="events-three__content-right-content-title-two">Thursday
                                                        </h4>
                                                        <div class="events-three__content-right-content-time">
                                                            <div class="icon">
                                                                <span class="icon-time"></span>
                                                            </div>
                                                            <div class="text">
                                                                <p>10:00 AM – 12:45 PM</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="events-three__btn-box">
                                                    <a href="#" class="about-three__btn thm-btn-two"><span
                                                            class="fas fa-arrow-circle-right"></span>Register Now</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="events-three__content-single">
                                            <div class="events-three__content-left">
                                                <div class="events-three__content-img">
                                                    <img src="assets/images/resources/tug-of-war.png"
                                                        alt="">
                                                    {{-- <div class="events-three__video-link">
                                                        <a href="https://www.youtube.com/watch?v=nzUOD9QJvDY"
                                                            class="video-popup">
                                                            <div class="events-three__video-icon">
                                                                <span class="icon-play"></span>
                                                                <i class="ripple"></i>
                                                            </div>
                                                        </a>
                                                    </div> --}}
                                                </div>
                                                <div class="events-three__content-user">
                                                    <div class="events-three__content-user-info">
                                                        <h4 class="events-three__content-user-name">Focal Person</h4>
                                                        <p class="events-three__content-user-sub-title">Dr. Rahib Ali</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="events-three__content-right">
                                                <div class="events-three__content-right-content">
                                                    <div class="events-three__content-right-content-left">
                                                        <h4 class="events-three__content-right-content-title"><a
                                                                href="#">STEM Quiz</a></h4>
                                                        <ul class="list-unstyled events-three__content-right-content-list">
                                                            <li>
                                                                <div class="icon">
                                                                    <span class="icon-marker"></span>
                                                                </div>
                                                                <div class="text">
                                                                    <p>Main Auditorium - Block A</p>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="events-three__content-right-content-right">
                                                        <h4 class="events-three__content-right-content-title-two">Thursday
                                                        </h4>
                                                        <div class="events-three__content-right-content-time">
                                                            <div class="icon">
                                                                <span class="icon-time"></span>
                                                            </div>
                                                            <div class="text">
                                                                <p>1:15 PM – 03:00 PM</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="events-three__btn-box">
                                                    <a href="#" class="about-three__btn thm-btn-two"><span
                                                            class="fas fa-arrow-circle-right"></span>Register Now</a>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="events-three__content-single">
                                            <div class="events-three__content-left">
                                                <div class="events-three__content-img">
                                                    <img src="assets/images/resources/graphic-design.png"
                                                        alt="">
                                                    {{-- <div class="events-three__video-link">
                                                        <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ"
                                                            class="video-popup">
                                                            <div class="events-three__video-icon">
                                                                <span class="icon-play"></span>
                                                                <i class="ripple"></i>
                                                            </div>
                                                        </a>
                                                    </div> --}}
                                                </div>
                                                <div class="events-three__content-user">
                                                    <div class="events-three__content-user-info">
                                                        <h4 class="events-three__content-user-name">Focal Person</h4>
                                                        <p class="events-three__content-user-sub-title">Dr. Yawar Abbas</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="events-three__content-right">
                                                <div class="events-three__content-right-content">
                                                    <div class="events-three__content-right-content-left">
                                                        <h4 class="events-three__content-right-content-title"><a
                                                                href="#">Graphic Design <br> Competition</a></h4>
                                                        <ul class="list-unstyled events-three__content-right-content-list">
                                                            <li>
                                                                <div class="icon">
                                                                    <span class="icon-marker"></span>
                                                                </div>
                                                                <div class="text">
                                                                    <p>Computing Lab - CS Dept.</p>
                                                                </div>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                    <div class="events-three__content-right-content-right">
                                                        <h4 class="events-three__content-right-content-title-two">Thursday
                                                        </h4>
                                                        <div class="events-three__content-right-content-time">
                                                            <div class="icon">
                                                                <span class="icon-time"></span>
                                                            </div>
                                                            <div class="text">
                                                                <p>01:15 PM – 3:00 PM</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="events-three__btn-box">
                                                    <a href="#" class="about-three__btn thm-btn-two"><span class="fas fa-arrow-circle-right"></span>Register Now</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="events-three__content-single">
                                            <div class="events-three__content-left">
                                                <div class="events-three__content-img">
                                                    <img src="assets/images/resources/prize-distribution.png"
                                                        alt="">
                                                    {{-- <div class="events-three__video-link">
                                                        <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ"
                                                            class="video-popup">
                                                            <div class="events-three__video-icon">
                                                                <span class="icon-play"></span>
                                                                <i class="ripple"></i>
                                                            </div>
                                                        </a>
                                                    </div> --}}
                                                </div>
                                                <div class="events-three__content-user">
                                                    <div class="events-three__content-user-info">
                                                        <h4 class="events-three__content-user-name">Organizing Committee</h4>
                                                        <p class="events-three__content-user-sub-title">CUI Sahiwal</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="events-three__content-right">
                                                <div class="events-three__content-right-content">
                                                    <div class="events-three__content-right-content-left">
                                                        <h4 class="events-three__content-right-content-title"><a
                                                                href="#">Closing Ceremony & <br> Prize Distribution</a></h4>
                                                        <ul class="list-unstyled events-three__content-right-content-list">
                                                            <li>
                                                                <div class="icon">
                                                                    <span class="icon-marker"></span>
                                                                </div>
                                                                <div class="text">
                                                                    <p>Main Auditorium - Block A</p>
                                                                </div>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                    <div class="events-three__content-right-content-right">
                                                        <h4 class="events-three__content-right-content-title-two">Thursday
                                                        </h4>
                                                        <div class="events-three__content-right-content-time">
                                                            <div class="icon">
                                                                <span class="icon-time"></span>
                                                            </div>
                                                            <div class="text">
                                                                <p>4:00 PM – 4:30 PM</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="events-three__btn-box">
                                                    <a href="contact.html" class="about-three__btn thm-btn-two"><span
                                                            class="fas fa-arrow-circle-right"></span>Register Now</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

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
                        {{-- <div class="gallery-one__btn-box">
                            <a href="{{ url('/gallery') }}" class="gallery-one__btn thm-btn"><span
                                    class="fas fa-arrow-circle-right"></span>See
                                More Gallery</a>
                        </div> --}}
                    </div>
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 wow fadeInLeft" data-wow-delay="100ms">
                            <div class="gallery-one__single">
                                <div class="gallery-one__img-box">
                                    <div class="gallery-one__img">
                                        <img src="assets/images/gallery/gallery-1-1.jpg" alt="">
                                    </div>
                                </div>
                                <div class="gallery-one__title-box">
                                    <p><span class="icon-marker"></span>CUI Sahiwal</p>
                                    <h3><a href="#">38<sup>th</sup> Convocation</a></h3>
                                </div>
                            </div>
                        </div>
                        <!--Gallery One Single End-->
                        <!--Gallery One Single Start-->
                        <div class="col-xl-6 col-lg-6 wow fadeInRight" data-wow-delay="200ms">
                            <div class="gallery-one__single gallery-one__single-2">
                                <div class="gallery-one__img-box">
                                    <div class="gallery-one__img">
                                        <img src="assets/images/gallery/gallery-1-2.jpg" alt="">
                                    </div>
                                </div>
                                <div class="gallery-one__title-box">
                                    <p><span class="icon-marker"></span>CUI Sahiwal</p>
                                    <h3><a href="#">Seerah Conference</a></h3>
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
                                    <p><span class="icon-marker"></span>CUI Sahiwal</p>
                                    <h3><a href="#">Sketching Competition</a></h3>
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
                                    <p><span class="icon-marker"></span>CUI Sahiwal</p>
                                    <h3><a href="#">Plantation Week</a></h3>
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

