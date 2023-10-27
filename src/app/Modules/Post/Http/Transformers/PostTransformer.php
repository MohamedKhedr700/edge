<?php

namespace Modules\Post\Http\Transformers;

use Modules\Post\Models\Post;
use Raid\Core\Repository\Transformers\Transformer;

class PostTransformer extends Transformer
{
    /**
     * {@inheritdoc}
     */
    protected array $defaultIncludes = [
        'author', 'category', 'products',
    ];

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

    /**
     * Include author.
     */
    public function includeAuthor(Post $post)
    {
        dd($post);
        return $this->item($post->author, new UserTransformer);
    }

    /**
     * Include category.
     */
    public function includeCategory(Post $post)
    {
        dd($post);
        return $this->item($post->category, new CategoryTransformer);
    }

    /**
     * Include products.
     */
    public function includeProducts(Post $post)
    {
        dd($post);
        return $this->collection($post->products, new ProductTransformer);
    }
}
