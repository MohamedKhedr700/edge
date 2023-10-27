<?php

namespace Modules\Post\Listeners;

use Modules\Post\Models\Post;
use Raid\Core\Event\Events\Contracts\EventListenerInterface;

class EmbedPostProducts implements EventListenerInterface
{
    /**
     * Handle the event listener.
     */
    public function handle(Post $post): void
    {
        dd($post);

        //        $post->products()->create($post->attribute('product_ids'));
    }
}
