<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ImagesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api');
    }


    /**
     * Save Category image
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function categories(Request $request): JsonResponse
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
            'name' => 'required|string|min:3'
        ]);

        $imageName = $request['name'].'_'.time().'.'.$request['image']->extension();
        $request['image']->storeAs('public/categories_images', $imageName);

        return response()->json([
            "success" => true,
            'image_url' => asset('storage/categories_images/'.$imageName)
        ]);
    }


    /**
     * Save Product Specs image
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function specs(Request $request): JsonResponse
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240'
        ]);

        $path = $request->file('image')->store('specs_images', 'public');

        return response()->json([
            "success" => true,
            'image_url' => asset('storage/'.$path)
        ]);
    }


    /**
     * Save certificate Image
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function certificates(Request $request): JsonResponse
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240'
        ]);

        $path = $request->file('image')->store('certificates_images', 'public');

        return response()->json([
            "success" => true,
            'image_url' => asset('storage/'.$path)
        ]);
    }
    /**
     * Save video Image
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function videos(Request $request): JsonResponse
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240'
        ]);

        $path = $request->file('image')->store('videos_images', 'public');

        return response()->json([
            "success" => true,
            'image_url' => asset('storage/'.$path)
        ]);
    }
      /**
     * Save Gallery Image
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function galleries(Request $request): JsonResponse
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240'
        ]);

        $path = $request->file('image')->store('galleries_images', 'public');

        return response()->json([
            "success" => true,
            'image_url' => asset('storage/'.$path)
        ]);
    }

    private function generateRandomString($length = 10): string
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    /**
     * Save Product image
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function products(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
            'product_id' => 'required|integer|exists:products,id'
        ]);

        $imageName = $this->generateRandomString().'_'.time().'.'.$request['image']->extension();
        $request['image']->storeAs('public/products_images', $imageName);

        $image = new Image();
        $image['url'] = asset('storage/products_images/'.$imageName);
        $image['product_id'] = $validated['product_id'];
        $image->save();

        return response()->json([
            "success" => true,
            'data' => $image
        ]);
    }


    /**
     * Save Article image
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function articles(Request $request): JsonResponse
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
            'name' => 'required|string|min:3'
        ]);

        $imageName = $request['name'].'_'.time().'.'.$request['image']->extension();
        $request['image']->storeAs('public/articles_images', $imageName);
        return response()->json([
            "success" => true,
            'image_url' => asset('storage/articles_images/'.$imageName)
        ]);
    }
    /**
     * Save Meta image
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function meta(Request $request): JsonResponse
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:100240',
            'name' => 'required|string|min:3'
        ]);
        $imageName = $request['name'].'_'.time().'.'.$request['image']->extension();
        $request['image']->storeAs('public/meta_images', $imageName);
        return response()->json([
            "success" => true,
            'image_url' => asset('storage/meta_images/'.$imageName)
        ]);
    }
}
