<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ChangePositionEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;


    public int $user_id;

    public int $roomId;
    public float $positionX;
    public float $positionY;

    public string $imagePath;

    public string $username;
    /**
     * Create a new event instance.
     */
    public function __construct($user_id, $positionX, $positionY, $imagePath, $roomId, $username)
    {
        $this->user_id = $user_id;
        $this->positionX = $positionX;
        $this->positionY = $positionY;
        $this->imagePath = $imagePath;
        $this->roomId = $roomId;
        $this->username = $username;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, Channel>
     */
    public function broadcastOn(): array
    {
        return [
            new Channel('position'),
        ];
    }

    public function broadcastWith(): array
    {
        return [
            'user_id' => $this->user_id,
            'positionX' => $this->positionX,
            'positionY' => $this->positionY,
            'imagePath' => $this->imagePath,
            'roomId' => $this->roomId,
            'name' => $this->username,
        ];
    }
}
