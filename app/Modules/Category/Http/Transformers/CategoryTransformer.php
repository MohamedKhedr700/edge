<?php

namespace Modules\Category\Http\Transformers;

use Modules\Category\Models\Category;
use Raid\Core\Repository\Transformers\Transformer;

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
