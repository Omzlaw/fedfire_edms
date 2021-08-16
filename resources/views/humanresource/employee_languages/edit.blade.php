{{-- @extends('layouts.default') --}}
@extends('layouts.custom')

{{-- Page title --}}
@section('title')
Employee Language @parent
@stop

@section('content')
   <section class="content-header">
    <div aria-label="breadcrumb" class="card-breadcrumb">
        <h1>{{ __('Edit') }} Employee Language</h1>
    </div>
    {{-- <div class="separator-breadcrumb border-top"></div> --}}
    </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="card">
           <div class="card-body">
                {!! Form::model($employeeLanguage, ['route' => ['humanresource.employeeLanguages.update', $employeeLanguage->id], 'method' => 'patch', 'files' => true,'class' => 'form-horizontal']) !!}

                    @include('humanresource.employee_languages.fields', [$employees])

                {!! Form::close() !!}
           </div>
       </div>
   </div>
@endsection
