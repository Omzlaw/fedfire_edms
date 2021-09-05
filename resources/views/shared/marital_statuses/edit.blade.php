@extends('layouts.default')

{{-- Page title --}}
@section('title')
Marital Status @parent
@stop

@section('content')
   <section class="content-header">
    <div aria-label="breadcrumb" class="card-breadcrumb">
        <h1>{{ __('Edit') }} Marital Status</h1>
    </div>
    {{-- <div class="separator-breadcrumb border-top"></div> --}}
    </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="card mb-100">
           <div class="card-body">
                {!! Form::model($maritalStatus, ['route' => ['shared.maritalStatuses.update', $maritalStatus->id], 'method' => 'patch','class' => 'form-horizontal']) !!}

                    @include('shared.marital_statuses.fields')

                {!! Form::close() !!}
           </div>
       </div>
   </div>
@endsection
