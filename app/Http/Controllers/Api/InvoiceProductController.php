<?php

namespace App\Http\Controllers\Api;

use App\Actions\InvoiceProducts\StoreAction;
use App\Actions\InvoiceProducts\UpdateAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\InvoiceProduct\DetailRequest;
use App\Http\Requests\InvoiceProduct\UpdateRequest;
use App\Invoice;
use App\Product;
use Illuminate\Http\JsonResponse;

class InvoiceProductController extends Controller
{
    public $successStatus = 200;

    /**
     * Display a listing of the resource.
     *
     * @param Invoice $invoice
     * @return JsonResponse
     */
    public function index(Invoice $invoice)
    {
        return response()->json([
            'success' => $invoice->products],
            $this-> successStatus);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param DetailRequest $request
     * @param Invoice $invoice
     * @param StoreAction $action
     * @return JsonResponse
     */
    public function store(DetailRequest $request, Invoice $invoice, StoreAction $action)
    {
        $price = $request->input('price');
        $quantity = $request->input('quantity');

        $invoice->products()->attach($request->input('product_id'), [
            'price' => $price,
            'quantity' => $quantity,
        ]);

        return response()->json([
            'message' => 'Invoice detail successfully created.'],
            //'success' => $invoice->products],
            $this-> successStatus);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateRequest $request
     * @param Invoice $invoice
     * @param Product $product
     * @param UpdateAction $action
     * @return JsonResponse
     */
    public function update(UpdateRequest $request, Invoice $invoice, Product $product, UpdateAction $action)
    {
        $product = $invoice->products()->findOrFail($product);
        $invoice->products()->updateExistingPivot($product->id, $request->validated());

        return response()->json([
            'message' => 'Invoice detail successfully updated.'],
            $this-> successStatus);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Invoice $invoice
     * @param Product $product
     * @return JsonResponse
     */
    public function destroy(Invoice $invoice, Product $product)
    {
        $invoice->products()->detach($product->id);

        return response()->json([
            'message' => 'Invoice detail successfully deleted.'],
            $this-> successStatus);    }
}

