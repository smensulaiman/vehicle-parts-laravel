<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Part;
use App\Utils\CarBrandUtils;
use Illuminate\Contracts\Filesystem\FileNotFoundException;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

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
    public function create(): View
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
     * @throws FileNotFoundException
     */
    public function edit(string $id): View
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

    public function print($vehicleId): View
    {
        $parts = Part::where('vehicle_id', $vehicleId)->get();
        return view('admin.parts.print', compact('parts'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
