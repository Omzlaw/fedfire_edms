@extends('layouts.custom')

{{-- Page title --}}
@section('title')
Employee Service Record @parent
@stop

@section('content')
   <section class="content-header">
    <div aria-label="breadcrumb" class="card-breadcrumb">
        <h1>{{ __('Edit') }} Employee Service Record</h1>
    </div>
    <div class="separator-breadcrumb border-top"></div>
    </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="card">
           <div class="card-body">
                {!! Form::model($employeeServiceRecord, ['route' => ['humanresource.employeeServiceRecords.update', $employeeServiceRecord->id], 'method' => 'patch','class' => 'form-horizontal']) !!}

                    @include('humanresource.employee_service_records.fields')

                {!! Form::close() !!}
           </div>
       </div>
   </div>
@endsection
