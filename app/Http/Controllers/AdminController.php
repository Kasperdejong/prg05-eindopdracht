<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller {
    public function index() {
        $games = Game::all();
            return view('admin.dashboard');
    }
    public function manageGames()
    {
        $games = Game::all(); // Fetch all games
        return view('admin.games', compact('games'));
    }

    public function toggleActive(Game $game)
    {
        $game->active = !$game->active;
        $game->save();

        return redirect()->route('admin.games')->with('success', 'Game status updated!');
    }

    public function showAllUsers()
    {
        $users = User::all();
        return view('admin.users', compact('users'));
    }
}


