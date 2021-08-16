{{-- @extends('layouts.default') --}}
@extends('layouts.custom')

{{-- Page title --}}
@section('title')
Employee Wives @parent
@stop

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div aria-label="breadcrumb" class="card-breadcrumb">
        <h1>Employee Wife</h1>
    </div>
    {{-- <div class="separator-breadcrumb border-top"></div> --}}
</section>

<div class="content">
    <div class="clearfix"></div>

    @include('flash::message')

    <div class="clearfix"></div>
    <div class="card">
        <div class="table-responsive">
        <table class="table table-default">
            @include('humanresource.employee_wives.show_fields')

            </table>
        </div>
    </div>
    {{-- <a href="{{ route('humanresource.employeeWives.index') }}"
                class="btn secondary-color-bg">Back</a> --}}
</div>
@endsection
