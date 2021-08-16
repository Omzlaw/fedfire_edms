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
        {{-- <div class="separator-breadcrumb border-top"></div> --}}
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        @include('flash::message')
        <div class="card">
            <div class="card-body ml-15">
                <table id="table" class="table table-striped table-border">

                </table>
            </div>
        </div>
    </div>
@endsection

<script type="text/javascript">
    window.onload = function() {
        buildTable();
    };

    function getActions(id) {
        let employee = window.location.protocol + "//" + window.location.host + "/humanresource/employees/" + id;

        return `<div class='btn-group'>
                                <a 
                                    href="${employee}" title='view'
                                    class='btn custom-outline-primary btn-xs action-buttons'>
                                    <i class="im im-icon-Information"></i>
                                </a>

                    </div>`;
    }

    function firstLetterUpper(theString) {
        var newString = theString.toLowerCase().replace(/(^\s*\w|[\.\!\?]\s*\w)/g, function(c) {
            return c.toUpperCase()
        });
        return newString;
    }

    function buildTable() {

        let data = <?php echo $employees; ?>;
        console.log(data[0]);
        let columns = [];
        columnNames = Object.keys(data[0]);
        console.log(columnNames);
        for (var i in columnNames) {

            columns.push({
                data: columnNames[i],
                title: firstLetterUpper(columnNames[i].replace('_', ' ').replace(
                    'id', '').replace('_', ''))
            });

        }

        columns.push({
            title: 'Actions',
            render: (data, type, row, meta) => {
                return [
                    getActions(row.id)
                ].join('');
            }
        })

        let table = $('#table').DataTable({
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
            // dom: 'Bfrtip',
            dom: 'lfrtip'
        });

        table.column(0).visible(false);
    }
</script>


@section('footer_scripts')
    @include('layouts.datatables_js')
@endsection
