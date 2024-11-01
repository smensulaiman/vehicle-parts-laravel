<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PartName;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Throwable;

class PartCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $partNames = PartName::orderBy('name')->get();
        return view('admin.parts.category.index' , compact('partNames'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.parts.category.create');
    }

    /**
     * Store a newly created resource in storage.
     * @throws Throwable
     */
    public function store(Request $request): RedirectResponse
    {
        DB::beginTransaction();

        try {
            $partName = new PartName();
            $partName->name = strtoupper($request->input('category_name'));
            $partName->quantity = $request->input('default_quantity');
            $partName->price = $request->input('default_price');
            $partName->is_generic = $request->input('generic');

            $partName->save();
            DB::commit();

        } catch (Exception $exception) {
            DB::rollBack();
            return redirect()->back()->with('error', 'error inserting data: ' . $exception->getMessage());
        }

        return redirect()->route('admin.part-category.index')->with('success', 'Data inserted successfully.');
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
        $partName = PartName::where('id', $id)->firstOrFail();

        return view('admin.parts.category.edit', compact('partName'));
    }

    /**
     * Update the specified resource in storage.
     * @throws Throwable
     */
    public function update(Request $request, string $id)
    {
        DB::beginTransaction();

        try {
            $partName = PartName::where('id', $id)->firstOrFail();
            $partName->name = strtoupper($request->input('category_name'));
            $partName->quantity = $request->input('default_quantity');
            $partName->price = $request->input('default_price');
            $partName->is_generic = $request->input('generic');

            $partName->save();
            DB::commit();

        } catch (Exception $exception) {
            DB::rollBack();
            return redirect()->back()->with('error', 'error updating data: ' . $exception->getMessage());
        }

        return redirect()->route('admin.part-category.index')->with('success', 'Data updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            PartName::where('id', $id)->firstOrFail()->delete();
        } catch (Exception $exception){
            return response(array('code' => 403, 'status' => 'failed', 'message' => $exception->getMessage()), 403, array('Content-Type' => 'application/json'));
        }

        return response(array('code' => 200,
            'status' => 'success',
            'message' => 'Part category deleted successfully!',
        ), 200, array('Content-Type' => 'application/json'));
    }
}
