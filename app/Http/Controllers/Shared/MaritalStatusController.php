<?php

namespace App\Http\Controllers\Shared;

use App\DataTables\Shared\MaritalStatusDataTable;
use App\Http\Requests\Shared;
use App\Http\Requests\Shared\CreateMaritalStatusRequest;
use App\Http\Requests\Shared\UpdateMaritalStatusRequest;
use App\Models\Shared\MaritalStatus;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class MaritalStatusController extends AppBaseController
{
    /**
     * Display a listing of the MaritalStatus.
     *
     * @param MaritalStatusDataTable $maritalStatusDataTable
     * @return Response
     */
    public function index(MaritalStatusDataTable $maritalStatusDataTable)
    {
        return $maritalStatusDataTable->render('shared.marital_statuses.index');
    }

    /**
     * Show the form for creating a new MaritalStatus.
     *
     * @return Response
     */
    public function create()
    {
        return view('shared.marital_statuses.create');
    }

    /**
     * Store a newly created MaritalStatus in storage.
     *
     * @param CreateMaritalStatusRequest $request
     *
     * @return Response
     */
    public function store(CreateMaritalStatusRequest $request)
    {
        $input = $request->all();

        /** @var MaritalStatus $maritalStatus */
        $maritalStatus = MaritalStatus::create($input);

        Flash::success('Marital Status saved successfully.');

        return redirect(route('shared.maritalStatuses.index'));
    }

    /**
     * Display the specified MaritalStatus.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var MaritalStatus $maritalStatus */
        $maritalStatus = MaritalStatus::find($id);

        if (empty($maritalStatus)) {
            Flash::error('Marital Status not found');

            return redirect(route('shared.maritalStatuses.index'));
        }

        return view('shared.marital_statuses.show')->with('maritalStatus', $maritalStatus);
    }

    /**
     * Show the form for editing the specified MaritalStatus.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var MaritalStatus $maritalStatus */
        $maritalStatus = MaritalStatus::find($id);

        if (empty($maritalStatus)) {
            Flash::error('Marital Status not found');

            return redirect(route('shared.maritalStatuses.index'));
        }

        return view('shared.marital_statuses.edit')->with('maritalStatus', $maritalStatus);
    }

    /**
     * Update the specified MaritalStatus in storage.
     *
     * @param  int              $id
     * @param UpdateMaritalStatusRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMaritalStatusRequest $request)
    {
        /** @var MaritalStatus $maritalStatus */
        $maritalStatus = MaritalStatus::find($id);

        if (empty($maritalStatus)) {
            Flash::error('Marital Status not found');

            return redirect(route('shared.maritalStatuses.index'));
        }

        $maritalStatus->fill($request->all());
        $maritalStatus->save();

        Flash::success('Marital Status updated successfully.');

        return redirect(route('shared.maritalStatuses.index'));
    }

    /**
     * Remove the specified MaritalStatus from storage.
     *
     * @param  int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var MaritalStatus $maritalStatus */
        $maritalStatus = MaritalStatus::find($id);

        if (empty($maritalStatus)) {
            Flash::error('Marital Status not found');

            return redirect(route('shared.maritalStatuses.index'));
        }

        $maritalStatus->delete();

        Flash::success('Marital Status deleted successfully.');

        return redirect(route('shared.maritalStatuses.index'));
    }
}
