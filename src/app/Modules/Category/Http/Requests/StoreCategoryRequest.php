<?php

namespace Modules\Category\Http\Requests;

use Modules\Category\Traits\Request\WithCategoryCommonRules;
use Raid\Core\Request\Requests\FormRequest;

class StoreCategoryRequest extends FormRequest
{
    use WithCategoryCommonRules;

    /**
     * {@inheritdoc}
     */
    public function rules(): array
    {
        return $this->withCommonRules();
    }
}
