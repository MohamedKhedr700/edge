<?php

namespace Modules\User\Services;

use Raid\Core\Auth\Models\Authentication\Contracts\AccountInterface;

class MailService
{
    /**
     * Send email.
     */
    public function send(AccountInterface $account)
    {
        // Send email to the account.
    }
}
