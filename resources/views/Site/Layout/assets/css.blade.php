<meta charset="utf-8">
<title>{{($setting->title) ?? 'Clinic'}} | @yield('title') </title>
<!-- Stylesheets -->
<link href="{{asset('assets/site')}}/css/bootstrap.css" rel="stylesheet">
<link href="{{asset('assets/site')}}/css/style.css" rel="stylesheet">
<!-- toastr -->
<link href="{{asset('assets/main')}}/toastr/toastr.min.css" rel="stylesheet" type="text/css" />
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

<!-- Dropify Css -->
<link href="{{asset('assets/main')}}/dropify/dropify.min.css" rel="stylesheet" type="text/css" />


@yield('site-css')
