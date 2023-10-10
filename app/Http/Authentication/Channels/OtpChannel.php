<?php

namespace App\Http\Authentication\Channels;

use App\Http\Authentication\Rules\VerifiedPhoneRule;
use App\Http\Authentication\Steps\SendOtpStep;
use App\Http\Authentication\Workers\PhoneWorker;
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
