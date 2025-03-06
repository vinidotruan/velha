<?php

namespace App\Http\Controllers\Game;

use App\Http\Controllers\Controller;
use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index()
    {
        $g = Game::create();
        return redirect("/game/{$g->id}");
    }

    public function game(Game $game)
    {
        return view("game", compact('game'));
    }

    public function saveUsername(Game $game, Request $request)
    {
        if(!$game->player_one) {
            $game->update(['player_one' => $request->username]);
        } else {
            $game->update(['player_two' => $request->username]);
        }
        return response()->json([$game]);
    }
}
