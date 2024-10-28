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
            ->addColumn('departure', function ($query) {
                return $query->departure
                    ? '<strong class="text-success" style="font-size: 12px; font-weight: bold;">' . date('Y/m/d', strtotime($query->departure)) . '</strong>'
                    : '<strong class="text-danger" style="font-size: 12px; font-weight: bold;">Not Found</strong>';
            })
            ->addColumn('provider', function ($query) {
                $brandLogo = asset(strtolower($query->provider) === 'karmen' ? '/assets/imgs/brands/karmen-logo.webp' : '/assets/imgs/brands/brand-'. rand(1, 18) .'.jpg');
                return '<div><img src="'. $brandLogo .'" alt="Company Logo" style="width: auto; height: 24px; margin-right: 10px; vertical-align: middle;">' . $query->provider . '</div>';
            })
            ->addColumn('shipping_port', function ($query) {
                return '<div><i class="text-body-emphasis material-icons md-anchor" style="width: auto; height: 24px; margin-right: 10px; vertical-align: middle;"></i>' . $query->shipping_port . '</div>';
            })
            ->addColumn('destination_port', function ($query) {
                return '<div><i class="text-body-emphasis material-icons md-anchor" style="width: auto; height: 24px; margin-right: 10px; vertical-align: middle;"></i>' . $query->destination_port . '</div>';
            })
            ->addColumn('status', function ($query){
                return '<span class="badge badge-pill badge-soft-success font-bold" style="font-size: 11px">'.$query->status.'</span>';
            })
            ->addColumn('created_at', function ($query){
                return '<span class="font-bold">'.date('Y/m/d', strtotime($query->created_at)).'</span>';
            })
            ->addColumn('updated_at', function ($query){
                return '<span class="font-bold">'.date('Y/m/d', strtotime($query->updated_at)).'</span>';
            })
            ->addColumn('action', function ($query){
                return '<a class="btn btn-primary btn-xs" href="'. route('admin.shipment.show', $query->id) .'">View</a>';
            })
            ->rawColumns(['departure', 'provider', 'shipping_port', 'destination_port', 'status', 'created_at', 'updated_at', 'action']);
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Shipment $model): QueryBuilder
    {
        $query = $model->newQuery();

        if ($this->disablePagination) {
            $query->limit($this->limit ?? 10);
        }

        return $query;
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        $disablePagination = $this->disablePagination ?? false;

        return $this->builder()
            ->setTableId('shipments-table')
            ->addTableClass("table table-striped table-hover align-middle table-nowrap mb-0")
            ->setTableHeadClass("table-light bordered")
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->parameters(
                [
                    'pageLength' => 100,
                    'lengthMenu' => [25, 50, 100, 500],
                    'paging' => !$disablePagination,
                    'searching' => !$disablePagination,
                    'info' => !$disablePagination
                ]
            )
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
            Column::make('shipping_port'),
            Column::make('destination_port'),
            Column::make('vessel'),
            Column::make('term'),
            Column::make('invoice_customer'),
            Column::make('status')
                ->width(100)
                ->addClass('text-center'),
            Column::make('created_at')->className('text-center')->width(140),
            Column::make('updated_at')->className('text-center')->width(140),
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
