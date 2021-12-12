<?php

namespace App\Http\Controllers\Humanresource;

use Flash;
use Response;
use App\Http\Requests\Humanresource;
use App\Models\Humanresource\Employee;
use App\Http\Controllers\AppBaseController;
use App\Models\Humanresource\EmployeeGratuity;
use App\DataTables\Humanresource\EmployeeGratuityDataTable;
use App\Http\Requests\Humanresource\CreateEmployeeGratuityRequest;
use App\Http\Requests\Humanresource\UpdateEmployeeGratuityRequest;

class EmployeeGratuityController extends AppBaseController
{
    /**
     * Display a listing of the EmployeeGratuity.
     *
     * @param EmployeeGratuityDataTable $employeeGratuityDataTable
     * @return Response
     */
    public function index(EmployeeGratuityDataTable $employeeGratuityDataTable)
    {
        Flash::error('Not Allowed');
        return back();
        // return $employeeGratuityDataTable->render('humanresource.employee_gratuities.index');
    }

    /**
     * Show the form for creating a new EmployeeGratuity.
     *
     * @return Response
     */
    public function create()
    {
        $employees = new Employee;
        return view('humanresource.employee_gratuities.create', compact('employees'));
    }

    /**
     * Store a newly created EmployeeGratuity in storage.
     *
     * @param CreateEmployeeGratuityRequest $request
     *
     * @return Response
     */
    public function store(CreateEmployeeGratuityRequest $request)
    {
        $input = $request->all();

        /** @var EmployeeGratuity $employeeGratuity */
        $employeeGratuity = EmployeeGratuity::create($input);

        Flash::success('Employee Gratuity saved successfully.');
        add_audit('create', 'Employee Gratuity');
        close_modal_refresh();

        //return redirect(route('humanresource.employeeGratuities.index'));
    }

    /**
     * Display the specified EmployeeGratuity.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var EmployeeGratuity $employeeGratuity */
        $employeeGratuity = EmployeeGratuity::find($id);

        if (empty($employeeGratuity)) {
            Flash::error('Employee Gratuity not found');

            //return redirect(route('humanresource.employeeGratuities.index'));
        }

        return view('humanresource.employee_gratuities.show')->with('employeeGratuity', $employeeGratuity);
    }

    /**
     * Show the form for editing the specified EmployeeGratuity.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var EmployeeGratuity $employeeGratuity */
        $employeeGratuity = EmployeeGratuity::find($id);

        if (empty($employeeGratuity)) {
            Flash::error('Employee Gratuity not found');

            //return redirect(route('humanresource.employeeGratuities.index'));
        }
        $employees = new Employee;
        return view('humanresource.employee_gratuities.edit', compact('employees'))->with('employeeGratuity', $employeeGratuity);
    }

    /**
     * Update the specified EmployeeGratuity in storage.
     *
     * @param  int              $id
     * @param UpdateEmployeeGratuityRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEmployeeGratuityRequest $request)
    {
        /** @var EmployeeGratuity $employeeGratuity */
        $employeeGratuity = EmployeeGratuity::find($id);

        if (empty($employeeGratuity)) {
            Flash::error('Employee Gratuity not found');
            close_modal_refresh();

            //return redirect(route('humanresource.employeeGratuities.index'));
        }

        $employeeGratuity->fill($request->all());
        $employeeGratuity->save();
        add_audit('update', 'Employee Gratuity');

        Flash::success('Employee Gratuity updated successfully.');
        close_modal_refresh();

        //return redirect(route('humanresource.employeeGratuities.index'));
    }

    /**
     * Remove the specified EmployeeGratuity from storage.
     *
     * @param  int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var EmployeeGratuity $employeeGratuity */
        $employeeGratuity = EmployeeGratuity::find($id);

        if (empty($employeeGratuity)) {
            Flash::error('Employee Gratuity not found');

            //return redirect(route('humanresource.employeeGratuities.index'));
        }

        $employeeGratuity->delete();
        add_audit('delete', 'Employee Gratuity');

        Flash::success('Employee Gratuity deleted successfully.');
        return redirect(route('humanresource.employees.show', session('employee_id')));

        //return redirect(route('humanresource.employeeGratuities.index'));
    }
}
