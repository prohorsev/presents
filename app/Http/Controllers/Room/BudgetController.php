<?php

namespace App\Http\Controllers\Room;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Room;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\Exception;

class BudgetController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $user = \Auth::user();
        dd($user);
        try {
            $data = $request->all();
            $user_id = $data['user_id'];
            $room = Room::query()->find($data['room_id']);
            $room->fill($data);
            $room->save();
            DB::table('room_user')->where('room_id', '=', $room->id)
                ->where('user_id', '=', $user_id)->update(['sum' => $data['user_sum']]);

            return response()->json(['answer' => 'ok']);
        } catch (\Exception $exception) {
            return response()->json(['answer' => $exception]);
        }

    }
}
