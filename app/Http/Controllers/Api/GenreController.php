<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Genre;
use App\Http\Resources\GenreResource;

class GenreController extends Controller
{
    public function index()
    {
        return GenreResource::collection(Genre::all());
    }

    public function show(Genre $genre)
    {
        $genre->load('games');

        return new GenreResource($genre);
    }
}
