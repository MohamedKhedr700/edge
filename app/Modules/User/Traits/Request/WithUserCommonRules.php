<?php

namespace Modules\User\Traits\Request;

use Modules\User\Utilities\UserUtility;

trait WithUserCommonRules
{
    /**
     * Define common Rules.
     */
    public function commonRules(): array
    {
        return [
            'email' => ['required', 'string', 'email', 'max:255'],
            'username' => ['required', 'string', 'min:3', 'max:255'],
            'phone' => ['required', 'string'],
            'password' => ['required', 'string'],
        ];
    }

    /**
     * Define attributes localization.
     */
    public function attributes(): array
    {
        return [
            'phone' => UserUtility::trans('user.phone'),
            'password' => UserUtility::trans('user.password'),
        ];
    }
}
