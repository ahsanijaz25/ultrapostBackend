<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProductController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        return Product::all(); // Return all products
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|string',
            'price' => 'required|numeric',
            'sku' => 'nullable|string|max:100',
            // Add validation rules for foreign keys and other fields as needed
        ]);

        $product = Product::create($request->all()); // Create a new product

        return response()->json($product, Response::HTTP_CREATED); // Return the created product
    }

    // Display the specified resource.
    public function show(Product $product)
    {
        return $product; // Return the specified product
    }

    // Update the specified resource in storage.
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|string',
            'price' => 'sometimes|required|numeric',
            'sku' => 'nullable|string|max:100',
            // Add validation rules for foreign keys and other fields as needed
        ]);

        $product->update($request->all()); // Update the product

        return response()->json($product); // Return the updated product
    }

    // Remove the specified resource from storage.
    public function destroy(Product $product)
    {
        $product->delete(); // Delete the product

        return response()->json(null, Response::HTTP_NO_CONTENT); // Return 204 No Content
    }
}
