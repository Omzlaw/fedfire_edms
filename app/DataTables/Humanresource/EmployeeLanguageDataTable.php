<?php

namespace App\DataTables\Humanresource;

use App\Models\Humanresource\EmployeeLanguage;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class EmployeeLanguageDataTable extends DataTable
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
        ->addColumn('speaking_fluency', function($row){
            return get_enum_value('enum_fluency', $row->speaking_fluency);
        })
        ->addColumn('writing_fluency', function($row){
            return get_enum_value('enum_fluency', $row->writing_fluency);
        })
        ->addColumn('status', function($row){
            return get_enum_value('enum_status', $row->status);
        })
        ->addColumn('action', 'humanresource.employee_languages.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\EmployeeLanguage $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(EmployeeLanguage $model)
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
            'speaking_fluency',
            'writing_fluency',
            'exam_qualified',
            // 'employee_id',
            // 'file_upload',
            'status',
            // 'remark',
            // 'checked_at',

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
