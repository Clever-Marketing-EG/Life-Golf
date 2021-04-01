<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\Meta;

class MetaController extends Controller
{
    /**
     * Create a new ImagesController instance.
     *
     * @return void
     */
     public function __construct() {
         $this->middleware('auth:api')->only(['update']);
     }


    public function index(): JsonResponse
    {
        $metas = Meta::all();

        return response()->json([
            'success' => true,
            'data' => $metas
        ]);
    }

    public function update(Request $request, $id)
    {
        $affected = Meta::where('id', $id)->update([
            'content' => $request['content'],
            'content_ar' => $request['content_ar'],
        ]);
        return $affected;
    }

}
