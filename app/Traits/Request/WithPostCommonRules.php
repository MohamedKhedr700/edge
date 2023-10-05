<?php

namespace App\Traits\Request;

trait WithPostCommonRules
{
    /**
     * Get the common rules for the request.
     */
    public function commonRules(): array
    {
        return [];
    }

    /**
     * Get the common attributes for the request.
     */
    public function attributes(): array
    {
        return [];
    }
}
