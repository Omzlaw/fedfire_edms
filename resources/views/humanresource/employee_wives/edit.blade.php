@extends('layouts.default')

{{-- Page title --}}
@section('title')
Employee Wife @parent
@stop

@section('content')
   <section class="content-header">
    <div aria-label="breadcrumb" class="card-breadcrumb">
        <h1>{{ __('Edit') }} Employee Wife</h1>
    </div>
    <div class="separator-breadcrumb border-top"></div>
    </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="card">
           <div class="card-body">
                {!! Form::model($employeeWife, ['route' => ['humanresource.employeeWives.update', $employeeWife->id], 'method' => 'patch', 'files' => true,'class' => 'form-horizontal']) !!}

                    @include('humanresource.employee_wives.fields',[$employees])

                {!! Form::close() !!}
           </div>
       </div>
   </div>
@endsection
