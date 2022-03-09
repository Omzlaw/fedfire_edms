@extends('layouts.default')

{{-- Page title --}}
@section('title')
    Employee @parent
@stop

@section('content')
    <section class="content-header">
        <div aria-label="breadcrumb" class="card-breadcrumb">
            <h1>{{ __('Edit') }} Employees</h1>
        </div>
        {{-- <div class="separator-breadcrumb border-top"></div> --}}
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="card mb-100">
            <div class="card-body">
                {!! Form::open(['route' => 'employeeMultipleEdit', 'files' => true, 'class' => 'form-horizontal', 'id' => 'employee-form']) !!}

                <div class="row">
                    @include('humanresource.employees.editMultiplefields')
                </div>


                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection


