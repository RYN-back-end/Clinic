
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
<script src="{{asset('assets/main')}}/toastr/toastr.min.js"></script>
<script src="{{asset('assets/site')}}/js/script.js"></script>

<!-- Dropify Js -->
<script src="{{asset('assets/main')}}/dropify/dropify.min.js"></script>

<script type="text/javascript">

    $('.dropify').dropify("Upload Here");

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(window).on('load', function() {
        $('#loader-overlay').fadeOut('slow');
    });
</script>


@yield('site-js')
