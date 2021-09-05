@extends('layouts.default')

{{-- Page title --}}
@section('title')
Language @parent
@stop

@section('content')
   <section class="content-header">
    <div aria-label="breadcrumb" class="card-breadcrumb">
        <h1>{{ __('Edit') }} Language</h1>
    </div>
    {{-- <div class="separator-breadcrumb border-top"></div> --}}
    </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="card mb-100">
           <div class="card-body">
                {!! Form::model($language, ['route' => ['shared.languages.update', $language->id], 'method' => 'patch','class' => 'form-horizontal']) !!}

                    @include('shared.languages.fields')

                {!! Form::close() !!}
           </div>
       </div>
   </div>
@endsection
