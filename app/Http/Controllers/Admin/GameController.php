<?php

namespace App\Http\Controllers\Admin;

use App\Actions\Admin\FetchGames;
use App\Actions\Admin\StoreGame;
use App\Actions\Admin\UpdateGame;
use App\Game;
use App\Http\Requests\Admin\GameIndexRequest;
use App\Http\Requests\Admin\GameStoreRequest;
use App\Http\Requests\Admin\GameUpdateRequest;
use App\Http\Resources\Admin\GameResource;
use App\Transfers\Admin\GameIndexData;
use App\Http\Controllers\Controller;
use App\Transfers\Admin\GameStoreData;
use App\Transfers\Admin\GameUpdateData;

class GameController extends Controller
{
    /**
     * @param GameIndexRequest $request
     * @param FetchGames $action
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index(GameIndexRequest $request, FetchGames $action)
    {
        $data = GameIndexData::fromRequest($request);

        return GameResource::collection($action->handle($data)->paginate($data->page_size));
    }

    /**
     * @param GameStoreRequest $request
     * @return GameResource
     */
    public function store(GameStoreRequest $request, StoreGame $action)
    {
        $data = GameStoreData::fromRequest($request);

        return new GameResource($action->handle($data));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Game  $game
     * @return GameResource
     */
    public function show(Game $game)
    {
        return new GameResource($game);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Game  $game
     * @return GameResource
     */
    public function update(GameUpdateRequest $request, Game $game, UpdateGame $action)
    {
        $data = GameUpdateData::fromRequest($request);

        return new GameResource($action->handle($data, $game));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Game $game
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Game $game)
    {
        $game->delete();

        return response()->json(null, 204);
    }
}
