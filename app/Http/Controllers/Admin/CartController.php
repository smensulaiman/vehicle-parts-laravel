<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\PartNameDataTable;
use App\Helper\ApiResponseBuilder;
use App\Http\Controllers\Controller;
use App\Models\PartName;
use App\Models\Vehicle;
use Exception;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $makers = Vehicle::select(['make_id', 'make_title'])->orderBy('make_title')->distinct()->get();
        $partNames = PartName::all();

        $cartContent = Cart::content();
        $totalPrice = Cart::subtotal();

        return view('admin.cart.create', compact('makers', 'partNames', 'cartContent', 'totalPrice'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'id' => 'required|string',
            'name' => 'required|string',
            'quantity' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0',
        ]);

        try {
            Cart::add($validated['id'], $validated['name'], $validated['quantity'], $validated['price']);

            return ApiResponseBuilder::success(
                $validated['name'] . ' added to cart successfully!',
                null,
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //$request->validate([
        //            'qty' => 'required|integer|min:1',
        //        ]);
        //
        //        Cart::update($rowId, $request->qty);
        //        return redirect()->route('cart.index')->with('success', 'Cart updated!')
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Cart::remove($id);
        return redirect()->route('cart.index')->with('success', 'Item removed from cart!');
    }

    public function clear()
    {
        Cart::destroy();
        return redirect()->route('cart.index')->with('success', 'Cart cleared!');
    }

    public function search(Request $request)
    {
        $searchTerm = $request->get('query');
        $cartContent = Cart::content()->filter(function ($item) use ($searchTerm) {
            return stripos($item->name, $searchTerm) !== false;
        });

        return view('cart.index', compact('cartContent', 'searchTerm'));
    }
}
