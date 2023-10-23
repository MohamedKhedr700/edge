<?php

namespace Modules\Product\Http\Transformers;

use Modules\Product\Models\Product;
use Raid\Core\Repository\Transformers\Transformer;

class ProductTransformer extends Transformer
{
    /**
     * Transform the resource into an array.
     */
    public function transform(Product $product): array
    {
        return [];
    }
}
