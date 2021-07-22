<?php

namespace App\Http\Controllers;

use App\DataTables\EmployeePublicServiceDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateEmployeePublicServiceRequest;
use App\Http\Requests\UpdateEmployeePublicServiceRequest;
use App\Models\EmployeePublicService;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

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
        return $employeePublicServiceDataTable->render('employee_public_services.index');
    }

    /**
     * Show the form for creating a new EmployeePublicService.
     *
     * @return Response
     */
    public function create()
    {
        return view('employee_public_services.create');
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

        return redirect(route('employeePublicServices.index'));
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

            return redirect(route('employeePublicServices.index'));
        }

        return view('employee_public_services.show')->with('employeePublicService', $employeePublicService);
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

            return redirect(route('employeePublicServices.index'));
        }

        return view('employee_public_services.edit')->with('employeePublicService', $employeePublicService);
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

            return redirect(route('employeePublicServices.index'));
        }

        $employeePublicService->fill($request->all());
        $employeePublicService->save();

        Flash::success('Employee Public Service updated successfully.');

        return redirect(route('employeePublicServices.index'));
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

            return redirect(route('employeePublicServices.index'));
        }

        $employeePublicService->delete();

        Flash::success('Employee Public Service deleted successfully.');

        return redirect(route('employeePublicServices.index'));
    }
}
