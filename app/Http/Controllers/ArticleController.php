<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ArticleImage;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Storage;
// use Illuminate\Support\Facades\Log;

class ArticleController extends Controller
{
    public function index()
    {
        return view('Admin.Article-manage');
    }

    public function create()
    {
        return view('Admin.A_Create');
    }

      public function uploadImage(Request $request)
            {
                $request->validate([
                    'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
                ]);

                if ($request->hasFile('image')) {
                    try {
                        $path = $request->file('image')->store('Article-images', 'public');
                        $url = asset('storage/' . $path);

                        return response()->json([
                            'success' => true,
                            'file_path' => $path,
                            'file_url' => $url,
                        ]);
                    } catch (\Exception $e) {
                        return response()->json(['success' => false, 'message' => $e->getMessage()], 500);
                    }
                }

                return response()->json(['success' => false, 'message' => 'No image uploaded.'], 400);
            }


public function store(Request $request)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'content' => 'required|string',
        'uploaded_images' => 'nullable|string', // JSON string of uploaded image paths
    ]);

    $article = Article::create($request->only(['title', 'description', 'content']));

    if ($request->uploaded_images) {
        $images = json_decode($request->uploaded_images, true);

        foreach ($images as $path) {
            ArticleImage::create([
                'article_id' => $article->id,
                'image' => $path,
            ]);
        }
    }

    return redirect()->route('Dashboard-Article')->with('success', 'Article created successfully!');
}

}
