<?php

namespace App\Http\Controllers\Room;

use App\Http\Controllers\Controller;
use App\Models\Room;
use App\Models\User;

class InviteController extends Controller
{
    public function invite($id)
    {
        $room = Room::query()->find($id);
        if ($room) {
            $userOrg = User::query()->find($room->admin_id);
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
