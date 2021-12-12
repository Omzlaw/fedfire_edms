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
        ini_set('max_execution_time', 10000);

        $rowIndex = $row->getIndex() - 1;
        $row      = $row->toArray();
        // dd($row);

        try {

            try {
                $file_no = trim($row['file_no']);
            } catch (\Exception $e) {
                return Flash::error('Row ' . $rowIndex . ': Ensure the file number is unique and has the right format');
            }

            try {
                $ippis = trim($row['ippis']);
            } catch (\Exception $e) {
                return Flash::error('Row ' . $rowIndex . ': Ensure the IPPIS number is unique and has the right format');
            }

            $name_breakdown = explode(' ', $row['name']);
            $staff_code = '';
            try {
                if (!isset($name_breakdown[2])) {
                    $staff_code = trim($name_breakdown[0]) . '_' . trim($name_breakdown[1]) . '_' . trim($row['file_no']);
                } else {
                    $staff_code = trim($name_breakdown[0]) . '_' . trim($name_breakdown[1]) . '_' . trim($name_breakdown[2]) . '_' . trim($row['file_no']);
                }
            } catch (\Exception $e) {
                return Flash::error('Row ' . $rowIndex . ': Ensure data in the name field is formatted correctly');
            }


            $gender_in_excel = trim($row['sex']);
            $gender_id = 0;
            // $genders = enum_gender();
            if(strcasecmp($gender_in_excel, 'female') == 0 ){
                $gender_id = 0;
            }
            else if(strcasecmp($gender_in_excel, 'male') == 0) {
                $gender_id = 1;
            }




            $gl_in_excel = trim($row['gl']);
            $gl_id = 1;
            $gls = enum_grade_level();
            foreach ($gls as $key => $gl) {
                if (strcasecmp(trim($gl), trim($gl_in_excel)) == 0) {
                    $gl_id = $key;
                }
            }

            try {
                $date_of_first_appointment = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject(trim($row['dofa']));
            } catch (\Exception $e) {
                // return Flash::error('Row ' . $rowIndex . ': Ensure data in the DOFA field is formatted correctly');
                $date_of_first_appointment = null;
            }

            try {
                $date_of_present_appointment = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject(trim($row['dopa']));
            } catch (\Exception $e) {
                // return Flash::error('Row ' . $rowIndex . ': Ensure data in the DOPA field is formatted correctly');
                $date_of_present_appointment = null;
            }

            $cadre = trim($row['cadre']);
            $present_department = trim($row['present_departmentunit']);

            // $present_department_in_excel = strtolower($row['present_departmentunit']);
            // $present_department_id = 1;
            // $departments = enum_department();
            // foreach ($departments as $key => $department) {
            //     // if (Str::contains(strtolower($department), $present_department_in_excel) === true) {
            //     //     $present_department_id = $key;
            //     // }
            //     if (strtolower($department) === $present_department_in_excel) {
            //         $present_department_id = $key;
            //     }
            // }

            $location = trim($row['location']);

            $state_of_service = trim($row['state']);
            $zone = trim($row['zone']);

            // $zone_in_excel = strtolower($row['zone']);
            // $zone_id = 1;
            // $zones = enum_zone();
            // foreach ($zones as $key => $zone) {
            //     if (Str::contains(strtolower($zone), $zone_in_excel) === true) {
            //         $zone_id = $key;
            //     }
            // }

            $entry_qualification = trim($row['entry_qualification']);

            $additional_qualification = trim($row['additional_qualification']);

            try {
                $date_of_birth = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject(trim($row['date_of_birth']));
            } catch (\Exception $e) {
                // return Flash::error('Row ' . $rowIndex . ': Ensure data in the Date of Birth field is formatted correctly');
                $date_of_birth = null;
            }

            $state_in_excel = trim($row['state_of_origin']);
            $state_id = 0;
            $states = State::where('country_id', '=',  160)->get();
            foreach ($states as $state) {
                if (strcasecmp(trim($state->title), trim($state_in_excel)) == 0) {
                    $state_id = $state->id;
                }
            }

            $lga_in_excel = trim($row['lga']);
            $lga_id = 0;
            if($state_id != null){
                $lgas = LocalGovtArea::where('state_id', $state_id)->get();
                foreach ($lgas as $lga) {
                    if (strcasecmp(trim($lga->title), trim($lga_in_excel)) == 0) {
                        $lga_id = $lga->id;
                    }
                }
            }
            else {
                $lgas = LocalGovtArea::all();
                foreach ($lgas as $lga) {
                    if (strcasecmp(trim($lga->title), trim($lga_in_excel)) == 0) {
                        $lga_id = $lga->id;
                    }
                }
            }

            $rank_in_excel = trim($row['rank']);
            // $rank_in_excel = str_replace(" ", "", $rank_in_excel);
            $rank_id = 1;
            $rank_types = RankType::all();
            foreach ($rank_types as $rank_type) {
                if (strcasecmp(trim($rank_type->title), trim($rank_in_excel)) == 0) {
                    $rank_id = $rank_type->id;
                }
            }
            $rank = RankType::find($rank_id);


            $phone = trim($row['phone']);

            $email = trim($row['e_mail']);

            // try {
            //     $retirement_date_by_dofa = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['retirement_date_by_dofa']);
            // } catch (\Exception $e) {
            //     return Flash::error('Row ' . $rowIndex . ': Ensure data in the Retirement Date By DOFA field is formatted correctly');
            // }

            // try {
            //     $retirement_date_by_dob = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['retirement_date_by_dob']);
            // } catch (\Exception $e) {
            //     return Flash::error('Row ' . $rowIndex . ': Ensure data in the Retirement Date By DOB field is formatted correctly');
            // }

            // $retirement_year_by_dob = date_format($retirement_date_by_dob, "Y");
            // $no_of_years_remained_by_dob = $row['no_of_years_remained_by_dob'];
            // $no_of_years_remained_by_dofa = $row['no_of_years_remained_by_dofa'];

            try {
                $state = State::find($state_id);
                $local_govt_area = LocalGovtArea::find($lga_id);

                $employee = Employee::firstOrCreate([
                    'first_name' => isset($name_breakdown[0]) ? $name_breakdown[0] : 'null',
                    'middle_name' => isset($name_breakdown[1]) ? $name_breakdown[1] : '',
                    'last_name' => isset($name_breakdown[2]) ? $name_breakdown[2] : '',
                    'gender' => $gender_id,
                    'date_of_birth' => $date_of_birth,
                    'state_of_origin' => $state_id,
                    'local_govt_area' => $lga_id,
                    'phone' => $phone,
                    'email' => $email,
                    'service_number' => $file_no,
                    'date_of_first_appointment' => $date_of_first_appointment,
                    'date_of_present_appointment' => $date_of_present_appointment,
                    'staff_code' => $staff_code,
                    'gl' => $gl_id,
                    // 'retirement_date_by_dob' => $retirement_date_by_dob,
                    // 'retirement_year_by_dob' => $retirement_year_by_dob,
                    // 'no_of_years_remained_by_dob' => $no_of_years_remained_by_dob,
                    // 'retirement_date_by_dofa' => $retirement_date_by_dofa,
                    // 'no_of_years_remained_by_dofa' => $no_of_years_remained_by_dofa,
                    'IPPIS' => $ippis,
                    'cadre' => $cadre,
                    'entry_qualification' => $entry_qualification,
                    'additional_qualification' => $additional_qualification,
                    'nationality' => 160,

                ]);

                if(isset($state)){
                    $employee['geo_political_zone'] = $state->geo_political_zone_id;
                    $employee->save();
                }
                if(isset($local_govt_area)){
                    $employee['senatorial_zone'] = $local_govt_area->senatorial_zone_id;
                    $employee->save();
                }



            } catch (\Exception $e) {
                return Flash::error('Row ' . $rowIndex . ': Ensure there is no duplicate file number and IPPIS number. The data must be formatted correctly');
            }



            try {
                $employee->ranks()->create([
                    'rank_type_id' => $rank_id,
                    'status' => 1,
                    'employee_gender' => $gender_id,
                    'type' => $rank->type
                ]);
                $employee['current_rank'] = $rank_id;
                $employee->save();
            } catch (\Exception $e) {
                // return Flash::error('Row ' . $rowIndex . ': Ensure the rank data is formatted correctly and gender field is not empty');
                return Flash::error('Row ' . $rowIndex . ': Ensure the rank data is formatted correctly and gender field is not empty');

            }

            try {
                // $employee->educations()->create([
                //     'qualification' => $entry_qualification,
                // ]);
                if (isset($additional_qualification)) {
                    $employee->educations()->create([
                        'qualification' => $entry_qualification,
                    ]);
                }
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
                    'present_department' => $present_department,
                    'zone' => $zone,
                    'status' => 1,
                    'state' => $state_of_service,
                ]);
            } catch (\Exception $e) {
                return Flash::error('Row ' . $rowIndex . ': Ensure the service record data is formatted correctly and follows the sample format');
            }

        } catch (\Exception $e) {
            return Flash::error( ' Row ' . $rowIndex . ': Ensure the row follows the sample format');
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
