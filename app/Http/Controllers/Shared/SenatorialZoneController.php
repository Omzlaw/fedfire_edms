<?php

namespace App\Http\Controllers\Shared;

use Flash;
use Response;
use App\Models\Shared\State;
use App\Http\Requests\Shared;
use App\Models\Shared\SenatorialZone;
use App\Http\Controllers\AppBaseController;
use App\DataTables\Shared\SenatorialZoneDataTable;
use App\Http\Requests\Shared\CreateSenatorialZoneRequest;
use App\Http\Requests\Shared\UpdateSenatorialZoneRequest;

class SenatorialZoneController extends AppBaseController
{
    /**
     * Display a listing of the SenatorialZone.
     *
     * @param SenatorialZoneDataTable $senatorialZoneDataTable
     * @return Response
     */
    public function index(SenatorialZoneDataTable $senatorialZoneDataTable)
    {
        return $senatorialZoneDataTable->render('shared.senatorial_zones.index');
    }

    /**
     * Show the form for creating a new SenatorialZone.
     *
     * @return Response
     */
    public function create()
    {
        $states = new State;
        return view('shared.senatorial_zones.create', compact('states'));
    }

    /**
     * Store a newly created SenatorialZone in storage.
     *
     * @param CreateSenatorialZoneRequest $request
     *
     * @return Response
     */
    public function store(CreateSenatorialZoneRequest $request)
    {
        $input = $request->all();

        /** @var SenatorialZone $senatorialZone */
        $senatorialZone = SenatorialZone::create($input);

        Flash::success('Senatorial Zone saved successfully.');

        return redirect(route('shared.senatorialZones.index'));
    }

    /**
     * Display the specified SenatorialZone.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var SenatorialZone $senatorialZone */
        $senatorialZone = SenatorialZone::find($id);

        if (empty($senatorialZone)) {
            Flash::error('Senatorial Zone not found');

            return redirect(route('shared.senatorialZones.index'));
        }

        return view('shared.senatorial_zones.show')->with('senatorialZone', $senatorialZone);
    }

    /**
     * Show the form for editing the specified SenatorialZone.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var SenatorialZone $senatorialZone */
        $senatorialZone = SenatorialZone::find($id);

        if (empty($senatorialZone)) {
            Flash::error('Senatorial Zone not found');

            return redirect(route('shared.senatorialZones.index'));
        }
        $states = new State;

        return view('shared.senatorial_zones.edit', compact('states'))->with('senatorialZone', $senatorialZone);
    }

    /**
     * Update the specified SenatorialZone in storage.
     *
     * @param  int              $id
     * @param UpdateSenatorialZoneRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSenatorialZoneRequest $request)
    {
        /** @var SenatorialZone $senatorialZone */
        $senatorialZone = SenatorialZone::find($id);

        if (empty($senatorialZone)) {
            Flash::error('Senatorial Zone not found');

            return redirect(route('shared.senatorialZones.index'));
        }

        $senatorialZone->fill($request->all());
        $senatorialZone->save();

        Flash::success('Senatorial Zone updated successfully.');

        return redirect(route('shared.senatorialZones.index'));
    }

    /**
     * Remove the specified SenatorialZone from storage.
     *
     * @param  int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var SenatorialZone $senatorialZone */
        $senatorialZone = SenatorialZone::find($id);

        if (empty($senatorialZone)) {
            Flash::error('Senatorial Zone not found');

            return redirect(route('shared.senatorialZones.index'));
        }

        $senatorialZone->delete();

        Flash::success('Senatorial Zone deleted successfully.');

        return redirect(route('shared.senatorialZones.index'));
    }
}
