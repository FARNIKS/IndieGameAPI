<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Engine;
use App\Http\Resources\EngineResource;

class EngineController extends Controller
{
    public function index()
    {
        return EngineResource::collection(Engine::withCount('games')->get());
    }

    public function show(Engine $engine)
    {
        $engine->load('games');

        return new EngineResource($engine);
    }
}
