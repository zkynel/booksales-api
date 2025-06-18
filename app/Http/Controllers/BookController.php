<?php

namespace App\Http\Controllers;

use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::with('author')->get();
        return response()->json([
            'status'  => 'success',
            'message' => 'Books retrieved successfully.',
            'data'    => $books
        ], 200);
    }

    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}
