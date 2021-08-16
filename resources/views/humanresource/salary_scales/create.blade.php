@extends('layouts.default')

{{-- Page title --}}
@section('title')
Salary Scale @parent
@stop

@section('content')
    <section class="content-header">
    <div aria-label="breadcrumb" class="card-breadcrumb">
        <h1>{{ __('Create New') }} Salary Scale</h1>
    </div>
    {{-- <div class="separator-breadcrumb border-top"></div> --}}
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="card">
            <div class="card-body">
                {!! Form::open(['route' => 'humanresource.salaryScales.store','class' => 'form-horizontal']) !!}

                    @include('humanresource.salary_scales.fields')

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
