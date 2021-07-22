<?php

namespace App\Http\Controllers\Shared;

use App\DataTables\Shared\ServiceExitTypeDataTable;
use App\Http\Requests\Shared;
use App\Http\Requests\Shared\CreateServiceExitTypeRequest;
use App\Http\Requests\Shared\UpdateServiceExitTypeRequest;
use App\Models\Shared\ServiceExitType;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class ServiceExitTypeController extends AppBaseController
{
    /**
     * Display a listing of the ServiceExitType.
     *
     * @param ServiceExitTypeDataTable $serviceExitTypeDataTable
     * @return Response
     */
    public function index(ServiceExitTypeDataTable $serviceExitTypeDataTable)
    {
        return $serviceExitTypeDataTable->render('shared.service_exit_types.index');
    }

    /**
     * Show the form for creating a new ServiceExitType.
     *
     * @return Response
     */
    public function create()
    {
        return view('shared.service_exit_types.create');
    }

    /**
     * Store a newly created ServiceExitType in storage.
     *
     * @param CreateServiceExitTypeRequest $request
     *
     * @return Response
     */
    public function store(CreateServiceExitTypeRequest $request)
    {
        $input = $request->all();

        /** @var ServiceExitType $serviceExitType */
        $serviceExitType = ServiceExitType::create($input);

        Flash::success('Service Exit Type saved successfully.');

        return redirect(route('shared.serviceExitTypes.index'));
    }

    /**
     * Display the specified ServiceExitType.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var ServiceExitType $serviceExitType */
        $serviceExitType = ServiceExitType::find($id);

        if (empty($serviceExitType)) {
            Flash::error('Service Exit Type not found');

            return redirect(route('shared.serviceExitTypes.index'));
        }

        return view('shared.service_exit_types.show')->with('serviceExitType', $serviceExitType);
    }

    /**
     * Show the form for editing the specified ServiceExitType.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var ServiceExitType $serviceExitType */
        $serviceExitType = ServiceExitType::find($id);

        if (empty($serviceExitType)) {
            Flash::error('Service Exit Type not found');

            return redirect(route('shared.serviceExitTypes.index'));
        }

        return view('shared.service_exit_types.edit')->with('serviceExitType', $serviceExitType);
    }

    /**
     * Update the specified ServiceExitType in storage.
     *
     * @param  int              $id
     * @param UpdateServiceExitTypeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateServiceExitTypeRequest $request)
    {
        /** @var ServiceExitType $serviceExitType */
        $serviceExitType = ServiceExitType::find($id);

        if (empty($serviceExitType)) {
            Flash::error('Service Exit Type not found');

            return redirect(route('shared.serviceExitTypes.index'));
        }

        $serviceExitType->fill($request->all());
        $serviceExitType->save();

        Flash::success('Service Exit Type updated successfully.');

        return redirect(route('shared.serviceExitTypes.index'));
    }

    /**
     * Remove the specified ServiceExitType from storage.
     *
     * @param  int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var ServiceExitType $serviceExitType */
        $serviceExitType = ServiceExitType::find($id);

        if (empty($serviceExitType)) {
            Flash::error('Service Exit Type not found');

            return redirect(route('shared.serviceExitTypes.index'));
        }

        $serviceExitType->delete();

        Flash::success('Service Exit Type deleted successfully.');

        return redirect(route('shared.serviceExitTypes.index'));
    }
}
