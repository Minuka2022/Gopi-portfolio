<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function index()
    {
        $images = Gallery::latest()->get();
        return view('Admin.Gallery-manage', compact('images'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'images' => 'required|array',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:10240'
        ]);

        $uploadedCount = 0;

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('Gallery-images', 'public');
                
                Gallery::create([
                    'name' => $image->getClientOriginalName(),
                    'photo' => $path
                ]);
                
                $uploadedCount++;
            }

            return response()->json([
                'success' => true,
                'message' => $uploadedCount . ' images uploaded successfully'
            ]);
        }

        return response()->json(['success' => false, 'message' => 'No images were uploaded']);
    }

    public function destroy(Gallery $gallery)
    {
        if (Storage::disk('public')->exists($gallery->photo)) {
            Storage::disk('public')->delete($gallery->photo);
        }

        $gallery->delete();
        return response()->json(['success' => true]);
    }
}
