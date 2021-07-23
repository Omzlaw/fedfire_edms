<?php

namespace App\Http\Controllers\Humanresource;

use Flash;
use Response;
use App\Http\Requests\Humanresource;
use App\Models\Humanresource\Employee;
use App\Http\Controllers\AppBaseController;
use App\Models\Humanresource\EmployeeCertificates;
use App\DataTables\Humanresource\EmployeeCertificatesDataTable;
use App\Http\Requests\Humanresource\CreateEmployeeCertificatesRequest;
use App\Http\Requests\Humanresource\UpdateEmployeeCertificatesRequest;

class EmployeeCertificatesController extends AppBaseController
{
    /**
     * Display a listing of the EmployeeCertificates.
     *
     * @param EmployeeCertificatesDataTable $employeeCertificatesDataTable
     * @return Response
     */
    public function index(EmployeeCertificatesDataTable $employeeCertificatesDataTable)
    {
        return $employeeCertificatesDataTable->render('humanresource.employee_certificates.index');
    }

    /**
     * Show the form for creating a new EmployeeCertificates.
     *
     * @return Response
     */
    public function create()
    {
        $employees = new Employee;
        return view('humanresource.employee_certificates.create', compact('employees'));
    }

    /**
     * Store a newly created EmployeeCertificates in storage.
     *
     * @param CreateEmployeeCertificatesRequest $request
     *
     * @return Response
     */
    public function store(CreateEmployeeCertificatesRequest $request)
    {
        $input = $request->all();

        /** @var EmployeeCertificates $employeeCertificates */
        $employeeCertificates = EmployeeCertificates::create($input);

        Flash::success('Employee Certificates saved successfully.');

        return redirect(route('humanresource.employeeCertificates.index'));
    }

    /**
     * Display the specified EmployeeCertificates.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var EmployeeCertificates $employeeCertificates */
        $employeeCertificates = EmployeeCertificates::find($id);

        if (empty($employeeCertificates)) {
            Flash::error('Employee Certificates not found');

            return redirect(route('humanresource.employeeCertificates.index'));
        }

        return view('humanresource.employee_certificates.show')->with('employeeCertificates', $employeeCertificates);
    }

    /**
     * Show the form for editing the specified EmployeeCertificates.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var EmployeeCertificates $employeeCertificates */
        $employeeCertificates = EmployeeCertificates::find($id);

        if (empty($employeeCertificates)) {
            Flash::error('Employee Certificates not found');

            return redirect(route('humanresource.employeeCertificates.index'));
        }
        $employees = new Employee;

        return view('humanresource.employee_certificates.edit', compact('employees'))->with('employeeCertificates', $employeeCertificates);
    }

    /**
     * Update the specified EmployeeCertificates in storage.
     *
     * @param  int              $id
     * @param UpdateEmployeeCertificatesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEmployeeCertificatesRequest $request)
    {
        /** @var EmployeeCertificates $employeeCertificates */
        $employeeCertificates = EmployeeCertificates::find($id);

        if (empty($employeeCertificates)) {
            Flash::error('Employee Certificates not found');

            return redirect(route('humanresource.employeeCertificates.index'));
        }

        $employeeCertificates->fill($request->all());
        $employeeCertificates->save();

        Flash::success('Employee Certificates updated successfully.');

        return redirect(route('humanresource.employeeCertificates.index'));
    }

    /**
     * Remove the specified EmployeeCertificates from storage.
     *
     * @param  int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var EmployeeCertificates $employeeCertificates */
        $employeeCertificates = EmployeeCertificates::find($id);

        if (empty($employeeCertificates)) {
            Flash::error('Employee Certificates not found');

            return redirect(route('humanresource.employeeCertificates.index'));
        }

        $employeeCertificates->delete();

        Flash::success('Employee Certificates deleted successfully.');

        return redirect(route('humanresource.employeeCertificates.index'));
    }
}
