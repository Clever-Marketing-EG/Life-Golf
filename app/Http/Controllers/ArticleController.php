<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Article;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $articles = Article::paginate(30)->toArray();

        return response()->json(
            array_merge(
                ['success' => true],
                $articles,
            )
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'title' => 'required|min:3|string',
            'title_ar' => 'required|min:3|string',
            'content' => 'required|min:3|string',
            'content_ar' => 'required|min:3|string',
            'image_url' => 'required|url',
            'category_id' => 'required|integer|exists:categories,id'

        ]);

        $article = new Article();
        $article['title'] = $validated['title'];
        $article['title_ar'] = $validated['title_ar'];
        $article['content'] = $validated['content'];
        $article['content_ar'] = $validated['content_ar'];
        $article['image_url'] = $validated['image_url'];
        $article['category_id'] = $validated['category_id'];
        
        return response()->json([
            'success' => true,
            'data' => $article
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param Article $article
     * @return JsonResponse
     */
    public function show(Article $article): JsonResponse
    {
        $article = $article->load('category');
        return response()->json([
            'success' => true,
            'data' => $article  
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Article $article
     * @return JsonResponse
     */
    public function update(Request $request, Article $article): JsonResponse
    {
        $validated = $request->validate([
            'title' => 'min:3|string',
            'title_ar' => 'min:3|string',
            'content' => 'min:3|string',
            'content_ar' => 'min:3|string',
            'image_url' => 'url',
            'category_id' => 'integer|exists:categories,id'
        ]);

        $article->update($validated);

        return response()->json([
            'success' => true,
            'data' => $article
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Article $article
     * @return JsonResponse
     */
    public function destroy(Article $article): JsonResponse
    {
        try {
            $article->delete();
            return response()->json([
                'success' => true,
                'data' => $article
            ]);
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ]);
        }
    }
}
