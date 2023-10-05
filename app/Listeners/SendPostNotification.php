<?php

namespace App\Listeners;

use Raid\Core\Event\Events\Contracts\EventListenerInterface;

class SendPostNotification implements EventListenerInterface
{
    /**
     * Initialize the listener.
     */
    public function init(): void
    {
    }

    /**
     * Handle the listener.
     */
    public function handle(): void
    {
        dump('SendPostNotification');
    }
}
