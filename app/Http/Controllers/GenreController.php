<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;

class GenreController extends Controller
{
    // Read all data: GET /api/genres
    public function index()
    {
        $genres = Genre::all();
        return response()->json([
            'status'  => 'success',
            'message' => 'Genres retrieved successfully.',
            'data'    => $genres
        ], 200);
    }

    // Create data: POST /api/genres
    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $genre = Genre::create($validated);

        return response()->json([
            'status'  => 'success',
            'message' => 'Genre created successfully.',
            'data'    => $genre
        ], 201);
    }
}
