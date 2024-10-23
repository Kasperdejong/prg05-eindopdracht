<x-app-layout>
    <x-layout title="Manage Games">
        <h1 class="text-2xl font-bold mb-6">Manage User Games</h1>

        <!-- Table of Games -->
        <table class="min-w-full bg-white border">
            <thead>
            <tr>
                <th class="px-4 py-2 border">Game name</th>
                <th class="px-4 py-2 border">User</th>
                <th class="px-4 py-2 border">Active</th>
                <th class="px-4 py-2 border">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($games as $game)
                <tr>
                    <td class="px-4 py-2 border">{{ $game->name }}</td>
                    <td class="px-4 py-2 border">{{ $game->user->name }}</td>
                    <td class="px-4 py-2 border">
                        <form action="{{ route('admin.toggleActive', $game->id) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="px-4 py-2 rounded-md text-white
                                 {{ $game->active ? 'bg-green-500 hover:bg-green-600' : 'bg-red-500 hover:bg-red-600' }}">
                                {{ $game->active ? 'Active' : 'Inactive' }}
                            </button>
                        </form>
                    </td>
                    <td class="px-4 py-2 border">
                        <!-- Edit and Delete buttons -->
                        <a href="{{ route('games.show', $game->id) }}" class="bg-blue-500 text-white px-3 py-1 rounded">Details</a>
                        <a href="{{ route('games.edit', $game->id) }}" class="bg-blue-500 text-white px-3 py-1 rounded">Edit</a>
                        <form action="{{ route('games.destroy', $game->id) }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </x-layout>
</x-app-layout>
