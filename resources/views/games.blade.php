<x-app-layout>
    <x-layout title="games">
        <div class="container mx-auto my-10">
            <h1 class="text-center text-4xl font-bold mb-10">Game List</h1>

            <!-- List of genres with buttons -->
            <div class="mb-6 flex justify-center space-x-4">
                @foreach ($genres as $genre)
                    <a href="{{ route('games.index', ['genre_id' => $genre->id, 'search' => request('search')]) }}" class="bg-indigo-500 text-white py-2 px-4 rounded-lg hover:bg-indigo-600">
                        {{ $genre->title }}
                    </a>
                @endforeach
                <a href="{{ route('games.index') }}" class="bg-gray-500 text-white py-2 px-4 rounded-lg hover:bg-gray-600">
                    Show All Games
                </a>
            </div>

            <!-- Searchbar centered above the items -->
            <div class="flex justify-center mb-6">
                <form action="{{ route('games.index') }}" method="GET" class="max-w-md w-full">
                    <label for="search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                    <div class="relative">
                        <input type="search" id="search" name="search" value="{{ request('search') }}" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search games by name, genre, or description..." />
                        <input type="hidden" name="genre_id" value="{{ request('genre_id') }}" /> <!-- Hidden field for genre -->
                        <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Search
                        </button>
                    </div>
                </form>
            </div>

            <!-- Game Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-8">
                <a href="{{ route('games.create') }}"
                   class="inline-block bg-indigo-600 text-white font-bold py-4 px-8 rounded-lg text-xl hover:bg-indigo-700 transition duration-300 ease-in-out shadow-lg mb-4">
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


