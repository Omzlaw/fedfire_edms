<?php

namespace App\Http\Controllers\Shared;

use App\DataTables\Shared\SettingDataTable;
use App\Http\Requests\Shared;
use App\Http\Requests\Shared\CreateSettingRequest;
use App\Http\Requests\Shared\UpdateSettingRequest;
use App\Models\Shared\Setting;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class SettingController extends AppBaseController
{
    /**
     * Display a listing of the Setting.
     *
     * @param SettingDataTable $settingDataTable
     * @return Response
     */
    public function index(SettingDataTable $settingDataTable)
    {
        return $settingDataTable->render('shared.settings.index');
    }

    /**
     * Show the form for creating a new Setting.
     *
     * @return Response
     */
    public function create()
    {
        return view('shared.settings.create');
    }

    /**
     * Store a newly created Setting in storage.
     *
     * @param CreateSettingRequest $request
     *
     * @return Response
     */
    public function store(CreateSettingRequest $request)
    {
        $input = $request->all();

        /** @var Setting $setting */
        $setting = Setting::create($input);

        Flash::success('Setting saved successfully.');

        return redirect(route('shared.settings.index'));
    }

    /**
     * Display the specified Setting.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Setting $setting */
        $setting = Setting::find($id);

        if (empty($setting)) {
            Flash::error('Setting not found');

            return redirect(route('shared.settings.index'));
        }

        return view('shared.settings.show')->with('setting', $setting);
    }

    /**
     * Show the form for editing the specified Setting.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var Setting $setting */
        $setting = Setting::find($id);

        if (empty($setting)) {
            Flash::error('Setting not found');

            return redirect(route('shared.settings.index'));
        }

        return view('shared.settings.edit')->with('setting', $setting);
    }

    /**
     * Update the specified Setting in storage.
     *
     * @param  int              $id
     * @param UpdateSettingRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSettingRequest $request)
    {
        /** @var Setting $setting */
        $setting = Setting::find($id);

        if (empty($setting)) {
            Flash::error('Setting not found');

            return redirect(route('shared.settings.index'));
        }

        $setting->fill($request->all());
        $setting->save();

        Flash::success('Setting updated successfully.');

        return redirect(route('shared.settings.index'));
    }

    /**
     * Remove the specified Setting from storage.
     *
     * @param  int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Setting $setting */
        $setting = Setting::find($id);

        if (empty($setting)) {
            Flash::error('Setting not found');

            return redirect(route('shared.settings.index'));
        }

        $setting->delete();

        Flash::success('Setting deleted successfully.');

        return redirect(route('shared.settings.index'));
    }
}
