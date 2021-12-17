<?php

namespace App\Http\Controllers\Humanresource;

use Flash;
use Response;
use App\Http\Requests\Humanresource;
use App\Models\Humanresource\SalaryScale;
use App\Http\Controllers\AppBaseController;
use App\Models\Humanresource\EmployeeEmolumentRecord;
use App\DataTables\Humanresource\EmployeeEmolumentRecordDataTable;
use App\Http\Requests\Humanresource\CreateEmployeeEmolumentRecordRequest;
use App\Http\Requests\Humanresource\UpdateEmployeeEmolumentRecordRequest;

class EmployeeEmolumentRecordController extends AppBaseController
{
    /**
     * Display a listing of the EmployeeEmolumentRecord.
     *
     * @param EmployeeEmolumentRecordDataTable $employeeEmolumentRecordDataTable
     * @return Response
     */
    public function index(EmployeeEmolumentRecordDataTable $employeeEmolumentRecordDataTable)
    {
        Flash::error('Not Allowed');
        return back();
        // return $employeeEmolumentRecordDataTable->render('humanresource.employee_emolument_records.index');
    }

    /**
     * Show the form for creating a new EmployeeEmolumentRecord.
     *
     * @return Response
     */
    public function create()
    {
        $salary_scales = new SalaryScale;
        return view('humanresource.employee_emolument_records.create', compact('salary_scales'));
    }

    /**
     * Store a newly created EmployeeEmolumentRecord in storage.
     *
     * @param CreateEmployeeEmolumentRecordRequest $request
     *
     * @return Response
     */
    public function store(CreateEmployeeEmolumentRecordRequest $request)
    {
        $input = $request->all();

        /** @var EmployeeEmolumentRecord $employeeEmolumentRecord */
        $employeeEmolumentRecord = EmployeeEmolumentRecord::create($input);

        Flash::success('Employee Emolument Record saved successfully.');
        add_audit('create', 'Employee Emolument Record');
        close_modal_refresh();

        // return redirect(route('humanresource.employeeEmolumentRecords.index'));
    }

    /**
     * Display the specified EmployeeEmolumentRecord.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var EmployeeEmolumentRecord $employeeEmolumentRecord */
        $employeeEmolumentRecord = EmployeeEmolumentRecord::find($id);

        if (empty($employeeEmolumentRecord)) {
            Flash::error('Employee Emolument Record not found');

            // return redirect(route('humanresource.employeeEmolumentRecords.index'));
        }

        return view('humanresource.employee_emolument_records.show')->with('employeeEmolumentRecord', $employeeEmolumentRecord);
    }

    /**
     * Show the form for editing the specified EmployeeEmolumentRecord.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var EmployeeEmolumentRecord $employeeEmolumentRecord */
        $employeeEmolumentRecord = EmployeeEmolumentRecord::find($id);

        if (empty($employeeEmolumentRecord)) {
            Flash::error('Employee Emolument Record not found');

            // return redirect(route('humanresource.employeeEmolumentRecords.index'));
        }

        $salary_scales = new SalaryScale;
        return view('humanresource.employee_emolument_records.edit', compact('salary_scales'))->with('employeeEmolumentRecord', $employeeEmolumentRecord);
    }

    /**
     * Update the specified EmployeeEmolumentRecord in storage.
     *
     * @param  int              $id
     * @param UpdateEmployeeEmolumentRecordRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEmployeeEmolumentRecordRequest $request)
    {
        /** @var EmployeeEmolumentRecord $employeeEmolumentRecord */
        $employeeEmolumentRecord = EmployeeEmolumentRecord::find($id);

        if (empty($employeeEmolumentRecord)) {
            Flash::error('Employee Emolument Record not found');

            // return redirect(route('humanresource.employeeEmolumentRecords.index'));
        }

        $employeeEmolumentRecord->fill($request->all());
        $employeeEmolumentRecord->save();

        Flash::success('Employee Emolument Record updated successfully.');
        add_audit('update', 'Employee Emolument Record');
        close_modal_refresh();

        // return redirect(route('humanresource.employeeEmolumentRecords.index'));
    }

    /**
     * Remove the specified EmployeeEmolumentRecord from storage.
     *
     * @param  int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var EmployeeEmolumentRecord $employeeEmolumentRecord */
        $employeeEmolumentRecord = EmployeeEmolumentRecord::find($id);

        if (empty($employeeEmolumentRecord)) {
            Flash::error('Employee Emolument Record not found');

            // return redirect(route('humanresource.employeeEmolumentRecords.index'));
        }

        $employeeEmolumentRecord->delete();
        add_audit('delete', 'Employee Emolument Record');

        Flash::success('Employee Emolument Record deleted successfully.');

        // return redirect(route('humanresource.employeeEmolumentRecords.index'));
    }
}
