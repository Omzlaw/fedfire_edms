<?php

namespace App\Http\Controllers\Humanresource;

use Response;
use Laracasts\Flash\Flash;
use App\Models\Shared\State;
use App\Models\Shared\Country;
use App\Http\Requests\Humanresource;
use App\Models\Shared\LocalGovtArea;
use App\Models\Humanresource\Employee;
use App\Http\Controllers\AppBaseController;
use App\Models\Humanresource\EmployeeAddress;
use App\DataTables\Humanresource\EmployeeAddressDataTable;
use App\Http\Requests\Humanresource\CreateEmployeeAddressRequest;
use App\Http\Requests\Humanresource\UpdateEmployeeAddressRequest;

class EmployeeAddressController extends AppBaseController
{
    /**
     * Display a listing of the EmployeeAddress.
     *
     * @param EmployeeAddressDataTable $employeeAddressDataTable
     * @return Response
     */
    public function index(EmployeeAddressDataTable $employeeAddressDataTable)
    {
        Flash::error('Not Allowed');
        return back();
        // return $employeeAddressDataTable->render('humanresource.employee_addresses.index');
    }

    /**
     * Show the form for creating a new EmployeeAddress.
     *
     * @return Response
     */
    public function create()
    {
        $employees = new Employee;
        $local_govt_areas = new LocalGovtArea;
        $states = new State;
        $countries = new Country;
        $employeeAddressForCurrentEmployeeCount =  EmployeeAddress::where('employee_id', '=', session('employee_id'))->count();
        if ($employeeAddressForCurrentEmployeeCount == 2) {
            Flash::success('Only two addresses are allowed.');
            close_modal_refresh();
        } else {
            return view('humanresource.employee_addresses.create', compact('employees', 'states', 'countries', 'local_govt_areas'));
        }
    }

    /**
     * Store a newly created EmployeeAddress in storage.
     *
     * @param CreateEmployeeAddressRequest $request
     *
     * @return Response
     */
    public function store(CreateEmployeeAddressRequest $request)
    {
        $employeeAddressForCurrentEmployeeCount =  EmployeeAddress::where('employee_id', '=', session('employee_id'))->count();
        if ($employeeAddressForCurrentEmployeeCount == 2) {
            Flash::success('Only two addresses are allowed.');
            close_modal_refresh();
        } else {
            $input = $request->all();

            /** @var EmployeeAddress $employeeAddress */
            $employeeAddress = EmployeeAddress::create($input);

            Flash::success('Employee Address saved successfully.');
            add_audit('create', 'Employee Address');
            close_modal_refresh();

            // return redirect(route('humanresource.employeeAddresses.index'));
        }
    }

    /**
     * Display the specified EmployeeAddress.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var EmployeeAddress $employeeAddress */
        $employeeAddress = EmployeeAddress::find($id);

        if (empty($employeeAddress)) {
            Flash::error('Employee Address not found');

            //return redirect(route('humanresource.employeeAddresses.index'));
        }

        return view('humanresource.employee_addresses.show')->with('employeeAddress', $employeeAddress);
    }

    /**
     * Show the form for editing the specified EmployeeAddress.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var EmployeeAddress $employeeAddress */
        $employeeAddress = EmployeeAddress::find($id);

        if (empty($employeeAddress)) {
            Flash::error('Employee Address not found');

            //return redirect(route('humanresource.employeeAddresses.index'));
        }
        $employees = new Employee;
        $states = new State;
        $local_govt_areas = new LocalGovtArea;
        $countries = new Country;
        return view('humanresource.employee_addresses.edit', compact('employees', 'states', 'countries', 'local_govt_areas'))->with('employeeAddress', $employeeAddress);
    }

    /**
     * Update the specified EmployeeAddress in storage.
     *
     * @param  int              $id
     * @param UpdateEmployeeAddressRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEmployeeAddressRequest $request)
    {
        /** @var EmployeeAddress $employeeAddress */
        $employeeAddress = EmployeeAddress::find($id);

        if (empty($employeeAddress)) {
            Flash::error('Employee Address not found');
            close_modal_refresh();

            //return redirect(route('humanresource.employeeAddresses.index'));
        }

        $employeeAddress->fill($request->all());
        $employeeAddress->save();
        add_audit('update', 'Employee Address');

        Flash::success('Employee Address updated successfully.');
        close_modal_refresh();

        // return redirect(route('humanresource.employeeAddresses.index'));
    }

    /**
     * Remove the specified EmployeeAddress from storage.
     *
     * @param  int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var EmployeeAddress $employeeAddress */
        $employeeAddress = EmployeeAddress::find($id);

        if (empty($employeeAddress)) {
            Flash::error('Employee Address not found');

            //return redirect(route('humanresource.employeeAddresses.index'));
        }

        $employeeAddress->delete();
        add_audit('delete', 'Employee Address');

        Flash::success('Employee Address deleted successfully.');
        return redirect(route('humanresource.employees.show', session('employee_id')));

        //return redirect(route('humanresource.employeeAddresses.index'));
    }
}
