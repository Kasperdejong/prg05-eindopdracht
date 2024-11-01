<x-app-layout>
    <x-layout title="home">

        <!-- Header -->
        <header class="bg-indigo-600 text-white py-4">
            <div class="container mx-auto text-center">
                <h1 class="text-3xl font-bold">Welcome to The Share Your Favorite Video Games Site!</h1>
                <p class="mt-2 text-lg">Discover and share your favorite games with a community of enthusiasts.</p>
            </div>
        </header>

        <!-- Auth/Gueset Messages -->
        <div class="container mx-auto my-4 text-center">
            @auth()
                <p class="text-lg font-semibold text-green-500">You are logged in. Enjoy exploring!</p>
            @endauth
            @guest()
                <p class="text-lg font-semibold text-red-500">You're not logged in. How dare you! 😄</p>
            @endguest
        </div>

        <!-- Carousel (Bootstrap) -->
        <section class="container mx-auto my-8">
            <h2 class="text-2xl font-bold text-center mb-6">Top Games Shared by Our Users</h2>
            <div id="gameCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        {{ asset('helldivers-smaller.jpg') }}
                        <img src="{{ asset('helldivers-smaller.jpg') }}"  class="d-block w-100 rounded-lg" alt="Game 1">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Game 1</h5>
                            <p>A thrilling adventure awaits you in Game 1.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/mariowii.jpg') }}" class="d-block w-100 rounded-lg" alt="Game 2">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Game 2</h5>
                            <p>Experience the magic of Game 2.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/Wow-The-War-Within.jpg') }}" class="d-block w-100 rounded-lg" alt="Game 3">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Game 3</h5>
                            <p>Join the action with Game 3, loved by the community.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#gameCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#gameCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>

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
                <p>&copy; 2024 The Share Your Favorite Video Games Site. All rights reserved.</p>
            </div>
        </footer>

    </x-layout>
</x-app-layout>

