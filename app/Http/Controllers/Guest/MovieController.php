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
}
