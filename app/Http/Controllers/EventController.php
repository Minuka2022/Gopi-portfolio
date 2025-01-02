<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\EventImages;

class EventController extends Controller
{
    //
    public function index () {
        return view('Admin.Event-manage');
    }


    public function create(){
        return view('Admin.E_Create');
    }



        public function uploadImages(Request $request)
        {
            // Validate images
            $request->validate([
                'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            $paths = [];
            foreach ($request->file('images') as $image) {
                // Store the image in the 'EventImage' folder
                $imagePath = $image->store('EventImage', 'public');
                $paths[] = basename($imagePath);  // Store only the image filename
            }

            return response()->json([
                'paths' => $paths,  // Return paths to frontend
            ]);
        }


    /**
     * Store a newly created event in storage.
     */
      public function store(Request $request)
        {
            $request->validate([
                'title' => 'required|string|max:255',
                'description' => 'required|string',
                'content' => 'required|string',
                'images' => 'required|array', // Validate images paths
                'images.*' => 'string', // Ensure each image path is a string
            ]);

            // Create the event
            $event = Event::create([
                'title' => $request->input('title'),
                'description' => $request->input('description'),
                'content' => $request->input('content'),
            ]);

            // Decode the images JSON string into an array
            $images = json_decode($request->input('images'), true);

            // Save event images
            foreach ($images as $imagePath) {
                EventImages::create([
                    'event_id' => $event->id,
                    'image' => $imagePath,
                ]);
            }

            return redirect()->route('Dashboard-Article')->with('success', 'Event created successfully!');
        }


}
