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
            $userOrg = \DB::table('room_user')
                ->join('users', 'users.id', '=', 'room_user.user_id')
                ->select('users.name')
                ->where('room_user.room_id', '=', $id)
                ->where('room_user.is_admin', '=', 1)
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
