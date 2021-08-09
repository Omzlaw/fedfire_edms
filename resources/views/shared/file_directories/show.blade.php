@extends('layouts.default')

{{-- Page title --}}
@section('title')
    File Directories @parent
@stop

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div aria-label="breadcrumb" class="card-breadcrumb">
            <h1>File Directory</h1>
        </div>
        <div class="separator-breadcrumb border-top"></div>
    </section>

    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="card">
                <div class="table-responsive">
                    <table class="table table-default">
                        @include('shared.file_directories.show_fields')

                    </table>
                </div>
            </div>
        <a href="{{ route('shared.fileDirectories.index') }}" class="btn secondary-color-bg">Back</a>
    </div>
@endsection


