<?php

namespace App\Modules\Core\Authentication\Channels;

use App\Modules\Core\Authentication\Rules\VerifiedPhoneAuthRule;
use App\Modules\Core\Authentication\Steps\SendOtpAuthStep;
use App\Modules\Core\Authentication\Workers\PhoneAuthWorker;
use Raid\Core\Auth\Authentication\AuthChannel;
use Raid\Core\Auth\Authentication\Contracts\AuthChannelInterface;

class OtpAuthChannel extends AuthChannel implements AuthChannelInterface
{
    /**
     * {@inheritdoc}
     */
    public const CHANNEL = 'otp';

    /**
     * Get authentication workers.
     */
    public function workers(): array
    {
        return [
            PhoneAuthWorker::class,
        ];
    }

    /**
     * Get authentication rules.
     */
    public function rules(): array
    {
        return [
            VerifiedPhoneAuthRule::class,
        ];
    }

    /**
     * Get authentication steps.
     */
    public function steps(): array
    {
        return [
            SendOtpAuthStep::class,
        ];
    }
}
