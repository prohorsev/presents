<?php

namespace App\Http\Middleware;

use Closure;

class Room
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $route = $request->route();
        $method = $route->getActionMethod();
        $parameters = $route->parameters;
        $userRooms = $request->user()->rooms;
        if (in_array($method, ['show', 'edit']) && !$userRooms->contains('id', $parameters['room'])) {
            abort(404);
        }
        if (in_array($method, ['update', 'destroy']) && !$userRooms->contains('id', $parameters['room']->getKey())){
            abort(404);
        }

        return $next($request);
    }
}
