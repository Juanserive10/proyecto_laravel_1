<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Author;

class Example
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response{
        $cant_user = Author::count();
        if($cant_user > 5){
            return $next($request);
        }else{
            return abort(403);
        }

    }
}
