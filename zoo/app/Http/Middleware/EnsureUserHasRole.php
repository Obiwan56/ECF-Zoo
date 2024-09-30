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
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string ...$roles): Response
    {
        if (in_array($request->user()->role, $roles)) {
            return $next($request);
        }

        // Utiliser response() pour envelopper la vue dans une réponse HTTP
        return redirect('/')->with('danger', "Vous n'avez pas les droits nécessaires pour accéder à cette page");
    }
}
