<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Crud Builder - Josh V2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">

    <link href="{{ asset('css/pages/builder2.css') }}" rel="stylesheet">

    <!-- Loading all other dependencies -->
    <script src="{{ asset('js/jquery.min.js') }}">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mustache.js/3.0.1/mustache.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.9.1/underscore.js"></script>

    <link rel="shortcut icon" href="img/favicon.ico">
</head>

<body>
    <header class="header">
        <nav class="navbar navbar-expand-lg navbar-light navbar-static-top" role="navigation">
            <a href="javascript:void(0)" class="ml-100 toggle-right d-xl-none d-lg-block">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                <img src="{{ asset('img/images/toggle.png')}}" alt="logo" />


            </a>
            <!-- Header Navbar: style can be found in header-->
            <h2>Josh</h2> <a href="{{ route('dashboard') }}" class="pl-2">&laquo;Go Back</a>
            <!-- Sidebar toggle button-->

            <div class="navbar-right ml-auto">
                <ul class="navbar-nav nav">


                    <li class="dropdown notifications-menu nav-item dropdown">
                        <a href="javascript:void(0)" class="dropdown-toggle nav-link dropdown-toggle"
                            data-toggle="dropdown" id="navbarDropdown">
                            <i class="im im-icon-Boy fs-16"></i>


                        </a>
                        <ul class="dropdown-menu dropdown-notifications table-striped" aria-labelledby="navbarDropdown">

                            <li class="dropdown-footer">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div>
        </nav>
    </header>

    <div class="card">
        <div class="card-header bg-primary text-white">
            <h5 class="card-title d-inline">Select Fields</h5>
            <span class="float-right">
                <i class="fa fa-chevron-down  panel-collapsed clickable"></i>
            </span>
        </div>
        <div id="info" style="display: none"></div>
        <div class="card-body">
            @csrf
            <div class="row">
                <div class="form-group col-md-12">
                    <div class="alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        The Primary key <code>id</code> and timestamps <code>created_at</code> and
                        <code>updated_at</code>
                        will be created automatically!
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <!-- Building Form. -->
                <div class="col-md-6">
                    <div class="clearfix">

                        <div id="build">
                            <form id="target" class="form-horizontal"></form>
                        </div>

                        <div class="btn-group float-right" style="margin-top: 5px">
                            <button type="button" class="btn btn-secondary" id="saveForm">Save Current Form
                                Layout</button>
                            <label class="btn btn-primary" style="margin-bottom: 0px">Load Form Layout From File
                                <input type="file" id="loadForm" style="display: none;">
                            </label>
                        </div>

                    </div>
                </div>
                <!-- / Building Form. -->

                <!-- Components -->
                <div class="col-md-6">
                    <h4>Drag & Drop components</h4>
                    <hr>
                    <div class="tabbable">
                        <ul class="nav nav-tabs nav-fill" id="formtabs">
                            <!-- Tab nav -->
                        </ul>
                        <form class="form-horizontal" id="components">
                            <fieldset>
                                <div class="tab-content">
                                    <!-- Tabs of snippets go here -->
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
                <!-- / Components -->

            </div>
        </div>
        <div class="card">
            <div class="card-header bg-light">
                <h5 class="card-title d-inline">Select model & other options...</h5>

            </div>
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="txtModelName">Model Name<span class="required">*</span></label>
                        <input type="text" class="form-control" required id="txtModelName" placeholder="Enter name">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="drdCommandType">Command Type</label>
                        <select id="drdCommandType" class="form-control" style="width: 100%">
                            <option value="infyom:api_scaffold">API Scaffold Generator</option>
                            <option value="infyom:api">API Generator</option>
                            <option value="infyom:scaffold">Scaffold Generator</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="txtCustomTblName">Custom Table Name</label>
                        <input type="text" class="form-control" id="txtCustomTblName" placeholder="Enter table name">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-12">
                        <label for="txtModelName">Options</label>

                        <div class="form-inline form-group" style="border-color: transparent">
                            <div class="checkbox pr-3">
                                <label>
                                    <input type="checkbox" class="flat-red" id="chkDelete"><span class="ml-1">
                                        Soft Delete </span>
                                </label>
                            </div>
                            <div class="checkbox pr-3">
                                <label>
                                    <input type="checkbox" class="flat-red" id="chkSave"> <span class="ml-1">Save
                                        Schema</span>
                                </label>
                            </div>
                            <div class="checkbox pr-3" id="chSwag">
                                <label>
                                    <input type="checkbox" class="flat-red" id="chkSwagger"> <span
                                        class="ml-1">Swagger</span>
                                </label>
                            </div>
                            <div class="checkbox pr-3" id="chTest">
                                <label>
                                    <input type="checkbox" class="flat-red" id="chkTestCases"> <span class="ml-1">Test
                                        Cases</span>
                                </label>
                            </div>
                            <div class="checkbox pr-3" id="chDataTable">
                                <label>
                                    <input type="checkbox" class="flat-red" id="chkDataTable"> <span
                                        class="ml-1">Datatables</span>
                                </label>
                            </div>
                            <div class="checkbox pr-3" id="chMigration">
                                <label>
                                    <input type="checkbox" class="flat-red" id="chkMigration" checked> <span
                                        class="ml-1">Migration</span>
                                </label>
                            </div>
                            <div class="checkbox pr-3" id="chForceMigrate">
                                <label>
                                    <input type="checkbox" class="flat-red" id="chkForceMigrate"> <span class="ml-1">Force
                                        Migrate</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-3">
                        <label for="txtPrefix">Prefix</label>
                        <input type="text" class="form-control" id="txtPrefix" placeholder="Enter prefix">
                    </div>

                    <div class="form-group col-md-1">
                        <label for="txtPaginate">Paginate</label>
                        <input type="number" class="form-control" value="10" id="txtPaginate" placeholder="">
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <div class="form-inline col-md-12" style="padding:15px 15px;text-align: right">
                <div class="form-group" style="border-color: transparent;padding-left: 10px">
                    <button type="submit" class="btn btn-flat btn-primary btn-blue" id="btnGenerate">Generate
                    </button>
                </div>
                <div class="form-group" style="border-color: transparent;padding-left: 10px">
                    <button type="button" class="btn btn-default btn-flat" id="btnReset" data-toggle="modal"
                        data-target="#confirm-delete"> Reset
                    </button>
                </div>
            </div>
        </div>
    </div>
    <hr>



    <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Confirm Reset</h4>
                </div>

                <div class="modal-body">
                    <p style="font-size: 16px">This will reset all of your fields. Do you want to
                        proceed?</p>

                    <p class="debug-url"></p>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-flat btn-default" data-dismiss="modal">No
                    </button>
                    <a id="btnModelReset" class="btn btn-flat btn-danger btn-ok" data-dismiss="modal">Yes</a>
                </div>
            </div>
        </div>
    </div>



    <!-- /container -->

    <script data-main="js/builder2/main.js" src="https://rawgithub.com/jrburke/requirejs/master/require.js">
    </script>

    <script>
        $("#btnGenerate").on("click", function () {

        formObj = myform_view.collection.data;
        var fieldArr = [];

        //loop through them
        for (let index = 1; index < formObj.length; index++) {

            let htmlType = htmlValue= formObj[index].type;
            if (htmlType == "select" || htmlType == "radio") {
                 for(let i=0; i <formObj[index].fields.radios.value.length; i++ )
                 {
                htmlValue +=  "," + formObj[index].fields.radios.value[i] + ":" + formObj[index].fields.radiosValues.value[i];
                 }
            }

            fieldArr.push({
                        name: formObj[index].fields.name.value,
                        dbType: formObj[index].fields.dbType.value.find(type => type.selected == true).value,
                         htmlType: htmlValue,
                        // validations: formObj[index].fields.required.value,
                        // foreignTable: $(this).find('.txtForeignTable').val(),
                         isForeign:false,
                        searchable: formObj[index].fields.searchable.value || false,
                        fillable: formObj[index].fields.fillable.value || false,
                        inForm: formObj[index].fields.inForm.value || false,
                        inIndex: formObj[index].fields.inIndex.value || false
                    });

        }

        // add id to fieldsArr
        fieldArr.unshift({
        name: 'id',
        dbType: 'increments',
        htmlType: "number",
        validations: "",
        foreignTable: "",
        isForeign: false,
        searchable: true,
        fillable: false,
        primary: true,
        inForm: false,
        inIndex: true
        });

        // add timestaps to fieldArr
        fieldArr.push({
        name: 'created_at',
        dbType: 'timestamp',
        htmlType: "date",
        validations: "",
        foreignTable: "",
        isForeign: false,
        searchable: false,
        fillable: false,
        primary: false,
        inForm: false,
        inIndex: true
        });
        fieldArr.push({
        name: 'updated_at',
        dbType: 'timestamp',
        htmlType: "date",
        validations: "",
        foreignTable: "",
        isForeign: false,
        searchable: false,
        fillable: false,
        primary: false,
        inForm: false,
        inIndex: true
        });

        var data = {
        modelName: $('#txtModelName').val(),
        commandType: $('#drdCommandType').val(),
        tableName: $('#txtCustomTblName').val(),
        migrate: $('#chkMigration').prop('checked'),
        options: {
        softDelete: $('#chkDelete').prop('checked'),
        save: $('#chkSave').prop('checked'),
        prefix: $('#txtPrefix').val(),
        paginate: $('#txtPaginate').val(),
        forceMigrate: $('#chkForceMigrate').prop('checked'),
        },
        addOns: {
        swagger: $('#chkSwagger').prop('checked'),
        tests: $('#chkTestCases').prop('checked'),
        datatables: $('#chkDataTable').prop('checked')
        },
        fields: fieldArr,
        // relations: relationFieldArr
        };

        data['_token'] = $("input[name=_token]").val();
        console.log(data);

        $.ajax({
        url: '{{ route('io_generator_builder_generate') }}',
        // type: "POST",
        method: "POST",
        dataType: 'json',
        contentType: 'application/json',
        data: JSON.stringify(data),
        success: function (result) {
        $("#info").html("");
        $("#info").append('<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>' + result + '</strong></div>');
        $("#info").show();
        var $container = $("html,body");
        var $scrollTo = $('#info');
        $container.animate({scrollTop: $scrollTo.offset().top - $container.offset().top, scrollLeft: 0},300);
        setTimeout(function () {
        $('#info').fadeOut('fast');
        }, 3000);
        location.reload();
        },
        error: function (result) {
        var result = JSON.parse(JSON.stringify(result));
        var errorMessage = '';
        if (result.hasOwnProperty('responseJSON') && result.responseJSON.hasOwnProperty('message')) {
        errorMessage = result.responseJSON.message;
        }

        $("#info").html("");
        $("#info").append('<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Fail! </strong>' + errorMessage + '</div>');
        $("#info").show();
        var $container = $("html,body");
        var $scrollTo = $('#info');
        $container.animate({ scrollTop: $scrollTo.offset().top}, 300);
        setTimeout(function () {
        $('#info').fadeOut('fast');
        }, 3000);
        }
        });

        return false;
        });
    </script>
</body>

</html>
