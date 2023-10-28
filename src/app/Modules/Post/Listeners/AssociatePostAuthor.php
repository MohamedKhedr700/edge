<?php

namespace Modules\Post\Listeners;

use Modules\Post\Models\Post;
use Raid\Core\Event\Events\Contracts\EventListenerInterface;
use Raid\Core\Event\Traits\Event\Queueable;

class AssociatePostAuthor implements EventListenerInterface
{
    use Queueable;

    /**
     * Handle the event listener.
     */
    public function handle(Post $post): void
    {
        $author = $post->author;

        if (! $author) {
            return;
        }

        $post->forceFillAttribute('authorAssociated', $author->toAssociatePost());
    }
}
