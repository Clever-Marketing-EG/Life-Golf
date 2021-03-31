<?php

namespace App\Http\Controllers;

use App\Models\ArticleCategory;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class ArticleCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $arcategories = ArticleCategory::all();
        return response()->json([
            'success' => true,
            'data' => $arcategories
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
            'image_url' => 'required|url'
        ]);
        $arcategory = ArticleCategory::create($validated);
        return response()->json([
            'success' => true,
            'data' => $arcategory
        ]);
    }
    /**
     * Display the specified resource.
     *
     * @param ArticleCategory $arcategory
     * @return JsonResponse
     */
    public function show(ArticleCategory $arcategory): JsonResponse
    {
        return response()->json([
            'success' => true,
            'data' => $arcategory
        ]);
    }

 /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param ArticleCategory $arcategory
     * @return JsonResponse
     */
    public function update(Request $request, ArticleCategory $arcategory): JsonResponse
    {
        $validated = $request->validate([
            'name' => 'min:3|string',
            'name_ar' => 'min:3|string',
            'image_url' => 'url'
        ]);

        $arcategory->update($validated);

        return response()->json([
            'success' => true,
            'data' => $arcategory
        ]);
    }

   /**
     * Remove the specified resource from storage.
     *
     * @param ArticleCategory $arcategory
     * @return JsonResponse
     * @throws Exception
     */
    public function destroy(ArticleCategory $arcategory): JsonResponse
    {
        try {
            $arcategory->delete();
            return response()->json([
                'success' => true,
                'data' => $arcategory
            ]);
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ]);
        }
    }
}
