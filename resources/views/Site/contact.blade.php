@extends('Site.Layout.app')
@section('title')
    Contact us
@endsection

@section('content')

    <!-- page title -->
    <section class="page-title" style="background-image: url(assets/site/images/background/bg-5.jpg);">
        <div class="auto-container">
            <div class="content-box">
                <div class="content-wrapper">
                    <div class="title">
                        <h1>Contact</h1>
                    </div>
                    <ul class="bread-crumb">
                        <li><a href="{{route('/')}}">Home</a></li>
                        <li>Contact</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact form section -->
    <section class="contact-form-section-two">
        <div class="auto-container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="contact-form">
                        <div class="sec-title mb-50">
                            <div class="sub-title">Contact with us</div>
                            <h2>Get In Touch 👋</h2>
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
                                    <textarea placeholder="Your Message" name="message"></textarea>
                                    <i class="docpoint-icon-13"></i>
                                </div>
                                <div class="form-group col-md-12">
                                    <button type="submit" class="theme-btn style-one" id="sendBtn"><span>Send</span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="contact-info">
                        <div class="sec-title mb-50">
                            <div class="sub-title">Contact Us</div>
                            <h2>Find us here</h2>
                        </div>
                        <div class="info-block">
                            <div class="icon"><i class="docpoint-icon-10"></i></div>
                            <div class="text">
                                <h4>Our Address</h4>
                                <p>PSD Building, 2 AlBahr St, Loskia sripur, jamukara.</p>
                            </div>
                        </div>
                        <div class="info-block">
                            <div class="icon"><i class="docpoint-icon-9"></i></div>
                            <div class="text">
                                <h4>Our Phone</h4>
                                <p>Office Telephone : <a href="tel:0029129102320">0029129102320</a></p>
                                <p>Mobile :  <a href="tel:000232439493">000 2324 39493</a></p>
                            </div>
                        </div>
                        <div class="info-block">
                            <h4>Our Email</h4>
                            <div class="icon"><i class="docpoint-icon-8"></i></div>
                            <div class="text">
                                <p>Main Email : <a href="mailto:contact@website.com">contact@website.com</a></p>
                                <p>Inquiries : <a href="mailto:Info@mail.com">Info@mail.com</a></p>
                            </div>
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













