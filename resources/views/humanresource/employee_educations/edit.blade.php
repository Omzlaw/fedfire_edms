@extends('layouts.default')

{{-- Page title --}}
@section('title')
Employee Education @parent
@stop

@section('content')
   <section class="content-header">
    <div aria-label="breadcrumb" class="card-breadcrumb">
        <h1>{{ __('Edit') }} Employee Education</h1>
    </div>
    <div class="separator-breadcrumb border-top"></div>
    </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="card">
           <div class="card-body">
                {!! Form::model($employeeEducation, ['route' => ['humanresource.employeeEducations.update', $employeeEducation->id], 'method' => 'patch', 'files' => true,'class' => 'form-horizontal']) !!}

                    @include('humanresource.employee_educations.fields')

                {!! Form::close() !!}
           </div>
       </div>
   </div>
@endsection
