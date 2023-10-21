<?php

namespace Modules\Product\Http\Transformers;

use Raid\Core\Repository\Transformers\Transformer;
use Modules\Product\Models\Product;

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
