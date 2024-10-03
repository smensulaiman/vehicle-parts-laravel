<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Shipment;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(): View
    {
        $shipments = Shipment::all();

        return view('admin.dashboard', compact('shipments'));
    }
}
