<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreGameRequest;
use App\Http\Requests\UpdateGameRequest;
use App\Http\Resources\GameResource;
use App\Models\Category;
use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index(Game $game)
    {
        $response = GameResource::collection($game->all());
        return apiResponse($response);
    }
    public function store(StoreGameRequest $request)
    {
        return apiResponse(GameResource::make(Game::create($request->validated())));
    }
    public function update(UpdateGameRequest $request, Game $game)
    {
        $game->update($request->validated());
        return apiResponse(GameResource::make($game));
    }
    public function destroy(Game $game)
    {
        $game->delete();
        return apiResponse(new GameResource($game));
    }
}
