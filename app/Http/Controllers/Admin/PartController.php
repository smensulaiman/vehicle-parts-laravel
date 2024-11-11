<?php

namespace App\Http\Controllers\Admin;

use App\Helper\ApiResponseBuilder;
use App\Http\Controllers\Controller;
use App\Models\Part;
use App\Models\PartName;
use App\Models\Vehicle;
use App\Utils\CarBrandUtils;
use Exception;
use Illuminate\Contracts\Filesystem\FileNotFoundException;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
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

    public function getPartsByGroup(Request $request): JsonResponse
    {
        $request->validate([
            'make_id' => 'required',
            'model_id' => 'required',
            'part_name' => 'required',
        ]);

        try {

            $parts = Part::whereHas('vehicle', function ($query) use ($request) {
                $query->where('make_id', $request->get('make_id'))->where('model_id', $request->get('model_id'));
            })->whereHas('partName', function ($query) use ($request) {
                $query->where('name', $request->get('part_name'));
            })->with(['vehicle', 'partName'])->get();

            $data = $parts->map(function ($part) {
                return [
                    'make_id' => $part->vehicle->make_id ?? '',
                    'model_id' => $part->vehicle->model_id ?? '',
                    'part_name' => $part->partName->name ?? '',
                    'quantity' => $part->quantity ?? 0,
                    'price' => $part->price ?? 0.0,
                ];
            });

            return ApiResponseBuilder::success(
                'success',
                $data,
                200
            );

        } catch (Exception $e) {

            return ApiResponseBuilder::error(
                'Failed to add product to cart. Please try again later.',
                ['error' => $e->getMessage()],
                500
            );
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
