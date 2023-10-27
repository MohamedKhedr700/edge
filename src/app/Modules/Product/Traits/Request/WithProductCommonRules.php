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
        ];
    }
}
