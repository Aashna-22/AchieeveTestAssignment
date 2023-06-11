<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    public function create()
    {
         return view('create_artist');
    }
    public function store(Request $request)
    {
        
        $artist = new Artist();
        $artist->name = $request->input('name');
        $artist->save();
        return redirect()->back()->with('success', 'New Artist added');
    
    }
}
