<x-app-layout>

<x-layout title="home">

@auth()
    je bent ingelogd trouwens hahaha
 @endauth()
    @guest()
        jij bent niet ingelogd hoe durf je!
    @endguest()
    <h1>Hallo homepage</h1>
</x-layout>

</x-app-layout>
