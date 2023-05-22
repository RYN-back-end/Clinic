@extends('Site.Layout.app')
@section('title')
    Sign Up
@endsection

@section('content')

    <!-- page title -->
    <section class="page-title" style="background-image: url(assets/site/images/background/bg-6.jpg);">
        <div class="auto-container">
            <div class="content-box">
                <div class="content-wrapper">
                    <div class="title">
                        <h1>Sign Up</h1>
                    </div>
                    <ul class="bread-crumb">
                        <li><a href="{{route('/')}}">Home</a></li>
                        <li>Sign Up</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact form section -->
    <section class="appointment-page">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="wrapper-box">
                        <form id="registerForm" enctype="multipart/form-data" action="{{route('register')}}">
                            @csrf
                            <h4 class="group-title">Your Information:</h4>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                            <label class="form-label">Photo</label>
                                            <input type="file" class="dropify" name="image" data-default-file="{{getUserImage()}}"
                                                   accept="image/png, image/gif, image/jpeg,image/jpg, image/webp"/>
                                            <span class="form-text text-info">Accept Only : png, gif, jpeg, jpg, webp</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" placeholder="Patient name" name="name">
                                        <i class="fas fa-user-edit"></i>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" placeholder="Patient phone" name="phone">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" placeholder="Patient email" name="email">
                                        <i class="fas fa-at"></i>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="password" placeholder="Enter password" id="password" name="password">
                                        <i class="fas fa-eye-slash" id="eyeIcon"></i>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="number" min="0" max="150" placeholder="Patient age" name="age">
                                        <i class="fas fa-calendar"></i>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group-two mt-3">
                                        <h5>Gender</h5>
                                        <ul class="select-box">
                                            <li>
                                                <div class="single-checkbox">
                                                    <input type="radio" name="check-box" id="check3" value="m">
                                                    <label for="check3"><span></span>Male</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="single-checkbox">
                                                    <input type="radio" name="check-box" id="check4" value="f">
                                                    <label for="check4"><span></span>Female</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="link-btn">
                                        <button type="submit" id="sendBtn" class="theme-btn" style="width: 200">
                                            Sign Up
                                            <i class="fas fa-long-arrow-alt-right"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-8 mt-2">
                                    <p>Have an account ? <a href="#">sign in</a> </p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection

@section('site-js')
    <script>
        $('#eyeIcon').on('click',function (){
            var passwordInput = $('#password');
            var passwordType = passwordInput.attr('type');
            if (passwordType == 'password') {
                passwordInput.attr('type', 'text');
                $(this).removeClass('fas fa-eye-slash').addClass('fas fa-eye');
            } else {
                passwordInput.attr('type', 'password');
                $(this).removeClass('fas fa-eye').addClass('fas fa-eye-slash');
            }
        });

        $("form#registerForm").submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            var url = $('#registerForm').attr('action');
            $.ajax({
                url:url,
                type: 'POST',
                data: formData,
                beforeSend: function(){
                    $('#sendBtn').html('<span style="margin-right: 4px;color: white"> wait </span><span class="spinner-border spinner-border-sm text-light" ' + ' ></span>');
                },
                success: function (data) {
                    if (data.status == 200){
                        toastr.success('We have received your message and we will reply you as soon as possible');
                        $('#registerForm')[0].reset();
                        $('#sendBtn').html("send").attr('disabled', false);
                    }else {
                        toastr.error('Oops There is an error');
                    }
                },
                error: function (data) {
                    if (data.status == 500) {
                        $('#sendBtn').html(" Sign Up <i class='fas fa-long-arrow-alt-right'></i>").attr('disabled', false);
                        toastr.error('Oops There is an error');
                    }
                    else if (data.status == 422) {
                        $('#sendBtn').html(" Sign Up <i class='fas fa-long-arrow-alt-right'></i>").attr('disabled', false);
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













