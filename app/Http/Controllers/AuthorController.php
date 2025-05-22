<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{
    // Read all data: GET /api/authors
    public function index()
    {
        $authors = Author::all();
        return response()->json([
            'status'  => 'success',
            'message' => 'Authors retrieved successfully.',
            'data'    => $authors
        ], 200);
    }

    // Create data: POST /api/authors
    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $author = Author::create($validated);

        return response()->json([
            'status'  => 'success',
            'message' => 'Author created successfully.',
            'data'    => $author
        ], 201);
    }

    public function show($id)
    {
        $author = Author::find($id);

        if (!$author) {
            return response()->json([
                'status'  => 'error',
                'message' => 'Author not found.',
            ], 404);
        }

        return response()->json([
            'status'  => 'success',
            'message' => 'Author retrieved successfully.',
            'data'    => $author
        ], 200);
    }

    public function update(Request $request, $id)
    {
        $author = Author::find($id);

        if (!$author) {
            return response()->json([
                'status'  => 'error',
                'message' => 'Author not found.',
            ], 404);
        }

        // Validasi input
        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $author->update($validated);

        return response()->json([
            'status'  => 'success',
            'message' => 'Author updated successfully.',
            'data'    => $author
        ], 200);
    }

    public function destroy($id)
    {
        $author = Author::find($id);

        if (!$author) {
            return response()->json([
                'status'  => 'error',
                'message' => 'Author not found.',
            ], 404);
        }

        $author->delete();

        return response()->json([
            'status'  => 'success',
            'message' => 'Author deleted successfully.',
        ], 200);
    }
}
