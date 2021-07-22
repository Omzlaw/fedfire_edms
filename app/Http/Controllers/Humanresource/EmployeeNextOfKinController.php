<?php

namespace App\Http\Controllers\Humanresource;

use App\Http\Requests\Humanresource\CreateEmployeeNextOfKinRequest;
use App\Http\Requests\Humanresource\UpdateEmployeeNextOfKinRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\Humanresource\EmployeeNextOfKin;
use Illuminate\Http\Request;
use Flash;
use Response;

class EmployeeNextOfKinController extends AppBaseController
{
    /**
     * Display a listing of the EmployeeNextOfKin.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        /** @var EmployeeNextOfKin $employeeNextOfKins */
        $employeeNextOfKins = EmployeeNextOfKin::paginate(10);

        return view('humanresource.employee_next_of_kins.index')
            ->with('employeeNextOfKins', $employeeNextOfKins);
    }

    /**
     * Show the form for creating a new EmployeeNextOfKin.
     *
     * @return Response
     */
    public function create()
    {
        return view('humanresource.employee_next_of_kins.create');
    }

    /**
     * Store a newly created EmployeeNextOfKin in storage.
     *
     * @param CreateEmployeeNextOfKinRequest $request
     *
     * @return Response
     */
    public function store(CreateEmployeeNextOfKinRequest $request)
    {
        $input = $request->all();

        /** @var EmployeeNextOfKin $employeeNextOfKin */
        $employeeNextOfKin = EmployeeNextOfKin::create($input);

        Flash::success('Employee Next Of Kin saved successfully.');

        return redirect(route('humanresource.employeeNextOfKins.index'));
    }

    /**
     * Display the specified EmployeeNextOfKin.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var EmployeeNextOfKin $employeeNextOfKin */
        $employeeNextOfKin = EmployeeNextOfKin::find($id);

        if (empty($employeeNextOfKin)) {
            Flash::error('Employee Next Of Kin not found');

            return redirect(route('humanresource.employeeNextOfKins.index'));
        }

        return view('humanresource.employee_next_of_kins.show')->with('employeeNextOfKin', $employeeNextOfKin);
    }

    /**
     * Show the form for editing the specified EmployeeNextOfKin.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var EmployeeNextOfKin $employeeNextOfKin */
        $employeeNextOfKin = EmployeeNextOfKin::find($id);

        if (empty($employeeNextOfKin)) {
            Flash::error('Employee Next Of Kin not found');

            return redirect(route('humanresource.employeeNextOfKins.index'));
        }

        return view('humanresource.employee_next_of_kins.edit')->with('employeeNextOfKin', $employeeNextOfKin);
    }

    /**
     * Update the specified EmployeeNextOfKin in storage.
     *
     * @param int $id
     * @param UpdateEmployeeNextOfKinRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEmployeeNextOfKinRequest $request)
    {
        /** @var EmployeeNextOfKin $employeeNextOfKin */
        $employeeNextOfKin = EmployeeNextOfKin::find($id);

        if (empty($employeeNextOfKin)) {
            Flash::error('Employee Next Of Kin not found');

            return redirect(route('humanresource.employeeNextOfKins.index'));
        }

        $employeeNextOfKin->fill($request->all());
        $employeeNextOfKin->save();

        Flash::success('Employee Next Of Kin updated successfully.');

        return redirect(route('humanresource.employeeNextOfKins.index'));
    }

    /**
     * Remove the specified EmployeeNextOfKin from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var EmployeeNextOfKin $employeeNextOfKin */
        $employeeNextOfKin = EmployeeNextOfKin::find($id);

        if (empty($employeeNextOfKin)) {
            Flash::error('Employee Next Of Kin not found');

            return redirect(route('humanresource.employeeNextOfKins.index'));
        }

        $employeeNextOfKin->delete();

        Flash::success('Employee Next Of Kin deleted successfully.');

        return redirect(route('humanresource.employeeNextOfKins.index'));
    }
}
