<?php

namespace Modules\User\Http\Requests;

use Modules\User\Traits\Request\WithUserCommonRules;
use Raid\Core\Request\Requests\FormRequest;

class UpdateUserRequest extends FormRequest
{
    use WithUserCommonRules;

    /**
     * {@inheritdoc}
     */
    public function rules(): array
    {
        return $this->withCommonRules();
    }
}
