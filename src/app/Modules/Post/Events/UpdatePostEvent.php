<?php

namespace App\Modules\Post\Events;

use App\Modules\Post\Listeners\EmbedPostAuthor;
use App\Modules\Post\Listeners\EmbedPostCategory;
use App\Modules\Post\Listeners\EmbedPostProducts;
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
