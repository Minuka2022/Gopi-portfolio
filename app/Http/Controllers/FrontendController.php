<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\event;
use Illuminate\Support\Facades\Log;
use App\Models\Article;
use App\Models\Gallery;
use App\Models\Testimonial;
use App\Models\TrustedLogo;


class FrontendController extends Controller
{
    //

    public function index() {
        $articles = Article::with('images')->orderBy('created_at', 'desc')->get();
        $events = Event::with('eventImages')->orderBy('created_at', 'desc')->get();
        $images = Gallery::latest()->take(12)->get();
        $testimonials = Testimonial::where('is_active', true)->orderBy('display_order')->get();
        $trustedLogos = TrustedLogo::where('is_active', true)->orderBy('display_order')->get();
        Log::info('Events' . $events);
        return view('User.index', compact('articles', 'events', 'images', 'testimonials', 'trustedLogos'));
    }


    public function article(){
        $articles = Article::with('images')->get();
        Log::info('Articles fetched' . $articles);
        return view('User.Articles' , compact('articles'));
    }

    public function event()
{
    // Fetch all events with their associated images
    $events = Event::with('eventImages')->get();
    Log::info('Events fetched' . $events);

    // Pass the data to the User.Events view
    return view('User.Events', compact('events'));
}


    public function gallery(){
        $images = Gallery::latest()->get();
        return view('User.Gallery', compact('images'));
    }



    public function showEvent($slug)
    {
        // Extract event ID from the slug
        $id = explode('-', $slug);
        $eventId = end($id);

        // Fetch the event
        $event = Event::with('eventImages')->findOrFail($eventId);

        return view('User.Event-content', compact('event'));
    }

    public function showArticle($slug) {
       $id = explode('-', $slug);
       $articleId = end($id);
       $article = Article::with('images')->findOrFail($articleId);
       return view('User.Articl-content', compact('article'));
    }


}
