<?php

namespace App\DataTables\Humanresource;

use App\Models\Humanresource\EmployeeForeignTour;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class EmployeeForeignTourDataTable extends DataTable
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

        return $dataTable->addColumn('action', 'humanresource.employee_foreign_tours.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\EmployeeForeignTour $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(EmployeeForeignTour $model)
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
            'id',
            'employee_id',
            'file_upload',
            'leaver_id',
            'from_date',
            'to_date',
            'status',
            'remark',
            'updated_by',
            'date_started',
            'tour_gazette_no',
            'tour_length',
            'leave_due_date',
            'leave_departure_date',
            'leave_gazette_no',
            'return_due_date',
            'granted_extension_date',
            'duty_resumption_date',
            'passed_to_uk',
            'passed_from_uk',
            'resident_months',
            'resident_days',
            'leave_months',
            'leave_days',
            'created_at' => ['searchable' => false],
            'updated_at' => ['searchable' => false]
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
