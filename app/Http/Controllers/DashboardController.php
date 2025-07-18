<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Event;
use App\Models\Gallery;
use App\Models\Testimonial;
use App\Models\TrustedLogo;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display the dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Redirect to the article dashboard which is our main dashboard
        return redirect()->route('Dashboard-Article');
        
        /* Uncomment this if you want a separate dashboard page
        $stats = [
            'articles' => Article::count(),
            'events' => Event::count(),
            'gallery_items' => Gallery::count(),
            'testimonials' => Testimonial::count(),
            'trusted_logos' => TrustedLogo::count(),
        ];

        // Get latest entries for each section
        $latestArticles = Article::latest()->take(5)->get();
        $latestEvents = Event::latest()->take(5)->get();
        $latestTestimonials = Testimonial::latest()->take(5)->get();

        return view('dashboard.index', [
            'stats' => $stats,
            'latestArticles' => $latestArticles,
            'latestEvents' => $latestEvents,
            'latestTestimonials' => $latestTestimonials,
        ]);
        */
    }
}
