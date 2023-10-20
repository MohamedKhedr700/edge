<?php

namespace Modules\Admin\Traits\Request;

trait WithAdminCommonRules
{
    /**
     * Define common Rules.
     */
    public function commonRules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
        ];
    }

    /**
     * Define attributes localization.
     */
    public function attributes(): array
    {
        return [];
    }
}
