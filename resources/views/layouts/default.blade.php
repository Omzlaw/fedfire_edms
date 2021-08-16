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

        /* .side-nav {
            position: fixed;
            width: 235px;
            height: 100vh;
            left: 0;
            right: 0;
            overflow-y: scroll;
        }

        #content-wrapper {
            margin: 0px 0 0 230px;
            overflow-y: scroll;
            position: fixed;
            left: 0;
            top: 0;
            height: 100vh;
        }

        footer {
            position : fixed;
        } */


    </style>
    <!-- end of global css -->

    <!-- vendors  css -->
    @yield('header_styles')
    <script src="{{ asset('dynamsoft/dist/dynamsoft.webtwain.min.js') }}"></script>
</head>

<body>

    <div class="wrapper">

        <!-- Left side column. contains the logo and sidebar -->
        <aside class="left-aside sidebar default-color elevation-4 main-sidebar side-nav">
            <!-- sidebar: style can be found in sidebar-->

            <section class="sidebar metismenu sidebar-res">
                @include("layouts/leftmenu")
                <!-- menu -->
            </section>
            <!-- /.sidebar -->
        </aside>

        <!--            right side bar ----------->
        <aside id="content-wrapper" class="right-aside bg-grey">
            <header class="white-color-bg header border-bottom">
                <nav class="navbar navbar-expand-lg navbar-light navbar-static-top" role="navigation">
                    <a id="toggle-link" href="javascript:void(0)" class="mr-20 toggle-right d-lg-block">

                        <i class="fa fa-th-list secondary-color"></i>
                    </a>
                    <div href="#" id="time" class=""></div>
                    <div class="navbar-center ml-auto mr-auto text-center"><strong>FEDERAL FIRE SERIVICE EDMS
                        </strong>
                        <div href="#" id="date" class=""></div>
                    </div>
                    <!-- Header Navbar: style can be found in header-->
                    <!-- Sidebar toggle button-->
                    <span class="">
                        {!! Form::open(['route' => 'records', 'id' => 'search-form', 'class' => 'form-horizontal', 'files' => true]) !!}
                        <span class="" style="display:flex">
                            {!! Form::text('search_query', null, ['required', 'class' => 'form-control', 'placeholder' => 'Employee search']) !!}
                            <a onclick="event.preventDefault();
                            document.getElementById('search-form').submit();"><i
                                    class="fa fa-search secondary-color fs-16 mt-10 ml-10 mr-10"></i></a>
                        </span>
                        {!! Form::close() !!}
                    </span>
                    <div class="navbar-right">
                        <ul class="navbar-nav nav">
                            <li class="dropdown notifications-menu nav-item dropdown">
                                <a href="javascript:void(0)"
                                    class="dropdown-toggle nav-link dropdown-toggle secondary-color"
                                    data-toggle="dropdown" id="navbarDropdown">
                                    <i class="im im-icon-Boy secondary-color fs-16"></i>
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
            <!-- header logo: style can be found in header-->
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
