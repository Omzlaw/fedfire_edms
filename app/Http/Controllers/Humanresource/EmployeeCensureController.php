<?php

namespace App\Http\Controllers\Humanresource;

use Flash;
use Response;
use App\Http\Requests\Humanresource;
use App\Models\Humanresource\Employee;
use App\Http\Controllers\AppBaseController;
use App\Models\Humanresource\EmployeeCensure;
use App\DataTables\Humanresource\EmployeeCensureDataTable;
use App\Http\Requests\Humanresource\CreateEmployeeCensureRequest;
use App\Http\Requests\Humanresource\UpdateEmployeeCensureRequest;

class EmployeeCensureController extends AppBaseController
{
    /**
     * Display a listing of the EmployeeCensure.
     *
     * @param EmployeeCensureDataTable $employeeCensureDataTable
     * @return Response
     */
    public function index(EmployeeCensureDataTable $employeeCensureDataTable)
    {
        return $employeeCensureDataTable->render('humanresource.employee_censures.index');
    }

    /**
     * Show the form for creating a new EmployeeCensure.
     *
     * @return Response
     */
    public function create()
    {
        $employees = new Employee;
        return view('humanresource.employee_censures.create', compact('employees'));
    }

    /**
     * Store a newly created EmployeeCensure in storage.
     *
     * @param CreateEmployeeCensureRequest $request
     *
     * @return Response
     */
    public function store(CreateEmployeeCensureRequest $request)
    {
        $input = $request->all();

        /** @var EmployeeCensure $employeeCensure */
        $employeeCensure = EmployeeCensure::create($input);

        Flash::success('Employee Censure saved successfully.');

        //return redirect(route('humanresource.employeeCensures.index'));
    }

    /**
     * Display the specified EmployeeCensure.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var EmployeeCensure $employeeCensure */
        $employeeCensure = EmployeeCensure::find($id);

        if (empty($employeeCensure)) {
            Flash::error('Employee Censure not found');

            //return redirect(route('humanresource.employeeCensures.index'));
        }

        return view('humanresource.employee_censures.show')->with('employeeCensure', $employeeCensure);
    }

    /**
     * Show the form for editing the specified EmployeeCensure.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var EmployeeCensure $employeeCensure */
        $employeeCensure = EmployeeCensure::find($id);

        if (empty($employeeCensure)) {
            Flash::error('Employee Censure not found');

            //return redirect(route('humanresource.employeeCensures.index'));
        }
        $employees = new Employee;
        return view('humanresource.employee_censures.edit', compact('employees'))->with('employeeCensure', $employeeCensure);
    }

    /**
     * Update the specified EmployeeCensure in storage.
     *
     * @param  int              $id
     * @param UpdateEmployeeCensureRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEmployeeCensureRequest $request)
    {
        /** @var EmployeeCensure $employeeCensure */
        $employeeCensure = EmployeeCensure::find($id);

        if (empty($employeeCensure)) {
            Flash::error('Employee Censure not found');

            //return redirect(route('humanresource.employeeCensures.index'));
        }

        $employeeCensure->fill($request->all());
        $employeeCensure->save();

        Flash::success('Employee Censure updated successfully.');

        //return redirect(route('humanresource.employeeCensures.index'));
    }

    /**
     * Remove the specified EmployeeCensure from storage.
     *
     * @param  int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var EmployeeCensure $employeeCensure */
        $employeeCensure = EmployeeCensure::find($id);

        if (empty($employeeCensure)) {
            Flash::error('Employee Censure not found');

            //return redirect(route('humanresource.employeeCensures.index'));
        }

        $employeeCensure->delete();

        Flash::success('Employee Censure deleted successfully.');

        //return redirect(route('humanresource.employeeCensures.index'));
    }
}
