@extends('layouts.default')


{{-- Page title --}}
@section('title')
    File Manager @parent
@stop

@section('content')
    <section class="content-header">
        <div aria-label="breadcrumb" class="card-breadcrumb">
            <h1>File Manager</h1>
        </div>
        <div class="separator-breadcrumb border-top"></div>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        @include('flash::message')
        <div class="card">
            <div class="card-body ml-15">

                <div class="row">
                    <div class='col-12'>
                        {!! Form::open(['route' => 'searchEmployeeRecord', 'class' => 'form-horizontal', 'files' => true]) !!}
                        <div class="row">
                            <div class="form-group col-4">
                                {!! Form::text('file_no', null, ['class' => 'form-control', 'placeholder' => 'Search by File Number']) !!}
                            </div>
                            <div class="form-group col-8">
                                {!! Form::submit('Search', ['class' => 'btn btn-primary']) !!}
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>

                <div class="row">
                    @if (isset($employee))

                        <div class="col-5 card">

                            <div class="row mt-5 pt-5">
                                <br />
                                <div class="col-3">
                                    {!! Form::label('file_types', 'Select File Type:', ['class' => 'control-label']) !!}
                                </div>
                                <div class="">
                                    {!! Form::select('file_types', modelDropdown($file_types, 'id', 'title'), null, ['class' => 'form-control custom-select', 'oninput' => 'filterTable()']) !!}
                                </div>
                            </div>


                            <div class="mt-5 pt-5">

                                <table class="table table-striped table-border">
                                    <col width='40%'>
                                    <col width='60%'>
                                    <tbody>
                                        <tr>
                                            <th scope="col">File Number</th>
                                            <td>{{ $employee->file_no }}</td>
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
                                            <td><a target="blank"
                                                    href="{{ route('humanresource.employees.show', $employee->id) }}"
                                                    class="btn btn-primary">view</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="col-7">
                            <div class="row ml-1 mr-1 card">
                                <span class="text-center h5 mt-3">File Records</span>

                                <table id="file_directories" class="table table-striped" style="display:none">
                                    <thead>
                                        <tr>
                                            <th scope="col" width='25%'>File Type</th>
                                            <th scope="col" width='25%'>Date Uploaded</th>
                                            <th scope="col" width='40%'>Remark</th>
                                            <th scope="col" width='10%'>Action</th>
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
                                                            href="{{ $file->file_url[0] }}"
                                                            class='btn btn-outline-primary btn-xs'><i
                                                                class="im im-icon-Information"></i>
                                                        </a></td>
                                                    <td><a download title="Download File" href="{{ $file->file_url[0] }}"
                                                            class='btn btn-outline-success btn-xs'><i
                                                                class="im im-icon-File-Edit"></i>
                                                        </a></td>
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
                    @else
                        <div class="">
                            <h6 class="ml-3">Search for an employee</h6>
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
