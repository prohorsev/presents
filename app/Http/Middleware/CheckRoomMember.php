<?php

namespace App\Http\Middleware;

use App\Models\Room;
use Auth;
use Closure;

class CheckRoomMember
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

        if (!$room->users->contains(Auth::id())) {
            return response()->view('errors.403');
        }
        return $next($request);
    }
}
