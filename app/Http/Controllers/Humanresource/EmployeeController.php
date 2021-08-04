<?php

namespace App\Http\Controllers\Humanresource;

use Flash;
use Response;
use App\Traits\FileUpload;
use App\Models\Shared\State;
use Illuminate\Http\Request;
use App\Models\Shared\Country;
use Yajra\DataTables\DataTables;
use App\Http\Requests\Humanresource;
use App\Models\Shared\LocalGovtArea;
use App\Models\Shared\MaritalStatus;
use App\Models\Shared\SenatorialZone;
use App\Models\Humanresource\Employee;
use App\Models\Shared\GeoPoliticalZone;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\AppBaseController;
use App\DataTables\Humanresource\EmployeeDataTable;
use App\Http\Requests\Humanresource\CreateEmployeeRequest;
use App\Http\Requests\Humanresource\UpdateEmployeeRequest;

class EmployeeController extends AppBaseController
{
    use FileUpload;
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
        $countries = new Country;
        $geo_political_zones = new GeoPoliticalZone;
        $states = new State;
        $senatorial_zones = new SenatorialZone;
        $local_govt_areas = new LocalGovtArea;
        return view('humanresource.employees.create', compact('countries', 'geo_political_zones', 'states', 'senatorial_zones', 'local_govt_areas'));
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
        if($input['middle_name'] == '')
        {
            $input['staff_code'] = $input['first_name'] . '_' . $input['last_name'] . '_' . $input['file_no'];
        }
        else{
            $input['staff_code'] = $input['first_name'] . '_' . $input['middle_name'] . '_' . $input['last_name'] . '_' . $input['file_no'];
        }

        if($request->hasFile('profile_picture'))
        {     
            $employee = Employee::create($this->saveFile($input));
        }

        else {
            $employee = Employee::create($input);
        }
        /** @var Employee $employee */
        

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
        $countries = new Country;
        $geo_political_zones = new GeoPoliticalZone;
        $states = new State;
        $senatorial_zones = new SenatorialZone;
        $local_govt_areas = new LocalGovtArea;
        return view('humanresource.employees.edit', compact('countries', 'geo_political_zones', 'states', 'senatorial_zones', 'local_govt_areas'))->with('employee', $employee);
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
        $input = $request->all();
        if($input['middle_name'] == '')
        {
            $input['staff_code'] = $input['first_name'] . '_' . $input['last_name'] . '_' . $input['file_no'];
        }
        else{
            $input['staff_code'] = $input['first_name'] . '_' . $input['middle_name'] . '_' . $input['last_name'] . '_' . $input['file_no'];
        }

        if($request->hasFile('profile_picture'))
        {     
            $employee->fill($this->saveFile($input));
        }

        else {
            $employee->fill($input);
        }

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

        $profile_picture = str_replace('storage/', 'public/', $employee->profile_picture);
        Storage::delete($profile_picture);

        $employee->delete();

        Flash::success('Employee deleted successfully.');

        return redirect(route('humanresource.employees.index'));
    }

    public function saveFile($input) {

        $staff_code = $input['staff_code'];

        $file = $input['profile_picture'];

        $file_type = 'profile_picture';


        $file_name = now()->timestamp . '_' . $staff_code . '_' . $file_type;

        $input['file_name'] = $file_name;

        $input['profile_picture'] = $this->Upload($file, $file_name, $staff_code, $file_type);;

        return $input;
    }
}
