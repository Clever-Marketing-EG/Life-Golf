<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        $this->middleware('auth:api')->only(['store', 'update', 'destroy']);
    }

    public function jsonResponse($data, $status = true): JsonResponse
    {
        return response()->json(array_merge(
            ['success' => $status],
            is_array($data) ? $data : $data->toArray(),
        ));

    }
}
