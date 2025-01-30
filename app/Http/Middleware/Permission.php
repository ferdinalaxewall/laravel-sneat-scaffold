<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Permission
{
    /**
     * Handles an incoming request and checks if the authenticated user has the required permissions.
     *
     * If the `$permissions` parameter contains a pipe-separated list of permissions, the middleware will check if the
     * user has at least one of the permissions. Otherwise, it will check if the user has the single specified permission.
     *
     * If the user has the required permission(s), the middleware will allow the request to proceed. Otherwise, it will
     * return a 401 Unauthorized response.
     */
    public function handle(Request $request, Closure $next, string $permissions): Response
    {
        if (str_contains($permission, '|')) {
            $permissions = explode('|', $permission);
            $authorizeCheck = false;

            if (auth()->check()) {
                foreach ($permissions as $permissionItem) {
                    if (! $authorizeCheck) {
                        $authorizeCheck = auth()->user()->canSlug($permissionItem);
                    } else {
                        break;
                    }
                }
            }

            return $authorizeCheck ? $next($request) : abort(401);
        } else {
            return auth()->check() && auth()->user()->canSlug($permission) ? $next($request) : abort(401);
        }
    }
}
