@extends('layouts.default')

{{-- Page title --}}
@section('title')
File Type @parent
@stop

@section('content')
    <section class="content-header">
    <div aria-label="breadcrumb" class="card-breadcrumb">
        <h1>{{ __('Create New') }} File Type</h1>
    </div>
    <div class="separator-breadcrumb border-top"></div>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="card">
            <div class="card-body">
                {!! Form::open(['route' => 'shared.fileTypes.store','class' => 'form-horizontal']) !!}

                    @include('shared.file_types.fields')

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
