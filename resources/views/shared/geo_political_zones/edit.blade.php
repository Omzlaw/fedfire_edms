@extends('layouts.default')

{{-- Page title --}}
@section('title')
Geo Political Zone @parent
@stop

@section('content')
   <section class="content-header">
    <div aria-label="breadcrumb" class="card-breadcrumb">
        <h1>{{ __('Edit') }} Geo Political Zone</h1>
    </div>
    {{-- <div class="separator-breadcrumb border-top"></div> --}}
    </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="card mb-100">
           <div class="card-body">
                {!! Form::model($geoPoliticalZone, ['route' => ['shared.geoPoliticalZones.update', $geoPoliticalZone->id], 'method' => 'patch','class' => 'form-horizontal']) !!}

                    @include('shared.geo_political_zones.fields', [$countries])

                {!! Form::close() !!}
           </div>
       </div>
   </div>
@endsection
