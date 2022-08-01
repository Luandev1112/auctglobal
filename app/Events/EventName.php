<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class EventName implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    

    public $power;

    public function __construct($data)
    {

        // dd("ladkfjlsdfk");
        /* $this->data = array(
            'power'=> '10'
        );*/
        $this->power = $data;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        // return new PrivateChannel('channel-name');
        return ['test-channel'];
    }



     /**
     * Get the data to broadcast.
     *
     * @author Author
     *
     * @return array
     */
    public function broadcastWith()
    {
        return [
            'power' => $this->power
        ];
    }
}
