@extends('layouts.default')

{{-- Page title --}}
@section('title')
Countries @parent
@stop

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div aria-label="breadcrumb" class="card-breadcrumb">
        <h1>Countries</h1>
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
            <h5 class="card-title d-inline">Countries</h5>
            <span class="float-right">
                <a class="btn secondary-color-bg pull-right" href="{{ route('shared.countries.create') }}">Add New</a>
            </span>
        </section>
        <div class="card-body">
            {{-- <input class="mb-3" type="text" id="search-input" onkeyup="filterTable()" placeholder="Search..."
title="Search through table"> --}}
            @include('shared.countries.table')
        </div>
    </div>
    <div class="text-center">
        
    </div>
</div>
@endsection <script>

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
