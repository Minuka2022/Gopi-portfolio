<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ArticleImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

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

    public function store(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'content' => 'required|string',
            'images.*' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Store article data
        $article = Article::create($request->only(['title', 'description', 'content']));

        // Handle image uploads
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                // Save to the public disk and get the path
                $publicPath = $image->store('Article-images', 'public');
                Log::info("Image saved to public disk: $publicPath");

                // Save the image URL to the database
                ArticleImage::create([
                    'article_id' => $article->id,
                    'image' => $publicPath, // Store only the public path in the database
                ]);
            }
        } else {
            Log::error('No images were uploaded.');
        }

        // Return redirect with success message
        return redirect()->route('Dashboard-Article')->with('success', 'Article created successfully!');
    }
}
