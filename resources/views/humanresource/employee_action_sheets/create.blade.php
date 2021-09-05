{{-- @extends('layouts.default') --}}
@extends('layouts.custom')

{{-- Page title --}}
@section('title')
Employee Action Sheet @parent
@stop

@section('content')
    <section class="content-header" >
    <div aria-label="breadcrumb" class="card-breadcrumb">
        <h1>{{ __('Create New') }} Employee Action Sheet</h1>
    </div>
    {{-- <div class="separator-breadcrumb border-top"></div> --}}
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="card mb-100">
            <div class="card-body">
                {!! Form::open(['route' => 'humanresource.employeeActionSheets.store','class' => 'form-horizontal']) !!}

                    @include('humanresource.employee_action_sheets.fields',[$employees])  

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
