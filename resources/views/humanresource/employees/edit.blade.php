@extends('layouts.default')

{{-- Page title --}}
@section('title')
    Employee @parent
@stop

@section('content')
    <section class="content-header">
        <div aria-label="breadcrumb" class="card-breadcrumb">
            <h1>{{ __('Edit') }} Employee</h1>

        </div>
        {{-- <div class="separator-breadcrumb border-top"></div> --}}
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="card">
            <div class="card-body">
                {!! Form::model($employee, ['route' => ['humanresource.employees.update', $employee->id], 'method' => 'patch', 'files' => true, 'class' => 'form-horizontal']) !!}

                @include('humanresource.employees.fields',[$countries, $geo_political_zones, $states, $senatorial_zones, $local_govt_areas])

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
