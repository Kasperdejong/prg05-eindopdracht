<!-- resources/views/components/game-card.blade.php -->
<div class="max-w-sm w-full rounded-lg overflow-hidden shadow-lg bg-white border border-gray-300 mx-auto">
    <!-- Image -->
    <div class="bg-gray-200 h-48 flex items-center justify-center">
        <img class="h-120 w-120 object-fit" src="{{ asset('storage/' . $game->image) }}" alt="{{ $game->name }}">
    </div>

    <div class="p-6">
        <!-- Game Name -->
        <h2 class="text-xl font-semibold text-gray-800 mb-2">{{ $game->name }}</h2>

        <!-- Game Description -->
        <p class="text-gray-700 text-sm mb-4">
            {{ $game->description }}
        </p>

        <!-- Game Metadata -->

        <div class="text-gray-600 text-sm mb-2">
            <p><strong>User ID:</strong> {{ $game->user_id }}</p>
            <p><strong>Genre name:</strong> {{ $game->genre->title }}</p>
        </div>

        <!-- Game Link -->
        <a href="{{ $game->link ?? '#' }}" target="_blank" class="text-indigo-500 hover:underline text-sm block mb-4">
            Visit Game Page
        </a>

        <!-- Details Button -->
        <a href="{{route('games.show', $game)}}" class="block bg-indigo-500 text-white text-center py-2 rounded-md hover:bg-indigo-600 transition duration-200">
            View Details
        </a>
    </div>
</div>
