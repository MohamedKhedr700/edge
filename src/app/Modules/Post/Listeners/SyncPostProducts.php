<?php

namespace App\Modules\Post\Listeners;

use Modules\Post\Models\Post;
use Raid\Core\Event\Events\Contracts\EventListenerInterface;

class SyncPostProducts implements EventListenerInterface
{
    /**
     * The product ids.
     */
    private array $productIds;

    /**
     * Initialize the event listener.
     */
    public function init(array $data): void
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
        if (! isset($this->productIds)) {
            return;
        }

        $post->products()->sync($this->productIds);
    }
}
