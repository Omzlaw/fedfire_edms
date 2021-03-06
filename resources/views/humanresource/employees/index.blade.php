@extends('layouts.default')


{{-- Page title --}}
@section('title')
    Employees @parent
@stop


@section('content')

    <style type="text/css">
        .table {
            text-indent: initial;
            white-space: normal;
            line-height: normal;
            font-weight: normal;
            font-size: medium;
            font-style: normal;
            text-align: start;
            border-spacing: 2px;
            border-color: grey;
            font-variant: normal;
            display: table;
            border-collapse: collapse;
            border: 1px solid #dee2e6;
            margin-bottom: 1rem;
            color: #757575;
            overflow-y: auto;
        }

        .th {
            position: sticky;
            top: 0;
        }

    </style>


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
        <div class="card mb-100">
            <section class="card-header">
                <h5 class="card-title d-inline">Employees</h5>
                <span class="float-right">
                    <a class="btn secondary-color-bg pull-right" href="{{ route('humanresource.employees.create') }}">Add
                        New</a>
                </span>
                <span>
                    {!! Form::open(['route' => ['import'], 'class' => 'form-horizontal', 'files' => true]) !!}
                    <div class="form-group mt-10">
                        <div class="row">
                            {!! Form::file('upload', ['accept' => '.xls,.xlsx,.csv', 'id' => 'upload', 'style' => 'width: 14rem', 'class' => 'form-control mr-10']) !!}
                            {!! Form::submit('Import', ['name' => 'action', 'class' => 'btn custom-outline-primary']) !!}
                        </div>
                    </div>
                    {!! Form::close() !!}
                </span>
                <div>
                    <a class="btn secondary-color-bg" href="{{ asset('excel-format/sample.xlsx') }}" download>Download
                        Sample Format</a>
                </div>
            </section>
            <div class="card-body">
                <div class="row w-75 mb-10">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        {!! Form::open(['route' => ['filter'], 'class' => 'form-horizontal']) !!}
                        {!! Form::label('qualification', 'Qualification:', ['class' => 'control-label']) !!}
                        {!! Form::text('qualification', session('qualification'), ['class' => 'form-control select2']) !!}
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        {!! Form::label('rank', 'Rank:', ['class' => 'control-label']) !!}
                        {!! Form::select('rank', modelDropdown($rankTypes, 'id', 'title'), session('rank'), ['class' => 'form-control select2']) !!}
                    </div>
                </div>
                <div class="row w-75">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        {!! Form::label('state', 'State of Origin:', ['class' => 'control-label']) !!}
                        {!! Form::select('state', modelDropdown($states, 'id', 'title', 'nigerian_state_only'), session('state'), ['id' => 'stateSelector', 'class' => 'form-control select2', 'onchange' => 'stateLocalGovtAreaSelector()']) !!}
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
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
                <div class="row w-50 mt-10">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        {!! Form::label('date_of_first_appointment', 'Date of First Appointment:', ['class' => 'control-label']) !!}
                        {!! Form::date('date_of_first_appointment', session('date_of_first_appointment'), ['id' => 'from', 'class' => 'form-control']) !!}
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        {!! Form::label('date_of_present_appointment', 'Date of Present Appointment:', ['class' => 'control-label']) !!}
                        {!! Form::date('date_of_present_appointment', session('date_of_present_appointment'), ['id' => 'to', 'class' => 'form-control']) !!}
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 mt-3">
                        {!! Form::label('status', 'Employment Status:', ['class' => 'control-label']) !!}
                        {!! Form::select('status', enum_employee_status(), session('status'), ['class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="row w-75 mb-10">
                    <div class="col-6 mt-10">
                        {!! Form::submit('Filter', ['class' => 'btn secondary-color-bg mr-10 mt-10']) !!}
                        {!! Form::submit('Clear', ['name' => 'action', 'class' => 'mt-10 mr-10 btn custom-outline-primary', 'value' => 'clear']) !!}
                        <div class="btn-group mt-10 mr-10">
                            <button type="button" class="btn secondary-color-bg w-140px dropdown-toggle"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Toggle Column
                            </button>
                            <div id="items" class="dropdown-menu" style="height: 15em; overflow-y:auto;">
                            </div>
                        </div>
                        <input id="doPrint" type="button" value="Print" class="btn custom-outline-primary mt-10">
                    </div>
                    {!! Form::close() !!}
                    @permission('employees-destroy')
                        <div class="col-12">
                            {!! Form::open(['route' => ['employeeMultipleDelete'], 'id' => 'multipleDelete', 'class' => 'form-horizontal']) !!}

                            <input id="selectAll" type="button" value="Select All" class="btn custom-outline-primary mt-10"
                                onclick="SelectAllEmployees();">

                            <input id="selectNone" type="button" value="Select None" class="btn custom-outline-primary mt-10"
                                onclick="deSelectAllEmployees();">

                                {!! Form::hidden('selected_employees', null, ['id' => 'selected_employees']) !!}


                            {!! Form::submit('Delete Multiple', ['class' => 'btn btn-outline-danger mr-10 mt-10']) !!}

                            {!! Form::close() !!}
                        </div>
                    @endpermission

                    @permission('employees-edit')
                    <div class="col-12">
                        {!! Form::open(['route' => ['employeeMultipleEditView'], 'id' => 'multipleEdit', 'class' => 'form-horizontal']) !!}

                        {!! Form::hidden('selected_employees_edit', null, ['id' => 'selected_employees_edit']) !!}

                        {!! Form::submit('Edit Multiple', ['class' => 'btn custom-outline-primary mr-10 mt-10']) !!}

                        {!! Form::close() !!}
                    </div>
                    @endpermission

                </div>
                <div class="table-responsive">
                    {{-- <input type="text" id="search-input" onkeyup="filterTable()" placeholder="Search..."
                        title="Search through table"> --}}
                    @include('humanresource.employees.table')
                </div>
            </div>
        </div>
    </div>
@endsection


<script>
    function SelectAllEmployees() {
        $('.checkbox').each(function() {
            $(this).prop("checked", true);
        });
    }

    function deSelectAllEmployees() {
        $('.checkbox').each(function() {
            $(this).prop("checked", false);
        });
    }

    window.onload = function() {

        let multipleDeleteform = document.getElementById("multipleDelete");
        multipleDeleteform.addEventListener("submit", function(event) {
            event.preventDefault();
            let ids = [];
            $('.checkbox').each(function() {
                if ($(this).prop("checked")) {
                    ids.push($(this).data('id'));
                }
                $('#selected_employees').val(ids);
                multipleDeleteform.submit();
            });
        });

        let multipleEditform = document.getElementById("multipleEdit");
        multipleEditform.addEventListener("submit", function(event) {
            event.preventDefault();
            let ids = [];
            $('.checkbox').each(function() {
                if ($(this).prop("checked")) {
                    ids.push($(this).data('id'));
                }
                console.log(ids);
                $('#selected_employees_edit').val(ids);
                multipleEditform.submit();
            });
        });

        $('#localGovtAreaSelector').prop('disabled', 'disabled');
        // let fromDate = $('#from');
        // let toDate = $('#to');

        // if (fromDate.val() == '') {
        //     toDate.prop('disabled', 'disabled');
        // }
        // fromDate.change(function() {
        //     toDate.prop('disabled', false);
        // });

        let table = $('#table').DataTable();

        var thArray = [];

        let dropdown = document.getElementById('items');
        $('#table > thead > tr > th').each(function(index) {
            if ($(this).hasClass('main-header')) {

            } else {
                let anchor = document.createElement('a');
                let input = document.createElement('input')
                anchor.classList.add("dropdown-item");
                input.classList.add("toggle-vis");
                input.classList.add("mr-3");
                input.classList.add("column-checkbox");
                input.setAttribute('type', 'checkbox');
                input.setAttribute('checked', 'checked');
                input.setAttribute('data-column', index + 3);
                let text = document.createTextNode($(this).text());
                anchor.appendChild(input);
                anchor.appendChild(text);
                dropdown.appendChild(anchor);
                let a = "";
            }
        })


        $('input.toggle-vis').on('click', function(e) {
            // e.preventDefault();

            // Get the column API object
            var column = table.column($(this).attr('data-column'));

            // Toggle the visibility
            column.visible(!column.visible());
        });


        $('#doPrint').on('click', function() {
            printData();
        })

        function printData() {

            let style =
                `<style>
                    .table
                    {
                        text-indent: initial;
                        white-space: normal;
                        line-height: normal;
                        font-weight: normal;
                        font-size: medium;
                        font-style: normal;
                        text-align: start;
                        border-spacing: 2px;
                        border-color: grey;
                        font-variant: normal;
                        display: table;
                        border-collapse: collapse;
                        border: 1px solid #dee2e6;
                        margin-bottom: 1rem;
                        color: #757575;
                        -webkit-print-color-adjust: exact;
                    }
                    th
                    {
                        white-space: nowrap;
                        -webkit-print-color-adjust: exact;
                    }
                    table
                    {
                        border-collapse: collapse;
                        width: 100%;
                        -webkit-print-color-adjust: exact;
                    }

                    th, td
                    {
                        text-align: left;
                        padding: 8px;
                        -webkit-print-color-adjust: exact;
                    }

                    tr:nth-child(even)
                    {
                        background-color: #f2f2f2; -webkit-print-color-adjust: exact;
                    }
                    table, th, td
                    {
                        border: 1px solid black;
                        -webkit-print-color-adjust: exact;
                    }

                    .main-header1{
                        background-color: #d6dce4;
                        -webkit-print-color-adjust: exact;
                    }

                    .main-header2{
                        background-color: #ec7d32;
                        -webkit-print-color-adjust: exact;
                    }

                    .main-header3{
                        background-color: #00b050;
                        -webkit-print-color-adjust: exact;
                    }

                    .main-header1, .main-header2, .main-header3{
                        text-align:center !important;
                        -webkit-print-color-adjust: exact;
                    }


                </style>`;

            let htmlTable = document.getElementById('table');
            let tr = document.createElement('tr');
            let th1 = document.createElement('th');
            th1.setAttribute('colspan', 15);
            th1.classList.add('main-header');
            th1.classList.add('main-header1');
            th1.innerHTML = 'Personal Records';

            let th2 = document.createElement('th');
            th2.setAttribute('colspan', 14);
            th2.classList.add('main-header');
            th2.classList.add('main-header2');
            th2.innerHTML = 'Service Records';

            let th3 = document.createElement('th');
            th3.setAttribute('colspan', 6);
            th3.classList.add('main-header');
            th3.classList.add('main-header3');
            th3.innerHTML = 'Education';

            // tr.appendChild(th0);
            tr.appendChild(th1);
            tr.appendChild(th2);
            tr.appendChild(th3);

            htmlTable.children[0].prepend(tr);


            columnLength = table.columns().count();
            // var columnAction1 = table.column(columnLength - 1);
            // columnAction1.visible(false);
            // var columnAction2 = table.column(4);
            // columnAction2.visible(false);
            // var columnAction3 = table.column(5);
            // columnAction3.visible(false);
            // var columnAction4 = table.column(6);
            // columnAction4.visible(false);
            var divToPrint = document.getElementById("table");
            var newWin = window.open('', '', '');
            newWin.document.write('<html><head><title>Print Employee Table</title>');
            // Make sure the relative URL to the stylesheet works:
            newWin.document.write('<base href="' + location.origin + location.pathname + '">');
            // Add the stylesheet link and inline styles to the new document:
            newWin.document.write(style);
            newWin.document.write('</head><body>');
            // newWin = window.open("");
            newWin.document.write(divToPrint.outerHTML);
            newWin.document.write('</body></html>');
            newWin.print();
            newWin.close();
            // columnAction1.visible(true);
            // columnAction2.visible(true);
            // columnAction3.visible(true);
            // columnAction4.visible(true);

            htmlTable.children[0].removeChild(tr);

        }



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

@section('footer_scripts')
    @include('layouts.datatables_js')
    {!! $dataTable->scripts() !!}
@endsection
