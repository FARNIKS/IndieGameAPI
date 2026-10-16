<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Platform;
use App\Http\Resources\PlatformResource;

class PlatformController extends Controller
{
    public function index()
    {
        return PlatformResource::collection(Platform::all());
    }

    public function show(Platform $platform)
    {
        $platform->load('games');

        return new PlatformResource($platform);
    }
}
