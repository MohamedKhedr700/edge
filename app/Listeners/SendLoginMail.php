<?php

namespace App\Listeners;

use Raid\Core\Event\Events\Contracts\EventListenerInterface;

class SendLoginMail implements EventListenerInterface
{
    /**
     * Initialize the listener.
     */
    public function init(array $credentials): void
    {
    }

    /**
     * Handle the listener.
     */
    public function handle(): void
    {
        //        dump('send login mail');
    }
}
