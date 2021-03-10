<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Models\Service;
use Exception;

class ServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('AdminAuth', ['except' => ['index', 'show']]);
        $this->middleware('auth:api', ['except' => ['index', 'show']]);
    }
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
            'description' => 'required|min:3|string',
            'title1' => 'required|min:3|string',
            'title2' => 'required|min:2|string',
            'points' => 'nullable|string',
            'points_2' => 'nullable|string',
            'service_type' => 'required|min:3|string'

        ]);
        $pointsArray = explode(',', request('points'));
        $points = '[';
        foreach ($pointsArray as $point) {
            $points .= '"' . $point . '"' . ',';
        }
        $points = rtrim($points, ",");
        $points .= ']';

        $points_2Array = explode(',', request('points_2'));
        $points_2 = '[';
        foreach ($points_2Array as $p) {
            $points_2 .= '"' . $p . '"' . ',';
        }
        $points_2 = rtrim($points_2, ',');
        $points_2 .= ']';

        // $service = Service::create($validated);
        $service = new Service();
        $service->name = $validated['name'];
        $service->description = $validated['description'];
        $service->title1 = $validated['title1'];
        $service->title2 = $validated['title2'];
        $service->points = $points;
        $service->points_2 = $points_2;
        $service->service_type = $validated['service_type'];
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

    public function filter($type): JsonResponse
    {
        $services = Service::where('type', $type)->get();
        return response()->json([
            'success' => true,
            'data' => $services
        ]);
    }
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
            'description' => 'min:3|string',
            'title1' => 'min:3|string',
            'title2' => 'min:2|string',
            'points' => 'string',
            'points_2' => 'string',
            'service_type' => 'min:3|string'

        ]);
        $pointsArray = explode(',', request('points'));
        $points = '[';
        foreach ($pointsArray as $point) {
            $points .= '"' . $point . '"' . ',';
        }
        $points = rtrim($points, ",");
        $points .= ']';

        $points_2Array = explode(',', request('points_2'));
        $points_2 = '[';
        foreach ($points_2Array as $p) {
            $points_2 .= '"' . $p . '"' . ',';
        }
        $points_2 = rtrim($points_2, ',');
        $points_2 .= ']';

        // $service = Service::create($validated);
        $service->name = $validated['name'];
        $service->description = $validated['description'];
        $service->title1 = $validated['title1'];
        $service->title2 = $validated['title2'];
        $service->points = $points;
        $service->points_2 = $points_2;
        $service->service_type = $validated['service_type'];
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
