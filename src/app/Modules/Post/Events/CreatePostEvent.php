<?php

namespace Modules\Post\Events;

use App\Modules\Post\Listeners\SyncPostProducts;
use Modules\Post\Listeners\AssociatePostAuthor;
use Modules\Post\Listeners\AssociatePostCategory;
use Modules\Post\Listeners\AssociatePostProducts;
use Raid\Core\Enum\Enums\Action;
use Raid\Core\Event\Events\Contracts\EventInterface;
use Raid\Core\Event\Events\Event;

class CreatePostEvent extends Event implements EventInterface
{
    /**
     * {@inheritdoc}
     */
    public const ACTION = Action::CREATE;

    /**
     * {@inheritdoc}
     */
    public const LISTENERS = [
        AssociatePostAuthor::class,
        AssociatePostCategory::class,
        SyncPostProducts::class,
        AssociatePostProducts::class,
    ];
}
