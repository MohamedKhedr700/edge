<?php

namespace App\Events;

use App\Listeners\SendPostEmail;
use App\Listeners\SendPostNotification;
use App\Listeners\UpdatePostAuthor;
use Raid\Core\Event\Events\Contracts\EventInterface;
use Raid\Core\Event\Events\Event;

class CreatePostEvent extends Event implements EventInterface
{
    /**
     * {@inheritdoc}
     */
    public const ACTION = 'create';

    /**
     * {@inheritdoc}
     */
    public const LISTENERS = [
        SendPostEmail::class,
        SendPostNotification::class,
        UpdatePostAuthor::class
    ];
}
