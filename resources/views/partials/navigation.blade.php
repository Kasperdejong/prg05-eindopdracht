<nav class="flex space-x-8 mt-4">
    <x-navlink href="{{route('home')}}" :active="request()->is('home')" class="text-lg font-semibold text-indigo-600 hover:text-indigo-800 transition-colors duration-200">
        Home
    </x-navlink>

    <x-navlink href="{{route('about-us')}}" :active="request()->is('about-us')" class="text-lg font-semibold text-indigo-600 hover:text-indigo-800 transition-colors duration-200">
        About Us
    </x-navlink>

    <x-navlink href="{{route('games.index')}}" :active="request()->is('games')" class="text-lg font-semibold text-indigo-600 hover:text-indigo-800 transition-colors duration-200">
        Games
    </x-navlink>

    @auth()
        @if (auth()->user()->role === 1)
            <x-navlink href="{{ route('admin.index') }}" :active="request()->is('admin')" class="text-lg font-semibold text-indigo-600 hover:text-indigo-800 transition-colors duration-200">
                Admin
            </x-navlink>
        @endif

                @if (auth()->user()->checkGameCount() >= 3)
                    <x-navlink href="{{ route('gamefanaticpage') }}" class="text-lg font-semibold text-indigo-600 hover:text-indigo-800 transition-colors duration-200">
                        Secret Page
                    </x-navlink>
                @endif
    @endauth
</nav>

