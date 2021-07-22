<?php

namespace App\Http\Controllers\Shared;

use App\DataTables\Shared\CertificateTypeDataTable;
use App\Http\Requests\Shared;
use App\Http\Requests\Shared\CreateCertificateTypeRequest;
use App\Http\Requests\Shared\UpdateCertificateTypeRequest;
use App\Models\Shared\CertificateType;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class CertificateTypeController extends AppBaseController
{
    /**
     * Display a listing of the CertificateType.
     *
     * @param CertificateTypeDataTable $certificateTypeDataTable
     * @return Response
     */
    public function index(CertificateTypeDataTable $certificateTypeDataTable)
    {
        return $certificateTypeDataTable->render('shared.certificate_types.index');
    }

    /**
     * Show the form for creating a new CertificateType.
     *
     * @return Response
     */
    public function create()
    {
        return view('shared.certificate_types.create');
    }

    /**
     * Store a newly created CertificateType in storage.
     *
     * @param CreateCertificateTypeRequest $request
     *
     * @return Response
     */
    public function store(CreateCertificateTypeRequest $request)
    {
        $input = $request->all();

        /** @var CertificateType $certificateType */
        $certificateType = CertificateType::create($input);

        Flash::success('Certificate Type saved successfully.');

        return redirect(route('shared.certificateTypes.index'));
    }

    /**
     * Display the specified CertificateType.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var CertificateType $certificateType */
        $certificateType = CertificateType::find($id);

        if (empty($certificateType)) {
            Flash::error('Certificate Type not found');

            return redirect(route('shared.certificateTypes.index'));
        }

        return view('shared.certificate_types.show')->with('certificateType', $certificateType);
    }

    /**
     * Show the form for editing the specified CertificateType.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var CertificateType $certificateType */
        $certificateType = CertificateType::find($id);

        if (empty($certificateType)) {
            Flash::error('Certificate Type not found');

            return redirect(route('shared.certificateTypes.index'));
        }

        return view('shared.certificate_types.edit')->with('certificateType', $certificateType);
    }

    /**
     * Update the specified CertificateType in storage.
     *
     * @param  int              $id
     * @param UpdateCertificateTypeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCertificateTypeRequest $request)
    {
        /** @var CertificateType $certificateType */
        $certificateType = CertificateType::find($id);

        if (empty($certificateType)) {
            Flash::error('Certificate Type not found');

            return redirect(route('shared.certificateTypes.index'));
        }

        $certificateType->fill($request->all());
        $certificateType->save();

        Flash::success('Certificate Type updated successfully.');

        return redirect(route('shared.certificateTypes.index'));
    }

    /**
     * Remove the specified CertificateType from storage.
     *
     * @param  int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var CertificateType $certificateType */
        $certificateType = CertificateType::find($id);

        if (empty($certificateType)) {
            Flash::error('Certificate Type not found');

            return redirect(route('shared.certificateTypes.index'));
        }

        $certificateType->delete();

        Flash::success('Certificate Type deleted successfully.');

        return redirect(route('shared.certificateTypes.index'));
    }
}
