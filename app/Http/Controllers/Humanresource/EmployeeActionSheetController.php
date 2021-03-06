<?php

namespace App\Http\Controllers\Humanresource;

use Flash;
use Response;
use App\Http\Requests\Humanresource;
use App\Models\Humanresource\Employee;
use App\Http\Controllers\AppBaseController;
use App\Models\Humanresource\EmployeeActionSheet;
use App\DataTables\Humanresource\EmployeeActionSheetDataTable;
use App\Http\Requests\Humanresource\CreateEmployeeActionSheetRequest;
use App\Http\Requests\Humanresource\UpdateEmployeeActionSheetRequest;

class EmployeeActionSheetController extends AppBaseController
{
    /**
     * Display a listing of the EmployeeActionSheet.
     *
     * @param EmployeeActionSheetDataTable $employeeActionSheetDataTable
     * @return Response
     */
    public function index(EmployeeActionSheetDataTable $employeeActionSheetDataTable)
    {
        Flash::error('Not Allowed');
        return back();
        // return $employeeActionSheetDataTable->render('humanresource.employee_action_sheets.index');
    }

    /**
     * Show the form for creating a new EmployeeActionSheet.
     *
     * @return Response
     */
    public function create()
    {
        if (!check_permission('employees-create')) {
            Flash::error('Permission Denied');
        }
        $employees = new Employee;
        return view('humanresource.employee_action_sheets.create', compact('employees'));
    }

    /**
     * Store a newly created EmployeeActionSheet in storage.
     *
     * @param CreateEmployeeActionSheetRequest $request
     *
     * @return Response
     */
    public function store(CreateEmployeeActionSheetRequest $request)
    {
        if (!check_permission('employees-create')) {
            Flash::error('Permission Denied');
        }
        $input = $request->all();

        /** @var EmployeeActionSheet $employeeActionSheet */
        $employeeActionSheet = EmployeeActionSheet::create($input);

        Flash::success('Employee Action Sheet saved successfully.');
        add_audit('create', 'Employee Action Sheet');
        close_modal_refresh();
        // return redirect(route('humanresource.employeeActionSheets.index'));
    }

    /**
     * Display the specified EmployeeActionSheet.
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
        /** @var EmployeeActionSheet $employeeActionSheet */
        $employeeActionSheet = EmployeeActionSheet::find($id);

        if (empty($employeeActionSheet)) {
            Flash::error('Employee Action Sheet not found');

            //return redirect(route('humanresource.employeeActionSheets.index'));
        }

        return view('humanresource.employee_action_sheets.show')->with('employeeActionSheet', $employeeActionSheet);
    }

    /**
     * Show the form for editing the specified EmployeeActionSheet.
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
        /** @var EmployeeActionSheet $employeeActionSheet */
        $employeeActionSheet = EmployeeActionSheet::find($id);

        if (empty($employeeActionSheet)) {
            Flash::error('Employee Action Sheet not found');

            //return redirect(route('humanresource.employeeActionSheets.index'));
        }
        $employees = new Employee;
        return view('humanresource.employee_action_sheets.edit', compact('employees'))->with('employeeActionSheet', $employeeActionSheet);
    }

    /**
     * Update the specified EmployeeActionSheet in storage.
     *
     * @param  int              $id
     * @param UpdateEmployeeActionSheetRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEmployeeActionSheetRequest $request)
    {
        if (!check_permission('employees-edit')) {
            Flash::error('Permission Denied');
        }
        /** @var EmployeeActionSheet $employeeActionSheet */
        $employeeActionSheet = EmployeeActionSheet::find($id);

        if (empty($employeeActionSheet)) {
            Flash::error('Employee Action Sheet not found');
            close_modal_refresh();

            // return redirect(route('humanresource.employeeActionSheets.index'));
        }

        $employeeActionSheet->fill($request->all());
        $employeeActionSheet->save();
        add_audit('update', 'Employee Action Sheet');

        Flash::success('Employee Action Sheet updated successfully.');
        close_modal_refresh();

        // //return redirect(route('humanresource.employeeActionSheets.index'));
    }

    /**
     * Remove the specified EmployeeActionSheet from storage.
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
        /** @var EmployeeActionSheet $employeeActionSheet */
        $employeeActionSheet = EmployeeActionSheet::find($id);

        if (empty($employeeActionSheet)) {
            Flash::error('Employee Action Sheet not found');

            // //return redirect(route('humanresource.employeeActionSheets.index'));
        }

        $employeeActionSheet->delete();
        add_audit('delete', 'Employee Action Sheet');

        Flash::success('Employee Action Sheet deleted successfully.');
        return redirect(route('humanresource.employees.show', session('employee_id')));

        // //return redirect(route('humanresource.employeeActionSheets.index'));
    }
}
