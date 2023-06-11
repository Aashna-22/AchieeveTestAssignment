<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function create()
    {
         return view('create_genre');
    }
    public function store(Request $request)
    {
        
        $genre = new Genre();
        $genre->genre = $request->input('name');
        $genre->save();
        return redirect()->back()->with('success', 'New Genre added');
    
    }
}
