<?php

namespace App\DataTables\Humanresource;

use App\Models\Humanresource\EmployeeTermination;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class EmployeeTerminationDataTable extends DataTable
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

        return $dataTable->addColumn('action', 'humanresource.employee_terminations.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\EmployeeTermination $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(EmployeeTermination $model)
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
                    ['extend' => 'export', 'className' => 'btn btn-default btn-sm no-corner',],
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
            // 'termination_id',
            // 'employee_id',
            // 'file_upload',
            'even_date',
            'is_pensionable',
            'pension_amount',
            'pension_start_date',
            'gratuity_amount',
            // 'contract_gratuity',
            // 'estate_gratuity_amount_paid',
            // 'widow_pension_amount',
            // 'widow_pension_start_date',
            // 'orphan_pension_amonut',
            // 'nigeria_total_service_years',
            // 'nigeria_total_service_months',
            // 'nigeria_total_service_days',
            // 'total_naria_salary',
            // 'summary',
            // 'remark',
            'status',

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
