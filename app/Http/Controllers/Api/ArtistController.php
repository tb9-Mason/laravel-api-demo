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
    public function show($id)
    {
        // Get one artist by ID
        $artists = Artist::all();
        return $artists->findOrFail($id);
    }

    // POST /api/artists
    public function store(Request $request)
    {
        $artist = Artist::create($request->only(['name', 'start_year', 'end_year']));
        return response()->json($artist, 201);
    }
}
