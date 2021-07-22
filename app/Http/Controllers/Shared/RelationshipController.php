<?php

namespace App\Http\Controllers\Shared;

use App\DataTables\Shared\RelationshipDataTable;
use App\Http\Requests\Shared;
use App\Http\Requests\Shared\CreateRelationshipRequest;
use App\Http\Requests\Shared\UpdateRelationshipRequest;
use App\Models\Shared\Relationship;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class RelationshipController extends AppBaseController
{
    /**
     * Display a listing of the Relationship.
     *
     * @param RelationshipDataTable $relationshipDataTable
     * @return Response
     */
    public function index(RelationshipDataTable $relationshipDataTable)
    {
        return $relationshipDataTable->render('shared.relationships.index');
    }

    /**
     * Show the form for creating a new Relationship.
     *
     * @return Response
     */
    public function create()
    {
        return view('shared.relationships.create');
    }

    /**
     * Store a newly created Relationship in storage.
     *
     * @param CreateRelationshipRequest $request
     *
     * @return Response
     */
    public function store(CreateRelationshipRequest $request)
    {
        $input = $request->all();

        /** @var Relationship $relationship */
        $relationship = Relationship::create($input);

        Flash::success('Relationship saved successfully.');

        return redirect(route('shared.relationships.index'));
    }

    /**
     * Display the specified Relationship.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Relationship $relationship */
        $relationship = Relationship::find($id);

        if (empty($relationship)) {
            Flash::error('Relationship not found');

            return redirect(route('shared.relationships.index'));
        }

        return view('shared.relationships.show')->with('relationship', $relationship);
    }

    /**
     * Show the form for editing the specified Relationship.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var Relationship $relationship */
        $relationship = Relationship::find($id);

        if (empty($relationship)) {
            Flash::error('Relationship not found');

            return redirect(route('shared.relationships.index'));
        }

        return view('shared.relationships.edit')->with('relationship', $relationship);
    }

    /**
     * Update the specified Relationship in storage.
     *
     * @param  int              $id
     * @param UpdateRelationshipRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRelationshipRequest $request)
    {
        /** @var Relationship $relationship */
        $relationship = Relationship::find($id);

        if (empty($relationship)) {
            Flash::error('Relationship not found');

            return redirect(route('shared.relationships.index'));
        }

        $relationship->fill($request->all());
        $relationship->save();

        Flash::success('Relationship updated successfully.');

        return redirect(route('shared.relationships.index'));
    }

    /**
     * Remove the specified Relationship from storage.
     *
     * @param  int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Relationship $relationship */
        $relationship = Relationship::find($id);

        if (empty($relationship)) {
            Flash::error('Relationship not found');

            return redirect(route('shared.relationships.index'));
        }

        $relationship->delete();

        Flash::success('Relationship deleted successfully.');

        return redirect(route('shared.relationships.index'));
    }
}
