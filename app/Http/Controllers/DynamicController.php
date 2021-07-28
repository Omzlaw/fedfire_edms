<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\DataTables\DynamicDataTable;

class DynamicController extends AppBaseController
{
        /**
     * Display a listing of the Dynamic.
     *
     * @param DynamicDataTable $dynamicDataTable
     * @return Response
     */
    public function index(Request $request)
    {
        
        // return $dynamicDataTable->render('hunanresource.employees.show');
    }
}
