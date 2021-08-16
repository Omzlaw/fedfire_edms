{{-- @extends('layouts.default') --}}
@extends('layouts.custom')

{{-- Page title --}}
@section('title')
Employee Termination @parent
@stop

@section('content')
    <section class="content-header">
    <div aria-label="breadcrumb" class="card-breadcrumb">
        <h1>{{ __('Create New') }} Employee Termination</h1>
    </div>
    {{-- <div class="separator-breadcrumb border-top"></div> --}}
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="card">
            <div class="card-body">
                {!! Form::open(['route' => 'humanresource.employeeTerminations.store', 'files' => true,'class' => 'form-horizontal']) !!}

                    @include('humanresource.employee_terminations.fields', [$employees, $termination_types])

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
