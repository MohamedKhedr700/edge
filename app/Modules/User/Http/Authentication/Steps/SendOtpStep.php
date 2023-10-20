<?php

namespace Modules\User\Http\Authentication\Steps;

use Modules\User\Services\OtpService;
use Exception;
use Raid\Core\Auth\Authentication\Contracts\AuthChannelInterface;
use Raid\Core\Auth\Authentication\Contracts\AuthStepInterface;

class SendOtpStep implements AuthStepInterface
{
    /**
     * Otp service.
     */
    protected OtpService $otpService;

    /**
     * Otp service.
     */
    public function __construct(OtpService $otpService)
    {
        $this->otpService = $otpService;
    }

    /**
     * Run an authentication step.
     */
    public function step(AuthChannelInterface $authChannel): void
    {
        try {

            $this->otpService->send($authChannel->account());

        } catch (Exception $exception) {
            $authChannel->errors()->add('error', $exception->getMessage());
        }
    }
}
