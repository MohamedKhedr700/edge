<?php

namespace Modules\Core\Http\Authentication\Enums;

use Raid\Core\Auth\Models\Authentication\Enums\Channel as RaidChannel;

class Channel extends RaidChannel
{
    /**
     * One time password channel.
     */
    public const OTP = 'otp';

    /**
     * Two factor authentication channel.
     */
    public const TWO_FACTOR = 'twoFactor';
}
