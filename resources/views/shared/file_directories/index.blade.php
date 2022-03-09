@extends('layouts.default')

{{-- Page title --}}
@section('title')
    File Directories @parent
@stop

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div aria-label="breadcrumb" class="card-breadcrumb">
            <h1>File Directories</h1>
        </div>
        {{-- <div class="separator-breadcrumb border-top"></div> --}}
    </section>

    <!-- Main content -->
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="row ml-1 mb-3">
            {!! Form::open(['route' => ['fileClass'], 'class' => 'form-horizontal', 'files' => true]) !!}
            {!! Form::submit('Personnel File', ['name' => 'action', 'class' => 'btn secondary-color-bg mr-10 mt-10', 'value' => 'personnel']) !!}
            {!! Form::submit('Policy File', ['name' => 'action', 'class' => 'text-white mt-10 mr-10 btn', 'value' => 'policy', 'style' => 'background-color: #DA2016']) !!}
            {!! Form::close() !!}
        </div>

        <div class="clearfix"></div>
        <div id="card" class="card mb-100">
            <section class="card-header">
                <h5 class="card-title d-inline">Personnel File</h5>
                <span class="float-right">
                    <a class="btn secondary-color-bg pull-right" href="{{ route('shared.fileDirectories.create') }}">Add
                        New</a>
                </span>
            </section>
            <div class="card-body">
                @include('shared.file_directories.table')
            </div>

            <div class="text-center">

            </div>
        </div>
    </div>

@endsection
<script>
    function filterTable() {

        // Declare variables
        var input = document.getElementById("search-input");
        var filter = input.value.toUpperCase();
        var table = document.getElementById("table");
        var trs = table.tBodies[0].getElementsByTagName("tr");

        // Loop through first tbody's rows
        for (var i = 0; i < trs.length; i++) {

            // define the row's cells
            var tds = trs[i].getElementsByTagName("td");

            // hide the row
            trs[i].style.display = "none";

            // loop through row cells
            for (var i2 = 0; i2 < tds.length; i2++) {

                // if there's a match
                if (tds[i2].innerHTML.toUpperCase().indexOf(filter) > -1) {

                    // show the row
                    trs[i].style.display = "";

                    // skip to the next row
                    continue;

                }
            }
        }

    }
</script>

<script>
    function filterTable() {

        // Declare variables
        var input = document.getElementById("search-input");
        var filter = input.value.toUpperCase();
        var table = document.getElementById("table");
        var trs = table.tBodies[0].getElementsByTagName("tr");

        // Loop through first tbody's rows
        for (var i = 0; i < trs.length; i++) {

            // define the row's cells
            var tds = trs[i].getElementsByTagName("td");

            // hide the row
            trs[i].style.display = "none";

            // loop through row cells
            for (var i2 = 0; i2 < tds.length; i2++) {

                // if there's a match
                if (tds[i2].innerHTML.toUpperCase().indexOf(filter) > -1) {

                    // show the row
                    trs[i].style.display = "";

                    // skip to the next row
                    continue;

                }
            }
        }

    }
</script>
