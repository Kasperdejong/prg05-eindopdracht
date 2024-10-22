<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller{
    public function index() {
        $games = Game::all();

            return view('admin.dashboard');

    }
}
