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
        $games = Game::all();
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

        $request->validate([
            'name' => ['required', 'string', 'max:50'],
            'description' => ['string', 'max:255'],
            'link' => ['string', 'max:255'],
            'image' => ['required'],
        ]);

        $image = $request->file('image')->storePublicly('games', 'public');

        $game = new Game();
        $game->name = $request->input('name');
        $game->description = $request->input('description') ;
        $game->link = $request->input('link');
        $game->image = $image;
        $game->genre_id = $request->input('genre_id');
        $game->user_id = $request->user()->id;

        $game->save();

        return redirect()->route('games.index')->with('success', 'Game created successfully!');

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
        $game = Game::find($id);
        $genres = \App\Models\Genre::all();
        return view('games.edit', compact( 'game', 'genres'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $game = Game::find($id);
        // Ensure the user is logged in
        if (!auth()->check()) {
            return redirect()->route('login')->with('error', 'You must be logged in to update a game.');
        }

        // Validate the incoming request
        $request->validate([
            'name' => ['required', 'string', 'max:50'],
            'description' => ['string', 'max:255'],
            'link' => ['string', 'max:255'],
            'image' => ['nullable', 'image', 'mimes:jpg,jpeg,png,gif,svg', 'max:2048'],
            'genre_id' => ['required', 'exists:genres,id'],
        ]);

        // If a new image is uploaded, store it
        if ($request->hasFile('image')) {
            $image = $request->file('image')->storePublicly('games', 'public');
            $game->image = $image;
        }

        $game->name = $request->input('name');
        $game->description = $request->input('description');
        $game->link = $request->input('link');
        $game->genre_id = $request->input('genre_id');
        $game->user_id = $request->user()->id;

        // Save the updated game
        $game->save();

        // Redirect with success message
        return redirect()->route('games.index')->with('success', 'Game updated successfully!');    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $game = Game::findOrFail($id);

        $game->delete();

        return redirect()->route('games.index')->with('success', 'Game deleted successfully!');
    }
}
