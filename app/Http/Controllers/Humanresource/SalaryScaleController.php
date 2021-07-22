<?php

namespace App\Http\Controllers\Humanresource;

use App\DataTables\Humanresource\SalaryScaleDataTable;
use App\Http\Requests\Humanresource;
use App\Http\Requests\Humanresource\CreateSalaryScaleRequest;
use App\Http\Requests\Humanresource\UpdateSalaryScaleRequest;
use App\Models\Humanresource\SalaryScale;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class SalaryScaleController extends AppBaseController
{
    /**
     * Display a listing of the SalaryScale.
     *
     * @param SalaryScaleDataTable $salaryScaleDataTable
     * @return Response
     */
    public function index(SalaryScaleDataTable $salaryScaleDataTable)
    {
        return $salaryScaleDataTable->render('humanresource.salary_scales.index');
    }

    /**
     * Show the form for creating a new SalaryScale.
     *
     * @return Response
     */
    public function create()
    {
        return view('humanresource.salary_scales.create');
    }

    /**
     * Store a newly created SalaryScale in storage.
     *
     * @param CreateSalaryScaleRequest $request
     *
     * @return Response
     */
    public function store(CreateSalaryScaleRequest $request)
    {
        $input = $request->all();

        /** @var SalaryScale $salaryScale */
        $salaryScale = SalaryScale::create($input);

        Flash::success('Salary Scale saved successfully.');

        return redirect(route('humanresource.salaryScales.index'));
    }

    /**
     * Display the specified SalaryScale.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var SalaryScale $salaryScale */
        $salaryScale = SalaryScale::find($id);

        if (empty($salaryScale)) {
            Flash::error('Salary Scale not found');

            return redirect(route('humanresource.salaryScales.index'));
        }

        return view('humanresource.salary_scales.show')->with('salaryScale', $salaryScale);
    }

    /**
     * Show the form for editing the specified SalaryScale.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var SalaryScale $salaryScale */
        $salaryScale = SalaryScale::find($id);

        if (empty($salaryScale)) {
            Flash::error('Salary Scale not found');

            return redirect(route('humanresource.salaryScales.index'));
        }

        return view('humanresource.salary_scales.edit')->with('salaryScale', $salaryScale);
    }

    /**
     * Update the specified SalaryScale in storage.
     *
     * @param  int              $id
     * @param UpdateSalaryScaleRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSalaryScaleRequest $request)
    {
        /** @var SalaryScale $salaryScale */
        $salaryScale = SalaryScale::find($id);

        if (empty($salaryScale)) {
            Flash::error('Salary Scale not found');

            return redirect(route('humanresource.salaryScales.index'));
        }

        $salaryScale->fill($request->all());
        $salaryScale->save();

        Flash::success('Salary Scale updated successfully.');

        return redirect(route('humanresource.salaryScales.index'));
    }

    /**
     * Remove the specified SalaryScale from storage.
     *
     * @param  int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var SalaryScale $salaryScale */
        $salaryScale = SalaryScale::find($id);

        if (empty($salaryScale)) {
            Flash::error('Salary Scale not found');

            return redirect(route('humanresource.salaryScales.index'));
        }

        $salaryScale->delete();

        Flash::success('Salary Scale deleted successfully.');

        return redirect(route('humanresource.salaryScales.index'));
    }
}
