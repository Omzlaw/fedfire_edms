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
            <div class="col-lg-3 col-md-6">
                <div class="card" style="width: 18rem;">
                    <div class="card-header">
                        <h6>Bio-Data</h6>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <a id="basic-info-a">Basic Information</a>
                        </li>
                        <li class="list-group-item">
                            <a class="dt" data-route="humanresource/employeeAddresses" data-model="{{ $employee->addresses }}"
                                href="#">Address</a>
                        </li>
                        </li>
                        <li class="list-group-item"><a class="dt" data-route="humanresource/employeeLanguages"
                                data-model="{{ $employee->languages }}" href="#">Languages</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card" style="width: 18rem;">
                    <div class="card-header">
                        <h6>Relationships</h6>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <a class="dt" data-route="humanresource/employeeChildrens" data-model="{{ $employee->children }}" href="#">Children</a>
                        </li>
                        </li>
                        <li class="list-group-item"><a class="dt" data-route="humanresource/employeeWives" data-model="{{ $employee->spouse }}"
                                href="#">Spouse</a>
                        </li>
                        <li class="list-group-item"><a class="dt" data-route="humanresource/employeeNextOfKin"
                                data-model="{{ $employee->nextOfKins }}" href="#">Next
                                of
                                Kins</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card" style="width: 18rem;">
                    <div class="card-header">
                        <h6>Certificates and Qualifications</h6>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <a class="dt" data-route="humanresource/employeeCertificates" data-model="{{ $employee->certificates }}"
                                href="#">Certificates</a>
                        </li>
                        </li>
                        <li class="list-group-item"><a class="dt" data-route="humanresource/employeEeducations"
                                data-model="{{ $employee->educations }}" href="#">Education</a>
                        </li>
                        <li class="list-group-item"><a class="dt" data-route="humanresource/employeeQualifications"
                                data-model="{{ $employee->qualifications }}" href="#">Qualifications</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card" style="width: 18rem;">
                    <div class="card-header">
                        <h6>Records</h6>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <a class="dt" data-route="humanresource/employeeActionSheets" data-model="{{ $employee->actionSheets }}"
                                href="#">Action
                                Sheets</a>
                        </li>
                        </li>
                        <li class="list-group-item"><a class="dt" data-route="humanresource/employeeCensures"
                                data-model="{{ $employee->censures }}" href="#">Censures</a>
                        </li>
                        <li class="list-group-item"><a class="dt" data-route="humanresource/employeeRecordTrackers"
                                data-model="{{ $employee->recordTrackers }}" href="#">Record
                                Trackers</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card" style="width: 18rem;">
                    <div class="card-header">
                        <h6>Services</h6>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <a class="dt" data-route="humanresource/employeeForceServices" data-model="{{ $employee->forceServices }}"
                                href="#">Force
                                Services</a>
                        </li>
                        </li>
                        <li class="list-group-item"><a class="dt" data-route="humanresource/employeePublicServices"
                                data-model="{{ $employee->publicServices }}" href="#">Public
                                Services</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card" style="width: 18rem;">
                    <div class="card-header">
                        <h6>Retirement and Termination</h6>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <a class="dt" data-route="humanresource/employeeGratuities" data-model="{{ $employee->gratuities }}"
                                href="#">Gratuity</a>
                        </li>
                        </li>
                        <li class="list-group-item"><a class="dt" data-route="humanresource/employeeTerminations"
                                data-model="{{ $employee->terminations }}" href="#">Termination</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card" style="width: 18rem;">
                    <div class="card-header">
                        <h6>Tours and Leaves</h6>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <a class="dt" data-route="humanresource/employeeForeignTours" data-model="{{ $employee->foreignTours }}"
                                href="#">Foreign
                                Tours</a>
                        </li>
                        </li>
                        <li class="list-group-item"><a class="dt" data-route="humanresource/employeeLocalLeaves"
                                data-model="{{ $employee->localLeaves }}" href="#">Local
                                Leaves</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
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
            </div>
        </div>


        <div id="details-div" class="row">
            <div class="col-lg-12 col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5 id="details-header" class="card-title d-inline"></h5>
                        <span class="float-right">
                            <a id="add-new-button" 
                                data-route=""                                
                                data-toggle="modal" 
                                data-target='#model_modal' 
                                data-employee-id="{{ $employee->id }}" 
                                class="btn btn-primary pull-right" href="#">Add New
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
            <div class="table-responsive">
                <table class="table table-default">
                    @include('humanresource.employees.show_fields')

                </table>
            </div>
        </div>

        {{-- <a href="humanresource.employees.index" class="btn btn-primary">Back</a> --}}
    </div>

    <script>
        window.onload = buildTable;



        function getActions(id, url) {
            let host = window.location.protocol + "//" + window.location.host;
            return `<div class='btn-group'>

                            <a  data-dismiss="modal" 
                                data-toggle="modal" 
                                data-target='#model_modal' 
                                data-id="${id}" 
                                data-route="${host}/${url}/${id}" 
                                href="#" title='show'
                                class='btn btn-outline-info btn-xs action-buttons'>
                                <i class="im im-icon-Information"></i>
                            </a>

                            <a  data-dismiss="modal" 
                                data-toggle="modal" 
                                data-target='#model_modal' 
                                data-id="${id}" 
                                data-route="${host}/${url}/${id}/edit" 
                                href="#" title='edit'
                                class='btn btn-outline-primary btn-xs action-buttons'>
                                <i class="im im-icon-File-Edit"></i>
                            </a>

                            <a   
                                data-id="${id}" 
                                data-route="${host}/${url}/${id}" 
                                href="#" title='delete'
                                class='btn btn-outline-danger btn-xs delete-button'                                
                                onclick="return confirm('Are you sure?')">
                                <i class="im im-icon-Remove"></i>

                            </a>
                    </div>`;
        }

        function buildTable() {
            let host = window.location.protocol + "//" + window.location.host;
            $('#details-div').hide();
            $('#basic-info-table').hide();

            $("#basic-info-a").click(function() {
                $('#details-div').hide();
                $('#basic-info-table').show();
            })

            $('.dt').each(function() {
                $(this).click(function() {
                    $("#add-new-button").attr("data-route", host + "/" + $(this).data("route") + "/create");
                    $("#add-new-button").click(function() {
                        $('#model_frame').attr('src', $(this).data('route'));                   
                    })

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
                    columnNames = Object.keys(data[0]);
                    for (var i in columnNames) {
                        columns.push({
                            data: columnNames[i],
                            title: columnNames[i],
                        });
                    }

                    columns.push({
                        defaultContent: getActions(1, route),
                        title: 'Actions'
                    })

                    $('#details-table').DataTable({
                        "filter": true, // this is for disable filter (search box)
                        "orderMulti": false, // for disable multiple column at once
                        "bDestroy": true, //for reinitialize the datatable
                        "data": data,
                        "columns": columns,
                        "responsive": true,
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
                        ]
                    });

                    $(".action-buttons").each(function(index) {
                        $(this).click(function() {
                            $('#model_frame').attr('src', $(this).data('route'));
                            $('#model_modal').modal('show');
                        })
                     });
                });
            });
        }
    </script>



@endsection


@section('footer_scripts')
    @include('layouts.datatables_js')
@endsection
