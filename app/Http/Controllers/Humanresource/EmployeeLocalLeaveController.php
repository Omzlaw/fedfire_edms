<?php

namespace App\Http\Controllers\Humanresource;

use App\DataTables\Humanresource\EmployeeLocalLeaveDataTable;
use App\Http\Requests\Humanresource;
use App\Http\Requests\Humanresource\CreateEmployeeLocalLeaveRequest;
use App\Http\Requests\Humanresource\UpdateEmployeeLocalLeaveRequest;
use App\Models\Humanresource\EmployeeLocalLeave;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class EmployeeLocalLeaveController extends AppBaseController
{
    /**
     * Display a listing of the EmployeeLocalLeave.
     *
     * @param EmployeeLocalLeaveDataTable $employeeLocalLeaveDataTable
     * @return Response
     */
    public function index(EmployeeLocalLeaveDataTable $employeeLocalLeaveDataTable)
    {
        return $employeeLocalLeaveDataTable->render('humanresource.employee_local_leaves.index');
    }

    /**
     * Show the form for creating a new EmployeeLocalLeave.
     *
     * @return Response
     */
    public function create()
    {
        return view('humanresource.employee_local_leaves.create');
    }

    /**
     * Store a newly created EmployeeLocalLeave in storage.
     *
     * @param CreateEmployeeLocalLeaveRequest $request
     *
     * @return Response
     */
    public function store(CreateEmployeeLocalLeaveRequest $request)
    {
        $input = $request->all();

        /** @var EmployeeLocalLeave $employeeLocalLeave */
        $employeeLocalLeave = EmployeeLocalLeave::create($input);

        Flash::success('Employee Local Leave saved successfully.');

        return redirect(route('humanresource.employeeLocalLeaves.index'));
    }

    /**
     * Display the specified EmployeeLocalLeave.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var EmployeeLocalLeave $employeeLocalLeave */
        $employeeLocalLeave = EmployeeLocalLeave::find($id);

        if (empty($employeeLocalLeave)) {
            Flash::error('Employee Local Leave not found');

            return redirect(route('humanresource.employeeLocalLeaves.index'));
        }

        return view('humanresource.employee_local_leaves.show')->with('employeeLocalLeave', $employeeLocalLeave);
    }

    /**
     * Show the form for editing the specified EmployeeLocalLeave.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var EmployeeLocalLeave $employeeLocalLeave */
        $employeeLocalLeave = EmployeeLocalLeave::find($id);

        if (empty($employeeLocalLeave)) {
            Flash::error('Employee Local Leave not found');

            return redirect(route('humanresource.employeeLocalLeaves.index'));
        }

        return view('humanresource.employee_local_leaves.edit')->with('employeeLocalLeave', $employeeLocalLeave);
    }

    /**
     * Update the specified EmployeeLocalLeave in storage.
     *
     * @param  int              $id
     * @param UpdateEmployeeLocalLeaveRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEmployeeLocalLeaveRequest $request)
    {
        /** @var EmployeeLocalLeave $employeeLocalLeave */
        $employeeLocalLeave = EmployeeLocalLeave::find($id);

        if (empty($employeeLocalLeave)) {
            Flash::error('Employee Local Leave not found');

            return redirect(route('humanresource.employeeLocalLeaves.index'));
        }

        $employeeLocalLeave->fill($request->all());
        $employeeLocalLeave->save();

        Flash::success('Employee Local Leave updated successfully.');

        return redirect(route('humanresource.employeeLocalLeaves.index'));
    }

    /**
     * Remove the specified EmployeeLocalLeave from storage.
     *
     * @param  int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var EmployeeLocalLeave $employeeLocalLeave */
        $employeeLocalLeave = EmployeeLocalLeave::find($id);

        if (empty($employeeLocalLeave)) {
            Flash::error('Employee Local Leave not found');

            return redirect(route('humanresource.employeeLocalLeaves.index'));
        }

        $employeeLocalLeave->delete();

        Flash::success('Employee Local Leave deleted successfully.');

        return redirect(route('humanresource.employeeLocalLeaves.index'));
    }
}
