<?php

namespace App\Http\Controllers\Shared;

use App\DataTables\Shared\RankTypeDataTable;
use App\Http\Requests\Shared;
use App\Http\Requests\Shared\CreateRankTypeRequest;
use App\Http\Requests\Shared\UpdateRankTypeRequest;
use App\Models\Shared\RankType;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class RankTypeController extends AppBaseController
{
    /**
     * Display a listing of the RankType.
     *
     * @param RankTypeDataTable $rankTypeDataTable
     * @return Response
     */
    public function index(RankTypeDataTable $rankTypeDataTable)
    {
        return $rankTypeDataTable->render('shared.rank_types.index');
    }

    /**
     * Show the form for creating a new RankType.
     *
     * @return Response
     */
    public function create()
    {
        return view('shared.rank_types.create');
    }

    /**
     * Store a newly created RankType in storage.
     *
     * @param CreateRankTypeRequest $request
     *
     * @return Response
     */
    public function store(CreateRankTypeRequest $request)
    {
        $input = $request->all();

        /** @var RankType $rankType */
        $rankType = RankType::create($input);

        Flash::success('Rank Type saved successfully.');

        return redirect(route('shared.rankTypes.index'));
    }

    /**
     * Display the specified RankType.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var RankType $rankType */
        $rankType = RankType::find($id);

        if (empty($rankType)) {
            Flash::error('Rank Type not found');

            return redirect(route('shared.rankTypes.index'));
        }

        return view('shared.rank_types.show')->with('rankType', $rankType);
    }

    /**
     * Show the form for editing the specified RankType.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var RankType $rankType */
        $rankType = RankType::find($id);

        if (empty($rankType)) {
            Flash::error('Rank Type not found');

            return redirect(route('shared.rankTypes.index'));
        }

        return view('shared.rank_types.edit')->with('rankType', $rankType);
    }

    /**
     * Update the specified RankType in storage.
     *
     * @param  int              $id
     * @param UpdateRankTypeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRankTypeRequest $request)
    {
        /** @var RankType $rankType */
        $rankType = RankType::find($id);

        if (empty($rankType)) {
            Flash::error('Rank Type not found');

            return redirect(route('shared.rankTypes.index'));
        }

        $rankType->fill($request->all());
        $rankType->save();

        Flash::success('Rank Type updated successfully.');

        return redirect(route('shared.rankTypes.index'));
    }

    /**
     * Remove the specified RankType from storage.
     *
     * @param  int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var RankType $rankType */
        $rankType = RankType::find($id);

        if (empty($rankType)) {
            Flash::error('Rank Type not found');

            return redirect(route('shared.rankTypes.index'));
        }

        $rankType->delete();

        Flash::success('Rank Type deleted successfully.');

        return redirect(route('shared.rankTypes.index'));
    }
}
