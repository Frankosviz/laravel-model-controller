<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class HomeController extends Controller
{
    public function index(){
        $books = Book::all();
        // dd($books);
        return view('home', compact('books'));
    }
}