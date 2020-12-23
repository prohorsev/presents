<?php

namespace App\Http\Controllers\Room;

use App\Http\Controllers\Controller;
use App\Room;
use Illuminate\Http\Request;

class InviteController extends Controller
{
    public function invite($id)
    {
        $room = Room::query()->find($id);
        if ($room) {
            $userOrg = \DB::table('rooms')
                ->join('users', 'users.id', '=', 'rooms.org_user_id')
                ->select('users.name')
                ->where('rooms.id', '=', $id)
                ->first();
            session(['invite' => url()->current()]);
            return view('room.invite', [
                'room' => $room,
                'userOrg' => $userOrg,
            ]);
        } else {
            return redirect()->route('home');
        }

    }
}
