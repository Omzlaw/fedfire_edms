<?php

namespace App\Http\Controllers\Humanresource;

use App\DataTables\Humanresource\EmployeeBirthParticularDataTable;
use App\Http\Requests\Humanresource;
use App\Http\Requests\Humanresource\CreateEmployeeBirthParticularRequest;
use App\Http\Requests\Humanresource\UpdateEmployeeBirthParticularRequest;
use App\Models\Humanresource\EmployeeBirthParticular;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class EmployeeBirthParticularController extends AppBaseController
{
    /**
     * Display a listing of the EmployeeBirthParticular.
     *
     * @param EmployeeBirthParticularDataTable $employeeBirthParticularDataTable
     * @return Response
     */
    public function index(EmployeeBirthParticularDataTable $employeeBirthParticularDataTable)
    {
        Flash::error('Not Allowed');
        return back();
        // return $employeeBirthParticularDataTable->render('humanresource.employee_birth_particulars.index');
    }

    /**
     * Show the form for creating a new EmployeeBirthParticular.
     *
     * @return Response
     */
    public function create()
    {
        return view('humanresource.employee_birth_particulars.create');
    }

    /**
     * Store a newly created EmployeeBirthParticular in storage.
     *
     * @param CreateEmployeeBirthParticularRequest $request
     *
     * @return Response
     */
    public function store(CreateEmployeeBirthParticularRequest $request)
    {
        $input = $request->all();

        /** @var EmployeeBirthParticular $employeeBirthParticular */
        $employeeBirthParticular = EmployeeBirthParticular::create($input);

        Flash::success('Employee Birth Particular saved successfully.');
        add_audit('create', 'Employee Birth Particular');
        close_modal_refresh();

        // return redirect(route('humanresource.employeeBirthParticulars.index'));
    }

    /**
     * Display the specified EmployeeBirthParticular.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var EmployeeBirthParticular $employeeBirthParticular */
        $employeeBirthParticular = EmployeeBirthParticular::find($id);

        if (empty($employeeBirthParticular)) {
            Flash::error('Employee Birth Particular not found');

            // return redirect(route('humanresource.employeeBirthParticulars.index'));
        }

        return view('humanresource.employee_birth_particulars.show')->with('employeeBirthParticular', $employeeBirthParticular);
    }

    /**
     * Show the form for editing the specified EmployeeBirthParticular.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var EmployeeBirthParticular $employeeBirthParticular */
        $employeeBirthParticular = EmployeeBirthParticular::find($id);

        if (empty($employeeBirthParticular)) {
            Flash::error('Employee Birth Particular not found');

            // return redirect(route('humanresource.employeeBirthParticulars.index'));
        }

        return view('humanresource.employee_birth_particulars.edit')->with('employeeBirthParticular', $employeeBirthParticular);
    }

    /**
     * Update the specified EmployeeBirthParticular in storage.
     *
     * @param  int              $id
     * @param UpdateEmployeeBirthParticularRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEmployeeBirthParticularRequest $request)
    {
        /** @var EmployeeBirthParticular $employeeBirthParticular */
        $employeeBirthParticular = EmployeeBirthParticular::find($id);

        if (empty($employeeBirthParticular)) {
            Flash::error('Employee Birth Particular not found');

            // return redirect(route('humanresource.employeeBirthParticulars.index'));
        }

        $employeeBirthParticular->fill($request->all());
        $employeeBirthParticular->save();

        add_audit('update', 'Employee Birth Particular');
        close_modal_refresh();

        Flash::success('Employee Birth Particular updated successfully.');

        // return redirect(route('humanresource.employeeBirthParticulars.index'));
    }

    /**
     * Remove the specified EmployeeBirthParticular from storage.
     *
     * @param  int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var EmployeeBirthParticular $employeeBirthParticular */
        $employeeBirthParticular = EmployeeBirthParticular::find($id);

        if (empty($employeeBirthParticular)) {
            Flash::error('Employee Birth Particular not found');

            // return redirect(route('humanresource.employeeBirthParticulars.index'));
        }

        $employeeBirthParticular->delete();
        add_audit('delete', 'Employee Birth Particular');

        Flash::success('Employee Birth Particular deleted successfully.');

        // return redirect(route('humanresource.employeeBirthParticulars.index'));
    }
}
