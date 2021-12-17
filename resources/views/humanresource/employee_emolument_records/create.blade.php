@extends('layouts.custom')

{{-- Page title --}}
@section('title')
Employee Emolument Record @parent
@stop

@section('content')
    <section class="content-header">
    <div aria-label="breadcrumb" class="card-breadcrumb">
        <h1>{{ __('Create New') }} Employee Emolument Record</h1>
    </div>
    <div class="separator-breadcrumb border-top"></div>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="card">
            <div class="card-body">
                {!! Form::open(['route' => 'humanresource.employeeEmolumentRecords.store','class' => 'form-horizontal']) !!}

                    @include('humanresource.employee_emolument_records.fields')

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
