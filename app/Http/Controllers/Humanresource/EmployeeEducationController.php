<?php

namespace App\Http\Controllers\Humanresource;

use App\DataTables\Humanresource\EmployeeEducationDataTable;
use App\Http\Requests\Humanresource;
use App\Http\Requests\Humanresource\CreateEmployeeEducationRequest;
use App\Http\Requests\Humanresource\UpdateEmployeeEducationRequest;
use App\Models\Humanresource\EmployeeEducation;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

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
        return view('humanresource.employee_educations.create');
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

        return redirect(route('humanresource.employeeEducations.index'));
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

            return redirect(route('humanresource.employeeEducations.index'));
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

            return redirect(route('humanresource.employeeEducations.index'));
        }

        return view('humanresource.employee_educations.edit')->with('employeeEducation', $employeeEducation);
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

            return redirect(route('humanresource.employeeEducations.index'));
        }

        $employeeEducation->fill($request->all());
        $employeeEducation->save();

        Flash::success('Employee Education updated successfully.');

        return redirect(route('humanresource.employeeEducations.index'));
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

            return redirect(route('humanresource.employeeEducations.index'));
        }

        $employeeEducation->delete();

        Flash::success('Employee Education deleted successfully.');

        return redirect(route('humanresource.employeeEducations.index'));
    }
}
