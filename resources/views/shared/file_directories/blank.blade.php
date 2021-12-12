@extends('layouts.default')

{{-- Page title --}}
@section('title')
    File Directories @parent
@stop

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div aria-label="breadcrumb" class="card-breadcrumb">
            <h1>File Directories</h1>
        </div>
        {{-- <div class="separator-breadcrumb border-top"></div> --}}
    </section>

    <!-- Main content -->
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="row ml-1 mb-3">
            {!! Form::open(['route' => ['fileClass'], 'class' => 'form-horizontal', 'files' => true]) !!}
            {!! Form::submit('Personnel File', ['name' => 'action', 'class' => 'btn secondary-color-bg mr-10 mt-10', 'value' => 'personnel']) !!}
            {!! Form::submit('Policy File', ['name' => 'action', 'class' => 'mt-10 mr-10 btn custom-outline-primary', 'value' => 'policy']) !!}
            {!! Form::close() !!}
        </div>

        <div class="clearfix"></div>
        <div id="card" class="card mb-100">
        </div>
    </div>

@endsection

