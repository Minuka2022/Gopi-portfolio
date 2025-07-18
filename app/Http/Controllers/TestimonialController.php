<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonial;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    /**
     * Display a listing of testimonials.
     */
    public function index()
    {
        $testimonials = Testimonial::orderBy('display_order')->get();
        return view('Admin.testimonials-manage', compact('testimonials'));
    }

    /**
     * Show the form for creating a new testimonial.
     */
    public function create()
    {
        return view('Admin.testimonials-create');
    }

    /**
     * Store a newly created testimonial in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'client_name' => 'required|string|max:255',
            'client_position' => 'nullable|string|max:255',
            'client_company' => 'nullable|string|max:255',
            'testimonial_text' => 'required|string',
            'client_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'display_order' => 'nullable|integer',
            'is_active' => 'nullable|boolean'
        ]);

        $testimonialData = $request->except('client_image');
        
        // Handle image upload
        if ($request->hasFile('client_image')) {
            $image = $request->file('client_image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('assets/images/testimonials'), $imageName);
            $testimonialData['client_image'] = 'assets/images/testimonials/' . $imageName;
        }

        // Set default values
        $testimonialData['is_active'] = $request->has('is_active') ? true : false;
        $testimonialData['display_order'] = $request->display_order ?? 0;

        Testimonial::create($testimonialData);

        return redirect()->route('Dashboard-Testimonials')->with('success', 'Testimonial created successfully');
    }

    /**
     * Show the form for editing the specified testimonial.
     */
    public function edit($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        return view('Admin.testimonials-edit', compact('testimonial'));
    }

    /**
     * Update the specified testimonial in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'client_name' => 'required|string|max:255',
            'client_position' => 'nullable|string|max:255',
            'client_company' => 'nullable|string|max:255',
            'testimonial_text' => 'required|string',
            'client_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'display_order' => 'nullable|integer',
            'is_active' => 'nullable|boolean'
        ]);

        $testimonial = Testimonial::findOrFail($id);
        $testimonialData = $request->except('client_image');
        
        // Handle image upload
        if ($request->hasFile('client_image')) {
            // Delete old image if exists
            if ($testimonial->client_image && file_exists(public_path($testimonial->client_image))) {
                unlink(public_path($testimonial->client_image));
            }
            
            $image = $request->file('client_image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('assets/images/testimonials'), $imageName);
            $testimonialData['client_image'] = 'assets/images/testimonials/' . $imageName;
        }

        // Set default values
        $testimonialData['is_active'] = $request->has('is_active') ? true : false;
        $testimonialData['display_order'] = $request->display_order ?? 0;

        $testimonial->update($testimonialData);

        return redirect()->route('Dashboard-Testimonials')->with('success', 'Testimonial updated successfully');
    }

    /**
     * Remove the specified testimonial from storage.
     */
    public function delete(Request $request, $id)
    {
        $testimonial = Testimonial::findOrFail($id);
        
        // Delete image if exists
        if ($testimonial->client_image && file_exists(public_path($testimonial->client_image))) {
            unlink(public_path($testimonial->client_image));
        }
        
        $testimonial->delete();

        return redirect()->route('Dashboard-Testimonials')->with('success', 'Testimonial deleted successfully');
    }
}
