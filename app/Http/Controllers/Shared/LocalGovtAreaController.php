<?php

namespace App\Http\Controllers\Shared;

use App\DataTables\Shared\LocalGovtAreaDataTable;
use App\Http\Requests\Shared;
use App\Http\Requests\Shared\CreateLocalGovtAreaRequest;
use App\Http\Requests\Shared\UpdateLocalGovtAreaRequest;
use App\Models\Shared\LocalGovtArea;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class LocalGovtAreaController extends AppBaseController
{
    /**
     * Display a listing of the LocalGovtArea.
     *
     * @param LocalGovtAreaDataTable $localGovtAreaDataTable
     * @return Response
     */
    public function index(LocalGovtAreaDataTable $localGovtAreaDataTable)
    {
        return $localGovtAreaDataTable->render('shared.local_govt_areas.index');
    }

    /**
     * Show the form for creating a new LocalGovtArea.
     *
     * @return Response
     */
    public function create()
    {
        return view('shared.local_govt_areas.create');
    }

    /**
     * Store a newly created LocalGovtArea in storage.
     *
     * @param CreateLocalGovtAreaRequest $request
     *
     * @return Response
     */
    public function store(CreateLocalGovtAreaRequest $request)
    {
        $input = $request->all();

        /** @var LocalGovtArea $localGovtArea */
        $localGovtArea = LocalGovtArea::create($input);

        Flash::success('Local Govt Area saved successfully.');

        return redirect(route('shared.localGovtAreas.index'));
    }

    /**
     * Display the specified LocalGovtArea.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var LocalGovtArea $localGovtArea */
        $localGovtArea = LocalGovtArea::find($id);

        if (empty($localGovtArea)) {
            Flash::error('Local Govt Area not found');

            return redirect(route('shared.localGovtAreas.index'));
        }

        return view('shared.local_govt_areas.show')->with('localGovtArea', $localGovtArea);
    }

    /**
     * Show the form for editing the specified LocalGovtArea.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var LocalGovtArea $localGovtArea */
        $localGovtArea = LocalGovtArea::find($id);

        if (empty($localGovtArea)) {
            Flash::error('Local Govt Area not found');

            return redirect(route('shared.localGovtAreas.index'));
        }

        return view('shared.local_govt_areas.edit')->with('localGovtArea', $localGovtArea);
    }

    /**
     * Update the specified LocalGovtArea in storage.
     *
     * @param  int              $id
     * @param UpdateLocalGovtAreaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateLocalGovtAreaRequest $request)
    {
        /** @var LocalGovtArea $localGovtArea */
        $localGovtArea = LocalGovtArea::find($id);

        if (empty($localGovtArea)) {
            Flash::error('Local Govt Area not found');

            return redirect(route('shared.localGovtAreas.index'));
        }

        $localGovtArea->fill($request->all());
        $localGovtArea->save();

        Flash::success('Local Govt Area updated successfully.');

        return redirect(route('shared.localGovtAreas.index'));
    }

    /**
     * Remove the specified LocalGovtArea from storage.
     *
     * @param  int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var LocalGovtArea $localGovtArea */
        $localGovtArea = LocalGovtArea::find($id);

        if (empty($localGovtArea)) {
            Flash::error('Local Govt Area not found');

            return redirect(route('shared.localGovtAreas.index'));
        }

        $localGovtArea->delete();

        Flash::success('Local Govt Area deleted successfully.');

        return redirect(route('shared.localGovtAreas.index'));
    }
}
