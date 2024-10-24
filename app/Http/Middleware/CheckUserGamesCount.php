<?php

namespace App\Http\Middleware;

use App\Models\Game;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckUserGamesCount
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check if the user is logged in
        if (auth()->check()) {
            $userGamesCount = Game::where('user_id', auth()->id())->count();
            if ($userGamesCount < 3) {
                return redirect()->route('home')->with('error', 'Je moet minimaal 3 games hebben gemaakt om deze pagina te bezoeken.');
            }
        }

        return $next($request);
    }
}
