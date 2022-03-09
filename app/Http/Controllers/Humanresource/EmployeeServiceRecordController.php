<?php

namespace App\Http\Controllers\Humanresource;

use App\DataTables\Humanresource\EmployeeServiceRecordDataTable;
use App\Http\Requests\Humanresource;
use App\Http\Requests\Humanresource\CreateEmployeeServiceRecordRequest;
use App\Http\Requests\Humanresource\UpdateEmployeeServiceRecordRequest;
use App\Models\Humanresource\EmployeeServiceRecord;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class EmployeeServiceRecordController extends AppBaseController
{
    /**
     * Display a listing of the EmployeeServiceRecord.
     *
     * @param EmployeeServiceRecordDataTable $employeeServiceRecordDataTable
     * @return Response
     */
    public function index(EmployeeServiceRecordDataTable $employeeServiceRecordDataTable)
    {
        Flash::error('Not Allowed');
        return back();
        // return $employeeServiceRecordDataTable->render('humanresource.employee_service_records.index');
    }

    /**
     * Show the form for creating a new EmployeeServiceRecord.
     *
     * @return Response
     */
    public function create()
    {
        if (!check_permission('employees-create')) {
            Flash::error('Permission Denied');
        }
        return view('humanresource.employee_service_records.create');
    }

    /**
     * Store a newly created EmployeeServiceRecord in storage.
     *
     * @param CreateEmployeeServiceRecordRequest $request
     *
     * @return Response
     */
    public function store(CreateEmployeeServiceRecordRequest $request)
    {
        if (!check_permission('employees-create')) {
            Flash::error('Permission Denied');
        }
        $input = $request->all();

        /** @var EmployeeServiceRecord $employeeServiceRecord */
        $employeeServiceRecord = EmployeeServiceRecord::create($input);

        Flash::success('Employee Service Record saved successfully.');
        add_audit('create', 'Employee Service Record ');
        close_modal_refresh();

        // return redirect(route('humanresource.employeeServiceRecords.index'));
    }

    /**
     * Display the specified EmployeeServiceRecord.
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
        /** @var EmployeeServiceRecord $employeeServiceRecord */
        $employeeServiceRecord = EmployeeServiceRecord::find($id);

        if (empty($employeeServiceRecord)) {
            Flash::error('Employee Service Record not found');

            // return redirect(route('humanresource.employeeServiceRecords.index'));
        }

        return view('humanresource.employee_service_records.show')->with('employeeServiceRecord', $employeeServiceRecord);
    }

    /**
     * Show the form for editing the specified EmployeeServiceRecord.
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
        /** @var EmployeeServiceRecord $employeeServiceRecord */
        $employeeServiceRecord = EmployeeServiceRecord::find($id);

        if (empty($employeeServiceRecord)) {
            Flash::error('Employee Service Record not found');

            // return redirect(route('humanresource.employeeServiceRecords.index'));
        }

        return view('humanresource.employee_service_records.edit')->with('employeeServiceRecord', $employeeServiceRecord);
    }

    /**
     * Update the specified EmployeeServiceRecord in storage.
     *
     * @param  int              $id
     * @param UpdateEmployeeServiceRecordRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEmployeeServiceRecordRequest $request)
    {
        if (!check_permission('employees-edit')) {
            Flash::error('Permission Denied');
        }
        /** @var EmployeeServiceRecord $employeeServiceRecord */
        $employeeServiceRecord = EmployeeServiceRecord::find($id);

        if (empty($employeeServiceRecord)) {
            Flash::error('Employee Service Record not found');

            // return redirect(route('humanresource.employeeServiceRecords.index'));
        }

        $employeeServiceRecord->fill($request->all());
        $employeeServiceRecord->save();

        Flash::success('Employee Service Record updated successfully.');
        add_audit('update', 'Employee Service Record');
        close_modal_refresh();

        // return redirect(route('humanresource.employeeServiceRecords.index'));
    }

    /**
     * Remove the specified EmployeeServiceRecord from storage.
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
        /** @var EmployeeServiceRecord $employeeServiceRecord */
        $employeeServiceRecord = EmployeeServiceRecord::find($id);

        if (empty($employeeServiceRecord)) {
            Flash::error('Employee Service Record not found');

            // return redirect(route('humanresource.employeeServiceRecords.index'));
        }

        $employeeServiceRecord->delete();
        add_audit('delete', 'Employee Service Record');

        Flash::success('Employee Service Record deleted successfully.');

        // return redirect(route('humanresource.employeeServiceRecords.index'));
    }
}
