<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Role
{
    /**
     * Middleware that checks if the authenticated user has the specified role(s).
     *
     * If the $role parameter contains a pipe-separated list of roles, the user must have at least one of the specified roles.
     * If the $role parameter contains a single role, the user must have that specific role.
     *
     * If the user is not authenticated or does not have the required role(s), the middleware will abort with a 401 Unauthorized response.
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {
        if (str_contains($role, '|')) {
            $roles = explode('|', $role);
            $authorizeCheck = false;

            if (auth()->check()) {
                foreach ($roles as $roleItem) {
                    if (! $authorizeCheck) {
                        $authorizeCheck = auth()->user()->hasRole($roleItem);
                    } else {
                        break;
                    }
                }
            }

            return $authorizeCheck ? $next($request) : abort(401);
        } else {
            return auth()->check() && auth()->user()->hasRole($role) ? $next($request) : abort(401);
        }
    }
}
