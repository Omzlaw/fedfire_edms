<?php

namespace App\Http\Controllers\Shared;

use Flash;
use Response;
use App\Http\Requests\Shared;
use App\Models\Shared\FileType;
use App\Models\Shared\FileDirectory;
use App\Http\Controllers\AppBaseController;
use App\DataTables\Shared\FileDirectoryDataTable;
use App\Http\Requests\Shared\CreateFileDirectoryRequest;
use App\Http\Requests\Shared\UpdateFileDirectoryRequest;

class FileDirectoryController extends AppBaseController
{
    /**
     * Display a listing of the FileDirectory.
     *
     * @param FileDirectoryDataTable $fileDirectoryDataTable
     * @return Response
     */
    public function index(FileDirectoryDataTable $fileDirectoryDataTable)
    {
        return $fileDirectoryDataTable->render('shared.file_directories.index');
    }

    /**
     * Show the form for creating a new FileDirectory.
     *
     * @return Response
     */
    public function create()
    {
        $file_types = new FileType;
        return view('shared.file_directories.create', compact('file_types'));
    }

    /**
     * Store a newly created FileDirectory in storage.
     *
     * @param CreateFileDirectoryRequest $request
     *
     * @return Response
     */
    public function store(CreateFileDirectoryRequest $request)
    {
        $input = $request->all();

        /** @var FileDirectory $fileDirectory */
        $fileDirectory = FileDirectory::create($input);

        Flash::success('File Directory saved successfully.');

        return redirect(route('shared.fileDirectories.index'));
    }

    /**
     * Display the specified FileDirectory.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var FileDirectory $fileDirectory */
        $fileDirectory = FileDirectory::find($id);

        if (empty($fileDirectory)) {
            Flash::error('File Directory not found');

            return redirect(route('shared.fileDirectories.index'));
        }

        return view('shared.file_directories.show')->with('fileDirectory', $fileDirectory);
    }

    /**
     * Show the form for editing the specified FileDirectory.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var FileDirectory $fileDirectory */
        $fileDirectory = FileDirectory::find($id);

        if (empty($fileDirectory)) {
            Flash::error('File Directory not found');

            return redirect(route('shared.fileDirectories.index'));
        }
        $file_types = new FileType;
        return view('shared.file_directories.edit', compact('file_types'))->with('fileDirectory', $fileDirectory);
    }

    /**
     * Update the specified FileDirectory in storage.
     *
     * @param  int              $id
     * @param UpdateFileDirectoryRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFileDirectoryRequest $request)
    {
        /** @var FileDirectory $fileDirectory */
        $fileDirectory = FileDirectory::find($id);

        if (empty($fileDirectory)) {
            Flash::error('File Directory not found');

            return redirect(route('shared.fileDirectories.index'));
        }

        $fileDirectory->fill($request->all());
        $fileDirectory->save();

        Flash::success('File Directory updated successfully.');

        return redirect(route('shared.fileDirectories.index'));
    }

    /**
     * Remove the specified FileDirectory from storage.
     *
     * @param  int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var FileDirectory $fileDirectory */
        $fileDirectory = FileDirectory::find($id);

        if (empty($fileDirectory)) {
            Flash::error('File Directory not found');

            return redirect(route('shared.fileDirectories.index'));
        }

        $fileDirectory->delete();

        Flash::success('File Directory deleted successfully.');

        return redirect(route('shared.fileDirectories.index'));
    }
}
