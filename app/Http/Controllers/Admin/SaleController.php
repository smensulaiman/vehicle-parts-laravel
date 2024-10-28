<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Sale;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        // Validate incoming request data
        $request->validate([
            'quantity_sold' => 'required|integer',
            'price_at_sale' => 'required|numeric',
            'part_ids' => 'required|array', // Ensure part_ids is an array
            'part_ids.*' => 'exists:parts,id', // Validate each part_id exists
        ]);

        // Create a new sale record in the sales table
        $sale = Sale::create([
            'quantity_sold' => $request->quantity_sold,
            'price_at_sale' => $request->price_at_sale,
            'sold_at' => now(), // Use current timestamp
        ]);

        // Attach the selected parts to the sale
        foreach ($request->part_ids as $partId) {
            // Store the quantity and price_at_sale for each part sold
            $sale->parts()->attach($partId, [
                'quantity' => $request->quantity_sold, // Quantity of that part sold
                'price_at_sale' => $request->price_at_sale, // Price for the part at the time of sale
            ]);
        }

        // Redirect or return a response
        return redirect()->route('sales.index')->with('success', 'Sale created successfully.');
    }
}
