<?php

namespace App\DataTables\Humanresource;

use Illuminate\Http\Request;
use Yajra\DataTables\Html\Button;
use Illuminate\Support\Facades\DB;
use App\Models\Humanresource\Employee;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Services\DataTable;
use App\Models\Humanresource\EmployeeRank;
use App\Models\Humanresource\EmployeeAddress;
use App\Models\Humanresource\EmployeeService;
use App\Models\Humanresource\EmployeeEducation;
use App\Models\Humanresource\EmployeeQualification;

class EmployeeDataTable extends DataTable
{

    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        $appointment_date_to = session('appointment_date_to');
        $appointment_date_from = session('appointment_date_from');

        if ($appointment_date_to != null && $appointment_date_from != null) {
            $query->whereBetween('first_appointment_date', [$appointment_date_from, $appointment_date_to]);
        } else if ($appointment_date_from != null) {
            $query->whereBetween('first_appointment_date', [$appointment_date_from, date("Y-m-d")]);
        }


        $dataTable = new EloquentDataTable($query);

        return $dataTable

            ->addIndexColumn()
            ->addColumn('select', 'humanresource.employees.checkbox')
            ->addColumn('name', function ($row) {
                return $row->getFullName();
            })
            ->addColumn('sex', function ($row) {
                return get_enum_value('enum_gender', $row->gender);
            })
            // ->addColumn('nationality', function ($row) {
            //     return $row->country->title;
            // })
            // ->addColumn('residential_address', function ($row) {
            //     $addressModel = EmployeeAddress::where('employee_id', '=', $row->id)
            //         ->where('address_type', '=', 1)
            //         ->where('status', '=',  1)->first();
            //     if (isset($addressModel)) {
            //         return $addressModel->address;
            //     }
            //     return '';
            // })
            // ->addColumn('permanent_home_address', function ($row) {
            //     $address_model = EmployeeAddress::where('employee_id', '=', $row->id)
            //         ->where('address_type', '=', 0)
            //         ->where('status', '=',  1)->first();
            //     if (isset($address_model)) {
            //         return $address_model->address;
            //     }
            //     return '';
            // })
            // ->addColumn('next_of_kin', function ($row) {
            //     if (isset($row->nextOfKins->first()->name)) {
            //         return $row->nextOfKins->first()->name;
            //     }
            //     return '';
            // })
            // ->addColumn('NOK_phone', function ($row) {
            //     if (isset($row->nextOfKins->first()->phone)) {
            //         return $row->nextOfKins->first()->phone;
            //     }
            //     return '';
            // })
            // ->addColumn('marital_status', function ($row) {
            //     return get_enum_value('enum_marital_status', $row->marital_status_id);
            // })
            ->addColumn('rank', function ($row) {
                $rank = EmployeeRank::where('employee_id', '=', $row->id)
                    ->where('status', '=', 1)->first();
                if (isset($rank)) {
                    return $rank->rankType->title;
                }
                return '';
            })
            // ->addColumn('religion', function ($row) {

            //     return get_enum_value('enum_religion', $row->religion);
            // })
            ->addColumn('state_of_origin', function ($row) {
                if (isset($row->stateOfOrigin->title)) {
                    return $row->stateOfOrigin->title;
                }
                return '';
            })
            // ->addColumn('type_of_appointment', function ($row) {
            //     if (isset($row->type_of_appointment)) {
            //         return get_enum_value('enum_type_of_appointment', $row->type_of_appointment);
            //     }
            //     return '';
            // })
            ->addColumn('gl', function ($row) {
                if (isset($row->gl)) {
                    return get_enum_value('enum_grade_level', $row->gl);
                }
                return '';
            })
            ->addColumn('LGA', function ($row) {
                if (isset($row->localGovtArea->title)) {
                    return $row->localGovtArea->title;
                }
                return '';
            })
            ->addColumn('entry_qualification', function ($row) {
                $education = EmployeeEducation::where('employee_id', '=', $row->id)
                    ->where('status', '=', 1)->first();
                if (isset($education)) {
                    return $education->qualification;
                }
                return '';
            })
            // ->addColumn('year', function ($row) {
            //     $education = EmployeeEducation::where('employee_id', '=', $row->id)
            //         ->where('status', '=', 1)->first();
            //     if (isset($education)) {
            //         return $education->to_date;
            //     }
            //     return '';
            // })
            // ->addColumn('awarding_institution', function ($row) {
            //     if (isset($row->educations->first()->school_name)) {
            //         return $row->educations->first()->school_name;
            //     }
            //     return '';
            // })
            ->addColumn('additional_qualification', function ($row) {
                $education = EmployeeEducation::where('employee_id', '=', $row->id)
                    ->where('status', '=', 1)->skip(1)->first();
                if (isset($education)) {
                    return $education->qualification;
                }
                return '';
            })
            // ->addColumn('year ', function ($row) {
            //     $education = EmployeeEducation::where('employee_id', '=', $row->id)
            //         ->where('status', '=', 1)->skip(1)->first();
            //     if (isset($education)) {
            //         return $education->to_date;
            //     }
            //     return '';
            // })
            // ->addColumn('awarding_institution ', function ($row) {
            //     if (isset($row->educations->skip(1)->first()->school_name)) {
            //         return $row->educations->skip(1)->first()->school_name;
            //     }
            //     return '';
            // })
            ->addColumn('present_department', function ($row) {
                $service = EmployeeService::where('employee_id', '=', $row->id)
                    ->where('status', '=', 1)->first();
                if (isset($service)) {
                    return $service->present_department;
                }
                return '';
            })
            ->addColumn('location', function ($row) {

                $service = EmployeeService::where('employee_id', '=', $row->id)
                    ->where('status', '=', 1)->first();
                if (isset($service)) {
                    return $service->location;
                }
                return '';
            })
            // ->addColumn('present_station', function ($row) {

            //     $service = EmployeeService::where('employee_id', '=', $row->id)
            //         ->where('status', '=', 1)->first();
            //     if (isset($service)) {
            //         return $service->present_station;
            //     }
            //     return '';
            // })
            ->addColumn('state', function ($row) {
                $service = EmployeeService::where('employee_id', '=', $row->id)
                    ->where('status', '=', 1)->first();
                if (isset($service)) {
                    return $service->state;
                }
                return '';
            })
            ->addColumn('zone', function ($row) {
                $service = EmployeeService::where('employee_id', '=', $row->id)
                    ->where('status', '=', 1)->first();
                if (isset($service)) {
                    // return get_enum_value('enum_zone', $service->zone);
                    return $service->zone;
                }
                return '';
            })
            // ->addColumn('region', function ($row) {
            //     $service = EmployeeService::where('employee_id', '=', $row->id)
            //         ->where('status', '=', 1)->first();
            //     if (isset($service)) {
            //         return $service->regionRelation->title;
            //     }
            //     return '';
            // })
            ->addColumn('profile_picture', 'humanresource.employees.profile_picture')
            ->addColumn('action', 'humanresource.employees.datatables_actions')
            ->editColumn('date_of_birth', function ($row) {
                return $row->date_of_birth ? \Carbon\Carbon::parse($row->date_of_birth)->format('d/m/Y') : null;
            })
            ->editColumn('date_of_first_appointment', function ($row) {
                return $row->date_of_first_appointment ? \Carbon\Carbon::parse($row->date_of_first_appointment)->format('d/m/Y') : null;
            })
            ->editColumn('date_of_present_appointment', function ($row) {
                return $row->date_of_present_appointment ? \Carbon\Carbon::parse($row->date_of_present_appointment)->format('d/m/Y') : null;
            })
            ->addColumn('retirement_date_by_dob', function ($row) {
                return $row->date_of_birth ? \Carbon\Carbon::parse($row->date_of_birth)->addYears(60)->format('d/m/Y') : null;
            })
            ->addColumn('retirement_year_by_dob', function ($row) {
                return $row->date_of_birth ? \Carbon\Carbon::parse($row->date_of_birth)->addYears(60)->year : null;
            })
            ->addColumn('no_of_years_remained_by_dob', function ($row) {
                if($row->date_of_birth){
                    $start_date = \Carbon\Carbon::now();
                    $end_date = \Carbon\Carbon::parse($row->date_of_birth)->addYears(60);
                    if($start_date > $end_date){
                        return 0;
                    }
                    $diff = $start_date->diffInYears($end_date);
                    return $diff  + 1;
                }
                return null;

            })
            ->addColumn('retirement_date_by_dofa', function ($row) {
                return $row->date_of_first_appointment ? \Carbon\Carbon::parse($row->date_of_first_appointment)->addYears(35)->format('d/m/Y') : null;
            })
            ->addColumn('no_of_years_remained_by_dofa', function ($row) {
                if($row->date_of_first_appointment){
                    $start_date = \Carbon\Carbon::now();
                    $end_date = \Carbon\Carbon::parse($row->date_of_first_appointment)->addYears(35);
                    if($start_date > $end_date){
                        return 0;
                    }
                    $diff = $start_date->diffInYears($end_date);
                    return $diff + 1;
                }
                return null;
            })
            ->rawColumns(['profile_picture', 'action', 'select']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Employee $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Employee $model)
    {


        $rank = session('rank');
        $qualification = session('qualification');
        $state = session('state');
        $localGovtArea = session('localGovtArea');


        if ($rank != null && $qualification != null && $state != null && $localGovtArea != null) {
            return  $model::where('current_rank', '=', $rank)
                ->whereLike('entry_qualification', 'LIKE', "%{$qualification}%")
                ->orWhere('additional_qualification', 'LIKE', "%{$qualification}%")
                ->where('state_of_origin', '=', $state)
                ->where('local_govt_area', '=', $localGovtArea);
        } else if ($rank != null && $state != null && $localGovtArea != null) {
            return  $model::where('current_rank', '=', $rank)
                ->where('state_of_origin', '=', $state)
                ->where('local_govt_area', '=', $localGovtArea);
        } else if ($qualification != null && $state != null && $localGovtArea != null) {
            return  $model::where('entry_qualification', 'LIKE', "%{$qualification}%")
                ->orWhere('additional_qualification', 'LIKE', "%{$qualification}%")
                ->where('state_of_origin', '=', $state)
                ->where('local_govt_area', '=', $localGovtArea);
        } else if ($rank != null && $qualification != null) {
            return  $model::where('current_rank', '=', $rank)
                ->where('entry_qualification', 'LIKE', "%{$qualification}%")
                ->orWhere('additional_qualification', 'LIKE', "%{$qualification}%");
        } else if ($state != null && $localGovtArea != null) {
            return  $model::where('state_of_origin', '=', $state)
                ->where('local_govt_area', '=', $localGovtArea);
        } else if ($rank != null && $state != null) {
            return  $model::where('current_rank', '=', $rank)
                ->where('state_of_origin', '=', $state);
        } else if ($qualification != null && $state != null) {
            return  $model::where('entry_qualification', 'LIKE', "%{$qualification}%")
                ->orWhere('additional_qualification', 'LIKE', "%{$qualification}%")
                ->where('state_of_origin', '=', $state);
        } else if ($rank != null) {
            return  $model::where('current_rank', '=', $rank);
        } else if ($qualification != null) {
            return  $model::where('entry_qualification', 'LIKE', "%{$qualification}%")->orWhere('additional_qualification', 'LIKE', "%{$qualification}%");
        } else if ($state != null) {
            return  $model::where('state_of_origin', '=', $state);
        } else if ($localGovtArea != null) {
            return  $model::where('local_govt_area', '=', $localGovtArea);
        }

        return $model->newQuery();
    }


    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->autoWidth(true)
            ->addAction(['width' => '120px', 'printable' => false])
            ->parameters([
                'dom'       => 'Blfrtip',
                'stateSave' => false,
                'order'     => [[0, 'desc']],
                'filter' => true,
                // 'stateSave' => true,
                'buttons'   => [
                    // 'colvis',
                    // ['extend' => 'create', 'className' => 'btn btn-default btn-sm no-corner',],
                    // ['extend' => 'excel', 'className' => 'btn btn-default btn-sm no-corner',],
                    // ['extend' => 'print', 'className' => 'btn btn-default btn-sm no-corner', 'exportOptions' => ['columns' => 'visible'],],
                    // ['extend' => 'reset', 'className' => 'btn btn-default btn-sm no-corner',],
                    // ['extend' => 'reload', 'className' => 'btn btn-default btn-sm no-corner',],
                    // ['extend' => 'colvis', 'className' => 'btn btn-default btn-sm no-corner',],
                ],
            ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            'first_name' => ['visible' => false],
            'middle_name' => ['visible' => false],
            'last_name' => ['visible' => false],
            'DT_RowIndex' => ['title' => 'S/N'],
            'select',
            'action',
            'profile_picture',
            'service_number' => ['title' => 'Service No.'],
            'IPPIS',
            'name',
            'sex' => ['searchable' => true],
            'rank',
            'gl' => ['title' => 'GL'],
            'date_of_first_appointment' => ['title' => 'DOFA'],
            'date_of_present_appointment' => ['title' => 'DOPA'],
            'cadre' => ['title' => 'CADRE'],
            'present_department',
            'location',
            'state',
            'zone',
            'entry_qualification',
            'additional_qualification',
            'date_of_birth' => ['title' => 'DOB'],
            'state_of_origin',
            'LGA',
            'phone',
            'email',
            'retirement_date_by_dob' => ['title' => 'Retirement Date by DOB'],
            'retirement_year_by_dob' => ['title' => 'Retirement Year by DOB'],
            'no_of_years_remained_by_dob' => ['title' => 'No of Years Remained by DOB'],
            'retirement_date_by_dofa' => ['title' => 'Retirement Date by DOFA'],
            'no_of_years_remained_by_dofa' => ['title' => 'No of Years Remained by DOFA'],

        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return '$MODEL_NAME_PLURAL_SNAKE_$datatable_' . time();
    }
}
