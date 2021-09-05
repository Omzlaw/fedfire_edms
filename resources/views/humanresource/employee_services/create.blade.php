@extends('layouts.custom')

{{-- Page title --}}
@section('title')
Employee Service @parent
@stop

@section('content')
    <section class="content-header">
    <div aria-label="breadcrumb" class="card-breadcrumb">
        <h1>{{ __('Create New') }} Employee Service</h1>
    </div>
    <div class="separator-breadcrumb border-top"></div>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="card">
            <div class="card-body">
                {!! Form::open(['route' => 'humanresource.employeeServices.store','class' => 'form-horizontal']) !!}

                    @include('humanresource.employee_services.fields',[$states, $geo_political_zones])

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
