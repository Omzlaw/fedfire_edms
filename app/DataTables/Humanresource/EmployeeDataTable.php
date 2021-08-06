<?php

namespace App\DataTables\Humanresource;

use App\Models\Humanresource\Employee;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

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
        $dataTable = new EloquentDataTable($query);

        return $dataTable
        ->addColumn('gender', function($row){
            return get_enum_value('enum_gender', $row->gender);
        })
        ->addColumn('birthdate', function($row){
            return $row->birthdate->toDateString();
        })
        ->addColumn('nationality', function($row){
            return $row->country->title;
        })
        ->addColumn('stateOfOrigin', function($row){
            if(isset($row->stateOfOrigin->title))
            {
                return $row->stateOfOrigin->title;
            }
            return '';
        })
        ->addColumn('profile_picture', 'humanresource.employees.profile_picture')
        ->addColumn('action', 'humanresource.employees.datatables_actions')
        ->rawColumns(['profile_picture', 'action']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Employee $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Employee $model)
    {
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
            ->addAction(['width' => '120px', 'printable' => false])
            ->parameters([
                'dom'       => 'Bfrtip',
                'stateSave' => true,
                'order'     => [[0, 'desc']],
                'buttons'   => [
                    ['extend' => 'create', 'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'excel', 'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'print', 'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'reset', 'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'reload', 'className' => 'btn btn-default btn-sm no-corner',],
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
            // 'id',
            'profile_picture',
            'file_no',
            'first_name',
            'last_name',
            'gender',
            'birthdate',
            // 'place_of_birth',
            // 'birth_certificate_upload',
            // 'marital_status_id',
            // 'first_appointment_date',
            // 'first_arrival_date',
            'nationality',
            'stateOfOrigin',
            // 'decorations',
            // 'file_upload',
            // 'remark',
            // 'email',
            // 'phone',
            // 'status',
            // 'current_appointment',

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
