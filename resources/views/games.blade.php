<x-app-layout>
    <x-layout title="games">
        <div class="container mx-auto my-10">
            <h1 class="text-center text-4xl font-bold mb-10">Game List</h1>
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

