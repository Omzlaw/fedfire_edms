@extends('layouts.default')

{{-- Page title --}}
@section('title')
Senatorial Zone @parent
@stop

@section('content')
   <section class="content-header">
    <div aria-label="breadcrumb" class="card-breadcrumb">
        <h1>{{ __('Edit') }} Senatorial Zone</h1>
    </div>
    {{-- <div class="separator-breadcrumb border-top"></div> --}}
    </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="card">
           <div class="card-body">
                {!! Form::model($senatorialZone, ['route' => ['shared.senatorialZones.update', $senatorialZone->id], 'method' => 'patch','class' => 'form-horizontal']) !!}

                    @include('shared.senatorial_zones.fields', [$states])

                {!! Form::close() !!}
           </div>
       </div>
   </div>
@endsection
