<?php

namespace App\Http\Controllers\Humanresource;

use App\DataTables\Humanresource\EmployeeForeignToursDataTable;
use App\Http\Requests\Humanresource;
use App\Http\Requests\Humanresource\CreateEmployeeForeignToursRequest;
use App\Http\Requests\Humanresource\UpdateEmployeeForeignToursRequest;
use App\Models\Humanresource\EmployeeForeignTours;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class EmployeeForeignToursController extends AppBaseController
{
    /**
     * Display a listing of the EmployeeForeignTours.
     *
     * @param EmployeeForeignToursDataTable $employeeForeignToursDataTable
     * @return Response
     */
    public function index(EmployeeForeignToursDataTable $employeeForeignToursDataTable)
    {
        return $employeeForeignToursDataTable->render('humanresource.employee_foreign_tours.index');
    }

    /**
     * Show the form for creating a new EmployeeForeignTours.
     *
     * @return Response
     */
    public function create()
    {
        return view('humanresource.employee_foreign_tours.create');
    }

    /**
     * Store a newly created EmployeeForeignTours in storage.
     *
     * @param CreateEmployeeForeignToursRequest $request
     *
     * @return Response
     */
    public function store(CreateEmployeeForeignToursRequest $request)
    {
        $input = $request->all();

        /** @var EmployeeForeignTours $employeeForeignTours */
        $employeeForeignTours = EmployeeForeignTours::create($input);

        Flash::success('Employee Foreign Tours saved successfully.');

        return redirect(route('humanresource.employeeForeignTours.index'));
    }

    /**
     * Display the specified EmployeeForeignTours.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var EmployeeForeignTours $employeeForeignTours */
        $employeeForeignTours = EmployeeForeignTours::find($id);

        if (empty($employeeForeignTours)) {
            Flash::error('Employee Foreign Tours not found');

            return redirect(route('humanresource.employeeForeignTours.index'));
        }

        return view('humanresource.employee_foreign_tours.show')->with('employeeForeignTours', $employeeForeignTours);
    }

    /**
     * Show the form for editing the specified EmployeeForeignTours.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var EmployeeForeignTours $employeeForeignTours */
        $employeeForeignTours = EmployeeForeignTours::find($id);

        if (empty($employeeForeignTours)) {
            Flash::error('Employee Foreign Tours not found');

            return redirect(route('humanresource.employeeForeignTours.index'));
        }

        return view('humanresource.employee_foreign_tours.edit')->with('employeeForeignTours', $employeeForeignTours);
    }

    /**
     * Update the specified EmployeeForeignTours in storage.
     *
     * @param  int              $id
     * @param UpdateEmployeeForeignToursRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEmployeeForeignToursRequest $request)
    {
        /** @var EmployeeForeignTours $employeeForeignTours */
        $employeeForeignTours = EmployeeForeignTours::find($id);

        if (empty($employeeForeignTours)) {
            Flash::error('Employee Foreign Tours not found');

            return redirect(route('humanresource.employeeForeignTours.index'));
        }

        $employeeForeignTours->fill($request->all());
        $employeeForeignTours->save();

        Flash::success('Employee Foreign Tours updated successfully.');

        return redirect(route('humanresource.employeeForeignTours.index'));
    }

    /**
     * Remove the specified EmployeeForeignTours from storage.
     *
     * @param  int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var EmployeeForeignTours $employeeForeignTours */
        $employeeForeignTours = EmployeeForeignTours::find($id);

        if (empty($employeeForeignTours)) {
            Flash::error('Employee Foreign Tours not found');

            return redirect(route('humanresource.employeeForeignTours.index'));
        }

        $employeeForeignTours->delete();

        Flash::success('Employee Foreign Tours deleted successfully.');

        return redirect(route('humanresource.employeeForeignTours.index'));
    }
}
