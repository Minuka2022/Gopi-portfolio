<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TrustedLogo;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class TrustedLogoController extends Controller
{
    /**
     * Display a listing of trusted logos.
     */
    public function index()
    {
        $trustedLogos = TrustedLogo::orderBy('display_order')->get();
        return view('Admin.trusted-logos-manage', compact('trustedLogos'));
    }

    /**
     * Show the form for creating a new trusted logo.
     */
    public function create()
    {
        return view('Admin.trusted-logos-create');
    }

    /**
     * Store a newly created trusted logo in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'company_name' => 'required|string|max:255',
            'logo_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'website_url' => 'nullable|url|max:255',
            'display_order' => 'nullable|integer',
            'is_active' => 'nullable|boolean'
        ]);

        $logoData = $request->except('logo_image');
        
        // Handle image upload
        if ($request->hasFile('logo_image')) {
            $image = $request->file('logo_image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('assets/images/trusted-logos'), $imageName);
            $logoData['logo_image'] = 'assets/images/trusted-logos/' . $imageName;
        }

        // Set default values
        $logoData['is_active'] = $request->has('is_active') ? true : false;
        $logoData['display_order'] = $request->display_order ?? 0;

        TrustedLogo::create($logoData);

        return redirect()->route('Dashboard-TrustedLogos')->with('success', 'Trusted logo created successfully');
    }

    /**
     * Show the form for editing the specified trusted logo.
     */
    public function edit($id)
    {
        $trustedLogo = TrustedLogo::findOrFail($id);
        return view('Admin.trusted-logos-edit', compact('trustedLogo'));
    }

    /**
     * Update the specified trusted logo in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'company_name' => 'required|string|max:255',
            'logo_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'website_url' => 'nullable|url|max:255',
            'display_order' => 'nullable|integer',
            'is_active' => 'nullable|boolean'
        ]);

        $trustedLogo = TrustedLogo::findOrFail($id);
        $logoData = $request->except('logo_image');
        
        // Handle image upload
        if ($request->hasFile('logo_image')) {
            // Delete old image if exists
            if ($trustedLogo->logo_image && file_exists(public_path($trustedLogo->logo_image))) {
                unlink(public_path($trustedLogo->logo_image));
            }
            
            $image = $request->file('logo_image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('assets/images/trusted-logos'), $imageName);
            $logoData['logo_image'] = 'assets/images/trusted-logos/' . $imageName;
        }

        // Set default values
        $logoData['is_active'] = $request->has('is_active') ? true : false;
        $logoData['display_order'] = $request->display_order ?? 0;

        $trustedLogo->update($logoData);

        return redirect()->route('Dashboard-TrustedLogos')->with('success', 'Trusted logo updated successfully');
    }

    /**
     * Remove the specified trusted logo from storage.
     */
    public function delete(Request $request, $id)
    {
        $trustedLogo = TrustedLogo::findOrFail($id);
        
        // Delete image if exists
        if ($trustedLogo->logo_image && file_exists(public_path($trustedLogo->logo_image))) {
            unlink(public_path($trustedLogo->logo_image));
        }
        
        $trustedLogo->delete();

        return redirect()->route('Dashboard-TrustedLogos')->with('success', 'Trusted logo deleted successfully');
    }
}
