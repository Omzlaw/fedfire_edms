@extends('layouts.default')

{{-- Page title --}}
@section('title')
Policy File @parent
@stop

@section('content')
    <section class="content-header">
    <div aria-label="breadcrumb" class="card-breadcrumb">
        <h1>{{ __('Create New') }} Policy File</h1>
    </div>
    <div class="separator-breadcrumb border-top"></div>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="card">
            <div class="card-body mb-100">
                {{-- {!! Form::open(['route' => 'shared.policyDocuments.store','class' => 'form-horizontal']) !!} --}}

                    @include('shared.policy_documents.fields')

                {{-- {!! Form::close() !!} --}}
            </div>
        </div>
    </div>
@endsection
