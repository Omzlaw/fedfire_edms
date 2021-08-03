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
        <div class="separator-breadcrumb border-top"></div>
    </section>

    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-3">
                <div class="row employee-detail-cards">
                    <div class="col-lg-3 col-md-6">
                        <div class="card" style="width: 18rem;">
                            {!! Form::open(['route' => 'searchEmployeeRecord', 'class' => 'form-horizontal', 'files' => true]) !!}
                            <div class="">
                                <div class="form-group col-4">
                                    {!! Form::hidden('file_no', $employee->file_no, ['class' => 'form-control']) !!}
                                </div>
                                <div class="form-group col-8">
                                    {!! Form::submit('View Files', ['class' => 'btn custom-outline-primary   ']) !!}
                                </div>
                            </div>
                        {!! Form::close() !!}
                            <div class="card-header bg-secondary bg-gradient">
                                <h6>Bio-Data</h6>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <a href="#" id="basic-info-a">Basic Information</a>
                                </li>
                                <li class="list-group-item">
                                    <a class="dt" data-route="humanresource/employeeAddresses"
                                        data-model="{{ $addresses }}" href="#">Address</a>
                                </li>
                                </li>
                                <li class="list-group-item"><a class="dt" data-route="humanresource/employeeLanguages"
                                        data-model="{{ $languages }}" href="#">Languages</a>
                                </li>
                            </ul>
                            <div class="card-header bg-secondary bg-gradient">
                                <h6>Relationships</h6>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <a class="dt" data-route="humanresource/employeeChildrens"
                                        data-model="{{ $children }}" href="#">Children</a>
                                </li>
                                </li>
                                <li class="list-group-item"><a class="dt" data-route="humanresource/employeeWives"
                                        data-model="{{ $spouse }}" href="#">Spouse</a>
                                </li>
                                <li class="list-group-item"><a class="dt" data-route="humanresource/employeeNextOfKins"
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
                                    <a class="dt" data-route="humanresource/employeeCertificates"
                                        data-model="{{ $certificates }}" href="#">Certificates</a>
                                </li>
                                </li>
                                <li class="list-group-item"><a class="dt" data-route="humanresource/employeeEducations"
                                        data-model="{{ $educations }}" href="#">Education</a>
                                </li>
                                <li class="list-group-item"><a class="dt" data-route="humanresource/employeeQualifications"
                                        data-model="{{ $qualifications }}" href="#">Qualifications</a>
                                </li>
                            </ul>
                            <div class="card-header bg-secondary bg-gradient">
                                <h6>Records</h6>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <a class="dt" data-route="humanresource/employeeActionSheets"
                                        data-model="{{ $actionSheets }}" href="#">Action
                                        Sheets</a>
                                </li>
                                </li>
                                <li class="list-group-item"><a class="dt" data-route="humanresource/employeeCensures"
                                        data-model="{{ $censures }}" href="#">Censures</a>
                                </li>
                                <li class="list-group-item"><a class="dt" data-route="humanresource/employeeRecordTrackers"
                                        data-model="{{ $recordTrackers }}" href="#">Record
                                        Trackers</a>
                                </li>
                            </ul>
                            <div class="card-header bg-secondary bg-gradient">
                                <h6>Services</h6>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <a class="dt" data-route="humanresource/employeeForceServices"
                                        data-model="{{ $forceServices }}" href="#">Force
                                        Services</a>
                                </li>
                                </li>
                                <li class="list-group-item"><a class="dt" data-route="humanresource/employeePublicServices"
                                        data-model="{{ $publicServices }}" href="#">Public
                                        Services</a>
                                </li>
                            </ul>
                            <div class="card-header bg-secondary bg-gradient">
                                <h6>Retirement and Termination</h6>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <a class="dt" data-route="humanresource/employeeGratuities"
                                        data-model="{{ $gratuities }}" href="#">Gratuity</a>
                                </li>
                                </li>
                                <li class="list-group-item"><a class="dt" data-route="humanresource/employeeTerminations"
                                        data-model="{{ $terminations }}" href="#">Termination</a>
                                </li>
                            </ul>
                            <div class="card-header bg-secondary bg-gradient">
                                <h6>Tours and Leaves</h6>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <a class="dt" data-route="humanresource/employeeForeignTours"
                                        data-model="{{ $foreignTours }}" href="#">Foreign
                                        Tours</a>
                                </li>
                                </li>
                                <li class="list-group-item"><a class="dt" data-route="humanresource/employeeLocalLeaves"
                                        data-model="{{ $localLeaves }}" href="#">Local
                                        Leaves</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    {{-- <div class="col-lg-3 col-md-6">
                        <div class="card" style="width: 18rem;">

                        </div>
                    </div> --}}
                    {{-- <div class="col-lg-3 col-md-6">
                        <div class="card" style="width: 18rem;">

                    </div> --}}
                    {{-- <div class="col-lg-3 col-md-6">
                        <div class="card" style="width: 18rem;">

                        </div>
                    </div> --}}
                    <div class="col-lg-3 col-md-6">
                        <div class="card" style="width: 18rem;">

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card" style="width: 18rem;">

                        </div>
                    </div>
        
                    <div class="col-lg-3 col-md-6">
                        <div class="card" style="width: 18rem;">

                        </div>
                    </div>
                    {{-- <div class="col-lg-3 col-md-6">
                        <div class="card" style="width: 18rem;">
                            <div class="card-header">
                                <h6>Files</h6>
                            </div>
                            <ul class="list-group list-group-flush">
                                </li>
                                <li class="list-group-item"><a class="dt" data-route="shared/fileDirectories"
                                        data-model="{{ $employee->fileDirectories }}" href="#">File Directory</a>
                                </li>
                            </ul>
                        </div>
                    </div> --}}
                </div>
            </div>
            <div class="col-9">
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
        
                                </div>
                            </div>
        
                        </div>
                    </div>
                </div>
        
        
        
                <div id="basic-info-table" class="card">
                    <div class="">
                        <div class="row">
                            <div class="col-6 table-responsive">
                                <table class="table table-default table-striped">
                                    @include('humanresource.employees.show_fields')
                
                                </table>
                            </div>
                            <div class="col-6 table-responsive">
                                <table class="table table-default table-striped">
                                    @include('humanresource.employees.show_fields2')
                
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




     

        {{-- <a href="humanresource.employees.index" class="btn secondary-color-bg">Back</a> --}}
    </div>

    <script>
        window.onload = intialiseFunctions;

        function intialiseFunctions(){
            buildTable();
        }


        function getActions(id, url) {
            let host = window.location.protocol + "//" + window.location.host;
            return `<div class='btn-group'>
                                <a  data-dismiss="modal" 
                                    data-toggle="modal" 
                                    data-target='#model_modal' 
                                    data-id="${id}" 
                                    data-route="${host}/${url}/${id}" 
                                    href="#" title='show'
                                    class='btn custom-outline-primary btn-xs action-buttons'>
                                    <i class="im im-icon-Information"></i>
                                </a>

                                <a  data-dismiss="modal" 
                                    data-toggle="modal" 
                                    data-target='#model_modal' 
                                    data-id="${id}" 
                                    data-route="${host}/${url}/${id}/edit" 
                                    href="#" title='edit'
                                    class='btn custom-outline-primary btn-xs action-buttons'>
                                    <i class="im im-icon-File-Edit"></i>
                                </a>
                                <form id="delete-form-${id}" action="${host}/${url}/${id}" method="post">
                                    @csrf
                                    <input name="_method" type="hidden" value="DELETE">
                                    <button type="button"  
                                        title='delete'
                                        class='btn btn-outline-danger btn-xs'
                                        onclick="confirmation(${id})">
                                        <i class="im im-icon-Remove"></i>
                                    </button>
                                </form>

                    </div>`;
        }


        function confirmation(id) {
            let result = confirm('Are you sure you want to delete');
            if(result) {
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


            $('.dt').each(function() {

                $(this).click(function() {
                    let createRoute = host + "/" + $(this).data("route") + "/create";
                    $('#model_frame').attr('src', createRoute);

                    $('#basic-info-table').hide();
                    $('#details-div').show();

                    let detailsHead = $(this).text();
                    let route = $(this).data('route');
                    let data = $(this).data('model');
                    $('#details-header').text(detailsHead);

                    let div = document.getElementById('details');
                    div.removeChild(div.lastChild);
                    var table = document.createElement('table');
                    var thead = document.createElement('thead');
                    var tbody = document.createElement('tbody');

                    table.classList.add("table");
                    table.classList.add("table-bordered");
                    table.classList.add("table-striped");
                    table.setAttribute('id', 'details-table');
                    table.appendChild(thead);

                    document.getElementById('details').appendChild(table);

                    var columns = [];
                    if (data[0] != null || data[0] != undefined) {
                        columnNames = Object.keys(data[0]);
                        for (var i in columnNames) {
                                columns.push({
                                data: columnNames[i],
                                title: columnNames[i],
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
                            stateSave: true,
                            "fnRowCallback": function(nRow, aData, iDisplayIndex) {
                                nRow.setAttribute('id', aData[0]);
                            },
                            // dom: 'id',
                            dom: 'Bfrtip',
                            buttons: [
                                'pdf',
                                'excel',
                                'print',
                                'csv'
                            ],
                        });

                        table.column( 0 ).visible( false );

                        $(".action-buttons").each(function(index) {
                            $(this).click(function() {
                                $('#model_frame').attr('src', $(this).data('route'));
                                $('#model_modal').modal('show');
                            })
                        });

                    }

                });
            });
        }
    </script>



@endsection


@section('footer_scripts')
    @include('layouts.datatables_js')
@endsection
