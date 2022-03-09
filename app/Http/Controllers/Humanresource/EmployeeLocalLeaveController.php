<?php

namespace App\Http\Controllers\Humanresource;

use Flash;
use Response;
use App\Http\Requests\Humanresource;
use App\Models\Humanresource\Employee;
use App\Models\Humanresource\LeaveType;
use App\Http\Controllers\AppBaseController;
use App\Models\Humanresource\EmployeeLocalLeave;
use App\DataTables\Humanresource\EmployeeLocalLeaveDataTable;
use App\Http\Requests\Humanresource\CreateEmployeeLocalLeaveRequest;
use App\Http\Requests\Humanresource\UpdateEmployeeLocalLeaveRequest;

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
        Flash::error('Not Allowed');
        return back();
        // return $employeeLocalLeaveDataTable->render('humanresource.employee_local_leaves.index');
    }

    /**
     * Show the form for creating a new EmployeeLocalLeave.
     *
     * @return Response
     */
    public function create()
    {
        if (!check_permission('employees-create')) {
            Flash::error('Permission Denied');
        }
        $employees = new Employee;
        $leave_types = new LeaveType;
        return view('humanresource.employee_local_leaves.create', compact('employees', 'leave_types'));
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
        if (!check_permission('employees-create')) {
            Flash::error('Permission Denied');
        }
        $input = $request->all();

        /** @var EmployeeLocalLeave $employeeLocalLeave */
        $employeeLocalLeave = EmployeeLocalLeave::create($input);

        Flash::success('Employee Local Leave saved successfully.');
        add_audit('create', 'Employee Local Leave');
        close_modal_refresh();

        //return redirect(route('humanresource.employeeLocalLeaves.index'));
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
        if (!check_permission('employees-view')) {
            Flash::error('Permission Denied');
        }
        /** @var EmployeeLocalLeave $employeeLocalLeave */
        $employeeLocalLeave = EmployeeLocalLeave::find($id);

        if (empty($employeeLocalLeave)) {
            Flash::error('Employee Local Leave not found');

            //return redirect(route('humanresource.employeeLocalLeaves.index'));
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
        if (!check_permission('employees-edit')) {
            Flash::error('Permission Denied');
        }
        /** @var EmployeeLocalLeave $employeeLocalLeave */
        $employeeLocalLeave = EmployeeLocalLeave::find($id);

        if (empty($employeeLocalLeave)) {
            Flash::error('Employee Local Leave not found');

            //return redirect(route('humanresource.employeeLocalLeaves.index'));
        }
        $employees = new Employee;
        $leave_types = new LeaveType;
        return view('humanresource.employee_local_leaves.edit', compact('employees', 'leave_types'))->with('employeeLocalLeave', $employeeLocalLeave);
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
        if (!check_permission('employees-edit')) {
            Flash::error('Permission Denied');
        }
        /** @var EmployeeLocalLeave $employeeLocalLeave */
        $employeeLocalLeave = EmployeeLocalLeave::find($id);

        if (empty($employeeLocalLeave)) {
            Flash::error('Employee Local Leave not found');
            close_modal_refresh();

            //return redirect(route('humanresource.employeeLocalLeaves.index'));
        }

        $employeeLocalLeave->fill($request->all());
        $employeeLocalLeave->save();
        add_audit('update', 'Employee Local Leave');

        Flash::success('Employee Local Leave updated successfully.');
        close_modal_refresh();

        //return redirect(route('humanresource.employeeLocalLeaves.index'));
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
        if (!check_permission('employees-destroy')) {
            Flash::error('Permission Denied');
        }
        /** @var EmployeeLocalLeave $employeeLocalLeave */
        $employeeLocalLeave = EmployeeLocalLeave::find($id);

        if (empty($employeeLocalLeave)) {
            Flash::error('Employee Local Leave not found');

            //return redirect(route('humanresource.employeeLocalLeaves.index'));
        }

        $employeeLocalLeave->delete();
        add_audit('delete', 'Employee Local Leave');

        Flash::success('Employee Local Leave deleted successfully.');
        return redirect(route('humanresource.employees.show', session('employee_id')));

        //return redirect(route('humanresource.employeeLocalLeaves.index'));
    }
}
