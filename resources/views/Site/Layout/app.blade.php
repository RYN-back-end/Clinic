<!doctype html>
<html lang="en">

<head>
    @include('Site.Layout.assets.css')
</head>
<body>
<div class="preloader"></div>

<div class="page-wrapper">

    @include('Site.Layout.inc.header')

    @yield('content')

    @include('Site.Layout.inc.footer')

</div>

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fas fa-arrow-up"></span></div>


@include('Site.Layout.assets.js')
</body>
</html>
