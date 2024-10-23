<x-app-layout>
    <x-layout title="games">
        <div class="container mx-auto my-10">
            <h1 class="text-center text-4xl font-bold mb-10">Game List</h1>
            <!-- List of genres with buttons -->
            <div class="mb-4">
                @foreach ($genres as $genre)
                    <a href="{{ route('games.filter', $genre->id) }}" class="bg-indigo-500 text-white py-2 px-4 rounded-lg hover:bg-indigo-600">
                        {{ $genre->title }}
                    </a>
                @endforeach
                    <a href="{{ route('games.index') }}" class="bg-gray-500 text-white py-2 px-4 rounded-lg hover:bg-gray-600">
                        Show All Games
                    </a>
            </div>



            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-8">
                <a href="{{ route('games.create') }}"
                   class="inline-block bg-indigo-600 text-white font-bold py-4 px-8 rounded-lg text-xl hover:bg-indigo-700 transition duration-300 ease-in-out shadow-lg">
                    Create New Game
                </a>
            @foreach($games as $game)
                    @if($game->active)
                    <x-game-card :game="$game" />
                    @endif
                @endforeach
            </div>
        </div>
    </x-layout>
</x-app-layout>

