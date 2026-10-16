<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Game;
use App\Http\Resources\GameResource;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index(Request $request)
    {
        $query = Game::with(['developer', 'engine', 'genres', 'platforms']);

        // Filtro opcional por búsqueda de título: /api/games?search=Hollow
        if ($request->has('search')) {
            $query->where('title', 'LIKE', '%' . $request->search . '%');
        }

        // Filtro opcional por motor gráfico: /api/games?engine=Unity
        if ($request->has('engine')) {
            $query->whereHas('engine', function ($q) use ($request) {
                $q->where('name', 'LIKE', '%' . $request->engine . '%');
            });
        }

        // Paginación de 10 elementos por página
        return GameResource::collection($query->paginate(10));
    }

    public function show(Game $game)
    {
        // Carga todas las relaciones incluyendo personajes con su rol pivote
        $game->load(['developer', 'engine', 'genres', 'platforms', 'characters']);

        return new GameResource($game);
    }
}
