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
            'categoryId' => ['required', 'string', 'exists:categories,id'],
            'productIds' => ['nullable', 'array'],
            'productIds.*' => ['required_with:productIds', 'string', 'exists:products,id'],
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
            'categoryId' => PostUtility::trans('post.attributes.category_id'),
            'productIds' => PostUtility::trans('post.attributes.product_ids'),
            'productIds.*' => PostUtility::trans('post.attributes.product_ids'),
        ];
    }
}
