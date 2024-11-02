<x-app-layout>
    <x-layout title="About Us">
        <!-- Header -->
        <header class="bg-indigo-600 text-white py-6">
            <div class="container mx-auto text-center">
                <h1 class="text-4xl font-bold">About Us</h1>
                <p class="mt-2 text-lg">Get to know the mission and team behind Game Vault.</p>
            </div>
        </header>

        <!-- Main Content -->
        <main class="container mx-auto my-10 px-4">
            <section class="mb-8">
                <h2 class="text-3xl font-semibold text-gray-800 mb-4">Our Mission</h2>
                <p class="text-gray-700 leading-relaxed">
                    At Game Vault, we are passionate about connecting gamers from around the world. We believe that everyone has a unique taste in games, and our platform allows users to share their personal favorites and explore new titles based on their preferences. Whether you love epic RPGs, fast-paced shooters, or indie puzzle games, our site is your gateway to discovering the next game that will capture your interest.
                </p>
            </section>

            <section class="mb-8">
                <h2 class="text-3xl font-semibold text-gray-800 mb-4">What We Offer</h2>
                <ul class="list-disc list-inside text-gray-700 leading-relaxed">
                    <li><strong>Share Your Favorites:</strong> Create a profile and share your top games with the community.</li>
                    <li><strong>Explore New Titles:</strong> Browse through games recommended by others and discover hidden gems.</li>
                    <li><strong>Connect with Gamers:</strong> Engage with like-minded individuals and exchange reviews and insights.</li>
                    <li><strong>Tailored Recommendations:</strong> Find games that match your unique tastes through our search and filter tools.</li>
                </ul>
            </section>

            <section class="mb-8">
                <h2 class="text-3xl font-semibold text-gray-800 mb-4">Our Story</h2>
                <p class="text-gray-700 leading-relaxed">
                    Founded by a team of game enthusiasts, The Share Your Favorite Video Games Site started as a simple idea: to create a platform where gamers could share their favorite games and uncover new ones effortlessly. We wanted to build a community-driven space where everyone could find games that match their unique interests and contribute their own experiences.
                </p>
            </section>

            <section>
                <h2 class="text-3xl font-semibold text-gray-800 mb-4">Join Our Community</h2>
                <p class="text-gray-700 leading-relaxed">
                    Whether you're a casual gamer or a hardcore fan, we invite you to join our platform and become a part of our growing community. Share, discover, and celebrate the world of gaming with us!
                </p>
            </section>

            <section>
                <h2>Deze website is gemaakt door CMGT student Kasper de Jong</h2>
                <img src="{{ asset('ikophetstrand.jpg') }}" alt="demaker" class="w-1/4 ">
            </section>

        </main>

        <footer class="bg-gray-800 text-white py-4">
            <div class="container mx-auto text-center">
                <p>&copy; 2024 Game Vault. All rights reserved.</p>
            </div>
        </footer>
    </x-layout>
</x-app-layout>
