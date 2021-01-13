<?php

namespace App\Http\Controllers\Room;

use App\Http\Controllers\Controller;
use App\Models\Room;
use App\Models\User;
use Illuminate\Http\Request;

class RoomController extends Controller
{

    public function __construct()
    {
        $this->middleware('check_room_admin')->except([
            'index',
            'create',
            'store',
            'show',
        ]);
    }
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
        $data['admin_id'] = \Auth::id();
        $room = new Room();

        $this->validate($request, Room::rules($room), Room::messages());

        $result = $room->fill($data)->save();

        if ($result) {
            \DB::table('room_user')->insert([
               'room_id' => $room->id,
               'user_id' => \Auth::id(),
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
        $organisator = User::query()->find($room->admin_id);
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
        $this->validate($request, Room::rules($room), Room::messages());
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
