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
        return $employeeActionSheetDataTable->render('humanresource.employee_action_sheets.index');
    }

    /**
     * Show the form for creating a new EmployeeActionSheet.
     *
     * @return Response
     */
    public function create()
    {
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
        $input = $request->all();

        /** @var EmployeeActionSheet $employeeActionSheet */
        $employeeActionSheet = EmployeeActionSheet::create($input);

        Flash::success('Employee Action Sheet saved successfully.');
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
        /** @var EmployeeActionSheet $employeeActionSheet */
        $employeeActionSheet = EmployeeActionSheet::find($id);

        if (empty($employeeActionSheet)) {
            Flash::error('Employee Action Sheet not found');
            close_modal_refresh();

            // return redirect(route('humanresource.employeeActionSheets.index'));
        }

        $employeeActionSheet->fill($request->all());
        $employeeActionSheet->save();

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
        /** @var EmployeeActionSheet $employeeActionSheet */
        $employeeActionSheet = EmployeeActionSheet::find($id);

        if (empty($employeeActionSheet)) {
            Flash::error('Employee Action Sheet not found');

            // //return redirect(route('humanresource.employeeActionSheets.index'));
        }

        $employeeActionSheet->delete();

        Flash::success('Employee Action Sheet deleted successfully.');
        return redirect(route('humanresource.employees.show', session('employee_id')));

        // //return redirect(route('humanresource.employeeActionSheets.index'));
    }
}
