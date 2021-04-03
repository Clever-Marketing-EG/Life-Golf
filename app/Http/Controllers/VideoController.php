<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Models\Video;
use Exception;

class VideoController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        //
        $videos = Video::all();
        return response()->json([
            'success' => true,
            'data' => $videos
        ]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        //
        $validated = $request->validate([
            'image_url' => 'required|url',
            'video_url' => 'required|url',
            'title' => 'required|min:3|string',
            'title_ar' => 'required|min:3|string',
            'description' => 'required|min:3|string',
            'description_ar' => 'required|min:3|string',
            'type' => 'required|min:3|string'
        ]);
        $video = Video::create($validated);
        return response()->json([
            'success' => true,
            'data' => $video
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  Video  $video
     * @return JsonResponse
     */
    public function show(Video $video): JsonResponse
    {
        return response()->json([
            'success' => true,
            'data' => $video
        ]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Video  $video
     * @return JsonResponse
     */
    public function update(Request $request, Video $video)
    {
        $validated = $request->validate([
            'image_url' => 'url',
            'video_url' => 'url',
            'title' => 'min:3|string',
            'title_ar' => 'min:3|string',
            'description' => 'min:3|string',
            'description_ar' => 'min:3|string',
            'type' => 'min:3|string'
        ]);
        $video->update($validated);
        return response()->json([
            'success' => true,
            'data' => $video
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Video  $video
     * @return JsonResponse
     * @throws Exception
     */
    public function destroy(Video $video): JsonResponse
    {
        //
        try {
            $video->delete();
            return response()->json([
                'success' => true,
                'data' => $video
            ]);
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ]);
        }
    }
}
