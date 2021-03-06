@extends('layouts.default')

{{-- Page title --}}
@section('title')
Qualification Type @parent
@stop

@section('content')
   <section class="content-header">
    <div aria-label="breadcrumb" class="card-breadcrumb">
        <h1>{{ __('Edit') }} Qualification Type</h1>
    </div>
    {{-- <div class="separator-breadcrumb border-top"></div> --}}
    </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="card mb-100">
           <div class="card-body">
                {!! Form::model($qualificationType, ['route' => ['shared.qualificationTypes.update', $qualificationType->id], 'method' => 'patch','class' => 'form-horizontal']) !!}

                    @include('shared.qualification_types.fields')

                {!! Form::close() !!}
           </div>
       </div>
   </div>
@endsection
