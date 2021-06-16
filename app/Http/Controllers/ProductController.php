<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{

    /**
     * List products
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $products = Product::paginate(20)->toArray();
        return $this->jsonResponse($products);
    }

    /**
     * Create a product
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        $validated = Product::validate($request);

        $product = Product::create($validated);

        return $this->jsonResponse($product);
    }

    public function show(Product $product): JsonResponse
    {
        return $this->jsonResponse($product);
    }

    public function update(Product $product, Request $request): JsonResponse
    {
        $validated = Product::validate($request);
        $product->update($validated);

        return $this->jsonResponse($product);
    }

    public function destroy(Product $product): JsonResponse
    {
        try {
            $product->delete();
            return $this->jsonResponse($product);
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ]);
        }
    }
}
