@extends('layouts.default')

{{-- Page title --}}
@section('title')
File Directory @parent
@stop

@section('content')
   <section class="content-header">
    <div aria-label="breadcrumb" class="card-breadcrumb">
        <h1>{{ __('Edit') }} File Directory</h1>
    </div>
    <div class="separator-breadcrumb border-top"></div>
    </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="card">
           <div class="card-body">
                {!! Form::model($fileDirectory, ['route' => ['shared.fileDirectories.update', $fileDirectory->id], 'method' => 'patch','class' => 'form-horizontal', 'files' => true]) !!}

                    @include('shared.file_directories.fields', [$file_types, $employees])

                {!! Form::close() !!}
           </div>
       </div>
   </div>
@endsection
