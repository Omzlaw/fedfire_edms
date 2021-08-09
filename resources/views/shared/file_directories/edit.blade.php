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
                <div class="col-6">
                    {!! Form::open(['route' => 'shared.fileDirectories.store', 'class' => 'form-horizontal', 'files' => true]) !!}

                    @include('shared.file_directories.fields', [$file_types, $employees])

                    {!! Form::close() !!}
                </div>
                <div class="col-6">
                    <div id="dwtcontrolContainer"></div>
                    <input type="button" value="Load Image" onclick="loadImage();" />
                    <input type="button" value="Scan Image" onclick="acquireImage();" />
                    <input id="btnUpload" type="button" value="Upload Image" onclick="upload()">
                </div>
            </div>
        </div>
    </div>
@endsection
