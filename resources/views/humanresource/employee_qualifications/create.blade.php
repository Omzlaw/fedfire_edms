@extends('layouts.default')

{{-- Page title --}}
@section('title')
Employee Qualification @parent
@stop

@section('content')
    <section class="content-header">
    <div aria-label="breadcrumb" class="card-breadcrumb">
        <h1>{{ __('Create New') }} Employee Qualification</h1>
    </div>
    <div class="separator-breadcrumb border-top"></div>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="card">
            <div class="card-body">
                {!! Form::open(['route' => 'humanresource.employeeQualifications.store', 'files' => true,'class' => 'form-horizontal']) !!}

                    @include('humanresource.employee_qualifications.fields',[$employees])

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
