<?php

namespace App\Http\Controllers\Room;

use Illuminate\Http\Request;
use App\Events\MessageSend;
use Illuminate\Support\Facades\Response;
use App\Models\ChatMessage;
use App\Http\Controllers\Controller;

class ChatController extends Controller
{
    public function index(Request $request)
    {
        $data = $request->all();
        $this->addMessageInDb($data);
        $message = $request->input('message', '');
        if (strlen($message)) {
            event(new MessageSend($message));
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
