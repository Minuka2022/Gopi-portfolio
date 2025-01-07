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
        $articles = Article::all();
        return view('Admin.Article-manage' , ['articles' => $articles]);
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

            return redirect()->route('Dashboard-Create-Article')->with('success', 'Article created successfully!');
        }


        public function edit($id)
        {
            // Fetch the article with its associated images
            $article = Article::with('images')->findOrFail($id);

            // Dump the article data and continue execution
            //dump($article);

            // Return the view
            return view('Admin.EditArticle', compact('article'));
        }


        public function update(Request $request, $id)
            {
                $article = Article::findOrFail($id);

                // Validate the request
                $validated = $request->validate([
                    'title' => 'required|string|max:255',
                    'description' => 'required|string',
                    'content' => 'required|string',
                    'new_images' => 'nullable|array',
                    'new_images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
                ]);

                // Update the article text
                $article->update([
                    'title' => $validated['title'],
                    'description' => $validated['description'],
                    'content' => $validated['content'],
                ]);

                // Handle new images if any
                if ($request->has('new_images')) {
                    foreach ($request->file('new_images') as $image) {
                        $path = $image->store('Article-image', 'public');
                        $article->images()->create(['image' => $path]);
                    }
                }

                // Handle deleted images if any
                if ($request->has('deleted_images')) {
                    $deletedImages = $request->deleted_images;
                    foreach ($deletedImages as $deletedImageId) {
                        $image = ArticleImage::find($deletedImageId);
                        if ($image && Storage::exists('public/Article-image/' . $image->image)) {
                            Storage::delete('public/Article-image/' . $image->image);
                            $image->delete();
                        }
                    }
                }

                return redirect()->route('Dashboard-Article')->with('updated', 'Article updated successfully!');
            }




            public function deleteImage($id)
                {
                    try {
                        $image = ArticleImage::findOrFail($id);

                        // Delete the image file from storage
                        $filePath = public_path('storage/' . $image->image);
                        if (file_exists($filePath)) {
                            unlink($filePath);
                        }

                        // Delete the image record from the database
                        $image->delete();

                        return response()->json(['success' => true, 'message' => 'Image deleted successfully']);
                    } catch (\Exception $e) {
                        Log::error('Error deleting image: ' . $e->getMessage());
                        return response()->json(['success' => false, 'message' => 'Error deleting image']);
                    }
                }
                public function delete($id)
                {
                    try {
                        // Find the article by ID
                        $article = Article::findOrFail($id);

                        // Delete associated images (if any)
                        foreach ($article->images as $image) {
                            $filePath = public_path('storage/' . $image->image);
                            if (file_exists($filePath)) {
                                unlink($filePath);
                            }
                            $image->delete();
                        }

                        // Delete the article
                        $article->delete();

                        return redirect()->route('Dashboard-Article')->with('success', 'Article Deleted successfully!');
                    } catch (\Exception $e) {
                        Log::error('Error deleting article: ' . $e->getMessage());
                        return response()->json(['success' => false, 'message' => 'Error deleting article']);
                    }
}







}
