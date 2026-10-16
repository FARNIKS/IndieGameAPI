<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Developer;
use App\Http\Resources\DeveloperResource;

class DeveloperController extends Controller
{
    public function index()
    {
        return DeveloperResource::collection(Developer::withCount('games')->get());
    }

    public function show(Developer $developer)
    {
        $developer->load('games');

        return new DeveloperResource($developer);
    }
}
