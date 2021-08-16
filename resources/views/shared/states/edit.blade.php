@extends('layouts.default')

{{-- Page title --}}
@section('title')
State @parent
@stop

@section('content')
   <section class="content-header">
    <div aria-label="breadcrumb" class="card-breadcrumb">
        <h1>{{ __('Edit') }} State</h1>
    </div>
    {{-- <div class="separator-breadcrumb border-top"></div> --}}
    </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="card">
           <div class="card-body">
                {!! Form::model($state, ['route' => ['shared.states.update', $state->id], 'method' => 'patch','class' => 'form-horizontal']) !!}

                    @include('shared.states.fields', [$countries])

                {!! Form::close() !!}
           </div>
       </div>
   </div>
@endsection
