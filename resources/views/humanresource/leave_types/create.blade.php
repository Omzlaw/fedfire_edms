@extends('layouts.default')

{{-- Page title --}}
@section('title')
Leave Type @parent
@stop

@section('content')
    <section class="content-header">
    <div aria-label="breadcrumb" class="card-breadcrumb">
        <h1>{{ __('Create New') }} Leave Type</h1>
    </div>
    {{-- <div class="separator-breadcrumb border-top"></div> --}}
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="card">
            <div class="card-body">
                {!! Form::open(['route' => 'humanresource.leaveTypes.store','class' => 'form-horizontal']) !!}

                    @include('humanresource.leave_types.fields')

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
