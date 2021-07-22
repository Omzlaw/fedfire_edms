<?php

namespace App\Http\Controllers\Humanresource;

use App\DataTables\Humanresource\EmployeeTerminationDataTable;
use App\Http\Requests\Humanresource;
use App\Http\Requests\Humanresource\CreateEmployeeTerminationRequest;
use App\Http\Requests\Humanresource\UpdateEmployeeTerminationRequest;
use App\Models\Humanresource\EmployeeTermination;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class EmployeeTerminationController extends AppBaseController
{
    /**
     * Display a listing of the EmployeeTermination.
     *
     * @param EmployeeTerminationDataTable $employeeTerminationDataTable
     * @return Response
     */
    public function index(EmployeeTerminationDataTable $employeeTerminationDataTable)
    {
        return $employeeTerminationDataTable->render('humanresource.employee_terminations.index');
    }

    /**
     * Show the form for creating a new EmployeeTermination.
     *
     * @return Response
     */
    public function create()
    {
        return view('humanresource.employee_terminations.create');
    }

    /**
     * Store a newly created EmployeeTermination in storage.
     *
     * @param CreateEmployeeTerminationRequest $request
     *
     * @return Response
     */
    public function store(CreateEmployeeTerminationRequest $request)
    {
        $input = $request->all();

        /** @var EmployeeTermination $employeeTermination */
        $employeeTermination = EmployeeTermination::create($input);

        Flash::success('Employee Termination saved successfully.');

        return redirect(route('humanresource.employeeTerminations.index'));
    }

    /**
     * Display the specified EmployeeTermination.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var EmployeeTermination $employeeTermination */
        $employeeTermination = EmployeeTermination::find($id);

        if (empty($employeeTermination)) {
            Flash::error('Employee Termination not found');

            return redirect(route('humanresource.employeeTerminations.index'));
        }

        return view('humanresource.employee_terminations.show')->with('employeeTermination', $employeeTermination);
    }

    /**
     * Show the form for editing the specified EmployeeTermination.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var EmployeeTermination $employeeTermination */
        $employeeTermination = EmployeeTermination::find($id);

        if (empty($employeeTermination)) {
            Flash::error('Employee Termination not found');

            return redirect(route('humanresource.employeeTerminations.index'));
        }

        return view('humanresource.employee_terminations.edit')->with('employeeTermination', $employeeTermination);
    }

    /**
     * Update the specified EmployeeTermination in storage.
     *
     * @param  int              $id
     * @param UpdateEmployeeTerminationRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEmployeeTerminationRequest $request)
    {
        /** @var EmployeeTermination $employeeTermination */
        $employeeTermination = EmployeeTermination::find($id);

        if (empty($employeeTermination)) {
            Flash::error('Employee Termination not found');

            return redirect(route('humanresource.employeeTerminations.index'));
        }

        $employeeTermination->fill($request->all());
        $employeeTermination->save();

        Flash::success('Employee Termination updated successfully.');

        return redirect(route('humanresource.employeeTerminations.index'));
    }

    /**
     * Remove the specified EmployeeTermination from storage.
     *
     * @param  int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var EmployeeTermination $employeeTermination */
        $employeeTermination = EmployeeTermination::find($id);

        if (empty($employeeTermination)) {
            Flash::error('Employee Termination not found');

            return redirect(route('humanresource.employeeTerminations.index'));
        }

        $employeeTermination->delete();

        Flash::success('Employee Termination deleted successfully.');

        return redirect(route('humanresource.employeeTerminations.index'));
    }
}
