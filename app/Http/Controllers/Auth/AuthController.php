<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Response;

class AuthController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login', 'register']]);
    }

    /**
     * Get a JWT via given credentials.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function login(Request $request): JsonResponse
    {
        $request->validate([
            'email'   => 'required',
            'password'=> 'required',
        ]);
        $credentials = request(['email', 'password']);

        if (! $token = auth()->attempt($credentials)) {
            return response()->json(['errors' => ['result'=>'Unauthorized']], 401);
        }

        return $this->respondWithToken($token);
    }


    /**
     * Register
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function register(Request $request): JsonResponse
    {
        $request->validate([
            'name'    => 'required',
            'email'   => 'required',
            'password'=> 'required|confirmed',
        ]);

        User::create([
            'name'     => request('name'),
            'email'    => request('email'),
            'password' => Hash::make(request('password')),
        ]);

        return $this->login(request());
    }


    /**
     * Get the authenticated User.
     *
     * @return JsonResponse
     */
    public function me(): JsonResponse
    {
        return response()->json(auth()->user());
    }


    /**
     * Update the authenticated User.
     *
     * @param Request $request
     * @return Application|ResponseFactory|JsonResponse|\Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        auth()->user()->update($request->all());
        return response('update', Response::HTTP_ACCEPTED);
    }


    /**
     * Log the user out (Invalidate the token).
     *
     * @return JsonResponse
     */
    public function logout(): JsonResponse
    {
        auth()->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }


    /**
     * Refresh a token.
     *
     * @return JsonResponse
     */
    public function refresh(): JsonResponse
    {
        return $this->respondWithToken(auth()->refresh());
    }


    /**
     * Get the token array structure.
     *
     * @param string $token
     * @return JsonResponse
     */
    protected function respondWithToken(string $token): JsonResponse
    {
        return response()->json([
            'access_token' => $token,
            'token_type'   => 'bearer',
            'expires_in'   => auth()->factory('')->getTTL() * 3600,
            'user'         => auth()->user(),
        ]);
    }
}
