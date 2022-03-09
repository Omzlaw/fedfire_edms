<?php

namespace App\Http\Controllers\Humanresource;

use Flash;
use Response;
use App\Http\Requests\Humanresource;
use App\Models\Humanresource\Employee;
use App\Http\Controllers\AppBaseController;
use App\Models\Humanresource\EmployeePublicService;
use App\DataTables\Humanresource\EmployeePublicServiceDataTable;
use App\Http\Requests\Humanresource\CreateEmployeePublicServiceRequest;
use App\Http\Requests\Humanresource\UpdateEmployeePublicServiceRequest;

class EmployeePublicServiceController extends AppBaseController
{
    /**
     * Display a listing of the EmployeePublicService.
     *
     * @param EmployeePublicServiceDataTable $employeePublicServiceDataTable
     * @return Response
     */
    public function index(EmployeePublicServiceDataTable $employeePublicServiceDataTable)
    {
        Flash::error('Not Allowed');
        return back();
        // return $employeePublicServiceDataTable->render('humanresource.employee_public_services.index');
    }

    /**
     * Show the form for creating a new EmployeePublicService.
     *
     * @return Response
     */
    public function create()
    {
        if (!check_permission('employees-create')) {
            Flash::error('Permission Denied');
        }
        $employees = new Employee;
        return view('humanresource.employee_public_services.create', compact('employees'));
    }

    /**
     * Store a newly created EmployeePublicService in storage.
     *
     * @param CreateEmployeePublicServiceRequest $request
     *
     * @return Response
     */
    public function store(CreateEmployeePublicServiceRequest $request)
    {
        if (!check_permission('employees-create')) {
            Flash::error('Permission Denied');
        }
        $input = $request->all();

        /** @var EmployeePublicService $employeePublicService */
        $employeePublicService = EmployeePublicService::create($input);

        Flash::success('Employee Public Service saved successfully.');
        add_audit('create', 'Employee Public Service');
        close_modal_refresh();

        //return redirect(route('humanresource.employeePublicServices.index'));
    }

    /**
     * Display the specified EmployeePublicService.
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
        /** @var EmployeePublicService $employeePublicService */
        $employeePublicService = EmployeePublicService::find($id);

        if (empty($employeePublicService)) {
            Flash::error('Employee Public Service not found');

            //return redirect(route('humanresource.employeePublicServices.index'));
        }

        return view('humanresource.employee_public_services.show')->with('employeePublicService', $employeePublicService);
    }

    /**
     * Show the form for editing the specified EmployeePublicService.
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
        /** @var EmployeePublicService $employeePublicService */
        $employeePublicService = EmployeePublicService::find($id);

        if (empty($employeePublicService)) {
            Flash::error('Employee Public Service not found');

            //return redirect(route('humanresource.employeePublicServices.index'));
        }
        $employees = new Employee;
        return view('humanresource.employee_public_services.edit', compact('employees'))->with('employeePublicService', $employeePublicService);
    }

    /**
     * Update the specified EmployeePublicService in storage.
     *
     * @param  int              $id
     * @param UpdateEmployeePublicServiceRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEmployeePublicServiceRequest $request)
    {
        if (!check_permission('employees-edit')) {
            Flash::error('Permission Denied');
        }
        /** @var EmployeePublicService $employeePublicService */
        $employeePublicService = EmployeePublicService::find($id);

        if (empty($employeePublicService)) {
            Flash::error('Employee Public Service not found');
            close_modal_refresh();

            //return redirect(route('humanresource.employeePublicServices.index'));
        }

        $employeePublicService->fill($request->all());
        $employeePublicService->save();
        add_audit('update', 'Employee Public Service');

        Flash::success('Employee Public Service updated successfully.');
        close_modal_refresh();

        //return redirect(route('humanresource.employeePublicServices.index'));
    }

    /**
     * Remove the specified EmployeePublicService from storage.
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
        /** @var EmployeePublicService $employeePublicService */
        $employeePublicService = EmployeePublicService::find($id);

        if (empty($employeePublicService)) {
            Flash::error('Employee Public Service not found');

            //return redirect(route('humanresource.employeePublicServices.index'));
        }

        $employeePublicService->delete();
        add_audit('delete', 'Employee Public Service');

        Flash::success('Employee Public Service deleted successfully.');
        return redirect(route('humanresource.employees.show', session('employee_id')));

        //return redirect(route('humanresource.employeePublicServices.index'));
    }
}
