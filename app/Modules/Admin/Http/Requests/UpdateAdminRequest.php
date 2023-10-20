<?php

namespace Modules\Admin\Http\Requests;

use Modules\Admin\Traits\Request\WithAdminCommonRules;
use Raid\Core\Request\Requests\FormRequest;

class UpdateAdminRequest extends FormRequest
{
    use WithAdminCommonRules;

    /**
     * {@inheritdoc}
     */
    public function rules(): array
    {
        return $this->withCommonRules();
    }
}
