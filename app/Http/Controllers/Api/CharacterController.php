<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Character;
use App\Http\Resources\CharacterResource;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    public function index(Request $request)
    {
        $query = Character::query();

        if ($request->has('search')) {
            $query->where('name', 'LIKE', '%' . $request->search . '%');
        }

        return CharacterResource::collection($query->paginate(10));
    }

    public function show(Character $character)
    {
        $character->load('games');

        return new CharacterResource($character);
    }
}
