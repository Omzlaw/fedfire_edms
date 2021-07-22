<?php

namespace App\Http\Controllers\Shared;

use App\DataTables\Shared\QualificationTypeDataTable;
use App\Http\Requests\Shared;
use App\Http\Requests\Shared\CreateQualificationTypeRequest;
use App\Http\Requests\Shared\UpdateQualificationTypeRequest;
use App\Models\Shared\QualificationType;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class QualificationTypeController extends AppBaseController
{
    /**
     * Display a listing of the QualificationType.
     *
     * @param QualificationTypeDataTable $qualificationTypeDataTable
     * @return Response
     */
    public function index(QualificationTypeDataTable $qualificationTypeDataTable)
    {
        return $qualificationTypeDataTable->render('shared.qualification_types.index');
    }

    /**
     * Show the form for creating a new QualificationType.
     *
     * @return Response
     */
    public function create()
    {
        return view('shared.qualification_types.create');
    }

    /**
     * Store a newly created QualificationType in storage.
     *
     * @param CreateQualificationTypeRequest $request
     *
     * @return Response
     */
    public function store(CreateQualificationTypeRequest $request)
    {
        $input = $request->all();

        /** @var QualificationType $qualificationType */
        $qualificationType = QualificationType::create($input);

        Flash::success('Qualification Type saved successfully.');

        return redirect(route('shared.qualificationTypes.index'));
    }

    /**
     * Display the specified QualificationType.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var QualificationType $qualificationType */
        $qualificationType = QualificationType::find($id);

        if (empty($qualificationType)) {
            Flash::error('Qualification Type not found');

            return redirect(route('shared.qualificationTypes.index'));
        }

        return view('shared.qualification_types.show')->with('qualificationType', $qualificationType);
    }

    /**
     * Show the form for editing the specified QualificationType.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var QualificationType $qualificationType */
        $qualificationType = QualificationType::find($id);

        if (empty($qualificationType)) {
            Flash::error('Qualification Type not found');

            return redirect(route('shared.qualificationTypes.index'));
        }

        return view('shared.qualification_types.edit')->with('qualificationType', $qualificationType);
    }

    /**
     * Update the specified QualificationType in storage.
     *
     * @param  int              $id
     * @param UpdateQualificationTypeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateQualificationTypeRequest $request)
    {
        /** @var QualificationType $qualificationType */
        $qualificationType = QualificationType::find($id);

        if (empty($qualificationType)) {
            Flash::error('Qualification Type not found');

            return redirect(route('shared.qualificationTypes.index'));
        }

        $qualificationType->fill($request->all());
        $qualificationType->save();

        Flash::success('Qualification Type updated successfully.');

        return redirect(route('shared.qualificationTypes.index'));
    }

    /**
     * Remove the specified QualificationType from storage.
     *
     * @param  int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var QualificationType $qualificationType */
        $qualificationType = QualificationType::find($id);

        if (empty($qualificationType)) {
            Flash::error('Qualification Type not found');

            return redirect(route('shared.qualificationTypes.index'));
        }

        $qualificationType->delete();

        Flash::success('Qualification Type deleted successfully.');

        return redirect(route('shared.qualificationTypes.index'));
    }
}
