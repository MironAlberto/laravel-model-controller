<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Models
use App\Models\Movie;

class PageController extends Controller
{
    public function index()
    {
        $movies = Movie::all();

        return view('movies.index', compact('movies'));
    }   

    public function show($id)
    {
        $movie = Movie::where('id', $id)->first();

        return view('movies.show', compact('movie'));
    }
}

    
