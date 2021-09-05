{{-- @extends('layouts.default') --}}
@extends('layouts.custom')

{{-- Page title --}}
@section('title')
Employee Local Leave @parent
@stop

@section('content')
    <section class="content-header">
    <div aria-label="breadcrumb" class="card-breadcrumb">
        <h1>{{ __('Create New') }} Employee Local Leave</h1>
    </div>
    {{-- <div class="separator-breadcrumb border-top"></div> --}}
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="card mb-100">
            <div class="card-body">
                {!! Form::open(['route' => 'humanresource.employeeLocalLeaves.store', 'files' => true,'class' => 'form-horizontal']) !!}

                    @include('humanresource.employee_local_leaves.fields',[$employees, $leave_types])

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
