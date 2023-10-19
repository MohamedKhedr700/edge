<?php

namespace App\Modules\User\Http\Requests;

use Modules\User\Traits\Request\WithUserCommonRules;
use Raid\Core\Request\Requests\FormRequest;

class RegisterUserRequest extends FormRequest
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
