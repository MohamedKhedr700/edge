<?php

namespace App\Modules\Admin\Http\Requests;

use Modules\Admin\Traits\Request\WithAdminCommonRules;
use Raid\Core\Request\Requests\FormRequest;

class LoginAdminRequest extends FormRequest
{
    use WithAdminCommonRules;

    /**
     * {@inheritdoc}
     */
    public function rules(): array
    {
        return [
            'email' => ['required', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
        ];
    }
}
