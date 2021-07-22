@extends('layouts.default')

{{-- Page title --}}
@section('title')
Employee Termination @parent
@stop

@section('content')
   <section class="content-header">
    <div aria-label="breadcrumb" class="card-breadcrumb">
        <h1>{{ __('Edit') }} Employee Termination</h1>
    </div>
    <div class="separator-breadcrumb border-top"></div>
    </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="card">
           <div class="card-body">
                {!! Form::model($employeeTermination, ['route' => ['humanresource.employeeTerminations.update', $employeeTermination->id], 'method' => 'patch', 'files' => true,'class' => 'form-horizontal']) !!}

                    @include('humanresource.employee_terminations.fields')

                {!! Form::close() !!}
           </div>
       </div>
   </div>
@endsection
