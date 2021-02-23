<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['index', 'show']]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): JsonResponse
    {

        $categories = Category :: all();
        return response()->json([
            'success' => true,
            'data' => $categories

        ]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request): JsonResponse
    {
        $request->validate([
            'name' => 'required|min:2|string',
            'image_url' => 'required|url'
        ]);
        $new_category = new Category();
        $new_category['name'] = $request['name'];
        $new_category['image_url'] =$request['image_url'];
        $new_category->save();
        return response()->json([
            'success' => true,
            'data' => $new_category

        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category): JsonResponse
    {
        return response()->json([
            'succes' => true,
            'data' => $category
        ]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $validated = $request->validate([
            'name' => 'min:2|string',
            'image_url' => 'url'
        ]);
        $category->update($validated);
        return response()->json([
            'success' => true,
            'data' => $category
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return response()->json([
            'success' => true,
            'data' => $category
        ]);
    }
}
