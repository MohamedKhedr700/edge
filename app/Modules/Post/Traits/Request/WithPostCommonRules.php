<?php

namespace Modules\Post\Traits\Request;

use Modules\Post\Utilities\PostUtility;

trait WithPostCommonRules
{
    /**
     * Define common Rules.
     */
    public function commonRules(): array
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'content' => ['required', 'string', 'max:65535'],
            'category_id' => ['required', 'string', 'exists:categories,id'],
        ];
    }

    /**
     * Define attributes localization.
     */
    public function attributes(): array
    {
        return [
            'title' => PostUtility::trans('post.attributes.title'),
            'content' => PostUtility::trans('post.attributes.content'),
            'category_id' => PostUtility::trans('post.attributes.category_id'),
        ];
    }
}
