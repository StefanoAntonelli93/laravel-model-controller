<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        // trasformo in array associativo
        $data = [
            'movies' => $movies
        ];
        // dd($movies);
        return view('welcome', $data);
    }

    // funzione parametrica  
    public function show($id)
    {
        // cerco per id i film 
        $movie = Movie::find($id);
        if ($movie === NULL) {
            return 'film non trovato';
        }
        // dd($movie);
        return view('movie', compact('movie'));
    }
}
