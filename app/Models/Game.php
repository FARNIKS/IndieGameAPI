<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Game extends Model
{
    use HasFactory;

    protected $guarded = [];

    // Relación 1 a Muchos Inversa (Un juego pertenece a un Desarrollador)
    public function developer(): BelongsTo
    {
        return $this->belongsTo(Developer::class);
    }

    // Relación 1 a Muchos Inversa (Un juego pertenece a un Motor Gráfico)
    public function engine(): BelongsTo
    {
        return $this->belongsTo(Engine::class);
    }

    // Relación Muchos a Muchos (Un juego tiene muchos Géneros)
    public function genres(): BelongsToMany
    {
        return $this->belongsToMany(Genre::class);
    }

    // Relación Muchos a Muchos (Un juego está en muchas Plataformas)
    public function platforms(): BelongsToMany
    {
        return $this->belongsToMany(Platform::class);
    }

    // Relación Muchos a Muchos con atributo pivote `role`
    public function characters(): BelongsToMany
    {
        return $this->belongsToMany(Character::class)
            ->withPivot('role')
            ->withTimestamps();
    }
}
