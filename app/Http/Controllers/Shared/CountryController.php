<?php

namespace App\Http\Controllers\Shared;

use App\DataTables\Shared\CountryDataTable;
use App\Http\Requests\Shared;
use App\Http\Requests\Shared\CreateCountryRequest;
use App\Http\Requests\Shared\UpdateCountryRequest;
use App\Models\Shared\Country;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class CountryController extends AppBaseController
{
    /**
     * Display a listing of the Country.
     *
     * @param CountryDataTable $countryDataTable
     * @return Response
     */
    public function index(CountryDataTable $countryDataTable)
    {
        return $countryDataTable->render('shared.countries.index');
    }

    /**
     * Show the form for creating a new Country.
     *
     * @return Response
     */
    public function create()
    {
        return view('shared.countries.create');
    }

    /**
     * Store a newly created Country in storage.
     *
     * @param CreateCountryRequest $request
     *
     * @return Response
     */
    public function store(CreateCountryRequest $request)
    {
        $input = $request->all();

        /** @var Country $country */
        $country = Country::create($input);

        Flash::success('Country saved successfully.');

        return redirect(route('shared.countries.index'));
    }

    /**
     * Display the specified Country.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Country $country */
        $country = Country::find($id);

        if (empty($country)) {
            Flash::error('Country not found');

            return redirect(route('shared.countries.index'));
        }

        return view('shared.countries.show')->with('country', $country);
    }

    /**
     * Show the form for editing the specified Country.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var Country $country */
        $country = Country::find($id);

        if (empty($country)) {
            Flash::error('Country not found');

            return redirect(route('shared.countries.index'));
        }

        return view('shared.countries.edit')->with('country', $country);
    }

    /**
     * Update the specified Country in storage.
     *
     * @param  int              $id
     * @param UpdateCountryRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCountryRequest $request)
    {
        /** @var Country $country */
        $country = Country::find($id);

        if (empty($country)) {
            Flash::error('Country not found');

            return redirect(route('shared.countries.index'));
        }

        $country->fill($request->all());
        $country->save();

        Flash::success('Country updated successfully.');

        return redirect(route('shared.countries.index'));
    }

    /**
     * Remove the specified Country from storage.
     *
     * @param  int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Country $country */
        $country = Country::find($id);

        if (empty($country)) {
            Flash::error('Country not found');

            return redirect(route('shared.countries.index'));
        }

        $country->delete();

        Flash::success('Country deleted successfully.');

        return redirect(route('shared.countries.index'));
    }
}
