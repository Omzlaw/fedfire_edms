<?php

namespace App\Http\Controllers\Humanresource;

use App\DataTables\Humanresource\EmployeeGratuityDataTable;
use App\Http\Requests\Humanresource;
use App\Http\Requests\Humanresource\CreateEmployeeGratuityRequest;
use App\Http\Requests\Humanresource\UpdateEmployeeGratuityRequest;
use App\Models\Humanresource\EmployeeGratuity;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

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
        return $employeeGratuityDataTable->render('humanresource.employee_gratuities.index');
    }

    /**
     * Show the form for creating a new EmployeeGratuity.
     *
     * @return Response
     */
    public function create()
    {
        return view('humanresource.employee_gratuities.create');
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

        return redirect(route('humanresource.employeeGratuities.index'));
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

            return redirect(route('humanresource.employeeGratuities.index'));
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

            return redirect(route('humanresource.employeeGratuities.index'));
        }

        return view('humanresource.employee_gratuities.edit')->with('employeeGratuity', $employeeGratuity);
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

            return redirect(route('humanresource.employeeGratuities.index'));
        }

        $employeeGratuity->fill($request->all());
        $employeeGratuity->save();

        Flash::success('Employee Gratuity updated successfully.');

        return redirect(route('humanresource.employeeGratuities.index'));
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

            return redirect(route('humanresource.employeeGratuities.index'));
        }

        $employeeGratuity->delete();

        Flash::success('Employee Gratuity deleted successfully.');

        return redirect(route('humanresource.employeeGratuities.index'));
    }
}