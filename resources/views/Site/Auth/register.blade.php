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
                        <form>
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
                                        <input type="text" placeholder="Patient name">
                                        <i class="fas fa-user-edit"></i>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" placeholder="Patient phone">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" placeholder="Patient email">
                                        <i class="fas fa-at"></i>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="password" placeholder="Enter password" id="password">
                                        <i class="fas fa-eye-slash" id="eyeIcon"></i>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="number" min="0" max="150" placeholder="Patient age">
                                        <i class="fas fa-calendar"></i>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group-two mt-3">
                                        <h5>Gender</h5>
                                        <ul class="select-box">
                                            <li>
                                                <div class="single-checkbox">
                                                    <input type="radio" name="check-box" id="check3">
                                                    <label for="check3"><span></span>Male</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="single-checkbox">
                                                    <input type="radio" name="check-box" id="check4">
                                                    <label for="check4"><span></span>Female</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="link-btn">
                                        <button type="submit" class="theme-btn" style="width: 200">
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
    </script>
@endsection













