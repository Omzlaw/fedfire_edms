{{-- @extends('layouts.default') --}}
@extends('layouts.custom')

{{-- Page title --}}
@section('title')
Employee Force Service @parent
@stop

@section('content')
   <section class="content-header">
    <div aria-label="breadcrumb" class="card-breadcrumb">
        <h1>{{ __('Edit') }} Employee Force Service</h1>
    </div>
    {{-- <div class="separator-breadcrumb border-top"></div> --}}
    </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="card mb-100">
           <div class="card-body">
                {!! Form::model($employeeForceService, ['route' => ['humanresource.employeeForceServices.update', $employeeForceService->id], 'method' => 'patch', 'files' => true,'class' => 'form-horizontal']) !!}

                    @include('humanresource.employee_force_services.fields',[$employees])

                {!! Form::close() !!}
           </div>
       </div>
   </div>
@endsection
