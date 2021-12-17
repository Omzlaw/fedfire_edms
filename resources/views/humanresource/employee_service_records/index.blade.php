@extends('layouts.default')

{{-- Page title --}}
@section('title')
Employee Service Records @parent
@stop

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div aria-label="breadcrumb" class="card-breadcrumb">
        <h1>Employee Service Records</h1>
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
            <h5 class="card-title d-inline">Employee Service Records</h5>
            <span class="float-right">
                <a class="btn btn-danger pull-right" href="{{ route('humanresource.employeeServiceRecords.create') }}">Add New</a>
            </span>
        </section>
        <div class="card-body">
            @include('humanresource.employee_service_records.table')
        </div>
    </div>
    <div class="text-center">
        
    </div>
</div>
@endsection
