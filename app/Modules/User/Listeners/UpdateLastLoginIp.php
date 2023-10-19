<?php

namespace App\Modules\User\Listeners;

use Raid\Core\Auth\Authentication\Contracts\AuthChannelInterface;
use Raid\Core\Event\Events\Contracts\EventListenerInterface;

class UpdateLastLoginIp implements EventListenerInterface
{
    /**
     * Handle the listener.
     */
    public function handle(AuthChannelInterface $authChannel): void
    {
        $account = $authChannel->account();

        dd($account);
    }
}
