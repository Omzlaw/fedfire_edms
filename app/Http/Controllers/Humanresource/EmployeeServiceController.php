<?php

namespace App\Http\Controllers\Humanresource;

use Flash;
use Response;
use App\Models\Shared\State;
use App\Http\Requests\Humanresource;
use App\Models\Shared\GeoPoliticalZone;
use App\Http\Controllers\AppBaseController;
use App\Models\Humanresource\EmployeeService;
use App\DataTables\Humanresource\EmployeeServiceDataTable;
use App\Http\Requests\Humanresource\CreateEmployeeServiceRequest;
use App\Http\Requests\Humanresource\UpdateEmployeeServiceRequest;

class EmployeeServiceController extends AppBaseController
{
    /**
     * Display a listing of the EmployeeService.
     *
     * @param EmployeeServiceDataTable $employeeServiceDataTable
     * @return Response
     */
    public function index(EmployeeServiceDataTable $employeeServiceDataTable)
    {
        Flash::error('Not Allowed');
        return back();
        // return $employeeServiceDataTable->render('humanresource.employee_services.index');
    }

    /**
     * Show the form for creating a new EmployeeService.
     *
     * @return Response
     */
    public function create()
    {
        if (!check_permission('employees-create')) {
            Flash::error('Permission Denied');
        }
        $states = new State;
        $geo_political_zones = new GeoPoliticalZone;
        return view('humanresource.employee_services.create', compact('states', 'geo_political_zones'));
    }

    /**
     * Store a newly created EmployeeService in storage.
     *
     * @param CreateEmployeeServiceRequest $request
     *
     * @return Response
     */
    public function store(CreateEmployeeServiceRequest $request)
    {
        if (!check_permission('employees-create')) {
            Flash::error('Permission Denied');
        }
        $input = $request->all();

        /** @var EmployeeService $employeeService */
        $employeeService = EmployeeService::create($input);

        Flash::success('Employee Service saved successfully.');
        add_audit('create', 'Employee Service');
        close_modal_refresh();

        // return redirect(route('humanresource.employeeServices.index'));
    }

    /**
     * Display the specified EmployeeService.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        if (!check_permission('employees-view')) {
            Flash::error('Permission Denied');
        }
        /** @var EmployeeService $employeeService */
        $employeeService = EmployeeService::find($id);

        if (empty($employeeService)) {
            Flash::error('Employee Service not found');

            // return redirect(route('humanresource.employeeServices.index'));
        }

        return view('humanresource.employee_services.show')->with('employeeService', $employeeService);
    }

    /**
     * Show the form for editing the specified EmployeeService.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        if (!check_permission('employees-edit')) {
            Flash::error('Permission Denied');
        }
        /** @var EmployeeService $employeeService */
        $employeeService = EmployeeService::find($id);

        if (empty($employeeService)) {
            Flash::error('Employee Service not found');

            // return redirect(route('humanresource.employeeServices.index'));
        }
        $states = new State;
        $geo_political_zones = new GeoPoliticalZone;

        return view('humanresource.employee_services.edit',compact('states', 'geo_political_zones'))->with('employeeService', $employeeService);
    }

    /**
     * Update the specified EmployeeService in storage.
     *
     * @param  int              $id
     * @param UpdateEmployeeServiceRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEmployeeServiceRequest $request)
    {
        if (!check_permission('employees-edit')) {
            Flash::error('Permission Denied');
        }
        /** @var EmployeeService $employeeService */
        $employeeService = EmployeeService::find($id);

        if (empty($employeeService)) {
            Flash::error('Employee Service not found');

            // return redirect(route('humanresource.employeeServices.index'));
        }

        $employeeService->fill($request->all());
        $employeeService->save();
        add_audit('update', 'Employee Service');

        Flash::success('Employee Service updated successfully.');
        close_modal_refresh();

        // return redirect(route('humanresource.employeeServices.index'));
    }

    /**
     * Remove the specified EmployeeService from storage.
     *
     * @param  int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        if (!check_permission('employees-destroy')) {
            Flash::error('Permission Denied');
        }
        /** @var EmployeeService $employeeService */
        $employeeService = EmployeeService::find($id);

        if (empty($employeeService)) {
            Flash::error('Employee Service not found');

            // return redirect(route('humanresource.employeeServices.index'));
        }

        $employeeService->delete();
        add_audit('delete', 'Employee Service');

        Flash::success('Employee Service deleted successfully.');
        return redirect(route('humanresource.employees.show', session('employee_id')));

        // return redirect(route('humanresource.employeeServices.index'));
    }
}
