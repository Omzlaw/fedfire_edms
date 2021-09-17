<?php

namespace App\Imports;

use Carbon\Carbon;
use Laracasts\Flash\Flash;
use Maatwebsite\Excel\Row;
use Illuminate\Support\Str;
use App\Models\Shared\State;
use App\Models\Shared\RankType;
use Illuminate\Validation\Rule;
use App\Models\Shared\LocalGovtArea;
use Illuminate\Validation\Validator;
use App\Models\Humanresource\Employee;
use App\Models\Shared\GeoPoliticalZone;
use Maatwebsite\Excel\Concerns\ToModel;
use App\Models\Shared\QualificationType;
use Maatwebsite\Excel\Concerns\OnEachRow;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;


class EmployeesImport implements OnEachRow, WithHeadingRow, WithValidation, withEvents, SkipsEmptyRows
{
    use Importable;
    
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */

    // public function model(array $row)
    // {

    //     // dd($row);
    //     return new Employee([
    //         'title' => $row['title'],
    //         'description' => $row['description'],
    //         'status' => $row['status'],

    //     ]);
    // }

    public function onRow(Row $row)
    {
        $rowIndex = $row->getIndex();
        $row      = $row->toArray();
        // dd($row);

        // Validator::make($row, [
        //     'email' => 'required',
        //     'phone' => 'required',
        //     'service_number' => 'required',
        //     'email' => 'unique:employees',
        //     'phone' => 'unique:employees',
        //     'service_number' => 'unique:employees',
        // ])->validate();

        // dd($row);

        $gender_in_excel = strtolower($row['sex']);
        $gender_id = 0;
        $genders = enum_gender();
        foreach ($genders as $key => $gender) {
            if (strtolower($gender) === $gender_in_excel) {
                $gender_id = $key;
            }
        }

        $state_in_excel = $row['state_of_origin'];
        $state_id = 0;
        $states = State::all();
        foreach ($states as $state) {
            if (Str::contains($state->title, $state_in_excel) === true) {
                $state_id = $state->id;
            }
        }

        $lga_in_excel = $row['lga'];
        $lga_id = 0;
        $lgas = LocalGovtArea::all();
        foreach ($lgas as $lga) {
            if (Str::contains($lga->title, $lga_in_excel) === true) {
                $lga_id = $lga->id;
            }
        }

        $region_in_excel = $row['region'];
        $region_id = 0;
        $regions = GeoPoliticalZone::all();
        foreach ($regions as $region) {
            if (Str::contains($region->title, $region_in_excel) === true) {
                $region_id = $region->id;
            }
        }

        $rank_in_excel = strtolower($row['rank']);
        $rank_id = 0;
        $rank_types = RankType::all();
        foreach ($rank_types as $rank_type) {
            if (strtolower($rank_type->title) === $rank_in_excel) {
                $rank_id = $rank_type->id;
            }
        }

        $qualification_type_in_excel = $row['qualification_at_the_point_of_entry'];
        $qualification_type_id = 0;
        $qualification_type_in_excel_2 = $row['additional_qualification'];
        $qualification_type_id_2 = 0;
        $qualification_types = QualificationType::all();
        foreach ($qualification_types as $qualification_type) {
            if (Str::contains($qualification_type->title, $qualification_type_in_excel) === true) {
                $qualification_type_id = $qualification_type->id;
            }
            if (Str::contains($qualification_type->title, $qualification_type_in_excel_2) === true) {
                $qualification_type_id_2 = $qualification_type->id;
            }
        }


        $religion_in_excel = $row['religion'];
        $religion_id = 0;
        $religions = enum_religion();
        foreach ($religions as $key => $religion) {
            if (Str::contains($religion, $religion_in_excel) === true) {
                $religion_id = $key;
            }
        }

        $marital_status_in_excel = $row['marital_status'];
        $marital_status_id = 0;
        $marital_statuses = enum_marital_status();
        foreach ($marital_statuses as $key => $marital_status) {
            if (Str::contains($marital_status, $marital_status_in_excel) === true) {
                $marital_status_id = $key;
            }
        }

        $type_of_appointment_in_excel = $row['type_of_appointment'];
        $type_of_appointment_id = 1;
        $type_of_appointments = enum_type_of_appointment();
        foreach ($type_of_appointments as $key => $type_of_appointment) {
            if (Str::contains($type_of_appointment, $type_of_appointment_in_excel) === true) {
                $type_of_appointment_id = $key;
            }
        }

        $present_department_in_excel = $row['present_department'];
        $present_department_id = 1;
        $departments = enum_department();
        foreach ($departments as $key => $department) {
            if (Str::contains($department, $present_department_in_excel) === true) {
                $present_department_id = $key;
            }
        }

        $zone_in_excel = $row['zone'];
        $zone_id = 1;
        $zones = enum_zone();
        foreach ($zones as $key => $zone) {
            if (Str::contains($zone, $zone_in_excel) === true) {
                $zone_id = $key;
            }
        }

        $residential_address = $row['residential_address'];
        $permanent_address = $row['permanent_home_address'];
        
        $name_breakdown = explode(' ', $row['name']);
        $staff_code = '';
        if(!isset($name_breakdown[1])){
            $staff_code = $name_breakdown[0] . '_' . $name_breakdown[2] . '_' . $row['service_number'];
        }
        else{
            $staff_code = $name_breakdown[0] . '_' . $name_breakdown[1] . '_' . $name_breakdown[2] . '_' . $row['service_number'];
        }
        $rows_with_errors = [];

        try {
            $employee = Employee::firstOrCreate([
                'first_name' => isset($name_breakdown[0]) ? $name_breakdown[0] : 'null',
                'middle_name' => isset($name_breakdown[1]) ? $name_breakdown[1] : '',
                'last_name' => isset($name_breakdown[2]) ? $name_breakdown[2] : '',
                'gender' => $gender_id,
                'religion' => $religion_id,
                'marital_status_id' => $marital_status_id,
                'birthdate' => Carbon::parse($row['date_of_birth']),
                'state_of_origin' => $state_id,
                'local_govt_area' => $lga_id,
                'phone' => $row['phone'],
                'email' => $row['e_mail'],
                'service_number' => $row['service_number'],
                'date_of_first_appointment' => Carbon::parse($row['date_of_first_appointment']),
                'assumption_of_duty_date' => Carbon::parse($row['assumption_of_duty_date']),
                'date_of_confirmation' => Carbon::parse($row['date_of_confirmation']),
                'date_of_present_appointment' => Carbon::parse($row['date_of_present_appt']),
                'staff_code' => $staff_code,
                'gl' => $row['gl'],
                'type_of_appointment' => $type_of_appointment_id
            ]);

            $rank = RankType::find($rank_id);
            $employee->ranks()->create([
                'rank_type_id' => $rank_id,
                'status' => 1,
                'employee_gender' => $gender_id,
                'type' => $rank->type
            ]);
            $employee->nextOfKins()->create([
                'name' => $row['next_of_kin'],
                'phone' => $row['nok_phone']
            ]);
            $employee->educations()->create([
                'school_name' => $row['awarding_institution_1'],
                'qualification_type_id' => $qualification_type_id,
                'to_date' => Carbon::parse($row['year_1'])
            ]);
            $employee->educations()->create([
                'school_name' => $row['awarding_institution_2'],
                'qualification_type_id' => $qualification_type_id_2,
                'to_date' => Carbon::parse($row['year_2'])
            ]);
            $employee->addresses()->create([
                'address' => $residential_address,
                'address_type' => 1
            ]);
            $employee->addresses()->create([
                'address' => $permanent_address,
                'address_type' => 0
            ]);
            $employee->services()->create([
                'location' => $row['location'],
                'present_department' => $present_department_id,
                'zone' => $zone_id,
                'status' => 1,
                'region' => $region_id,
                'state' => $row['state'],
                'present_station' => $row['present_station'],
            ]);
        }


        catch (\Exception $e) {
            $rows_with_errors[] = $rowIndex;
            return Flash::error('Row ' . $rowIndex . ': Ensure there is no duplicate Service Number, Email and Phone number');
        }
    
    }

    /**
     * @return string|array
     */
    public function uniqueBy()
    {
        return 'service_number';
    }

    public function registerEvents(): array
    {
        return [

        ];
    }

    public function rules(): array
    {
        return [
            // 'email' => [
            //     'unique:employees',
            //     'required',
            // ],
            // 'phone' => [
            //     'unique:employees',
            //     'required',
            // ],
            // 'service_number' => [
            //     'unique:employees',
            //     'required',
            // ]
        ];
    }
}
