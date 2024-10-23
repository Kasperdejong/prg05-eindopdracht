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

   <x-navlink href="{{route('admin.games')}}" :active="request()->is('admin')" class="text-lg font-semibold text-indigo-600 hover:text-indigo-800 transition-colors duration-200">
                    Monitor games
   </x-navlink>
        </div>
    </x-layout>
</x-app-layout>
