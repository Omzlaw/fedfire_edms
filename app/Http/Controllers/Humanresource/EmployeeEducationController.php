<?php

namespace App\Http\Controllers\Humanresource;

use Flash;
use Response;
use App\Models\Shared\SchoolType;
use App\Http\Requests\Humanresource;
use App\Models\Humanresource\Employee;
use App\Models\Shared\CertificateType;
use App\Models\Shared\QualificationType;
use App\Http\Controllers\AppBaseController;
use App\Models\Humanresource\EmployeeEducation;
use App\DataTables\Humanresource\EmployeeEducationDataTable;
use App\Http\Requests\Humanresource\CreateEmployeeEducationRequest;
use App\Http\Requests\Humanresource\UpdateEmployeeEducationRequest;

class EmployeeEducationController extends AppBaseController
{
    /**
     * Display a listing of the EmployeeEducation.
     *
     * @param EmployeeEducationDataTable $employeeEducationDataTable
     * @return Response
     */
    public function index(EmployeeEducationDataTable $employeeEducationDataTable)
    {
        Flash::error('Not Allowed');
        return back();
        // return $employeeEducationDataTable->render('humanresource.employee_educations.index');
    }

    /**
     * Show the form for creating a new EmployeeEducation.
     *
     * @return Response
     */
    public function create()
    {
        if (!check_permission('employees-create')) {
            Flash::error('Permission Denied');
        }
        $employees = new Employee;
        $certificate_types = new CertificateType;
        $qualification_types = new QualificationType;
        $school_types = new SchoolType;
        return view('humanresource.employee_educations.create', compact('employees', 'certificate_types', 'school_types', 'qualification_types'));
    }

    /**
     * Store a newly created EmployeeEducation in storage.
     *
     * @param CreateEmployeeEducationRequest $request
     *
     * @return Response
     */
    public function store(CreateEmployeeEducationRequest $request)
    {
        if (!check_permission('employees-create')) {
            Flash::error('Permission Denied');
        }
        $input = $request->all();

        /** @var EmployeeEducation $employeeEducation */
        $employeeEducation = EmployeeEducation::create($input);
        $employee = Employee::find($input['employee_id']);
        $employee['entry_qualification'] = EmployeeEducation::orderBy('id', 'DESC')
        ->where('employee_id', '=', $employee->id)
        ->where('status', '=', 1)
        ->first()->qualification;

        $employee['additional_qualification'] = EmployeeEducation::orderBy('id', 'DESC')
        ->where('employee_id', '=', $employee->id)
        ->where('status', '=', 1)
        ->skip(1)
        ->first()->qualification;

        $employee->save();

        Flash::success('Employee Education saved successfully.');
        add_audit('create', 'Employee Education');
        close_modal_refresh();

        //return redirect(route('humanresource.employeeEducations.index'));
    }

    /**
     * Display the specified EmployeeEducation.
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
        /** @var EmployeeEducation $employeeEducation */
        $employeeEducation = EmployeeEducation::find($id);

        if (empty($employeeEducation)) {
            Flash::error('Employee Education not found');

            //return redirect(route('humanresource.employeeEducations.index'));
        }

        return view('humanresource.employee_educations.show')->with('employeeEducation', $employeeEducation);
    }

    /**
     * Show the form for editing the specified EmployeeEducation.
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
        /** @var EmployeeEducation $employeeEducation */
        $employeeEducation = EmployeeEducation::find($id);

        if (empty($employeeEducation)) {
            Flash::error('Employee Education not found');

            //return redirect(route('humanresource.employeeEducations.index'));
        }
        $employees = new Employee;
        $certificate_types = new CertificateType;
        $school_types = new SchoolType;
        $qualification_types = new QualificationType;
        return view('humanresource.employee_educations.edit', compact('employees', 'certificate_types', 'school_types', 'qualification_types'))->with('employeeEducation', $employeeEducation);
    }

    /**
     * Update the specified EmployeeEducation in storage.
     *
     * @param  int              $id
     * @param UpdateEmployeeEducationRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEmployeeEducationRequest $request)
    {
        if (!check_permission('employees-edit')) {
            Flash::error('Permission Denied');
        }
        /** @var EmployeeEducation $employeeEducation */
        $employeeEducation = EmployeeEducation::find($id);

        if (empty($employeeEducation)) {
            Flash::error('Employee Education not found');
            close_modal_refresh();

            //return redirect(route('humanresource.employeeEducations.index'));
        }

        $employeeEducation->fill($request->all());
        $employeeEducation->save();
        $employee = Employee::find($input['employee_id']);

        $employee['entry_qualification'] = EmployeeEducation::orderBy('id', 'DESC')
        ->where('employee_id', '=', $employee->id)
        ->where('status', '=', 1)
        ->first()->qualification;

        $employee['additional_qualification'] = EmployeeEducation::orderBy('id', 'DESC')
        ->where('employee_id', '=', $employee->id)
        ->where('status', '=', 1)
        ->skip(1)
        ->first()->qualification;
        $employee->save();
        add_audit('update', 'Employee Education');

        Flash::success('Employee Education updated successfully.');
        close_modal_refresh();

        //return redirect(route('humanresource.employeeEducations.index'));
    }

    /**
     * Remove the specified EmployeeEducation from storage.
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
        /** @var EmployeeEducation $employeeEducation */
        $employeeEducation = EmployeeEducation::find($id);

        if (empty($employeeEducation)) {
            Flash::error('Employee Education not found');

            //return redirect(route('humanresource.employeeEducations.index'));
        }

        $employeeEducation->delete();
        add_audit('delete', 'Employee Education');

        Flash::success('Employee Education deleted successfully.');
        return redirect(route('humanresource.employees.show', session('employee_id')));

        //return redirect(route('humanresource.employeeEducations.index'));
    }
}
