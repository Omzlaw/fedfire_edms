@extends('layouts.default')

{{-- Page title --}}
@section('title')
Local Govt Area @parent
@stop

@section('content')
   <section class="content-header">
    <div aria-label="breadcrumb" class="card-breadcrumb">
        <h1>{{ __('Edit') }} Local Govt Area</h1>
    </div>
    {{-- <div class="separator-breadcrumb border-top"></div> --}}
    </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="card mb-100">
           <div class="card-body">
                {!! Form::model($localGovtArea, ['route' => ['shared.localGovtAreas.update', $localGovtArea->id], 'method' => 'patch','class' => 'form-horizontal']) !!}

                    @include('shared.local_govt_areas.fields', [$states])

                {!! Form::close() !!}
           </div>
       </div>
   </div>
@endsection
