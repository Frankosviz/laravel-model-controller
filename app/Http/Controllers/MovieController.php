<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        return view('movies.index', compact('movies'));
    }
    public function show($id)
    {
        $moviesDetail = Movie::find($id);
        return view('movies.show', compact('moviesDetail'));
    }
}
