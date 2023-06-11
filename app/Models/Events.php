<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    use HasFactory;
    public function artist()
{
    return $this->belongsTo(Artist::class, 'artist_id');
}
public function venue()
{
    return $this->belongsTo(Venue::class, 'venue_id');
}
public function genre()
{
    return $this->belongsTo(Genre::class, 'genre_id');
}
}
