<?php

namespace Modules\Category\Http\Requests;

use Modules\Category\Traits\Request\WithCategoryCommonRules;
use Raid\Core\Request\Requests\FormRequest;

class UpdateCategoryRequest extends FormRequest
{
    use WithCategoryCommonRules;

    /**
     * {@inheritdoc}
     */
    public function rules(): array
    {
        return $this->withCommonRules([
            'name' => ['sometimes'],
        ]);
    }
}
