<?php

namespace App\Http\Controllers\Humanresource;

use App\DataTables\Humanresource\TerminationTypeDataTable;
use App\Http\Requests\Humanresource;
use App\Http\Requests\Humanresource\CreateTerminationTypeRequest;
use App\Http\Requests\Humanresource\UpdateTerminationTypeRequest;
use App\Models\Humanresource\TerminationType;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class TerminationTypeController extends AppBaseController
{
    /**
     * Display a listing of the TerminationType.
     *
     * @param TerminationTypeDataTable $terminationTypeDataTable
     * @return Response
     */
    public function index(TerminationTypeDataTable $terminationTypeDataTable)
    {
        return $terminationTypeDataTable->render('humanresource.termination_types.index');
    }

    /**
     * Show the form for creating a new TerminationType.
     *
     * @return Response
     */
    public function create()
    {
        return view('humanresource.termination_types.create');
    }

    /**
     * Store a newly created TerminationType in storage.
     *
     * @param CreateTerminationTypeRequest $request
     *
     * @return Response
     */
    public function store(CreateTerminationTypeRequest $request)
    {
        $input = $request->all();

        /** @var TerminationType $terminationType */
        $terminationType = TerminationType::create($input);

        Flash::success('Termination Type saved successfully.');

        return redirect(route('humanresource.terminationTypes.index'));
    }

    /**
     * Display the specified TerminationType.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var TerminationType $terminationType */
        $terminationType = TerminationType::find($id);

        if (empty($terminationType)) {
            Flash::error('Termination Type not found');

            return redirect(route('humanresource.terminationTypes.index'));
        }

        return view('humanresource.termination_types.show')->with('terminationType', $terminationType);
    }

    /**
     * Show the form for editing the specified TerminationType.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var TerminationType $terminationType */
        $terminationType = TerminationType::find($id);

        if (empty($terminationType)) {
            Flash::error('Termination Type not found');

            return redirect(route('humanresource.terminationTypes.index'));
        }

        return view('humanresource.termination_types.edit')->with('terminationType', $terminationType);
    }

    /**
     * Update the specified TerminationType in storage.
     *
     * @param  int              $id
     * @param UpdateTerminationTypeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTerminationTypeRequest $request)
    {
        /** @var TerminationType $terminationType */
        $terminationType = TerminationType::find($id);

        if (empty($terminationType)) {
            Flash::error('Termination Type not found');

            return redirect(route('humanresource.terminationTypes.index'));
        }

        $terminationType->fill($request->all());
        $terminationType->save();

        Flash::success('Termination Type updated successfully.');

        return redirect(route('humanresource.terminationTypes.index'));
    }

    /**
     * Remove the specified TerminationType from storage.
     *
     * @param  int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var TerminationType $terminationType */
        $terminationType = TerminationType::find($id);

        if (empty($terminationType)) {
            Flash::error('Termination Type not found');

            return redirect(route('humanresource.terminationTypes.index'));
        }

        $terminationType->delete();

        Flash::success('Termination Type deleted successfully.');

        return redirect(route('humanresource.terminationTypes.index'));
    }
}
