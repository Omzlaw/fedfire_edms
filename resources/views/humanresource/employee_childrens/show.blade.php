@extends('layouts.default')

{{-- Page title --}}
@section('title')
Employee Childrens @parent
@stop

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div aria-label="breadcrumb" class="card-breadcrumb">
        <h1>Employee Children</h1>
    </div>
    <div class="separator-breadcrumb border-top"></div>
</section>

<div class="content">
    <div class="clearfix"></div>

    @include('flash::message')

    <div class="clearfix"></div>
    <div class="card">
        <div class="table-responsive">
        <table class="table table-default">
            @include('humanresource.employee_childrens.show_fields')

            </table>
        </div>
    </div>
    <a href="{{ route('humanresource.employeeChildrens.index') }}"
                class="btn btn-primary">Back</a>
</div>
@endsection
