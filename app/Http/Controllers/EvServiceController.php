<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\EvService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;


class EvServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(): JsonResponse
    {
        $evService = EvService::latest()->paginate(5)->toArray();

        return response()->json(array_merge(
            ['success' => true],
            $evService
        ));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'title' => 'required|min:3|string',
            'title_ar' => 'required|min:3|string',
            'content' => 'required|min:3|string',
            'content_ar' => 'required|min:3|string',
            'image_url' => 'required|url'
        ]);

        $evService = new EvService();
        $evService['title'] = $validated['title'];
        $evService['title_ar'] = $validated['title_ar'];
        $evService['content'] = $validated['content'];
        $evService['content_ar'] = $validated['content_ar'];
        $evService['image_url'] = $validated['image_url'];

        $evService->save();

        return response()->json([
            'success' => true,
            'data' => $evService
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  EvService  $evService
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id): JsonResponse
    {
        $evService = EvService::find($id);

        return response()->json([
            'success' => true,
            'data' => $evService
        ]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EvService  $evService
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id): JsonResponse
    {
        $validated = $request->validate([
            'title' => 'min:3|string',
            'title_ar' => 'min:3|string',
            'content' => 'min:3|string',
            'content_ar' => 'min:3|string',
            'image_url' => 'url'
        ]);

        $evService = EvService::find($id);

        $evService->update($validated);

        return response()->json([
            'success' => true,
            'data' => $evService
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EvService  $evService
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id): JsonResponse

    {
        $evService = EvService::find($id);

        try {
            $evService->delete();
            return response()->json([
                'success' => true,
                'data' => $evService
            ]);
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ]);
        }
    }
}
