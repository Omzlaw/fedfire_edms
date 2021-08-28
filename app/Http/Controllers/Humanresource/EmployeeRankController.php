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
        return $employeeRankDataTable->render('humanresource.employee_ranks.index');
    }

    /**
     * Show the form for creating a new EmployeeRank.
     *
     * @return Response
     */
    public function create()
    {
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
        $input = $request->all();
        $rank = RankType::find($input['rank_type_id']);
        $employee = Employee::find($input['employee_id']);
        
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

        $employee['current_rank'] = EmployeeRank::orderBy('id', 'DESC')
        ->where('employee_id', '=', $employee->id)
        ->where('status', '=', 1)
        ->first()->rank_type_id;
        $employee->save();


        Flash::success('Employee Rank updated successfully.');
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
        /** @var EmployeeRank $employeeRank */
        $employeeRank = EmployeeRank::find($id);

        if (empty($employeeRank)) {
            Flash::error('Employee Rank not found');

            return redirect(route('humanresource.employeeRanks.index'));
        }

        $employeeRank->delete();

        Flash::success('Employee Rank deleted successfully.');
        return redirect(route('humanresource.employees.show', session('employee_id')));

        // return redirect(route('humanresource.employeeRanks.index'));
    }
}
