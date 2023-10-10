<?php

namespace App\Events;

use App\Listeners\SendLoginMail;
use Raid\Core\Event\Events\Contracts\EventInterface;
use Raid\Core\Event\Events\Event;

class LoginEvent extends Event implements EventInterface
{
    /**
     * {@inheritdoc}
     */
    public const ACTION = 'login';

    /**
     * {@inheritdoc}
     */
    public const LISTENERS = [
        SendLoginMail::class,
    ];
}
