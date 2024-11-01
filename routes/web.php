<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SecretController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckAdmin;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact/{id}', function(string $id) {
    $info = 'DIT IS MIJN LINKEDIN: aaaaa';
    return view ('contact', ['id' => $id, 'info' => $info]);
})->whereNumber('id')->name('product');

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/about-us', [AboutUsController::class, 'index'])->name('about-us');

Route::resource('/games', GameController::class);
Route::resource('/genres', GenreController::class);

Route::get('/games/{id}/edit', [GameController::class, 'edit'])->name('games.edit');
Route::put('/games/{id}', [GameController::class, 'update'])->name('games.update');

Route::get('/games/genre/{id}', [GameController::class, 'filterByGenre'])->name('games.filter');

Route::delete('/games/{id}', [GameController::class, 'destroy'])->name('games.destroy');

Route::middleware([CheckAdmin::class])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/admin/games', [AdminController::class, 'manageGames'])->name('admin.games');
    Route::get('/admin/users', [AdminController::class, 'showAllUsers'])->name('admin.users');

});
Route::patch('/admin/games/{game}/toggleActive', [AdminController::class, 'toggleActive'])->name('admin.toggleActive');

Route::middleware('check-user-games-count')->group(function () {
    Route::get('/gamefanaticpage', [SecretController::class, 'index'])->name('gamefanaticpage');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
