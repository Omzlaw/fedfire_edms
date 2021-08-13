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
                @include('shared.file_directories.fields', [$fileDirectory, $file_types, $employees])
            </div>
        </div>
    </div>
@endsection
