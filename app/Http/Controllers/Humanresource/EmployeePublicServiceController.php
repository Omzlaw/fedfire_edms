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
        return $employeePublicServiceDataTable->render('humanresource.employee_public_services.index');
    }

    /**
     * Show the form for creating a new EmployeePublicService.
     *
     * @return Response
     */
    public function create()
    {
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
        $input = $request->all();

        /** @var EmployeePublicService $employeePublicService */
        $employeePublicService = EmployeePublicService::create($input);

        Flash::success('Employee Public Service saved successfully.');
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
        /** @var EmployeePublicService $employeePublicService */
        $employeePublicService = EmployeePublicService::find($id);

        if (empty($employeePublicService)) {
            Flash::error('Employee Public Service not found');
            close_modal_refresh();

            //return redirect(route('humanresource.employeePublicServices.index'));
        }

        $employeePublicService->fill($request->all());
        $employeePublicService->save();

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
        /** @var EmployeePublicService $employeePublicService */
        $employeePublicService = EmployeePublicService::find($id);

        if (empty($employeePublicService)) {
            Flash::error('Employee Public Service not found');

            //return redirect(route('humanresource.employeePublicServices.index'));
        }

        $employeePublicService->delete();

        Flash::success('Employee Public Service deleted successfully.');

        //return redirect(route('humanresource.employeePublicServices.index'));
    }
}
