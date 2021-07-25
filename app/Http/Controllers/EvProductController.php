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



    public function show($id): JsonResponse
    {
        $product = EvProduct::find($id);
        return response()->json([
            'success' => true,
            'data' => $product
        ]);
    }

    public function update(Request $request, $id): JsonResponse
    {
        $validated = EvProduct::validate($request);
        $product = EvProduct::find($id);
        $product->update($validated);

        return response()->json([
            'success' => true,
            'data' => $product
        ]);
    }

    public function destroy($id): JsonResponse
    {
        $product = EvProduct::find($id);
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
