<?php

namespace App\DataTables;

use App\Models\Shipment;
use DateTime;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class ShipmentsDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->setRowId('id')
            ->addColumn('departure', function ($shipment) {
                return $shipment->departure
                    ? '<strong class="text-success" style="font-size: 12px; font-weight: bold;">' . (new DateTime($shipment->departure))->format('Y/m/d') . '</strong>'
                    : '<strong class="text-danger" style="font-size: 12px; font-weight: bold;">Not Found</strong>';
            })
            ->addColumn('provider', function ($shipment) {
                $brandLogo = asset(strtolower($shipment->provider) === 'karmen' ? '/assets/imgs/brands/karmen-logo.webp' : '/assets/imgs/brands/brand-'. rand(1, 18) .'.jpg');
                return '<div><img src="'. $brandLogo .'" alt="Company Logo" style="width: auto; height: 24px; margin-right: 10px; vertical-align: middle;">' . $shipment->provider . '</div>';
            })
            ->addColumn('destination_port', function ($shipment) {
                return '<div><i class="text-body-emphasis material-icons md-local_airport" style="width: auto; height: 24px; margin-right: 10px; vertical-align: middle;"></i>' . $shipment->destination_port . '</div>';
            })
            ->addColumn('status', function ($query){
                return '<span class="badge badge-pill badge-soft-success font-bold" style="font-size: 11px">'.$query->status.'</span>';
            })
            ->addColumn('created_at', function ($query){
                return '<span class="font-bold">'.date('Y-m-d', strtotime($query->created_at)).'</span>';
            })
            ->addColumn('updated_at', function ($query){
                return '<span class="font-bold">'.date('Y-m-d', strtotime($query->updated_at)).'</span>';
            })
            ->addColumn('action', function ($query){
                return '<a class="btn btn-primary btn-xs" href="'. route('admin.shipment.show', $query->id) .'">View</a>';
            })
            ->rawColumns(['departure', 'provider', 'destination_port', 'status', 'created_at', 'updated_at', 'action']);
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Shipment $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('shipments-table')
            ->addTableClass("table table-striped table-hover align-middle table-nowrap mb-0")
            ->setTableHeadClass("table-light bordered")
            ->columns($this->getColumns())
            ->minifiedAjax()
            //->dom('Bfrtip')
            ->orderBy(0)
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
            Column::make('id')->className('font-weight-bold text-center'),
            Column::make('departure')->className('text-center')->width(140),
            Column::make('provider')->width(280),
            Column::make('destination_port')
                ->title('Destination Port'),
            Column::make('vessel'),
            Column::make('term'),
            Column::make('shipping_port'),
            Column::make('invoice_customer'),
            Column::make('status')
                ->width(60)
                ->addClass('text-center'),
            Column::make('created_at'),
            Column::make('updated_at'),
            Column::computed('action')
                ->exportable(false)
                ->printable(false)
                ->width(60)
                ->addClass('text-center')
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'Shipments_' . date('YmdHis');
    }
}
