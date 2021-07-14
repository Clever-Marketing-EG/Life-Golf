<?php

namespace App\Http\Controllers;

use App\Models\EvProduct;

use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class EvProductController extends Controller
{

    /**
     * List products
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $products = EvProduct::paginate(20)->toArray();
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
        $validated = EvProduct::validate($request);

        $product = EvProduct::create($validated);

        return $this->jsonResponse($product);
    }

    public function show(EvProduct $product): JsonResponse
    {
        return $this->jsonResponse($product);
    }

    public function update(EvProduct $product, Request $request): JsonResponse
    {
        $validated = EvProduct::validate($request);
        $product->update($validated);

        return $this->jsonResponse($product);
    }

    public function destroy(EvProduct $product): JsonResponse
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
