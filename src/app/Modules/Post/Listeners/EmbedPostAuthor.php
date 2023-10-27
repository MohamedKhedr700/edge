<?php

namespace Modules\Post\Listeners;

use Modules\Post\Models\Post;
use Raid\Core\Event\Events\Contracts\EventListenerInterface;

class EmbedPostAuthor implements EventListenerInterface
{
    /**
     * Handle the event listener.
     */
    public function handle(Post $post): void
    {
        dd($post);

        //        $post->author()->associate($post->attribute('category_id'));
    }
}
