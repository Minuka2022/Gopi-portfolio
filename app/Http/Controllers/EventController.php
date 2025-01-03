<?php

namespace App\Http\Controllers;

use App\Models\event;
use App\Models\eventimages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;  // <-- This line needs to be added
use Illuminate\Validation\ValidationException;

class EventController extends Controller
{
    public function index()
    {
        $events = event::all();
        return view('Admin.Event-manage', compact('events'));
    }

    public function create()
    {
        return view('Admin.E_create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'content' => 'required|string',
            'uploaded_images' => 'nullable|string'
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $event = event::create([
            'title' => $request->title,
            'description' => $request->description,
            'content' => $request->content,
        ]);

        // Handle the uploaded images from the JSON string
        if ($request->uploaded_images) {
            $imagePaths = json_decode($request->uploaded_images, true);
            foreach ($imagePaths as $path) {
                eventimages::create([
                    'event_id' => $event->id,
                    'image' => $path
                ]);
            }
        }

        return redirect()->route('Dashboard-Event')->with('success', 'Event created successfully!');
    }

    public function uploadImage(Request $request)
    {
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $image = $request->file('image');
            $path = $image->store('Event-images', 'public');

            return response()->json([
                'success' => true,
                'file_path' => $path,
                'file_url' => Storage::url($path)
            ]);
        }
        return response()->json(['success' => false, 'message' => 'Failed to upload image.']);
    }
}
