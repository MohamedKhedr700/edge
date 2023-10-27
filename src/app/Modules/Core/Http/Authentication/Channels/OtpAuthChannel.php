<?php

namespace Modules\Core\Http\Authentication\Channels;

use Modules\Core\Http\Authentication\Enums\Channel;
use Modules\Core\Http\Authentication\Rules\VerifiedPhoneAuthRule;
use Modules\Core\Http\Authentication\Steps\SendOtpAuthStep;
use Raid\Core\Auth\Authentication\AuthChannel;
use Raid\Core\Auth\Authentication\Contracts\AuthChannelInterface;
use Raid\Core\Auth\Authentication\Workers\EmailAuthWorker;
use Raid\Core\Auth\Authentication\Workers\PhoneAuthWorker;
use Raid\Core\Auth\Authentication\Workers\UsernameAuthWorker;

class OtpAuthChannel extends AuthChannel implements AuthChannelInterface
{
    /**
     * {@inheritdoc}
     */
    public const CHANNEL = Channel::OTP;

    /**
     * Get authentication workers.
     */
    public function workers(): array
    {
        return [
            EmailAuthWorker::class,
            PhoneAuthWorker::class,
            UsernameAuthWorker::class,
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
