<?php

namespace Modules\Post\Events;

use Modules\Post\Listeners\AssociatePostAuthor;
use Modules\Post\Listeners\AssociatePostCategory;
use Modules\Post\Listeners\AssociatePostProducts;
use Raid\Core\Enum\Enums\Action;
use Raid\Core\Event\Events\Contracts\EventInterface;
use Raid\Core\Event\Events\Event;

class UpdatePostEvent extends Event implements EventInterface
{
    /**
     * {@inheritdoc}
     */
    public const ACTION = Action::UPDATE;

    /**
     * {@inheritdoc}
     */
    public const LISTENERS = [
        AssociatePostAuthor::class,
        AssociatePostCategory::class,
        AssociatePostProducts::class,
    ];
}
