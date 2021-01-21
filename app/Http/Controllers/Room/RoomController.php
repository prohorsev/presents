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

        $this->middleware('check_room_member')->only('show');
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
        $pastRooms = [];
        foreach ($rooms as $key => $room) {
            if (strtotime($room->birthday_date) < strtotime(date('Y-m-d'))) {
                $pastRooms[] = $room;
                unset($rooms[$key]);
            }
        }
        return view('room.list', [
            'rooms' => $rooms,
            'pastRooms' => $pastRooms,
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
        dd($request);
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
        } else {
            dd('заглушка. Что-то пошло не так');
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
        $isActive = strtotime($room->birthday_date) > strtotime(date('Y-m-d'));
        $organisator = User::query()->find($room->admin_id);
//        $friends = $room->users;
        $friends = \DB::table('room_user')->where('room_id', '=', $id)
            ->join('users', 'room_user.user_id', '=', 'users.id')
            ->select('room_user.user_id', 'users.name', 'room_user.room_id', 'room_user.sum')
            ->orderByDesc('sum')->get();
        $user_sum = \DB::table('room_user')->select('sum')
            ->where('room_user.room_id', '=', $id)
            ->where('room_user.user_id', '=', \Auth::id())->get()->toArray();
        $token = (\Auth::user())->createToken(\Auth::getName())->plainTextToken;
        return view('room.show', [
            'room' => $room,
            'friends' => $friends,
            'organisator' => $organisator,
            'user_sum' => $user_sum[0]->sum,
            'isActive' => $isActive,
            'token' => $token,
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
