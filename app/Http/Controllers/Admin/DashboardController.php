<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\ShipmentsDataTable;
use App\Http\Controllers\Controller;
use App\Models\Shipment;

class DashboardController extends Controller
{
    public function dashboard(ShipmentsDataTable $dataTable)
    {
        $totalShipment = Shipment::count();
        return $dataTable->render('admin.dashboard', compact('totalShipment'));
    }
}
