<?php

namespace App\Http\Controllers\Shared;

use App\DataTables\Shared\FileTypeDataTable;
use App\Http\Requests\Shared;
use App\Http\Requests\Shared\CreateFileTypeRequest;
use App\Http\Requests\Shared\UpdateFileTypeRequest;
use App\Models\Shared\FileType;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class FileTypeController extends AppBaseController
{
    /**
     * Display a listing of the FileType.
     *
     * @param FileTypeDataTable $fileTypeDataTable
     * @return Response
     */
    public function index(FileTypeDataTable $fileTypeDataTable)
    {
        return $fileTypeDataTable->render('shared.file_types.index');
    }

    /**
     * Show the form for creating a new FileType.
     *
     * @return Response
     */
    public function create()
    {
        return view('shared.file_types.create');
    }

    /**
     * Store a newly created FileType in storage.
     *
     * @param CreateFileTypeRequest $request
     *
     * @return Response
     */
    public function store(CreateFileTypeRequest $request)
    {
        $input = $request->all();

        /** @var FileType $fileType */
        $fileType = FileType::create($input);

        Flash::success('File Type saved successfully.');

        return redirect(route('shared.fileTypes.index'));
    }

    /**
     * Display the specified FileType.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var FileType $fileType */
        $fileType = FileType::find($id);

        if (empty($fileType)) {
            Flash::error('File Type not found');

            return redirect(route('shared.fileTypes.index'));
        }

        return view('shared.file_types.show')->with('fileType', $fileType);
    }

    /**
     * Show the form for editing the specified FileType.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var FileType $fileType */
        $fileType = FileType::find($id);

        if (empty($fileType)) {
            Flash::error('File Type not found');

            return redirect(route('shared.fileTypes.index'));
        }

        return view('shared.file_types.edit')->with('fileType', $fileType);
    }

    /**
     * Update the specified FileType in storage.
     *
     * @param  int              $id
     * @param UpdateFileTypeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFileTypeRequest $request)
    {
        /** @var FileType $fileType */
        $fileType = FileType::find($id);

        if (empty($fileType)) {
            Flash::error('File Type not found');

            return redirect(route('shared.fileTypes.index'));
        }

        $fileType->fill($request->all());
        $fileType->save();

        Flash::success('File Type updated successfully.');

        return redirect(route('shared.fileTypes.index'));
    }

    /**
     * Remove the specified FileType from storage.
     *
     * @param  int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var FileType $fileType */
        $fileType = FileType::find($id);

        if (empty($fileType)) {
            Flash::error('File Type not found');

            return redirect(route('shared.fileTypes.index'));
        }

        $fileType->delete();

        Flash::success('File Type deleted successfully.');

        return redirect(route('shared.fileTypes.index'));
    }
}
