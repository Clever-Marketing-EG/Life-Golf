<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Terms;
use Exception;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class TermsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $term = Terms::all();
        return response()->json([
            'success' => true,
            'data' => $term
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
            'name' => 'required|min:3|string',
            'name_ar' => 'required|min:3|string',
            'desc' => 'required|min:5|string',
            'desc_ar' => 'required|min:5|string'
        ]);
        $term = Terms::Create($validated);
        return response()->json([
            'success' => true,
            'data' => $term
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  Terms  $term
     * @return JsonResponse
     */
    public function show(Terms $term): JsonResponse
    {
        //
        return response()->json([
            'succes' => true,
            'data' => $term
        ]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Terms  $term
     * @return JsonResponse
     */
    public function update(Request $request, Terms $term)
    {
        //
        $validated = $request->validate([
            'name' => 'min:3|string',
            'name_ar' => 'min:3|string',
            'desc' => 'min:3|string',
            'desc_ar' => 'min:3|string'
        ]);
        $term->update($validated);
        return response()->json([
            'succes' => true,
            'data' => $term
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Terms $term
     * @return JsonResponse
     */
    public function destroy(Terms $term): JsonResponse
    {
        //
        try {
            $term->delete();
            return response()->json([
                'success' => true,
                'data' => $term
            ]);
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ]);
        }
    }
}
