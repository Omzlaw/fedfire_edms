@extends('layouts.default')

{{-- Page title --}}
@section('title')
Employee Local Leave @parent
@stop

@section('content')
   <section class="content-header">
    <div aria-label="breadcrumb" class="card-breadcrumb">
        <h1>{{ __('Edit') }} Employee Local Leave</h1>
    </div>
    <div class="separator-breadcrumb border-top"></div>
    </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="card">
           <div class="card-body">
                {!! Form::model($employeeLocalLeave, ['route' => ['humanresource.employeeLocalLeaves.update', $employeeLocalLeave->id], 'method' => 'patch', 'files' => true,'class' => 'form-horizontal']) !!}

                    @include('humanresource.employee_local_leaves.fields')

                {!! Form::close() !!}
           </div>
       </div>
   </div>
@endsection
