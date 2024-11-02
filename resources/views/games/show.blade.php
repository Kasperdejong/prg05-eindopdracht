<x-layout title="game {{$game->name}}">
    <div class="container mx-auto my-10 max-w-4xl">
        <h1 class="text-4xl font-bold text-gray-900 mb-6">{{ $game->name }}</h1>

        <div class="mb-6">
            @if($game->image)
                <img src="{{ asset('storage/' . $game->image) }}" alt="{{ $game->name }}" class="w-full h-96 object-cover rounded-lg shadow-md">
            @else
                <span class="text-gray-500">No image available</span>
            @endif
        </div>

        <div class="mb-6">
            <p class="text-lg text-gray-700 leading-relaxed">{{ $game->description }}</p>
        </div>

        <div class="mb-6">
            <p class="text-gray-600"><strong>Uploaded by User ID:</strong> {{ $game->user_id }}</p>
            <p class="text-gray-600"><strong>Genre:</strong> {{ $game->genre->title }}</p>
        </div>

        <div class="mb-6">
            @if($game->link)
                <a href="{{ $game->link }}" target="_blank" class="text-indigo-500 no-underline hover:text-indigo-700 text-xl font-medium">
                    Visit Game Page
                </a>
            @else
                <p class="text-gray-500">No game link available</p>
            @endif
        </div>

        <div class="flex justify-between items-center mt-8">
            <a href="{{ route('games.index') }}" class="bg-gray-500 no-underline text-white py-2 px-4 rounded-lg hover:bg-gray-600">
                Back to Games List
            </a>
        </div>

        <div class="flex justify-between items-center mt-8">
            <form action="{{ route('games.destroy', $game->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this game?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-500 text-white py-2 px-4 rounded-lg hover:bg-red-600">
                    Delete Game
                </button>
            </form>
        </div>
    </div>
</x-layout>

