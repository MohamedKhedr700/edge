<?php

namespace Modules\Post\Listeners;

use Modules\Post\Models\Post;
use Raid\Core\Event\Events\Contracts\EventListenerInterface;
use Raid\Core\Event\Traits\Event\Queueable;

class AssociatePostProducts implements EventListenerInterface
{
    use Queueable;

    /**
     * Handle the event listener.
     */
    public function handle(Post $post): void
    {
        $products = $post->products;

        if (! $products) {
            return;
        }

        $productsAssociated = [];

        foreach ($products as $product) {
            $productsAssociated[] = $product->toAssociatePost();
        }

        $post->forceFillAttribute('productsAssociated', $productsAssociated);
    }
}
