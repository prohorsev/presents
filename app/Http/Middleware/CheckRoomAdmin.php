<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use App\Models\Room;

class CheckRoomAdmin
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
        $room = Room::query()->find($route->parameters['room']);
        if (Auth::id() != $room->admin_id) {
            return response()->view('errors.403');
        }
        return $next($request);
    }
}
