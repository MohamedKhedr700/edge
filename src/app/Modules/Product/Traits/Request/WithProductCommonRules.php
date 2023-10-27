<?php

namespace Modules\Product\Traits\Request;

use Modules\Product\Utilities\ProductUtility;

trait WithProductCommonRules
{
    /**
     * Define common Rules.
     */
    public function commonRules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string', 'max:65535'],
            'price' => ['required', 'numeric', 'gte:0'],
            'quantity' => ['required', 'numeric', 'gt:0'],
        ];
    }

    /**
     * Define attributes localization.
     */
    public function attributes(): array
    {
        return [
            'name' => ProductUtility::trans('product.attributes.name'),
            'description' => ProductUtility::trans('product.attributes.description'),
            'price' => ProductUtility::trans('product.attributes.price'),
            'quantity' => ProductUtility::trans('product.attributes.quantity'),
        ];
    }
}
