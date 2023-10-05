<?php

namespace App\Http\Requests;

use Raid\Core\Request\Requests\FormRequest;

class CreatePostRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [];
    }
}
