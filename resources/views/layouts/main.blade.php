<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- Favicon icon -->
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon.png') }}">
        <title>Tahsin | Tafio</title>
        <!-- Bootstrap Core CSS -->
        <link href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="{{ asset('horizon/css/style.css') }}" rel="stylesheet">
        <!-- page css -->
        <link href="{{ asset('horizon/css/pages/file-upload.css') }}" rel="stylesheet">
        <!-- chartist CSS -->
        <link href="{{ asset('assets/plugins/chartist-js/dist/chartist.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css') }}" rel="stylesheet">
        <!--c3 CSS -->
        <link href="{{ asset('assets/plugins/c3-master/c3.min.css') }}" rel="stylesheet">
        <!--Toaster Popup message CSS -->
        <link href="{{ asset('assets/plugins/toast-master/css/jquery.toast.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/plugins/sweetalert/sweetalert.css" rel="stylesheet') }}" type="text/css">
        <!-- Custom CSS -->
        <link href="{{ asset('horizon/css/style.css') }}" rel="stylesheet">
        <!-- Dashboard 1 Page CSS -->
        <link href="{{ asset('horizon/css/pages/dashboard1.css') }}" rel="stylesheet">
        <!-- You can change the theme colors from here -->
        <link href="{{ asset('horizon/css/colors/blue.css') }}" id="theme" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('assets/plugins/datatables/jquery.dataTables.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/plugins/wizard/steps.css') }}">
        @livewireStyles
    </head>

    <body class="fix-header fix-sidebar card-no-border">

        @include('partials.navbar')
        <div>
            @yield('container')
        </div>
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('assets/plugins/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{ asset('horizon/js/perfect-scrollbar.jquery.min.js') }}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('horizon/js/waves.js') }}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('horizon/js/sidebarmenu.js') }}"></script>
    <!--stickey kit -->
    <script src="{{ asset('assets/plugins/sticky-kit-master/dist/sticky-kit.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/sparkline/jquery.sparkline.min.js') }}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('horizon/js/custom.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/moment/min/moment.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/wizard/jquery.steps.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/wizard/jquery.validate.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/dataTables.bootstrap.js') }}"></script>
    <!-- Calendar JavaScript -->
    <script src="{{ asset('assets/plugins/calendar/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/moment/moment.js') }}"></script>
    <script src="{{ asset('assets/plugins/calendar/dist/fullcalendar.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/calendar/dist/cal-init.js') }}"></script>
    <!-- Sweet-Alert  -->
    <script src="{{ asset('assets/plugins/sweetalert/sweetalert.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/wizard/steps.js')}}"></script>
    <!-- Footable -->
    <script src="{{ asset('assets/plugins/footable/js/footable.all.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap-select/bootstrap-select.min.js') }}" type="text/javascript"></script>
    <!--FooTable init-->
    <script src="{{ asset('horizon/js/footable-init.js') }}"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="{{ asset('assets/plugins/styleswitcher/jQuery.style.switcher.js') }}"></script>
    <script src="{{ asset('assets/plugins/multiselect/js/jquery.multi-select.js') }}"></script>
    <script src="{{ asset('assets/plugins/icheck/icheck.init.js') }}"></script>
    <script src="{{ asset('assets/plugins/icheck/icheck.js') }}"></script>
    <script src="{{ asset('assets/plugins/icheck/icheck.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    @livewireScripts
    </body>

</html>