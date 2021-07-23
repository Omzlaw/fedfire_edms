<?php

namespace App\Http\Controllers\Shared;

use Flash;
use Response;
use App\Models\Shared\State;
use App\Http\Requests\Shared;
use App\Models\Shared\Country;
use App\DataTables\Shared\StateDataTable;
use App\Http\Controllers\AppBaseController;
use App\Http\Requests\Shared\CreateStateRequest;
use App\Http\Requests\Shared\UpdateStateRequest;

class StateController extends AppBaseController
{
    /**
     * Display a listing of the State.
     *
     * @param StateDataTable $stateDataTable
     * @return Response
     */
    public function index(StateDataTable $stateDataTable)
    {
        return $stateDataTable->render('shared.states.index');
    }

    /**
     * Show the form for creating a new State.
     *
     * @return Response
     */
    public function create()
    {
        $countries = new Country;
        return view('shared.states.create', compact('countries'));
    }

    /**
     * Store a newly created State in storage.
     *
     * @param CreateStateRequest $request
     *
     * @return Response
     */
    public function store(CreateStateRequest $request)
    {
        $input = $request->all();

        /** @var State $state */
        $state = State::create($input);

        Flash::success('State saved successfully.');

        return redirect(route('shared.states.index'));
    }

    /**
     * Display the specified State.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var State $state */
        $state = State::find($id);

        if (empty($state)) {
            Flash::error('State not found');

            return redirect(route('shared.states.index'));
        }

        return view('shared.states.show')->with('state', $state);
    }

    /**
     * Show the form for editing the specified State.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var State $state */
        $state = State::find($id);

        if (empty($state)) {
            Flash::error('State not found');

            return redirect(route('shared.states.index'));
        }
        $countries = new Country;

        return view('shared.states.edit', compact('countries'))->with('state', $state);
    }

    /**
     * Update the specified State in storage.
     *
     * @param  int              $id
     * @param UpdateStateRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateStateRequest $request)
    {
        /** @var State $state */
        $state = State::find($id);

        if (empty($state)) {
            Flash::error('State not found');

            return redirect(route('shared.states.index'));
        }

        $state->fill($request->all());
        $state->save();

        Flash::success('State updated successfully.');

        return redirect(route('shared.states.index'));
    }

    /**
     * Remove the specified State from storage.
     *
     * @param  int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var State $state */
        $state = State::find($id);

        if (empty($state)) {
            Flash::error('State not found');

            return redirect(route('shared.states.index'));
        }

        $state->delete();

        Flash::success('State deleted successfully.');

        return redirect(route('shared.states.index'));
    }
}
