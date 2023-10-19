<?php

namespace Modules\Post\Http\Requests;

use Modules\Post\Traits\Request\WithPostCommonRules;
use Raid\Core\Request\Requests\FormRequest;

class StorePostRequest extends FormRequest
{
    use WithPostCommonRules;

    /**
     * {@inheritdoc}
     */
    public function rules(): array
    {
        return $this->withCommonRules();
    }
}
