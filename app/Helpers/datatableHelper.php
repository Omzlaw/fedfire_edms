<?php

use Yajra\DataTables\Services\DataTable;



if(!function_exists('getDataTable')) {
    function getDataTable(DataTable $dataTable, $query) {
        $modelTable = $dataTable::dataTable($query);
        return $modelTable;
    }   
}