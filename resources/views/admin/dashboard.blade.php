<x-app-layout>
    <x-layout title="games">
        <div class="container mx-auto my-10 px-6">
            <h1 class="text-center text-4xl font-bold mb-10">Admin Dashboard</h1>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-8">
                @if (session('error'))
                    <div class="text-red-500 px-4 py-2">
                        {{ session('error') }}
                    </div>
                @endif
            </div>

            <div class="mt-6 space-y-4">
                <x-navlink href="{{ route('admin.games') }}" :active="request()->is('admin')" class="block text-lg font-semibold text-indigo-600 hover:text-indigo-800 transition-colors duration-200 px-4 py-2 border rounded-md">
                    Monitor Games
                </x-navlink>

                <x-navlink href="{{ route('admin.users') }}" :active="request()->is('admin')" class="block text-lg font-semibold text-indigo-600 hover:text-indigo-800 transition-colors duration-200 px-4 py-2 border rounded-md">
                    View Users
                </x-navlink>
            </div>
        </div>
    </x-layout>
</x-app-layout>

