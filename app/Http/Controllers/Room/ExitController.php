<?php

namespace App\Http\Controllers\Room;

use App\Http\Controllers\Controller;
use App\Models\Room;
use Illuminate\Http\Request;

class ExitController extends Controller
{
    public function index(Room $room)
    {
        \DB::table('room_user')->where('room_id', $room->id)->where('user_id', \Auth::id())->delete();
        return redirect()->route('home');
    }
}
