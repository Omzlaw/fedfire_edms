<?php

namespace App\Http\Controllers\Humanresource;

use Flash;
use Response;
use Illuminate\Http\Request;
use App\Models\Shared\Country;
use Yajra\DataTables\DataTables;
use App\Http\Requests\Humanresource;
use App\Models\Shared\MaritalStatus;
use App\Models\Humanresource\Employee;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\AppBaseController;
use App\DataTables\Humanresource\EmployeeDataTable;
use App\Http\Requests\Humanresource\CreateEmployeeRequest;
use App\Http\Requests\Humanresource\UpdateEmployeeRequest;

class EmployeeController extends AppBaseController
{
    /**
     * Display a listing of the Employee.
     *
     * @param EmployeeDataTable $employeeDataTable
     * @return Response
     */
    public function index(EmployeeDataTable $employeeDataTable)
    {
        return $employeeDataTable->render('humanresource.employees.index');
    }

    /**
     * Show the form for creating a new Employee.
     *
     * @return Response
     */
    public function create()
    {
        $marital_status = new MaritalStatus;
        $countries = new Country;
        return view('humanresource.employees.create', compact('marital_status', 'countries'));
    }

    /**
     * Store a newly created Employee in storage.
     *
     * @param CreateEmployeeRequest $request
     *
     * @return Response
     */
    public function store(CreateEmployeeRequest $request)
    {
        $input = $request->all();
        $input['staff_code'] = $input['first_name'] . '_' . $input['last_name'] . '_' . $input['file_no'];
        /** @var Employee $employee */
        $employee = Employee::create($input);

        Flash::success('Employee saved successfully.');

        return redirect(route('humanresource.employees.index'));
    }

    /**
     * Display the specified Employee.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show(Request $request, $id)
    {

        /** @var Employee $employee */
        $employee = Employee::find($id);

        // dd($data['children']);


        if (empty($employee)) {
            Flash::error('Employee not found');

            return redirect(route('humanresource.employees.index'));
        }

        $data['employee'] = $employee;

        //get the children

        $data['children'] = $employee->children->map(function ($item) {
            $item->gender = get_enum_value('enum_gender', $item->gender);
            $item->birthday = format_date($item->birthday);
            return $item;
        });

        //get the action sheets

        $data['actionSheets'] = $employee->actionSheets->map(function ($item) {
            return $item;
        });

        //get the addresses

        $data['addresses'] = $employee->addresses->map(function ($item) {
            $item->status = get_enum_value('enum_status', $item->status);
            return $item;
        });

        //get the censures

        $data['censures'] = $employee->censures->map(function ($item) {
            return $item;
        });

        //get the certificates

        $data['certificates'] = $employee->certificates->map(function ($item) {
            return $item;
        });

        //get the educations

        $data['educations'] = $employee->educations->map(function ($item) {
            return $item;
        });

        //get the addresses

        $data['addresses'] = $employee->addresses->map(function ($item) {
            return $item;
        });

        //get the forceServices

        $data['forceServices'] = $employee->forceServices->map(function ($item) {
            return $item;
        });

        //get the foreignTours

        $data['foreignTours'] = $employee->foreignTours->map(function ($item) {
            return $item;
        });

        //get the gratuities

        $data['gratuities'] = $employee->gratuities->map(function ($item) {
            return $item;
        });

        //get the languages

        $data['languages'] = $employee->languages->map(function ($item) {
            $item->speaking_fluency = get_enum_value('enum_fluency', $item->speaking_fluency);
            $item->writing_fluency = get_enum_value('enum_fluency', $item->writing_fluency);
            $item->language_id = $item->language->title;
            return $item;
        });

        //get the localLeaves

        $data['localLeaves'] = $employee->localLeaves->map(function ($item) {
            return $item;
        });

        //get the nextOfKins

        $data['nextOfKins'] = $employee->nextOfKins->map(function ($item) {
            return $item;
        });

        //get the publicServices

        $data['publicServices'] = $employee->publicServices->map(function ($item) {
            return $item;
        });

        //get the qualifications

        $data['qualifications'] = $employee->qualifications->map(function ($item) {
            return $item;
        });

        //get the recordTrackers

        $data['recordTrackers'] = $employee->recordTrackers->map(function ($item) {
            return $item;
        });

        //get the terminations

        $data['terminations'] = $employee->terminations->map(function ($item) {
            return $item;
        });

        //get the spouse

        $data['spouse'] = $employee->spouse->map(function ($item) {
            return $item;
        });

        Session::put('employee_id', $id);
        return view('humanresource.employees.show')->with('data', $data);
    }

    /**
     * Show the form for editing the specified Employee.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var Employee $employee */
        $employee = Employee::find($id);

        if (empty($employee)) {
            Flash::error('Employee not found');

            return redirect(route('humanresource.employees.index'));
        }
        $marital_status = new MaritalStatus;
        $countries = new Country;
        return view('humanresource.employees.edit', compact('marital_status', 'countries', 'id'))->with('employee', $employee);
    }

    /**
     * Update the specified Employee in storage.
     *
     * @param  int              $id
     * @param UpdateEmployeeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEmployeeRequest $request)
    {
        /** @var Employee $employee */
        $employee = Employee::find($id);

        if (empty($employee)) {
            Flash::error('Employee not found');

            return redirect(route('humanresource.employees.index'));
        }

        $employee->fill($request->all());
        $employee->save();

        Flash::success('Employee updated successfully.');

        return redirect(route('humanresource.employees.index'));
    }

    /**
     * Remove the specified Employee from storage.
     *
     * @param  int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Employee $employee */
        $employee = Employee::find($id);

        if (empty($employee)) {
            Flash::error('Employee not found');

            return redirect(route('humanresource.employees.index'));
        }

        $employee->delete();

        Flash::success('Employee deleted successfully.');

        return redirect(route('humanresource.employees.index'));
    }
}
