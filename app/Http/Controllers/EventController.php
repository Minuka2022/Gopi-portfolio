<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Eventimages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Log;


class EventController extends Controller
{
    public function index()
    {
        $events = event::all();
        return view('Admin.Event-manage', compact('events'));
    }

    public function create()
    {
        return view('Admin.E_Create');
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

    public function edit($id){
        $event = event::with('eventImages')->findOrFail($id);

        return view('Admin.EditEvent', compact('event'));
    }
    public function update(Request $request, $id)
    {
        $event = Event::findOrFail($id);

        // Validate the request
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'content' => 'required|string',
            'new_images' => 'nullable|array',
            'new_images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'deleted_images' => 'nullable|string'
        ]);

        // Update the event text
        $event->update([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'content' => $validated['content'],
        ]);

        // Handle new images if any
        if ($request->hasFile('new_images')) {
            foreach ($request->file('new_images') as $image) {
                // Store in Event-images folder
                $path = $image->store('Event-images', 'public');
                $event->eventImages()->create(['image' => $path]);
            }
        }

        // Handle deleted images if any
        if ($request->filled('deleted_images')) {
            $deletedImages = array_filter(explode(',', $request->deleted_images));
            foreach ($deletedImages as $deletedImageId) {
                $image = EventImages::find($deletedImageId);
                if ($image) {
                    // Delete the file from storage
                    if (Storage::disk('public')->exists($image->image)) {
                        Storage::disk('public')->delete($image->image);
                    }
                    // Delete the database record
                    $image->delete();
                }
            }
        }

        return redirect()->route('Dashboard-Event')->with('updated', 'Event updated successfully!');
    }

    public function deleteImage($id)
{
    try {
        $image = EventImages::findOrFail($id);

        // Log the image path for debugging
        Log::info('Attempting to delete image: ' . $image->image);

        // Check if file exists and log the result
        $fileExists = Storage::disk('public')->exists($image->image);
        Log::info('File exists in storage: ' . ($fileExists ? 'Yes' : 'No'));

        // Try to delete the file
        if ($fileExists) {
            try {
                Storage::disk('public')->delete($image->image);
            } catch (\Exception $e) {
                Log::error('Storage deletion error: ' . $e->getMessage());
                return response()->json([
                    'success' => false,
                    'message' => 'Storage deletion failed: ' . $e->getMessage()
                ], 500);
            }
        }

        // Delete the database record
        $image->delete();

        return response()->json(['success' => true]);
    } catch (\Exception $e) {
        Log::error('Image deletion error: ' . $e->getMessage());
        return response()->json([
            'success' => false,
            'message' => 'Error: ' . $e->getMessage()
        ], 500);
    }
}

public function delete($id)
{
    try {
        // Find the event by ID
        $event = Event::findOrFail($id);

        // Delete associated images
        foreach ($event->eventImages as $image) {
            // Log the image path for debugging
            Log::info('Attempting to delete image: ' . $image->image);

            // Check if file exists
            if (Storage::disk('public')->exists($image->image)) {
                // Try to delete the file
                try {
                    Storage::disk('public')->delete($image->image);
                } catch (\Exception $e) {
                    Log::error('Storage deletion error: ' . $e->getMessage());
                    return response()->json([
                        'success' => false,
                        'message' => 'Storage deletion failed: ' . $e->getMessage()
                    ], 500);
                }
            }

            // Delete the image record from the database
            $image->delete();
        }

        // Finally, delete the event
        $event->delete();


        return redirect()->route('Dashboard-Event')->with('deleted', 'Event deleted successfully!');
    } catch (\Exception $e) {
        Log::error('Event deletion error: ' . $e->getMessage());
        return response()->json([
            'success' => false,
            'message' => 'Error: ' . $e->getMessage()
        ], 500);
    }
}


    /**
     * Store a newly created event in storage.
     */



}
