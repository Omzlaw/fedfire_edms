<?php

namespace App\Http\Controllers\Shared;

use Response;
use App\Traits\FileUpload;
use Laracasts\Flash\Flash;
use Illuminate\Http\Request;
use App\Http\Requests\Shared;
use App\Models\Shared\FileType;
use App\Models\Shared\PolicyDocument;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\AppBaseController;
use App\DataTables\Shared\PolicyDocumentDataTable;
use App\Http\Requests\Shared\CreatePolicyDocumentRequest;
use App\Http\Requests\Shared\UpdatePolicyDocumentRequest;

class PolicyDocumentController extends AppBaseController
{
    use FileUpload;
    /**
     * Display a listing of the PolicyDocument.
     *
     * @param PolicyDocumentDataTable $policyDocumentDataTable
     * @return Response
     */
    public function index(PolicyDocumentDataTable $policyDocumentDataTable)
    {
        if(!check_permission('policy_documents-index')){
            Flash::error('Permission Denied');
            return redirect()->back();
        }
        return $policyDocumentDataTable->render('shared.policy_documents.index');
    }

    /**
     * Show the form for creating a new PolicyDocument.
     *
     * @return Response
     */
    public function create()
    {
        if(!check_permission('policy_documents-create')){
            Flash::error('Permission Denied');
            return redirect()->back();
        }
        return view('shared.policy_documents.create');
    }

    /**
     * Store a newly created PolicyDocument in storage.
     *
     * @param CreatePolicyDocumentRequest $request
     *
     * @return Response
     */
    public function store(CreatePolicyDocumentRequest $request)
    {

        if(!check_permission('policy_documents-store')){
            Flash::error('Permission Denied');
            return redirect()->back();
        }
        $input = $request->all();

        /** @var PolicyDocument $policyDocument */
        $policyDocument = PolicyDocument::create($this->saveFile($input));

        add_audit('create', 'Policy File');

        Flash::success('Policy File saved successfully.');

        return redirect(route('shared.policyDocuments.index'));
    }

    /**
     * Display the specified PolicyDocument.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        if(!check_permission('policy_documents-show')){
            Flash::error('Permission Denied');
            return redirect()->back();
        }
        /** @var PolicyDocument $policyDocument */
        $policyDocument = PolicyDocument::find($id);

        if (empty($policyDocument)) {
            Flash::error('Policy File not found');

            return redirect(route('shared.policyDocuments.index'));
        }

        return view('shared.policy_documents.show')->with('policyDocument', $policyDocument);
    }

    /**
     * Show the form for editing the specified PolicyDocument.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        if(!check_permission('policy_documents-edit')){
            Flash::error('Permission Denied');
            return redirect()->back();
        }
        /** @var PolicyDocument $policyDocument */
        $policyDocument = PolicyDocument::find($id);

        if (empty($policyDocument)) {
            Flash::error('Policy File not found');

            return redirect(route('shared.policyDocuments.index'));
        }

        return view('shared.policy_documents.edit')->with('policyDocument', $policyDocument);
    }

    /**
     * Update the specified PolicyDocument in storage.
     *
     * @param  int              $id
     * @param UpdatePolicyDocumentRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePolicyDocumentRequest $request)
    {

        if(!check_permission('policy_documents-update')){
            Flash::error('Permission Denied');
            return redirect()->back();
        }
        /** @var PolicyDocument $policyDocument */
        $policyDocument = PolicyDocument::find($id);

        if (empty($policyDocument)) {
            Flash::error('Policy File not found');

            return redirect(route('shared.policyDocuments.index'));
        }

        $input = $request->all();

        $file_url = str_replace('storage/', 'public/', $policyDocument->file_url);
        Storage::delete($file_url);

        $policyDocument->fill($this->saveFile($input));
        $policyDocument->save();
        add_audit('update', 'Policy File');

        Flash::success('Policy File updated successfully.');

        return redirect(route('shared.policyDocuments.index'));
    }

    /**
     * Remove the specified PolicyDocument from storage.
     *
     * @param  int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        if(!check_permission('policy_documents-destroy')){
            Flash::error('Permission Denied');
            return redirect()->back();
        }
        /** @var PolicyDocument $policyDocument */
        $policyDocument = PolicyDocument::find($id);

        if (empty($policyDocument)) {
            Flash::error('Policy File not found');

            return redirect(route('shared.policyDocuments.index'));
        }

        $file_url = str_replace('storage/', 'public/', $policyDocument->file_url);
        Storage::delete($file_url);

        $policyDocument->delete();
        add_audit('delete', 'Policy File');

        Flash::success('Policy File deleted successfully.');

        return redirect(route('shared.policyDocuments.index'));
    }

    public function saveFile($input)
    {
        // dd($input);

        $files = $input['file_upload'];
        $file_url_array = [];

        // $file_type = FileType::find($input['file_type_id'])->title;
        $file_type = 'Policy Document';

        $file_type_name = str_replace(' ', '-', $file_type);

        $file_name_time = now()->timestamp . '_' . $file_type_name;

        $file_name_mod = $input['file_name']  . '_' . $file_name_time;

        foreach ($files as $file) {
            $file_url_array[] = $this->policyUpload($file, $file_name_mod, $file_type_name);
        }
        $input['file_url'] = $file_url_array;

        return $input;
    }

    public function search(Request $request)
    {
        if(!check_permission('policy_documents-search')){
            Flash::error('Permission Denied');
            return redirect()->back();
        }
        $policyDocument = PolicyDocument::where('file_number', '=', $request['query'])->orWhere('file_name', '=', $request['query'])->first();
        if (empty($policyDocument)) {
            Flash::error('Policy File not found');
            return view('shared.policy_documents.search');
        }
        add_audit('searche', 'Policy File Records');
        return view('shared.policy_documents.search', compact('policyDocument'));
    }

}
