<?php

namespace Modules\User\Http\Requests;

use Raid\Core\Request\Requests\FormRequest;
use Raid\Core\Request\Traits\Request\WithPaginationCommonRules;

class ListUserRequest extends FormRequest
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
