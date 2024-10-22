<x-app-layout>
    <x-layout title="games">
        <div class="container mx-auto my-10">
            <h1 class="text-center text-4xl font-bold mb-10">Admin dashboard</h1>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-8">
                @if (session('error'))
                    <div class="text-red-500">
                        {{ session('error') }}
                    </div>
                @endif
            </div>
        </div>
    </x-layout>
</x-app-layout>
