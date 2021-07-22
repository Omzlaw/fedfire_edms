<?php

namespace App\Http\Controllers\Shared;

use App\DataTables\Shared\LanguageDataTable;
use App\Http\Requests\Shared;
use App\Http\Requests\Shared\CreateLanguageRequest;
use App\Http\Requests\Shared\UpdateLanguageRequest;
use App\Models\Shared\Language;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class LanguageController extends AppBaseController
{
    /**
     * Display a listing of the Language.
     *
     * @param LanguageDataTable $languageDataTable
     * @return Response
     */
    public function index(LanguageDataTable $languageDataTable)
    {
        return $languageDataTable->render('shared.languages.index');
    }

    /**
     * Show the form for creating a new Language.
     *
     * @return Response
     */
    public function create()
    {
        return view('shared.languages.create');
    }

    /**
     * Store a newly created Language in storage.
     *
     * @param CreateLanguageRequest $request
     *
     * @return Response
     */
    public function store(CreateLanguageRequest $request)
    {
        $input = $request->all();

        /** @var Language $language */
        $language = Language::create($input);

        Flash::success('Language saved successfully.');

        return redirect(route('shared.languages.index'));
    }

    /**
     * Display the specified Language.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Language $language */
        $language = Language::find($id);

        if (empty($language)) {
            Flash::error('Language not found');

            return redirect(route('shared.languages.index'));
        }

        return view('shared.languages.show')->with('language', $language);
    }

    /**
     * Show the form for editing the specified Language.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var Language $language */
        $language = Language::find($id);

        if (empty($language)) {
            Flash::error('Language not found');

            return redirect(route('shared.languages.index'));
        }

        return view('shared.languages.edit')->with('language', $language);
    }

    /**
     * Update the specified Language in storage.
     *
     * @param  int              $id
     * @param UpdateLanguageRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateLanguageRequest $request)
    {
        /** @var Language $language */
        $language = Language::find($id);

        if (empty($language)) {
            Flash::error('Language not found');

            return redirect(route('shared.languages.index'));
        }

        $language->fill($request->all());
        $language->save();

        Flash::success('Language updated successfully.');

        return redirect(route('shared.languages.index'));
    }

    /**
     * Remove the specified Language from storage.
     *
     * @param  int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Language $language */
        $language = Language::find($id);

        if (empty($language)) {
            Flash::error('Language not found');

            return redirect(route('shared.languages.index'));
        }

        $language->delete();

        Flash::success('Language deleted successfully.');

        return redirect(route('shared.languages.index'));
    }
}
