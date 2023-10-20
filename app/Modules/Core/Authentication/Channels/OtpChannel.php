<?php

namespace App\Modules\Core\Authentication\Channels;

use App\Modules\Core\Authentication\Rules\VerifiedPhoneRule;
use App\Modules\Core\Authentication\Steps\SendOtpStep;
use App\Modules\Core\Authentication\Workers\PhoneWorker;
use Raid\Core\Auth\Authentication\AuthChannel;
use Raid\Core\Auth\Authentication\Contracts\AuthChannelInterface;

class OtpChannel extends AuthChannel implements AuthChannelInterface
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
            PhoneWorker::class,
        ];
    }

    /**
     * Get authentication rules.
     */
    public function rules(): array
    {
        return [
            VerifiedPhoneRule::class,
        ];
    }

    /**
     * Get authentication steps.
     */
    public function steps(): array
    {
        return [
            SendOtpStep::class,
        ];
    }
}
