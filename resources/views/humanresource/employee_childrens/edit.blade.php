{{-- @extends('layouts.default') --}}
@extends('layouts.custom')
{{-- Page title --}}
@section('title')
Employee Children @parent
@stop

@section('content')
   <section class="content-header">
    <div aria-label="breadcrumb" class="card-breadcrumb">
        <h1>{{ __('Edit') }} Employee's Child</h1>
    </div>
    <div class="separator-breadcrumb border-top"></div>
    </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="card">
           <div class="card-body">
                {!! Form::model($employeeChildren, ['route' => ['humanresource.employeeChildrens.update', $employeeChildren->id], 'method' => 'patch', 'files' => true,'class' => 'form-horizontal']) !!}

                    @include('humanresource.employee_childrens.fields',[$employees])

                {!! Form::close() !!}
           </div>
       </div>
   </div>
@endsection
