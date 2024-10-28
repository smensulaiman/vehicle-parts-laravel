<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\ShipmentsDataTable;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function dashboard(ShipmentsDataTable $dataTable)
    {
        return $dataTable->with(['limit' => 10, 'disablePagination' => true])->render('admin.dashboard');
    }

}
