<?php

namespace Modules\Post\Events;

use Modules\Post\Listeners\EmbedPostAuthor;
use Modules\Post\Listeners\EmbedPostCategory;
use Modules\Post\Listeners\EmbedPostProducts;
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
        EmbedPostAuthor::class,
        EmbedPostCategory::class,
        EmbedPostProducts::class,
    ];
}
