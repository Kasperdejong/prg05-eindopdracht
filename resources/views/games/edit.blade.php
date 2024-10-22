<x-app-layout>
    <x-layout title="Edit Game">
        <div class="container mx-auto my-10 max-w-lg">
            <h1 class="text-2xl font-bold mb-6">Edit Game</h1>

            <!-- Laravel form using POST method -->
            <form action="{{ route('games.update', $game->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- Name -->
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-700">Game Name</label>
                    <input type="text" name="name" id="name" value="{{ old('name', $game->name) }}" class="w-full border border-gray-300 p-2 rounded-md" required>
                </div>

                <!-- Description -->
                <div class="mb-4">
                    <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                    <textarea name="description" id="description" rows="4" class="w-full border border-gray-300 p-2 rounded-md" required>{{ old('description', $game->description) }}</textarea>
                </div>

                <!-- Image -->
                <div class="mb-4">
                    <label for="image" class="block text-sm font-medium text-gray-700">Game Image</label>
                    @if($game->image)
                        <img src="{{ asset('storage/' . $game->image) }}" alt="{{ $game->name }}" class="mb-2 w-full h-48 object-cover">
                    @endif
                    <input type="file" name="image" id="image" class="w-full border border-gray-300 p-2 rounded-md">
                </div>

                <!-- Link -->
                <div class="mb-4">
                    <label for="link" class="block text-sm font-medium text-gray-700">Game Link</label>
                    <input type="url" name="link" id="link" value="{{ old('link', $game->link) }}" class="w-full border border-gray-300 p-2 rounded-md">
                </div>

                <!-- Genre Dropdown -->
                <div class="mb-4">
                    <label for="genre_id" class="block text-sm font-medium text-gray-700">Genre</label>
                    <select name="genre_id" id="genre_id" class="w-full border border-gray-300 p-2 rounded-md" required>
                        @foreach($genres as $genre)
                            <option value="{{ $genre->id }}" {{ $game->genre_id == $genre->id ? 'selected' : '' }}>
                                {{ $genre->title }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <!-- Submit Button -->
                <div class="mt-6">
                    <button type="submit" class="w-full bg-indigo-500 text-white py-2 rounded-md hover:bg-indigo-600">
                        Update Game
                    </button>
                </div>
            </form>
        </div>
    </x-layout>
</x-app-layout>

