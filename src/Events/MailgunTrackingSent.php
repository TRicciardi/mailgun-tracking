<?php

namespace tricciardi\LaravelMultibanco\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
Use tricciardi\LaravelMultibanco\Reference;

class MailgunTrackingSent
{
    use InteractsWithSockets, SerializesModels;

    public $foreign_id;
    public $value;
    /**
     * Create a new event instance.
     *
     * @return void
     */
     public function __construct($message_id)
     {
         $this->foreign_id = $foreign_id;
         $this->value = $value;
     }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
