<?php

namespace App\Http\Controllers;

use App\Models\Venue;
use Illuminate\Http\Request;

class VenueController extends Controller
{
    public function create()
    {
         return view('create_venue');
    }
    public function store(Request $request)
    {
        
        $venue = new Venue();
        $venue->name = $request->input('name');
        $venue->address = $request->input('address');
        $venue->mobile = $request->input('mobile');
        $venue->save();
        return redirect()->back()->with('success', 'New Venue added');
    
    }
}
