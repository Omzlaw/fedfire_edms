<?php

namespace App\DataTables\Humanresource;

use App\Models\Humanresource\EmployeePublicService;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class EmployeePublicServiceDataTable extends DataTable
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

        return  $dataTable
        ->addColumn('employee', function($row){
            return $row->employee->staff_code;
        })
        ->addColumn('from_date', function($row){
            return $row->from_date->toDateString();
        })
        ->addColumn('to_date', function($row){
            return $row->to_date->toDateString();
        })
        ->addColumn('action', 'humanresource.employee_public_services.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\EmployeePublicService $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(EmployeePublicService $model)
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
                'dom'       => 'Blfrtip',
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
            'employer_name',
            'from_date',
            'to_date',
            'file_page_ref',
            'employee',
            // 'file_upload',
            'total_years_served',
            'total_paid',
            'remark',
            // 'checked_by',
            // 'created_by',
            // 'updated_by',

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
