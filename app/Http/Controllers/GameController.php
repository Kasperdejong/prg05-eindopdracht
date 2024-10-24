<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Genre;
use Illuminate\Http\Request;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $games = Game::where('active', 1)->get();
        $genres = Genre::all();

        $gameQuery = Game::where('active',1);

        if ($request->filled('search')) {
            $search = $request->input('search');
            $gameQuery->where(function($query) use ($search) {
                $query->where('name', 'like', '%' . $search . '%')
                    ->orWhere('description', 'like', '%' . $search . '%')
                    ->orWhereHas('genre', function($q) use ($search) {
                        $q->where('title', 'like', '%' . $search . '%');
                    })
                ->orWhereHas('user', function($q) use ($search) {
                    $q->where('name', 'like', '%' . $search . '%');
                });
            });
        }




        if ($request->filled('genre_id')) {
            $gameQuery->where('genre_id', $request->input('genre_id'));
        }

        $games = $gameQuery->get();

        return view('games', compact('games', 'genres'));



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

        if ($game->user_id !== auth()->id()) {
            return redirect()->route('games.index')->with('error', 'Je mag dit item niet bewerken.');
        }
        return view('games.edit', compact( 'game', 'genres'));


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $game = Game::find($id);
        // Ensure the user is logged in
        if ($game->user_id !== auth()->id()) {
            return redirect()->route('games.index')->with('error', 'Dit item is niet van jou. Je mag het niet bewerken');
        }

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

        if ($game->user_id !== auth()->id()) {
            return redirect()->route('games.index')->with('error', 'Dit item is niet van jou. Je mag het niet bewerken');
        }

        $game->delete();

        return redirect()->route('games.index')->with('success', 'Game deleted successfully!');
    }
    public function filterByGenre($genre_id)
    {
        // Retrieve all games where the genre_id matches the passed ID
        $games = Game::where('genre_id', $genre_id)->get();

        // Pass the filtered games and all genres to the view
        $genres = Genre::all();

        return view('games', compact('games', 'genres'));
    }

}


