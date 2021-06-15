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

        $validated = Service::validate($request);

        $service = Service::create($validated);

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

    public function filter($name): JsonResponse
    {
        $services = Service::where('name', $name)->get();
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
        $validated = Service::validate($request);
        $service->update($validated);

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
