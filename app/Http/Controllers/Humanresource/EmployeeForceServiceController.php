<?php

namespace App\Http\Controllers\Humanresource;

use Flash;
use Response;
use App\Http\Requests\Humanresource;
use App\Models\Humanresource\Employee;
use App\Http\Controllers\AppBaseController;
use App\Models\Humanresource\EmployeeForceService;
use App\DataTables\Humanresource\EmployeeForceServiceDataTable;
use App\Http\Requests\Humanresource\CreateEmployeeForceServiceRequest;
use App\Http\Requests\Humanresource\UpdateEmployeeForceServiceRequest;

class EmployeeForceServiceController extends AppBaseController
{
    /**
     * Display a listing of the EmployeeForceService.
     *
     * @param EmployeeForceServiceDataTable $employeeForceServiceDataTable
     * @return Response
     */
    public function index(EmployeeForceServiceDataTable $employeeForceServiceDataTable)
    {
        Flash::error('Not Allowed');
        return back();
        // return $employeeForceServiceDataTable->render('humanresource.employee_force_services.index');
    }

    /**
     * Show the form for creating a new EmployeeForceService.
     *
     * @return Response
     */
    public function create()
    {
        if (!check_permission('employees-create')) {
            Flash::error('Permission Denied');
        }
        $employees = new Employee;
        return view('humanresource.employee_force_services.create', compact('employees'));
    }

    /**
     * Store a newly created EmployeeForceService in storage.
     *
     * @param CreateEmployeeForceServiceRequest $request
     *
     * @return Response
     */
    public function store(CreateEmployeeForceServiceRequest $request)
    {
        if (!check_permission('employees-create')) {
            Flash::error('Permission Denied');
        }
        $input = $request->all();

        /** @var EmployeeForceService $employeeForceService */
        $employeeForceService = EmployeeForceService::create($input);

        Flash::success('Employee Force Service saved successfully.');
        add_audit('create', 'Employee Force Service');
        close_modal_refresh();

        //return redirect(route('humanresource.employeeForceServices.index'));
    }

    /**
     * Display the specified EmployeeForceService.
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
        /** @var EmployeeForceService $employeeForceService */
        $employeeForceService = EmployeeForceService::find($id);

        if (empty($employeeForceService)) {
            Flash::error('Employee Force Service not found');

            //return redirect(route('humanresource.employeeForceServices.index'));
        }

        return view('humanresource.employee_force_services.show')->with('employeeForceService', $employeeForceService);
    }

    /**
     * Show the form for editing the specified EmployeeForceService.
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
        /** @var EmployeeForceService $employeeForceService */
        $employeeForceService = EmployeeForceService::find($id);

        if (empty($employeeForceService)) {
            Flash::error('Employee Force Service not found');

            //return redirect(route('humanresource.employeeForceServices.index'));
        }
        $employees = new Employee;
        return view('humanresource.employee_force_services.edit', compact('employees'))->with('employeeForceService', $employeeForceService);
    }

    /**
     * Update the specified EmployeeForceService in storage.
     *
     * @param  int              $id
     * @param UpdateEmployeeForceServiceRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEmployeeForceServiceRequest $request)
    {
        if (!check_permission('employees-edit')) {
            Flash::error('Permission Denied');
        }
        /** @var EmployeeForceService $employeeForceService */
        $employeeForceService = EmployeeForceService::find($id);

        if (empty($employeeForceService)) {
            Flash::error('Employee Force Service not found');
            close_modal_refresh();

            //return redirect(route('humanresource.employeeForceServices.index'));
        }

        $employeeForceService->fill($request->all());
        $employeeForceService->save();
        add_audit('update', 'Employee Force Service');

        Flash::success('Employee Force Service updated successfully.');
        close_modal_refresh();

        //return redirect(route('humanresource.employeeForceServices.index'));
    }

    /**
     * Remove the specified EmployeeForceService from storage.
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
        /** @var EmployeeForceService $employeeForceService */
        $employeeForceService = EmployeeForceService::find($id);

        if (empty($employeeForceService)) {
            Flash::error('Employee Force Service not found');

            //return redirect(route('humanresource.employeeForceServices.index'));
        }

        $employeeForceService->delete();
        add_audit('delete', 'Employee Force Service');

        Flash::success('Employee Force Service deleted successfully.');
        return redirect(route('humanresource.employees.show', session('employee_id')));

        //return redirect(route('humanresource.employeeForceServices.index'));
    }
}
