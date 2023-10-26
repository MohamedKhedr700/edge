<?php

namespace Modules\User\Services;

use Raid\Core\Auth\Models\Authentication\Contracts\AccountInterface;

class OtpService
{
    /**
     * Send OTP to the user.
     */
    public function send(AccountInterface $account)
    {
        // Send OTP to the user.
    }
}
