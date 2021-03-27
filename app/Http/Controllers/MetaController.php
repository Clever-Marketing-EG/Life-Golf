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
    //  * @param Request $request
    //  * @param Meta $meta
    //  * @return JsonResponse
     */
    // public function __construct() {
    //     $this->middleware('AdminAuth')->except(['index']);
    //     $this->middleware('auth:api')->except(['index']);
    // }


    public function index(): JsonResponse
    {
        $metas = Meta::all();

        return response()->json([
            'success' => true,
            'data' => $metas
        ]);
    }
    public function showtextbypage($page)
    {
        $data = Meta::where("type", "text")->where("page", $page)->get();
        return $data;
    }
    public function showimagebypage($page)
    {
        $data = Meta::where("type", "image")->where("page", $page)->get();
        return $data;
    }
    public function getbyid($id)
    {
        $data = Meta::where("id", $id)->get();
        return $data;
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
