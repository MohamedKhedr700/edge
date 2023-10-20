<?php

namespace Modules\Category\Traits\Request;

trait WithCategoryCommonRules
{
    /**
     * Define common Rules.
     */
    public function commonRules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'slug' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
        ];
    }

    /**
     * Define attributes localization.
     */
    public function attributes(): array
    {
        return [];
    }
}
