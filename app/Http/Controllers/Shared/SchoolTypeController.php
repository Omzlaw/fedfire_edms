<?php

namespace App\Http\Controllers\Shared;

use App\DataTables\Shared\SchoolTypeDataTable;
use App\Http\Requests\Shared;
use App\Http\Requests\Shared\CreateSchoolTypeRequest;
use App\Http\Requests\Shared\UpdateSchoolTypeRequest;
use App\Models\Shared\SchoolType;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class SchoolTypeController extends AppBaseController
{
    /**
     * Display a listing of the SchoolType.
     *
     * @param SchoolTypeDataTable $schoolTypeDataTable
     * @return Response
     */
    public function index(SchoolTypeDataTable $schoolTypeDataTable)
    {
        return $schoolTypeDataTable->render('shared.school_types.index');
    }

    /**
     * Show the form for creating a new SchoolType.
     *
     * @return Response
     */
    public function create()
    {
        return view('shared.school_types.create');
    }

    /**
     * Store a newly created SchoolType in storage.
     *
     * @param CreateSchoolTypeRequest $request
     *
     * @return Response
     */
    public function store(CreateSchoolTypeRequest $request)
    {
        $input = $request->all();

        /** @var SchoolType $schoolType */
        $schoolType = SchoolType::create($input);

        Flash::success('School Type saved successfully.');

        return redirect(route('shared.schoolTypes.index'));
    }

    /**
     * Display the specified SchoolType.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var SchoolType $schoolType */
        $schoolType = SchoolType::find($id);

        if (empty($schoolType)) {
            Flash::error('School Type not found');

            return redirect(route('shared.schoolTypes.index'));
        }

        return view('shared.school_types.show')->with('schoolType', $schoolType);
    }

    /**
     * Show the form for editing the specified SchoolType.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var SchoolType $schoolType */
        $schoolType = SchoolType::find($id);

        if (empty($schoolType)) {
            Flash::error('School Type not found');

            return redirect(route('shared.schoolTypes.index'));
        }

        return view('shared.school_types.edit')->with('schoolType', $schoolType);
    }

    /**
     * Update the specified SchoolType in storage.
     *
     * @param  int              $id
     * @param UpdateSchoolTypeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSchoolTypeRequest $request)
    {
        /** @var SchoolType $schoolType */
        $schoolType = SchoolType::find($id);

        if (empty($schoolType)) {
            Flash::error('School Type not found');

            return redirect(route('shared.schoolTypes.index'));
        }

        $schoolType->fill($request->all());
        $schoolType->save();

        Flash::success('School Type updated successfully.');

        return redirect(route('shared.schoolTypes.index'));
    }

    /**
     * Remove the specified SchoolType from storage.
     *
     * @param  int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var SchoolType $schoolType */
        $schoolType = SchoolType::find($id);

        if (empty($schoolType)) {
            Flash::error('School Type not found');

            return redirect(route('shared.schoolTypes.index'));
        }

        $schoolType->delete();

        Flash::success('School Type deleted successfully.');

        return redirect(route('shared.schoolTypes.index'));
    }
}
