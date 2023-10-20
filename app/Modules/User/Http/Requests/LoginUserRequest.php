<?php

namespace Modules\User\Http\Requests;

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
        return [
            'email' => ['nullable', 'string', 'email', 'max:255'],
            'phone' => ['nullable', 'string', 'max:255'],
            'username' => ['nullable', 'string', 'min:3', 'max:255'],
            'password' => ['nullable', 'string', 'min:6', 'max:255'],
        ];
    }
}
