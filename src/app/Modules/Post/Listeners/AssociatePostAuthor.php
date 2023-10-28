<?php

namespace Modules\Post\Listeners;

use Modules\Post\Models\Post;
use Raid\Core\Event\Events\Contracts\EventListenerInterface;

class AssociatePostAuthor implements EventListenerInterface
{
    /**
     * Handle the event listener.
     */
    public function handle(Post $post): void
    {
        //        $post->author()->associate($post->attribute('category_id'));
    }
}
