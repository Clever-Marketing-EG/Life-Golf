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
//        dd($certificates);
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
              'certificate_name' => 'required|min:3|string'

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
     * @param  int  $id
     * @return JsonResponse
     */
    public function show($id)
    {
        //
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return JsonResponse
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return JsonResponse
     * @throws Exception
     */
    public function destroy($id)
    {
        //
    }
}
