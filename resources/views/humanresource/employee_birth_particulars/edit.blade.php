@extends('layouts.default')

{{-- Page title --}}
@section('title')
Employee Birth Particular @parent
@stop

@section('content')
   <section class="content-header">
    <div aria-label="breadcrumb" class="card-breadcrumb">
        <h1>{{ __('Edit') }} Employee Birth Particular</h1>
    </div>
    <div class="separator-breadcrumb border-top"></div>
    </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="card">
           <div class="card-body">
                {!! Form::model($employeeBirthParticular, ['route' => ['humanresource.employeeBirthParticulars.update', $employeeBirthParticular->id], 'method' => 'patch','class' => 'form-horizontal']) !!}

                    @include('humanresource.employee_birth_particulars.fields')

                {!! Form::close() !!}
           </div>
       </div>
   </div>
@endsection
