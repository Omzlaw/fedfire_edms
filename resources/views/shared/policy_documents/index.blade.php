@extends('layouts.default')

{{-- Page title --}}
@section('title')
    Policy Documents @parent
@stop

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div aria-label="breadcrumb" class="card-breadcrumb">
            <h1>File Directories</h1>
        </div>
        <div class="separator-breadcrumb border-top"></div>
    </section>

    <!-- Main content -->
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')


        <div class="row ml-1 mb-3">
            {!! Form::open(['route' => ['fileClass'], 'class' => 'form-horizontal', 'files' => true]) !!}
            {!! Form::submit('Personnel File', ['name' => 'action', 'class' => 'btn secondary-color-bg mr-10 mt-10', 'value' => 'personnel']) !!}
            {!! Form::submit('Policy File', ['name' => 'action', 'class' => 'text-white mt-10 mr-10 btn', 'value' => 'policy', 'style' => 'background-color: #DA2016']) !!}
            {!! Form::close() !!}
        </div>

        <div class="clearfix"></div>
        <div class="card">
            <section class="card-header">
                <h5 class="card-title d-inline">Policy Files</h5>
                <span class="float-right">
                    <a class="btn secondary-color-bg pull-right" href="{{ route('shared.policyDocuments.create') }}">Add New</a>
                </span>
            </section>
            <div class="card-body">
                @include('shared.policy_documents.table')
            </div>
        </div>
        <div class="text-center">

        </div>
    </div>
@endsection
