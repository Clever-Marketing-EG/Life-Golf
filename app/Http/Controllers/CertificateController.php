<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Exception;
use App\Models\Certificate;
use GrahamCampbell\ResultType\Success;

class CertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse

     */
    public function index(): JsonResponse
    {
        $certificates = Certificate::all();
        return response()->json([
            'success' => true,
            'data' => $certificates
        ]);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return JsonResponse
     */
    public function store(Request $request):JsonResponse
    {
          $validated = $request->validate([
              'image_url' => 'required|url',
              'name' => 'required|min:3|string',
              'name_ar' => 'required|min:3|string'


          ]);

          $certificate = Certificate::create($validated);
          return response()->json([
            'success' => true,
            'data' => $certificate

          ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  Certificates $certificate
     * @return JsonResponse
     */
    public function show(Certificate $certificate): JsonResponse
    {
        return response()->json([
            'success' => true,
            'data' => $certificate
        ]);    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Certificate  $certificate
     * @return JsonResponse
     */
    public function update(Request $request, Certificate  $certificate)
    {

        $validated = $request->validate([
            'image_url' => 'url',
            'name' => 'min:3|string',
            'name_ar' => 'min:3|string'


        ]);

        $certificate->update($validated);
        return response()->json([
          'success' => true,
          'data' => $certificate

        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Certificate $certificate
     * @return JsonResponse
     * @throws Exception
     */
    public function destroy(Certificate $certificate)
    {
        try{
            $certificate->delete();
            return response()->json([
                'succes' => true,
                'data' => $certificate
            ]);

        }catch(Exception $e){
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ]);
        }
    }
}
