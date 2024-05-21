<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }
    public function show($id)
    {
        $booksDetail = Book::find($id);
        return view('books.show', compact('booksDetail'));
    }
}
