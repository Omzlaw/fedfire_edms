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

    <div class="clearfix"></div>
    <div class="card mb-100">
        <section class="card-header">
            <h5 class="card-title d-inline">File Directories</h5>
            <span class="float-right">
                <a class="btn secondary-color-bg pull-right" href="{{ route('shared.fileDirectories.create') }}">Add New</a>
            </span>
        </section>
        <div class="card-body">
            @include('shared.file_directories.table')
        </div>
    </div>
    <div class="text-center">
        
    </div>
</div>
@endsection
