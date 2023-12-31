<?php

namespace App\Http\Authentication\Rules;

use Raid\Core\Auth\Authentication\Contracts\AuthChannelInterface;
use Raid\Core\Auth\Authentication\Contracts\AuthRuleInterface;

class VerifiedPhoneRule implements AuthRuleInterface
{
    /**
     * Run an authentication ruler.
     */
    public function rule(AuthChannelInterface $authChannel): bool
    {
        if ($authChannel->account()->verifiedPhone()) {
            return true;
        }

        $authChannel->errors()->add('phone', __('Phone number is not verified.'));

        return false;
    }
}
