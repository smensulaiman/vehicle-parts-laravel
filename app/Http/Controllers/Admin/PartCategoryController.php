<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PartName;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
     * @throws \Throwable
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

        } catch (\Exception $exception) {
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
        dd('hello');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}