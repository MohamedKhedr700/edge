<?php

namespace Modules\Post\Http\Transformers;

use Raid\Core\Repository\Transformers\Transformer;
use Modules\Post\Models\Post;

class PostTransformer extends Transformer
{
    /**
     * Transform the resource into an array.
     */
    public function transform(Post $post): array
    {
        return [];
    }
}
