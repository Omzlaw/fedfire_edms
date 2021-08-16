@extends('layouts.default')

{{-- Page title --}}
@section('title')
Country @parent
@stop

@section('content')
   <section class="content-header">
    <div aria-label="breadcrumb" class="card-breadcrumb">
        <h1>{{ __('Edit') }} Country</h1>
    </div>
    {{-- <div class="separator-breadcrumb border-top"></div> --}}
    </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="card">
           <div class="card-body">
                {!! Form::model($country, ['route' => ['shared.countries.update', $country->id], 'method' => 'patch','class' => 'form-horizontal']) !!}

                    @include('shared.countries.fields')

                {!! Form::close() !!}
           </div>
       </div>
   </div>
@endsection
