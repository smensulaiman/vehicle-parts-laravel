<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Part;
use App\Models\PartName;
use App\Utils\CarBrandUtils;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class PartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.parts.edit');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $carBrandUtils = new CarBrandUtils();

        $parts = Part::where('vehicle_id', $id)->get();
        $brandLogo = $carBrandUtils->getCarThumbnail(strtolower($parts->first()->vehicle->make_title));
        return view('admin.parts.edit', compact(['parts', 'brandLogo']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    public function print($vehicleId)
    {
        $parts = Part::where('vehicle_id', $vehicleId)->get();
        return view('admin.parts.print', compact('parts'));
    }

    public function getFilteredParts(Request $request): JsonResponse
    {
        $query = Part::query();

        if ($makes = $request->get('make')) {
            $query->whereIn('make_id', $makes);
        }

        if ($models = $request->get('model')) {
            $query->whereIn('model_id', $models);
        }

        if ($parts = $request->get('part')) {
            $query->whereIn('part_name_id', $parts);
        }

        return DataTables::of($query)
            ->addColumn('action', function ($part) {
                return '<button class="btn btn-sm btn-danger">Delete</button>';
            })
            ->make(true);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
