<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
   public function index()
    {
        $books = Book::with('author')->get();
        return view('books.index', compact('books'));
    }

    public function author()
    {
        return $this->belongsTo(Author::class); 
    }
};