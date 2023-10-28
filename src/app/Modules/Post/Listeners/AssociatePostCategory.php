<?php

namespace Modules\Post\Listeners;

use Modules\Post\Models\Post;
use Raid\Core\Event\Events\Contracts\EventListenerInterface;

class AssociatePostCategory implements EventListenerInterface
{
    /**
     * Handle the event listener.
     */
    public function handle(Post $post): void
    {
        $category = $post->category;

        if (! $category) {
            return;
        }

        $post->forceFillAttribute('categoryAssociated', $category->toAssociatePost());
    }
}
