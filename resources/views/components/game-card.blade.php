<div class="max-w-sm w-full rounded-lg overflow-hidden shadow-lg bg-white border border-gray-300 mx-auto">
    <div class="bg-gray-200 h-48 flex items-center justify-center">
        <img class="h-120 w-120 object-fit" src="{{ asset('storage/' . $game->image) }}" alt="{{ $game->name }}">
    </div>

    <div class="p-6">
        <h2 class="text-xl font-semibold text-gray-800 mb-2">{{ $game->name }}</h2>

        <p class="text-gray-700 text-sm mb-4">
            {{ $game->description }}
        </p>

        <div class="text-gray-600 text-sm mb-2">
            <p><strong>Made by:</strong> {{ $game->user->name }}</p>
            <p><strong>Genre name:</strong> {{ $game->genre->title }}</p>
        </div>

        <a href="{{ $game->link ?? '#' }}" target="_blank" class="text-indigo-500 no-underline hover:underline text-sm block mb-4">
            Visit Game Page
        </a>

        <a href="{{route('games.show', $game)}}" class="block bg-indigo-500 no-underline text-white text-center py-2 rounded-md hover:bg-indigo-600 transition duration-200">
            View Details
        </a>

        <a href="{{route('games.edit', $game)}}" class="block bg-indigo-500 no-underline text-white text-center py-2 rounded-md hover:bg-indigo-600 transition duration-200">
            Edit game info
        </a>

        <form action="{{ route('games.destroy', $game->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this game?');">
            @csrf
            @method('DELETE')
            <button type="submit" class="bg-red-500 text-white py-2 px-4 rounded-lg hover:bg-red-600">
                Delete
            </button>
        </form>

    </div>
</div>
