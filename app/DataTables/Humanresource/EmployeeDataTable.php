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
        $date_of_present_appointment = session('date_of_present_appointment');
        $date_of_first_appointment = session('date_of_first_appointment');
        $status = session('status');

        if ($date_of_present_appointment != null) {
            $query->where('date_of_present_appointment', $date_of_present_appointment);
        }

        if ($date_of_first_appointment != null) {
            $query->where('date_of_first_appointment', $date_of_first_appointment);
        }

        if ($date_of_present_appointment != null && $date_of_first_appointment != null) {
            $query->where('date_of_first_appointment', $date_of_first_appointment)
                ->where('date_of_present_appointment', $date_of_present_appointment);
        }

        if($status != null) {
            $query->where('status', $status);
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
            ->addColumn('rank', function ($row) {
                $rank = EmployeeRank::orderBy('id', 'desc')->where('employee_id', '=', $row->id)
                    ->where('status', '=', 1)->first();
                if (isset($rank->rankType)) {
                    return $rank->rankType->title;
                }
                return '';
            })
            ->addColumn('state_of_origin', function ($row) {
                if (isset($row->stateOfOrigin->title)) {
                    return $row->stateOfOrigin->title;
                }
                return '';
            })
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
            ->addColumn('additional_qualification', function ($row) {
                $education = EmployeeEducation::where('employee_id', '=', $row->id)
                    ->where('status', '=', 1)->skip(1)->first();
                if (isset($education)) {
                    return $education->qualification;
                }
                return '';
            })
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
                    return $service->zone;
                }
                return '';
            })
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
                if ($row->date_of_birth) {
                    $start_date = \Carbon\Carbon::now();
                    $end_date = \Carbon\Carbon::parse($row->date_of_birth)->addYears(60);
                    if ($start_date > $end_date) {
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
                if ($row->date_of_first_appointment) {
                    $start_date = \Carbon\Carbon::now();
                    $end_date = \Carbon\Carbon::parse($row->date_of_first_appointment)->addYears(35);
                    if ($start_date > $end_date) {
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

        return $model->orderBy('current_rank', 'asc')
        ->orderBy('date_of_present_appointment', 'asc')
        ->orderBy('date_of_first_appointment', 'asc')
        ->orderBy('service_number', 'asc')->newQuery();
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
                // 'order'     => [[11, 'desc']],
                'filter' => true,
                'buttons'   => [
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
            'DT_RowIndex' => ['title' => 'S/N', 'searchable' => false],
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
