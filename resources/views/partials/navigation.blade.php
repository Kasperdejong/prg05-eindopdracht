<nav>
    <x-navlink href="{{route('home')}}" :active="request()->is('home')">Home</x-navlink>
    <x-navlink href="{{route('about-us')}}" :active="request()->is('about-us')">about-us</x-navlink>
    <x-navlink href="{{route('products')}}" :active="request()->is('products')">products</x-navlink>
    <x-navlink href="{{route('games.index')}}" :active="request()->is('games')">games</x-navlink>
</nav>
