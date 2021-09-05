@extends('layouts.default')

{{-- Page title --}}
@section('title')
Termination Type @parent
@stop

@section('content')
   <section class="content-header">
    <div aria-label="breadcrumb" class="card-breadcrumb">
        <h1>{{ __('Edit') }} Termination Type</h1>
    </div>
    {{-- <div class="separator-breadcrumb border-top"></div> --}}
    </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="card mb-100">
           <div class="card-body">
                {!! Form::model($terminationType, ['route' => ['humanresource.terminationTypes.update', $terminationType->id], 'method' => 'patch','class' => 'form-horizontal']) !!}

                    @include('humanresource.termination_types.fields')

                {!! Form::close() !!}
           </div>
       </div>
   </div>
@endsection
