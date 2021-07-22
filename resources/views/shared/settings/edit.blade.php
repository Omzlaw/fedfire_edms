@extends('layouts.default')

{{-- Page title --}}
@section('title')
Setting @parent
@stop

@section('content')
   <section class="content-header">
    <div aria-label="breadcrumb" class="card-breadcrumb">
        <h1>{{ __('Edit') }} Setting</h1>
    </div>
    <div class="separator-breadcrumb border-top"></div>
    </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="card">
           <div class="card-body">
                {!! Form::model($setting, ['route' => ['shared.settings.update', $setting->id], 'method' => 'patch','class' => 'form-horizontal']) !!}

                    @include('shared.settings.fields')

                {!! Form::close() !!}
           </div>
       </div>
   </div>
@endsection
