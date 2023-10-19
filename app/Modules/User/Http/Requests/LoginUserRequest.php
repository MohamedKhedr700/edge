<?php

namespace App\Modules\User\Http\Requests;

use Modules\User\Traits\Request\WithUserCommonRules;
use Raid\Core\Request\Requests\FormRequest;

class LoginUserRequest extends FormRequest
{
    use WithUserCommonRules;

    /**
     * {@inheritdoc}
     */
    public function rules(): array
    {
        return $this->withCommonRules([
            'phone' => ['required', 'string'],
            'password' => ['required', 'string'],
        ]);
    }
}
