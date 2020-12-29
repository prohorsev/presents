<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class MessageSend implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $message;
    public $room_id;
    public $user_id;
    public function __construct(array $data)
    {
        $this->message = $data['message'];
        $this->room_id = $data['room_id'];
        $this->user_id = $data['user_id'];
    }
    public function broadcastOn()
    {
        return new PrivateChannel('presents-'.$this->room_id);
    }
}
