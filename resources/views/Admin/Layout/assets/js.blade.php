<!-- JAVASCRIPT -->
<script src="{{asset('assets/admin')}}/libs/jquery/jquery.min.js"></script>
<script src="{{asset('assets/admin')}}/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('assets/admin')}}/libs/metismenu/metisMenu.min.js"></script>
{{--<script src="{{asset('assets/admin')}}/libs/simplebar/simplebar.min.js"></script>--}}
<script src="{{asset('assets/admin')}}/libs/node-waves/waves.min.js"></script>

<!-- apexcharts -->
{{--<script src="{{asset('assets/admin')}}/libs/apexcharts/apexcharts.min.js"></script>--}}

<!-- dashboard init -->
<script src="{{asset('assets/admin')}}/js/pages/dashboard.init.js"></script>

<script>
    // "global" vars, built using blade
    var adminFilesUrl = '{{ asset('assets/admin/') }}';
</script>



<!-- Required datatable js -->
<script src="{{asset('assets/admin')}}/libs/datatables.net/js/jquery.dataTables.min.js"></script>

<!-- Buttons examples -->
<script src="{{asset('assets/admin')}}/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{asset('assets/admin')}}/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
<script src="{{asset('assets/admin')}}/libs/jszip/jszip.min.js"></script>
<script src="{{asset('assets/admin')}}/libs/pdfmake/build/pdfmake.min.js"></script>
<script src="{{asset('assets/admin')}}/libs/pdfmake/build/vfs_fonts.js"></script>
<script src="{{asset('assets/admin')}}/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="{{asset('assets/admin')}}/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="{{asset('assets/admin')}}/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>

<!-- Responsive examples -->
<script src="{{asset('assets/admin')}}/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>

<!-- Datatable init js -->
<script src="{{asset('assets/admin')}}/js/pages/datatables.init.js"></script>

<!-- Modal init js -->
<script src="{{asset('assets/admin')}}/js/pages/modal.init.js"></script>


<!-- Dropify Js -->
<script src="{{asset('assets/main')}}/dropify/dropify.min.js"></script>

<!-- Toastr Js -->
<script src="{{asset('assets/main')}}/toastr/toastr.min.js"></script>

<!-- App js -->
<script src="{{asset('assets/admin')}}/js/app.js"></script>



@yield('dashboard-js')
