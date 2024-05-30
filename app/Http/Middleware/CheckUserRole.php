<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckUserRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        if ($request->user() && $request->user()->hasRole('Administrador')) {
            return $next($request);
        }
    
        // Redirige al usuario si no tiene el rol requerido
        return redirect('/home')->with('error', 'No tienes permiso para acceder a esta página.');
    }
    
}
