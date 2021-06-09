<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{

    public function index(): JsonResponse
    {
        $products = Product::paginate(20)->toArray();

        return response()->json(array_merge(
            ['success' => true],
            $products,
        ));
    }

    public function store(Request $request): JsonResponse
    {
        $validated = Product::validate($request);

        $product = Product::create($validated);

        return response()->json([
            'success' => true,
            'data' => $product
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
        $validated = Product::validate($request);

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
                'message' => $e->getMessage()
            ]);
        }
    }

    public function destroyImage(Image $image)
    {
        $image->delete();
        return response()->json([
            'success' => true,
            'message' => 'Image deleted successfully'
        ]);
    }
}
