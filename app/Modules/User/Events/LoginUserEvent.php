<?php

namespace Modules\User\Events;

use Modules\User\Listeners\UpdateLastLoginData;
use Raid\Core\Enum\Enums\Action;
use Raid\Core\Event\Events\Contracts\EventInterface;
use Raid\Core\Event\Events\Event;

class LoginUserEvent extends Event implements EventInterface
{
    /**
     * {@inheritdoc}
     */
    public const ACTION = Action::LOGIN;

    /**
     * {@inheritdoc}
     */
    public const LISTENERS = [
        UpdateLastLoginData::class,
    ];
}
