<?php

namespace App\Http\Controllers;

use App\Models\Author;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = Author::all();
        return response()->json([
            'status'  => 'success',
            'message' => 'Authors retrieved successfully.',
            'data'    => $authors
        ], 200);
    }
}
