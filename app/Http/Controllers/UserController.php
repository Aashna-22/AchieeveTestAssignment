<?php

namespace App\Http\Controllers;

use App\Models\Events;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $events = Events::all();
        return view('users', compact('events'));
    }
}
