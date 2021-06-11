<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PartnerController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $partners = Partner::all();
        return response()->json([
            'success' => true,
            'data' => $partners
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
        $partner = Partner::create($validated);
        return response()->json([
            'success' => true,
            'data' => $partner
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param Partner $partner
     * @return JsonResponse
     */
    public function show(Partner $partner): JsonResponse
    {
        return response()->json([
            'success' => true,
            'data' => $partner
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Partner $partner
     * @return JsonResponse
     */
    public function update(Request $request, Partner $partner): JsonResponse
    {
        $validated = $request->validate([
            'name' => 'min:3|string',
            'name_ar' => 'min:3|string',
            'image_url' => 'url'
        ]);

        $partner->update($validated);

        return response()->json([
            'success' => true,
            'data' => $partner
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Partner $partner
     * @return JsonResponse
     * @throws Exception
     */
    public function destroy(Partner $partner): JsonResponse
    {
        try {
            $partner->delete();
            return response()->json([
                'success' => true,
                'data' => $partner
            ]);
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ]);
        }
    }


}
