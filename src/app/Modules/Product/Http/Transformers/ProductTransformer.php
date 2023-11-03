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
        return [
            'id' => $product->attribute('id'),
            'name' => $product->attribute('name'),
            'description' => $product->attribute('description'),
            'price' => $product->attribute('price'),
            'quantity' => $product->attribute('quantity'),
            'createdAt' => $product->getAttribute('created_at')->toIsoString(),
        ];
    }
}
