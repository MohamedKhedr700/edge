<?php

namespace App\Modules\User\Events;

use App\Modules\User\Listeners\SendRegisterEmail;
use Raid\Core\Enum\Enums\Action;
use Raid\Core\Event\Events\Contracts\EventInterface;
use Raid\Core\Event\Events\Event;

class RegisterUserEvent extends Event implements EventInterface
{
    /**
     * {@inheritdoc}
     */
    public const ACTION = Action::REGISTER;

    /**
     * {@inheritdoc}
     */
    public const LISTENERS = [
        SendRegisterEmail::class,
    ];
}
