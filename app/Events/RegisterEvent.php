<?php

namespace App\Events;

use App\Listeners\SendRegisterMail;
use Raid\Core\Event\Events\Contracts\EventInterface;
use Raid\Core\Event\Events\Event;

class RegisterEvent extends Event implements EventInterface
{
    /**
     * {@inheritdoc}
     */
    public const ACTION = 'register';

    /**
     * {@inheritdoc}
     */
    public const LISTENERS = [
        SendRegisterMail::class,
    ];
}
