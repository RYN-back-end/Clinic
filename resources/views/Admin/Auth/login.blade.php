<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('Admin.Auth.css')
</head>

<div class="container">
    <div class="welcome-container">
        <h3 class="heading-secondary">Welcome Back 👋<span class="lg">{{($setting->title) ?? ''}}</span></h3>
        <img src="{{asset('uploads/log.gif')}}" alt="login" style="max-height: 400px;mix-blend-mode: multiply;">
    </div>

    <main class="signup-container">
        <h1 class="heading-primary">Sign in<span class="span-blue">.</span></h1>
        <p class="text-mute">Please enter the credential</p>

        <form class="signup-form" action="{{route('admin.doLogin')}}" method="post" id="LoginForm">
            @csrf
            <label class="inp">
                <input type="email" name="email" class="input-text" placeholder="&nbsp;">
                <span class="label">Email</span>
                <span class="input-icon"><i class="fa-solid fa-envelope"></i></span>
            </label>
            <label class="inp">
                <input type="password" name="password" class="input-text" placeholder="&nbsp;" id="password">
                <span class="label">Password</span>
                <span class="input-icon input-icon-password" data-password><i class="fa-solid fa-eye"></i></span>
            </label>
            <button class="btn btn-login" id="loginButton">Log in</button>
        </form>
    </main>

</div>

@include('Admin.Auth.js')
</html>
