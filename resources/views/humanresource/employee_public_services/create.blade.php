@extends('layouts.default')

{{-- Page title --}}
@section('title')
Employee Public Service @parent
@stop

@section('content')
    <section class="content-header">
    <div aria-label="breadcrumb" class="card-breadcrumb">
        <h1>{{ __('Create New') }} Employee Public Service</h1>
    </div>
    <div class="separator-breadcrumb border-top"></div>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="card">
            <div class="card-body">
                {!! Form::open(['route' => 'humanresource.employeePublicServices.store','class' => 'form-horizontal']) !!}

                    @include('humanresource.employee_public_services.fields',[$employees])

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
