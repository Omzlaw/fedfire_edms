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
        <div class="card">
            <div class="card-body">
                {!! Form::open(['route' => 'searchEmployeeRecord', 'class' => 'form-horizontal', 'files' => true]) !!}

                <div class="row">
                    <div class="form-group col-4">
                        {!! Form::text('file_no', null, ['class' => 'form-control', 'placeholder' => 'Please enter file number']) !!}
                    </div>
                    <div class="form-group col-8">
                        {!! Form::submit('Search', ['class' => 'btn btn-primary']) !!}
                    </div>
                </div>

                @if (isset($employee))
                    <div class="row">
                        <div class="col-6">
                            {!! Form::label('file_types', 'Select file type:', ['class' => 'col-md-3 col-lg-3 col-12 control-label']) !!}
                            {!! Form::select('file_types', modelDropdown($file_types, 'id', 'title'), null, ['class' => 'form-control', 'oninput' => 'filterTable()']) !!}
                        </div>
                        <div class="col-6">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">File Number</th>
                                        <th scope="col">First Name</th>
                                        <th scope="col">Last Name</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ $employee->file_no }}</td>
                                        <td>{{ $employee->first_name }}</td>
                                        <td>{{ $employee->last_name }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="row ml-1 mr-1">
                        <table id="file_directories" class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">File Name</th>
                                    <th scope="col">File Type</th>
                                    <th scope="col">Remark</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (isset($file_directories))
                                    @foreach ($file_directories as $file)
                                        <tr>
                                            <td style="display: none;">{{ $file->file_type_id }}</td>
                                            <td>{{ $file->file_name }}</td>
                                            <td>{{ $file->fileType->title }}</td>
                                            <td>{{ $file->remark }}</td>
                                            <td><a target="blank" href="{{ $file->file_url[0] }}" class="btn btn-primary">view</a></td>
                                        </tr>
                                    @endforeach
                                @else
                                    <h5>File does not exist</h5>
                                @endif
                            </tbody>
                        </table>
                    </div>

                @else
                    <div class="row">
                        <h6 class="ml-3">Record not found</h6>
                    </div>

                @endif


                {!! Form::close() !!}

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
