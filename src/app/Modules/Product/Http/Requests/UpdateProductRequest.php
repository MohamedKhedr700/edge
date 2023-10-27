<?php

namespace Modules\Product\Http\Requests;

use Modules\Product\Traits\Request\WithProductCommonRules;
use Raid\Core\Request\Requests\FormRequest;

class UpdateProductRequest extends FormRequest
{
    use WithProductCommonRules;

    /**
     * {@inheritdoc}
     */
    public function rules(): array
    {
        return $this->withCommonRules([
            'name' => ['sometimes'],
            'price' => ['sometimes'],
            'quantity' => ['sometimes'],
        ]);
    }
}
