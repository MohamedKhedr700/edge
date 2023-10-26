<?php

namespace Modules\Product\Http\Requests;

use Modules\Product\Traits\Request\WithProductCommonRules;
use Raid\Core\Request\Requests\FormRequest;

class StoreProductRequest extends FormRequest
{
    use WithProductCommonRules;

    /**
     * {@inheritdoc}
     */
    public function rules(): array
    {
        return $this->withCommonRules();
    }
}
