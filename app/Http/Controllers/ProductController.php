<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(): JsonResponse
    {
        $products = Product::paginate(20);

        return response()->json([
            'success' => true,
            'data' => $products
        ]);
    }


    public function store(Request $request): JsonResponse
    {
        $request->validate([
            'name' => 'required|min:2|string',
            'description' => 'required|min:10|string'
        ]);

        $new_product = new Product();

        $new_product['name'] = $request['name'];
        $new_product['description'] = $request['description'];

        $new_product->save();

        return response()->json([
            'success' => true,
            'data' => $new_product
        ]);
    }

    public function show(Product $product): JsonResponse
    {
        return response()->json([
            'success' => true,
            'data' => $product
        ]);
    }


    public function update(Product $product, Request $request): JsonResponse
    {
        $validated = $request->validate([
            'name' => 'min:2|string',
            'description' => 'min:10|string'
        ]);

        $product->update($validated);

        return response()->json([
            'success' => true,
            'data' => $product
        ]);
    }

    public function destroy(Product $product): JsonResponse
    {
        try {
            $product->delete();
            return response()->json([
                'success' => true,
                'data' => $product
            ]);
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e['message']
            ]);
        }
    }
}
