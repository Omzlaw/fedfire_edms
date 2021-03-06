<?php

namespace App\Http\Controllers\Humanresource;

use Response;
use App\Traits\FileUpload;
use Laracasts\Flash\Flash;
use App\Models\Shared\State;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Excel;
use App\Models\Shared\Country;
use App\Models\Shared\RankType;
use Illuminate\Validation\Rule;
use App\Imports\EmployeesImport;
use Yajra\DataTables\DataTables;
use App\Http\Requests\Humanresource;
use App\Models\Shared\LocalGovtArea;
use App\Models\Shared\MaritalStatus;
use App\Models\Shared\SenatorialZone;
use App\Models\Humanresource\Employee;
use App\Models\Shared\GeoPoliticalZone;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use App\Models\Shared\QualificationType;
use Illuminate\Support\Facades\Validator;
use App\Models\Humanresource\EmployeeRank;
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

        if (!check_permission('employees-view')) {
            Flash::error('Permission Denied');
            return redirect()->back();
        }

        $qualificationTypes = new QualificationType;
        $rankTypes = new RankType;
        $states = new State;
        $local_govt_areas = new LocalGovtArea;


        return $employeeDataTable
            ->render('humanresource.employees.index', compact('qualificationTypes', 'rankTypes', 'states', 'local_govt_areas'));
    }

    public function filter(EmployeeDataTable $employeeDataTable, Request $request)
    {

        if (!check_permission('employees-filter')) {
            Flash::error('Permission Denied');
            return redirect()->back();
        }


        if ($request['action'] == 'Clear') {

            session()->forget('rank');
            session()->forget('qualification');
            session()->forget('state');
            session()->forget('localGovtArea');
            session()->forget('date_of_present_appointment');
            session()->forget('date_of_first_appointment');
            session()->forget('status');
        } else {
            $rank = $request['rank'];
            $qualification = $request['qualification'];
            $state = $request['state'];
            $localGovtArea = $request['localGovtArea'];
            $date_of_present_appointment = $request['date_of_present_appointment'];
            $date_of_first_appointment = $request['date_of_first_appointment'];
            $status = $request['status'];

            session(['rank' => $rank, 'qualification' => $qualification, 'state' => $state, 'localGovtArea' => $localGovtArea, 'date_of_present_appointment' => $date_of_present_appointment, 'date_of_first_appointment' => $date_of_first_appointment, 'status' => $status]);
        }

        return redirect(route('humanresource.employees.index'));
        // return $employeeDataTable
        // ->render('humanresource.employees.index', compact('qualificationTypes', 'rankTypes','states', 'local_govt_areas'));
    }


    /**
     * Show the form for creating a new Employee.
     *
     * @return Response
     */
    public function create()
    {
        if (!check_permission('employees-create')) {
            Flash::error('Permission Denied');
            return redirect()->back();
        }

        $countries = new Country;
        $geo_political_zones = new GeoPoliticalZone;
        $states = new State;
        $senatorial_zones = new SenatorialZone;
        $local_govt_areas = new LocalGovtArea;
        $rank_types = new RankType;
        return view('humanresource.employees.create', compact('countries', 'geo_political_zones', 'states', 'senatorial_zones', 'local_govt_areas', 'rank_types'));
    }

    /**
     * Store a newly created Employee in storage.
     *
     * @param CreateEmployeeRequest $request
     *
     * @return Response
     */
    public function processRequest()
    {
    }

    public function store(CreateEmployeeRequest $request)
    {

        if (!check_permission('employees-create')) {
            Flash::error('Permission Denied');
            return redirect()->back();
        }

        $input = $request->all();
        if ($input['middle_name'] == '') {
            $input['staff_code'] = $input['first_name'] . '_' . $input['last_name'] . '_' . $input['service_number'];
        } else {
            $input['staff_code'] = $input['first_name'] . '_' . $input['middle_name'] . '_' . $input['last_name'] . '_' . $input['service_number'];
        }

        if ($request->hasFile('profile_picture')) {
            $employee = Employee::create($this->saveFile($input));
        } else {
            $employee = Employee::create($input);
        }
        /** @var Employee $employee */


        Flash::success('Employee saved successfully.');
        add_audit('create', 'Employee');

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
        if (!check_permission('employees-view')) {
            Flash::error('Permission Denied');
            return redirect()->back();
        }

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
            $item->birthday = \Carbon\Carbon::parse($item->birthday)->format('d/m/Y');
            $item->gender = get_enum_value('enum_gender', $item->gender);
            return ['id' => $item['id'], 'name' => $item['name'], 'gender' => $item['gender'], 'birthday' => $item['birthday']];
        });

        //get the action sheets

        $data['actionSheets'] = $employee->actionSheets->map(function ($item) {
            $item->action_at = \Carbon\Carbon::parse($item->action_at)->format('d/m/Y');
            $item->date_cleared = \Carbon\Carbon::parse($item->date_cleared)->format('d/m/Y');
            return ['id' => $item['id'], 'folio' => $item['folio'], 'action_at' => $item['action_at'], 'date_cleared' => $item['date_cleared']];
        });

        //get the addresses

        $data['addresses'] = $employee->addresses->map(function ($item) {
            $item->address_type = get_enum_value('enum_address_type', $item->address_type);
            $item->status = get_enum_value('enum_status', $item->status);
            return ['id' => $item['id'], 'address' => $item['address'], 'address_type' => $item['address_type'], 'status' => $item['status']];
        });

        //get the birth Particulars

        $data['birthParticulars'] = $employee->birthParticulars->map(function ($item) {
            $item->date = \Carbon\Carbon::parse($item->date)->format('d/m/Y');
            return ['id' => $item['id'], 'home_place' => $item['home_place'], 'proof' => $item['proof'], 'date' => $item['date']];
        });

        //get the censures

        $data['censures'] = $employee->censures->map(function ($item) {
            $item->date_recieved = \Carbon\Carbon::parse($item->date_recieved)->format('d/m/Y');
            $item->compiled_at = \Carbon\Carbon::parse($item->compiled_at)->format('d/m/Y');
            return ['id' => $item['id'], 'title' => $item['title'], 'summary' => $item['summary'], 'date_recieved' => $item['date_recieved'], 'compiled_at' => $item['compiled_at'], 'file_page_number' => $item['file_page_number']];
        });

        //get the certificates

        $data['certificates'] = $employee->certificates->map(function ($item) {
            $item->certificate_type_id = $item->certificateType->title;
            $item->status = get_enum_value('enum_status', $item->status);
            $item->date_obtained = \Carbon\Carbon::parse($item->date_obtained)->format('d/m/Y');
            $item->checked_at = \Carbon\Carbon::parse($item->checked_at)->format('d/m/Y');
            return ['id' => $item['id'], 'certificate_name' => $item['certificate_name'], 'type' => $item['certificate_type_id'], 'date_obtained' => $item['date_obtained'], 'status' => $item['status']];
            // return $item;
        });

        //get the educations

        $data['educations'] = $employee->educations->map(function ($item) {
            $item->checked_at = \Carbon\Carbon::parse($item->checked_at)->format('d/m/Y');
            $item->from_date = \Carbon\Carbon::parse($item->from_date)->format('d/m/Y');
            $item->to_date = \Carbon\Carbon::parse($item->to_date)->format('d/m/Y');
            // $item->qualification_type_id = $item->qualificationType->title;
            return ['id' => $item['id'], 'qualification' => $item['qualification'], 'school_name' => $item['school_name'], 'remark' => $item['remark']];
            // return $item;
        });

        //get the emoluments

        $data['emoluments'] = $employee->emoluments->map(function ($item) {
            $item->date_entry_made = \Carbon\Carbon::parse($item->date_entry_made)->format('d/m/Y');
            $item->salary_scale = $item->salaryScale->title;
            return ['id' => $item['id'], 'date_entry_made' => $item['date_entry_made'], 'salary_scale' => $item['salary_scale'], 'basic_salary_pa' => $item['basic_salary_pa'], 'inducement_pay_pa' => $item['inducement_pay_pa']];
            // return $item;
        });

        $data['ranks'] = $employee->ranks->map(function ($item) {
            $item->employee_id = $item->employee->getFullName();
            $item->rank_type_id = $item->rankType->description;
            $item->status = get_enum_value('enum_status', $item->status);
            return ['id' => $item['id'], 'rank_type_id' => $item['rank_type_id'], 'employee_id' => $item['employee_id'], 'status' => $item['status']];
            // return $item;
        });


        //get the forceServices

        $data['forceServices'] = $employee->forceServices->map(function ($item) {
            return ['id' => $item['id'], 'area_of_service' => $item['area_of_service'], 'service_no' => $item['service_no'], 'last_unit' => $item['last_unit'], 'reason_for_leaving' => $item['reason_for_leaving'], 'remark' => $item['remark']];
        });

        //get the foreignTours

        $data['foreignTours'] = $employee->foreignTours->map(function ($item) {
            $item->from_date = \Carbon\Carbon::parse($item->from_date)->format('d/m/Y');
            $item->to_date = \Carbon\Carbon::parse($item->to_date)->format('d/m/Y');
            $item->status = get_enum_value('enum_status', $item->status);
            $item->leave_type_id = $item->leaveType->title;
            return ['id' => $item['id'], 'leave_type_id' => $item['leave_type_id'], 'from_date' => $item['from_date'], 'to_date' => $item['to_date'], 'status' => $item['status'], 'remark' => $item['remark']];
            // return $item;
        });

        //get the gratuities

        $data['gratuities'] = $employee->gratuities->map(function ($item) {
            $item->from_date = \Carbon\Carbon::parse($item->from_date)->format('d/m/Y');
            $item->to_date = \Carbon\Carbon::parse($item->to_date)->format('d/m/Y');
            $item->payment_date = \Carbon\Carbon::parse($item->payment_date)->format('d/m/Y');
            $item->status = get_enum_value('enum_status', $item->status);
            return ['id' => $item['id'], 'file_page_no' => $item['file_page_no'], 'from_date' => $item['from_date'], 'to_date' => $item['to_date'], 'status' => $item['status'], 'remark' => $item['remark'], 'payment_date' => $item['payment_date']];
        });

        //get the languages
        $data['languages'] = $employee->languages->map(function ($item) {
            $item->speaking_fluency = get_enum_value('enum_fluency', $item->speaking_fluency);
            $item->writing_fluency = get_enum_value('enum_fluency', $item->writing_fluency);
            $item->language_id = $item->language->title;
            return ['id' => $item['id'], 'language_id' => $item['language_id'], 'writing_fluency' => $item['writing_fluency'], 'speaking_fluency' => $item['speaking_fluency']];
            // return $item;
        });

        //get the localLeaves

        $data['localLeaves'] = $employee->localLeaves->map(function ($item) {
            $item->from_date = \Carbon\Carbon::parse($item->from_date)->format('d/m/Y');
            $item->to_date = \Carbon\Carbon::parse($item->to_date)->format('d/m/Y');
            $item->leave_type_id = $item->leaveType->title;
            return ['id' => $item['id'], 'no_of_days' => $item['no_of_days'], 'file_page_no' => $item['file_page_no'], 'leave_type_id' => $item['leave_type_id'], 'from_date' => $item['from_date'], 'to_date' => $item['to_date']];
            // return $item;
        });

        $data['services'] = $employee->services->map(function ($item) {
            // $item->present_department = get_enum_value('enum_department', $item->present_department);
            $item->status = get_enum_value('enum_status', $item->status);
            // $item->zone = get_enum_value('enum_zone', $item->zone);
            $item->state = $item->state;
            $item->present_station = $item->present_station;
            return ['id' => $item->id, 'present_department' => $item->present_department, 'status' => $item->status, 'zone' => $item->zone, 'state' => $item->state, 'region' => $item->region, 'location' => $item->location];
            // return $item;
        });

        //get the service records

        $data['serviceRecords'] = $employee->serviceRecords->map(function ($item) {
            $item->date_of_entry_made = \Carbon\Carbon::parse($item->date_of_entry_made)->format('d/m/Y');
            $item->certified_by = $item->certifiedBy->name;
            return ['id' => $item['id'], 'date of entry made' => $item['date_of_entry_made'], 'detail' => $item['detail']];
            // return $item;
        });

        //get the nextOfKins

        $data['nextOfKins'] = $employee->nextOfKins->map(function ($item) {
            return ['id' => $item['id'], 'name' => $item['name'], 'address' => $item['address'], 'phone' => $item['phone'], 'relationship' => $item->relationship->title];
            // return $item;
        });

        //get the publicServices

        $data['publicServices'] = $employee->publicServices->map(function ($item) {
            $item->from_date = \Carbon\Carbon::parse($item->from_date)->format('d/m/Y');
            $item->to_date = \Carbon\Carbon::parse($item->to_date)->format('d/m/Y');
            return ['id' => $item['id'], 'employer_name' => $item['employer_name'], 'from_date' => $item['from_date'], 'to_date' => $item['to_date'], 'file_page_ref' => $item['file_page_ref']];
        });

        //get the qualifications

        $data['qualifications'] = $employee->qualifications->map(function ($item) {
            $item->qualification_type_id = $item->qualificationType->title;
            $item->status = get_enum_value('enum_status', $item->status);
            $item->date_obtained = \Carbon\Carbon::parse($item->date_obtained)->format('d/m/Y');
            return ['id' => $item['id'], 'qualification_name' => $item['qualification_name'], 'type' => $item['qualification_type_id'], 'date_obtained' => $item['date_obtained'], 'status' => $item['status']];
            // return $item;
        });

        //get the recordTrackers

        $data['recordTrackers'] = $employee->recordTrackers->map(function ($item) {
            $item->status = get_enum_value('enum_status', $item->status);
            $item->has_profile = get_enum_value('enum_yes_no', $item->has_profile);
            $item->has_education = get_enum_value('enum_yes_no', $item->has_education);
            return ['id' => $item['id'], 'status' => $item['status'], 'has_profile' => $item['has_profile'], 'has_education' => $item['has_education'], 'remark' => $item['remark']];
        });

        //get the terminations

        $data['terminations'] = $employee->terminations->map(function ($item) {
            $item->termination_id = $item->termination_type->title;
            $item->even_date = \Carbon\Carbon::parse($item->date)->format('d/m/Y');
            $item->is_pensionable = get_enum_value('enum_yes_no', $item->is_pensionable);
            return ['id' => $item->id, 'termination_id' => $item['termination_id'], 'date' => $item['date'], 'is_pensionable' => $item['is_pensionable'], 'pension_amount' => $item['pension_amount']];
            // return $item;
        });

        //get the spouse

        $data['spouse'] = $employee->spouse->map(function ($item) {
            $item->spouse_birthdate = \Carbon\Carbon::parse($item->spouse_birthdate)->format('d/m/Y');
            $item->marriage_date = \Carbon\Carbon::parse($item->marriage_date)->format('d/m/Y');
            return ['id' => $item['id'], 'spouse_name' => $item['spouse_name'], 'spouse_birthdate' => $item['spouse_birthdate'], 'marriage_date' => $item['marriage_date'], 'remark' => $item['remark']];
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
        if (!check_permission('employees-edit')) {
            Flash::error('Permission Denied');
            return redirect()->back();
        }
        /** @var Employee $employee */
        $employee = Employee::find($id);

        if (empty($employee)) {
            Flash::error('Employee not found');

            return redirect(route('humanresource.employees.index'));
        }
        Session::put('employee_id', $employee->id);
        $countries = new Country;
        $geo_political_zones = new GeoPoliticalZone;
        $states = new State;
        $senatorial_zones = new SenatorialZone;
        $local_govt_areas = new LocalGovtArea;
        $rank_types = new RankType;
        return view('humanresource.employees.edit', compact('countries', 'geo_political_zones', 'states', 'senatorial_zones', 'local_govt_areas', 'rank_types'))->with('employee', $employee);
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
        if (!check_permission('employees-edit')) {
            Flash::error('Permission Denied');
            return redirect()->back();
        }
        /** @var Employee $employee */
        $employee = Employee::find($id);

        if (empty($employee)) {
            Flash::error('Employee not found');

            return redirect(route('humanresource.employees.index'));
        }


        $input = $request->all();
        if ($input['middle_name'] == '') {
            $input['staff_code'] = $input['first_name'] . '_' . $input['last_name'] . '_' . $input['service_number'];
        } else {
            $input['staff_code'] = $input['first_name'] . '_' . $input['middle_name'] . '_' . $input['last_name'] . '_' . $input['service_number'];
        }

        if ($request->hasFile('profile_picture')) {
            $employee->fill($this->saveFile($input));
        } else {
            $employee->fill($input);
        }

        $description = '';
        $changed_values = $employee->getDirty();

        foreach ($changed_values as $key => $new) {

            $original = $employee->getOriginal($key);
            $old_value = $original;
            $new_value = $new;

            if ($original == $new) {
                continue;
            }

            switch ($key) {
                case 'updated_at':
                    continue 2;
                case 'staff_code':
                    continue 2;
                case 'cadre':
                    if ($original == null && $new == null) {
                        continue 2;
                    }
                    break;
                case 'gender':
                    $old_value = get_enum_value('enum_gender', $original);
                    $new_value = get_enum_value('enum_gender', $new);
                    break;

                case 'religion':
                    $old_value = get_enum_value('enum_religion', $original);
                    $new_value = get_enum_value('enum_religion', $new);
                    break;

                case 'marital_status_id':
                    $old_value = get_enum_value('enum_marital_status', $original);
                    $new_value = get_enum_value('enum_marital_status', $new);
                    break;

                case 'state_of_origin':
                    $state = State::find($original);
                    $old_value = "";
                    if(!empty($state)) {
                        $old_value = $state->title;
                    }
                    $new_value = State::find($new)->title;
                    break;

                case 'nationality':
                    $nationality = Country::find($original);
                    $old_value = "";
                    if(!empty($nationality)) {
                        $old_value = $nationality->title;
                    }
                    $new_value = Country::find($new)->title;
                    break;

                case 'local_govt_area':
                    $local_govt_area = LocalGovtArea::find($original);
                    $old_value = "";
                    if(!empty($local_govt_area)) {
                        $old_value = $local_govt_area->title;
                    }
                    $new_value = LocalGovtArea::find($new)->title;
                    break;

                case 'geo_political_zone':
                    $geo_political_zone = GeoPoliticalZone::find($original);
                    $old_value = "";
                    if(!empty($geo_political_zone)) {
                        $old_value = $geo_political_zone->title;
                    }
                    $new_value = GeoPoliticalZone::find($new)->title;
                    break;

                case 'senatorial_zone':
                    $senatorial_zone = SenatorialZone::find($original);
                    $old_value = "";
                    if(!empty($senatorial_zone)) {
                        $old_value = $senatorial_zone->title;
                    }

                    $new_value = SenatorialZone::find($new)->title;
                    break;

                case 'gl':
                    $old_value = get_enum_value('enum_grade_level', $original);
                    $new_value = get_enum_value('enum_grade_level', $new);
                    break;
                case 'status':
                    $old_value = get_enum_value('enum_employee_status', $original);
                    $new_value = get_enum_value('enum_employee_status', $new);
                    break;
            }

            $key_readable = str_replace('_', ' ', $key);
            $key_readable = str_replace('Id', ' ', $key_readable);
            $key_readable = ucwords($key_readable);
            $employee_name = '';

            if ($employee->getOriginal('middle_name') == '') {
                $employee_name = $employee->getOriginal('first_name') . ' ' . $employee->getOriginal('last_name');
            } else {
                $employee_name = $employee->getOriginal('first_name') . ' ' . $employee->getOriginal('middle_name') . ' ' . $employee->getOriginal('last_name');
            }

            if (isset($employee->currentRank)) {
                $description .= $key_readable . ' of ' . $employee->currentRank->title . ' ' . $employee_name . ' from ' . $old_value . ' to ' . $new_value .  ', ';
            } else {
                $description .= $key_readable . ' of ' . 'no rank set ' . ' ' . $employee_name . ' from ' . $old_value . ' to ' . $new_value .  ', ';
            }
        }

        $employee->save();

        $employee_ranks = EmployeeRank::where('employee_id', '=', $employee->id)->get();
        foreach ($employee_ranks as $employee_rank) {
            $employee_rank['employee_gender'] = $employee->gender;
            $employee_rank->save();
        }

        $files = $employee->fileDirectories;
        $locaLeaves = $employee->localLeaves;
        $foreignTours = $employee->foreignTours;
        $ranks = $employee->ranks;

        if ($employee->status == 0) {

            foreach ($files as $file) {
                $file->status = 0;
                $file->save();
            }

            foreach ($locaLeaves as $locaLeave) {
                $locaLeave->status = 0;
                $locaLeave->save();
            }

            foreach ($foreignTours as $foreignTour) {
                $foreignTour->status = 0;
                $foreignTour->save();
            }

            foreach ($ranks as $rank) {
                $rank->status = 0;
                $rank->save();
            }
        }

        else {
            $files = $employee->fileDirectories;
            $locaLeaves = $employee->localLeaves;
            $foreignTours = $employee->foreignTours;
            $ranks = $employee->ranks;

            foreach ($files as $file) {
                $file->status = 1;
                $file->save();
            }

            foreach ($locaLeaves as $locaLeave) {
                $locaLeave->status = 1;
                $locaLeave->save();
            }

            foreach ($foreignTours as $foreignTour) {
                $foreignTour->status = 1;
                $foreignTour->save();
            }

            foreach ($ranks as $rank) {
                $rank->status = 1;
                $rank->save();
            }
        }

        if ($changed_values != []) {
            add_employee_audit($description . ' on ' . date("F jS, Y") . '.');
        }


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
        if (!check_permission('employees-destroy')) {
            Flash::error('Permission Denied');
            return redirect()->back();
        }
        /** @var Employee $employee */
        $employee = Employee::find($id);

        if (empty($employee)) {
            Flash::error('Employee not found');

            return redirect(route('humanresource.employees.index'));
        }

        $profile_picture = str_replace('storage/', 'public/', $employee->profile_picture);
        Storage::delete($profile_picture);
        $this->deleteEmployeeRecords($employee);
        $employee->delete();

        add_audit('delete', 'Employee');

        Flash::success('Employee deleted successfully.');

        return redirect(route('humanresource.employees.index'));
    }

    public function destroyMany(Request $request)
    {

        if (!check_permission('employees-destroy')) {
            Flash::error('Permission Denied');
            return redirect()->back();
        }

        $ids = $request['selected_employees'];
        $ids_array = explode(',', $ids);
        foreach ($ids_array as $id) {
            /** @var Employee $employee */
            $employee = Employee::find($id);

            if (empty($employee)) {
                continue;
            }

            $profile_picture = str_replace('storage/', 'public/', $employee->profile_picture);
            Storage::delete($profile_picture);
            $this->deleteEmployeeRecords($employee);
            $employee->delete();
        }

        add_audit('delete', 'Many Employees');

        Flash::success('Employees deleted successfully.');

        return redirect(route('humanresource.employees.index'));
    }

    public function editManyView(Request $request) {

        if (!check_permission('employees-edit')) {
            Flash::error('Permission Denied');
            return redirect()->back();
        }

        $ids = $request['selected_employees_edit'];
        $rank_types = new RankType;

        return view('humanresource.employees.multiple_edit', compact('ids', 'rank_types'));

    }

    public function editMany(Request $request)
    {

        if (!check_permission('employees-edit')) {
            Flash::error('Permission Denied');
            return redirect()->back();
        }

        $input = $request->all();
        $ids = $input['ids'];
        $ids_array = explode(',', $ids);
        $status = $input['status'];
        $rank = $input['rank_type_id'];

        $rank_type = RankType::find($rank);

        foreach ($ids_array as $id) {
            /** @var Employee $employee */
            $employee = Employee::find($id);

            if (empty($employee)) {
                continue;
            }

            if($rank != null) {
                $employee_ranks = $employee->ranks;
                foreach ($employee_ranks as $rank) {
                    $rank->status = 0;
                    $rank->save();
                }
                EmployeeRank::create([
                    'employee_id' => $id,
                    'status' => 1,
                    'rank_type_id' => $rank,
                    'type' => $rank_type->type,
                    'employee_gender' => $employee->gender
                ]);

                $employee->current_rank = $rank_type->id;
                $employee->save();
            }

            $files = $employee->fileDirectories;
            $locaLeaves = $employee->localLeaves;
            $foreignTours = $employee->foreignTours;
            $ranks = $employee->ranks;
            if($status == 0) {

                foreach ($files as $file) {
                    $file->status = 0;
                    $file->save();
                }

                foreach ($locaLeaves as $locaLeave) {
                    $locaLeave->status = 0;
                    $locaLeave->save();
                }

                foreach ($foreignTours as $foreignTour) {
                    $foreignTour->status = 0;
                    $foreignTour->save();
                }

                foreach ($ranks as $rank) {
                    $rank->status = 0;
                    $rank->save();
                }
            }

            else {
                foreach ($files as $file) {
                    $file->status = 1;
                    $file->save();
                }

                foreach ($locaLeaves as $locaLeave) {
                    $locaLeave->status = 1;
                    $locaLeave->save();
                }

                foreach ($foreignTours as $foreignTour) {
                    $foreignTour->status = 1;
                    $foreignTour->save();
                }

                foreach ($ranks as $rank) {
                    $rank->status = 1;
                    $rank->save();
                }
            }
            $employee->save();
        }

        add_audit('delete', 'Many Employees');

        Flash::success('Employees edited successfully.');

        return redirect(route('humanresource.employees.index'));
    }

    public function saveFile($input)
    {

        $staff_code = $input['staff_code'];

        $file = $input['profile_picture'];

        $file_type = 'profile_picture';


        $file_name = now()->timestamp . '_' . $staff_code . '_' . $file_type;

        $input['file_name'] = $file_name;


        $input['profile_picture'] = $this->Upload($file, $file_name, $staff_code, $file_type);;

        return $input;
    }

    public function report()
    {
        if (!check_permission('employees-report')) {
            Flash::error('Permission Denied');
            return redirect()->back();
        }
        $id = session('employee_id');
        /** @var Employee $employee */
        $employee = Employee::find($id);

        // dd($data['children']);


        if (empty($employee)) {
            Flash::error('Employee not found');

            return redirect(route('humanresource.employees.index'));
        }



        add_audit('generate', 'Employee report');

        return view('humanresource.employees.record_of_service', compact('employee'));
    }

    public function import(Request $request)
    {
        if (!check_permission('employees-import')) {
            Flash::error('Permission Denied');
            return redirect()->back();
        }

        if (!isset($request->upload)) {
            Flash::error('Please insert an excel file.');
            return redirect()->back();
        }

        $file = $request->upload;
        (new EmployeesImport)->import($file);

        Flash::success('Employees saved successfully.');
        add_audit('importe', 'Employee Data');

        return redirect(route('humanresource.employees.index'));
    }

    public function deleteEmployeeRecords($employee)
    {
        $employee->actionSheets()->delete();
        $employee->addresses()->delete();
        $employee->censures()->delete();
        $employee->certificates()->delete();
        $employee->children()->delete();
        $employee->educations()->delete();
        $employee->forceServices()->delete();
        $employee->foreignTours()->delete();
        $employee->gratuities()->delete();
        $employee->languages()->delete();
        $employee->localLeaves()->delete();
        $employee->nextOfKins()->delete();
        $employee->publicServices()->delete();
        $employee->qualifications()->delete();
        $employee->ranks()->delete();
        $employee->recordTrackers()->delete();
        $employee->services()->delete();
        $employee->terminations()->delete();
        $employee->spouse()->delete();
        $employee->fileDirectories()->delete();
    }
}
