@extends('Site.Layout.app')
@section('title')
    about us
@endsection

@section('content')
    <!-- page title -->
    <section class="page-title" style="background-image: url(assets/site/images/background/bg-5.jpg);">
        <div class="auto-container">
            <div class="content-box">
                <div class="content-wrapper">
                    <div class="title">
                        <h1>About Us</h1>
                    </div>
                    <ul class="bread-crumb">
                        <li><a href="index.html">Home</a></li>
                        <li>About Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Doctor Details -->

    <div class="doctor-block-four">
        <div class="inner-box">
            <div class="image"><img src="{{asset('assets/site')}}/images/resource/image-39.jpg" alt=""></div>
            <div class="content-row">
                <h3>Pratama Willis</h3>
                <div class="share-links">
                    <a href="#" class="share"><i class="fas fa-share"></i></a>
                    <a href="#" class="like"><i class="far fa-heart"></i></a>
                </div>
            </div>
            <div class="content-row">
                <div class="row">
                    <div class="col-md-7">
                        <div class="content">
                            <div class="designation">Obstetrics & Gynecology</div>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <span>(38)</span>
                            </div>
                            <div class="text">Emory University Hospital Dept Of Radiology, <br> Atlanta, GA, 30322</div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <ul class="list">
                            <li><i class="fas fa-map-marker-alt"></i> Dubrovnik</li>
                            <li><i class="fas fa-award"></i> 6 - 10 Yrs Experience</li>
                            <li><i class="fas fa-calendar-week"></i> Tue, Wed, Thu, Fri</li>
                            <li><i class="fas fa-heart"></i> 3 Votes</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="link-btn">
                <h4>Book an Appointment</h4>
                <a href="doctor-details.html" class="theme-btn"><i class="far fa-clipboard"></i> Book Appointment</a>
                <a href="#" class="theme-btn phone-number"><i class="fas fa-phone"></i>(306)145-3671</a>
            </div>
        </div>
    </div>



    <!-- Working Process -->
    <section class="working-process style-two">
        <div class="sec-bg" style="background-image: url(assets/images/shape/shape-22.png);">
        </div>
        <div class="auto-container">

            <div class="sec-title light text-center">
                <div class="sub-title">We made it simple</div>
                <h2>How It Works?</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 work-process-block">
                    <div class="inner-box">
                        <div class="count">01</div>
                        <div class="icon">
                            <div class="shape"><img src="{{asset('assets/site')}}/images/shape/shape-14.png" alt=""></div>
                            <i class="docpoint-icon-16"></i>
                        </div>
                        <h5>Search Best Online</h5>
                        <h4>Professional</h4>
                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</div>
                    </div>
                </div>
                <div class="col-lg-4 work-process-block">
                    <div class="inner-box">
                        <div class="count">02</div>
                        <div class="icon">
                            <div class="shape"><img src="{{asset('assets/site')}}/images/shape/shape-15.png" alt=""></div>
                            <i class="docpoint-icon-17"></i>
                        </div>
                        <h5>Get Instant</h5>
                        <h4>Appointment</h4>
                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</div>
                    </div>
                </div>
                <div class="col-lg-4 work-process-block">
                    <div class="inner-box">
                        <div class="count">03</div>
                        <div class="icon">
                            <div class="shape"><img src="{{asset('assets/site')}}/images/shape/shape-16.png" alt=""></div>
                            <i class="docpoint-icon-18"></i>
                        </div>
                        <h5>Leave Your</h5>
                        <h4>Feedback</h4>
                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Testimonials section two -->
    <section class="testimonials-section-two style-two pt-0">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="image">
                        <img src="{{asset('assets/site')}}/images/resource/image-23.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="content-block">
                        <div class="sec-title">
                            <div class="sub-title">Clients Testimonials</div>
                            <h2>What our clients say </h2>
                        </div>
                        <div class="testimonials-area">
                            <div class="quote-icon"><i class="docpoint-icon-14"></i></div>
                            <div class="theme_carousel owl-theme owl-carousel" data-options='{"loop": true, "center": false, "margin": 30, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 1000, "responsive":{ "0" :{ "items": "1" }, "480" :{ "items" : "1" }, "600" :{ "items" : "1" }, "768" :{ "items" : "2" } , "992":{ "items" : "1" }, "1200":{ "items" : "1" }}}'>
                                <div class="testimonial-block-two">
                                    <div class="inner-box">
                                        <div class="text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod</div>
                                        <div class="author-info">
                                            <div class="thumb"><img src="{{asset('assets/site')}}/images/resource/author-2.jpg" alt=""></div>
                                            <h4>Kelly Coleman</h4>
                                            <div class="designation">Nulla nec</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="testimonial-block-two">
                                    <div class="inner-box">
                                        <div class="text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod</div>
                                        <div class="author-info">
                                            <div class="thumb"><img src="{{asset('assets/site')}}/images/resource/author-2.jpg" alt=""></div>
                                            <h4>Kelly Coleman</h4>
                                            <div class="designation">Nulla nec</div>
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



@endsection












