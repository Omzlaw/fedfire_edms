{{-- @extends('layouts.default') --}}
@extends('layouts.custom')

{{-- Page title --}}
@section('title')
Employee's Children @parent
@stop

@section('content')
    <section class="content-header">
    <div aria-label="breadcrumb" class="card-breadcrumb">
        <h1>{{ __('Create New') }} Employee's Child</h1>
    </div>
    {{-- <div class="separator-breadcrumb border-top"></div> --}}
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="card mb-100">
            <div class="card-body">
                {!! Form::open(['route' => 'humanresource.employeeChildrens.store', 'files' => true,'class' => 'form-horizontal']) !!}

                    @include('humanresource.employee_childrens.fields',[$employees])

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
