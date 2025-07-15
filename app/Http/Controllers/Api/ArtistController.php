<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Artist;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    // GET /api/artists
    public function index()
    {
        // Get all artists
        return Artist::all(); // Automatically returns JSON in API routes
    }

    // GET /api/artists/{id}
    public function show(Request $request, string $uuid)
    {
        // Get one artist by ID
        $artist = Artist::findOrFail($uuid);
        return $artist;
    }
}
