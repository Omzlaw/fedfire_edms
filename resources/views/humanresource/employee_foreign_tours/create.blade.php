@extends('layouts.default')

{{-- Page title --}}
@section('title')
Employee Foreign Tours @parent
@stop

@section('content')
    <section class="content-header">
    <div aria-label="breadcrumb" class="card-breadcrumb">
        <h1>{{ __('Create New') }} Employee Foreign Tours</h1>
    </div>
    <div class="separator-breadcrumb border-top"></div>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="card">
            <div class="card-body">
                {!! Form::open(['route' => 'humanresource.employeeForeignTours.store', 'files' => true,'class' => 'form-horizontal']) !!}

                    @include('humanresource.employee_foreign_tours.fields', [$employees, $leave_types])

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
