<?php

namespace App\Http\Controllers\Humanresource;

use App\DataTables\Humanresource\EmployeeChildrenDataTable;
use App\Http\Requests\Humanresource;
use App\Http\Requests\Humanresource\CreateEmployeeChildrenRequest;
use App\Http\Requests\Humanresource\UpdateEmployeeChildrenRequest;
use App\Models\Humanresource\EmployeeChildren;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class EmployeeChildrenController extends AppBaseController
{
    /**
     * Display a listing of the EmployeeChildren.
     *
     * @param EmployeeChildrenDataTable $employeeChildrenDataTable
     * @return Response
     */
    public function index(EmployeeChildrenDataTable $employeeChildrenDataTable)
    {
        return $employeeChildrenDataTable->render('humanresource.employee_childrens.index');
    }

    /**
     * Show the form for creating a new EmployeeChildren.
     *
     * @return Response
     */
    public function create()
    {
        return view('humanresource.employee_childrens.create');
    }

    /**
     * Store a newly created EmployeeChildren in storage.
     *
     * @param CreateEmployeeChildrenRequest $request
     *
     * @return Response
     */
    public function store(CreateEmployeeChildrenRequest $request)
    {
        $input = $request->all();

        /** @var EmployeeChildren $employeeChildren */
        $employeeChildren = EmployeeChildren::create($input);

        Flash::success('Employee Children saved successfully.');

        return redirect(route('humanresource.employeeChildrens.index'));
    }

    /**
     * Display the specified EmployeeChildren.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var EmployeeChildren $employeeChildren */
        $employeeChildren = EmployeeChildren::find($id);

        if (empty($employeeChildren)) {
            Flash::error('Employee Children not found');

            return redirect(route('humanresource.employeeChildrens.index'));
        }

        return view('humanresource.employee_childrens.show')->with('employeeChildren', $employeeChildren);
    }

    /**
     * Show the form for editing the specified EmployeeChildren.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var EmployeeChildren $employeeChildren */
        $employeeChildren = EmployeeChildren::find($id);

        if (empty($employeeChildren)) {
            Flash::error('Employee Children not found');

            return redirect(route('humanresource.employeeChildrens.index'));
        }

        return view('humanresource.employee_childrens.edit')->with('employeeChildren', $employeeChildren);
    }

    /**
     * Update the specified EmployeeChildren in storage.
     *
     * @param  int              $id
     * @param UpdateEmployeeChildrenRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEmployeeChildrenRequest $request)
    {
        /** @var EmployeeChildren $employeeChildren */
        $employeeChildren = EmployeeChildren::find($id);

        if (empty($employeeChildren)) {
            Flash::error('Employee Children not found');

            return redirect(route('humanresource.employeeChildrens.index'));
        }

        $employeeChildren->fill($request->all());
        $employeeChildren->save();

        Flash::success('Employee Children updated successfully.');

        return redirect(route('humanresource.employeeChildrens.index'));
    }

    /**
     * Remove the specified EmployeeChildren from storage.
     *
     * @param  int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var EmployeeChildren $employeeChildren */
        $employeeChildren = EmployeeChildren::find($id);

        if (empty($employeeChildren)) {
            Flash::error('Employee Children not found');

            return redirect(route('humanresource.employeeChildrens.index'));
        }

        $employeeChildren->delete();

        Flash::success('Employee Children deleted successfully.');

        return redirect(route('humanresource.employeeChildrens.index'));
    }
}