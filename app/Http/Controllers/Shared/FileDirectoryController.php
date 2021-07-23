<?php

namespace App\Http\Controllers\Shared;

use Flash;
use Response;
use App\Traits\FileUpload;
use Illuminate\Http\Request;
use App\Http\Requests\Shared;
use App\Models\Shared\FileType;
use App\Models\Shared\FileDirectory;
use App\Http\Controllers\AppBaseController;
use App\DataTables\Shared\FileDirectoryDataTable;
use App\Http\Requests\Shared\CreateFileDirectoryRequest;
use App\Http\Requests\Shared\UpdateFileDirectoryRequest;

class FileDirectoryController extends AppBaseController
{
    use FileUpload; 
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
        $status = $this->fileUpload($input);

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

//Using our created Trait to access in trait method

    public function fileUpload($input) 
    {
        $file_upload_array = $input['file_upload'];
        $staff_no = $input['staff_no'];
        $file_type_id_array = $input['file_type_id'];
        $db_data = array();
   
        // if ($input->hasFile('file_upload')) {

            foreach($file_upload_array as $index=>$file){
                $file_type_id = $file_type_id_array[$index];
                $file_type_name = FileType::find($file_type_id);
                $upload_time = now();
                $file_path = $this->Upload($file, $staff_no, $file_type_name, $upload_time); //passing parameter to our trait method one after another using foreach loop
                $db_data['file_type_id'] = $file_type_id;
                $db_data['staff_no'] = $staff_no;
                $db_data['file_path'] = $file_path;
                $fileDirectory = FileDirectory::create($db_data);
            }    
        // }
    }
}
