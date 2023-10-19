<?php

namespace App\Modules\User\Events;

use App\Modules\User\Listeners\UpdateLastLoginIp;
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
        UpdateLastLoginIp::class,
    ];
}
