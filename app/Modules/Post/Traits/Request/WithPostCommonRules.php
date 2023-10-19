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
        ];
    }
}
