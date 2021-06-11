<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Image;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\SubCategory;

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
        $product = new Product();
        $product = Product::validateProduct($request, $product);

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
        $product = Product::validateProduct($request, $product);

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

    // public function filter(Category $category, SubCategory $category): JsonResponse
    // {

    // }
}
