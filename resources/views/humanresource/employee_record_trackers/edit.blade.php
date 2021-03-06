{{-- @extends('layouts.default') --}}
@extends('layouts.custom')

{{-- Page title --}}
@section('title')
Employee Record Tracker @parent
@stop

@section('content')
   <section class="content-header">
    <div aria-label="breadcrumb" class="card-breadcrumb">
        <h1>{{ __('Edit') }} Employee Record Tracker</h1>
    </div>
    {{-- <div class="separator-breadcrumb border-top"></div> --}}
    </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="card mb-100">
           <div class="card-body">
                {!! Form::model($employeeRecordTracker, ['route' => ['humanresource.employeeRecordTrackers.update', $employeeRecordTracker->id], 'method' => 'patch','class' => 'form-horizontal']) !!}

                    @include('humanresource.employee_record_trackers.fields',[$employees])

                {!! Form::close() !!}
           </div>
       </div>
   </div>
@endsection
