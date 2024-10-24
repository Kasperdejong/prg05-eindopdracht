<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SecretController extends Controller
{
    public function index(){
        $userGamesCount = auth()->user()->games()->count();
        return view('gamefanaticpage', compact('userGamesCount'));
    }
}
