<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Horaire;

class LoadHoraires
{
    public function handle($request, Closure $next)
    {
        // Charger les horaires depuis la base de données
        $horaires = Horaire::all();

        // Passer les horaires à chaque vue
        view()->share('horaires', $horaires);

        return $next($request);
    }
}
