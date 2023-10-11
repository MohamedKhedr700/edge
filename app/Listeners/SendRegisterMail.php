<?php

namespace App\Listeners;

use Raid\Core\Event\Events\Contracts\EventListenerInterface;

class SendRegisterMail implements EventListenerInterface
{
    /**
     * Initialize the listener.
     */
    public function init(array $data): void
    {
    }

    /**
     * Handle the listener.
     */
    public function handle(): void
    {
//        dump('send register mail');
    }
}
