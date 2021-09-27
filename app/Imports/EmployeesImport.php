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
use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;
use Maatwebsite\Excel\Concerns\WithProgressBar;

class EmployeesImport implements OnEachRow, WithHeadingRow, WithValidation, withEvents, SkipsEmptyRows, WithCalculatedFormulas, WithProgressBar
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
        ini_set('max_execution_time', 600);

        $rowIndex = $row->getIndex() - 1;
        $row      = $row->toArray();


        try {

            try {
                $file_no = $row['file_no'];
            } catch (\Exception $e) {
                return Flash::error('Row ' . $rowIndex . ': Ensure the file number is unique and has the right format');
            }

            try {
                $ippis = $row['ippis'];
            } catch (\Exception $e) {
                return Flash::error('Row ' . $rowIndex . ': Ensure the IPPIS number is unique and has the right format');
            }

            $name_breakdown = explode(' ', $row['name']);
            $staff_code = '';
            try {
                if (!isset($name_breakdown[2])) {
                    $staff_code = $name_breakdown[0] . '_' . $name_breakdown[1] . '_' . $row['file_no'];
                } else {
                    $staff_code = $name_breakdown[0] . '_' . $name_breakdown[1] . '_' . $name_breakdown[2] . '_' . $row['file_no'];
                }
            } catch (\Exception $e) {
                return Flash::error('Row ' . $rowIndex . ': Ensure data in the name field is formatted correctly');
            }


            $gender_in_excel = strtolower($row['sex']);
            $gender_id = 0;
            // $genders = enum_gender();
            if(Str::contains($gender_in_excel, 'female')){
                $gender_id = 0;
            }
            else if(Str::contains($gender_in_excel, 'male') && strlen($gender_in_excel < 5)) {
                $gender_id = 1;
            }
            else {
                // return Flash::error('Row ' . $rowIndex . ': Please insert a valid gender');
                $gender_id = 1;
            }
            // foreach ($genders as $key => $gender) {
            //     if (strtolower($gender) == $gender_in_excel) {
            //         $gender_id = $key;
            //     }
            // }

            $rank_in_excel = strtolower($row['rank']);
            $rank_id = 1;
            $rank_types = RankType::all();
            foreach ($rank_types as $rank_type) {
                if (strtolower($rank_type->title) === $rank_in_excel) {
                    $rank_id = $rank_type->id;
                }
            }

            $gl_in_excel = strtolower($row['gl']);
            $gl_id = 1;
            $gls = enum_grade_level();
            foreach ($gls as $key => $gl) {
                if (strtolower($gl) === $gl_in_excel) {
                    $gl_id = $key;
                }
            }

            try {
                $date_of_first_appointment = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['dofa']);
            } catch (\Exception $e) {
                return Flash::error('Row ' . $rowIndex . ': Ensure data in the DOFA field is formatted correctly');
            }

            try {
                $date_of_present_appointment = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['dopa']);
            } catch (\Exception $e) {
                return Flash::error('Row ' . $rowIndex . ': Ensure data in the DOFA field is formatted correctly');
            }

            $cadre = $row['cadre'];

            $present_department_in_excel = strtolower($row['present_department']);
            $present_department_id = 1;
            $departments = enum_department();
            foreach ($departments as $key => $department) {
                if (Str::contains(strtolower($department), $present_department_in_excel) === true) {
                    $present_department_id = $key;
                }
            }

            $location = $row['location'];

            $state_of_service = $row['state'];

            $zone_in_excel = strtolower($row['zone']);
            $zone_id = 1;
            $zones = enum_zone();
            foreach ($zones as $key => $zone) {
                if (Str::contains(strtolower($zone), $zone_in_excel) === true) {
                    $zone_id = $key;
                }
            }

            $entry_qualification = $row['entry_qualification'];

            $additional_qualification = $row['additional_qualification'];

            try {
                $date_of_birth = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['date_of_birth']);
            } catch (\Exception $e) {
                return Flash::error('Row ' . $rowIndex . ': Ensure data in the Date of Birth field is formatted correctly');
            }

            $state_in_excel = strtolower($row['state_of_origin']);
            $state_id = 0;
            $states = State::where('country_id', '=',  160)->get();
            foreach ($states as $state) {
                if (Str::contains(strtolower($state->title), $state_in_excel) === true) {
                    $state_id = $state->id;
                }
            }

            $lga_in_excel = strtolower($row['lg']);
            $lga_id = 0;
            $lgas = LocalGovtArea::all();
            foreach ($lgas as $lga) {
                if (strtolower($lga->title) === $lga_in_excel) {
                    $lga_id = $lga->id;
                }
            }

            $phone = $row['phone'];

            $email = $row['e_mail'];

            try {
                $retirement_date_by_dofa = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['retirement_date_by_dofa']);
            } catch (\Exception $e) {
                return Flash::error('Row ' . $rowIndex . ': Ensure data in the Retirement Date By DOFA field is formatted correctly');
            }

            try {
                $retirement_date_by_dob = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['retirement_date_by_dob']);
            } catch (\Exception $e) {
                return Flash::error('Row ' . $rowIndex . ': Ensure data in the Retirement Date By DOB field is formatted correctly');
            }

            $retirement_year_by_dob = date_format($retirement_date_by_dob, "Y");
            $no_of_years_remained_by_dob = $row['no_of_years_remained_by_dob'];
            $no_of_years_remained_by_dofa = $row['no_of_years_remained_by_dofa'];

            // dd($retirement_year_by_dob);
            try {
                $employee = Employee::firstOrCreate([
                    'first_name' => isset($name_breakdown[0]) ? $name_breakdown[0] : 'null',
                    'middle_name' => isset($name_breakdown[1]) ? $name_breakdown[1] : '',
                    'last_name' => isset($name_breakdown[2]) ? $name_breakdown[2] : '',
                    'gender' => $gender_id,
                    'birthdate' => $date_of_birth,
                    'state_of_origin' => $state_id,
                    'local_govt_area' => $lga_id,
                    'phone' => $phone,
                    'email' => $email,
                    'service_number' => $file_no,
                    'date_of_first_appointment' => $date_of_first_appointment,
                    'date_of_present_appointment' => $date_of_present_appointment,
                    'staff_code' => $staff_code,
                    'gl' => $gl_id,
                    'retirement_date_by_dob' => $retirement_date_by_dob,
                    'retirement_year_by_dob' => $retirement_year_by_dob,
                    'no_of_years_remained_by_dob' => $no_of_years_remained_by_dob,
                    'retirement_date_by_dofa' => $retirement_date_by_dofa,
                    'no_of_years_remained_by_dofa' => $no_of_years_remained_by_dofa,
                    'IPPIS' => $ippis,
                    'cadre' => $cadre,
                    'entry_qualification' => $entry_qualification,
                    'additional_qualification' => $additional_qualification
                ]);
            } catch (\Exception $e) {
                return Flash::error('Row ' . $rowIndex . ': Ensure there is no duplicate file number, IPPIS number, email and phone number. The data must be formatted correctly');
            }

            try {
                $rank = RankType::find($rank_id);
                $employee->ranks()->create([
                    'rank_type_id' => $rank_id,
                    'status' => 1,
                    'employee_gender' => $gender_id,
                    'type' => $rank->type
                ]);
                $employee['current_rank'] = $rank_id;
                $employee->save();
            } catch (\Exception $e) {
                return Flash::error('Row ' . $rowIndex . ': Ensure the rank data is formatted correctly and gender field is not empty');
            }

            try {
                $employee->educations()->create([
                    'qualification' => $entry_qualification,
                ]);
                if (isset($additional_qualification)) {
                    $employee->educations()->create([
                        'qualification' => $additional_qualification,
                    ]);
                }
            } catch (\Exception $e) {
                return Flash::error('Row ' . $rowIndex . ': Ensure the education data is formatted correctly and not empty.');
            }
            try {
                $employee->services()->create([
                    'location' => $location,
                    'present_department' => $present_department_id,
                    'zone' => $zone_id,
                    'status' => 1,
                    'state' => $state_of_service,
                ]);
            } catch (\Exception $e) {
                return Flash::error('Row ' . $rowIndex . ': Ensure the service record data is formatted correctly adn follows the sample format and the location field is not empty');
            }
        } catch (\Exception $e) {
            return Flash::error('Row ' . $rowIndex . ': Ensure the row follows the sample format');
        }
    }

    /**
     * @return string|array
     */
    public function uniqueBy()
    {
        return 'file_no';
    }

    public function registerEvents(): array
    {
        return [];
    }

    public function rules(): array
    {
        return [];
    }
}
