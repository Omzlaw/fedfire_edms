<?php

namespace App\Http\Controllers\Shared;

use App\DataTables\Shared\AuditTrailDataTable;
use App\Http\Requests\Shared;
use App\Http\Requests\Shared\CreateAuditTrailRequest;
use App\Http\Requests\Shared\UpdateAuditTrailRequest;
use App\Models\Shared\AuditTrail;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class AuditTrailController extends AppBaseController
{
    /**
     * Display a listing of the AuditTrail.
     *
     * @param AuditTrailDataTable $auditTrailDataTable
     * @return Response
     */
    public function index(AuditTrailDataTable $auditTrailDataTable)
    {
        return $auditTrailDataTable->render('shared.audit_trails.index');
    }

    /**
     * Show the form for creating a new AuditTrail.
     *
     * @return Response
     */
    // public function create()
    // {
    //     return view('shared.audit_trails.create');
    // }

    /**
     * Store a newly created AuditTrail in storage.
     *
     * @param CreateAuditTrailRequest $request
     *
     * @return Response
     */
    public function store(CreateAuditTrailRequest $request)
    {
        $input = $request->all();

        /** @var AuditTrail $auditTrail */
        $auditTrail = AuditTrail::create($input);

        Flash::success('Audit Trail saved successfully.');

        return redirect(route('shared.auditTrails.index'));
    }

    /**
     * Display the specified AuditTrail.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var AuditTrail $auditTrail */
        $auditTrail = AuditTrail::find($id);

        if (empty($auditTrail)) {
            Flash::error('Audit Trail not found');

            return redirect(route('shared.auditTrails.index'));
        }

        return view('shared.audit_trails.show')->with('auditTrail', $auditTrail);
    }

    /**
     * Show the form for editing the specified AuditTrail.
     *
     * @param  int $id
     *
     * @return Response
     */
    // public function edit($id)
    // {
    //     /** @var AuditTrail $auditTrail */
    //     $auditTrail = AuditTrail::find($id);

    //     if (empty($auditTrail)) {
    //         Flash::error('Audit Trail not found');

    //         return redirect(route('shared.auditTrails.index'));
    //     }

    //     return view('shared.audit_trails.edit')->with('auditTrail', $auditTrail);
    // }

    /**
     * Update the specified AuditTrail in storage.
     *
     * @param  int              $id
     * @param UpdateAuditTrailRequest $request
     *
     * @return Response
     */
    // public function update($id, UpdateAuditTrailRequest $request)
    // {
    //     /** @var AuditTrail $auditTrail */
    //     $auditTrail = AuditTrail::find($id);

    //     if (empty($auditTrail)) {
    //         Flash::error('Audit Trail not found');

    //         return redirect(route('shared.auditTrails.index'));
    //     }

    //     $auditTrail->fill($request->all());
    //     $auditTrail->save();

    //     Flash::success('Audit Trail updated successfully.');

    //     return redirect(route('shared.auditTrails.index'));
    // }

    /**
     * Remove the specified AuditTrail from storage.
     *
     * @param  int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    // public function destroy($id)
    // {
    //     /** @var AuditTrail $auditTrail */
    //     $auditTrail = AuditTrail::find($id);

    //     if (empty($auditTrail)) {
    //         Flash::error('Audit Trail not found');

    //         return redirect(route('shared.auditTrails.index'));
    //     }

    //     $auditTrail->delete();

    //     Flash::success('Audit Trail deleted successfully.');

    //     return redirect(route('shared.auditTrails.index'));
    // }
}
