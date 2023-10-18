<?php

namespace App\Http\Requests;

use App\Traits\Request\WithCommonRules;
use Raid\Core\Request\Requests\FormRequest;

class RegisterRequest extends FormRequest
{
    use WithCommonRules;

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return $this->withCommonRules([
//            'phone' => ['unique:users,phone'],
        ]);
    }
}
