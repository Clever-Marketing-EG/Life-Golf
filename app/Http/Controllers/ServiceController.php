<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Models\Service;
use Exception;

class ServiceController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     *
     */
    public function index(): JsonResponse
    {
        //
        $services = Service::all();
        return response()->json([
            'success' => true,
            'data' => $services
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
        //
        $validated = $request->validate([
            'name' => 'required|min:3|string',
            'name_ar' => 'required|min:3|string',
            'description' => 'required|min:3|string',
            'description_ar' => 'required|min:3|string',
            'title1' => 'required|min:3|string',
            'title1_ar' => 'required|min:3|string',
            'title2' => 'required|min:2|string',
            'title2_ar' => 'required|min:2|string',
            'points' => 'nullable|string',
            'points_ar' => 'nullable|string',
            'points_2' => 'nullable|string',
            'points_2_ar' => 'nullable|string',
            'image_url' => 'required|url',
            'image_url1' => 'required|url',
            'image_url2' => 'required|url',

            // 'service_type' => 'required|min:3|string'

        ]);
        $pointsArray = explode(',', request('points'));
        $points = '[';
        foreach ($pointsArray as $point) {
            $points .= '"' . $point . '"' . ',';
        }
        $points = rtrim($points, ",");
        $points .= ']';

        $pointsarArray = explode(',', request('points_ar'));
        $points_ar = '[';
        foreach ($pointsarArray as $point_ar) {
            $points_ar .= '"' . $point_ar . '"' . ',';
        }
        $points_ar = rtrim($points_ar, ",");
        $points_ar .= ']';

        $points_2Array = explode(',', request('points_2'));
        $points_2 = '[';
        foreach ($points_2Array as $p) {
            $points_2 .= '"' . $p . '"' . ',';
        }
        $points_2 = rtrim($points_2, ',');
        $points_2 .= ']';

        $points_2arArray = explode(',', request('points_2_ar'));
        $points_2_ar = '[';
        foreach ($points_2arArray as $pr) {
            $points_2_ar .= '"' . $pr . '"' . ',';
        }
        $points_2_ar = rtrim($points_2_ar, ',');
        $points_2_ar .= ']';

        // $service = Service::create($validated);
        $service = new Service();
        $service->name = $validated['name'];
        $service->name_ar = $validated['name_ar'];
        $service->description = $validated['description'];
        $service->description_ar = $validated['description_ar'];
        $service->title1 = $validated['title1'];
        $service->title1_ar = $validated['title1_ar'];
        $service->title2 = $validated['title2'];
        $service->title2_ar = $validated['title2_ar'];
        $service->points = $points;
        $service->points_ar = $points_ar;
        $service->points_2 = $points_2;
        $service->points_2_ar = $points_2_ar;
        $service->image_url = $validated['image_url'];
        $service->image_url1 = $validated['image_url1'];
        $service->image_url2 = $validated['image_url2'];
        $service->save();
        return response()->json([
            'success' => true,
            'data' => $service
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  Service  $service
     * @return JsonResponse
     */
    public function show(Service $service): JsonResponse
    {
        //
        return response()->json([
            'success' => true,
            'data' => $service
        ]);
    }

    // public function filter($type): JsonResponse
    // {
    //     $services = Service::where('type', $type)->get();
    //     return response()->json([
    //         'success' => true,
    //         'data' => $services
    //     ]);
    // }
    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  Service  $service
     * @return JsonResponse
     */
    public function update(Request $request, Service $service)
    {
        //
        $validated = $request->validate([
            'name' => 'min:3|string',
            'name_ar' => 'min:3|string',
            'description' => 'min:3|string',
            'description_ar' => 'min:3|string',
            'title1' => 'min:3|string',
            'title1_ar' => 'min:3|string',
            'title2' => 'min:2|string',
            'title2_ar' => 'min:2|string',
            'points' => 'string',
            'points_ar' => 'string',
            'points_2' => 'string',
            'points_2_ar' => 'string',
            'image_url' => 'url',
            'image_url1' => 'url',
            'image_url2' => 'url'

        ]);
        $pointsArray = explode(',', request('points'));
        $points = '[';
        foreach ($pointsArray as $point) {
            $points .= '"' . $point . '"' . ',';
        }
        $points = rtrim($points, ",");
        $points .= ']';

        $pointsarArray = explode(',', request('points_ar'));
        $points_ar = '[';
        foreach ($pointsarArray as $point_ar) {
            $points_ar .= '"' . $point_ar . '"' . ',';
        }
        $points_ar = rtrim($points_ar, ",");
        $points_ar .= ']';

        $points_2Array = explode(',', request('points_2'));
        $points_2 = '[';
        foreach ($points_2Array as $p) {
            $points_2 .= '"' . $p . '"' . ',';
        }
        $points_2 = rtrim($points_2, ',');
        $points_2 .= ']';

        $points_2arArray = explode(',', request('points_2_ar'));
        $points_2_ar = '[';
        foreach ($points_2arArray as $pr) {
            $points_2_ar .= '"' . $pr . '"' . ',';
        }
        $points_2_ar = rtrim($points_2_ar, ',');
        $points_2_ar .= ']';


        // $service = Service::create($validated);
        $service->name = $validated['name'];
        $service->name_ar = $validated['name_ar'];
        $service->description = $validated['description'];
        $service->description_ar = $validated['description_ar'];
        $service->title1 = $validated['title1'];
        $service->title1_ar = $validated['title1_ar'];
        $service->title2 = $validated['title2'];
        $service->title2_ar = $validated['title2_ar'];
        $service->points = $points;
        $service->points_ar = $points_ar;
        $service->points_2 = $points_2;
        $service->points_2_ar = $points_2_ar;
        $service->image_url = $validated['image_url'];
        $service->image_url = $validated['image_url1'];
        $service->image_url = $validated['image_url2'];
        $service->save();
        return response()->json([
            'success' => true,
            'data' => $service
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Service  $service
     * @return JsonResponse
     * @throws Exception
     */
    public function destroy(Service $service): JsonResponse
    {
        //
        try {
            $service->delete();
            return response()->json([
                'success' => true,
                'data' => $service
            ]);
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ]);
        }
    }
}
