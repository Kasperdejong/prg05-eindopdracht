<section class="container mx-auto my-8">
    <h2 class="text-2xl font-bold text-center mb-6">Top Games Shared by Our Users</h2>
    <div id="gameCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('helldivers-smaller.jpg') }}" {{ $attributes }} class="d-block w-100 rounded-lg" alt="Game 1">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Helldivers 2</h5>
                    <p>Shoot the bugs and robots and make an explosive entrance in this sick game</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('mariowii.jpg') }}" {{ $attributes }}  class="d-block w-100 rounded-lg" alt="Game 2">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="text-black">Super mario bros wii</h5>
                    <p class="text-black">Platforming adventure that came with the wii. Very good and fun</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('Wow-The-War-Within.jpg') }}" class="d-block w-100 rounded-lg" alt="Game 3">
                <div class="carousel-caption d-none d-md-block">
                    <h5>World of Warcraft</h5>
                    <p>The biggest MMORPG on the market right now</p>
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
