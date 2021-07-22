<?php

namespace App\Http\Controllers\Humanresource;

use App\DataTables\Humanresource\EmployeeWifeDataTable;
use App\Http\Requests\Humanresource;
use App\Http\Requests\Humanresource\CreateEmployeeWifeRequest;
use App\Http\Requests\Humanresource\UpdateEmployeeWifeRequest;
use App\Models\Humanresource\EmployeeWife;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class EmployeeWifeController extends AppBaseController
{
    /**
     * Display a listing of the EmployeeWife.
     *
     * @param EmployeeWifeDataTable $employeeWifeDataTable
     * @return Response
     */
    public function index(EmployeeWifeDataTable $employeeWifeDataTable)
    {
        return $employeeWifeDataTable->render('humanresource.employee_wives.index');
    }

    /**
     * Show the form for creating a new EmployeeWife.
     *
     * @return Response
     */
    public function create()
    {
        return view('humanresource.employee_wives.create');
    }

    /**
     * Store a newly created EmployeeWife in storage.
     *
     * @param CreateEmployeeWifeRequest $request
     *
     * @return Response
     */
    public function store(CreateEmployeeWifeRequest $request)
    {
        $input = $request->all();

        /** @var EmployeeWife $employeeWife */
        $employeeWife = EmployeeWife::create($input);

        Flash::success('Employee Wife saved successfully.');

        return redirect(route('humanresource.employeeWives.index'));
    }

    /**
     * Display the specified EmployeeWife.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var EmployeeWife $employeeWife */
        $employeeWife = EmployeeWife::find($id);

        if (empty($employeeWife)) {
            Flash::error('Employee Wife not found');

            return redirect(route('humanresource.employeeWives.index'));
        }

        return view('humanresource.employee_wives.show')->with('employeeWife', $employeeWife);
    }

    /**
     * Show the form for editing the specified EmployeeWife.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var EmployeeWife $employeeWife */
        $employeeWife = EmployeeWife::find($id);

        if (empty($employeeWife)) {
            Flash::error('Employee Wife not found');

            return redirect(route('humanresource.employeeWives.index'));
        }

        return view('humanresource.employee_wives.edit')->with('employeeWife', $employeeWife);
    }

    /**
     * Update the specified EmployeeWife in storage.
     *
     * @param  int              $id
     * @param UpdateEmployeeWifeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEmployeeWifeRequest $request)
    {
        /** @var EmployeeWife $employeeWife */
        $employeeWife = EmployeeWife::find($id);

        if (empty($employeeWife)) {
            Flash::error('Employee Wife not found');

            return redirect(route('humanresource.employeeWives.index'));
        }

        $employeeWife->fill($request->all());
        $employeeWife->save();

        Flash::success('Employee Wife updated successfully.');

        return redirect(route('humanresource.employeeWives.index'));
    }

    /**
     * Remove the specified EmployeeWife from storage.
     *
     * @param  int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var EmployeeWife $employeeWife */
        $employeeWife = EmployeeWife::find($id);

        if (empty($employeeWife)) {
            Flash::error('Employee Wife not found');

            return redirect(route('humanresource.employeeWives.index'));
        }

        $employeeWife->delete();

        Flash::success('Employee Wife deleted successfully.');

        return redirect(route('humanresource.employeeWives.index'));
    }
}
