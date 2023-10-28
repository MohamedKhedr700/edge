<?php

namespace Modules\Post\Listeners;

use Modules\Post\Models\Post;
use Raid\Core\Event\Events\Contracts\EventListenerInterface;

class EmbedPostCategory implements EventListenerInterface
{
    /**
     * Handle the event listener.
     */
    public function handle(Post $post): void
    {
        $category = $post->category;

        $post->forceFillAttribute('categoryEmbedded', $category->toPostEmbedded());
    }
}
