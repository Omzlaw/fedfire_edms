{{-- @extends('layouts.default') --}}
@extends('layouts.custom')

{{-- Page title --}}
@section('title')
Employee Qualification @parent
@stop

@section('content')
   <section class="content-header">
    <div aria-label="breadcrumb" class="card-breadcrumb">
        <h1>{{ __('Edit') }} Employee Qualification</h1>
    </div>
    {{-- <div class="separator-breadcrumb border-top"></div> --}}
    </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="card">
           <div class="card-body">
                {!! Form::model($employeeQualification, ['route' => ['humanresource.employeeQualifications.update', $employeeQualification->id], 'method' => 'patch', 'files' => true,'class' => 'form-horizontal']) !!}

                    @include('humanresource.employee_qualifications.fields',[$employees])

                {!! Form::close() !!}
           </div>
       </div>
   </div>
@endsection
