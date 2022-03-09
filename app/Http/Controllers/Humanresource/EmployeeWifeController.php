<?php

namespace App\Http\Controllers\Humanresource;

use Flash;
use Response;
use App\Http\Requests\Humanresource;
use App\Models\Humanresource\Employee;
use App\Models\Humanresource\EmployeeWife;
use App\Http\Controllers\AppBaseController;
use App\DataTables\Humanresource\EmployeeWifeDataTable;
use App\Http\Requests\Humanresource\CreateEmployeeWifeRequest;
use App\Http\Requests\Humanresource\UpdateEmployeeWifeRequest;

class EmployeeWifeController extends AppBaseController
{
    /**
     * Display a listing of the EmployeeWife.
     *
     * @param EmployeeWifeDataTable $employeeWifeDataTable
     * @return Response
     */
    public function index(EmployeeWifeDataTable $employeeWifeDataTable)
    {
        Flash::error('Not Allowed');
        return back();
        // return $employeeWifeDataTable->render('humanresource.employee_wives.index');
    }

    /**
     * Show the form for creating a new EmployeeWife.
     *
     * @return Response
     */
    public function create()
    {
        if (!check_permission('employees-create')) {
            Flash::error('Permission Denied');
        }
        $employees = new Employee;
        return view('humanresource.employee_wives.create', compact('employees'));
    }

    /**
     * Store a newly created EmployeeWife in storage.
     *
     * @param CreateEmployeeWifeRequest $request
     *
     * @return Response
     */
    public function store(CreateEmployeeWifeRequest $request)
    {
        if (!check_permission('employees-create')) {
            Flash::error('Permission Denied');
        }
        $input = $request->all();

        /** @var EmployeeWife $employeeWife */
        $employeeWife = EmployeeWife::create($input);

        Flash::success('Employee Wife saved successfully.');
        add_audit('create', 'Employee Spouse');
        close_modal_refresh();

        //return redirect(route('humanresource.employeeWives.index'));
    }

    /**
     * Display the specified EmployeeWife.
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
        /** @var EmployeeWife $employeeWife */
        $employeeWife = EmployeeWife::find($id);

        if (empty($employeeWife)) {
            Flash::error('Employee Wife not found');

            //return redirect(route('humanresource.employeeWives.index'));
        }

        return view('humanresource.employee_wives.show')->with('employeeWife', $employeeWife);
    }

    /**
     * Show the form for editing the specified EmployeeWife.
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
        /** @var EmployeeWife $employeeWife */
        $employeeWife = EmployeeWife::find($id);

        if (empty($employeeWife)) {
            Flash::error('Employee Wife not found');

            //return redirect(route('humanresource.employeeWives.index'));
        }
        $employees = new Employee;
        return view('humanresource.employee_wives.edit', compact('employees'))->with('employeeWife', $employeeWife);
    }

    /**
     * Update the specified EmployeeWife in storage.
     *
     * @param  int              $id
     * @param UpdateEmployeeWifeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEmployeeWifeRequest $request)
    {
        if (!check_permission('employees-edit')) {
            Flash::error('Permission Denied');
        }
        /** @var EmployeeWife $employeeWife */
        $employeeWife = EmployeeWife::find($id);

        if (empty($employeeWife)) {
            Flash::error('Employee Wife not found');
            close_modal_refresh();

            //return redirect(route('humanresource.employeeWives.index'));
        }

        $employeeWife->fill($request->all());
        $employeeWife->save();
        add_audit('update', 'Employee Spouse');

        Flash::success('Employee Wife updated successfully.');
        close_modal_refresh();

        //return redirect(route('humanresource.employeeWives.index'));
    }

    /**
     * Remove the specified EmployeeWife from storage.
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
        /** @var EmployeeWife $employeeWife */
        $employeeWife = EmployeeWife::find($id);

        if (empty($employeeWife)) {
            Flash::error('Employee Wife not found');

            //return redirect(route('humanresource.employeeWives.index'));
        }

        $employeeWife->delete();
        add_audit('delete', 'Employee Spouse');

        Flash::success('Employee Wife deleted successfully.');
        return redirect(route('humanresource.employees.show', session('employee_id')));

        //return redirect(route('humanresource.employeeWives.index'));
    }
}
