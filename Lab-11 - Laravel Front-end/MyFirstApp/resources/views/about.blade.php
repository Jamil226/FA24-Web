@extends('layouts.main')
@section('title', 'About')
@section('main-container')
        <!--Page Breadcrumb Start-->
        <section class="page-header">
            <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg);">
            </div>
            <div class="page-header__shape-1">
                <img src="assets/images/shapes/page-header-shape-1.png" alt="">
            </div>
            <div class="page-header__shape-2">
                <img src="assets/images/shapes/page-header-shape-2.png" alt="">
            </div>
            <div class="page-header__shape-3">
                <img src="assets/images/shapes/page-header-shape-3.png" alt="">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <h2>About</h2>
                    <div class="thm-breadcrumb__box">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><span>-</span></li>
                            <li>About</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--Page Breadcrumb End-->
        <!--About Two Start-->
        <section class="about-two">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="about-two__left">
                            <div class="about-two__img"
                                style="background-image: url(assets/images/resources/about-two-img-2.png);"></div>
                        </div>
                    </div>
                    <div class="col-xl-6 wow fadeInRight" data-wow-delay="300ms">
                        <div class="about-two__right">
                            <div class="section-title text-left">
                                <div class="section-title__tagline-box">
                                    <p class="section-title__tagline section-title__tagline--two"><span>//</span> About
                                        Company</p>
                                </div>
                                <h2 class="section-title__title">International Business <span>Conferences</span></h2>
                            </div>
                            <p class="about-two__text">There are many variations of passages of Lorem Ipsum availa<br>
                                ble, but the majority have suffered alteration in some form, by injected<br> humour, or
                                randomised words.</p>
                            <div class="about-two__solution-box">
                                <div class="about-two__solution-single">
                                    <div class="icon">
                                        <span class="icon-check-1"></span>
                                    </div>
                                    <p class="about-two__solition-text">Solution for small &
                                        <br> large businesses</p>
                                </div>
                                <div class="about-two__solution-single">
                                    <div class="icon">
                                        <span class="icon-check-1"></span>
                                    </div>
                                    <p class="about-two__solition-text">Solution for small &
                                        <br> large businesses</p>
                                </div>
                            </div>
                            <ul class="about-two__points list-unstyled">
                                <li>
                                    <div class="icon">
                                        <span class="icon-check-1"></span>
                                    </div>
                                    <p>It has survived not only five centuries</p>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-check-1"></span>
                                    </div>
                                    <p>Lorem Ipsum has been the ndustry standard dummy text</p>
                                </li>
                            </ul>
                            <div class="about-two__btn-and-client-info">
                                <div class="about-two__btn-box">
                                    <a href="about.html" class="about-two__btn thm-btn-two"><span
                                            class="fas fa-arrow-circle-right"></span>Discover more</a>
                                </div>
                                <div class="about-two__client-info">
                                    <div class="about-two__client-img">
                                        <img src="assets/images/resources/about-two-client-img.jpg" alt="">
                                    </div>
                                    <div class="content">
                                        <h4>Mike Hardson</h4>
                                        <p>CEO of Agrion</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--About Two End-->

        <!--Countdown One Start-->
        <section class="countdown-one">
            <div class="countdown-one__bg"
                style="background-image: url(assets/images/backgrounds/countdown-one-bg.jpg);"></div>
            <div class="countdown-one__shape-2 float-bob-x">
                <img src="assets/images/shapes/countdown-one-shape-2.png" alt="">
            </div>
            <div class="countdown-one__shape-3 float-bob-y">
                <img src="assets/images/shapes/countdown-one-shape-3.png" alt="">
            </div>
            <div class="countdown-one__shape-4 float-bob-y-2">
                <img src="assets/images/shapes/countdown-one-shape-4.png" alt="">
            </div>
            <div class="countdown-one__shape-5 zoominout">
                <img src="assets/images/shapes/countdown-one-shape-5.png" alt="">
            </div>
            <div class="countdown-one__shape-6">
                <img src="assets/images/shapes/countdown-one-shape-6.png" alt="">
            </div>
            <div class="countdown-one__shape-7">
                <img src="assets/images/shapes/countdown-one-shape-7.png" alt="">
            </div>
            <div class="countdown-one__shape-8 float-bob-x">
                <img src="assets/images/shapes/countdown-one-shape-8.png" alt="">
            </div>
            <div class="container">
                <div class="countdown-one__top">
                    <div class="section-title text-left">
                        <div class="section-title__tagline-box">
                            <p class="section-title__tagline section-title__tagline--two"><span>//</span> Next Event</p>
                        </div>
                        <h2 class="section-title__title">Our Next Event
                            <br> Starts In</h2>
                    </div>
                    <div class="countdown-one__btn-box">
                        <a href="contact.html" class="countdown-one__btn thm-btn-two"><span
                                class="fas fa-arrow-circle-right"></span>Book Your Seat</a>
                    </div>
                </div>
                <div class="countdown-one__inner">
                    <div class="countdown-one__shape-1">
                        <img src="assets/images/shapes/countdown-one-shape-1.png" alt="">
                    </div>
                    <div class="countdown time-countdown-one" data-countdown-time="2025/07/23">
                    </div>
                </div>
            </div>
        </section>
        <!--Countdown One End-->

        <!--Team Two Start-->
        <section class="team-two">
            <div class="team-two__bg" style="background-image: url(assets/images/backgrounds/team-two-bg.jpg);"></div>
            <div class="container">
                <div class="team-two__top">
                    <div class="section-title text-left">
                        <div class="section-title__tagline-box">
                            <p class="section-title__tagline section-title__tagline--two"><span>//</span> About The
                                Event</p>
                        </div>
                        <h2 class="section-title__title">Our Creative Event <br><span>Speakers</span></h2>
                    </div>
                    <p class="team-two__text">Whether designing a cozy apartment for a young couple or<br>
                        luxurious penthouse for a discerning client, the goal remains the
                        <br>same: to craft environments that inspire</p>
                </div>
                <div class="row">
                    <!--Team Two Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="100ms">
                        <div class="team-two__single">
                            <div class="team-two__img">
                                <img src="assets/images/team/team-2-1.png" alt="">
                            </div>
                            <div class="team-two__social">
                                <a href="#"><span class="fab fa-twitter"></span></a>
                                <a href="#" class="team-two__social-two"><span class="fab fa-facebook-f"></span></a>
                                <a href="#" class="team-two__social-three"><span class="fab fa-instagram"></span></a>
                                <a href="#"><span class="fab fa-vimeo-v"></span></a>
                            </div>
                            <div class="team-two__content">
                                <p class="team-two__sub-title">Ceo Founder</p>
                                <h3 class="team-two__title"><a href="speaker-single.html">James Smith</a></h3>
                                <p class="team-two__single-text">This includes websites
                                    <br> digital platforms.</p>
                            </div>
                        </div>
                    </div>
                    <!--Team Two Single End-->
                    <!--Team Two Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="300ms">
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
                                <p class="team-two__sub-title">Ceo Founder</p>
                                <h3 class="team-two__title"><a href="speaker-single.html">Robert Smith</a></h3>
                                <p class="team-two__single-text">This includes websites
                                    <br> digital platforms.</p>
                            </div>
                        </div>
                    </div>
                    <!--Team Two Single End-->
                    <!--Team Two Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="600ms">
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
                                <p class="team-two__sub-title">Ceo Founder</p>
                                <h3 class="team-two__title"><a href="speaker-single.html">Michael Smith</a></h3>
                                <p class="team-two__single-text">This includes websites
                                    <br> digital platforms.</p>
                            </div>
                        </div>
                    </div>
                    <!--Team Two Single End-->
                    <!--Team Two Single Start-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="900ms">
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
                                <p class="team-two__sub-title">Ceo Founder</p>
                                <h3 class="team-two__title"><a href="speaker-single.html">William Smith</a></h3>
                                <p class="team-two__single-text">This includes websites
                                    <br> digital platforms.</p>
                            </div>
                        </div>
                    </div>
                    <!--Team Two Single End-->
                </div>
            </div>
        </section>
        <!--Team Two End-->

        <!--Testimonial One Start-->
        <section class="testimonial-one">
            <div class="testimonial-one__shape-1 img-bounce">
                <img src="assets/images/shapes/testimonial-one-shape-1.png" alt="">
            </div>
            <div class="testimonial-one__shape-2 float-bob-x">
                <img src="assets/images/shapes/testimonial-one-shape-2.png" alt="">
            </div>
            <div class="container">
                <div class="testimonial-one__top">
                    <div class="section-title text-left">
                        <div class="section-title__tagline-box">
                            <p class="section-title__tagline section-title__tagline--two"><span>//</span> Testimonials
                            </p>
                        </div>
                        <h2 class="section-title__title">What Our Client's <br><span>Feedback</span></h2>
                    </div>
                    <div class="testimonial-one__dot-style">
                        <div class="swiper-dot-style1"></div>
                    </div>
                </div>
                <div class="testimonial-one__bottom">
                    <div class="thm-swiper__slider swiper-container" data-swiper-options='{
                        "slidesPerView": 1,
                        "spaceBetween": 0,
                        "speed": 2000,
                        "loop": true,
                        "pagination": {
                            "el": ".swiper-dot-style1",
                            "type": "bullets",
                            "clickable": true
                        },



                        "navigation": {
                            "nextEl": ".swiper-button-prev1",
                            "prevEl": ".swiper-button-next1"
                        },
                        "autoplay": { "delay": 9000 },
                        "breakpoints": {
                                "0": {
                                    "spaceBetween": 0,
                                    "slidesPerView": 1
                                },
                                "375": {
                                    "spaceBetween": 0,
                                    "slidesPerView": 1
                                },
                                "575": {
                                    "spaceBetween": 0,
                                    "slidesPerView": 1
                                },
                                "768": {
                                    "spaceBetween": 24,
                                    "slidesPerView": 1
                                },
                                "992": {
                                    "spaceBetween": 24,
                                    "slidesPerView": 2
                                },
                                "1344": {
                                    "spaceBetween": 24,
                                    "slidesPerView":3
                                }
                            }
                    }'>
                        <div class="swiper-wrapper">
                            <!--Testimonial One Single Start-->
                            <div class="swiper-slide">
                                <div class="testimonial-one__single">
                                    <div class="testimonial-one__quote">
                                        <span class="icon-quotation"></span>
                                    </div>
                                    <div class="testimonial-one__ratting">
                                        <span class="icon-star"></span>
                                        <span class="icon-star"></span>
                                        <span class="icon-star"></span>
                                        <span class="icon-star"></span>
                                        <span class="icon-star"></span>
                                    </div>
                                    <p class="testimonial-one__text">There are many variations of passages of
                                        available but the majority have to sufferedes
                                        alteratiosn in some form, by injected hums
                                        randomised words which don't slightly. City
                                        governments have various depar ments
                                        that can handles to forward...</p>
                                    <div class="testimonial-one__client-info">
                                        <div class="testimonial-one__client-img">
                                            <img src="assets/images/testimonial/testimonial-1-1.jpg" alt="">
                                        </div>
                                        <div class="testimonial-one__client-content">
                                            <h3><a href="testimonials.html">Thomas Smith</a></h3>
                                            <p>Visitor Canada</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Testimonial One Single End-->
                            <!--Testimonial One Single Start-->
                            <div class="swiper-slide">
                                <div class="testimonial-one__single">
                                    <div class="testimonial-one__quote">
                                        <span class="icon-quotation"></span>
                                    </div>
                                    <div class="testimonial-one__ratting">
                                        <span class="icon-star"></span>
                                        <span class="icon-star"></span>
                                        <span class="icon-star"></span>
                                        <span class="icon-star"></span>
                                        <span class="icon-star"></span>
                                    </div>
                                    <p class="testimonial-one__text">There are many variations of passages of
                                        available but the majority have to sufferedes
                                        alteratiosn in some form, by injected hums
                                        randomised words which don't slightly. City
                                        governments have various depar ments
                                        that can handles to forward...</p>
                                    <div class="testimonial-one__client-info">
                                        <div class="testimonial-one__client-img">
                                            <img src="assets/images/testimonial/testimonial-1-2.jpg" alt="">
                                        </div>
                                        <div class="testimonial-one__client-content">
                                            <h3><a href="testimonials.html">Daniel Son </a></h3>
                                            <p>Visitor Canada</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Testimonial One Single End-->
                            <!--Testimonial One Single Start-->
                            <div class="swiper-slide">
                                <div class="testimonial-one__single">
                                    <div class="testimonial-one__quote">
                                        <span class="icon-quotation"></span>
                                    </div>
                                    <div class="testimonial-one__ratting">
                                        <span class="icon-star"></span>
                                        <span class="icon-star"></span>
                                        <span class="icon-star"></span>
                                        <span class="icon-star"></span>
                                        <span class="icon-star"></span>
                                    </div>
                                    <p class="testimonial-one__text">There are many variations of passages of
                                        available but the majority have to sufferedes
                                        alteratiosn in some form, by injected hums
                                        randomised words which don't slightly. City
                                        governments have various depar ments
                                        that can handles to forward...</p>
                                    <div class="testimonial-one__client-info">
                                        <div class="testimonial-one__client-img">
                                            <img src="assets/images/testimonial/testimonial-1-3.jpg" alt="">
                                        </div>
                                        <div class="testimonial-one__client-content">
                                            <h3><a href="testimonials.html">Donald Smith</a></h3>
                                            <p>Visitor Canada</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Testimonial One Single End-->
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection
