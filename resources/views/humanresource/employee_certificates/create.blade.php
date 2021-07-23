@extends('layouts.default')

{{-- Page title --}}
@section('title')
Employee Certificates @parent
@stop

@section('content')
    <section class="content-header">
    <div aria-label="breadcrumb" class="card-breadcrumb">
        <h1>{{ __('Create New') }} Employee Certificates</h1>
    </div>
    <div class="separator-breadcrumb border-top"></div>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="card">
            <div class="card-body">
                {!! Form::open(['route' => 'humanresource.employeeCertificates.store', 'files' => true,'class' => 'form-horizontal']) !!}

                    @include('humanresource.employee_certificates.fields',[$employees])

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
