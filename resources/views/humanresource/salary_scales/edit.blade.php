@extends('layouts.default')

{{-- Page title --}}
@section('title')
Salary Scale @parent
@stop

@section('content')
   <section class="content-header">
    <div aria-label="breadcrumb" class="card-breadcrumb">
        <h1>{{ __('Edit') }} Salary Scale</h1>
    </div>
    {{-- <div class="separator-breadcrumb border-top"></div> --}}
    </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="card mb-100">
           <div class="card-body">
                {!! Form::model($salaryScale, ['route' => ['humanresource.salaryScales.update', $salaryScale->id], 'method' => 'patch','class' => 'form-horizontal']) !!}

                    @include('humanresource.salary_scales.fields')

                {!! Form::close() !!}
           </div>
       </div>
   </div>
@endsection
