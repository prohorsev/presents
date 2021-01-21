<?php

namespace App\Http\Controllers\Room;

use Illuminate\Http\Request;
use App\Events\MessageSend;
use App\Models\ChatMessage;
use App\Http\Controllers\Controller;

class ChatController extends Controller
{
    public function index(Request $request)
    {
        $data = $request->all();
        try {
            $message = $request->input('message', '');
            if (strlen($message)) {
                $this->saveMessage($data);
                event(new MessageSend($data));
            }
            return response()->json(['answer' => 'ok']);
        }catch (\Exception $exception) {
            return response()->json(['answer' => $exception]);
        }

    }

    public function all(Request $request) {
        $room_id = $request->id;
        try {
            $messages = ChatMessage::query()->where('room_id', '=', $room_id)
                ->join('users', 'chat_messages.user_id', '=', 'users.id')
                ->select('chat_messages.*', 'users.name')->limit(300)->get()->toArray();
            return response()->json(['messages' => $messages]);
        }catch (\Exception $exception) {
            return response()->json(['answer' => $exception]);
        }

    }

    private function saveMessage($message) {
        $chatMessage = new ChatMessage();
        $chatMessage->fill($message);
        $chatMessage->user_id = \Auth::id();
        $chatMessage->save();
    }

}
