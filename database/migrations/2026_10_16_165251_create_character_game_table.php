<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('character_game', function (Blueprint $table) {
            $table->id();
            $table->foreignId('character_id')->constrained()->cascadeOnDelete();
            $table->foreignId('game_id')->constrained()->cascadeOnDelete();
            $table->string('role')->default('Secundario'); // Ej. Protagonista, NPC, Jefe
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('character_game');
    }
};
