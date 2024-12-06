@extends('layouts.main')
@section('title', 'Contact')
@section('main-container')
            <!--Page Breadcrumb Start-->
            <section class="page-header">
                <div class="page-header__bg"
                    style="background-image: url(assets/images/backgrounds/page-header-bg.jpg);">
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
                        <h2>Contact</h2>
                        <div class="thm-breadcrumb__box">
                            <ul class="thm-breadcrumb list-unstyled">
                                <li><a href="index-2.html">Home</a></li>
                                <li><span>-</span></li>
                                <li>Contact</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!--Page Breadcrumb End-->
            <!--Quick Contact Start-->
            <section class="quick-contact">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4">
                            <div class="quick-contact__single">
                                <h4 class="quick-contact__title">Personal Visit</h4>
                                <p class="quick-contact__text">You are most welcome to visit the campus.</p>
                                <div class="quick-contact__contact-list">
                                    <p>COMSATS University Rd, off GT Road,
                                        <br> Sahiwal, 57000
                                    </p>
                                </div>
                                <div class="quick-contact__icon">
                                    <span class="icon-pin"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4">
                            <div class="quick-contact__single">
                                <h4 class="quick-contact__title">Make a Call</h4>
                                <p class="quick-contact__text">Keeping you always better connected.</p>
                                <div class="quick-contact__contact-list">
                                    <p><a href="tel:15557890123">Registration Info: +92-321-5215591</a></p>
                                    <p><a href="tel:2334567890178802">Event Info: +92-324-8895023</a></p>
                                </div>
                                <div class="quick-contact__icon">
                                    <span class="icon-phone-call"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4">
                            <div class="quick-contact__single">
                                <h4 class="quick-contact__title">Send Email</h4>
                                <p class="quick-contact__text">Drop us a mail we will answer you asap.</p>
                                <div class="quick-contact__contact-list">
                                    <p><a href="mailto:salmannavaz@cuisahiwal.edu.pk">Sales: salmannavaz@cuisahiwal.edu.pk</a></p>
                                    <p><a href="mailto:yawar.abid@ciitsahiwal.edu.pk">Service: yawar.abid@ciitsahiwal.edu.pk</a></p>
                                </div>
                                <div class="quick-contact__icon">
                                    <span class="icon-email"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--Quick Contact End-->

            <!--Contact Start-->
            <section class="contact-two">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5">
                            <div class="contact-two__left">
                                <iframe class="contact-two__google-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d429.0910057782676!2d73.14878513229094!3d30.641621074628432!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3922b6e4dde0c501%3A0xc37ea3d85326203!2sCOMSATS%20University%20Islamabad%20-%20Sahiwal%20Campus!5e0!3m2!1sen!2s!4v1731386581209!5m2!1sen!2s"
                                allowfullscreen="" loading="lazy" style="padding:70px"></iframe>
                            </div>
                        </div>
                        <div class="col-xl-7">
                            <div class="contact-two__right">
                                <div class="section-title text-left">
                                    <div class="section-title__tagline-box">
                                        <p class="section-title__tagline section-title__tagline--two">
                                            Get in Touch</p>
                                    </div>
                                    <h2 class="section-title__title">We’d love to hear <span>from you!</span></h2>
                                </div>
                                <div class="contact-two__form-box">
                                    <div class="contact-two__form-img">
                                        <img src="assets/images/resources/contact-two-form-img.jpg" alt="">
                                    </div>
                                    @if ($message = Session::get('success'))
                                        <div class="alert alert-success alert-block p-4 border-left-success">
                                            <strong>
                                                {{ $message }}
                                            </strong>
                                        </div>
                                    @endif
                                    <form class="contact-two__form" method="post">
                                        @csrf
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-6">
                                                <div class="contact-two__input-box">
                                                    <input type="text" name="first_name" placeholder="First Name">
                                                </div>
                                                @if ($errors->has('first_name'))
                                                    <span class="text-danger">
                                                        {{ $errors->first('first_name') }}
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="col-xl-6 col-lg-6">
                                                <div class="contact-two__input-box">
                                                    <input type="text" name="last_name" placeholder="Last Name">
                                                </div>
                                                @if ($errors->has('last_name'))
                                                    <span class="text-danger">
                                                        {{ $errors->first('last_name') }}
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="col-xl-6 col-lg-6">
                                                <div class="contact-two__input-box">
                                                    <input type="email" name="email" placeholder="Email Address">
                                                </div>
                                                @if ($errors->has('email'))
                                                    <span class="text-danger">
                                                        {{ $errors->first('email') }}
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="col-xl-6 col-lg-6">
                                                <div class="contact-two__input-box">
                                                    <input type="text" name="contact_number" placeholder="Contact Number">
                                                </div>
                                                @if ($errors->has('contact_number'))
                                                    <span class="text-danger">
                                                        {{ $errors->first('contact_number') }}
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="col-xl-12">
                                                <div class="contact-page__input-box text-message-box">
                                                    <textarea name="message" placeholder="Write Message"></textarea>
                                                    @if ($errors->has('message'))
                                                        <span class="text-danger">
                                                            {{ $errors->first('message') }}
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="contact-two__btn-box">
                                                    <button type="submit" class="thm-btn contact-two__btn">Submit
                                                        Message</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="result"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
@endsection
