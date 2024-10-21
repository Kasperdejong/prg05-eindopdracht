<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $games  = Game::all();
        //$game->save();

        return view('games', compact('games'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $genres = \App\Models\Genre::all();
        return view('games.create', compact('genres'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        if (!auth()->check()) {
            return redirect()->route('login')->with('error', 'You must be logged in to add a game.');
        }

        $image = $request->file('image')->storePublicly('games', 'public');

        $game = new Game();
        $game->name = $request->input('name');
        $game->description = $request->input('description') ;
        $game->link = $request->input('link');
        $game->image = $image;
        $game->genre_id = $request->input('genre_id');
        $game->user_id = $request->user()->id;



        $game->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $game = Game::find($id);
        return view('games.show', compact('game'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
