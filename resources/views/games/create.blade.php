<x-app-layout>
    <x-layout title="Create Game">
        <div class="container mx-auto my-10 max-w-lg">
            <h1 class="text-2xl font-bold mb-6">Create a New Game</h1>

            <!-- Laravel form using POST method -->
            <form action="{{ route('games.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <!-- Name -->
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-700">Game Name</label>
                    <span class="alert-danger">{{ $errors->first('name') }}</span>
                    <input type="text" name="name" id="name" class="w-full border border-gray-300 p-2 rounded-md" value="{{ old('name') }}">
                </div>

                <!-- Description -->
                <div class="mb-4">
                    <textarea name="description" id="description" rows="4" class="w-full border border-gray-300 p-2 rounded-md" >{{ old('description') }}</textarea>
                    <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                    <span class="alert-danger">{{ $errors->first('description') }}</span>
                </div>

                <!-- Image -->
                <div class="mb-4">
                    <p>Let op dat de image niet te groot is anders lukt het niet</p>
                    <label for="image" class="block text-sm font-medium text-gray-700">{{'image'}}*</label>
                    <span class="alert-danger">{{ $errors->first('image') }}</span>
                    <input type="file" name="image" id="image" class="form-control"/>
                </div>

                <!-- Link -->
                <div class="mb-4">
                    <label for="link" class="block text-sm font-medium text-gray-700">Game Link</label>
                    <span class="alert-danger">{{ $errors->first('link') }}</span>
                    <input type="url" name="link" id="link" class="w-full border border-gray-300 p-2 rounded-md">
                </div>

                <!-- Genre ID (Dropdown) -->
                <div class="mb-4">
                    <label for="genre_id" class="block text-sm font-medium text-gray-700">Genre</label>
                    <span class="alert-danger">{{ $errors->first('genre') }}</span>
                    <select name="genre_id" id="genre_id" class="w-full border border-gray-300 p-2 rounded-md" required>
                        <option value="" disabled selected>Select Genre</option>
                        @foreach($genres as $genre)
                            <option value="{{ $genre->id }}">{{ $genre->title }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- User ID (Hidden or Dropdown) -->
                <input type="hidden" name="user_id" value="{{ Auth::id() }}">

                <!-- Submit Button -->
                <div class="mt-6">
                    <button type="submit" class="w-full bg-indigo-500 text-white py-2 rounded-md hover:bg-indigo-600">
                        Create Game
                    </button>
                </div>
            </form>
        </div>
    </x-layout>
</x-app-layout>

