@extends('layouts.default')

{{-- Page title --}}
@section('title')
Salary Scales @parent
@stop

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div aria-label="breadcrumb" class="card-breadcrumb">
        <h1>Salary Scales</h1>
    </div>
    <div class="separator-breadcrumb border-top"></div>
</section>

<!-- Main content -->
<div class="content">
    <div class="clearfix"></div>

    @include('flash::message')

    <div class="clearfix"></div>
    <div class="card">
        <section class="card-header">
            <h5 class="card-title d-inline">Salary Scales</h5>
            <span class="float-right">
                <a class="btn secondary-color-bgpull-right" href="{{ route('humanresource.salaryScales.create') }}">Add New</a>
            </span>
        </section>
        <div class="card-body">
            @include('humanresource.salary_scales.table')
        </div>
    </div>
    <div class="text-center">
        
    </div>
</div>
@endsection
