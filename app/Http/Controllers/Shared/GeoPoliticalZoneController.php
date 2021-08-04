<?php

namespace App\Http\Controllers\Shared;

use Flash;
use Response;
use App\Http\Requests\Shared;
use App\Models\Shared\Country;
use App\Models\Shared\GeoPoliticalZone;
use App\Http\Controllers\AppBaseController;
use App\DataTables\Shared\GeoPoliticalZoneDataTable;
use App\Http\Requests\Shared\CreateGeoPoliticalZoneRequest;
use App\Http\Requests\Shared\UpdateGeoPoliticalZoneRequest;

class GeoPoliticalZoneController extends AppBaseController
{
    /**
     * Display a listing of the GeoPoliticalZone.
     *
     * @param GeoPoliticalZoneDataTable $geoPoliticalZoneDataTable
     * @return Response
     */
    public function index(GeoPoliticalZoneDataTable $geoPoliticalZoneDataTable)
    {
        return $geoPoliticalZoneDataTable->render('shared.geo_political_zones.index');
    }

    /**
     * Show the form for creating a new GeoPoliticalZone.
     *
     * @return Response
     */
    public function create()
    {
        $countries = new Country;
        return view('shared.geo_political_zones.create', compact('countries'));
    }

    /**
     * Store a newly created GeoPoliticalZone in storage.
     *
     * @param CreateGeoPoliticalZoneRequest $request
     *
     * @return Response
     */
    public function store(CreateGeoPoliticalZoneRequest $request)
    {
        $input = $request->all();

        /** @var GeoPoliticalZone $geoPoliticalZone */
        $geoPoliticalZone = GeoPoliticalZone::create($input);

        Flash::success('Geo Political Zone saved successfully.');

        return redirect(route('shared.geoPoliticalZones.index'));
    }

    /**
     * Display the specified GeoPoliticalZone.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var GeoPoliticalZone $geoPoliticalZone */
        $geoPoliticalZone = GeoPoliticalZone::find($id);

        if (empty($geoPoliticalZone)) {
            Flash::error('Geo Political Zone not found');

            return redirect(route('shared.geoPoliticalZones.index'));
        }

        return view('shared.geo_political_zones.show')->with('geoPoliticalZone', $geoPoliticalZone);
    }

    /**
     * Show the form for editing the specified GeoPoliticalZone.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var GeoPoliticalZone $geoPoliticalZone */
        $geoPoliticalZone = GeoPoliticalZone::find($id);

        if (empty($geoPoliticalZone)) {
            Flash::error('Geo Political Zone not found');

            return redirect(route('shared.geoPoliticalZones.index'));
        }
        $countries = new Country;

        return view('shared.geo_political_zones.edit', compact('countries'))->with('geoPoliticalZone', $geoPoliticalZone);
    }

    /**
     * Update the specified GeoPoliticalZone in storage.
     *
     * @param  int              $id
     * @param UpdateGeoPoliticalZoneRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateGeoPoliticalZoneRequest $request)
    {
        /** @var GeoPoliticalZone $geoPoliticalZone */
        $geoPoliticalZone = GeoPoliticalZone::find($id);

        if (empty($geoPoliticalZone)) {
            Flash::error('Geo Political Zone not found');

            return redirect(route('shared.geoPoliticalZones.index'));
        }

        $geoPoliticalZone->fill($request->all());
        $geoPoliticalZone->save();

        Flash::success('Geo Political Zone updated successfully.');

        return redirect(route('shared.geoPoliticalZones.index'));
    }

    /**
     * Remove the specified GeoPoliticalZone from storage.
     *
     * @param  int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var GeoPoliticalZone $geoPoliticalZone */
        $geoPoliticalZone = GeoPoliticalZone::find($id);

        if (empty($geoPoliticalZone)) {
            Flash::error('Geo Political Zone not found');

            return redirect(route('shared.geoPoliticalZones.index'));
        }

        $geoPoliticalZone->delete();

        Flash::success('Geo Political Zone deleted successfully.');

        return redirect(route('shared.geoPoliticalZones.index'));
    }
}
