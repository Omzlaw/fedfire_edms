<?php

$employee = $data['employee'];
$children = $data['children'];
$actionSheets = $data['actionSheets'];
$censures = $data['censures'];
$spouse = $data['spouse'];
$addresses = $data['addresses'];
$terminations = $data['terminations'];
$foreignTours = $data['foreignTours'];
$localLeaves = $data['localLeaves'];
$languages = $data['languages'];
$gratuities = $data['gratuities'];
$forceServices = $data['forceServices'];
$certificates = $data['certificates'];
$publicServices = $data['publicServices'];
$educations = $data['educations'];
$recordTrackers = $data['recordTrackers'];
$nextOfKins = $data['nextOfKins'];
$qualifications = $data['qualifications'];
$ranks = $data['ranks'];
$services = $data['services'];
$birthParticulars= $data['birthParticulars'];
$serviceRecords = $data['serviceRecords'];
$emoluments = $data['emoluments'];

?>
@extends('layouts.default')

{{-- Page title --}}
@section('title')
    Employees @parent
@stop

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div aria-label="breadcrumb" class="card-breadcrumb">
            <h1>Employee</h1>
        </div>
        {{-- <div class="separator-breadcrumb border-top"></div> --}}
    </section>

    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-lg-3 col-md-12 col-md-12">
                <div class="row employee-detail-cards">
                    <div class="col-lg-3 col-md-6">
                        <div class="ml-3 mb-3">
                            @if (isset($employee->profile_picture))
                                <img src="{{ asset($employee->profile_picture) }}" border="0" width="100" height="100"
                                    class="rounded-circle" align="center"
                                    alt="profile picture for {{ $employee->first_name . ' ' . $employee->last_name }}" />
                            @else
                                <span>No Image</span>
                            @endif
                        </div>

                        <div class="card" style="width: 18rem;">
                            <div class="row mt-10 pl-3">
                                <div class="form-group col-4">
                                    {!! Form::open(['route' => 'employeeSearch', 'class' => 'form-horizontal', 'files' => true]) !!}
                                    {!! Form::hidden('service_number', $employee->service_number, ['class' => 'form-control']) !!}
                                    {!! Form::submit('View Files', ['class' => 'btn custom-outline-primary']) !!}
                                    {!! Form::close() !!}
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-12 ml-3 ">
                                    <a class="btn secondary-color-bg" href="{{ route('report') }}">Record of Service</a>
                                </div>
                            </div>
                            <div class="card-header bg-secondary bg-gradient">
                                <h6>Bio-Data</h6>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <a href="#" id="basic-info-a">Basic Information</a>
                                </li>
                                <li class="list-group-item">
                                    <a class="dt"
                                        data-route="{{ route('humanresource.employeeAddresses.index') }}"
                                        data-model="{{ $addresses }}" href="#">Address</a>
                                </li>
                                <li class="list-group-item">
                                    <a class="dt"
                                        data-route="{{ route('humanresource.employeeBirthParticulars.index') }}"
                                        data-model="{{ $birthParticulars }}" href="#">Birth Particulars</a>
                                </li>
                                </li>
                                <li class="list-group-item"><a class="dt"
                                        data-route="{{ route('humanresource.employeeLanguages.index') }}"
                                        data-model="{{ $languages }}" href="#">Languages</a>
                                </li>
                            </ul>
                            <div class="card-header bg-secondary bg-gradient">
                                <h6>Relationships</h6>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <a class="dt"
                                        data-route="{{ route('humanresource.employeeChildrens.index') }}"
                                        data-model="{{ $children }}" href="#">Children</a>
                                </li>
                                </li>
                                <li class="list-group-item"><a class="dt"
                                        data-route="{{ route('humanresource.employeeWives.index') }}"
                                        data-model="{{ $spouse }}" href="#">Spouse</a>
                                </li>
                                <li class="list-group-item"><a class="dt"
                                        data-route="{{ route('humanresource.employeeNextOfKins.index') }}"
                                        data-model="{{ $nextOfKins }}" href="#">Next
                                        of
                                        Kins</a>
                                </li>
                            </ul>
                            <div class="card-header bg-secondary bg-gradient">
                                <h6>Certificates and Qualifications</h6>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <a class="dt"
                                        data-route="{{ route('humanresource.employeeCertificates.index') }}"
                                        data-model="{{ $certificates }}" href="#">Certificates</a>
                                </li>
                                </li>
                                <li class="list-group-item"><a class="dt"
                                        data-route="{{ route('humanresource.employeeEducations.index') }}"
                                        data-model="{{ $educations }}" href="#">Education</a>
                                </li>
                                <li class="list-group-item"><a class="dt"
                                        data-route="{{ route('humanresource.employeeQualifications.index') }}"
                                        data-model="{{ $qualifications }}" href="#">Qualifications</a>
                                </li>
                            </ul>
                            <div class="card-header bg-secondary bg-gradient">
                                <h6>Records</h6>
                            </div>
                            <li class="list-group-item"><a class="dt"
                                data-route="{{ route('humanresource.employeeEmolumentRecords.index') }}"
                                data-model="{{ $emoluments }}" href="#">Record of
                                Emolument</a>
                            </li>
                            <li class="list-group-item"><a class="dt"
                                data-route="{{ route('humanresource.employeeServiceRecords.index') }}"
                                data-model="{{ $serviceRecords }}" href="#">Record of
                                Service</a>
                            </li>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <a class="dt"
                                        data-route="{{ route('humanresource.employeeActionSheets.index') }}"
                                        data-model="{{ $actionSheets }}" href="#">Action
                                        Sheets</a>
                                </li>
                                </li>
                                <li class="list-group-item"><a class="dt"
                                        data-route="{{ route('humanresource.employeeCensures.index') }}"
                                        data-model="{{ $censures }}" href="#">Censures</a>
                                </li>
                                <li class="list-group-item"><a class="dt"
                                        data-route="{{ route('humanresource.employeeRecordTrackers.index') }}"
                                        data-model="{{ $recordTrackers }}" href="#">Record
                                        Trackers</a>
                                </li>

                                <li class="list-group-item"><a class="dt"
                                        data-route="{{ route('humanresource.employeeRanks.index') }}"
                                        data-model="{{ $ranks }}" href="#">Ranks</a>
                                </li>
                            </ul>
                            <div class="card-header bg-secondary bg-gradient">
                                <h6>Services</h6>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <a class="dt"
                                        data-route="{{ route('humanresource.employeeServices.index') }}"
                                        data-model="{{ $services }}" href="#">Services</a>
                                </li>
                                <li class="list-group-item">
                                    <a class="dt"
                                        data-route="{{ route('humanresource.employeeForceServices.index') }}"
                                        data-model="{{ $forceServices }}" href="#">Force
                                        Services</a>
                                </li>
                                </li>
                                <li class="list-group-item"><a class="dt"
                                        data-route="{{ route('humanresource.employeePublicServices.index') }}"
                                        data-model="{{ $publicServices }}" href="#">Public
                                        Services</a>
                                </li>
                            </ul>
                            <div class="card-header bg-secondary bg-gradient">
                                <h6>Retirement and Termination</h6>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <a class="dt"
                                        data-route="{{ route('humanresource.employeeGratuities.index') }}"
                                        data-model="{{ $gratuities }}" href="#">Gratuity</a>
                                </li>
                                </li>
                                <li class="list-group-item"><a class="dt"
                                        data-route="{{ route('humanresource.employeeTerminations.index') }}"
                                        data-model="{{ $terminations }}" href="#">Termination</a>
                                </li>
                            </ul>
                            <div class="card-header bg-secondary bg-gradient">
                                <h6>Tours and Leaves</h6>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <a class="dt"
                                        data-route="{{ route('humanresource.employeeForeignTours.index') }}"
                                        data-model="{{ $foreignTours }}" href="#">Foreign
                                        Tours</a>
                                </li>
                                </li>
                                <li class="list-group-item"><a class="dt"
                                        data-route="{{ route('humanresource.employeeLocalLeaves.index') }}"
                                        data-model="{{ $localLeaves }}" href="#">Local
                                        Leaves</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-12 col-md-12">
                <div id="details-div" class="row">
                    <div class="col-lg-12 col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h5 id="details-header" class="card-title d-inline"></h5>
                                <span class="float-right">
                                    <a id="add-new-button" data-route="" data-toggle="modal" data-target='#model_modal'
                                        class="btn secondary-color-bg  pull-right" href="#">Add New
                                    </a>
                                </span>
                            </div>

                            <div class="card-body">
                                <div id="details" class="table-responsive">
                                    {{-- <input type="text" id="search-input" onkeyup="filterTable()" placeholder="Search..."
                                        title="Search through table"> --}}
                                </div>
                            </div>

                        </div>
                    </div>
                </div>



                <div id="basic-info-table" class="card">
                    <div class="">
                        <div class=" row">
                        <div class="col-lg-6 col-md-12 col-sm-12 table-responsive">
                            <table class="table table-default table-striped">
                                @include('humanresource.employees.show_fields')

                            </table>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 table-responsive">
                            <table class="table table-default table-striped">
                                @include('humanresource.employees.show_fields2')

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>


    <script>
        window.onload = intialiseFunctions;

        function intialiseFunctions() {
            buildTable();
        }


        function getActions(id, url) {
            return `<div class='btn-group'>
                                @permission('employees-view')

                                    <a  data-dismiss="modal"
                                        data-toggle="modal"
                                        data-target='#model_modal'
                                        data-id="${id}"
                                        data-route="${url}/${id}"
                                        href="#" title='show'
                                        class='btn custom-outline-primary btn-xs action-buttons'>
                                        <i class="im im-icon-Information"></i>
                                    </a>

                                @endpermission

                                @permission('employees-edit')

                                    <a  data-dismiss="modal"
                                        data-toggle="modal"
                                        data-target='#model_modal'
                                        data-id="${id}"
                                        data-route="${url}/${id}/edit"
                                        href="#" title='edit'
                                        class='btn custom-outline-primary btn-xs action-buttons'>
                                        <i class="im im-icon-File-Edit"></i>
                                    </a>

                                @endpermission

                                @permission('employees-destroy')

                                <form id="delete-form-${id}" action="${url}/${id}" method="post">
                                    @csrf
                                    <input name="_method" type="hidden" value="DELETE">
                                    <button type="button"
                                        title='delete'
                                        class='btn btn-outline-danger btn-xs'
                                        onclick="confirmation(${id})">
                                        <i class="im im-icon-Remove"></i>
                                    </button>
                                </form>

                                @endpermission

                    </div>`;
        }

        function firstLetterUpper(theString) {
            var newString = theString.toLowerCase().replace(/(^\s*\w|[\.\!\?]\s*\w)/g, function(c) {
                return c.toUpperCase()
            });
            return newString;
        }


        function confirmation(id) {
            let result = confirm('Are you sure you want to delete');
            if (result) {
                $('#delete-form-' + id).submit();
            }
        }

        function buildTable() {

            let host = window.location.protocol + "//" + window.location.host;
            $('#details-div').hide();
            // $('#basic-info-table').hide();

            $("#basic-info-a").click(function() {
                $('#details-div').hide();
                $('#basic-info-table').show();
            })

            let currentRoute = '';

            $('.dt').each(function() {
                // console.log(currentRoute);

                $(this).click(function() {

                    currentRoute = $(this).data("route");

                    $('#basic-info-table').hide();
                    $('#details-div').show();

                    let detailsHead = $(this).text();
                    let route = $(this).data('route');
                    let data = $(this).data('model');
                    $('#details-header').text(detailsHead);

                    let div = document.getElementById('details');
                    div.removeChild(div.lastChild);
                    let table = document.createElement('table');
                    let thead = document.createElement('thead');
                    let tbody = document.createElement('tbody');

                    table.classList.add("table");
                    table.classList.add("table-bordered");
                    table.classList.add("table-striped");
                    table.setAttribute('id', 'details-table');
                    table.appendChild(thead);

                    document.getElementById('details').appendChild(table);

                    let columns = [];
                    if (data[0] != null || data[0] != undefined) {
                        columnNames = Object.keys(data[0]);
                        for (let i in columnNames) {

                            columns.push({
                                data: columnNames[i],
                                title: firstLetterUpper(columnNames[i].replace('_', ' ').replace(
                                    'id', '').replace('_', ' '))
                            });

                        }

                        columns.push({
                            title: 'Actions',
                            render: (data, type, row, meta) => {
                                return [
                                    getActions(row.id, route)
                                ].join('');
                            }
                        })

                        let table = $('#details-table').DataTable({
                            "filter": true, // this is for disable filter (search box)
                            "orderMulti": false, // for disable multiple column at once
                            "bDestroy": true, //for reinitialize the datatable
                            "data": data,
                            "columns": columns,
                            "responsive": true,
                            sortable: true,
                            ordering: true,
                            searching: true,
                            'aaSorting': [
                                [0, 'desc']
                            ],
                            // stateSave: true,
                            "fnRowCallback": function(nRow, aData, iDisplayIndex) {
                                nRow.setAttribute('id', aData[0]);
                            },
                            dom: 'lfrtip',
                            // dom: 'lfrtip',
                        });

                        table.column(0).visible(false);


                        $(".action-buttons").each(function(index) {
                            $(this).click(function() {
                                $('#model_frame').attr('src', $(this).data('route'));
                                $('#model_modal').modal('show');
                            })
                        });

                    }

                });
            });
            $('#add-new-button').click(function() {
                let createRoute = currentRoute + "/create";
                $('#model_frame').attr('src', createRoute);
                $('#model_modal').modal('show');
            })

        }
    </script>



@endsection


@section('footer_scripts')
    @include('layouts.datatables_js')
@endsection
