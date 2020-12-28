<?php

namespace App\Http\Controllers\Room;

use App\Http\Controllers\Controller;
use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = \Auth::user();
        $rooms = $user->rooms;
        return view('room.list', [
            'rooms' => $rooms
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('room.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except('_token');
        $room = new Room();

        $result = $room->fill($data)->save();

        if ($result) {
            \DB::table('room_user')->insert([
               'room_id' => $room->id,
               'user_id' => \Auth::id(),
               'is_admin' => 1
            ]);
            return redirect()->route('room.show', ['room' => $room]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $room = Room::query()->find($id);
        if (empty($room)) {
            return redirect()->route('home');
        }
        $organisator = \DB::table('room_user')
            ->join('users', 'users.id', '=', 'room_user.user_id')
            ->select('name')
            ->where('room_user.room_id', '=', $id)
            ->where('is_admin', '=', 1)
            ->first();
        $friends = $room->users;
        return view('room.show', [
            'room' => $room,
            'friends' => $friends,
            'organisator' => $organisator,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $room = Room::query()->find($id);
        return view('room.edit', [
            'room' => $room
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param Room $room
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Room $room)
    {
        $data = $request->except(['_token', '_method']);
        $room->fill($data)->save();
        return redirect()->route('room.show', $room);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Room $room
     * @return \Illuminate\Http\Response
     */
    public function destroy(Room $room)
    {
        \DB::table('room_user')->where('room_id', '=', $room->id)->delete();
        $room->delete();
        return redirect()->route('home');
    }
}
