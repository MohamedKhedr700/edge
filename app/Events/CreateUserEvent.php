<?php

namespace App\Events;

use App\Listeners\SendUserMail;
use Raid\Core\Event\Events\Contracts\EventInterface;
use Raid\Core\Event\Events\Event;

class CreateUserEvent extends Event implements EventInterface
{
    /**
     * {@inheritdoc}
     */
    public const ACTION = 'create';

    /**
     * {@inheritdoc}
     */
    public const LISTENERS = [
        SendUserMail::class,
    ];
}
