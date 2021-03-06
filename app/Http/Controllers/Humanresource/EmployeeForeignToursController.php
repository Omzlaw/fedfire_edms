<?php

namespace App\Http\Controllers\Humanresource;

use Flash;
use Response;
use App\Http\Requests\Humanresource;
use App\Models\Humanresource\Employee;
use App\Models\Humanresource\LeaveType;
use App\Http\Controllers\AppBaseController;
use App\Models\Humanresource\EmployeeLocalLeave;
use App\Models\Humanresource\EmployeeForeignTours;
use App\DataTables\Humanresource\EmployeeForeignToursDataTable;
use App\Http\Requests\Humanresource\CreateEmployeeForeignToursRequest;
use App\Http\Requests\Humanresource\UpdateEmployeeForeignToursRequest;

class EmployeeForeignToursController extends AppBaseController
{
    /**
     * Display a listing of the EmployeeForeignTours.
     *
     * @param EmployeeForeignToursDataTable $employeeForeignToursDataTable
     * @return Response
     */
    public function index(EmployeeForeignToursDataTable $employeeForeignToursDataTable)
    {
        Flash::error('Not Allowed');
        return back();
        // return $employeeForeignToursDataTable->render('humanresource.employee_foreign_tours.index');
    }

    /**
     * Show the form for creating a new EmployeeForeignTours.
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
        return view('humanresource.employee_foreign_tours.create', compact('employees', 'leave_types'));
    }

    /**
     * Store a newly created EmployeeForeignTours in storage.
     *
     * @param CreateEmployeeForeignToursRequest $request
     *
     * @return Response
     */
    public function store(CreateEmployeeForeignToursRequest $request)
    {
        if (!check_permission('employees-create')) {
            Flash::error('Permission Denied');
        }
        $input = $request->all();

        /** @var EmployeeForeignTours $employeeForeignTours */
        $employeeForeignTours = EmployeeForeignTours::create($input);

        Flash::success('Employee Foreign Tours saved successfully.');
        add_audit('create', 'Employee Foreign Tours');
        close_modal_refresh();

        //return redirect(route('humanresource.employeeForeignTours.index'));
    }

    /**
     * Display the specified EmployeeForeignTours.
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
        /** @var EmployeeForeignTours $employeeForeignTours */
        $employeeForeignTours = EmployeeForeignTours::find($id);

        if (empty($employeeForeignTours)) {
            Flash::error('Employee Foreign Tours not found');

            //return redirect(route('humanresource.employeeForeignTours.index'));
        }

        return view('humanresource.employee_foreign_tours.show')->with('employeeForeignTours', $employeeForeignTours);
    }

    /**
     * Show the form for editing the specified EmployeeForeignTours.
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
        /** @var EmployeeForeignTours $employeeForeignTours */
        $employeeForeignTours = EmployeeForeignTours::find($id);

        if (empty($employeeForeignTours)) {
            Flash::error('Employee Foreign Tours not found');

            //return redirect(route('humanresource.employeeForeignTours.index'));
        }
        $employees = new Employee;
        $leave_types = new LeaveType;
        return view('humanresource.employee_foreign_tours.edit', compact('employees', 'leave_types'))->with('employeeForeignTours', $employeeForeignTours);
    }

    /**
     * Update the specified EmployeeForeignTours in storage.
     *
     * @param  int              $id
     * @param UpdateEmployeeForeignToursRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEmployeeForeignToursRequest $request)
    {
        if (!check_permission('employees-edit')) {
            Flash::error('Permission Denied');
        }
        /** @var EmployeeForeignTours $employeeForeignTours */
        $employeeForeignTours = EmployeeForeignTours::find($id);

        if (empty($employeeForeignTours)) {
            Flash::error('Employee Foreign Tours not found');
            close_modal_refresh();
            //return redirect(route('humanresource.employeeForeignTours.index'));
        }

        $employeeForeignTours->fill($request->all());
        $employeeForeignTours->save();
        add_audit('update', 'Employee Foreign Tours');

        Flash::success('Employee Foreign Tours updated successfully.');
        close_modal_refresh();

        //return redirect(route('humanresource.employeeForeignTours.index'));
    }

    /**
     * Remove the specified EmployeeForeignTours from storage.
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
        /** @var EmployeeForeignTours $employeeForeignTours */
        $employeeForeignTours = EmployeeForeignTours::find($id);

        if (empty($employeeForeignTours)) {
            Flash::error('Employee Foreign Tours not found');

            //return redirect(route('humanresource.employeeForeignTours.index'));
        }

        $employeeForeignTours->delete();
        add_audit('delete', 'Employee Foreign Tours');

        Flash::success('Employee Foreign Tours deleted successfully.');
        return redirect(route('humanresource.employees.show', session('employee_id')));

        //return redirect(route('humanresource.employeeForeignTours.index'));
    }
}
