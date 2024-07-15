<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {
        if(str_contains($role, '|')){
            $roles = explode('|', $role);
            $authorizeCheck = false;

            if(auth()->check()){
                foreach ($roles as $roleItem) {
                    if(!$authorizeCheck) {
                        $authorizeCheck = auth()->user()->hasRole($roleItem);
                    }else{
                        break;
                    }
                }
            }

            return $authorizeCheck ? $next($request) : abort(401);
        }else{
            return auth()->check() && auth()->user()->hasRole($role) ? $next($request) : abort(401);
        }
    }
}
