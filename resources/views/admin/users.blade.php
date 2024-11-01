<x-app-layout>
    <x-layout title="All Users">
        <div class="container mx-auto my-10">
            <h1 class="text-3xl font-bold mb-6">All Registered Users</h1>
            <table class="min-w-full bg-white border">
                <thead>
                <tr>
                    <th class="py-2 px-4 border-b">ID</th>
                    <th class="py-2 px-4 border-b">Name</th>
                    <th class="py-2 px-4 border-b">Email</th>
                    <th class="py-2 px-4 border-b">Role</th>
                    <th class="py-2 px-4 border-b">Created At</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td class="py-2 px-4 border-b">{{ $user->id }}</td>
                        <td class="py-2 px-4 border-b">{{ $user->name }}</td>
                        <td class="py-2 px-4 border-b">{{ $user->email }}</td>
                        <td class="py-2 px-4 border-b">{{ $user->role }}</td>
                        <td class="py-2 px-4 border-b">{{ $user->created_at->format('d-m-Y') }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </x-layout>
</x-app-layout>
