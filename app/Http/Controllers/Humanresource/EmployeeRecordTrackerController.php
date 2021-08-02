<?php

namespace App\Http\Controllers\Humanresource;

use Flash;
use Response;
use App\Http\Requests\Humanresource;
use App\Models\Humanresource\Employee;
use App\Http\Controllers\AppBaseController;
use App\Models\Humanresource\EmployeeRecordTracker;
use App\DataTables\Humanresource\EmployeeRecordTrackerDataTable;
use App\Http\Requests\Humanresource\CreateEmployeeRecordTrackerRequest;
use App\Http\Requests\Humanresource\UpdateEmployeeRecordTrackerRequest;

class EmployeeRecordTrackerController extends AppBaseController
{
    /**
     * Display a listing of the EmployeeRecordTracker.
     *
     * @param EmployeeRecordTrackerDataTable $employeeRecordTrackerDataTable
     * @return Response
     */
    public function index(EmployeeRecordTrackerDataTable $employeeRecordTrackerDataTable)
    {
        return $employeeRecordTrackerDataTable->render('humanresource.employee_record_trackers.index');
    }

    /**
     * Show the form for creating a new EmployeeRecordTracker.
     *
     * @return Response
     */
    public function create()
    {
        $employees = new Employee;
        return view('humanresource.employee_record_trackers.create', compact('employees'));
    }

    /**
     * Store a newly created EmployeeRecordTracker in storage.
     *
     * @param CreateEmployeeRecordTrackerRequest $request
     *
     * @return Response
     */
    public function store(CreateEmployeeRecordTrackerRequest $request)
    {
        $input = $request->all();

        /** @var EmployeeRecordTracker $employeeRecordTracker */
        $employeeRecordTracker = EmployeeRecordTracker::create($input);

        Flash::success('Employee Record Tracker saved successfully.');
        close_modal_refresh();

        //return redirect(route('humanresource.employeeRecordTrackers.index'));
    }

    /**
     * Display the specified EmployeeRecordTracker.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var EmployeeRecordTracker $employeeRecordTracker */
        $employeeRecordTracker = EmployeeRecordTracker::find($id);

        if (empty($employeeRecordTracker)) {
            Flash::error('Employee Record Tracker not found');

            //return redirect(route('humanresource.employeeRecordTrackers.index'));
        }

        return view('humanresource.employee_record_trackers.show')->with('employeeRecordTracker', $employeeRecordTracker);
    }

    /**
     * Show the form for editing the specified EmployeeRecordTracker.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var EmployeeRecordTracker $employeeRecordTracker */
        $employeeRecordTracker = EmployeeRecordTracker::find($id);

        if (empty($employeeRecordTracker)) {
            Flash::error('Employee Record Tracker not found');

            //return redirect(route('humanresource.employeeRecordTrackers.index'));
        }
        $employees = new Employee;
        return view('humanresource.employee_record_trackers.edit', compact('employees'))->with('employeeRecordTracker', $employeeRecordTracker);
    }

    /**
     * Update the specified EmployeeRecordTracker in storage.
     *
     * @param  int              $id
     * @param UpdateEmployeeRecordTrackerRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEmployeeRecordTrackerRequest $request)
    {
        /** @var EmployeeRecordTracker $employeeRecordTracker */
        $employeeRecordTracker = EmployeeRecordTracker::find($id);

        if (empty($employeeRecordTracker)) {
            Flash::error('Employee Record Tracker not found');
            close_modal_refresh();

            //return redirect(route('humanresource.employeeRecordTrackers.index'));
        }

        $employeeRecordTracker->fill($request->all());
        $employeeRecordTracker->save();

        Flash::success('Employee Record Tracker updated successfully.');
        close_modal_refresh();

        //return redirect(route('humanresource.employeeRecordTrackers.index'));
    }

    /**
     * Remove the specified EmployeeRecordTracker from storage.
     *
     * @param  int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var EmployeeRecordTracker $employeeRecordTracker */
        $employeeRecordTracker = EmployeeRecordTracker::find($id);

        if (empty($employeeRecordTracker)) {
            Flash::error('Employee Record Tracker not found');

            //return redirect(route('humanresource.employeeRecordTrackers.index'));
        }

        $employeeRecordTracker->delete();

        Flash::success('Employee Record Tracker deleted successfully.');

        //return redirect(route('humanresource.employeeRecordTrackers.index'));
    }
}
