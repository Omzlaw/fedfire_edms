<?php

namespace App\Http\Controllers\Humanresource;

use App\DataTables\Humanresource\EmployeeQualificationDataTable;
use App\Http\Requests\Humanresource;
use App\Http\Requests\Humanresource\CreateEmployeeQualificationRequest;
use App\Http\Requests\Humanresource\UpdateEmployeeQualificationRequest;
use App\Models\Humanresource\EmployeeQualification;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class EmployeeQualificationController extends AppBaseController
{
    /**
     * Display a listing of the EmployeeQualification.
     *
     * @param EmployeeQualificationDataTable $employeeQualificationDataTable
     * @return Response
     */
    public function index(EmployeeQualificationDataTable $employeeQualificationDataTable)
    {
        return $employeeQualificationDataTable->render('humanresource.employee_qualifications.index');
    }

    /**
     * Show the form for creating a new EmployeeQualification.
     *
     * @return Response
     */
    public function create()
    {
        return view('humanresource.employee_qualifications.create');
    }

    /**
     * Store a newly created EmployeeQualification in storage.
     *
     * @param CreateEmployeeQualificationRequest $request
     *
     * @return Response
     */
    public function store(CreateEmployeeQualificationRequest $request)
    {
        $input = $request->all();

        /** @var EmployeeQualification $employeeQualification */
        $employeeQualification = EmployeeQualification::create($input);

        Flash::success('Employee Qualification saved successfully.');

        return redirect(route('humanresource.employeeQualifications.index'));
    }

    /**
     * Display the specified EmployeeQualification.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var EmployeeQualification $employeeQualification */
        $employeeQualification = EmployeeQualification::find($id);

        if (empty($employeeQualification)) {
            Flash::error('Employee Qualification not found');

            return redirect(route('humanresource.employeeQualifications.index'));
        }

        return view('humanresource.employee_qualifications.show')->with('employeeQualification', $employeeQualification);
    }

    /**
     * Show the form for editing the specified EmployeeQualification.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var EmployeeQualification $employeeQualification */
        $employeeQualification = EmployeeQualification::find($id);

        if (empty($employeeQualification)) {
            Flash::error('Employee Qualification not found');

            return redirect(route('humanresource.employeeQualifications.index'));
        }

        return view('humanresource.employee_qualifications.edit')->with('employeeQualification', $employeeQualification);
    }

    /**
     * Update the specified EmployeeQualification in storage.
     *
     * @param  int              $id
     * @param UpdateEmployeeQualificationRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEmployeeQualificationRequest $request)
    {
        /** @var EmployeeQualification $employeeQualification */
        $employeeQualification = EmployeeQualification::find($id);

        if (empty($employeeQualification)) {
            Flash::error('Employee Qualification not found');

            return redirect(route('humanresource.employeeQualifications.index'));
        }

        $employeeQualification->fill($request->all());
        $employeeQualification->save();

        Flash::success('Employee Qualification updated successfully.');

        return redirect(route('humanresource.employeeQualifications.index'));
    }

    /**
     * Remove the specified EmployeeQualification from storage.
     *
     * @param  int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var EmployeeQualification $employeeQualification */
        $employeeQualification = EmployeeQualification::find($id);

        if (empty($employeeQualification)) {
            Flash::error('Employee Qualification not found');

            return redirect(route('humanresource.employeeQualifications.index'));
        }

        $employeeQualification->delete();

        Flash::success('Employee Qualification deleted successfully.');

        return redirect(route('humanresource.employeeQualifications.index'));
    }
}
