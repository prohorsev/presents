<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\MessageSend;
use App\Models\ChatMessage;

class ChatController extends Controller
{
    public function index(Request $request)
    {
        $data = $request->all();
//        $room_id = $request->room_id;
//        $user_id = $request->user_id;
        $this->addMessageInDb($data);
        $message = $request->input('message', '');
        if (strlen($message)) {
            event(new MessageSend($data));
        }
    }

    public function all(Request $request) {
        $room_id = $request->id;
        $messages = ChatMessage::query()->where('room_id', '=', $room_id)
            ->join('users', 'chat_messages.user_id', '=', 'users.id')
            ->select('chat_messages.*', 'users.name')->get()->toArray();
        return response()->json(['messages' => $messages]);
    }

    private function addMessageInDb($message) {
        $chatMessage = new ChatMessage();
        $chatMessage->fill($message);
        $chatMessage->save();
    }
}
