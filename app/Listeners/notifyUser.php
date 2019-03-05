<?php

namespace App\Listeners;

use App\Events\sendMessage;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class notifyUser
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  sendMessage  $event
     * @return void
     */
    public function handle(sendMessage $event)
    {
        //
    }
}
