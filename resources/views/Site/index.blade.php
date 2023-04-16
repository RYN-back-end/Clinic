<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Dr Pratama | Official Page</title>
    <!-- Stylesheets -->
    <link href="{{asset('assets/site')}}/css/bootstrap.css" rel="stylesheet">
    <link href="{{asset('assets/site')}}/css/style.css" rel="stylesheet">
    <!-- Responsive File -->
    <link href="{{asset('assets/site')}}/css/responsive.css" rel="stylesheet">
    <!-- Color File -->
    <link href="{{asset('assets/site')}}/css/color.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap"
          rel="stylesheet">

    <link rel="shortcut icon" href="{{asset('assets/site')}}/images/favicon.png" type="image/x-icon">
    <link rel="icon" href="{{asset('assets/site')}}/images/favicon.png" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]>
    <script src="js/respond.js"></script><![endif]-->
</head>

<body>

<div class="preloader"></div>

<div class="page-wrapper">

    <!-- Main Header -->
    <header class="main-header header-style-three">
        <!-- Header Upper -->
        <div class="header-upper">
            <div class="auto-container">
                <div class="inner-container">
                    <!--Logo-->
                    <div class="logo-box">
                        <div class="logo"><a href="{{route('/')}}"><img src="{{asset('assets/site')}}/images/logo-light-two.png" alt=""></a>
                        </div>
                    </div>
                    <div class="right-column">
                        <!--Nav Box-->
                        <div class="nav-outer">
                            <!--Mobile Navigation Toggler-->
                            <div class="mobile-nav-toggler"><img src="{{asset('assets/site')}}/images/icons/icon-bar-2.png" alt=""></div>

                            <!-- Main Menu -->
                            <nav class="main-menu navbar-expand-md navbar-light">
                                <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                    <ul class="navigation">
                                        <li><a href="{{route('/')}}">Home</a></li>
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <div class="navbar-right-info">
                            <div class="link-btn"><a href="appointment.html" class="theme-btn">Make Appointment</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Header Upper-->

        <!-- Sticky Header  -->
        <div class="sticky-header">
            <div class="header-upper">
                <div class="auto-container">
                    <div class="inner-container">
                        <!--Logo-->
                        <div class="logo-box">
                            <div class="logo"><a href="{{route('/')}}"><img src="{{asset('assets/site')}}/images/logo-light-two.png"
                                                                        alt=""></a></div>
                        </div>
                        <div class="right-column">
                            <!--Nav Box-->
                            <div class="nav-outer">
                                <!--Mobile Navigation Toggler-->
                                <div class="mobile-nav-toggler"><img src="{{asset('assets/site')}}/images/icons/icon-bar-2.png" alt="">
                                </div>

                                <!-- Main Menu -->
                                <nav class="main-menu navbar-expand-md navbar-light">

                                </nav>
                            </div>
                            <div class="navbar-right-info">
                                <div class="link-btn"><a href="appointment.html" class="theme-btn">Make Appointment</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End Sticky Menu -->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="fal fa-times"></span></div>

            <nav class="menu-box">
                <div class="nav-logo"><a href="{{route('/')}}"><img src="{{asset('assets/site')}}/images/logo-light.png" alt="" title=""></a>
                </div>
                <div class="menu-outer">
                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
                <!--Social Links-->
                <div class="social-links">
                    <ul class="clearfix">
                        <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                        <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                        <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                        <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                    </ul>
                </div>
            </nav>
        </div><!-- End Mobile Menu -->

        <div class="nav-overlay">
            <div class="cursor"></div>
            <div class="cursor-follower"></div>
        </div>
    </header>
    <!-- End Main Header -->


    <!-- Banner Section three -->
    <section class="banner-section-three">
        <div class="bg-image" style="background-image: url(assets/site/images/background/bg-2.png);"></div>
        <div class="side-image">
            <div class="bg-image"><img src="{{asset('assets/site')}}/images/shape/shape-19.png" alt=""></div>
            <img src="{{asset('assets/site')}}/images/resource/image-5.png" alt="">
        </div>
        <div class="shape"><img src="{{asset('assets/site')}}/images/shape/shape-18.png" alt=""></div>
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="text-block">
                        <h5>We are here for you</h5>
{{--                        <h2>Welcome to <br> Dr Pratama's clinic</h2>--}}
                        <h2>
                            What Makes Us Better<br> Makes You Better.
                        </h2>
                        <div class="link-btn"><a href="doctors-1.html" class="theme-btn">Make Appointment</a></div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="image"><img src="{{asset('assets/site')}}/images/resource/image-6.png" alt=""></div>
                </div>
            </div>
            <form>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <div class="left-side">
                                <input type="text" disabled placeholder="How do you reach us ?">
                                <i class="docpoint-icon-2"></i>
                            </div>
                            <div class="right-side">
                                <a href="https://www.google.com/maps/place/25%C2%B018'56.0%22N+55%C2%B022'39.9%22E/@25.3155661,55.3799453,17z/data=!3m1!4b1!4m4!3m3!8m2!3d25.3155661!4d55.3777566" class="theme-btn style-one"><i class="docpoint-icon-3"></i> Find
                                    Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

    @if($services->count())
    <!-- Features section two -->
    <section class="features-section-two">
        <div class="auto-container">
            <div class="section-title-area">
                <div class="sec-title">
                    <div class="sub-title">What we do</div>
                    <h2>Services for You</h2>
                </div>
            </div>
            <div class="row">
                @foreach($services as $row)
                <div class="col-lg-4 feature-block-two">
                    <div class="inner-box wow animated fadeInUp" data-wow-delay="0.1s" data-wow-duration="1500ms">
                        <div class="image"><img src="{{getFile($row->image)}}" alt=""></div>
                        <h4><a href="javascript:void(0);">{{$row->title}}</a></h4>
                        <div class="text">{{$row->desc}}</div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    <!-- about section style two -->
    <section class="about__section style-two">
        <div class="auto-container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="image__block">
                        <div class="shape-three">
                            <img src="{{asset('assets/site')}}/images/shape/shape-6.png" alt="">
                        </div>
                        <div class="image-1" data-parallax='{"x": -30}'>
                            <img src="{{asset('assets/site')}}/images/resource/image-14.jpg" alt="">
                            <div class="icon"><i class="docpoint-icon-15"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="content__block">
                        <div class="sec-title mb-40">
                            <div class="sub-title">About Us <span class="text-decor"></span></div>
                            <h2> Qualification, Experience </h2>
                            <div class="text">
                                We use a multi-modality approach to first identify the hurdles facing a patient’s health,
                                and then identify methods to effectively build a better picture of health.
                            </div>
                        </div>
                        <div class="tabs-box">
                            <ul class="tab-btns">
                                <li class="tab-btn active-btn" data-tab="#cat-1">Vision</li>
                                <li class="tab-btn" data-tab="#cat-2">CV</li>
                            </ul>
                            <div class="tabs-content">
                                <div class="tab active-tab" id="cat-1">
                                    <div class="text">Our programs are co-developed by doctors and fitness specialists ,
                                        aiming to empower our patients with the collective knowledge of our multidisciplinary team.
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <ul class="list">
                                                <li>Sonsectetur adipisicing elit</li>
                                                <li>Exercitation ullamco laboris</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <ul class="list">
                                                <li>Eiusmod tempor incididunt</li>
                                                <li>Aolore magna aliqua</li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="tab" id="cat-2">
                                    <div class="text">Aliquam faucibus, odio nec commodo aliquam, neque felis placerat
                                        dui, a porta ante lectus dapibus est. Aliquam a bibendum mi, sed condimentum
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <ul class="list">
                                                <li>Sonsectetur adipisicing elit</li>
                                                <li>Exercitation ullamco laboris</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <ul class="list">
                                                <li>Eiusmod tempor incididunt</li>
                                                <li>Aolore magna aliqua</li>
                                            </ul>
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

    <!-- Features section style two -->
    <section class="features-section style-two">
        <div class="auto-container">
            <div class="wrapper-box">
                <div class="outer-box">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 feature-block">
                            <div class="inner-box wow animated fadeInUp" data-wow-delay="0.1s"
                                 data-wow-duration="1500ms">
                                <div class="icon"><img src="{{asset('assets/site')}}/images/icons/icon-1.png" alt=""></div>
                                <h4><a href="">Psychiatry</a></h4>
                                <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing</div>
                                <div class="link-btn">
                                    <a href="hospital-details.html" class="link"><i class="docpoint-icon-4"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 feature-block">
                            <div class="inner-box wow animated fadeInUp" data-wow-delay="0.2s"
                                 data-wow-duration="1500ms">
                                <div class="icon"><img src="{{asset('assets/site')}}/images/icons/icon-2.png" alt=""></div>
                                <h4><a href="">Gynecology</a></h4>
                                <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing</div>
                                <div class="link-btn">
                                    <a href="hospital-details.html" class="link"><i class="docpoint-icon-4"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 feature-block">
                            <div class="inner-box wow animated fadeInUp" data-wow-delay="0.3s"
                                 data-wow-duration="1500ms">
                                <div class="icon"><img src="{{asset('assets/site')}}/images/icons/icon-3.png" alt=""></div>
                                <h4><a href="">Pulmonology</a></h4>
                                <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing</div>
                                <div class="link-btn">
                                    <a href="hospital-details.html" class="link"><i class="docpoint-icon-4"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 feature-block">
                            <div class="inner-box wow animated fadeInUp" data-wow-delay="0.4s"
                                 data-wow-duration="1500ms">
                                <div class="icon"><img src="{{asset('assets/site')}}/images/icons/icon-4.png" alt=""></div>
                                <h4><a href="">Orthopedics</a></h4>
                                <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing</div>
                                <div class="link-btn">
                                    <a href="hospital-details.html" class="link"><i class="docpoint-icon-4"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Contact form section -->
    <section class="contact-form-section">
        <div class="bg-image" style="background-image: url(assets/site/images/background/bg-2.jpg);"></div>
        <div class="shape" style="background-image: url(assets/site/images/shape/shape-12.png);"></div>
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-6 offset-lg-6">
                    <div class="contact-form">
                        <div class="sec-title mb-30">
                            <h2>Contact with us 👋</h2>
                            <div class="text">We will be happy to answer your questions.</div>
                        </div>
                        <form>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <input type="text" placeholder="Enter Full Name">
                                    <i class="docpoint-icon-11"></i>
                                </div>
                                <div class="form-group col-md-12">
                                    <input type="email" placeholder="Enter email address">
                                    <i class="docpoint-icon-12"></i>
                                </div>
                                <div class="form-group col-md-12">
                                    <input type="number" placeholder="Enter phone number">
                                    <i class="docpoint-icon-1"></i>
                                </div>
                                <div class="form-group col-md-12">
                                    <textarea placeholder="Your Message"></textarea>
                                    <i class="docpoint-icon-13"></i>
                                </div>
                                <div class="form-group col-md-12">
                                    <button class="theme-btn style-one"><span>Send</span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Funfacts section -->
    <section class="funfacts-section style-two">
        <div class="shape-one"><img src="{{asset('assets/site')}}/images/shape/shape-20.png" alt=""></div>
        <div class="shape-two"><img src="{{asset('assets/site')}}/images/shape/shape-21.png" alt=""></div>
        <div class="auto-container">
            <div class="sec-title light">
                <div class="sub-title">Join Us</div>
                <h2>Our Achievements</h2>
            </div>
            <div class="row">
                <div class="facts-block col-lg-3 col-md-6">
                    <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="content">
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="3000" data-stop="430">0</span><span>+</span>
                            </div>
                            <div class="text">Finished Projects</div>
                        </div>
                    </div>
                </div>
                <div class="facts-block col-lg-3 col-md-6">
                    <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="content">
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="3000" data-stop="340">0</span><span>+</span>
                            </div>
                            <div class="text">Customers</div>
                        </div>
                    </div>
                </div>
                <div class="facts-block col-lg-3 col-md-6">
                    <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="content">
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="3000" data-stop="120">0</span><span>+</span>
                            </div>
                            <div class="text">Experienced Masters</div>
                        </div>
                    </div>
                </div>
                <div class="facts-block col-lg-3 col-md-6">
                    <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="content">
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="3000" data-stop="547">0</span><span>+</span>
                            </div>
                            <div class="text">Patients</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!--Main Footer-->
    <footer class="main-footer style-two">
        <div class="shape-one"><img src="{{asset('assets/site')}}/images/shape/shape-8.png" alt=""></div>
        <div class="shape-two"><img src="{{asset('assets/site')}}/images/shape/shape-9.png" alt=""></div>
        <div class="upper-box">
            <div class="auto-container">

                <!--Widgets Section-->
                <div class="widgets-section">
                    <div class="row clearfix">

                        <!--Column-->
                        <div class="column col-lg-4 col-md-6">
                            <div class="widget about-widget-two">
                                <div class="logo"><a href="{{route('/')}}"><img src="{{asset('assets/site')}}/images/logo-light-two.png"
                                                                            alt=""></a></div>
                                <div class="text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                                    nonumy eirmod tempor invidunt ut labore
                                </div>
                                <ul class="social-links">
                                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div>

                        <!--Column-->
                        <div class="column col-lg-4 col-md-6">
                            <div class="widget contact-widget">
                                <h3 class="widget-title">Contacts</h3>
                                <div class="widget-content">
                                    <ul class="contact-info">
                                        <li>
                                            <div class="icon"><span class="docpoint-icon-19"></span></div>
                                            <div class="text">2416 Mapleview Drive
                                                Tampa, FL 33634
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon"><span class="docpoint-icon-20"></span></div>
                                            <div class="text">
                                                <a href="mailto:contact@website.com">contact@website.com</a> <br>
                                                <a href="mailto:Info@mail.com">Info@mail.com</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon"><span class="docpoint-icon-21"></span></div>
                                            <div class="text">
                                                <a href="tel:0029129102320">0029129102320</a> <br>
                                                <a href="tel:000 2324 39493">000 2324 39493</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!--Column-->
                        <div class="column col-lg-4 col-md-6">
                            <div class="widget links-widget">
                                <h3 class="widget-title">Useful Links</h3>
                                <div class="widget-content">
                                    <ul>
                                        <li><a href="#">Conditions</a></li>
                                        <li><a href="#">Terms of Use</a></li>
                                        <li><a href="#">Our Services</a></li>
                                        <li><a href="#">Join as a Doctor</a></li>
                                        <li><a href="#">New Guests List</a></li>
                                        <li><a href="#">The Team List</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="auto-container">
                        <div class="wrapper-box">
                            <div class="copyright-text">© 2023 Company RYN.Tech ❤️ All Rights Reserved</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--End Main Footer-->

</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fas fa-arrow-up"></span></div>

<script src="{{asset('assets/site')}}/js/jquery.js"></script>
<script src="{{asset('assets/site')}}/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('assets/site')}}/js/jquery.fancybox.js"></script>
<script src="{{asset('assets/site')}}/js/isotope.js"></script>
<script src="{{asset('assets/site')}}/js/owl.js"></script>
<script src="{{asset('assets/site')}}/js/appear.js"></script>
<script src="{{asset('assets/site')}}/js/wow.js"></script>
<script src="{{asset('assets/site')}}/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="{{asset('assets/site')}}/js/TweenMax.min.js"></script>
<script src="{{asset('assets/site')}}/js/swiper.min.js"></script>
<script src="{{asset('assets/site')}}/js/jquery.ajaxchimp.min.js"></script>
<script src="{{asset('assets/site')}}/js/parallax-scroll.js"></script>
<script src="{{asset('assets/site')}}/js/jquery.nice-select.min.js"></script>

<script src="{{asset('assets/site')}}/js/script.js"></script>


</body>
</html>













