<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GameResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'release_date' => $this->release_date,
            'cover_image' => $this->cover_image,

            // Carga condicional de relaciones para evitar redundancia
            'developer' => new DeveloperResource($this->whenLoaded('developer')),
            'engine' => new EngineResource($this->whenLoaded('engine')),
            'genres' => GenreResource::collection($this->whenLoaded('genres')),
            'platforms' => PlatformResource::collection($this->whenLoaded('platforms')),
            'characters' => CharacterResource::collection($this->whenLoaded('characters')),
        ];
    }
}
