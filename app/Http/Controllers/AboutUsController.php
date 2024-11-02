<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUsController extends Controller {
    public function index(){
        $userGamesCount = 0;

        if (auth()->check()) {
            $userGamesCount = auth()->user()->games()->count();
        }
        return view('about-us', compact('userGamesCount'));
    }
}
