<?php

namespace App\Http\Controllers\Room;

use App\Http\Controllers\Controller;
use App\Models\Room;

class JoinController extends Controller
{
    public function index($id)
    {
        $room = Room::query()->find($id);
        if ($room) {
            \DB::table('room_user')->insert([
                'room_id' => $id,
                'user_id' => \Auth::id()
            ]);
            return redirect()->route('room.show', $id);
        }

    }
}
