<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Models\Events;
use App\Models\Genre;
use App\Models\Venue;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $events = Events::all();
        return view('home', compact('events'));
    }
    public function create()
    {
        $genres = Genre::all();
        $venues = Venue::all();
        $artists = Artist::all();
        $events = Events::all();
        return view('create_events', ['events' => $events, 'artists' => $artists, 'venues' => $venues, 'genres' => $genres]);
    }
    public function store(Request $request)
    {
        
        $event = new Events();
        $event->name = $request->input('name');
        $event->date = $request->input('date');
        $event->amount = $request->input('amount');
        $event->genre_id = $request->input('genre_id');
        $event->venue_id = $request->input('venue_id');
        $event->artist_id = $request->input('artist_id');
        $event->description = $request->input('description');
        if($request->hasFile('image')){
            $fileName = time().'_'.$request->image->getClientOriginalName();
            $imgfilePath = $request->file('image')->storeAs('uploads', $fileName,'public');
            $event->image = '/storage/' . $imgfilePath;
            
        }
        
        $event->save();
        return redirect()->route('home')->with('success', 'New Event added');
    
    }
    
}
