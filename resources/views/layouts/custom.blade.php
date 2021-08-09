<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>
        @section('title')| Fire Service EDMS @show
    </title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}" />
    <link rel="stylesheet" href="{{asset('fonts/iconmind.css')}}">

    <!-- global css -->
    <link type="text/css" href="{{ asset('css/app.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('vendors/perfect-scrollbar/css/perfect-scrollbar.css')}}">
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('css/dateTimePicker.min.css')}}"> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/custom.css')}}">
    <style>
        #demo {
            position: relative;

            overflow: auto;
        }
    </style>
    <!-- end of global css -->

    <!-- vendors  css -->
    @yield('header_styles')
</head>

<body>
    <div class="wrapper">
        <div class="mt-3">
            @yield('content')
        </div>
    </div>
    <!-- ./wrapper -->
    <!-- Footer end -->
    <!-- SCRIPTS -->
    <!-- global js -->
    <script src="{{ asset('js/app.js')}}" type="text/javascript"></script>
    <!-- end of page level js -->
    <!-- Start of vendor js -->
    <script src="{{ asset('vendors/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
    {{-- <script src="{{ asset('js/moment.min.js')}}"></script>
    <script src="{{ asset('js/dateTimePicker.min.js')}}"></script> --}}
    <script src="{{ asset('js/custom.js')}}"></script>
    @yield('footer_scripts')

</body>

</html>
