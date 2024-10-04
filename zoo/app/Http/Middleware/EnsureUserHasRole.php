<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureUserHasRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string[]  ...$roles
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next, string ...$roles): Response
    {
        // Vérifier si l'utilisateur est authentifié
        if (! $request->user()) {
            return redirect('/login')->with('danger', "Vous devez être connecté pour accéder à cette page");
        }

        // Vérifier si l'utilisateur a l'un des rôles spécifiés
        if (in_array($request->user()->role, $roles)) {
            return $next($request);
        }

        // Rediriger l'utilisateur si les rôles ne correspondent pas
        return redirect('/')->with('danger', "Vous n'avez pas les droits nécessaires pour accéder à cette page");
    }
}
