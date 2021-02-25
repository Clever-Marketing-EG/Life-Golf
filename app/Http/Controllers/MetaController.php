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
        $this->middleware('AdminAuth')->except(['index']);
        $this->middleware('auth:api')->except(['index']);
    }


    public function index(): JsonResponse
    {
        $metas = Meta::all();

        return response()->json([
            'success' => true,
            'data' => $metas
        ]);
    }


    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|min:3',
            'content' => 'required|string|min:3',
            'content_ar' => 'required|string|min:3',
            'type' => 'required|string|in:image,text',
            'page' => 'required|string|min:3'
        ]);

        $meta = Meta::firstOrNew([
            'name' => $request['name'],
        ]);

        $meta->content  = $validated['content'];
        $meta->content_ar  = $validated['content_ar'];
        $meta->type = $validated['type'];
        $meta->page  = $validated['page'];
        $meta->save();

        return response()->json([
            "success" => true,
            "data"=> $meta
        ]);
    }
}
