<?php

namespace App\Http\Controllers;

use App\Models\SubCategory;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class SubCategoryController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $subcategories = SubCategory::all();
        return response()->json([
            'success' => true,
            'data' => $subcategories
        ]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'name' => 'required|min:3|string',
            'name_ar' => 'required|min:3|string',
            'content' => 'required|min:3|string',
            'content_ar' => 'required|min:3|string',
            'image_url' => 'required|url',
            'category_id' => 'required|integer|exists:categories,id'

        ]);
        $subcategory = SubCategory::create($validated);
        return response()->json([
            'success' => true,
            'data' => $subcategory
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param SubCategory $subcategory
     * @return JsonResponse
     */
    public function show(SubCategory $subcategory): JsonResponse
    {
        return response()->json([
            'success' => true,
            'data' => $subcategory
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param SubCategory $subcategory
     * @return JsonResponse
     */
    public function update(Request $request, SubCategory $subcategory): JsonResponse
    {
        $validated = $request->validate([
            'name' => 'min:3|string',
            'name_ar' => 'min:3|string',
            'content' => 'min:3|string',
            'content_ar' => 'min:3|string',
            'image_url' => 'url',
            'category_id' => 'integer|exists:categories,id'

        ]);

        $subcategory->update($validated);

        return response()->json([
            'success' => true,
            'data' => $subcategory
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param SubCategory $subcategory
     * @return JsonResponse
     * @throws Exception
     */
    public function destroy(SubCategory $subcategory): JsonResponse
    {
        try {
            $subcategory->delete();
            return response()->json([
                'success' => true,
                'data' => $subcategory
            ]);
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ]);
        }
    }


    public function products(SubCategory $subcategory)
    {
        return response()->json([
            'success' => true,
            'data' => $subcategory->products,
        ]);
    }
}
