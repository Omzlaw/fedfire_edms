<?php

namespace App\Http\Controllers\Humanresource;

use Flash;
use Response;
use App\Http\Requests\Humanresource;
use App\Models\Humanresource\Employee;
use App\Models\Shared\QualificationType;
use App\Http\Controllers\AppBaseController;
use App\Models\Humanresource\EmployeeQualification;
use App\DataTables\Humanresource\EmployeeQualificationDataTable;
use App\Http\Requests\Humanresource\CreateEmployeeQualificationRequest;
use App\Http\Requests\Humanresource\UpdateEmployeeQualificationRequest;

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
        Flash::error('Not Allowed');
        return back();
        // return $employeeQualificationDataTable->render('humanresource.employee_qualifications.index');
    }

    /**
     * Show the form for creating a new EmployeeQualification.
     *
     * @return Response
     */
    public function create()
    {
        if (!check_permission('employees-create')) {
            Flash::error('Permission Denied');
        }
        $employees = new Employee;
        $qualificationTypes = new QualificationType;
        return view('humanresource.employee_qualifications.create', compact('employees', 'qualificationTypes'));
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
        if (!check_permission('employees-create')) {
            Flash::error('Permission Denied');
        }
        $input = $request->all();

        /** @var EmployeeQualification $employeeQualification */
        $employeeQualification = EmployeeQualification::create($input);


        Flash::success('Employee Qualification saved successfully.');
        add_audit('create', 'Employee Qualification');
        close_modal_refresh();

        //return redirect(route('humanresource.employeeQualifications.index'));
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
        if (!check_permission('employees-view')) {
            Flash::error('Permission Denied');
        }
        /** @var EmployeeQualification $employeeQualification */
        $employeeQualification = EmployeeQualification::find($id);

        if (empty($employeeQualification)) {
            Flash::error('Employee Qualification not found');

            //return redirect(route('humanresource.employeeQualifications.index'));
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
        if (!check_permission('employees-edit')) {
            Flash::error('Permission Denied');
        }
        /** @var EmployeeQualification $employeeQualification */
        $employeeQualification = EmployeeQualification::find($id);

        if (empty($employeeQualification)) {
            Flash::error('Employee Qualification not found');

            //return redirect(route('humanresource.employeeQualifications.index'));
        }
        $employees = new Employee;
        $qualificationTypes = new QualificationType;
        return view('humanresource.employee_qualifications.edit', compact('employees', 'qualificationTypes'))->with('employeeQualification', $employeeQualification);
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
        if (!check_permission('employees-edit')) {
            Flash::error('Permission Denied');
        }
        /** @var EmployeeQualification $employeeQualification */
        $employeeQualification = EmployeeQualification::find($id);

        if (empty($employeeQualification)) {
            Flash::error('Employee Qualification not found');
            close_modal_refresh();

            //return redirect(route('humanresource.employeeQualifications.index'));
        }

        $input = $request->all();
        $employeeQualification->fill($input);
        $employeeQualification->save();

        Flash::success('Employee Qualification updated successfully.');
        add_audit('update', 'Employee Qualification');
        close_modal_refresh();

        //return redirect(route('humanresource.employeeQualifications.index'));
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
        if (!check_permission('employees-destroy')) {
            Flash::error('Permission Denied');
        }
        /** @var EmployeeQualification $employeeQualification */
        $employeeQualification = EmployeeQualification::find($id);

        if (empty($employeeQualification)) {
            Flash::error('Employee Qualification not found');

            //return redirect(route('humanresource.employeeQualifications.index'));
        }

        $employeeQualification->delete();
        add_audit('delete', 'Employee Qualification');

        Flash::success('Employee Qualification deleted successfully.');
        return redirect(route('humanresource.employees.show', session('employee_id')));

        //return redirect(route('humanresource.employeeQualifications.index'));
    }
}
