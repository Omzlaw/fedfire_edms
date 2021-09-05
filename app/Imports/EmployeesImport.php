<?php

namespace App\Imports;

use Maatwebsite\Excel\Row;
use Illuminate\Support\Str;
use App\Models\Shared\State;
use Illuminate\Validation\Rule;
use App\Models\Shared\LocalGovtArea;
use Illuminate\Validation\Validator;
use App\Models\Humanresource\Employee;
use Maatwebsite\Excel\Concerns\ToModel;
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

        // Validator::make($row, [
        //     'email' => 'required',
        //     'phone' => 'required',
        //     'service_number' => 'required',
        //     'email' => 'unique:employees',
        //     'phone' => 'unique:employees',
        //     'service_number' => 'unique:employees',
        // ])->validate();

        // dd($row);

        $gender = $row['sex'];
        $gender_id = 0;
        if (Str::contains('Male', $gender) === true) {
            $gender_index = 1;
        }
        else {
            if(strlen($gender) > 4) {
                $gender_id = 0;
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
        $employee = Employee::firstOrCreate([
            'first_name' => isset($name_breakdown[0]) ? $name_breakdown[0] : 'null',
            'middle_name' => isset($name_breakdown[1]) ? $name_breakdown[1] : '',
            'last_name' => isset($name_breakdown[2]) ? $name_breakdown[2] : '',
            'gender' => $gender_id,
            'religion' => $religion_id,
            'marital_status_id' => $marital_status_id,
            'birthdate' => date("Y-m-d", $row['date_of_birth']),
            'state_of_origin' => $state_id,
            'local_govt_area' => $lga_id,
            'phone' => $row['phone'],
            'email' => $row['e_mail'],
            'service_number' => $row['service_number'],
            'date_of_first_appointment' => date("Y-m-d", $row['date_of_first_appointment']),
            'assumption_of_duty_date' => date("Y-m-d", $row['assumption_of_duty_date']),
            'date_of_confirmation' => date("Y-m-d", $row['date_of_confirmation']),
            'date_of_present_appointment' => date("Y-m-d", $row['date_of_present_appt']),
            'staff_code' => $staff_code,
            'gl' => $row['gl'],
            'type_of_appointment' => $type_of_appointment_id
        ]);
    
        // $employee->ranks()->create([

        // ]);
        // $employee->nextOfKins()->create([

        // ]);
        // $employee->educations()->create([

        // ]);
        $employee->addresses()->create([
            'address' => $residential_address,
            'address_type' => 1
        ]);
        $employee->addresses()->create([
            'address' => $permanent_address,
            'address_type' => 1
        ]);
        // $employee->services()->create([
            
        // ]);
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
