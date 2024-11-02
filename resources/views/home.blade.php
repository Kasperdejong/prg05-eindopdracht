<x-app-layout>
    <x-layout title="home">

        <!-- Header -->
        <header class="bg-indigo-600 text-white py-4">
            <div class="container mx-auto text-center">
                <h1 class="text-3xl font-bold">Welcome to Game Vault!</h1>
                <p class="mt-2 text-lg">Discover and share your favorite games with a community of enthusiasts.</p>
            </div>
        </header>

        <!-- Auth/Guest Messages -->
        <div class="container mx-auto my-4 text-center">
            @auth()
                <p class="text-lg font-semibold text-green-500">You are logged in. Enjoy exploring!</p>
            @endauth
            @guest()
                <p class="text-lg font-semibold text-red-500">You're not logged in. How dare you! 😄</p>
            @endguest
        </div>

<x-carousel>

</x-carousel>

        <!-- Main Content -->
        <main class="container mx-auto my-8">
            <div class="text-center">
                <h2 class="text-2xl font-semibold">About Our Site</h2>
                <p class="mt-4 text-gray-700">This platform lets gamers like you showcase and review their favorite video games. Whether you’re into RPGs, action-adventures, or indie gems, this is your place to share and discover!</p>
            </div>
        </main>

        <!-- Footer -->
        <footer class="bg-gray-800 text-white py-4">
            <div class="container mx-auto text-center">
                <p>&copy; 2024 Game Vault. All rights reserved.</p>
            </div>
        </footer>

    </x-layout>
</x-app-layout>

