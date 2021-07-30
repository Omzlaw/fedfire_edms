<?php

namespace App\Http\Controllers\Humanresource;

use Flash;
use Response;
use App\Http\Requests\Humanresource;
use App\Models\Humanresource\Employee;
use App\Http\Controllers\AppBaseController;
use App\Models\Humanresource\EmployeeLanguage;
use App\DataTables\Humanresource\EmployeeLanguageDataTable;
use App\Http\Requests\Humanresource\CreateEmployeeLanguageRequest;
use App\Http\Requests\Humanresource\UpdateEmployeeLanguageRequest;

class EmployeeLanguageController extends AppBaseController
{
    /**
     * Display a listing of the EmployeeLanguage.
     *
     * @param EmployeeLanguageDataTable $employeeLanguageDataTable
     * @return Response
     */
    public function index(EmployeeLanguageDataTable $employeeLanguageDataTable)
    {
        return $employeeLanguageDataTable->render('humanresource.employee_languages.index');
    }

    /**
     * Show the form for creating a new EmployeeLanguage.
     *
     * @return Response
     */
    public function create()
    {
        $employees = new Employee;
        return view('humanresource.employee_languages.create', compact('employees'));
    }

    /**
     * Store a newly created EmployeeLanguage in storage.
     *
     * @param CreateEmployeeLanguageRequest $request
     *
     * @return Response
     */
    public function store(CreateEmployeeLanguageRequest $request)
    {
        $input = $request->all();

        /** @var EmployeeLanguage $employeeLanguage */
        $employeeLanguage = EmployeeLanguage::create($input);

        Flash::success('Employee Language saved successfully.');

        //return redirect(route('humanresource.employeeLanguages.index'));
    }

    /**
     * Display the specified EmployeeLanguage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var EmployeeLanguage $employeeLanguage */
        $employeeLanguage = EmployeeLanguage::find($id);

        if (empty($employeeLanguage)) {
            Flash::error('Employee Language not found');

            //return redirect(route('humanresource.employeeLanguages.index'));
        }

        return view('humanresource.employee_languages.show')->with('employeeLanguage', $employeeLanguage);
    }

    /**
     * Show the form for editing the specified EmployeeLanguage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var EmployeeLanguage $employeeLanguage */
        $employeeLanguage = EmployeeLanguage::find($id);

        if (empty($employeeLanguage)) {
            Flash::error('Employee Language not found');

            //return redirect(route('humanresource.employeeLanguages.index'));
        }
        $employees = new Employee;
        return view('humanresource.employee_languages.edit', compact('employees'))->with('employeeLanguage', $employeeLanguage);
    }

    /**
     * Update the specified EmployeeLanguage in storage.
     *
     * @param  int              $id
     * @param UpdateEmployeeLanguageRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEmployeeLanguageRequest $request)
    {
        /** @var EmployeeLanguage $employeeLanguage */
        $employeeLanguage = EmployeeLanguage::find($id);

        if (empty($employeeLanguage)) {
            Flash::error('Employee Language not found');

            //return redirect(route('humanresource.employeeLanguages.index'));
        }

        $employeeLanguage->fill($request->all());
        $employeeLanguage->save();

        Flash::success('Employee Language updated successfully.');

        //return redirect(route('humanresource.employeeLanguages.index'));
    }

    /**
     * Remove the specified EmployeeLanguage from storage.
     *
     * @param  int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var EmployeeLanguage $employeeLanguage */
        $employeeLanguage = EmployeeLanguage::find($id);

        if (empty($employeeLanguage)) {
            Flash::error('Employee Language not found');

            //return redirect(route('humanresource.employeeLanguages.index'));
        }

        $employeeLanguage->delete();

        Flash::success('Employee Language deleted successfully.');

        //return redirect(route('humanresource.employeeLanguages.index'));
    }
}
