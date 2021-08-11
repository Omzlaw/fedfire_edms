<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>
        @section('title')| Federal Fire Service EDMS @show
    </title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('custom/img/logo.png') }}" />
    <link rel="stylesheet" href="{{ asset('fonts/iconmind.css') }}">

    <!-- global css -->
    <link type="text/css" href="{{ asset('css/app.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('vendors/perfect-scrollbar/css/perfect-scrollbar.css') }}">
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('css/selectize.min.css')}}"> --}}
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('css/dateTimePicker.min.css')}}"> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/custom.css') }}">
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

        <!-- Left side column. contains the logo and sidebar -->
        <aside class="left-aside default-color">
            <!-- sidebar: style can be found in sidebar-->
            <section class="sidebar metismenu sidebar-res">
                @include("layouts/leftmenu")
                <!-- menu -->
            </section>
            <!-- /.sidebar -->
        </aside>


        <!--            right side bar ----------->
        <aside class="right-aside">
            <!-- header logo: style can be found in header-->
            <header class="header bg-white sticky-top">
                <nav class="navbar navbar-expand-lg navbar-light navbar-static-top" role="navigation">
                    <a href="javascript:void(0)" class="ml-100 toggle-right d-xl-none d-lg-block">
                        <!-- Add the class icon to your logo image or logo icon to add the margining -->
                        <img src="{{ asset('img/images/toggle.png') }}" alt="logo" />


                    </a>

                    <div class="navbar-center ml-auto"><strong>FEDERAL FIRE SERIVICE EDMS</strong></div>
                    <!-- Header Navbar: style can be found in header-->
                    <!-- Sidebar toggle button-->

                    <div class="navbar-right ml-auto">
                        <ul class="navbar-nav nav">
                            <li class="dropdown notifications-menu nav-item dropdown">
                                <a href="javascript:void(0)" class="dropdown-toggle nav-link dropdown-toggle"
                                    data-toggle="dropdown" id="navbarDropdown">
                                    <i class="im im-icon-Boy fs-16"></i>


                                </a>
                                <ul class="dropdown-menu dropdown-notifications table-striped"
                                    aria-labelledby="navbarDropdown">

                                    <li class="dropdown-footer">
                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </li>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            @yield('content')
            @include('layouts.modal')
            <div class="mb-3">
            </div>
            @include('layouts.footer')
        </aside>
    </div>
    <!-- ./wrapper -->
    <!-- Footer end -->
    <!-- SCRIPTS -->
    <!-- global js -->
    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
    <!-- end of page level js -->
    <!-- Start of vendor js -->
    <script src="{{ asset('vendors/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
    {{-- <script src="{{ asset('js/selectize.min.js')}}"></script> --}}
    {{-- <script src="{{ asset('js/moment.min.js')}}"></script>
    <script src="{{ asset('js/dateTimePicker.min.js')}}"></script> --}}
    <script src="{{ asset('js/custom.js') }}"></script>

    @yield('footer_scripts')

</body>

</html>
