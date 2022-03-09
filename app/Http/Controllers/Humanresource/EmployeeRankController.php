<?php

namespace App\Http\Controllers\Humanresource;

use Flash;
use Response;
use App\Models\Shared\RankType;
use App\Http\Requests\Humanresource;
use App\Models\Humanresource\Employee;
use App\Models\Humanresource\EmployeeRank;
use App\Http\Controllers\AppBaseController;
use App\DataTables\Humanresource\EmployeeRankDataTable;
use App\Http\Requests\Humanresource\CreateEmployeeRankRequest;
use App\Http\Requests\Humanresource\UpdateEmployeeRankRequest;

class EmployeeRankController extends AppBaseController
{
    /**
     * Display a listing of the EmployeeRank.
     *
     * @param EmployeeRankDataTable $employeeRankDataTable
     * @return Response
     */
    public function index(EmployeeRankDataTable $employeeRankDataTable)
    {
        Flash::error('Not Allowed');
        return back();
        // return $employeeRankDataTable->render('humanresource.employee_ranks.index');
    }

    /**
     * Show the form for creating a new EmployeeRank.
     *
     * @return Response
     */
    public function create()
    {
        if (!check_permission('employees-create')) {
            Flash::error('Permission Denied');
        }
        $rank_types = new RankType;
        return view('humanresource.employee_ranks.create', compact('rank_types'));
    }

    /**
     * Store a newly created EmployeeRank in storage.
     *
     * @param CreateEmployeeRankRequest $request
     *
     * @return Response
     */
    public function store(CreateEmployeeRankRequest $request)
    {
        if (!check_permission('employees-create')) {
            Flash::error('Permission Denied');
        }
        $input = $request->all();
        $rank = RankType::find($input['rank_type_id']);
        $employee = Employee::find($input['employee_id']);

        if($input['status'] == 1) {
            $employee_ranks = $employee->ranks;
            foreach ($employee_ranks as $rank) {
                $rank->status = 0;
                $rank->save();
            }
        }

        $input['type'] = $rank->type;
        $input['employee_gender'] = $employee->gender;

        /** @var EmployeeRank $employeeRank */
        $employeeRank = EmployeeRank::create($input);

        $employee['current_rank'] = EmployeeRank::orderBy('id', 'DESC')
        ->where('employee_id', '=', $employee->id)
        ->where('status', '=', 1)
        ->first()->rank_type_id;
        $employee->save();


        Flash::success('Employee Rank saved successfully.');
        add_audit('create', 'Employee Rank');
        close_modal_refresh();

        // return redirect(route('humanresource.employeeRanks.index'));
    }

    /**
     * Display the specified EmployeeRank.
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
        /** @var EmployeeRank $employeeRank */
        $employeeRank = EmployeeRank::find($id);

        if (empty($employeeRank)) {
            Flash::error('Employee Rank not found');

            // return redirect(route('humanresource.employeeRanks.index'));
        }

        return view('humanresource.employee_ranks.show')->with('employeeRank', $employeeRank);
    }

    /**
     * Show the form for editing the specified EmployeeRank.
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
        /** @var EmployeeRank $employeeRank */
        $employeeRank = EmployeeRank::find($id);

        if (empty($employeeRank)) {
            Flash::error('Employee Rank not found');

            // return redirect(route('humanresource.employeeRanks.index'));
        }

        $rank_types = new RankType;

        return view('humanresource.employee_ranks.edit', compact('rank_types'))->with('employeeRank', $employeeRank);
    }

    /**
     * Update the specified EmployeeRank in storage.
     *
     * @param  int              $id
     * @param UpdateEmployeeRankRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEmployeeRankRequest $request)
    {
        if (!check_permission('employees-edit')) {
            Flash::error('Permission Denied');
        }
        /** @var EmployeeRank $employeeRank */
        $employeeRank = EmployeeRank::find($id);

        if (empty($employeeRank)) {
            Flash::error('Employee Rank not found');

            // return redirect(route('humanresource.employeeRanks.index'));
        }

        $input = $request->all();
        $rank = RankType::find($input['rank_type_id']);
        $employee = Employee::find($input['employee_id']);

        $input['type'] = $rank->type;
        $input['employee_gender'] = $employee->gender;
        $employeeRank->fill($input);
        $employeeRank->save();

        // $employee['current_rank'] = EmployeeRank::orderBy('id', 'DESC')
        // ->where('employee_id', '=', $employee->id)
        // ->where('status', '=', 1)
        // ->first()->rank_type_id;
        // $employee->save();


        Flash::success('Employee Rank updated successfully.');
        add_audit('update', 'Employee Rank');
        close_modal_refresh();

        // return redirect(route('humanresource.employeeRanks.index'));
    }

    /**
     * Remove the specified EmployeeRank from storage.
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
        /** @var EmployeeRank $employeeRank */
        $employeeRank = EmployeeRank::find($id);

        if (empty($employeeRank)) {
            Flash::error('Employee Rank not found');

            return redirect(route('humanresource.employeeRanks.index'));
        }

        $employeeRank->delete();
        add_audit('delete', 'Employee Rank');

        Flash::success('Employee Rank deleted successfully.');
        return redirect(route('humanresource.employees.show', session('employee_id')));

        // return redirect(route('humanresource.employeeRanks.index'));
    }
}
