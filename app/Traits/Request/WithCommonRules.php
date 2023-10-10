<?php

namespace App\Traits\Request;

trait WithCommonRules
{
    /**
     * Get the common rules for the request.
     */
    public function commonRules(): array
    {
        return [
            'phone' => ['required', 'string'],
            'password' => ['required', 'string'],
        ];
    }

    /**
     * Get the common attributes for the request.
     */
    public function attributes(): array
    {
        return [
            'phone' => __('phone number'),
            'password' => __('password'),
        ];
    }
}
