<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Exception;


class GalleryController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): JsonResponse
    {
        $gallery = Gallery::all();
        return response()->json([
            'success' => true,
            'data' => $gallery
        ]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'image_url' => 'required:url',
            'description' => 'required|min:3|string',
            'description_ar' => 'required|min:3|string',
            'type' => 'required|min:3|string'
        ]);
        $gallery = Gallery::create($validated);
        return response()->json([
            'success' => true,
            'data' => $gallery
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  Gallery  $gallery
     * @return JsonResponse
     */
    public function show(Gallery $gallery): JsonResponse
    {
        return response()->json([
            'success' => true,
            'data' => $gallery
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  Gallery  $gallery
     * @return JsonResponse
     */
    public function update(Request $request, Gallery $gallery): JsonResponse
    {
        $validated = $request->validate([
            'image_url' => 'url',
            'description' => 'min:3|string',
            'description_ar' => 'min:3|string',
            'type' => 'min:3|string'
        ]);
        $gallery->update($validated);
        return response()->json([
            'success' => true,
            'data' => $gallery
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Gallery  $gallery
     * @return JsonResponse
     * @throws Exception
     */
    public function destroy(Gallery $gallery): JsonResponse
    {
        try {
            $gallery->delete();
            return response()->json([
                'success' => true,
                'data' => $gallery
            ]);
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ]);
        }
    }
}
