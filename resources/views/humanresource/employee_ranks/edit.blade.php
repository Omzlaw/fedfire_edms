@extends('layouts.custom')

{{-- Page title --}}
@section('title')
Employee Rank @parent
@stop

@section('content')
   <section class="content-header">
    <div aria-label="breadcrumb" class="card-breadcrumb">
        <h1>{{ __('Edit') }} Employee Rank</h1>
    </div>
    {{-- <div class="separator-breadcrumb border-top"></div> --}}
    </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="card mb-100">
           <div class="card-body">
                {!! Form::model($employeeRank, ['route' => ['humanresource.employeeRanks.update', $employeeRank->id], 'method' => 'patch','class' => 'form-horizontal']) !!}

                    @include('humanresource.employee_ranks.fields', [$rank_types])

                {!! Form::close() !!}
           </div>
       </div>
   </div>
@endsection
