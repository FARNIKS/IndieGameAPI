<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CharacterResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'image_url' => $this->image_url,
            // Muestra el rol en el juego si la relación pivote está cargada
            'role' => $this->whenPivotLoaded('character_game', function () {
                return $this->pivot->role;
            }),
            'games' => GameResource::collection($this->whenLoaded('games')),
        ];
    }
}
