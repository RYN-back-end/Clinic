
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
                                    <li><a href="{{route('aboutPage')}}">About</a></li>
                                    <li><a href="{{route('contactPage')}}">Contact</a></li>
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
