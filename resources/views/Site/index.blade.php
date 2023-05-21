@extends('Site.Layout.app')
@section('title')
    Home
@endsection

@section('content')
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

    @if($siteInfo)
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
                            <img src="{{getFile($siteInfo['qualification_image'])}}" alt="">
                            <div class="icon"><i class="docpoint-icon-15"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="content__block">
                        <div class="sec-title mb-40">
                            <div class="sub-title">About Us <span class="text-decor"></span></div>
                            <h2> Education, Experience </h2>
                            <div class="text">
                                {{$siteInfo['qualification_desc']}}
                            </div>
                        </div>
                        <div class="tabs-box">
                            <ul class="tab-btns">
                                <li class="tab-btn active-btn" data-tab="#cat-1">Qualification</li>
                                <li class="tab-btn"><a href="#">CV</a></li>
                            </ul>
                            <div class="tabs-content">
                                <div class="tab active-tab" id="cat-1">
                                    <div class="text">
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <ul class="list">
                                                @foreach($qualifications as $row)
                                                <li>{{$row->text}}</li>
                                                @endforeach()
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
    @endif
    <!-- Features section style two -->
    <section class="features-section style-two">
        <div class="auto-container">
            <div class="wrapper-box">
                <div class="outer-box">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 feature-block">
                            <div class="inner-box wow animated fadeInUp" data-wow-delay="0.1s"
                                 data-wow-duration="1500ms">
                                <div class="icon"><img src="{{asset('assets/site')}}/images/icons/icon-1.png" alt=""></div>
                                <h4><a href="">Sign Up</a></h4>
                                <div class="text">Signing up is quick and easy, simply click on the lower button</div>
                                <div class="link-btn">
                                    <a href="hospital-details.html" class="link"><i class="docpoint-icon-4"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 feature-block">
                            <div class="inner-box wow animated fadeInUp" data-wow-delay="0.3s"
                                 data-wow-duration="1500ms">
                                <div class="icon"><img src="{{asset('assets/site')}}/images/icons/icon-2.png" alt=""></div>
                                <h4><a href="">Make Reservation</a></h4>
                                <div class="text">Browse our available times and Choose your suitable one</div>
                                <div class="link-btn">
                                    <a href="hospital-details.html" class="link"><i class="docpoint-icon-4"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 feature-block">
                            <div class="inner-box wow animated fadeInUp" data-wow-delay="0.5s"
                                 data-wow-duration="1500ms">
                                <div class="icon"><img src="{{asset('assets/site')}}/images/icons/icon-4.png" alt=""></div>
                                <h4><a href="">Feedback</a></h4>
                                <div class="text">After making reservation, we will answer you as soon as possible</div>
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
        <div class="bg-image" style="background-image: url(assets/site/images/background/bg-22.jpg);"></div>
        <div class="shape" style="background-image: url(assets/site/images/shape/shape-12.png);"></div>
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-6 offset-lg-6">
                    <div class="contact-form">
                        <div class="sec-title mb-30">
                            <h3>Contact with us 👋</h3>
                            <div class="text">We will be happy to answer your questions.</div>
                        </div>
                        <form action="{{route('postContactUs')}}" method="POST" id="contactForm">
                            @csrf
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <input type="text" placeholder="Enter Full Name" name="name">
                                    <i class="docpoint-icon-11"></i>
                                </div>
                                <div class="form-group col-md-12">
                                    <input type="email" placeholder="Enter email address" name="email">
                                    <i class="docpoint-icon-12"></i>
                                </div>
                                <div class="form-group col-md-12">
                                    <input type="number" placeholder="Enter phone number" name="phone_number">
                                    <i class="docpoint-icon-1"></i>
                                </div>
                                <div class="form-group col-md-12">
                                    <textarea placeholder="Your message ..." name="message"></textarea>
                                    <i class="docpoint-icon-13"></i>
                                </div>
                                <div class="form-group col-md-12">
                                    <button type="submit" class="theme-btn style-one" id="sendBtn"><span>Send</span></button>
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

@endsection

@section('site-js')
<script>
    $("form#contactForm").submit(function(e) {
        e.preventDefault();
        var formData = new FormData(this);
        var url = $('#contactForm').attr('action');
        $.ajax({
            url:url,
            type: 'POST',
            data: formData,
            beforeSend: function(){
                $('#sendBtn').html('<span style="margin-right: 4px;color: white"> wait </span><span class="spinner-border spinner-border-sm text-light" ' + ' ></span>');
            },
            complete: function(){


            },
            success: function (data) {
                if (data.status == 200){
                    toastr.success('We have received your message and we will reply you as soon as possible');
                    $('#contactForm')[0].reset();
                    $('#sendBtn').html("send");
                }else {
                    toastr.error('Oops There is an error');
                }
            },
            error: function (data) {
                if (data.status == 500) {
                    $('#sendBtn').html("send");
                    toastr.error('Oops There is an error');
                }
                else if (data.status == 422) {
                    $('#sendBtn').html("send");
                    var errors = $.parseJSON(data.responseText);
                    $.each(errors, function (key, value) {
                        if ($.isPlainObject(value)) {
                            $.each(value, function (key, value) {
                                toastr.error(value);
                            });
                        }
                    });
                }
            },//end error method

            cache: false,
            contentType: false,
            processData: false
        });
    });
</script>
@endsection













