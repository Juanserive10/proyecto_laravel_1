<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;


class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$roles): Response
    {   
        $user = Auth()->user();
        if(!in_array($user->role->name, $roles)){
            abort(403, 'Unauthorized');
        }
        return $next($request);
    }
}
