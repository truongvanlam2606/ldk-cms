<?php

namespace Modules\Admin\Events;

use Illuminate\Queue\SerializesModels;

class AdminWasDeleted
{
    use SerializesModels;
    
    public $admin;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($admin)
    {
        //
        $this->admin = $admin;
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return [];
    }
}
