@extends('layouts.default')

{{-- Page title --}}
@section('title')
Audit Trail @parent
@stop

@section('content')
   <section class="content-header">
    <div aria-label="breadcrumb" class="card-breadcrumb">
        <h1>{{ __('Edit') }} Audit Trail</h1>
    </div>
    <div class="separator-breadcrumb border-top"></div>
    </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="card">
           <div class="card-body">
                {!! Form::model($auditTrail, ['route' => ['shared.auditTrails.update', $auditTrail->id], 'method' => 'patch','class' => 'form-horizontal']) !!}

                    @include('shared.audit_trails.fields')

                {!! Form::close() !!}
           </div>
       </div>
   </div>
@endsection
