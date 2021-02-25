<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminAuth
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(auth()->user()['admin'] !== 'true') {
           return response()->json([
               'success' => false,
               'message' => 'Unauthorized, need admin privilege'
           ], 401);
        }

        return $next($request);
    }
}
