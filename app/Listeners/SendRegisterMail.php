<?php

namespace App\Listeners;

use Raid\Core\Event\Events\Contracts\EventListenerInterface;
use Raid\Core\Event\Traits\Event\Lazily;
use Raid\Core\Event\Traits\Event\Queueable;

class SendRegisterMail implements EventListenerInterface
{
    use Lazily;
//    use Queueable;

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
