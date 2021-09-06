<?php

namespace App\Http\Controllers\Shared;

use Response;
use App\Traits\FileUpload;
use Laracasts\Flash\Flash;
use Illuminate\Http\Request;
use App\Http\Requests\Shared;
use App\Models\Shared\FileType;
use App\Models\Shared\FileDirectory;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use App\Models\Humanresource\Employee;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use App\Models\Humanresource\EmployeeRank;
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
        if(!check_permission('file_directories-index')){
            Flash::error('Permission Denied');
            return redirect()->back();
        }
        return $fileDirectoryDataTable->render('shared.file_directories.index');
    }

    /**
     * Show the form for creating a new FileDirectory.
     *
     * @return Response
     */
    public function create()
    {
        if(!check_permission('file_directories-create')){
            Flash::error('Permission Denied');
            return redirect()->back();
        }
        $file_types = new FileType;
        $employees = new Employee;
        return view('shared.file_directories.create', compact('file_types', 'employees'));
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
        if(!check_permission('file_directories-store')){
            Flash::error('Permission Denied');
            return redirect()->back();
        }
        /** @var FileDirectory $fileDirectory */
        $input = $request->all();
        $fileDirectory = FileDirectory::create($this->saveFile($input));
        Flash::success('File Directory saved successfully.');
        add_audit('create', 'Files');
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
        if(!check_permission('file_directories-show')){
            Flash::error('Permission Denied');
            return redirect()->back();
        }
        /** @var FileDirectory $fileDirectory */
        $fileDirectory = FileDirectory::find($id);

        if (empty($fileDirectory)) {
            Flash::error('File Directory not found');

            return redirect(route('shared.fileDirectories.index'));
        }

        return view('shared.file_directories.show')->with('fileDirectory', $fileDirectory);
    }

    public function getSearch()
    {
        if(!check_permission('file_directories-search')){
            Flash::error('Permission Denied');
            return redirect()->back();
        }
        return view('shared.file_directories.search');
    }

    public function search(Request $request)
    {
        if(!check_permission('file_directories-search')){
            Flash::error('Permission Denied');
            return redirect()->back();
        }
        $employee = Employee::where('service_number', '=', $request['service_number'])->first();
        if (empty($employee)) {
            Flash::error('Employee not found');
            return redirect(route('employeeSearch'));
        }
        $file_directories = FileDirectory::where('employee_id', '=', $employee->id)->get();
        $file_types = new FileType;
        add_audit('searche', 'Employee File Records');
        return view('shared.file_directories.search', compact('employee', 'file_directories', 'file_types'));
    }

    public function records(Request $request)
    {
        if(!check_permission('file_directories-search')){
            Flash::error('Permission Denied');
            return redirect()->back();
        }
        $request->validate([
            'search_query' => 'required'
        ]);



        $rank_type_id = $request['rank_type'];
        $employees = Employee::select('id', 'service_number', 'first_name', 'middle_name', 'last_name')
            ->orwhere('first_name', 'like', $request['search_query'])
            ->orWhere('last_name', 'like', $request['search_query'])
            ->orWhere('middle_name', 'like', $request['search_query'])
            ->orWhere('service_number', '=', $request['search_query'])
            ->orderBy('service_number')
            ->get();
        if ($request['rank_type'] != null) {
            $employees = Employee::select('id', 'service_number', 'first_name', 'middle_name', 'last_name')
                ->orwhere('first_name', 'like', $request['search_query'])
                ->orwhere('last_name', 'like', $request['search_query'])
                ->orwhere('middle_name', 'like', $request['search_query'])
                ->orderBy('service_number')
                ->get();

            if (!$employees->isEmpty()) {
                $employees = Employee::select('id', 'service_number', 'first_name', 'middle_name', 'last_name')->where('current_rank', '=', $rank_type_id)->get();
            }
        }



        // dd($employees->ranks());

        if ($employees->isEmpty()) {
            Flash::error('No Record(s) found');
            return redirect()->back();
        }
        add_audit('searche', 'Employee Records');

        return view('shared.file_directories.global_search', compact('employees'));
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
        if(!check_permission('file_directories-edit')){
            Flash::error('Permission Denied');
            return redirect()->back();
        }
        /** @var FileDirectory $fileDirectory */
        $fileDirectory = FileDirectory::find($id);

        if (empty($fileDirectory)) {
            Flash::error('File Directory not found');

            return redirect(route('shared.fileDirectories.index'));
        }
        $file_types = new FileType;
        $employees = new Employee;
        return view('shared.file_directories.edit', compact('file_types', 'employees'))->with('fileDirectory', $fileDirectory);
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
        if(!check_permission('file_directories-update')){
            Flash::error('Permission Denied');
            return redirect()->back();
        }
        /** @var FileDirectory $fileDirectory */
        $fileDirectory = FileDirectory::find($id);

        if (empty($fileDirectory)) {
            Flash::error('File Directory not found');

            return redirect(route('shared.fileDirectories.index'));
        }
        $input = $request->all();

        $file_url = str_replace('storage/', 'public/', $fileDirectory->file_url);
        Storage::delete($file_url);

        $fileDirectory->fill($this->saveFile($input));
        $fileDirectory->save();
        add_audit('update', 'File');

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
        if(!check_permission('file_directories-destroy')){
            Flash::error('Permission Denied');
            return redirect()->back();
        }
        /** @var FileDirectory $fileDirectory */
        $fileDirectory = FileDirectory::find($id);

        if (empty($fileDirectory)) {
            Flash::error('File Directory not found');

            return redirect(route('shared.fileDirectories.index'));
        }

        $file_url = str_replace('storage/', 'public/', $fileDirectory->file_url);
        Storage::delete($file_url);

        $fileDirectory->delete();
        add_audit('delete', 'File');

        Flash::success('File Directory deleted successfully.');

        return redirect(route('shared.fileDirectories.index'));
    }

    public function saveFile($input)
    {

        $files = $input['file_upload'];
        $employee_id = $input['employee_id'];
        $file_url_array = [];

        $file_type = FileType::find($input['file_type_id'])->title;

        $staff = Employee::find($employee_id);

        // $time = str_replace(' ', '_', now()->timestamp);
        // $staff_code = str_replace(' ', '_', $staff->staff_code);
        $file_type_name = str_replace(' ', '-', $file_type);

        $file_name = now()->timestamp . '_' . $staff->staff_code . '_' . $file_type_name;

        $input['file_name'] = $file_name;
        foreach ($files as $file) {
            $file_url_array[] = $this->Upload($file, $file_name, $staff->staff_code, $file_type_name);
        }
        $input['file_url'] = $file_url_array;

        return $input;
    }

}
