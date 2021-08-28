@extends('layouts.default')

{{-- Page title --}}
@section('title')
    Employees @parent
@stop

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div aria-label="breadcrumb" class="card-breadcrumb">
            <h1>Employees</h1>
        </div>
        {{-- <div class="separator-breadcrumb border-top"></div> --}}
    </section>

    <!-- Main content -->
    <div class="content">
        <div class="clearfix"></div>
        @include('flash::message')
        <div class="clearfix"></div>
        <div class="card">
            <section class="card-header">
                <h5 class="card-title d-inline">Employees</h5>
                <span class="float-right">
                    <a class="btn secondary-color-bg pull-right" href="{{ route('humanresource.employees.create') }}">Add
                        New</a>
                </span>
            </section>
            <div class="card-body">
                {{-- Toggle column: <a class="toggle-vis" data-column="0">Name</a> - <a class="toggle-vis"
                    data-column="1">Position</a> - <a class="toggle-vis" data-column="2">Office</a> - <a class="toggle-vis"
                    data-column="3">Age</a> - <a class="toggle-vis" data-column="4">Start date</a> - <a class="toggle-vis"
                    data-column="5">Salary</a> --}}
                {!! Form::open(['route' => ['filter'], 'class' => 'form-horizontal']) !!}

                <div class="row w-50 mb-10">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        {!! Form::label('qualification', 'Qualification:', ['class' => 'control-label']) !!}
                        {!! Form::select('qualification', modelDropdown($qualificationTypes, 'id', 'title'), session('qualification'), ['class' => 'form-control select2']) !!}
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        {!! Form::label('rank', 'Rank:', ['class' => 'control-label']) !!}
                        {!! Form::select('rank', modelDropdown($rankTypes, 'id', 'title'), session('rank'), ['class' => 'form-control select2']) !!}
                    </div>
                </div>
                <div class="row w-50">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        {!! Form::label('state', 'State of Origin:', ['class' => 'control-label']) !!}
                        {!! Form::select('state', modelDropdown($states, 'id', 'title', 'nigerian_state_only'), session('state'), ['id' => 'stateSelector', 'class' => 'form-control select2', 'onchange' => 'stateLocalGovtAreaSelector()']) !!}
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        {!! Form::macro('localGovtAreaSelect', function ($localGovtAreaModel) {
    $localGovtAreas = $localGovtAreaModel::orderBy('title')->get();
    $options = [];
    $defaultOption = '<option value="">Select...</option>';
    $options[] = $defaultOption;
    $value = session('localGovtArea');
    foreach ($localGovtAreas as $localGovtArea) {
        if ($value == $localGovtArea->id) {
            $option = '<option selected value=' . $localGovtArea->id . ' data-senatorial_zone_id=' . $localGovtArea->senatorial_zone_id . ' data-state_id=' . $localGovtArea->state_id . '>' . $localGovtArea->title . '</option>';
            $options[] = $option;
        } else {
            $option = '<option value=' . $localGovtArea->id . ' data-senatorial_zone_id=' . $localGovtArea->senatorial_zone_id . ' data-state_id=' . $localGovtArea->state_id . '>' . $localGovtArea->title . '</option>';
            $options[] = $option;
        }
    }
    $list = implode('', $options);
    return "<select id='localGovtAreaSelector' name='localGovtArea' class='form-control' onchange='localGovtSelector()'>{$list}</select>";
}) !!}
                        {!! Form::label('localGovtArea', 'Local Govt Area:', ['class' => 'control-label']) !!}
                        {!! Form::localGovtAreaSelect($local_govt_areas) !!}
                    </div>
                </div>
                <div class="row w-50">
                    <div class="col-6 mt-10">
                        {!! Form::submit('Filter', ['class' => 'btn secondary-color-bg mr-10 mt-10']) !!}
                        {!! Form::close() !!}
                        {!! Form::submit('Clear', ['name' => 'action', 'class' => 'mt-10 btn custom-outline-primary', 'value' => 'clear']) !!}
                    </div>
                </div>
                @include('humanresource.employees.table')
            </div>
        </div>
        <div class="text-center">

        </div>
    </div>
@endsection


<script>
    window.onload = function() {

        $('#localGovtAreaSelector').prop('disabled', 'disabled');

        // $('a.toggle-vis').on('click', function(e) {
        //     e.preventDefault();

        //     // Get the column API object
        //     var column = table.column($(this).attr('data-column'));

        //     // Toggle the visibility
        //     column.visible(!column.visible());
        // });
    }




    function stateLocalGovtAreaSelector() {
        let stateSelect = $('#stateSelector');
        let localGovtAreaSelect = $('#localGovtAreaSelector');
        localGovtAreaSelect.prop("selectedIndex", 0).val();


        $("#localGovtAreaSelector > option").each(function() {
            let id = stateSelect.children("option:selected").val();
            let state_id = $(this).data("state_id");
            if (id == state_id) {
                $(this).removeAttr('disabled').show();
            } else {
                $(this).attr('disabled', 'disabled').hide();
            }
        });

        localGovtAreaSelect.prop('disabled', false);
    }
</script>
