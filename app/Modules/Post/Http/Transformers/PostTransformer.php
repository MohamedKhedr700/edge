<?php

namespace Modules\Post\Http\Transformers;

use Modules\Post\Models\Post;
use Raid\Core\Repository\Transformers\Transformer;

class PostTransformer extends Transformer
{
    /**
     * Transform the resource into an array.
     */
    public function transform(Post $post): array
    {
        return [
            'id' => $post->attribute('id'),
            'title' => $post->attribute('title'),
            'content' => $post->attribute('content'),
        ];
    }
}
