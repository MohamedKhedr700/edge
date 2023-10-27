<?php

namespace Modules\Category\Traits\Request;

use Modules\Category\Utilities\CategoryUtility;

trait WithCategoryCommonRules
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
            'name' => CategoryUtility::trans('category.attributes.name'),
            'description' => CategoryUtility::trans('category.attributes.description'),
        ];
    }
}
