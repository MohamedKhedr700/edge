<?php

namespace Modules\Post\Http\Requests;

use Raid\Core\Request\Requests\FormRequest;
use Raid\Core\Request\Traits\Request\WithPaginationCommonRules;

class ListPostRequest extends FormRequest
{
    use WithPaginationCommonRules;

    /**
     * {@inheritdoc}
     */
    public function rules(): array
    {
        return $this->withCommonRules();
    }
}
