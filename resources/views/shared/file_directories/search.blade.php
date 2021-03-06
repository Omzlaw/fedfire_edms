@extends('layouts.default')


{{-- Page title --}}
@section('title')
    File Manager @parent
@stop

@section('content')
    <section class="content-header">
        <div aria-label="breadcrumb" class="card-breadcrumb">
            <h1>File Manager: Personnel File</h1>
        </div>
        {{-- <div class="separator-breadcrumb border-top"></div> --}}
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        @include('flash::message')

        <div class="row ml-1 mb-3">
            {!! Form::open(['route' => ['fileSearchClass'], 'class' => 'form-horizontal', 'files' => true]) !!}
            {!! Form::submit('Personnel File', ['name' => 'action', 'class' => 'btn secondary-color-bg mr-10 mt-10', 'value' => 'personnel']) !!}
            {!! Form::submit('Policy File', ['name' => 'action', 'class' => 'text-white mt-10 mr-10 btn', 'value' => 'policy', 'style' => 'background-color: #DA2016']) !!}
            {!! Form::close() !!}
        </div>

        <div class="card mb-100">
            <div class="card-body ml-15 mr-15">

                <div class="row">
                    <div class='col-lg-12 col-md-12 col-sm12'>
                        {!! Form::open(['route' => 'employeeSearch', 'class' => 'form-horizontal', 'files' => true]) !!}
                        <div class="row">
                            <div class="form-group col-4">
                                {!! Form::text('service_number', null, ['class' => 'form-control', 'placeholder' => 'Search by Service Number']) !!}
                            </div>
                            <div class="form-group col-8">
                                {!! Form::submit('Search', ['class' => 'btn secondary-color-bg']) !!}
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>

                <div class="row">
                    @if (isset($employee))

                        <div class="col-lg-4 col-md-12 col-sm-12 card">

                            <div class="row mt-5 pt-5">
                                <br />
                                <div class="col-3">
                                    {!! Form::label('file_types', 'Select File Type:', ['class' => 'control-label']) !!}
                                </div>
                                <div class="">
                                    {!! Form::select('file_types', modelDropdown($file_types, 'id', 'title'), null, ['class' => 'form-control custom-select', 'oninput' => 'filterTable()']) !!}
                                </div>
                            </div>


                            <div class="
                                    mt-5 pt-5">

                                    <table class="table table-striped table-bordered">
                                        <col width='40%'>
                                        <col width='60%'>
                                        <tbody>
                                            <tr>
                                                <th scope="col">File Number</th>
                                                <td>{{ $employee->service_number }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="col">First Name</th>
                                                <td>{{ $employee->first_name }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="col">Last Name</th>
                                                <td>{{ $employee->last_name }}</td>
                                            </tr>
                                            {{-- <tr><th scope="col">Other Records</th><td> --}}
                                            <div class="">
                                            <br>
                                            <div class='mt-5'>
                                                {{-- @include('shared.file_directories.dropdown') --}}
                                            </div>
                                        </div>

                                        <tr>
                                            <td><a target="
                                                blank" href="{{ route('humanresource.employees.show', $employee->id) }}"
                                                class="btn secondary-color-bg">view</a></td>
                                                </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="col-lg-8 col-md-12 col-sm-12">
                                <div class="ml-1 row card mr-1">
                                    <span class="text-center h5 mt-3">File Records</span>

                                    <div class="table-responsive">
                                        <table id="file_directories" class="table table-striped table-bordered"
                                            style="display:none">
                                            <thead>
                                                <tr>
                                                    <th scope="col" width='25%'>File Type</th>
                                                    <th scope="col" width='25%'>Date Uploaded</th>
                                                    <th scope="col" width='40%'>Remark</th>
                                                    <th scope="col" width='5%'>View</th>
                                                    <th scope="col" width='5%'>Download</th>
                                                    {{-- <th scope="col" width='5%'>Export as PDF</th> --}}
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if (isset($file_directories))
                                                    @foreach ($file_directories as $file)
                                                        <tr>
                                                            <td style="display: none;">{{ $file->file_type_id }}</td>
                                                            <?php
                                                            //get the date file was uploaded
                                                            $name_arr = explode('_', $file->file_name);
                                                            $date_uploaded = date('F d, Y h:i:s', $name_arr[0]);
                                                            ?>
                                                            <td>{{ $file->fileType->title }}</td>
                                                            <td>{{ $date_uploaded }}</td>
                                                            <td>{{ $file->remark }}</td>
                                                            <td><a target="blank" title="View File"
                                                                    href="{{ isset($file->file_url[0]) ? $file->file_url[0] : '' }}"
                                                                    class='btn custom-outline-primary btn-xs'><i
                                                                        class="im im-icon-Information"></i>
                                                                </a></td>
                                                            <td><a download title="Download File"
                                                                    href="{{ isset($file->file_url[0]) ? $file->file_url[0] : '' }}"
                                                                    class='btn btn-outline-success btn-xs'><i
                                                                        class="im im-icon-File-Edit"></i>
                                                                </a></td>
                                                            {{-- <td>
                                                            {!! Form::open(['route' => 'fileToPDF', 'class' => 'form-horizontal', 'files' => true]) !!}
                                                            <div class="row">
                                                                <div class="form-group col-8">
                                                                    {!! Form::hidden('file', $file->file_url[0]) !!}
                                                                    {!! Form::submit('Export', ['class' => 'btn secondary-color-bg']) !!}
                                                                </div>
                                                            </div>
                                                            {!! Form::close() !!}
                                                        </td> --}}
                                                        </tr>


                                                    @endforeach
                                                @else
                                                    <tr>
                                                        <td colspan='4'>
                                                            <h5>File does not exist</h5>
                                                        </td>
                                                    </tr>
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                        @else
                            <div class="">
                            <h6 class=" ml-3">Search for an employee</h6>
                            </div>

                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection


<script>
    window.onload = emptyTable;

    function emptyTable() {
        table = document.getElementById("file_directories");

        rows = table.getElementsByTagName("tr");

        // Loops through rows and hides those with countries that don't match the filter
        for (let row of rows) { // `for...of` loops through the NodeList
            cells = row.getElementsByTagName("td");
            row.style.display = "none"; // hides this row
        }
        table.style.display = 'block';
    }

    function filterTable() {
        // Variables
        let dropdown, table, rows, cells, file_type, filter;
        dropdown = document.getElementById("file_types");
        table = document.getElementById("file_directories");
        rows = table.getElementsByTagName("tr");
        filter = dropdown.value;


        // Loops through rows and hides those with countries that don't match the filter
        for (let row of rows) { // `for...of` loops through the NodeList
            cells = row.getElementsByTagName("td");
            file_type = cells[0] || null; // gets the 2nd `td` or nothing
            // if the filter is set to 'All', or this is the header row, or 2nd `td` text matches filter
            if (!file_type || (filter === file_type.textContent)) {
                row.style.display = ""; // shows this row
            } else {
                row.style.display = "none"; // hides this row
            }
        }
    }
</script>

@section('footer_scripts')
    @include('layouts.datatables_js')
@endsection
