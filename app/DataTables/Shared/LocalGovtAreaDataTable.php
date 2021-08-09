<?php

namespace App\DataTables\Shared;

use App\Models\Shared\LocalGovtArea;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class LocalGovtAreaDataTable extends DataTable
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
        ->addColumn('status', function($row){
            return get_enum_value('enum_status', $row->status);
        })
        ->addColumn('senatorialZone', function($row){
            if(isset($row->senatorialZone->title))
            {
                return $row->senatorialZone->title;
            }
            return '';
        })
        ->addColumn('state', function($row){
            if(isset($row->state->title))
            {
                return $row->state->title;
            }
            return '';
        })
        ->addColumn('action', 'shared.local_govt_areas.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\LocalGovtArea $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(LocalGovtArea $model)
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
            'title',
            // 'description',
            'senatorialZone',
            'state',
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
