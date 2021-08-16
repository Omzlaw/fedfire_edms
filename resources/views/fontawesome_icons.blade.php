@extends('layouts.default')
{{-- Page title --}}
@section('title')
    Icons @parent
@stop
{{-- page level styles --}}
@section('header_styles')
    <!-- page vendors -->
    <link href="{{ asset('vendors/jasny-bootstrap/css/jasny-bootstrap.css') }}"  rel="stylesheet" type="text/css" />

    <!--end of page vendors -->
@stop
@section('content')


    <!-- Content Header (Page header) -->
    <section class="content-header">

        <div aria-label="breadcrumb" class="card-breadcrumb">
            <h1>Icons</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Content</a></li>
                <li class="breadcrumb-item active" aria-current="page">Icons</li>
            </ol>
        </div>
        {{-- <div class="separator-breadcrumb border-top"></div> --}}




    </section>
    <!-- /.content -->
    <!-- /.content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header border-bottom">
                        <h5>FontAwesome Icons</h5>
                    </div>
                    <ul class="pl-0 list-inline text-justify">
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-angellist">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-angellist"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-angle-double-down">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-angle-double-down"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-angle-double-left">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-angle-double-left"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-angle-double-right">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-angle-double-right"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-angle-double-up">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-angle-double-up"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-angle-down">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-angle-down"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-angle-left">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-angle-left"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-angle-right">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-angle-right"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-angle-up">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-angle-up"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-angry">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-angry"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-angry">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-angry"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-angrycreative">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-angrycreative"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-angular">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-angular"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-ankh">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-ankh"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-app-store">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-app-store"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-app-store-ios">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-app-store-ios"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-apper">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-apper"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-apple">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-apple"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-apple-alt">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-apple-alt"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-apple-pay">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-apple-pay"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-archive">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-archive"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-archway">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-archway"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-arrow-alt-circle-down">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-arrow-alt-circle-down"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-arrow-alt-circle-down">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-arrow-alt-circle-down"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-arrow-alt-circle-left">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-arrow-alt-circle-left"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-arrow-alt-circle-left">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-arrow-alt-circle-left"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-arrow-alt-circle-right">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-arrow-alt-circle-right"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-arrow-alt-circle-right">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-arrow-alt-circle-right"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-arrow-alt-circle-up">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-arrow-alt-circle-up"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-arrow-alt-circle-up">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-arrow-alt-circle-up"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-arrow-circle-down">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-arrow-circle-down"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-arrow-circle-left">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-arrow-circle-left"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-arrow-circle-right">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-arrow-circle-right"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-arrow-circle-up">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-arrow-circle-up"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-arrow-down">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-arrow-down"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-arrow-left">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-arrow-left"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-arrow-right">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-arrow-right"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-arrow-up">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-arrow-up"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-arrows-alt">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-arrows-alt"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-arrows-alt-h">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-arrows-alt-h"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-arrows-alt-v">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-arrows-alt-v"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-artstation">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-artstation"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-assistive-listening-systems">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-assistive-listening-systems"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-asterisk">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-asterisk"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-asymmetrik">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-asymmetrik"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-at">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-at"></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-atlas">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-atlas"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-atlassian">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-atlassian"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-atom">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-atom"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-audible">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-audible"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-audio-description">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-audio-description"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-autoprefixer">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-autoprefixer"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-avianex">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-avianex"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-aviato">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-aviato"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-award">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-award"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-aws">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-aws"></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-baby">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-baby"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-baby-carriage">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-baby-carriage"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-backspace">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-backspace"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-backward">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-backward"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-bacon">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-bacon"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-balance-scale">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-balance-scale"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-ban">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-ban"></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-band-aid">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-band-aid"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-bandcamp">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-bandcamp"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-barcode">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-barcode"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-bars">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-bars"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-baseball-ball">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-baseball-ball"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-basketball-ball">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-basketball-ball"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-bath">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-bath"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-battery-empty">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-battery-empty"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-battery-full">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-battery-full"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-battery-half">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-battery-half"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-battery-quarter">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-battery-quarter"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-battery-three-quarters">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-battery-three-quarters"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-bed">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-bed"></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-beer">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-beer"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-behance">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-behance"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-behance-square">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-behance-square"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-bell">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-bell"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-bell">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-bell"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-bell-slash">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-bell-slash"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-bell-slash">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-bell-slash"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-bezier-curve">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-bezier-curve"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-bible">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-bible"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-bicycle">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-bicycle"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-bimobject">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-bimobject"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-binoculars">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-binoculars"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-biohazard">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-biohazard"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-birthday-cake">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-birthday-cake"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-bitbucket">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-bitbucket"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-bitcoin">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-bitcoin"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-bity">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-bity"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-black-tie">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-black-tie"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-blackberry">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-blackberry"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-blender">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-blender"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-blender-phone">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-blender-phone"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-blind">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-blind"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-blog">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-blog"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-blogger">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-blogger"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-blogger-b">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-blogger-b"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-bluetooth">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-bluetooth"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-bluetooth-b">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-bluetooth-b"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-bold">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-bold"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-bolt">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-bolt"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-bomb">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-bomb"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-bone">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-bone"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-bong">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-bong"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-book">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-book"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-book-dead">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-book-dead"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-book-medical">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-book-medical"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-book-open">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-book-open"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-book-reader">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-book-reader"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-bookmark">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-bookmark"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-bookmark">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-bookmark"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-bowling-ball">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-bowling-ball"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-box">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-box"></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-box-open">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-box-open"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-boxes">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-boxes"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-braille">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-braille"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-brain">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-brain"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-bread-slice">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-bread-slice"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-briefcase">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-briefcase"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-briefcase-medical">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-briefcase-medical"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-broadcast-tower">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-broadcast-tower"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-broom">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-broom"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-brush">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-brush"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-btc">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-btc"></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-bug">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-bug"></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-building">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-building"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-building">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-building"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-bullhorn">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-bullhorn"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-bullseye">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-bullseye"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-burn">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-burn"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-buromobelexperte">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-buromobelexperte"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-bus">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-bus"></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-bus-alt">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-bus-alt"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-business-time">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-business-time"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-buysellads">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-buysellads"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-calculator">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-calculator"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-calendar">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-calendar"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-calendar">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-calendar"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-calendar-alt">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-calendar-alt"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-calendar-alt">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-calendar-alt"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-calendar-check">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-calendar-check"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-calendar-check">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-calendar-check"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-calendar-day">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-calendar-day"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-calendar-minus">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-calendar-minus"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-calendar-minus">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-calendar-minus"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-calendar-plus">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-calendar-plus"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-calendar-plus">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-calendar-plus"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-calendar-times">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-calendar-times"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-calendar-times">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-calendar-times"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-calendar-week">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-calendar-week"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-camera">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-camera"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-camera-retro">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-camera-retro"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-campground">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-campground"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-canadian-maple-leaf">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-canadian-maple-leaf"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-candy-cane">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-candy-cane"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-cannabis">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-cannabis"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-capsules">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-capsules"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-car">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-car"></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-car-alt">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-car-alt"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-car-battery">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-car-battery"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-car-crash">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-car-crash"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-car-side">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-car-side"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-caret-down">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-caret-down"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-caret-left">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-caret-left"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-caret-right">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-caret-right"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-caret-square-down">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-caret-square-down"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-caret-square-down">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-caret-square-down"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-caret-square-left">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-caret-square-left"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-caret-square-left">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-caret-square-left"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-caret-square-right">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-caret-square-right"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-caret-square-right">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-caret-square-right"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-caret-square-up">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-caret-square-up"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-caret-square-up">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-caret-square-up"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-caret-up">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-caret-up"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-carrot">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-carrot"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-cart-arrow-down">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-cart-arrow-down"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-cart-plus">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-cart-plus"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-cash-register">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-cash-register"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-cat">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-cat"></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-cc-amazon-pay">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-cc-amazon-pay"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-cc-amex">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-cc-amex"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-cc-apple-pay">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-cc-apple-pay"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-cc-diners-club">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-cc-diners-club"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-cc-discover">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-cc-discover"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-cc-jcb">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-cc-jcb"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-cc-mastercard">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-cc-mastercard"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-cc-paypal">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-cc-paypal"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-cc-stripe">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-cc-stripe"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-cc-visa">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-cc-visa"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-centercode">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-centercode"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-centos">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-centos"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-certificate">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-certificate"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-chair">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-chair"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-chalkboard">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-chalkboard"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-chalkboard-teacher">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-chalkboard-teacher"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-charging-station">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-charging-station"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-chart-area">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-chart-area"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-chart-bar">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-chart-bar"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-chart-bar">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-chart-bar"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-chart-line">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-chart-line"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-chart-pie">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-chart-pie"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-check">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-check"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-check-circle">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-check-circle"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-check-circle">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-check-circle"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-check-double">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-check-double"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-check-square">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-check-square"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-check-square">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-check-square"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-cheese">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-cheese"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-chess">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-chess"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-chess-bishop">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-chess-bishop"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-chess-board">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-chess-board"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-chess-king">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-chess-king"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-chess-knight">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-chess-knight"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-chess-pawn">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-chess-pawn"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-chess-queen">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-chess-queen"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-chess-rook">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-chess-rook"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-chevron-circle-down">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-chevron-circle-down"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-chevron-circle-left">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-chevron-circle-left"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-chevron-circle-right">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-chevron-circle-right"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-chevron-circle-up">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-chevron-circle-up"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-chevron-down">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-chevron-down"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-chevron-left">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-chevron-left"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-chevron-right">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-chevron-right"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-chevron-up">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-chevron-up"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-child">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-child"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-chrome">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-chrome"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-church">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-church"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-circle">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-circle"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-circle">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-circle"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-circle-notch">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-circle-notch"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-city">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-city"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-clinic-medical">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-clinic-medical"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-clipboard">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-clipboard"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-clipboard">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-clipboard"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-clipboard-check">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-clipboard-check"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-clipboard-list">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-clipboard-list"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-clock">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-clock"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-clock">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-clock"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-clone">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-clone"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-clone">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-clone"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-closed-captioning">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-closed-captioning"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-closed-captioning">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-closed-captioning"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-cloud">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-cloud"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-cloud-download-alt">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-cloud-download-alt"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-cloud-meatball">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-cloud-meatball"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-cloud-moon">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-cloud-moon"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-cloud-moon-rain">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-cloud-moon-rain"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-cloud-rain">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-cloud-rain"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-cloud-showers-heavy">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-cloud-showers-heavy"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-cloud-sun">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-cloud-sun"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-cloud-sun-rain">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-cloud-sun-rain"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-cloud-upload-alt">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-cloud-upload-alt"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-cloudscale">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-cloudscale"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-cloudsmith">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-cloudsmith"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-cloudversify">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-cloudversify"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-cocktail">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-cocktail"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-code">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-code"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-code-branch">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-code-branch"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-codepen">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-codepen"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-codiepie">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-codiepie"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-coffee">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-coffee"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-cog">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-cog"></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-cogs">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-cogs"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-coins">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-coins"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-columns">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-columns"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-comment">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-comment"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-comment">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-comment"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-comment-alt">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-comment-alt"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-comment-alt">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-comment-alt"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-comment-dollar">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-comment-dollar"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-comment-dots">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-comment-dots"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-comment-dots">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-comment-dots"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-comment-medical">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-comment-medical"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-comment-slash">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-comment-slash"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-comments">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-comments"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-comments">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-comments"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-comments-dollar">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-comments-dollar"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-compact-disc">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-compact-disc"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-compass">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-compass"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-compass">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-compass"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-compress">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-compress"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-compress-arrows-alt">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-compress-arrows-alt"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-concierge-bell">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-concierge-bell"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-confluence">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-confluence"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-connectdevelop">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-connectdevelop"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-contao">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-contao"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-cookie">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-cookie"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-cookie-bite">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-cookie-bite"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-copy">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-copy"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-copy">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-copy"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-copyright">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-copyright"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-copyright">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-copyright"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-couch">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-couch"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-cpanel">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-cpanel"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-creative-commons">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-creative-commons"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-creative-commons-by">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-creative-commons-by"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-creative-commons-nc">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-creative-commons-nc"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-creative-commons-nc-eu">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-creative-commons-nc-eu"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-creative-commons-nc-jp">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-creative-commons-nc-jp"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-creative-commons-nd">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-creative-commons-nd"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-creative-commons-pd">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-creative-commons-pd"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-creative-commons-pd-alt">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-creative-commons-pd-alt"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-creative-commons-remix">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-creative-commons-remix"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-creative-commons-sa">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-creative-commons-sa"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-creative-commons-sampling">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-creative-commons-sampling"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-creative-commons-sampling-plus">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-creative-commons-sampling-plus"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-creative-commons-share">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-creative-commons-share"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-creative-commons-zero">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-creative-commons-zero"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-credit-card">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-credit-card"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-credit-card">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-credit-card"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-critical-role">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-critical-role"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-crop">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-crop"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-crop-alt">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-crop-alt"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-cross">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-cross"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-crosshairs">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-crosshairs"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-crow">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-crow"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-crown">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-crown"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-crutch">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-crutch"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-css3">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-css3"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-css3-alt">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-css3-alt"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-cube">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-cube"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-cubes">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-cubes"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-cut">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-cut"></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-cuttlefish">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-cuttlefish"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-d-and-d">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-d-and-d"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-d-and-d-beyond">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-d-and-d-beyond"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-dashcube">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-dashcube"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-database">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-database"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-deaf">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-deaf"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-delicious">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-delicious"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-democrat">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-democrat"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-deploydog">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-deploydog"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-deskpro">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-deskpro"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-desktop">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-desktop"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-dev">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-dev"></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-deviantart">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-deviantart"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-dharmachakra">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-dharmachakra"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-dhl">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-dhl"></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-diagnoses">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-diagnoses"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-diaspora">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-diaspora"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-dice">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-dice"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-dice-d20">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-dice-d20"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-dice-d6">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-dice-d6"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-dice-five">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-dice-five"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-dice-four">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-dice-four"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-dice-one">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-dice-one"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-dice-six">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-dice-six"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-dice-three">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-dice-three"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-dice-two">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-dice-two"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-digg">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-digg"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-digital-ocean">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-digital-ocean"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-digital-tachograph">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-digital-tachograph"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-directions">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-directions"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-discord">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-discord"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-discourse">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-discourse"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-divide">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-divide"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-dizzy">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-dizzy"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-dizzy">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-dizzy"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-dna">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-dna"></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-dochub">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-dochub"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-docker">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-docker"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-dog">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-dog"></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-dollar-sign">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-dollar-sign"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-dolly">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-dolly"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-dolly-flatbed">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-dolly-flatbed"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-donate">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-donate"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-door-closed">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-door-closed"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-door-open">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-door-open"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-dot-circle">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-dot-circle"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-dot-circle">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-dot-circle"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-dove">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-dove"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-download">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-download"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-draft2digital">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-draft2digital"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-drafting-compass">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-drafting-compass"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-dragon">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-dragon"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-draw-polygon">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-draw-polygon"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-dribbble">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-dribbble"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-dribbble-square">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-dribbble-square"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-dropbox">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-dropbox"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-drum">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-drum"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-drum-steelpan">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-drum-steelpan"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-drumstick-bite">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-drumstick-bite"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-drupal">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-drupal"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-dumbbell">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-dumbbell"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-dumpster">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-dumpster"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-dumpster-fire">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-dumpster-fire"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-dungeon">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-dungeon"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-dyalog">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-dyalog"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-earlybirds">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-earlybirds"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-ebay">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-ebay"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-edge">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-edge"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-edit">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-edit"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-edit">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-edit"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-egg">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-egg"></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-eject">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-eject"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-elementor">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-elementor"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-ellipsis-h">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-ellipsis-h"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-ellipsis-v">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-ellipsis-v"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-ello">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-ello"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-ember">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-ember"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-empire">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-empire"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-envelope">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-envelope"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-envelope">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-envelope"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-envelope-open">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-envelope-open"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-envelope-open">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-envelope-open"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-envelope-open-text">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-envelope-open-text"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-envelope-square">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-envelope-square"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-envira">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-envira"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-equals">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-equals"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-eraser">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-eraser"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-erlang">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-erlang"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-ethereum">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-ethereum"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-ethernet">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-ethernet"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-etsy">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-etsy"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-euro-sign">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-euro-sign"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-exchange-alt">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-exchange-alt"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-exclamation">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-exclamation"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-exclamation-circle">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-exclamation-circle"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-exclamation-triangle">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-exclamation-triangle"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-expand">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-expand"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-expand-arrows-alt">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-expand-arrows-alt"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-expeditedssl">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-expeditedssl"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-external-link-alt">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-external-link-alt"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-external-link-square-alt">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-external-link-square-alt"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-eye">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-eye"></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-eye">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-eye"></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-eye-dropper">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-eye-dropper"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-eye-slash">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-eye-slash"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-eye-slash">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-eye-slash"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-facebook">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-facebook"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-facebook-f">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-facebook-f"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-facebook-messenger">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-facebook-messenger"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-facebook-square">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-facebook-square"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-fantasy-flight-games">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-fantasy-flight-games"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-fast-backward">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-fast-backward"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-fast-forward">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-fast-forward"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-fax">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-fax"></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-feather">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-feather"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-feather-alt">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-feather-alt"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-fedex">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-fedex"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-fedora">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-fedora"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-female">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-female"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-fighter-jet">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-fighter-jet"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-figma">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-figma"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-file">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-file"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-file">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-file"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-file-alt">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-file-alt"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-file-alt">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-file-alt"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-file-archive">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-file-archive"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-file-archive">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-file-archive"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-file-audio">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-file-audio"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-file-audio">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-file-audio"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-file-code">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-file-code"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-file-code">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-file-code"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-file-contract">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-file-contract"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-file-csv">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-file-csv"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-file-download">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-file-download"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-file-excel">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-file-excel"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-file-excel">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-file-excel"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-file-export">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-file-export"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-file-image">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-file-image"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-file-image">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-file-image"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-file-import">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-file-import"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-file-invoice">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-file-invoice"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-file-invoice-dollar">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-file-invoice-dollar"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-file-medical">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-file-medical"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-file-medical-alt">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-file-medical-alt"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-file-pdf">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-file-pdf"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-file-pdf">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-file-pdf"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-file-powerpoint">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-file-powerpoint"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-file-powerpoint">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-file-powerpoint"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-file-prescription">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-file-prescription"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-file-signature">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-file-signature"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-file-upload">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-file-upload"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-file-video">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-file-video"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-file-video">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-file-video"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-file-word">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-file-word"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-file-word">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-file-word"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-fill">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-fill"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-fill-drip">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-fill-drip"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-film">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-film"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-filter">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-filter"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-fingerprint">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-fingerprint"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-fire">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-fire"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-fire-alt">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-fire-alt"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-fire-extinguisher">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-fire-extinguisher"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-firefox">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-firefox"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-first-aid">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-first-aid"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-first-order">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-first-order"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-first-order-alt">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-first-order-alt"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-firstdraft">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-firstdraft"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-fish">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-fish"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-fist-raised">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-fist-raised"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-flag">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-flag"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-flag">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-flag"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-flag-checkered">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-flag-checkered"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-flag-usa">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-flag-usa"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-flask">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-flask"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-flickr">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-flickr"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-flipboard">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-flipboard"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-flushed">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-flushed"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-flushed">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-flushed"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-fly">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-fly"></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-folder">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-folder"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-folder">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-folder"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-folder-minus">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-folder-minus"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-folder-open">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-folder-open"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-folder-open">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-folder-open"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-folder-plus">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-folder-plus"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-font">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-font"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-font-awesome">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-font-awesome"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-font-awesome-alt">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-font-awesome-alt"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-font-awesome-flag">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-font-awesome-flag"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-fonticons">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-fonticons"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-fonticons-fi">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-fonticons-fi"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-football-ball">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-football-ball"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-fort-awesome">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-fort-awesome"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-fort-awesome-alt">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-fort-awesome-alt"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-forumbee">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-forumbee"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-forward">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-forward"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-foursquare">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-foursquare"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-free-code-camp">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-free-code-camp"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-freebsd">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-freebsd"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-frog">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-frog"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-frown">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-frown"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-frown">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-frown"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-frown-open">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-frown-open"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-frown-open">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-frown-open"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-fulcrum">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-fulcrum"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-funnel-dollar">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-funnel-dollar"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-futbol">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-futbol"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-futbol">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-futbol"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-galactic-republic">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-galactic-republic"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-galactic-senate">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-galactic-senate"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-gamepad">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-gamepad"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-gas-pump">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-gas-pump"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-gavel">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-gavel"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-gem">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-gem"></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-gem">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-gem"></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-genderless">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-genderless"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-get-pocket">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-get-pocket"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-gg">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-gg"></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-gg-circle">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-gg-circle"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-ghost">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-ghost"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-gift">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-gift"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-gifts">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-gifts"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-git">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-git"></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-git-square">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-git-square"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-github">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-github"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-github-alt">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-github-alt"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-github-square">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-github-square"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-gitkraken">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-gitkraken"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-gitlab">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-gitlab"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-gitter">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-gitter"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-glass-cheers">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-glass-cheers"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-glass-martini">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-glass-martini"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-glass-martini-alt">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-glass-martini-alt"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-glass-whiskey">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-glass-whiskey"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-glasses">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-glasses"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-glide">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-glide"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-glide-g">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-glide-g"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-globe">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-globe"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-globe-africa">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-globe-africa"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-globe-americas">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-globe-americas"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-globe-asia">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-globe-asia"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-globe-europe">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-globe-europe"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-gofore">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-gofore"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-golf-ball">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-golf-ball"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-goodreads">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-goodreads"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-goodreads-g">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-goodreads-g"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-google">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-google"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-google-drive">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-google-drive"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-google-play">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-google-play"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-google-plus">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-google-plus"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-google-plus-g">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-google-plus-g"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-google-plus-square">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-google-plus-square"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-google-wallet">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-google-wallet"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-gopuram">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-gopuram"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-graduation-cap">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-graduation-cap"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-gratipay">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-gratipay"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-grav">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-grav"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-greater-than">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-greater-than"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-greater-than-equal">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-greater-than-equal"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-grimace">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-grimace"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-grimace">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-grimace"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-grin">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-grin"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-grin">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-grin"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-grin-alt">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-grin-alt"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-grin-alt">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-grin-alt"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-grin-beam">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-grin-beam"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-grin-beam">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-grin-beam"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-grin-beam-sweat">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-grin-beam-sweat"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-grin-beam-sweat">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-grin-beam-sweat"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-grin-hearts">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-grin-hearts"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-grin-hearts">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-grin-hearts"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-grin-squint">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-grin-squint"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-grin-squint">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-grin-squint"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-grin-squint-tears">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-grin-squint-tears"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-grin-squint-tears">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-grin-squint-tears"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-grin-stars">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-grin-stars"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-grin-stars">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-grin-stars"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-grin-tears">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-grin-tears"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-grin-tears">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-grin-tears"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-grin-tongue">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-grin-tongue"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-grin-tongue">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-grin-tongue"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-grin-tongue-squint">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-grin-tongue-squint"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-grin-tongue-squint">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-grin-tongue-squint"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-grin-tongue-wink">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-grin-tongue-wink"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-grin-tongue-wink">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-grin-tongue-wink"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-grin-wink">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-grin-wink"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-grin-wink">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-grin-wink"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-grip-horizontal">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-grip-horizontal"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-grip-lines">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-grip-lines"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-grip-lines-vertical">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-grip-lines-vertical"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-grip-vertical">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-grip-vertical"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-gripfire">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-gripfire"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-grunt">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-grunt"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-guitar">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-guitar"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-gulp">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-gulp"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-h-square">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-h-square"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-hacker-news">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-hacker-news"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-hacker-news-square">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-hacker-news-square"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-hackerrank">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-hackerrank"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-hamburger">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-hamburger"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-hammer">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-hammer"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-hamsa">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-hamsa"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-hand-holding">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-hand-holding"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-hand-holding-heart">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-hand-holding-heart"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-hand-holding-usd">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-hand-holding-usd"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-hand-lizard">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-hand-lizard"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-hand-lizard">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-hand-lizard"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-hand-middle-finger">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-hand-middle-finger"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-hand-paper">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-hand-paper"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-hand-paper">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-hand-paper"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-hand-peace">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-hand-peace"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-hand-peace">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-hand-peace"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-hand-point-down">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-hand-point-down"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-hand-point-down">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-hand-point-down"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-hand-point-left">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-hand-point-left"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-hand-point-left">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-hand-point-left"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-hand-point-right">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-hand-point-right"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-hand-point-right">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-hand-point-right"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-hand-point-up">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-hand-point-up"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-hand-point-up">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-hand-point-up"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-hand-pointer">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-hand-pointer"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-hand-pointer">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-hand-pointer"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-hand-rock">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-hand-rock"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-hand-rock">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-hand-rock"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-hand-scissors">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-hand-scissors"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-hand-scissors">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-hand-scissors"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-hand-spock">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-hand-spock"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-hand-spock">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-hand-spock"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-hands">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-hands"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-hands-helping">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-hands-helping"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-handshake">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-handshake"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-handshake">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-handshake"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-hanukiah">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-hanukiah"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-hard-hat">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-hard-hat"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-hashtag">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-hashtag"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-hat-wizard">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-hat-wizard"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-haykal">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-haykal"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-hdd">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-hdd"></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-hdd">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-hdd"></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-heading">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-heading"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-headphones">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-headphones"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-headphones-alt">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-headphones-alt"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-headset">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-headset"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-heart">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-heart"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-heart">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-heart"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-heart-broken">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-heart-broken"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-heartbeat">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-heartbeat"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-helicopter">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-helicopter"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-highlighter">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-highlighter"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-hiking">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-hiking"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-hippo">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-hippo"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-hips">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-hips"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-hire-a-helper">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-hire-a-helper"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-history">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-history"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-hockey-puck">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-hockey-puck"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-holly-berry">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-holly-berry"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-home">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-home"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-hooli">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-hooli"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-hornbill">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-hornbill"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-horse">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-horse"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-horse-head">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-horse-head"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-hospital">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-hospital"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-hospital">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-hospital"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-hospital-alt">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-hospital-alt"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-hospital-symbol">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-hospital-symbol"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-hot-tub">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-hot-tub"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-hotdog">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-hotdog"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-hotel">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-hotel"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-hotjar">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-hotjar"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-hourglass">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-hourglass"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-hourglass">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-hourglass"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-hourglass-end">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-hourglass-end"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-hourglass-half">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-hourglass-half"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-hourglass-start">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-hourglass-start"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-house-damage">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-house-damage"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-houzz">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-houzz"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-hryvnia">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-hryvnia"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-html5">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-html5"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-hubspot">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-hubspot"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-i-cursor">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-i-cursor"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-ice-cream">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-ice-cream"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-icicles">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-icicles"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-id-badge">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-id-badge"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-id-badge">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-id-badge"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-id-card">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-id-card"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-id-card">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-id-card"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-id-card-alt">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-id-card-alt"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-igloo">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-igloo"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-image">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-image"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-image">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-image"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-images">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-images"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-images">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-images"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-imdb">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-imdb"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-inbox">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-inbox"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-indent">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-indent"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-industry">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-industry"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-infinity">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-infinity"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-info">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-info"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-info-circle">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-info-circle"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-instagram">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-instagram"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-intercom">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-intercom"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-internet-explorer">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-internet-explorer"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-invision">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-invision"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-ioxhost">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-ioxhost"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-italic">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-italic"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-itunes">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-itunes"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-itunes-note">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-itunes-note"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-java">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-java"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-jedi">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-jedi"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-jedi-order">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-jedi-order"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-jenkins">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-jenkins"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-jira">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-jira"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-joget">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-joget"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-joint">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-joint"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-joomla">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-joomla"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-journal-whills">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-journal-whills"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-js">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-js"></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-js-square">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-js-square"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-jsfiddle">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-jsfiddle"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-kaaba">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-kaaba"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-kaggle">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-kaggle"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-key">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-key"></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-keybase">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-keybase"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-keyboard">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-keyboard"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-keyboard">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-keyboard"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-keycdn">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-keycdn"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-khanda">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-khanda"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-kickstarter">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-kickstarter"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-kickstarter-k">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-kickstarter-k"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-kiss">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-kiss"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-kiss">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-kiss"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-kiss-beam">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-kiss-beam"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-kiss-beam">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-kiss-beam"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-kiss-wink-heart">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-kiss-wink-heart"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-kiss-wink-heart">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-kiss-wink-heart"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-kiwi-bird">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-kiwi-bird"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-korvue">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-korvue"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-landmark">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-landmark"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-language">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-language"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-laptop">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-laptop"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-laptop-code">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-laptop-code"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-laptop-medical">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-laptop-medical"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-laravel">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-laravel"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-lastfm">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-lastfm"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-lastfm-square">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-lastfm-square"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-laugh">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-laugh"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-laugh">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-laugh"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-laugh-beam">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-laugh-beam"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-laugh-beam">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-laugh-beam"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-laugh-squint">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-laugh-squint"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-laugh-squint">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-laugh-squint"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-laugh-wink">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-laugh-wink"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-laugh-wink">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-laugh-wink"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-layer-group">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-layer-group"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-leaf">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-leaf"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-leanpub">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-leanpub"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-lemon">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-lemon"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-lemon">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-lemon"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-less">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-less"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-less-than">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-less-than"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-less-than-equal">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-less-than-equal"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-level-down-alt">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-level-down-alt"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-level-up-alt">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-level-up-alt"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-life-ring">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-life-ring"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-life-ring">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-life-ring"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-lightbulb">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-lightbulb"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-lightbulb">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-lightbulb"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-line">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-line"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-link">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-link"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-linkedin">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-linkedin"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-linkedin-in">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-linkedin-in"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-linode">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-linode"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-linux">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-linux"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-lira-sign">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-lira-sign"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-list">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-list"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-list-alt">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-list-alt"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-list-alt">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-list-alt"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-list-ol">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-list-ol"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-list-ul">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-list-ul"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-location-arrow">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-location-arrow"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-lock">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-lock"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-lock-open">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-lock-open"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-long-arrow-alt-down">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-long-arrow-alt-down"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-long-arrow-alt-left">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-long-arrow-alt-left"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-long-arrow-alt-right">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-long-arrow-alt-right"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-long-arrow-alt-up">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-long-arrow-alt-up"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-low-vision">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-low-vision"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-luggage-cart">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-luggage-cart"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-lyft">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-lyft"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-magento">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-magento"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-magic">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-magic"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-magnet">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-magnet"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-mail-bulk">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-mail-bulk"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-mailchimp">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-mailchimp"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-male">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-male"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-mandalorian">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-mandalorian"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-map">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-map"></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-map">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-map"></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-map-marked">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-map-marked"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-map-marked-alt">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-map-marked-alt"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-map-marker">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-map-marker"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-map-marker-alt">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-map-marker-alt"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-map-pin">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-map-pin"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-map-signs">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-map-signs"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-markdown">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-markdown"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-marker">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-marker"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-mars">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-mars"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-mars-double">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-mars-double"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-mars-stroke">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-mars-stroke"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-mars-stroke-h">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-mars-stroke-h"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-mars-stroke-v">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-mars-stroke-v"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-mask">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-mask"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-mastodon">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-mastodon"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-maxcdn">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-maxcdn"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-medal">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-medal"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-medapps">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-medapps"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-medium">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-medium"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-medium-m">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-medium-m"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-medkit">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-medkit"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-medrt">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-medrt"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-meetup">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-meetup"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-megaport">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-megaport"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-meh">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-meh"></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-meh">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-meh"></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-meh-blank">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-meh-blank"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-meh-blank">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-meh-blank"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-meh-rolling-eyes">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-meh-rolling-eyes"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-meh-rolling-eyes">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-meh-rolling-eyes"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-memory">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-memory"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-mendeley">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-mendeley"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-menorah">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-menorah"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-mercury">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-mercury"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-meteor">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-meteor"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-microchip">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-microchip"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-microphone">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-microphone"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-microphone-alt">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-microphone-alt"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-microphone-alt-slash">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-microphone-alt-slash"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-microphone-slash">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-microphone-slash"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-microscope">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-microscope"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-microsoft">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-microsoft"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-minus">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-minus"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-minus-circle">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-minus-circle"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-minus-square">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-minus-square"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-minus-square">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-minus-square"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-mitten">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-mitten"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-mix">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-mix"></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-mixcloud">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-mixcloud"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-mizuni">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-mizuni"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-mobile">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-mobile"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-mobile-alt">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-mobile-alt"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-modx">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-modx"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-monero">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-monero"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-money-bill">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-money-bill"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-money-bill-alt">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-money-bill-alt"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-money-bill-alt">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-money-bill-alt"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-money-bill-wave">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-money-bill-wave"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-money-bill-wave-alt">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-money-bill-wave-alt"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-money-check">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-money-check"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-money-check-alt">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-money-check-alt"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-monument">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-monument"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-moon">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-moon"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-moon">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-moon"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-mortar-pestle">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-mortar-pestle"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-mosque">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-mosque"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-motorcycle">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-motorcycle"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-mountain">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-mountain"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-mouse-pointer">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-mouse-pointer"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-mug-hot">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-mug-hot"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-music">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-music"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-napster">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-napster"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-neos">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-neos"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-network-wired">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-network-wired"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-neuter">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-neuter"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-newspaper">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-newspaper"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-newspaper">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-newspaper"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-nimblr">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-nimblr"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-nintendo-switch">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-nintendo-switch"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-node">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-node"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-node-js">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-node-js"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-not-equal">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-not-equal"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-notes-medical">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-notes-medical"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-npm">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-npm"></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-ns8">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-ns8"></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-nutritionix">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-nutritionix"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-object-group">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-object-group"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-object-group">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-object-group"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-object-ungroup">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-object-ungroup"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-object-ungroup">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-object-ungroup"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-odnoklassniki">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-odnoklassniki"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-odnoklassniki-square">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-odnoklassniki-square"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-oil-can">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-oil-can"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-old-republic">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-old-republic"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-om">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-om"></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-opencart">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-opencart"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-openid">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-openid"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-opera">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-opera"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-optin-monster">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-optin-monster"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-osi">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-osi"></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-otter">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-otter"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-outdent">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-outdent"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-page4">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-page4"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-pagelines">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-pagelines"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-pager">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-pager"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-paint-brush">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-paint-brush"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-paint-roller">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-paint-roller"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-palette">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-palette"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-palfed">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-palfed"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-pallet">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-pallet"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-paper-plane">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-paper-plane"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-paper-plane">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-paper-plane"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-paperclip">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-paperclip"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-parachute-box">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-parachute-box"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-paragraph">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-paragraph"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-parking">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-parking"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-passport">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-passport"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-pastafarianism">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-pastafarianism"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-paste">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-paste"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-patreon">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-patreon"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-pause">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-pause"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-pause-circle">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-pause-circle"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-pause-circle">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-pause-circle"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-paw">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-paw"></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-paypal">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-paypal"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-peace">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-peace"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-pen">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-pen"></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-pen-alt">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-pen-alt"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-pen-fancy">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-pen-fancy"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-pen-nib">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-pen-nib"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-pen-square">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-pen-square"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-pencil-alt">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-pencil-alt"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-pencil-ruler">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-pencil-ruler"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-penny-arcade">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-penny-arcade"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-people-carry">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-people-carry"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-pepper-hot">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-pepper-hot"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-percent">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-percent"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-percentage">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-percentage"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-periscope">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-periscope"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-person-booth">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-person-booth"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-phabricator">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-phabricator"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-phoenix-framework">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-phoenix-framework"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-phoenix-squadron">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-phoenix-squadron"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-phone">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-phone"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-phone-slash">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-phone-slash"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-phone-square">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-phone-square"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-phone-volume">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-phone-volume"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-php">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-php"></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-pied-piper">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-pied-piper"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-pied-piper-alt">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-pied-piper-alt"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-pied-piper-hat">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-pied-piper-hat"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-pied-piper-pp">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-pied-piper-pp"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-piggy-bank">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-piggy-bank"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-pills">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-pills"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-pinterest">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-pinterest"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-pinterest-p">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-pinterest-p"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-pinterest-square">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-pinterest-square"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-pizza-slice">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-pizza-slice"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-place-of-worship">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-place-of-worship"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-plane">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-plane"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-plane-arrival">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-plane-arrival"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-plane-departure">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-plane-departure"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-play">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-play"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-play-circle">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-play-circle"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-play-circle">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-play-circle"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-playstation">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-playstation"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-plug">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-plug"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-plus">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-plus"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-plus-circle">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-plus-circle"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-plus-square">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-plus-square"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-plus-square">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-plus-square"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-podcast">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-podcast"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-poll">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-poll"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-poll-h">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-poll-h"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-poo">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-poo"></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-poo-storm">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-poo-storm"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-poop">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-poop"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-portrait">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-portrait"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-pound-sign">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-pound-sign"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-power-off">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-power-off"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-pray">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-pray"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-praying-hands">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-praying-hands"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-prescription">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-prescription"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-prescription-bottle">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-prescription-bottle"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-prescription-bottle-alt">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-prescription-bottle-alt"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-print">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-print"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-procedures">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-procedures"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-product-hunt">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-product-hunt"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-project-diagram">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-project-diagram"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-pushed">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-pushed"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-puzzle-piece">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-puzzle-piece"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-python">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-python"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-qq">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-qq"></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-qrcode">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-qrcode"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-question">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-question"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-question-circle">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-question-circle"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-question-circle">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-question-circle"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-quidditch">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-quidditch"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-quinscape">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-quinscape"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-quora">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-quora"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-quote-left">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-quote-left"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-quote-right">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-quote-right"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-quran">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-quran"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-r-project">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-r-project"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-radiation">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-radiation"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-radiation-alt">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-radiation-alt"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-rainbow">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-rainbow"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-random">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-random"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-raspberry-pi">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-raspberry-pi"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-ravelry">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-ravelry"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-react">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-react"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-reacteurope">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-reacteurope"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-readme">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-readme"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-rebel">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-rebel"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-receipt">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-receipt"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-recycle">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-recycle"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-red-river">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-red-river"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-reddit">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-reddit"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-reddit-alien">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-reddit-alien"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-reddit-square">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-reddit-square"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-redhat">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-redhat"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-redo">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-redo"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-redo-alt">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-redo-alt"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-registered">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-registered"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-registered">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-registered"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-renren">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-renren"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-reply">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-reply"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-reply-all">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-reply-all"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-replyd">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-replyd"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-republican">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-republican"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-researchgate">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-researchgate"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-resolving">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-resolving"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-restroom">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-restroom"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-retweet">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-retweet"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-rev">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-rev"></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-ribbon">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-ribbon"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-ring">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-ring"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-road">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-road"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-robot">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-robot"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-rocket">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-rocket"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-rocketchat">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-rocketchat"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-rockrms">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-rockrms"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-route">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-route"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-rss">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-rss"></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-rss-square">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-rss-square"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-ruble-sign">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-ruble-sign"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-ruler">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-ruler"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-ruler-combined">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-ruler-combined"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-ruler-horizontal">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-ruler-horizontal"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-ruler-vertical">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-ruler-vertical"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-running">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-running"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-rupee-sign">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-rupee-sign"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-sad-cry">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-sad-cry"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-sad-cry">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-sad-cry"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-sad-tear">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-sad-tear"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-sad-tear">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-sad-tear"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-safari">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-safari"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-sass">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-sass"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-satellite">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-satellite"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-satellite-dish">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-satellite-dish"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-save">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-save"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-save">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-save"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-schlix">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-schlix"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-school">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-school"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-screwdriver">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-screwdriver"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-scribd">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-scribd"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-scroll">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-scroll"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-sd-card">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-sd-card"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-search">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-search"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-search-dollar">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-search-dollar"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-search-location">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-search-location"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-search-minus">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-search-minus"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-search-plus">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-search-plus"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-searchengin">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-searchengin"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-seedling">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-seedling"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-sellcast">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-sellcast"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-sellsy">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-sellsy"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-server">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-server"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-servicestack">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-servicestack"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-shapes">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-shapes"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-share">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-share"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-share-alt">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-share-alt"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-share-alt-square">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-share-alt-square"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-share-square">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-share-square"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-share-square">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-share-square"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-shekel-sign">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-shekel-sign"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-shield-alt">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-shield-alt"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-ship">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-ship"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-shipping-fast">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-shipping-fast"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-shirtsinbulk">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-shirtsinbulk"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-shoe-prints">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-shoe-prints"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-shopping-bag">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-shopping-bag"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-shopping-basket">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-shopping-basket"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-shopping-cart">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-shopping-cart"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-shopware">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-shopware"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-shower">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-shower"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-shuttle-van">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-shuttle-van"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-sign">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-sign"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-sign-in-alt">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-sign-in-alt"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-sign-language">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-sign-language"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-sign-out-alt">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-sign-out-alt"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-signal">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-signal"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-signature">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-signature"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-sim-card">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-sim-card"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-simplybuilt">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-simplybuilt"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-sistrix">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-sistrix"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-sitemap">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-sitemap"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-sith">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-sith"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-skating">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-skating"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-sketch">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-sketch"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-skiing">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-skiing"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-skiing-nordic">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-skiing-nordic"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-skull">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-skull"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-skull-crossbones">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-skull-crossbones"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-skyatlas">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-skyatlas"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-skype">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-skype"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-slack">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-slack"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-slack-hash">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-slack-hash"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-slash">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-slash"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-sleigh">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-sleigh"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-sliders-h">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-sliders-h"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-slideshare">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-slideshare"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-smile">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-smile"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-smile">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-smile"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-smile-beam">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-smile-beam"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-smile-beam">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-smile-beam"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-smile-wink">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-smile-wink"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-smile-wink">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-smile-wink"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-smog">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-smog"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-smoking">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-smoking"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-smoking-ban">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-smoking-ban"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-sms">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-sms"></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-snapchat">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-snapchat"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-snapchat-ghost">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-snapchat-ghost"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-snapchat-square">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-snapchat-square"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-snowboarding">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-snowboarding"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-snowflake">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-snowflake"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-snowflake">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-snowflake"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-snowman">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-snowman"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-snowplow">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-snowplow"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-socks">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-socks"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-solar-panel">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-solar-panel"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-sort">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-sort"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-sort-alpha-down">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-sort-alpha-down"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-sort-alpha-up">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-sort-alpha-up"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-sort-amount-down">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-sort-amount-down"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-sort-amount-up">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-sort-amount-up"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-sort-down">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-sort-down"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-sort-numeric-down">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-sort-numeric-down"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-sort-numeric-up">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-sort-numeric-up"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-sort-up">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-sort-up"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-soundcloud">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-soundcloud"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-sourcetree">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-sourcetree"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-spa">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-spa"></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-space-shuttle">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-space-shuttle"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-speakap">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-speakap"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-spider">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-spider"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-spinner">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-spinner"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-splotch">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-splotch"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-spotify">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-spotify"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-spray-can">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-spray-can"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-square">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-square"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-square">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-square"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-square-full">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-square-full"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-square-root-alt">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-square-root-alt"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-squarespace">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-squarespace"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-stack-exchange">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-stack-exchange"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-stack-overflow">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-stack-overflow"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-stamp">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-stamp"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-star">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-star"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-star">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-star"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-star-and-crescent">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-star-and-crescent"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-star-half">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-star-half"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-star-half">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-star-half"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-star-half-alt">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-star-half-alt"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-star-of-david">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-star-of-david"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-star-of-life">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-star-of-life"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-staylinked">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-staylinked"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-steam">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-steam"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-steam-square">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-steam-square"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-steam-symbol">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-steam-symbol"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-step-backward">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-step-backward"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-step-forward">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-step-forward"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-stethoscope">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-stethoscope"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-sticker-mule">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-sticker-mule"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-sticky-note">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-sticky-note"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-sticky-note">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-sticky-note"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-stop">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-stop"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-stop-circle">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-stop-circle"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-stop-circle">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-stop-circle"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-stopwatch">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-stopwatch"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-store">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-store"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-store-alt">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-store-alt"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-strava">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-strava"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-stream">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-stream"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-street-view">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-street-view"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-strikethrough">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-strikethrough"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-stripe">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-stripe"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-stripe-s">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-stripe-s"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-stroopwafel">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-stroopwafel"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-studiovinari">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-studiovinari"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-stumbleupon">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-stumbleupon"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-stumbleupon-circle">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-stumbleupon-circle"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-subscript">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-subscript"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-subway">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-subway"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-suitcase">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-suitcase"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-suitcase-rolling">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-suitcase-rolling"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-sun">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-sun"></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-sun">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-sun"></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-superpowers">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-superpowers"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-superscript">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-superscript"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-supple">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-supple"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-surprise">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-surprise"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-surprise">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-surprise"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-suse">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-suse"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-swatchbook">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-swatchbook"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-swimmer">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-swimmer"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-swimming-pool">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-swimming-pool"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-synagogue">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-synagogue"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-sync">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-sync"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-sync-alt">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-sync-alt"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-syringe">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-syringe"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-table">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-table"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-table-tennis">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-table-tennis"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-tablet">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-tablet"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-tablet-alt">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-tablet-alt"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-tablets">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-tablets"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-tachometer-alt">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-tachometer-alt"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-tag">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-tag"></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-tags">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-tags"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-tape">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-tape"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-tasks">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-tasks"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-taxi">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-taxi"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-teamspeak">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-teamspeak"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-teeth">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-teeth"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-teeth-open">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-teeth-open"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-telegram">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-telegram"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-telegram-plane">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-telegram-plane"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-temperature-high">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-temperature-high"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-temperature-low">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-temperature-low"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-tencent-weibo">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-tencent-weibo"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-tenge">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-tenge"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-terminal">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-terminal"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-text-height">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-text-height"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-text-width">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-text-width"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-th">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-th"></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-th-large">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-th-large"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-th-list">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-th-list"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-the-red-yeti">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-the-red-yeti"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-theater-masks">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-theater-masks"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-themeco">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-themeco"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-themeisle">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-themeisle"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-thermometer">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-thermometer"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-thermometer-empty">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-thermometer-empty"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-thermometer-full">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-thermometer-full"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-thermometer-half">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-thermometer-half"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-thermometer-quarter">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-thermometer-quarter"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-thermometer-three-quarters">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-thermometer-three-quarters"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-think-peaks">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-think-peaks"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-thumbs-down">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-thumbs-down"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-thumbs-down">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-thumbs-down"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-thumbs-up">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-thumbs-up"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-thumbs-up">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-thumbs-up"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-thumbtack">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-thumbtack"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-ticket-alt">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-ticket-alt"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-times">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-times"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-times-circle">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-times-circle"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-times-circle">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-times-circle"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-tint">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-tint"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-tint-slash">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-tint-slash"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-tired">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-tired"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-tired">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-tired"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-toggle-off">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-toggle-off"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-toggle-on">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-toggle-on"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-toilet">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-toilet"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-toilet-paper">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-toilet-paper"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-toolbox">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-toolbox"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-tools">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-tools"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-tooth">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-tooth"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-torah">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-torah"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-torii-gate">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-torii-gate"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-tractor">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-tractor"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-trade-federation">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-trade-federation"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-trademark">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-trademark"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-traffic-light">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-traffic-light"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-train">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-train"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-tram">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-tram"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-transgender">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-transgender"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-transgender-alt">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-transgender-alt"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-trash">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-trash"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-trash-alt">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-trash-alt"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-trash-alt">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-trash-alt"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-trash-restore">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-trash-restore"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-trash-restore-alt">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-trash-restore-alt"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-tree">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-tree"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-trello">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-trello"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-tripadvisor">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-tripadvisor"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-trophy">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-trophy"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-truck">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-truck"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-truck-loading">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-truck-loading"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-truck-monster">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-truck-monster"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-truck-moving">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-truck-moving"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-truck-pickup">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-truck-pickup"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-tshirt">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-tshirt"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-tty">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-tty"></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-tumblr">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-tumblr"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-tumblr-square">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-tumblr-square"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-tv">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-tv"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-twitch">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-twitch"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-twitter">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-twitter"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-twitter-square">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-twitter-square"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-typo3">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-typo3"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-uber">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-uber"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-ubuntu">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-ubuntu"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-uikit">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-uikit"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-umbrella">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-umbrella"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-umbrella-beach">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-umbrella-beach"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-underline">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-underline"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-undo">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-undo"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-undo-alt">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-undo-alt"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-uniregistry">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-uniregistry"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-universal-access">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-universal-access"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-university">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-university"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-unlink">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-unlink"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-unlock">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-unlock"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-unlock-alt">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-unlock-alt"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-untappd">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-untappd"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-upload">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-upload"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-ups">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-ups"></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-usb">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-usb"></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-user">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-user"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-user">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-user"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-user-alt">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-user-alt"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-user-alt-slash">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-user-alt-slash"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-user-astronaut">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-user-astronaut"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-user-check">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-user-check"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-user-circle">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-user-circle"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-user-circle">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-user-circle"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-user-clock">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-user-clock"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-user-cog">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-user-cog"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-user-edit">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-user-edit"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-user-friends">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-user-friends"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-user-graduate">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-user-graduate"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-user-injured">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-user-injured"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-user-lock">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-user-lock"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-user-md">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-user-md"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-user-minus">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-user-minus"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-user-ninja">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-user-ninja"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-user-nurse">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-user-nurse"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-user-plus">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-user-plus"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-user-secret">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-user-secret"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-user-shield">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-user-shield"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-user-slash">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-user-slash"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-user-tag">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-user-tag"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-user-tie">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-user-tie"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-user-times">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-user-times"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-users">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-users"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-users-cog">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-users-cog"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-usps">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-usps"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-ussunnah">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-ussunnah"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-utensil-spoon">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-utensil-spoon"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-utensils">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-utensils"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-vaadin">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-vaadin"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-vector-square">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-vector-square"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-venus">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-venus"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-venus-double">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-venus-double"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-venus-mars">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-venus-mars"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-viacoin">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-viacoin"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-viadeo">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-viadeo"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-viadeo-square">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-viadeo-square"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-vial">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-vial"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-vials">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-vials"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-viber">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-viber"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-video">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-video"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-video-slash">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-video-slash"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-vihara">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-vihara"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-vimeo">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-vimeo"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-vimeo-square">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-vimeo-square"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-vimeo-v">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-vimeo-v"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-vine">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-vine"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-vk">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-vk"></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-vnv">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-vnv"></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-volleyball-ball">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-volleyball-ball"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-volume-down">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-volume-down"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-volume-mute">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-volume-mute"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-volume-off">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-volume-off"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-volume-up">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-volume-up"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-vote-yea">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-vote-yea"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-vr-cardboard">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-vr-cardboard"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-vuejs">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-vuejs"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-walking">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-walking"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-wallet">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-wallet"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-warehouse">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-warehouse"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-water">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-water"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-weebly">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-weebly"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-weibo">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-weibo"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-weight">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-weight"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-weight-hanging">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-weight-hanging"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-weixin">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-weixin"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-whatsapp">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-whatsapp"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-whatsapp-square">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-whatsapp-square"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-wheelchair">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-wheelchair"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-whmcs">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-whmcs"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-wifi">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-wifi"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-wikipedia-w">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-wikipedia-w"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-wind">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-wind"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-window-close">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-window-close"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-window-close">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-window-close"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-window-maximize">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-window-maximize"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-window-maximize">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-window-maximize"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-window-minimize">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-window-minimize"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-window-minimize">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-window-minimize"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-window-restore">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-window-restore"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="far fa-window-restore">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x far fa-window-restore"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-windows">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-windows"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-wine-bottle">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-wine-bottle"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-wine-glass">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-wine-glass"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-wine-glass-alt">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-wine-glass-alt"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-wix">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-wix"></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-wizards-of-the-coast">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-wizards-of-the-coast"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-wolf-pack-battalion">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-wolf-pack-battalion"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-won-sign">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-won-sign"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-wordpress">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-wordpress"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-wordpress-simple">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-wordpress-simple"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-wpbeginner">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-wpbeginner"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-wpexplorer">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-wpexplorer"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-wpforms">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-wpforms"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-wpressr">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-wpressr"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-wrench">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-wrench"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-x-ray">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-x-ray"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-xbox">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-xbox"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-xing">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-xing"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-xing-square">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-xing-square"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-y-combinator">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-y-combinator"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-yahoo">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-yahoo"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-yandex">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-yandex"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-yandex-international">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-yandex-international"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-yarn">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-yarn"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-yelp">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-yelp"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-yen-sign">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-yen-sign"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fas fa-yin-yang">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fas fa-yin-yang"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-yoast">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-yoast"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-youtube">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-youtube"></i>
                            </div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-youtube-square">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-youtube-square"
                                ></i></div>
                        </li>
                        <li class="list-inline-item  clr m-4 " data-toggle="tooltip"
                            data-original-title="fab fa-zhihu">
                            <div class="iconview m-3 d-flex justify-content-center"><i
                                        class=".align-self-center fa-2x fab fa-zhihu"></i>
                            </div>
                        </li>
                    </ul>


                </div>
            </div>

        </div>
    </section>
@stop
@section('footer_scripts')
    <!--   page level js ----------->
    <script src="{{ asset('js/pages/icons.js')}}"></script>
    <!-- end of page level js -->
@stop
