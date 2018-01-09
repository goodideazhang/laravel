<?php

namespace App\Events;

use App\Http\Models\CategoryModel;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class GetCategory
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $category;
    /**
     * Create a new event instance.
     * 事件
     * @return void
     */
    public function __construct(CategoryModel $category)
    {
        $this->category=$category;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
