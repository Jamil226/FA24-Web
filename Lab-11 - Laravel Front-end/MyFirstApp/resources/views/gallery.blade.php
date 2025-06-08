@extends('layouts.main')
@section('title', 'Gallery')
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
                    <h2>Gallery</h2>
                    <div class="thm-breadcrumb__box">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><span>-</span></li>
                            <li>Gallery</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--Page Breadcrumb End-->
        <!--Gallery Page Start-->
        <section class="gallery-page">
            <div class="gallery-two__bottom">
                <div class="container">
                    <div class="row masonary-layout">
                        <!--Project Three Single Start-->
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                            <div class="gallery-two__single">
                                <div class="gallery-two__img">
                                    <img src="assets/images/gallery/gallery-2-1.jpg" alt="">
                                    <div class="gallery-two__content">
                                        <div class="gallery-two__content-shape-1"
                                            style="background-image: url(assets/images/shapes/gallery-two-content-shape-1.png);">
                                        </div>
                                        <div class="gallery-two__zoom-and-link">
                                            <a href="assets/images/gallery/gallery-2-1.jpg" class="img-popup"><span
                                                    class="icon-zoom"></span></a>
                                            <a href="project-details.html"><span class="icon-plus"></span></a>
                                        </div>
                                        <div class="gallery-two__content-text">
                                            <p>Event</p>
                                            <h5>Conference 2023</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Project Three Single End-->
                        <!--Project Three Single Start-->
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                            <div class="gallery-two__single">
                                <div class="gallery-two__img">
                                    <img src="assets/images/gallery/gallery-2-2.jpg" alt="">
                                    <div class="gallery-two__content">
                                        <div class="gallery-two__content-shape-1"
                                            style="background-image: url(assets/images/shapes/gallery-two-content-shape-1.png);">
                                        </div>
                                        <div class="gallery-two__zoom-and-link">
                                            <a href="assets/images/gallery/gallery-2-2.jpg" class="img-popup"><span
                                                    class="icon-zoom"></span></a>
                                            <a href="project-details.html"><span class="icon-plus"></span></a>
                                        </div>
                                        <div class="gallery-two__content-text">
                                            <p>Event</p>
                                            <h5>Conference 2023</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Project Three Single End-->
                        <!--Project Three Single Start-->
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                            <div class="gallery-two__single">
                                <div class="gallery-two__img">
                                    <img src="assets/images/gallery/gallery-2-3.jpg" alt="">
                                    <div class="gallery-two__content">
                                        <div class="gallery-two__content-shape-1"
                                            style="background-image: url(assets/images/shapes/gallery-two-content-shape-1.png);">
                                        </div>
                                        <div class="gallery-two__zoom-and-link">
                                            <a href="assets/images/gallery/gallery-2-3.jpg" class="img-popup"><span
                                                    class="icon-zoom"></span></a>
                                            <a href="project-details.html"><span class="icon-plus"></span></a>
                                        </div>
                                        <div class="gallery-two__content-text">
                                            <p>Event</p>
                                            <h5>Conference 2023</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Project Three Single End-->
                        <!--Project Three Single Start-->
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                            <div class="gallery-two__single">
                                <div class="gallery-two__img">
                                    <img src="assets/images/gallery/gallery-2-4.jpg" alt="">
                                    <div class="gallery-two__content">
                                        <div class="gallery-two__content-shape-1"
                                            style="background-image: url(assets/images/shapes/gallery-two-content-shape-1.png);">
                                        </div>
                                        <div class="gallery-two__zoom-and-link">
                                            <a href="assets/images/gallery/gallery-2-4.jpg" class="img-popup"><span
                                                    class="icon-zoom"></span></a>
                                            <a href="project-details.html"><span class="icon-plus"></span></a>
                                        </div>
                                        <div class="gallery-two__content-text">
                                            <p>Event</p>
                                            <h5>Conference 2023</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Project Three Single End-->
                        <!--Project Three Single Start-->
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="500ms">
                            <div class="gallery-two__single">
                                <div class="gallery-two__img">
                                    <img src="assets/images/gallery/gallery-2-5.jpg" alt="">
                                    <div class="gallery-two__content">
                                        <div class="gallery-two__content-shape-1"
                                            style="background-image: url(assets/images/shapes/gallery-two-content-shape-1.png);">
                                        </div>
                                        <div class="gallery-two__zoom-and-link">
                                            <a href="assets/images/gallery/gallery-2-5.jpg" class="img-popup"><span
                                                    class="icon-zoom"></span></a>
                                            <a href="project-details.html"><span class="icon-plus"></span></a>
                                        </div>
                                        <div class="gallery-two__content-text">
                                            <p>Event</p>
                                            <h5>Conference 2023</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Project Three Single End-->
                        <!--Project Three Single Start-->
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="600ms">
                            <div class="gallery-two__single">
                                <div class="gallery-two__img">
                                    <img src="assets/images/gallery/gallery-2-6.jpg" alt="">
                                    <div class="gallery-two__content">
                                        <div class="gallery-two__content-shape-1"
                                            style="background-image: url(assets/images/shapes/gallery-two-content-shape-1.png);">
                                        </div>
                                        <div class="gallery-two__zoom-and-link">
                                            <a href="assets/images/gallery/gallery-2-6.jpg" class="img-popup"><span
                                                    class="icon-zoom"></span></a>
                                            <a href="project-details.html"><span class="icon-plus"></span></a>
                                        </div>
                                        <div class="gallery-two__content-text">
                                            <p>Event</p>
                                            <h5>Conference 2023</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Project Three Single End-->
                        <!--Project Three Single Start-->
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="700ms">
                            <div class="gallery-two__single">
                                <div class="gallery-two__img">
                                    <img src="assets/images/gallery/gallery-2-7.jpg" alt="">
                                    <div class="gallery-two__content">
                                        <div class="gallery-two__content-shape-1"
                                            style="background-image: url(assets/images/shapes/gallery-two-content-shape-1.png);">
                                        </div>
                                        <div class="gallery-two__zoom-and-link">
                                            <a href="assets/images/gallery/gallery-2-7.jpg" class="img-popup"><span
                                                    class="icon-zoom"></span></a>
                                            <a href="project-details.html"><span class="icon-plus"></span></a>
                                        </div>
                                        <div class="gallery-two__content-text">
                                            <p>Event</p>
                                            <h5>Conference 2023</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Project Three Single End-->
                        <!--Project Three Single Start-->
                        <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="800ms">
                            <div class="gallery-two__single">
                                <div class="gallery-two__img">
                                    <img src="assets/images/gallery/gallery-2-8.jpg" alt="">
                                    <div class="gallery-two__content">
                                        <div class="gallery-two__content-shape-1"
                                            style="background-image: url(assets/images/shapes/gallery-two-content-shape-1.png);">
                                        </div>
                                        <div class="gallery-two__zoom-and-link">
                                            <a href="assets/images/gallery/gallery-2-8.jpg" class="img-popup"><span
                                                    class="icon-zoom"></span></a>
                                            <a href="project-details.html"><span class="icon-plus"></span></a>
                                        </div>
                                        <div class="gallery-two__content-text">
                                            <p>Event</p>
                                            <h5>Conference 2023</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Project Three Single End-->
                        <!--Project Three Single Start-->
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="900ms">
                            <div class="gallery-two__single">
                                <div class="gallery-two__img">
                                    <img src="assets/images/gallery/gallery-2-9.jpg" alt="">
                                    <div class="gallery-two__content">
                                        <div class="gallery-two__content-shape-1"
                                            style="background-image: url(assets/images/shapes/gallery-two-content-shape-1.png);">
                                        </div>
                                        <div class="gallery-two__zoom-and-link">
                                            <a href="assets/images/gallery/gallery-2-9.jpg" class="img-popup"><span
                                                    class="icon-zoom"></span></a>
                                            <a href="project-details.html"><span class="icon-plus"></span></a>
                                        </div>
                                        <div class="gallery-two__content-text">
                                            <p>Event</p>
                                            <h5>Conference 2023</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Project Three Single End-->
                    </div>
                </div>
            </div>
        </section>
        <!--Gallery Page End-->
@endsection
