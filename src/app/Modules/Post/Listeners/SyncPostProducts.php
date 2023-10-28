<?php

namespace App\Modules\Post\Listeners;

use Modules\Post\Models\Post;
use Raid\Core\Event\Events\Contracts\EventListenerInterface;

class SyncPostProducts implements EventListenerInterface
{
    /**
     * The product ids.
     */
    private array $productIds = [];

    /**
     * {@inheritdoc}
     */
    public function init(array $data)
    {
        if (! array_key_exists('productIds', $data)) {
            return;
        }

        $this->productIds = $data['productIds'];
    }

    /**
     * Handle the event listener.
     */
    public function handle(Post $post): void
    {
        $post->products()->sync($this->productIds);
    }
}
