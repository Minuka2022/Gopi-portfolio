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
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('Gallery-images', 'public');
            $url = asset('storage/' . $path);

            Gallery::create([
                'name' => $request->file('image')->getClientOriginalName(),
                'photo' => $path
            ]);

            return response()->json(['success' => true]);
        }

        return response()->json(['success' => false]);
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
