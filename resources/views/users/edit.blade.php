@extends('layouts.default')

{{-- Page title --}}
@section('title')
    User @parent
@stop

@section('content')
    <section class="content-header">
        <div aria-label="breadcrumb" class="card-breadcrumb">
            <h1>{{ __('Edit') }} Termination Type</h1>
        </div>
        {{-- <div class="separator-breadcrumb border-top"></div> --}}
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="card">
            <div class="card-body">
                {!! Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'patch']) !!}

                @include('users.fields')

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
