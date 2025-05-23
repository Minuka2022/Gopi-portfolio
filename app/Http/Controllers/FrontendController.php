<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\event;
use Illuminate\Support\Facades\Log;
use App\Models\Article;
use App\Models\Gallery;


class FrontendController extends Controller
{
    //

    public function index() {
        $articles = article::with('images')->orderBy('created_at', 'desc')->get();
        $events = event::with('eventImages')->orderBy('created_at', 'desc')->get();
        $images = Gallery::latest()->take(12)->get();
        Log::info('Events' . $events);
        return view('User.index', compact('articles', 'events', 'images'));
    }


    public function article(){
        $articles = article::with('images')->get();
        Log::info('Articles fetched' . $articles);
        return view('User.Articles' , compact('articles'));
    }

    public function event()
{
    // Fetch all events with their associated images
    $events = event::with('eventImages')->get();
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
