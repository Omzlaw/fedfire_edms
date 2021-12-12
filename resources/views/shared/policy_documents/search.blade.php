@extends('layouts.default')


{{-- Page title --}}
@section('title')
    File Manager @parent
@stop

@section('content')
    <section class="content-header">
        <div aria-label="breadcrumb" class="card-breadcrumb">
            <h1>File Manager: Policy File</h1>
        </div>
        {{-- <div class="separator-breadcrumb border-top"></div> --}}

    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        @include('flash::message')

        <div class="row ml-1 mb-3">
            {!! Form::open(['route' => ['fileSearchClass'], 'class' => 'form-horizontal', 'files' => true]) !!}
            {!! Form::submit('Personnel File', ['name' => 'action', 'class' => 'btn secondary-color-bg mr-10 mt-10', 'value' => 'personnel']) !!}
            {!! Form::submit('Policy File', ['name' => 'action', 'class' => 'mt-10 mr-10 btn custom-outline-primary', 'value' => 'policy']) !!}
            {!! Form::close() !!}
        </div>

        <div class="card mb-100">
            <div class="card-body ml-15 mr-15">

                <div class="row">
                    <div class='col-lg-12 col-md-12 col-sm12'>
                        {!! Form::open(['route' => 'policyFileSearch', 'class' => 'form-horizontal', 'files' => true]) !!}
                        <div class="row">
                            <div class="form-group col-4">
                                {!! Form::text('query', null, ['class' => 'form-control', 'placeholder' => 'Search by File Number/File Name']) !!}
                            </div>
                            <div class="form-group col-8">
                                {!! Form::submit('Search', ['class' => 'btn secondary-color-bg']) !!}
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>

                <div class="row">
                    @if (isset($policyDocument))

                        <div class="col-lg-4 col-md-12 col-sm-12 card">

                            <div class="mt-5 pt-5">

                                <table class="table table-striped table-bordered">
                                    <col width='40%'>
                                    <col width='60%'>
                                    <tbody>
                                        <tr>
                                            <th scope="col">File Name</th>
                                            <td>{{ $policyDocument->file_name }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="col">File Number</th>
                                            <td>{{ $policyDocument->file_number }}</td>
                                        </tr>

                                    </tbody>
                                </table>

                            </div>
                            <div class="mb-3">
                                <tr>
                                    <td>
                                        <a target="blank" title="View File"
                                            href="{{ isset($policyDocument->file_url[0]) ? $policyDocument->file_url[0] : '' }}"
                                            class='btn custom-outline-primary btn-xs'><i class="im im-icon-Information"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a download title="Download File"
                                            href="{{ isset($policyDocument->file_url[0]) ? $policyDocument->file_url[0] : '' }}"
                                            class='btn btn-outline-success btn-xs'><i class="im im-icon-File-Edit"></i>
                                        </a>
                                    </td>
                                </tr>
                            </div>
                        </div>

                    @else
                        <div class="">
                            <h6 class=" ml-3">Search for a Policy File</h6>
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

    // function filterTable() {
    //     // Variables
    //     let dropdown, table, rows, cells, file_type, filter;
    //     dropdown = document.getElementById("file_types");
    //     table = document.getElementById("file_directories");
    //     rows = table.getElementsByTagName("tr");
    //     filter = dropdown.value;


    //     // Loops through rows and hides those with countries that don't match the filter
    //     for (let row of rows) { // `for...of` loops through the NodeList
    //         cells = row.getElementsByTagName("td");
    //         file_type = cells[0] || null; // gets the 2nd `td` or nothing
    //         // if the filter is set to 'All', or this is the header row, or 2nd `td` text matches filter
    //         if (!file_type || (filter === file_type.textContent)) {
    //             row.style.display = ""; // shows this row
    //         } else {
    //             row.style.display = "none"; // hides this row
    //         }
    //     }
    // }
</script>

@section('footer_scripts')
    @include('layouts.datatables_js')
@endsection
