<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Permission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $permissions): Response
    {
        if(str_contains($permission, '|')){
            $permissions = explode('|', $permission);
            $authorizeCheck = false;
            
            if(auth()->check()){
                foreach($permissions as $permissionItem){
                    if(!$authorizeCheck){
                        $authorizeCheck = auth()->user()->canSlug($permissionItem);
                    }else{
                        break;
                    }
                }
            }

            return $authorizeCheck ? $next($request) : abort(401);
        }else{
            return auth()->check() && auth()->user()->canSlug($permission) ? $next($request) : abort(401);
        }
    }
}
