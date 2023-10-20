<?php

namespace Modules\Category\Http\Transformers;

use Raid\Core\Controller\Transformers\Transformer;
use Modules\Category\Models\Category;

class CategoryTransformer extends Transformer
{
    /**
     * Transform the resource into an array.
     */
    public function transform(Category $category): array
    {
        return [];
    }
}
