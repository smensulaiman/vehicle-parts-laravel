<?php

namespace App\DataTables;

use App\Models\Part;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class PartDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->filterColumn('part_name', function ($query, $keyword) {
                $query->whereRaw('LOWER(part_names.name) LIKE ?', ["%{$keyword}%"]);
            })
            ->filterColumn('make', function ($query, $keyword) {
                $query->whereRaw('LOWER(vehicles.make_title) LIKE ?', ["%{$keyword}%"]);
            })
            ->filterColumn('model', function ($query, $keyword) {
                $query->whereRaw('LOWER(vehicles.model_title) LIKE ?', ["%{$keyword}%"]);
            })
            ->addColumn('action', function ($query) {
                return '<a href="#"><i class="icon material-icons md-add_shopping_cart text-primary p-1"></i></a>';
            })
            ->rawColumns(['action']);
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Part $model): QueryBuilder
    {
        $selectColumns = [
            'ROW_NUMBER() OVER (ORDER BY part_names.name, vehicles.make_title) AS serial_number',
            'vehicles.model_id as model_id',
            'SUM(parts.quantity) as total_quantity',
            'parts.price as unit_price',
            'part_names.name as part_name',
            'vehicles.make_title as make',
            'vehicles.model_title as model'
        ];

        return $model->newQuery()
            ->selectRaw(implode(', ', $selectColumns))
            ->join('part_names', 'parts.part_name_id', '=', 'part_names.id')
            ->join('vehicles', 'parts.vehicle_id', '=', 'vehicles.id')
            ->groupBy(
                'vehicles.make_id',
                'vehicles.model_id',
                'vehicles.make_title',
                'vehicles.model_title',
                'part_names.name',
                'parts.price'
            );
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('part-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            //->dom('Bfrtip')
            ->orderBy(1, 'DESC')
            ->selectStyleSingle()
            ->buttons([
                Button::make('excel'),
                Button::make('csv'),
                Button::make('pdf'),
                Button::make('print'),
                Button::make('reset'),
                Button::make('reload')
            ]);
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            Column::make('serial_number')->title('S/N')->className('font-weight-bold text-center'),
            Column::make('part_name')->title('Part Name')->className('text-start'),
            Column::make('make')->className('text-start uppercase'),
            Column::make('model')->className('text-start capitalize'),
            Column::make('total_quantity')->className('text-end'),
            Column::make('unit_price')->className('text-end'),
            Column::computed('action')
                ->exportable(false)
                ->printable(false)
                ->width(80)
                ->addClass('text-center')
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'Part_' . date('YmdHis');
    }
}
