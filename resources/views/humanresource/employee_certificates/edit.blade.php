{{-- @extends('layouts.default') --}}
@extends('layouts.custom')

{{-- Page title --}}
@section('title')
Employee Certificates @parent
@stop

@section('content')
   <section class="content-header">
    <div aria-label="breadcrumb" class="card-breadcrumb">
        <h1>{{ __('Edit') }} Employee Certificates</h1>
    </div>
    {{-- <div class="separator-breadcrumb border-top"></div> --}}
    </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="card mb-100">
           <div class="card-body">
                {!! Form::model($employeeCertificates, ['route' => ['humanresource.employeeCertificates.update', $employeeCertificates->id], 'method' => 'patch', 'files' => true,'class' => 'form-horizontal']) !!}

                    @include('humanresource.employee_certificates.fields',[$employees])

                {!! Form::close() !!}
           </div>
       </div>
   </div>
@endsection
