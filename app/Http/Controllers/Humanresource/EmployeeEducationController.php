<?php

namespace App\Http\Controllers\Humanresource;

use Flash;
use Response;
use App\Models\Shared\SchoolType;
use App\Http\Requests\Humanresource;
use App\Models\Humanresource\Employee;
use App\Models\Shared\CertificateType;
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
        return $employeeEducationDataTable->render('humanresource.employee_educations.index');
    }

    /**
     * Show the form for creating a new EmployeeEducation.
     *
     * @return Response
     */
    public function create()
    {
        $employees = new Employee;
        $certificate_types = new CertificateType;
        $school_types = new SchoolType;
        return view('humanresource.employee_educations.create', compact('employees', 'certificate_types', 'school_types'));
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
        $input = $request->all();

        /** @var EmployeeEducation $employeeEducation */
        $employeeEducation = EmployeeEducation::create($input);

        Flash::success('Employee Education saved successfully.');
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
        /** @var EmployeeEducation $employeeEducation */
        $employeeEducation = EmployeeEducation::find($id);

        if (empty($employeeEducation)) {
            Flash::error('Employee Education not found');

            //return redirect(route('humanresource.employeeEducations.index'));
        }
        $employees = new Employee;
        $certificate_types = new CertificateType;
        $school_types = new SchoolType;
        return view('humanresource.employee_educations.edit', compact('employees', 'certificate_types', 'school_types'))->with('employeeEducation', $employeeEducation);
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
        /** @var EmployeeEducation $employeeEducation */
        $employeeEducation = EmployeeEducation::find($id);

        if (empty($employeeEducation)) {
            Flash::error('Employee Education not found');
            close_modal_refresh();

            //return redirect(route('humanresource.employeeEducations.index'));
        }

        $employeeEducation->fill($request->all());
        $employeeEducation->save();

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
        /** @var EmployeeEducation $employeeEducation */
        $employeeEducation = EmployeeEducation::find($id);

        if (empty($employeeEducation)) {
            Flash::error('Employee Education not found');

            //return redirect(route('humanresource.employeeEducations.index'));
        }

        $employeeEducation->delete();

        Flash::success('Employee Education deleted successfully.');

        //return redirect(route('humanresource.employeeEducations.index'));
    }
}
